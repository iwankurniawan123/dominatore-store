<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Paket;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function reportTopUp (){
        $result = Transaksi::select('pakets.nama as namapacket','top_ups.id-user-akun as akunUser','top_ups.id-server-akun as serverAkun','top_ups.nickname', 'top_ups.whatsapp','pembayarans.nama','transaksis.bukti-pembayaran as buktiPembayaran')
        ->join('top_ups','transaksis.topUPid','top_ups.id')
        ->join('pembayarans','transaksis.pembayaranId', 'pembayarans.id')
        ->join('pakets', 'top_ups.packetId','pakets.id')
        ->get();

       return $result;
 
    }

    public function reportJoki (){
        $result = Transaksi::select('pakets.nama as namapacket','jokis.login-akun-via as akunVia','jokis.email-notelp-akun as emailNoTlp','jokis.password','jokis.nickname', 'jokis.req-hero as reqHero', 'jokis.keterangan', 'jokis.whatsapp','pembayarans.nama','transaksis.bukti-pembayaran as buktiPembayaran')
        ->join('jokis','transaksis.jokiId','jokis.id')
        ->join('pembayarans','transaksis.pembayaranId', 'pembayarans.id')
        ->join('pakets', 'jokis.packetId','pakets.id')
        ->get();

       return $result;
 
    }

    public function loginAdmin ($request) {


        $validasi = $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

    
            if (User::where('name',$request->name)->where('password', $request->password)) {
                // Authentication passed
                $apiKey = 200;
                return $apiKey;
            }
            
            $apiKey = 400;
            return $apiKey;
        
        

    }
}
