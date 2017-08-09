<?php

namespace App\Http\Controllers;

use DB;
use App\Reservations_item;
use Illuminate\Http\Request;

class MerchantreservController extends Controller
{
    public function show()
    {
        $reservations_items=DB::table('reservations_items')
        ->leftJoin ('items', 'items.id_item', '=', 'reservations_items.id_item')
        ->leftJoin ('reservations', 'reservations.id_reservation', '=', 'reservations_items.id_reservation')
        ->paginate(6);
        return view('merchantreserv.index',compact('reservations_items'));
    }

    public function detail($id_reservation)
    {
    	$reservations_items=DB::table('reservations_items')
        ->leftJoin ('items', 'items.id_item', '=', 'reservations_items.id_item')
        ->leftJoin ('reservations', 'reservations.id_reservation', '=', 'reservations_items.id_reservation')
        ->where('reservations.id_reservation',$id_reservation)
        ->get();

        return view('merchantreserv.detail',compact('reservations_items'));
    }

    public function approve(Request $request)
    {
        // $id_reservation = $request->get('id_reservation');
        $reservations_items=Reservations_item::find($request->id_reservation);
        $reservation_status=$request->reservation_status;
        if($reservation_status=='on')
        {
            $reservation_status=1;
        }
        else{
            $reservation_status=0;
        }
        $reservations_items->reservation_status=$reservation_status;
        $reservations_items->save();

        return redirect('mshow');

    }

    public function reject($id_reservation)
    {
        DB::table('reservations_items')
        ->where('id_reservation',$id_reservation)
        ->delete();

        return redirect('mshow');
    }
}
