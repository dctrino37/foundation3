<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\user_detail;
use Hash;
use Auth;
use App\Mail\git_mail;
use Mail;
use Image;

class generalcontroller extends Controller
{
    public function __construct(User $user, user_detail $user_detail)
    {
        $this->user_detail = $user_detail;
        $this->user = $user;
    }
    public function signup(Request $request)
    {

        $request = json_decode($request->data);

        $name = $request->name;
        $email = $request->email;
        $mobile = $request->mobile;
        $password = $request->password;
        $company_id = $request->company_id;
        $device_type = $request->device_type;
        $device_token = $request->device_token;

        if (
            !empty($name) && !empty($email) && !empty($mobile) && !empty($password) && !empty($company_id)
            && !empty($device_type) && !empty($device_token)
        ) {


            $mobile_check = $this->user->check_mobile($mobile);
            if ($mobile_check) {
                $return = array("result" => "Mobile Number Is Pre Registered", "data" => [], "status_code" => 204);
                exit(json_encode($return));
            } else {
                $email_check = $this->user->check_email($email);
                if ($email_check) {
                    $return = array("result" => "Email Is Pre Registered Please Login", "data" => [], "status_code" => 204);
                    exit(json_encode($return));
                } else {

                    $data = [
                        'name' => $name,
                        'email' => $email,
                        'mobile' => $mobile,
                        'password' => Hash::make($password),
                        'company_id' => $company_id,
                        'device_type' => $device_type,
                        'device_token' => $device_token,
                    ];

                    $id = User::insertGetId($data);
                    $data = User::find($id);
                    $return = array("result" => "Signup Successfully", "data" => $data, "status_code" => 200);
                    // $return = array(
                    //     'name' => $name, 'email' => $email, 'mobile' => $mobile, 'password' => Hash::make($password), 'company_id' => $company_id, 'device_type' => $device_type,
                    //     'device_token' => $device_token
                    // );
                    // exit(json_encode($return));
                    exit(encryptData(json_encode($return)));
                }
            }
        } else {
            $return = array("result" => "Some Field Missing", "data" => [], "status_code" => 204);
            exit(json_encode($return));
        }
    }

    public function signin(Request $request)
    {
        $login_type = $request->login_type;
        $device_type = $request->device_type;
        $device_token = $request->device_token;
        if ($login_type == 1) {
            $email = $request->email;
            $password = $request->password;

            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                $auth_data = [
                    'email' => $email,
                    'password' => $password
                ];

                if (Auth::attempt($auth_data)) {
                    $user_data = $this->user->find_user_by_email($email);

                    $update_data = [
                        'device_type' => $device_type,
                        'device_token' => $device_token
                    ];
                    User::where('id', $user_data->id)->update($update_data);

                    $user_data = User::find($user_data->id);

                    $return = array("result" => "Signin Successfull", "data" => $user_data, "status_code" => 204);
                    exit(json_encode($return));
                } else {
                    $return = array("result" => "Email Or Password Not Matched", "data" => [], "status_code" => 204);
                    exit(json_encode($return));
                }
            } else {
                $return = array('result' => 'Enter Valid Email', 'data' => [], 'status_code' => 204);
                exit(json_encode($return));
            }
        } elseif ($login_type == 2) {
            $mobile = $request->mobile;
            if (is_numeric($mobile)) {

                $check = $this->user->check_mobile($mobile);

                if ($check) {
                    $send = $this->user->send_otp($mobile);
                    if ($send) {
                        $return = array('result' => 'Otp Sent Successfully', 'data' => [], 'status_code' => 200);
                        exit(json_encode($return));
                    }
                } else {
                    $return = array('result' => 'Mobile Number Not Exists In Our DB', 'data' => [], 'status_code' => 204);
                    exit(json_encode($return));
                }
            } else {
                $return = array('result' => 'Enter Valid Mobile Number', 'data' => [], 'status_code' => 204);
                exit(json_encode($return));
            }
        } elseif ($login_type == 3) {

            $otp = $request->otp;
            $mobile = $request->mobile;

            $result = $this->user->verify_otp($mobile, $otp);

            if ($result['success']) {

                $user_data = $this->user->find_user_by_mobile($mobile);

                $update_data = [
                    'device_type' => $device_type,
                    'device_token' => $device_token
                ];
                User::where('id', $user_data->id)->update($update_data);

                $user_data = User::find($user_data->id);
                // dd($user_data);
                $return = array("result" => $result['msg'], "data" => $user_data, "status_code" => 200);
                exit(json_encode($return));
            } else {
                $return = array("result" => $result['msg'], "data" => [], "status_code" => 204);
                exit(json_encode($return));
            }
        } else {
            $return = array("result" => "Please Specify Correct Type", "data" => [], "status_code" => 204);
            exit(json_encode($return));
        }
    }

    public function reset_pass(Request $request)
    {
        $email = $request->email;
        $company_id = $request->company_id;

        $check_email = $this->user->check_email($email);
        if ($check_email) {
            $new_password = randomPassword();

            $update_pass = [
                'password' => Hash::make($new_password)
            ];

            $user = $this->user->find_user_by_email($email);
            User::where('id', $user->id)->update($update_pass);

            $data = [
                'message' => 'Your New Password is ' . $new_password,
                'address' => $email
                // 'subject' => $subject
            ];

            Mail::to($email)->send(new git_mail($data));

            $return = array("result" => "New Password Sent To Your Registered Email Id", "data" => [], "status_code" => 200);
            exit(json_encode($return));
        } else {
            $return = array("result" => "Email Id Is not Exists in Our DB", "data" => [], "status_code" => 204);
            exit(json_encode($return));
        }
    }

    public function update_profile(Request $request)
    {
        $user_id = $request->user_id;
        $gender = $request->gender;
        $country_id = $request->country_id;
        $state_id = $request->state_id;
        $city_id = $request->city_id;
        $zip_code = $request->zip_code;
        $address = $request->address;
        $profile_image = $request->profile_image;
        if (!empty($profile_image)) {
            $pimage = Image::make($profile_image);
            $image_name = 'profile_image' . time() . '.' . 'jpeg';
            $destinationPath = public_path('/images');
            $pimage->save($destinationPath . '/' . $image_name);
        } else {
            $image_name = "no_image.png";
        }

        $data = [
            'user_id' => $user_id,
            'gender' => $gender,
            'country_id' => $country_id,
            'state_id' => $state_id,
            'city_id' => $city_id,
            'zip_code' => $zip_code,
            'address' => $address,
            'profile_image' => $image_name,
        ];

        if ($this->user_detail->check($user_id)) {
            // dd($this->user_detail->check($user_id));
            user_detail::where('user_id', $user_id)->update($data);
            $return = array("result" => "User Detail Updated", "data" => $data, "status_code" => 200);
        } else {
            user_detail::insert($data);
            $return = array("result" => "User Detail Added", "data" => $data, "status_code" => 200);
        }

        // $return = encryptData($return);
        exit(json_encode($return));
    }

    public function enc_data(Request $request)
    {
        // dd($request->all());
        $data = json_encode($request->all());
        $decrypted = encryptData($data);
        exit($decrypted);
    }

    public function dec_data(Request $request)
    {
        $data = $request->data;
        $request = decryptData($data);
        // $request = json_decode($request);
        // dd($request);
        // dd($request->name);
        // exit(json_encode($request));
        exit($request);
    }

    public function test(Request $request)
    {
        dd($request->data);
        $request = json_decode($request->data);
        // dd($request);
        return $request;
        // dd($request);
    }
}
