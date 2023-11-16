<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Customers;
use App\Orders;
use App\Keluhan;
use PDF;

class UserController extends Controller
{
	public function profile($id)
	{	
		$usr = Customers::where('id',$id)->first();

		return view('frontend.profilecus',compact('usr'));
	}

	public function update_profile(Request $request,$id)
	{
		$cus = Customers::find($id);
		$cus->nama_lengkap  = $request->nama;
		$cus->no_telpon = $request->mobilephone;
		$cus->email = $request->email;
		$cus->password = empty($request->password) ? $cus->password : Hash::make($request->password);
		$cus->save();

		return back()->with('message','Update Profil Berhasil !');
	}

	public function vtransaction()
	{	
		$or = Orders::all();
		return view('frontend.transactioncus',compact('or'));
	}

	public function send_bukti(Request $request,$id)
	{	
		$or = Orders::find($id);
		$uploadedFile = $request->file('bukti');

		$imagename =  str_slug($or->kode_transaksi) . '.' . $uploadedFile->getClientOriginalExtension();
		$uploadedFile->move(public_path('siac_img/bukti_transfer'), $imagename);

		$or->bukti_transfer = $imagename;
		$or->save();

		return redirect()->back();
	}

	public function vkeluhan()
	{
		$k = Keluhan::all();
		return view('frontend.keluhancus',compact('k'));
	}

	public function create_keluhan(Request $request)
	{
		$k = New Keluhan();
		$k->id_customers = $request->ic;
		$k->keluhan =  $request->kel;
		$k->save();

		return back()->with('message','Tambah Keluhan Berhasil !');
	}

	public function update_keluhan(Request $request,$id)
	{
		$k = Keluhan::find($id);
		$k->keluhan  = $request->kel;
		$k->save();

		return back()->with('message','Update Keluhan Berhasil !');
	}

	// public function delete_keluhan($id)
	// {
	// 	Keluhan::where('id',$id)->delete();

 //        return back()->with('message','Delete Keluhan Berhasil !');
	// }


	public function cetak_kuitansi($id)
	{
		$od = Orders::where('id',$id)->first();

		
		// return view('frontend.kuitansi',compact('or'));
		$pdf = PDF::loadview('frontend.kuitansi',['or'=>$od])->setPaper('a4', 'landscape');

		return $pdf->download('kuitansi-pembayaran.pdf');
	}
}
