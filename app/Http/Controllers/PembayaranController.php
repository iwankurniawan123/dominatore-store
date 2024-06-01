<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function get (){
        $metode  = Pembayaran::all();

        return $metode;
    }
}
