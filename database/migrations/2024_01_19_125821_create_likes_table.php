<?php

use App\Models\Comment;
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
        Schema::create('likes', function (Blueprint $table) {
            $table->id();

            // foreingID
            $table->foreignIdFor(ProfileUser::class);
            $table->foreignIdFor(Post::class);
            $table->foreignIdFor(Comment::class);

            $table->timestamps();
        });

        DB::statement('ALTER TABLE comments ADD CONSTRAINT check_comment_type CHECK ((post_id IS NOT NULL AND comment_id IS NULL) OR (post_id IS NULL AND comment_id IS NOT NULL))');

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('likes');
    }
};
