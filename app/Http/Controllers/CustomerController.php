<?php

namespace App\Http\Controllers;

use App\Models\Joki;
use App\Models\Paket;
use App\Models\TopUp;
use App\Models\Transaksi;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use App\Http\Controllers\StorageController;

class CustomerController extends Controller
{
    public function jokiTranscation ($request){
        $checkApiStatus;
        $validate =  $request->validate([
            'packetId' => 'required',
            'loginAkunVia' => 'required',
            'emailNotelpAkun'=> 'required',
            'password' => 'required',
            'nickname' => 'required',
            'reqHero' => 'required',
            'keterangan' => 'nullable',
            'whatsapp' => 'required',
            'pembayaranId'=> 'required',
            'buktiPembayaran'=> 'required|file|max:2048|mimes:jpeg,png,jpg'
        ]);

        //geting uploud file to file storgae in laravel

        $storage = new StorageController();
        $patchImage = $storage->saveImgFile('Images-Transaction',$request->file('buktiPembayaran'),$request->nickname);

        if(!$patchImage){
            $checkApiStatus=500;
            return $checkApiStatus;
        }

        $joki = Joki::create([
            'packetId' => $request->packetId,
            'login-akun-via' => $request->loginAkunVia,
            'email-notelp-akun' => $request->emailNotelpAkun,
            'password' => $request->password,
            'nickname' => $request->nickname,
            'req-hero' => $request->reqHero,
            'keterangan' => $request->keterangan,
            'whatsapp' => $request->whatsapp
        ]);
    
        $harga = Paket::select('harga')->where('id', $request->pembayaranId)->first();
        
        $transaksi = Transaksi::create([
            'jokiId' =>  $joki->id,
            'pembayaranId' => $request->pembayaranId,
            'bukti-pembayaran' => $patchImage,
            'total-pembayaran' => $harga->harga
        ]);

        //lest go pengechekan data berhasil tidak
        // pengechekan lapis ke 1

        

        if($joki && $transaksi){
            // pengecekan ke lapis 2
            $findJokiCheck = Joki::find($joki->id);
            $findTransaksiCheck = Transaksi::find($transaksi->id);
            if($findJokiCheck && $findTransaksiCheck){
                $checkApiStatus=201;
                return $checkApiStatus;
            }else{
                $checkApiStatus=401;
                return $checkApiStatus;
            }

        }

        $checkApiStatus=500;
        return $checkApiStatus;
    }

    public function topUpTranscation ( $request){
        
        $validate =  $request->validate([
            'packetId' => 'required',
            'idUserAkun' => 'required',
            'idServerAkun' => 'required',
            'nickname' => 'required',
            'whatsapp' => 'required',
            'pembayaranId' => 'required',
            'buktiPembayaran'=> 'required|file|max:2048|mimes:jpeg,png,jpg'
        ]);

        $storage = new StorageController();
        $patchImage = $storage->saveImgFile('Images-Transaction',$request->file('buktiPembayaran'),$request->nickname);
        
        if(!$patchImage){
            $checkApiStatus=500;
            return $checkApiStatus;
        }

        $topUp = TopUp::create([
            'packetId' => $request->packetId,
            'id-user-akun' => $request->idUserAkun,
            'id-server-akun' => $request->idServerAkun,
            'nickname' => $request->nickname,
            'whatsapp' => $request->whatsapp
        ]);
        $harga = Paket::select('harga')->where('id',$request->packetId)->first();
        $transaksi = Transaksi::create([
            'topUpid' => $topUp->id,
            'pembayaranId' => $request->pembayaranId,
            'bukti-pembayaran' => $patchImage,
            'total-pembayaran' => $harga->harga
        ]);

        if($topUp && $transaksi){
            // pengecekan ke lapis 2
            $findToUpCheck = TopUp::find($topUp->id);
            $findTransaksiCheck = Transaksi::find($transaksi->id);
            if($findToUpCheck && $findTransaksiCheck){
                $checkApiStatus=201;
                return $checkApiStatus;
            }else{
                $checkApiStatus=401;
                return $checkApiStatus;
            }

        }

        $checkApiStatus=500;
        return $checkApiStatus;
    }
}
