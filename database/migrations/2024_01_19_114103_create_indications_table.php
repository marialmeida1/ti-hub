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
        Schema::create('indications', function (Blueprint $table) {
            $table->id();

            // atributes 
            $table->text('text');
            $table->string('link', 180);


            // foreingID
            $table->foreignIdFor(ProfileUser::class);
            $table->foreignIdFor(Lesson::class);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('indications');
    }
};
