<?php

namespace Database\Seeders;


use App\Models\Pembayaran;
use Illuminate\Database\Seeder;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembayaran = [
            [
                'nama' => 'Gopay a.n. Dominator Store',
                'rekening' => '089512532617',
                'foto' => 'gopay.png'
            ],
            [
                'nama' => 'Dana a.n. Iwan Kurniawan',
                'rekening' => '089512532617',
                'foto' => 'dana.png'
            ],
            [
                'nama' => 'OVO a.n. Dominator Store',
                'rekening' => '089512532617',
                'foto' => 'ovo.png'
            ],
            [
                'nama' => 'Shopeepay a.n. Dominator Store',
                'rekening' => '089512532617',
                'foto' => 'shopeepay.png'
            ],
        ];

        foreach ($pembayaran as $key) {
            Pembayaran::create([
                'nama' => $key['nama'],
                'rekening' => $key['rekening'],
                'foto' => $key['foto']
            ]);
        }


    }
}
