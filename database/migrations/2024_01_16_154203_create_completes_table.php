<?php

use App\Models\Lesson;
use App\Models\ProfileUser;
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
        Schema::create('completes', function (Blueprint $table) {
            $table->id();

            // foreingID
            $table->unsignedBigInteger('profile_user_id');
            $table->foreign('profile_user_id')->references('id')->on('profile_users');

            $table->unsignedBigInteger('lesson_id');
            $table->foreign('lesson_id')->references('id')->on('lessons');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('completes');
    }
};
