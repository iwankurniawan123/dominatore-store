<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PembayaranController;

class NavigationController extends Controller
{
    public function topUpView (){
        $data = new ProductController ();
        $packet = $data->topUpPacket();

        $pembayaran = new PembayaranController();
        $metode =  $pembayaran->get();

        

        return view('topup', ['packet' =>  $packet, 'metode' =>  $metode]);
        
    }

    public function jokiView(){
        $data = new ProductController ();
        $packet = $data->jokiPacket();

        $pembayaran = new PembayaranController();
        $metode =  $pembayaran->get();

        

        return view('joki', ['packet' =>  $packet, 'metode' =>  $metode]);
    }

    public function transaksiTopUpview (Request $request){
        
        $transaksi = new CustomerController();
        $data = $transaksi->topUpTranscation($request);
        if($data == 201){
            return redirect('/')->with('success', 'pesan telah dibuat dan sedang diproses');
        }

        if($data ==  401){
            return redirect()->routes('topup')->with('error', 'pesanan gagal');
        }

        return redirect()->routes('topup')->with('error', 'server not responding');
    }


    public function transaksiJokiView (Request $request){
        
        $transaksi = new CustomerController();
        $data = $transaksi->jokiTranscation($request);
        if($data == 201){
            return redirect('/')->with('success', 'pesan telah dibuat dan sedang diproses ');
        }

        if($data ==  401){
            return redirect()->routes('topup')->with('error', 'pesanan gagal');
        }

        return redirect()->routes('topup')->with('error', 'server not responding');
    }

    public function adminLoginView(){
        return view('login');
    }

    public function adminTopUpView(){
        $report = new AdminController();
        $result =  $report->reportTopUp();
        

        return view('AdminTopUp',['data' => $result]);
    }

    public function adminJokiView(){

        $report = new AdminController();
        $result =  $report->reportJoki();

        return view('AdminJoki',['data' => $result]);
    }

    public function loginProsesView(Request $request){
        $login =  new AdminController();
        $data =  $login->loginAdmin($request);
        if($data == 200){
            return redirect()->route('topUpReport');
        }

        if($data ==  400){
            return redirect()->routes('login')->with('error', 'nama dan password Salah');
        }

        return redirect()->routes('login')->with('error', 'server not responding');
    }


}
