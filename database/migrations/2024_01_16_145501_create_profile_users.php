<?php

use App\Models\User;
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
        Schema::create('profile_users', function (Blueprint $table) {
            $table->id();

            // atributes 
            $table->string('name', 80);
            $table->string('location', 200)->nullable();
            $table->string('job', 120)->nullable();
            $table->string('image')->nullable();


            // foreingID
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_users');
    }
};
