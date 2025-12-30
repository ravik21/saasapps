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
            $table->string('logo')->nullable()->after('link');
            $table->date('start_date')->nullable()->after('logo');
            $table->date('end_date')->nullable()->after('start_date');
            $table->boolean('is_ongoing')->default(false)->after('end_date');
            $table->text('image')->nullable()->change();
            $table->renameColumn('image', 'images');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn(['logo', 'start_date', 'end_date', 'is_ongoing']);
            $table->text('image')->nullable()->change();
            $table->renameColumn('images', 'image');
        });
    }
};
