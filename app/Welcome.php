<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Database\factories\WelcomeFactory;

class Welcome extends Model
{
    protected $fillable = [
        'image', 'title', 'description'
    ];
}
