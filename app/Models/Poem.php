<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poem extends Model
{
    use HasFactory;

    public function getCoverImageAttribute() {
        return '/assets/media/poems/'.$this->attributes['poster_image'];
    }


    public function getLearningAudioAttribute() {
        return '/assets/media/poems/'.$this->attributes['voice'];
    }
}
