<?php


function CurrentDateTime()
{
    date_default_timezone_set('Asia/Kolkata');
    $datetime = date('Y-m-d H:i:s');
    return $datetime;
}


function checkAndInsertMail($email,$name = null)
{
    $table = DB::table('signedusers');
    $checkMail = $table->where('email',$email)->first();
    if(empty($checkMail)){
        $data = ['email'=>$email];
        if(!empty(@$name)){
            $data['name'] =  @$name;
        }
        $table->insert($data);
    }
}
