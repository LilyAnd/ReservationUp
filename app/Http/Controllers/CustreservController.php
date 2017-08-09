<?php

namespace App\Http\Controllers;

use DB;
use App\Customer;
use App\Merchant;
use App\Item;
use Illuminate\Http\Request;

class CustreservController extends Controller
{
    //
    public function daftar()
    {
        $merchants=Merchant::all();
        return view('custreserv.daftar',compact('merchants'));
    }

    public function index($id_merchant)
    {
    	$merchants=DB::table('merchants')
        ->where('merchants.id_merchant',$id_merchant)
        ->get();
    	$items=DB::table('items')
    	->leftJoin ('merchants', 'merchants.id_merchant', '=', 'items.id_merchant')
        ->where('items.id_merchant',$id_merchant)
    	->select('items.item_name','items.item_price','items.item_stock','merchants.merchant_name','merchants.start_time','merchants.end_time')
    	->get();

    	return view('custreserv.detail',compact('merchants','items'));
    }


    public function reservasi($id_merchant)
    {
        $customers=Customer::all();
        $reservations=DB::table('reservations')
        ->rightjoin('merchants', 'reservations.id_merchant', '=', 'merchants.id_merchant')
        ->where('merchants.id_merchant',$id_merchant)
        ->get();
        $merchants=DB::table('merchants')
        ->where('merchants.id_merchant',$id_merchant)
        ->get();
        $items=DB::table('items')
        ->leftJoin ('merchants', 'merchants.id_merchant', '=', 'items.id_merchant')
        ->where('merchants.id_merchant',$id_merchant)
        ->get();
        return view('custreserv.reservasi',compact('items','merchants','reservations','customers'));
    }

    public function postReservasi(Request $request)
    {
        // dd($request->all());
        $reservations_items=DB::table('reservations_items')
        ->leftJoin ('reservations', 'reservations.id_reservation', '=', 'reservations_items.id_reservation')
        ->leftJoin ('items', 'items.id_item', '=', 'reservations_items.id_item')
        
        ->paginate(6);
        $id_merchant=$request->input('id_merchant');
        $id_reservation=$request->input('id_reservation');
        $id_item=$request->input('id_item');
        $reservation_status=$request->input('reservation_status');
        $id_customer=$request->input('id_customer');
        $quantity=$request->input('quantity');
        $total_price=$request->input('total_price');
        $reservation_date=$request->input('reservation_date');
        $id_reservation=DB::table('reservations')->insertGetId([
            'id_merchant'=>$id_merchant,
            'id_customer'=>$id_customer,
            'reservation_date'=>$reservation_date
            ]);
        foreach ($id_item as $key => $value) {
        DB::table('reservations_items')->insert
        ([
            "id_reservation"=>$id_reservation,
            "id_item"=>$value,
            'reservation_status'=>$reservation_status,
            "total_price"=>$total_price,
            "quantity"=>$quantity[$key]
        ]);
       }

       return redirect ('show');
    }

    public function show()
    {
        $reservations_items=DB::table('reservations_items')
        ->leftJoin ('items', 'items.id_item', '=', 'reservations_items.id_item')
        ->leftJoin ('reservations', 'reservations.id_reservation', '=', 'reservations_items.id_reservation')
        ->paginate(6);
        return view('custreserv.tabel',compact('reservations_items'));
    }
}
