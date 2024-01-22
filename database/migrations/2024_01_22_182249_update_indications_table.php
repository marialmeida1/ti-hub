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
        Schema::table('indications', function (Blueprint $table) {
            $table->text('text')->nullable()->change();
            $table->string('link', 180)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('indications', function (Blueprint $table) {
            $table->text('text')->change();
            $table->string('link', 180)->change();
        });
    }
};
