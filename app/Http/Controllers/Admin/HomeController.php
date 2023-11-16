<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Orders;
use App\Customers;
use Illuminate\Support\Facades\DB;
use PDF;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $data['co'] = Orders::where('status','=','Finish')->count();
        $data['cc'] = Customers::all()->count();
        return view('admin.home',$data);
    }

    public function report_view()
    {
        $ca = DB::table('orders')
        ->join('customers','orders.id_customers','=','customers.id')
        ->join('keluhans','customers.id','=','keluhans.id_customers')
        ->select('orders.*','customers.nama_lengkap as name','keluhans.keluhan as kel')
        ->where('status','=',"Finish")
        ->orderBy('tanggal','dsc')
        ->get();

        return view('admin.report',compact('ca'));
    }

    public function report_print(Request $request)
    {
  
         $ca = DB::table('orders')
        ->join('customers','orders.id_customers','=','customers.id')
        ->join('keluhans','customers.id','=','keluhans.id_customers')
        ->select('orders.*','customers.nama_lengkap as name','keluhans.keluhan as kel')
        ->where('status','=',"Finish")
        ->whereMonth('tanggal', $request->mn)
        ->whereYear('tanggal', $request->yr)
        ->orderBy('tanggal','dsc')
        ->get();
 
        $pdf = PDF::loadview('admin.report_pdf',['orders'=>$ca])->setPaper('a4', 'landscape');

        return $pdf->download('laporan-order.pdf');
    }
}
