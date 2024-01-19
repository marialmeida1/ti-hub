<?php

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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            // atributes
            $table->text('text')->nullable();
            $table->string('image')->nullable();

            // foreingID
            $table->unsignedBigInteger('profile_user_id');
            $table->foreign('profile_user_id')->references('id')->on('profile_users');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
