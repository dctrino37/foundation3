<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_image', 'facebook_url', 'instagram_url', 'whatsapp_url', 'email', 'created_at', 'updated_at'
    ];
}
