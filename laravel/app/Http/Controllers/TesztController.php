<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TesztController extends Controller
{

    public function show(){
        $teszt=DB::table('teszt')
        ->select('teszt.*')
        ->get();
        return $teszt;
    }


    public function show2($id){
        $teszt=DB::table('teszt')
        ->select('teszt.*', 'kategoria.kategorianev')
        ->join('kategoria','kategoria.id','=','teszt.kategoriaId')
        ->where('teszt.id','=',$id)
        ->get();
        return $teszt;
    }
}
