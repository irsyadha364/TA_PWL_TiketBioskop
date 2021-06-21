<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = 
        [
            [
                'nama_film' => 'Kingsman: The Golden Circle ', 
                'desk_film' => 'Kingsman: The Golden Circle merupakan sebuah film aksi petualangan Britania Raya-Amerika Serikat yang dirilis pada tahun 2017. Film yang disutradarai oleh Matthew Vaughn ini diperankan oleh Colin Firth, Taron Egerton dan masih banyak lagi. ', 
                'cover_film' => 'uploads/Kingsman_The_Golden_Circle.png',
                'harga' => '35000'
            ],
            [
                'nama_film' => 'Frozen II', 
                'desk_film' => 'Frozen II adalah film fantasi musikal animasi komputer Amerika yang diproduksi oleh Walt Disney Animation Studios. Film ke-58 yang diproduksi oleh studio, ini adalah sekuel dari film 2013 Frozen , dan menampilkan kembalinya sutradara Chris Buck dan Jennif', 
                'cover_film' => 'uploads/220px-Frozen_2_poster.jpg',
                'harga' => '35000'
            ],
            [
                'nama_film' => 'The Expendables', 
                'desk_film' => 'The Expendables adalah film Amerika Serikat produksi tahun 2010 bergenre ensemble thriller yang ditulis skenarionya oleh David Callaham dan Sylvester Stallone, serta disutradarai oleh Stallone, yang juga membintangi sebagai pemeran utama. ', 
                'cover_film' => 'uploads/220px-Expendablesposter.jpg',
                'harga' => '35000'
            ],
            
        ];
        DB::table('movies')->insert($movies);
    }
}
