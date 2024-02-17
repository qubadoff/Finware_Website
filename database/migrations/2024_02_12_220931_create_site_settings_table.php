<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string("meta_description")->nullable();
            $table->text("meta_keywords")->nullable();
            $table->text("meta_robots")->nullable();
            $table->text("meta_author")->nullable();
            $table->text("meta_copyright")->nullable();
            $table->text("meta_og_title")->nullable();
            $table->text("meta_og_description")->nullable();
            $table->text("meta_og_image")->nullable();
            $table->text("meta_og_url")->nullable();
            $table->text("meta_og_type")->nullable();
            $table->text("meta_og_locale")->nullable();
            $table->text("meta_og_site_name")->nullable();
            $table->text("logo")->nullable();
            $table->text("favicon")->nullable();
            $table->text("phone")->nullable();
            $table->text("email")->nullable();
            $table->text("location")->nullable();
            $table->text("google_map")->nullable();
            $table->text("fb_url")->nullable();
            $table->text("twitter_url")->nullable();
            $table->text("instagram_url")->nullable();
            $table->text("tiktok_url")->nullable();
            $table->text("linkedin_url")->nullable();
            $table->text("whatsapp_url")->nullable();
            $table->text("youtube_url")->nullable();
            $table->text("site_version")->nullable();
            $table->text("created_by")->nullable();
            $table->text("slider_image")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
