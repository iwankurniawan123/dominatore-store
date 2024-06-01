<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joki extends Model
{
    use HasFactory;

    protected $fillable = [
        'packetId',
        'login-akun-via',
        'email-notelp-akun',
        'password',
        'nickname',
        'req-hero',
        'keterangan',
        'whatsapp'
    ];
}
