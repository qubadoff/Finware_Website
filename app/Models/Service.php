<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $fillable = [
        'title',
        'description',
        'body',
        'image',
        'slug',
        'status',
        'order',
    ];

    protected $casts = [

    ];

    protected $guarded = [

    ];
}
