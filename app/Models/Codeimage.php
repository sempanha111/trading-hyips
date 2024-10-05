<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Codeimage extends Model
{
    use HasFactory;
    protected $fillable = [
        'program_id', 'image1', 'code1', 'image2', 'code2', 'image3', 'code3', 'image4', 'code4'
    ];
 
}
