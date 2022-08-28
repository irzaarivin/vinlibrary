<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\DB;

class BerandaController extends Controller
{
    public function index(){
        return view('beranda', [
            'pelajaran' => DB::table('books')->where('kategori', '=', 'pelajaran')->skip(0)->take(5)->get(),
            'fiksi' => DB::table('books')->where('kategori', '=', 'fiksi')->skip(0)->take(5)->get()
        ]);
    }
}
