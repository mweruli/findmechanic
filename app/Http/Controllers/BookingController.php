<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    Public function index(Request $request){
        $request->session()->forget('booking');
        $bookings = Booking::all();
		return view('bookingindex',compact('bookings'));
    	
    }

    public function book1(Request $request){
        $booking = $request->session()->get('booking');
        $countries = DB::table("counties")->pluck("name","id");
        return view('booking',compact('booking', 'countries'));
    }
    
    Public function getlocation(Request $request){
        $countries = DB::table("counties")->pluck("name","id");
		return view('booking',compact('countries'));
    	
    }

    public function getState(Request $request)
	{
		$states = DB::table("locations")
		->where("counties_id",$request->counties_id)
		->pluck("name","id");
		return response()->json($states);
	}

    public function postlocation(Request $request){
        $validatedData = $request->validate([
        'county' => 'required',
        'state'  => 'required',
      ]);

      if(empty($request->session()->get('booking'))){
        $booking = new Booking();
        $booking->fill($validatedData);
        $request->session()->put('booking', $booking);
    }else{
        $booking = $request->session()->get('booking');
        $booking->fill($validatedData);
        $request->session()->put('booking', $booking);
        // return $booking;
    }
    return redirect()->route('booking.carModels');

    }

    public function carModels(Request $request){
        $booking = $request->session()->get('booking');
        $makes = DB::table("makes")->pluck("name","id");

        return view('carmodels',compact('booking', 'makes'));

    }

    public function getYear(Request $request)
	{
		$year = DB::table("car_years")
		->where("make_id",$request->make_id)
		->pluck("year","id");
		return response()->json($year);
	}
    public function getModel(Request $request)
	{
		$model = DB::table("car_models")
		->where("year_id",$request->year_id)
		->pluck("model","id");
		return response()->json($model);
	}
    public function getEngine(Request $request)
	{
		$engine = DB::table("car_engines")
		->where("model_id",$request->model_id)
		->pluck("engine","id");
		return response()->json($engine);
	}

    public function postcarmodels(Request $request)
    {
        $validatedData = $request->validate([
            'make' => 'required',
            'year' => 'required',
            'engine' => 'required',
            'model' => 'required',
        ]);
        
  
        $booking = $request->session()->get('booking');
        $booking->fill($validatedData);
        $request->session()->put('booking', $booking);
        return redirect()->route('booking.services');
    }
    public function services(Request $request)
    {
        $booking = $request->session()->get('booking');
  
        return view('carservice',compact('booking'));
    }

}
