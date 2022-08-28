<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'judul' => 'CSS Dasar',
            'slug' => 'css-dasar',
            'penulis' => 'Firman.afk',
            'waktu_terbit' => '2021',
            'jumlah_halaman' => '24',
            'kategori' => 'pelajaran',
            'deskripsi' => Str::random(100),
            'thumb' => 'http://vinlibrary.test/buku/pelajaran/cssDasar.jpeg'
        ]);

        Book::create([
            'judul' => 'CSS Model Box',
            'slug' => 'css-model-box',
            'penulis' => 'Firman.afk',
            'waktu_terbit' => '2021',
            'jumlah_halaman' => '37',
            'kategori' => 'pelajaran',
            'deskripsi' => Str::random(100),
            'thumb' => 'http://vinlibrary.test/buku/pelajaran/cssBoxModel.jpeg'
        ]);

        Book::create([
            'judul' => 'Expressing Opinion',
            'slug' => 'expressing-opinion',
            'penulis' => 'Kelompok 2',
            'waktu_terbit' => '2021',
            'jumlah_halaman' => '12',
            'kategori' => 'pelajaran',
            'deskripsi' => Str::random(100),
            'thumb' => 'http://vinlibrary.test/buku/pelajaran/expressing.jpg'
        ]);

        Book::create([
            'judul' => 'Konsep Teknologi Aplikasi Web',
            'slug' => 'konsep-teknologi-aplikasi-web',
            'penulis' => 'Firman.afk',
            'waktu_terbit' => '2021',
            'jumlah_halaman' => '27',
            'kategori' => 'pelajaran',
            'deskripsi' => Str::random(100),
            'thumb' => 'http://vinlibrary.test/buku/pelajaran/konsep-teknologi-aplikasi-web.png'
        ]);

        Book::create([
            'judul' => 'Pengenalan HTML',
            'slug' => 'pengenalan-html',
            'penulis' => 'Firman.afk',
            'waktu_terbit' => '2021',
            'jumlah_halaman' => '28',
            'kategori' => 'pelajaran',
            'deskripsi' => Str::random(100),
            'thumb' => 'http://vinlibrary.test/buku/pelajaran/pengenalanHtml.jpeg'
        ]);

        Book::create([
            'judul' => 'Teks Eksplanasi',
            'slug' => 'teks-eksplanasi',
            'penulis' => 'Kelompok 1',
            'waktu_terbit' => '2021',
            'jumlah_halaman' => '8',
            'kategori' => 'pelajaran',
            'deskripsi' => Str::random(100),
            'thumb' => 'http://vinlibrary.test/buku/pelajaran/teks-eksplanasi.jpg'
        ]);

        Book::create([
            'judul' => 'Teks Prosedur',
            'slug' => 'teks-prosedur',
            'penulis' => 'Kelompok 1',
            'waktu_terbit' => '2021',
            'jumlah_halaman' => '9',
            'kategori' => 'pelajaran',
            'deskripsi' => Str::random(100),
            'thumb' => 'http://vinlibrary.test/buku/pelajaran/prosedur.png'
        ]);

        Book::create([
            'judul' => 'Engslish Grammars',
            'slug' => 'the-grammar-of-english-grammars',
            'penulis' => 'Goold Brown',
            'waktu_terbit' => '2021',
            'jumlah_halaman' => '2612',
            'kategori' => 'pelajaran',
            'deskripsi' => Str::random(100),
            'thumb' => 'http://vinlibrary.test/buku/pelajaran/thegrammar.jpg'
        ]);

        Book::create([
            'judul' => 'Adventures Of Huckleberry Finn',
            'slug' => 'adventures-of-huckleberry-finn',
            'penulis' => 'Mark Twain',
            'waktu_terbit' => '2021',
            'jumlah_halaman' => '304',
            'kategori' => 'fiksi',
            'deskripsi' => Str::random(100),
            'thumb' => 'http://vinlibrary.test/buku/fiksi/adventures.jpg'
        ]);

        Book::create([
            'judul' => 'Ayesha',
            'slug' => 'ayesha',
            'penulis' => 'H. Rider Haggard',
            'waktu_terbit' => '2021',
            'jumlah_halaman' => '275',
            'kategori' => 'fiksi',
            'deskripsi' => Str::random(100),
            'thumb' => 'http://vinlibrary.test/buku/fiksi/ayesha.jpg'
        ]);

        Book::create([
            'judul' => 'Cleopatra',
            'slug' => 'cleopatra',
            'penulis' => 'H. Rider Haggard',
            'waktu_terbit' => '2021',
            'jumlah_halaman' => '248',
            'kategori' => 'fiksi',
            'deskripsi' => Str::random(100),
            'thumb' => 'http://vinlibrary.test/buku/fiksi/cleopatra.jpg'
        ]);

        Book::create([
            'judul' => 'Greenmantle',
            'slug' => 'greenmantle',
            'penulis' => 'John Buchan',
            'waktu_terbit' => '2021',
            'jumlah_halaman' => '227',
            'kategori' => 'fiksi',
            'deskripsi' => Str::random(100),
            'thumb' => 'http://vinlibrary.test/buku/fiksi/greenmantle.jpg'
        ]);

        Book::create([
            'judul' => 'Kim',
            'slug' => 'kim',
            'penulis' => 'Rudyard Kipling',
            'waktu_terbit' => '2021',
            'jumlah_halaman' => '298',
            'kategori' => 'fiksi',
            'deskripsi' => Str::random(100),
            'thumb' => 'http://vinlibrary.test/buku/fiksi/kim.jpg'
        ]);

        Book::create([
            'judul' => 'Seven Swords',
            'slug' => 'seven-swords',
            'penulis' => 'Michael E. Shea',
            'waktu_terbit' => '2021',
            'jumlah_halaman' => '167',
            'kategori' => 'fiksi',
            'deskripsi' => Str::random(100),
            'thumb' => 'http://vinlibrary.test/buku/fiksi/seven.jpg'
        ]);

        Book::create([
            'judul' => 'The Mysterious Island',
            'slug' => 'the-mysterious-island',
            'penulis' => 'Jules Verne',
            'waktu_terbit' => '2021',
            'jumlah_halaman' => '491',
            'kategori' => 'fiksi',
            'deskripsi' => Str::random(100),
            'thumb' => 'http://vinlibrary.test/buku/fiksi/the.jpg'
        ]);

        Book::create([
            'judul' => 'The Three Musketeers',
            'slug' => 'the-three-musketeers',
            'penulis' => 'Alexandre Dumas, Pere',
            'waktu_terbit' => '2021',
            'jumlah_halaman' => '762',
            'kategori' => 'fiksi',
            'deskripsi' => Str::random(100),
            'thumb' => 'http://vinlibrary.test/buku/fiksi/thethree.jpg'
        ]);
    }
}
