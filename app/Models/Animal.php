<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    public function getImagePathAttribute() {
        return '/assets/media/animals/'.$this->attributes['image'];
    }
}
