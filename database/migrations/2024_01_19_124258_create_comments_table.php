<?php

use App\Models\Lesson;
use App\Models\Post;
use App\Models\ProfileUser;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();

            // atributes 
            $table->text('text');

            // foreingID
            $table->unsignedBigInteger('profile_user_id');
            $table->foreign('profile_user_id')->references('id')->on('profile_users');

            $table->unsignedBigInteger('post_id');
            $table->foreign('post_id')->references('id')->on('posts');

            $table->unsignedBigInteger('lesson_id');
            $table->foreign('lesson_id')->references('id')->on('lessons');

            $table->timestamps();
        });

        DB::statement('ALTER TABLE comments ADD CONSTRAINT check_comment_type CHECK ((post_id IS NOT NULL AND lesson_id IS NULL) OR (post_id IS NULL AND lesson_id IS NOT NULL))');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
