<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriaController extends Controller
{
    public function show(){
        $kat=DB::table('kategoria')
        ->select('kategoria.*')
        ->get();
        return $kat;
    }
}
