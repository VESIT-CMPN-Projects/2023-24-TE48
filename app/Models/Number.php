<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Number extends Model
{
    use HasFactory;

    protected $gaurded = [];

    public function getCoverImageAttribute() {
        return '/assets/media/numbers/'.$this->attributes['cover_image'];
    }

    public function getDrawingImageAttribute() {
        return '/assets/media/numbers/'.$this->attributes['drawing_image'];
    }
}
