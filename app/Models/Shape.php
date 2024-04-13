<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shape extends Model
{
    use HasFactory;

    protected $gaurded = [];

    public function getCoverImageAttribute() {
        return '/assets/media/shapes/'.$this->attributes['cover_image'];
    }

    public function getDrawingImageAttribute() {
        return '/assets/media/shapes/'.$this->attributes['drawing_image'];
    }

    public function getExampleImagePathOneAttribute() {
        return '/assets/media/shapes/'.$this->attributes['example_image_1'];
    }
}
