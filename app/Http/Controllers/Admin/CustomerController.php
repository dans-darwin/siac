<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Customers;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
	public function index()
	{
		$customers = Customers::all();

		return view('admin.customer.show',compact('customers')); 
	}

	public function create()
	{
		return view('admin.customer.create'); 
	}

	public function store(Request $request)
	{
		$cus = New Customers;
		$cus->nama_lengkap  = $request->nama_lengkap;
		$cus->no_telpon = $request->notel;
		$cus->email = $request->email;
		$cus->password = Hash::make($request->password);

		$cus->save();

		return redirect(url('nimda/customer/index'));
	}



	public function edit($id)
	{
		$customers = Customers::where('id',$id)->first();

		return view('admin.customer.edit',compact('customers'));
	}


	public function update(Request $request, $id)
	{
		$cus = Customers::find($id);
		$cus->nama_lengkap  = $request->nama_lengkap;
		$cus->no_telpon = $request->notel;
		$cus->email = $request->email;
		$cus->password = empty($request->password) ? $cus->password : Hash::make($request->password);

		$cus->save();
		return redirect(url('nimda/customer/index'));
	}
	
	public function destroy($id)
	{
		Customers::where('id',$id)->delete();

		return redirect()->back();
	}
}
