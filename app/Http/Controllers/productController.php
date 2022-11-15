<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use DB;
use Mail;

class productController extends Controller
{
    public function homePage()
    {
        $homepage = DB::table('cms')->where('block', 'h1')->first();
        $products = Product::paginate(20);
        return view('web.homePage', compact('products'))->with('homepage',$homepage);
    }
    
    public function contactUs(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);
        
        $product = Product::find($request->product_id);
        $image = $product->product_image;
        $admin_email = $product->email;

        $username = $request->username;
        $user_email = $request->email;
        $message = $request->message;

        $emailBody = array(
            'username' => $username,
            'email' => $user_email,
            'message' => $message,
            'image' => $image,
        );

        try {
            Mail::send(
                'email.sendmail',
                ['emailBody' => $emailBody],
                function ($message) use ($admin_email) {
                    $message->to($admin_email);
                }
            );
        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong, Please try again'); 
        }
        

    return redirect('/')->with('success', 'Message sent successfully');
}
}
