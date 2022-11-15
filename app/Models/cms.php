<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cms extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'description', 'status', 'created_at', 'updated_at'
    ];

    function getcmsbyslug($slug)
    {
        $data = $this->where('slug', $slug)->first();
        return $data;
    }
}
