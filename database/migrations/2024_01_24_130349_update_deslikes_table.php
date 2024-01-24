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
        Schema::table('deslikes', function (Blueprint $table) {
            $table->unsignedBigInteger('post_id')->nullable()->change();
            $table->unsignedBigInteger('comment_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('deslikes', function (Blueprint $table) {
            $table->unsignedBigInteger('post_id')->change();
            $table->unsignedBigInteger('comment_id')->change();
        });
    }
};
