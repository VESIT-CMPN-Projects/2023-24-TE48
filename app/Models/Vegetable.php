<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vegetable extends Model
{
    use HasFactory;

    public function getImagePathAttribute() {
        return '/assets/media/vegetables/'.$this->attributes['image'];
    }
}
