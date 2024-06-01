<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopUp extends Model
{
    use HasFactory;

    protected $fillable =[ 
        'packetId',
        'id-user-akun',
        'id-server-akun',
        'nickname',
        'whatsapp'
    ];
}
