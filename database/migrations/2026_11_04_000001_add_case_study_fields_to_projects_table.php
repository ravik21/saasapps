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
        Schema::table('projects', function (Blueprint $table) {
            $table->string('title')->nullable()->after('name');
            $table->string('slug')->nullable()->after('title');
            $table->string('category')->nullable()->after('client');
            $table->string('image')->nullable()->after('logo');
            $table->json('technologies')->nullable()->after('technology');
            $table->text('review')->nullable()->after('technologies');
            $table->unsignedTinyInteger('rating')->default(5)->after('review');
            $table->string('video_link')->nullable()->after('rating');
            $table->boolean('is_published')->default(true)->after('video_link');
            $table->integer('sort_order')->default(0)->after('is_published');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn([
                'title',
                'slug',
                'category',
                'image',
                'technologies',
                'review',
                'rating',
                'video_link',
                'is_published',
                'sort_order',
            ]);
        });
    }
};
