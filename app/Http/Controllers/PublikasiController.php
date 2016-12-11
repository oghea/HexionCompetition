<?php

namespace App\Http\Controllers;

use App\Order;
use App\Pembeli;
use Illuminate\Http\Request;
use Laravel\Cashier\Cashier;


class PublikasiController extends Controller
{
    public function __construct()
    {
        Cashier::useCurrency('IDR', 'Rp');
    }
    public function index(){
        return view('publikasi.index');
    }
    public function Order(){

        return view('publikasi.order');
    }
    public function postOrder(Request $request){
        $this->validate($request, [
            'email' => 'required|email|unique:pembeli',
            'first_name' => 'required',
            'phone' => 'required|numeric|digits_between:10,13',
            'address' => 'required',
            'zip' => 'required',
            'city' => 'required',
            'state' => 'required',
        ]);

        $total = 30000000;
        $ket = 'belum dibayar';
        $order = new Order();
        $order->total = $total;
        $order->keterangan = $ket;
        $order->save();
        $order->item()->attach([1,2]);

        $pembeli = new Pembeli();
        $pembeli->order()->associate($order);
        $pembeli->email = $request->email;
        $pembeli->first_name = $request->first_name;
        $pembeli->last_name = $request->last_name;
        $pembeli->phone = $request->phone;
        $pembeli->address = $request->address;
        $pembeli->zip = $request->zip;
        $pembeli->city = $request->city;
        $pembeli->state = $request->state;
        $token = $request->input('stripeToken');
        $pembeli->createAsStripeCustomer($token);
        $pembeli->save();
        $pembeli->invoiceFor('Catalog', $total);
        $order->keterangan = 'lunas';
        $order->save();
        $invoices = $pembeli->invoices()->first();
        return $pembeli->downloadInvoice($invoices->id, [
            'vendor'  => 'LoremIpsumExhibit',
            'product' => 'Catalogue',
        ]);
    }
}
