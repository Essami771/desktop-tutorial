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
        Schema::create('sitting', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('photo')->nullable()->default('profile_img.png');
            $table->string('description');
            $table->string('version');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sitting');
    }
};
