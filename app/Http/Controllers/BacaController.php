<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

class BacaController extends Controller
{
    public function index(){
        $pelajaran = [
            'pelajaran' => DB::table('books')->where('kategori', '=', 'pelajaran')->get()
        ];

        $fiksi = [
            'fiksi' => DB::table('books')->where('kategori', '=', 'fiksi')->get()
        ];

        return view('baca.index', $pelajaran, $fiksi);
    }

    public function pedeef(Book $book){
        return view('baca.pedeef', [
            'book' => $book
        ]);
    }

    public function show(Book $book){
        return view('baca.baca', [
            'book' => $book,
            'pelajaran' => DB::table('books')->where('kategori', '=', 'pelajaran')->get(),
            'fiksi' => DB::table('books')->where('kategori', '=', 'fiksi')->get()
        ]);
    }

    public function cari($slug){
        return view('baca.cari', [

            'buku' => DB::table('books')->where('judul', 'like', "%" . $slug . "%")->orWhere('penulis', 'like', "%" . $slug . "%")->get()

            // 'pelajaran' => DB::table('books')->where('kategori', '=', 'pelajaran')->where(function ($query) {
            //     global $slug;
            //     $query->where('judul', 'like', "%" . $slug . "%")->orWhere('penulis', 'like', "%" . $slug . "%");
            // })->get(),

            // 'fiksi' => DB::table('books')->where('kategori', '=', 'fiksi')->where(function ($query) {
            //     global $slug;
            //     $query->where('judul', 'like', "%" . $slug . "%")->orWhere('penulis', 'like', "%" . $slug . "%");
            // })->get()

        ]);
    }

}
