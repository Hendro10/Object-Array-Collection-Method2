<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function collectionSatu()
    {
        $collection = collect([1, 9, 3, 4, 5, 3, 5, 7]);

        dump($collection);

    }

    public function collectionDua()
    {   //Collectoin dari berbagai type data
        $collection = collect(["Belajar","Laravel","Enak Banget", 1, 2, 3, 4]);
        echo $collection;

        echo "<br>";

        //Collection dari associative array
        $collection = collect([
            "Nama" => "Hendro Gunawan",
            "Sekolah" => "SMA Negeri 1 Muara Enim",
            "Kota" => "Muara Enim",
            "Jurusan" => "IPA",
        ]);
        echo $collection;
    }

    public function collectionTiga()
    {
        //  berguna untuk mengurutkan isi collection
        $collection = collect([1, 9, 3, 4, 5, 3, 5, 7]);
        dump( $collection->sort() );
        // {"0":1,"2":3,"5":3,"3":4,"4":5,"6":5,"7":7,"1":9}

    }

    public function collectionEmpat()
    {
        //  cara penulisan lain dari perulangan foreach

        $collection = collect([
            "Nama" => "Hendro Gunawan",
            "Sekolah" => "Universitas Siber Asia",
            "Kota" => "Jakarta",
            "Jurusan" => "PJJ Informatika",
            ]);

        $collection->each(function($val, $key) {
            echo "$key: $val <br>";
        });
    }

    public function collectionLima()
    {
        $collection = collect([
            ['NamaProduk' => 'Laptop A','Harga' => 19000000],
            ['NamaProduk' => 'Smartphone B', 'Harga' => 5300000],
            ['NamaProduk' => 'Speaker C', 'Harga' => 350000],
        ]);

        // Ambil namaProduk dari semua element
        dump( $collection->pluck('NamaProduk') );

    }
    public function collectionEnam()
    {
        $siswa00 = new \stdClass();
        $siswa00->nama = "Rian";
        $siswa00->sekolah = "SMK Pelita Ibu";
        $siswa00->jurusan = "IPA";

        $siswa01 = new \stdClass();
        $siswa01->nama = "Hendro";
        $siswa01->sekolah = "SMA Negeri 1 Muara Enim";
        $siswa01->jurusan = "IPA";

        $siswa02 = new \stdClass();
        $siswa02->nama = "Rudi";
        $siswa02->sekolah = "MA Al Hidayah";
        $siswa02->jurusan = "IPS";

        $siswas = collect([
        0 => $siswa00,
        1 => $siswa01,
        2 => $siswa02,
        ]);

        // Cara mengakses nilai collection
        echo $siswas[1]->nama;
        echo "<br>";
        echo $siswas[2]->sekolah;

        echo "<hr>";

        // Perulangan foreach untuk menampilkan data
        foreach($siswas as $siswa) {
        echo $siswa->nama; echo "<br>";
        }
    }
}
