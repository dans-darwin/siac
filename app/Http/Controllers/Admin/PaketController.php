<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pakets;

class PaketController extends Controller
{
	public function index()
	{
		$ca = Pakets::all();	
		return view('admin.paket.list',compact('ca'));
	}

	public function store(Request $request)
	{
		$p = New Pakets;
		$p->nama_paket  = $request->nm;
		$p->harga = $request->hr;
		$p->jenis = $request->jn;
		$p->save();

		return redirect()->back();
	}

	public function update(Request $request,$id)
	{
		$p = Pakets::find($id);
		$p->nama_paket  = $request->nm;
		$p->harga = $request->hr;
		$p->jenis = $request->jn;
		$p->save();

		return redirect()->back();
	}

	public function destroy($id)
	{
		Pakets::where('id',$id)->delete();

		return redirect()->back();
	}
}
