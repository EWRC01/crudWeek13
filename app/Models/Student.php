<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable =  [
        'firstName',
        'lastName',
        'Score1',
        'Score2',
        'Score3',
        'Sum'

    ];
}
