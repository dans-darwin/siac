<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Orders;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
   	public function index()
   	{
   		$ca = DB::table('orders')
        ->join('customers','orders.id_customers','=','customers.id')
        ->select('orders.*','customers.nama_lengkap as name')
        ->where('jenis_jasa','=',"Cuci AC")
        ->orderBy('tanggal','dsc')
        ->get();

   		$ba = DB::table('orders')
        ->join('customers','orders.id_customers','=','customers.id')
        ->select('orders.*','customers.nama_lengkap as name')
        ->where('jenis_jasa','=',"Bongkar AC")
        ->orderBy('tanggal','dsc')
        ->get();

   		$ra = DB::table('orders')
        ->join('customers','orders.id_customers','=','customers.id')
        ->select('orders.*','customers.nama_lengkap as name')
        ->where('jenis_jasa','=',"Reparasi AC")
        ->orderBy('tanggal','dsc')
        ->get();

   		return view('admin.orders.list', compact('ca','ba','ra'));
   	}

   	public function destroy($id)
	{
		Orders::where('id',$id)->delete();

		return redirect()->back();
	}

	public function update_status(Request $request,$id)
	{
		$or = Orders::find($id);
		$or->status = $request->status;
		$or->save();

		return redirect()->back();
	}
}