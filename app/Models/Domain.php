<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    use HasFactory;
    protected $fillable = [
        'program_id', 'domain_name', 'register_id', 'server', 'updated', 'created', 'expired', 'registrar_enom',
        'registrar_iana_id', 'registrar_email', 'registrar_phone', 'domain_status', 'name_server', 'dnssec'
    ];
    public function program() {
        return $this->belongsTo(Program::class);
    }
}
