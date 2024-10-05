<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'status',
    ];

    public function details()
    {
        return $this->hasMany(Detail::class);
    }
    public function ratings() {
        return $this->hasMany(Userrate::class);
    }
    public function domain() {
        return $this->hasMany(Domain::class);
    }
    public function codeimage() {
        return $this->hasMany(Codeimage::class);
    }

}
