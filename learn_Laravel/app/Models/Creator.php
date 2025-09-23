<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use function Laravel\Prompts\password;

class Creator extends Model
{
    protected $fillable = ([
        'name',
        'bio',
        'email'
    ]);
}
