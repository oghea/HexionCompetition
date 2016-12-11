<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublikasiController extends Controller
{
    public function index(){
        return view('publikasi.index');
    }
    public function Order(){

        return view('publikasi.order');
    }
    public function postOrder(){

    }
}
