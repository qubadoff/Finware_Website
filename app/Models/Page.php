<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $table = 'pages';

    protected $fillable = [
        'title',
        'description',
        'body',
        'slug',
        'image',
        'status',
    ];

    protected $casts = [];

    protected $guarded = [];

    protected $hidden = [];
}
