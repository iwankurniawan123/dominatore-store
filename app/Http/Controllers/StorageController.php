<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class StorageController extends Controller
{
    public function saveImgFile ($location, $gambar, $type){

        $namaGambar = time() . '_' . uniqid() . '-' . $type . '.' . $gambar->getClientOriginalExtension();

            // Simpan gambar ke folder "public/images"
            $gambar->storeAs('public/'.$location, $namaGambar);

            // Mendapatkan path lengkap file yang disimpan
            $pathGambar = $location.'/'.$namaGambar;

            $urlGambar = URL::to('/') . '/storage/' . $pathGambar;

            return $urlGambar;        
    }
}
