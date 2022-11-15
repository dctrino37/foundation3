<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use DB;
use Mail;
use Session;

class frontController extends Controller
{

    public function home(Request $request)
    {
        generate_seo();

        return view('front.home');
    }

    public function socialPrograms()
    {
        generate_seo();
        return view('front.socialprograms');
    }

    public function contact()
    {
        generate_seo();
        return view('front.contact');
    }
    
    public function contactPost(Request $request)
    {
        $name = @$request->name;
        $user_email = @$request->email;
        $message = @$request->message;
        $reason = @$request->reason;
        $age = @$request->age;
        $location = @$request->location;

        $emailBody = array(
            'email' => $user_email,
        );

        if(!empty($name)){
            $emailBody['name'] = $name;
        }

        if(!empty($message)){
            $emailBody['message'] = $message;
        }
        
        if(!empty($reason)){
            $emailBody['reason'] = $reason;
        }

        if(!empty($age)){
            $emailBody['age'] = $age;
        }

        if(!empty($location)){
            $emailBody['location'] = $location;
        }

        $admin_email = DB::table('users')->where('role',1)->first('email');
        
        try {
            checkAndInsertMail($user_email,@$name);
            Mail::send(
                'email.sendmail',
                ['emailBody' => $emailBody],
                function ($message) use ($admin_email) {
                    $message->to($admin_email->email)->subject('Contact Form');
                }
            );
        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong, Please try again'); 
        }

        return "OK"; 

    }


    public function set_language($language_id)
    {
        
        Session::put('language',$language_id);

        //Session::put('gantt_chart','1');
        // App::setLocale('ar');

        return redirect()->back();

    }

}
