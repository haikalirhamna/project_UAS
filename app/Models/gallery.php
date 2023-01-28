<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'gallery_img',
        'gallery_body',
        'upload_at',
    ];
}
