<?php

namespace App\Http\Controllers;

use App\Peserta;
use Illuminate\Http\Request;
use App\Order;
use Intervention\Image\ImageManagerStatic as Image;
use App\Notifications\CompetitionRegistration;


class KompetisiController extends Controller
{
    public function index(){
        return view('kompetisi.index');
    }
    public function daftar(){
        return view('kompetisi.daftar');
    }
    public function store(Request $request){
        $this->validate($request, [
            'email' => 'required|email|unique:peserta',
            'first_name' => 'required',
            'photo1' => 'required|image',
            'photo2' => 'image',
            'photo3' => 'image',
            'phone' => 'required|numeric|digits_between:10,13',
            'address' => 'required',
            'city' => 'required',
        ]);
        $peserta = new Peserta();
        $peserta->email = $request->email;
        $peserta->first_name = $request->first_name;
        $peserta->last_name = $request->last_name;
        $peserta->phone = $request->phone;
        $peserta->address = $request->address;
        $peserta->city = $request->city;
        if($request->hasFile('photo1')){
            $photo = $request->file('photo1');
            $filename = $request->first_name .'(1)' . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->save(storage_path('app/public/uploads/' . $filename));
            $peserta->photo1 = $filename;
        }
        if($request->hasFile('photo2')){
            $photo = $request->file('photo2');
            $filename = $request->first_name .'(2)' . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->save(storage_path('app/public/uploads/' . $filename));
            $peserta->photo2 = $filename;
        }
        if($request->hasFile('photo3')){
            $photo = $request->file('photo3');
            $filename = $request->first_name .'(3)' . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->save(storage_path('app/public/uploads/' . $filename));
            $peserta->photo3 = $filename;
        }
        $peserta->save();
//        $peserta->notify(new CompetitionRegistration());

        return redirect()->route('kompetisi.index');
    }
}
