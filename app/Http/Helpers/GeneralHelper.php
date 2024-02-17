<?php

use App\Models\SiteSettings;


if (!function_exists('getLocales')) {
    function settings()
    {
        return SiteSettings::query()->where('id', 1)->first();
    }
}
