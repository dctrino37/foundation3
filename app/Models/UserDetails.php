<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    use HasFactory;

    function check($user_id)
    {
        // dd($user_id);
        $a = self::where('user_id', $user_id)->first();

        if (!empty($a)) {
            return true;
        } else {
            return false;
        }
    }
}
