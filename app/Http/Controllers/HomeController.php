<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Str;
use App\Orders;
use App\Customers;
use App\Pakets;

class HomeController extends Controller
{
	// public function __construct()
	// {
	// 	$this->middleware('auth:customers');
	// }

    public function index()
    {
        $data['co'] = Orders::where('status','=','Finish')->count();
        $data['cc'] = Customers::all()->count();
        return view('frontend.home',$data);
    }

    public function services()
    {
    	return view('frontend.services');
    }

    public function cuciac(Request $request)
    {
        $hr = Pakets::all();
        return view('frontend.cuciacform',compact('hr'));
    }

    public function servisac()
    {
        $hr = Pakets::all();
        return view('frontend.servisacform',compact('hr'));   
    }

    public function bongkarac()
    {
        $hr = Pakets::all();
        return view('frontend.bongkaracform',compact('hr'));
    }

    public function storecuciac(Request $request)
    {
        if (Auth::guard('customers')->user() == NULL) {
            return redirect(url('cs/login'));
        } else {
            $or = New Orders;
            $or->kode_transaksi = Str::upper(str_random(10));
            $or->jenis_jasa = "Cuci AC";
            $or->info = implode(",",$request->info);
            $or->jumlah_ac = $request->jml;
            $or->merk_ac = implode(",",$request->merk);
            $or->jenis_bangunan = $request->jns;
            $or->tanggal = $request->tgl;
            $or->waktu = $request->waktu;
            $or->id_customers = Auth::guard('customers')->user()->id;
            $or->alamat_rumah = $request->alamat;
            $or->harga = $request->harga;
            $or->status = "Pending";

            $or->save();

            return redirect(url('cs/transaction'));
        }
    }

    public function storeservisac(Request $request)
    {
        if (Auth::guard('customers')->user() == NULL) {
            return redirect(url('cs/login'));
        } else {
            $or = New Orders;
            $or->kode_transaksi = Str::upper(str_random(10));
            $or->jenis_jasa = "Reparasi AC";

            $or->info = implode(",",$request->info);
            $or->jumlah_ac = $request->jml;
            $or->merk_ac = implode(",",$request->merk);
            $or->jenis_pk = $request->jenis_pk;
            $or->jenis_bangunan = $request->jns;
            $or->tanggal = $request->tgl;
            $or->waktu = $request->waktu;
            $or->id_customers = Auth::guard('customers')->user()->id;
            $or->alamat_rumah = $request->alamat;
            $or->harga = $request->harga;
            $or->status = "Pending";

            $or->save();

            return redirect(url('cs/transaction'));
        }
    }

    public function storebongkarac(Request $request)
    {
        if (Auth::guard('customers')->user() == NULL) {
            return redirect(url('cs/login'));
        } else {
        // var_dump($request->jml); die();

            $or = New Orders;
            $or->kode_transaksi = Str::upper(str_random(10));
            $or->jenis_jasa = "Bongkar AC";

            $or->info = $request->info;
            $or->jumlah_ac = $request->jml;
            $or->merk_ac = implode(",",$request->merk); //checkbox
            $or->jenis_pk = $request->jenis_pk;
            $or->jenis_bangunan = $request->jns;
            $or->tanggal = $request->tgl;
            $or->waktu = $request->waktu;
            $or->id_customers = Auth::guard('customers')->user()->id;
            $or->alamat_rumah = $request->alamat;
            $or->harga = $request->harga;
            $or->status = "Pending";

            $or->save();

            return redirect(url('cs/transaction'));
        }
    }
}
