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
        Schema::create('alphabets', function (Blueprint $table) {
            $table->id();
            $table->char("alphabet");
            $table->string("cover_image");
            $table->string("drawing_image");
            $table->string("learning_image_1");
            $table->string("learning_image_audio_1");
            $table->string("learning_image_2");
            $table->string("learning_image_audio_2");
            $table->string("learning_image_3");
            $table->string("learning_image_audio_3");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alphabets');
    }
};
