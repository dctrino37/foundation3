<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;



    public function check_mobile($mobile, $company_id = 1)
    {

        $check = self::where('company_id', $company_id)->where('mobile', $mobile)->first();
        if (!empty($check)) {
            return true;
        } else {
            return false;
        }
    }
    public function check_email($email, $company_id = 1)
    {
        $check = self::where('company_id', $company_id)->where('email', $email)->first();
        if (!empty($check)) {
            return true;
        } else {
            return false;
        }
    }
    public function find_user_by_email($email, $company_id = 1)
    {
        $data = self::where('company_id', $company_id)->where('email', $email)->first();
        return $data;
    }
    public function find_user_by_mobile($mobile, $company_id = 1)
    {
        $data = self::where('company_id', $company_id)->where('mobile', $mobile)->first();
        return $data;
    }

    public function send_otp($mobile, $company_id = 1)
    {
        self::where('company_id', $company_id)->where('mobile', $mobile)->update([
            'mobile' => $mobile,
            'otp' => otp(4),
            'otp_flag' => 0,
            'otp_time' => CurrentDateTime(),
        ]);
        return true;
    }

    public function verify_otp($mobile, $otp, $company_id = 1)
    {
        $matchOtp = self::where('company_id', $company_id)->where('mobile', $mobile)->where('otp', $otp)->first();
        if (@$matchOtp && !empty($matchOtp)) {
            $db_otp = $matchOtp->otp;
            $otp_time = $matchOtp->otp_time;
            $otp_flag = $matchOtp->otp_flag;
            $otpTimestamp = explode(' ', $otp_time);
            $currentTimestamp = explode(' ', CurrentDateTime());
            $currentdate = $currentTimestamp[0];
            $otpdate = $otpTimestamp[0];
            if ($otp_flag == 1) {
                $result = [
                    'success' => false,
                    'msg' => 'OTP already used, please try again',
                ];
                return $result;
            }
            if ($otpdate == $currentdate) {
                $datetime1 = strtotime($otp_time);
                $datetime2 = strtotime(CurrentDateTime());
                $interval  = abs($datetime2 - $datetime1);
                $minutes   = round($interval / 60);
                if ($minutes > 15) {
                    return back()->with('error', 'OTP is expired, please try again');
                } else {
                    $data = array(
                        'otp_flag' => 1,
                    );
                    self::where('company_id', $company_id)->where('mobile', '=', $mobile)->update($data);
                    $data = array('user_id' => $matchOtp->id, 'role' => $matchOtp->role, 'name' => $matchOtp->name, 'mobile' => $mobile);
                    $result = [
                        'success' => true,
                        'msg' => 'OTP verified Successfully',
                        'data' => $data
                    ];
                    return $result;
                }
            } else {
                $result = [
                    'success' => false,
                    'msg' => 'OTP is expired, please try again'
                ];
                return $result;
            }
        } else {
            $result = [
                'success' => false,
                'msg' => 'OTP is not valid, please try again'
            ];
            return $result;
        }
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'country_id',
        'country',
        'city',
        'country_code',
        'newsletter',
        'profile_image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
