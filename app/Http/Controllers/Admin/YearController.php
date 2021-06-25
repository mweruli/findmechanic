<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CarYear;
use Illuminate\Http\Request;
use App\Models\Make;


class YearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $years = CarYear::latest()->get();
    //    return $makes;
       return view('admin.year.index', compact('years'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $makes = Make::latest()->get(); 
       return view('admin.year.create', compact('makes')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'year' => 'required',
        ]);
        // return $request;
        $year = new CarYear();
        $year->year = $request->year;
        $year->make_id = $request->make_id;
        $year->save();

        return redirect()->route('admin.year.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $makes = Make::latest()->get(); 
        $year = CarYear::findOrFail($id);
        
        return view('admin.year.edit', compact('year', 'makes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'year' => 'required',

        ]);
        return $request;
        $years = CarYear::findOrFail($id);
        $years->year = $request->year;
       
        $years->save();
 
        return redirect()->route('admin.make.edit'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
