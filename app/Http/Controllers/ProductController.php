<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;
use App\Http\Controllers\NavigationController;

class ProductController extends Controller
{
    public function topUpPacket() {

        $result = Paket::where('tipe','topup')->get();

        return $result;
        
    }
    public function jokiPacket() {

      $result = Paket::where('tipe','joki')->get();

      return $result;
      
  }

    public  function create($request) {
        $validate = $request->validate([
              'nama' => 'required',
              'harga' =>  'required | number',
              'tipe' => 'required'
        ]);

        $packet = Packet::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'tipe'=> $request->tipe
        ]);

        return redirect();

        
    }
    public  function update(Request $request) {
        $validate = $request->validate([
            'nama' => 'required',
            'harga' =>  'required | number',
            'tipe' => 'required'
      ]);

      $packetFind = Packet::where('id', $request->id)->first();
      if(!$packetFind){
        return redirect()->with('error','data tidak ditemukan');
      }

      $packetFind->update([
        'nama' => $request->nama,
        'harga' => $request->harga,
        'tipe' => $request->tipe
      ]);

      return redirect();
    }
    public  function delete(Request $request) {
        
      $packetFind = Packet::where('id', $request->id)->first();
      if(!$packetFind){
        return redirect()->with('error','data tidak ditemukan');
      }

      $packetFind->delete();

      return redirect()->with('success','packet berhasil dihapus');      
    }
}
