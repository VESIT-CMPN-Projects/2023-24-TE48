<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alphabet extends Model
{
    use HasFactory;

    protected $gaurded = [];

    public function getCoverImageAttribute() {
        return '/assets/media/alphabets/'.$this->attributes['cover_image'];
    }

    public function getDrawingImageAttribute() {
        return '/assets/media/alphabets/'.$this->attributes['drawing_image'];
    }

    public function getLearningImage1Attribute() {
        return '/assets/media/alphabets/'.$this->attributes['learning_image_1'];
    }

    public function getLearningImageAudio1Attribute() {
        return '/assets/media/alphabets/'.$this->attributes['learning_image_audio_1'];
    }

    public function getLearningImage2Attribute() {
        return '/assets/media/alphabets/'.$this->attributes['learning_image_2'];
    }

    public function getLearningImageAudio2Attribute() {
        return '/assets/media/alphabets/'.$this->attributes['learning_image_audio_2'];
    }

    public function getLearningImage3Attribute() {
        return '/assets/media/alphabets/'.$this->attributes['learning_image_3'];
    }

    public function getLearningImageAudio3Attribute() {
        return '/assets/media/alphabets/'.$this->attributes['learning_image_audio_3'];
    }
}
