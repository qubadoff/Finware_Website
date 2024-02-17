<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSettings extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'meta_description',
        'meta_keywords',
        'meta_robots',
        'meta_author',
        'meta_copyright',
        'meta_og_title',
        'meta_og_description',
        'meta_og_image',
        'meta_og_url',
        'meta_og_type',
        'meta_og_locale',
        'meta_og_site_name',
        'logo',
        'favicon',
        'phone',
        'email',
        'location',
        'google_map',
        'fb_url',
        'twitter_url',
        'instagram_url',
        'tiktok_url',
        'youtube_url',
        'whatsapp_url',
        'linkedin_url',
        'site_version',
        'created_by',
        'slider_image',
    ];

    protected $casts = [];

    protected $guarded = [];

    protected $hidden = [];
}
