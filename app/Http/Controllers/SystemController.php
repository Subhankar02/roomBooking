<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Customer;
use App\Models\BookedRoom;
use Carbon\Carbon;

class SystemController extends Controller
{
    public function indexView(){
        return view('index');
    }
    // public function bookedRoomsView(){
    //     return view('bookedRooms');
    // }
    public function bookRoom(Request $request){
        // dd($request->all());
        DB::begintransaction();
        try{
            $customerUid    = 'CUSTOMER'.time().'_'.uniqid();
            $bookingUid     = 'BOOKING_'.time().'_'.uniqid();
            $addData    = new Customer;
            $bookRoom   = new BookedRoom;
            $addData->uid           = $customerUid;
            $addData->name          = $request->name;
            $addData->phone         = $request->mobile;
            $addData->email         = $request->email;
            $addData->address       = $request->address;
            $addData->age           = $request->age;
            $addData->created_at    = Carbon::now();
            $addData->updated_at    = Carbon::now();

            $bookRoom->uid                  = $bookingUid;
            $bookRoom->customer_id          = $customerUid;
            $bookRoom->quantity_ac          = ($request->quantityAc)?$request->quantityAc:"0";
            $bookRoom->booking_date_ac      = ($request->bookingDateAc)?$request->bookingDateAc:"0";
            $bookRoom->leaving_date_ac      = ($request->leavingDateAc)?$request->leavingDateAc:"0";
            $bookRoom->total_amount_ac      = ($request->total_amount_ac)?$request->total_amount_ac:"0";
            $bookRoom->quantity_non_ac	    = ($request->quantityNonAc)?$request->quantityNonAc:"0";
            $bookRoom->booking_date_non_ac  = ($request->bookingDateNonAc)?$request->bookingDateNonAc:"0";
            $bookRoom->leaving_date_non_ac  = ($request->leavingDateNonAc)?$request->leavingDateNonAc:"0";
            $bookRoom->total_amount_non_ac  = ($request->total_amount_non_ac)?$request->total_amount_non_ac:"0";
            $bookRoom->created_at    = Carbon::now();
            $bookRoom->updated_at    = Carbon::now();
            $addData->save();
            $bookRoom->save();
            DB::commit();
            return redirect('/');

        }catch(\Exception $e){
            $data=[
                'success' => false,
                'msg' =>[$e->errorInfo[2]]
            ];
            return response()->json($data);
        }
    }

    public function bookedRoomsView(){
        $getData = DB::table('customers')
                        ->join('booked_rooms', 'customers.uid', '=', 'booked_rooms.customer_id')
                        ->select('customers.name','customers.phone','customers.email','booked_rooms.quantity_ac','booked_rooms.booking_date_ac','booked_rooms.total_amount_ac')
                        ->get();
        return view('bookedRooms', ['data' => $getData]);
    }
}
