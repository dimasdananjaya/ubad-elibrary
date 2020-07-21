<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function kelolaKoleksi(){
        return view('pages.admin.kelola-koleksi');
    }
}
