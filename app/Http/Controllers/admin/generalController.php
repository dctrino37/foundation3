<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Product;
use Hash;
use DB;
use File;
use Mail;
use Illuminate\Support\Facades\Storage;
use URL;
use Illuminate\Support\Facades\Validator;

class generalController extends Controller
{

    public function myProfile()
    {
        return view('admin.profile.myProfile');
    }

    public function updateProfile(Request $request)
    {
        $name = $request->username;
        $email = $request->email;
        $mobile = $request->mobile;
        $password = $request->password;

        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'password' => 'required',
        ]);
        
        $data = array(
            'name' => $name,
            'email' => $email,
            'mobile' => $mobile,
            'real_password' => $password,
            'password' => Hash::make($password),
        );
        
        User::where('id', Auth::user()->id)->update($data);
        return redirect()->back()->with('success', 'Profile updated successfully');
    }
    
    public function dash_index()
    {
        return view('admin.dashboard.dashboard_index');
    }

    public function users()
    {

        $users = DB::table('users')->paginate(10);
        return view('admin.users.index', compact('users'));
    }

    public function delete_users()
    {

        $users = DB::table('users')->paginate(20);
        return view('admin.users.delete_users', compact('users'));
    }

    public function delete_users_post($users)
    {


        $users = explode(',', $users);

        $updated = DB::table('forum_posts')->whereIn('author_id',$users)->delete();

        $updated = DB::table('forum_threads')->whereIn('author_id',$users)->delete();

        $updated = User::whereIn('id',$users)->delete();


        $users = DB::table('users')->paginate(20);
        return view('admin.users.delete_users', compact('users'));
    }


    public function send_emails()
    {

        $users = DB::table('users')->paginate(20);
        return view('admin.users.send_emails', compact('users'));
    }


    public function send_emails_post()
    {

        $users = DB::table('users')->paginate(20);
        return view('admin.users.send_emails_post', compact('users'));
    }



    public function sendMail()
    {

        return view('admin.users.sendMailForm');
    }

    public function sendMailPost(Request $request)
    {
        $subject = $request->subject;
        $description = $request->description;
        $email_ids = explode(',', $request->email_ids);



        $signedusers = DB::table('users')->whereIn('id',$email_ids)->get();

        if($request->email_ids == 'all'){

            $signedusers = DB::table('users')->where('newsletter','on')->get();
        }
        
        $emailBody = array(
            'subject' => $subject,
            'description' => $description
        );


        // dd($signedusers);

        if (count($signedusers) > 0) {
            foreach ($signedusers as $key => $value) {
                $usersEmails[] = $value->email;       
            }
            try {
                Mail::send(
                    'email.sendmail',
                    ['emailBody' => $emailBody],
                    function ($message) use ($usersEmails, $subject) {
                        $message->to($usersEmails)->subject($subject);
                    }
                );
            } catch (\Exception $e) {
                return back()->with('error', 'Something went wrong, Please try again'); 
            }

            return redirect('admin/send-emails')->with('success', 'Mail sent to all users successfully');

        } else {
            return redirect('admin/send-emails')->with('error', 'There are no any user available in list');
        }


    }

    public function allImages(Request $request)
    {
        // dd($request->all());
        $path = public_path('images');
        if ($file = $request->file('product_image')) {
            $fileName =  date('YmdHis') . "." . $file->getClientOriginalExtension();
            // dd($fileName);
            $file->move($path, $fileName);
        }
        $images = \File::allFiles($path);
        $output = '';

        foreach($images as $key => $image)
        {
            $output .= '<div class="col-md-3 text-center mb-2"><img src="'.URL::to('/images').'/'.$image->getFilename().'" alt="" height="170" width="170" style="margin: 7px 7px 7px 7px;"><span class="copy-btn btn btn-info text-center" data-type="attribute" data-attr-name="data-clipboard-text" data-model="couponCode" data-clipboard-text="'.URL::to('/images').'/'.$image->getFilename().'">Copy Link</span></div>';
        }
        return $output;
    }

    public function addProduct()
    {
        return view('admin.products.add');
    }

    public function storeProduct(Request $request)
    {
        $whatsapp_no = $request->whatsapp_no;
        $calling_no = $request->calling_no;
        $email = $request->email;
        
        $request->validate([
            'image'=>'required',
            'whatsapp_no' => 'required',
            'calling_no' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'email' => 'required|email|unique:products,email',
        ]);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = time().$image->getClientOriginalName();
            $image->move(public_path('/images'),$image_name);
        }
        
        $data = array(
            'product_image' => @$image_name,
            'whatsapp_no' => $whatsapp_no,
            'calling_no' => $calling_no,
            'email' => $email,
        );
        
        Product::create($data);
        return redirect('admin/products')->with('success', 'Product added successfully');
    }
    
    public function editProduct($product_id)
    {
        $product = Product::find($product_id);
        return view('admin.products.edit', compact('product'));
    }
    
    public function updateProduct(Request $request, $product_id)
    {
        $calling_no = $request->calling_no;
        $whatsapp_no = $request->whatsapp_no;
        $email = $request->email;
        $old_image = Product::find($product_id)->product_image;
        
        $request->validate([
            'whatsapp_no' => 'required',
            'calling_no' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'email' => 'required|email|unique:products,email,'.$product_id,
        ]);
        
        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = time().$image->getClientOriginalName();
            $image->move(public_path('/images'),$image_name);
            
            $imagePath = public_path('images/' . $old_image);
            if (File::exists($imagePath)) {
                unlink($imagePath);
            }
        } else {
            $image_name = $old_image;
        }

        $data = array(
            'product_image' => @$image_name,
            'whatsapp_no' => $whatsapp_no,
            'calling_no' => $calling_no,
            'email' => $email,
        );
        
        Product::where('id', $product_id)->update($data);
        return redirect('admin/products')->with('success', 'Product updated successfully');
    }
    
    public function deleteProduct($product_id)
    {
        Product::where('id',$product_id)->delete();
        return redirect('admin/products')->with('success', 'Product deleted successfully');
    }


    public function image_upload()
    {
        $user = Auth::user();

        return view('admin.users.profile_settings', compact('user'));
    }


    public function store_image(Request $request, $user_id)
    {

        $email = $request->email;
        $old_image = User::find($user_id)->profile_image;
        
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'email' => 'required|email|unique:users,email,'.$user_id,
        ]);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = time().$image->getClientOriginalName();
            $image->move(public_path('users/images'),$image_name);
            
            $imagePath = public_path('users/images/' . $old_image);


            if ($old_image != "" && File::exists($imagePath)) {
                unlink($imagePath);
            }
        } else {
            $image_name = $old_image;
        }

        $data = array(
            'profile_image' => @$image_name,
            'email' => $email,
        );
        
        User::where('id', $user_id)->update($data);
        return redirect('users/image-upload')->with('success', 'User updated successfully');
    }



    public function report_user(Request $request, $user_id)
    {
        $user = Auth::user();

        $reported_user_id = $request->get('report_user_id');

       


        $reported_user = User::where('id',$reported_user_id)->first();

        $spam_report_ids = explode(',',$reported_user->spam_report_ids);

        $spam_report_ids = array_unique(array_merge($spam_report_ids,[$user->id]));

        $spam_report_ids_count = count($spam_report_ids) -1;

        $spam_report_ids = implode(',',$spam_report_ids);

        User::where('id',$reported_user_id)->update(['spam_report_ids'=>$spam_report_ids,
                                                    'spam_report_ids_count'=>$spam_report_ids_count]);


        return redirect()->back()->with('success', 'your message,here');
    }





    public function admin_seo()
    {
        $seo_pages = DB::table('admin_seo')->get();

        // dd($seo_pages);


        return view('admin.users.seo_form', compact('seo_pages'));
    }


    public function store_seo(Request $request, $seo_id)
    {

        $meta_title = $request->meta_title;
        $meta_description = $request->meta_description;
        $meta_keywords = $request->meta_keywords;




        DB::table('admin_seo')->where('id',$seo_id)->update(['meta_title'=>$meta_title,
                                                'meta_description'=>$meta_description,'meta_keywords'=>$meta_keywords]);


        $seo_pages = DB::table('admin_seo')->get();

        // dd($seo_pages);

        return view('admin.users.seo_form', compact('seo_pages'));
    }





}
