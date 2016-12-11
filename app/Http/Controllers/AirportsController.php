<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Airports;

class AirportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $airports = Airports::paginate(10);
        return view('airports.index', compact('airports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $airports =Airports::all();

        return view('airports.create', compact('airports'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $airports = new Airports();
        $airports->airports = $request->input('airports');
        $airports->id_cities = $request->input('id_cities');
        $airports->id_countrys = $request->input('id_countrys');
        $airports->save();

        return redirect('/airports');
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
        $airports = Airports::find($id);

        return view('airports.edit', compact('airports'));
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
        $airports = Airports::find($id);
        $airports->airports = $request->input('airport');
        $airports->save();

        return redirect('/airports');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $airports = Airports::find($id);

        $airports->delete();

        return redirect('/airports');
    }
}
