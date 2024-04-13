<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function getQuestionImagePathAttribute() {
        return '/assets/media/questions/'.$this->attributes['question_image'];
    }

    public function getQuestionVoicePathAttribute() {
        return '/assets/media/questions/'.$this->attributes['question_voice'];
    }

    public function options() {
        return $this->hasMany(Option::class);
    }
}
