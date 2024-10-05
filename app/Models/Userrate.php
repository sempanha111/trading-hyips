<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userrate extends Model
{
    use HasFactory;
    protected $fillable = [
        'program_id', 'email', 'rate', 'comment',
    ];
    public function program() {
        return $this->belongsTo(Program::class);
    }
}
