<?php

namespace App\Http\Controllers;

use App\Continent;
use App\Countrys;
use Auth;
use App\Cities;
use Illuminate\Http\Request;
use App\Airports;


class AirportsController extends Controller
{


    public function __construct(){
    $this->middleware('auth');
}
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
        $continents = Continent::orderBy('kontynent')->get();
        $countries = Countrys::orderBy('countrys')->get();
        $cities = Cities::orderBy('cities')->get();
        $airports =Airports::all();
        return view('airports.create', compact('airports','continents','countries','cities'));
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
        $airports->description = $request->input('description');
        $airports->website = $request->input('website');
        $airports->foto = $request->input('photo');
        $airports->id_cities = $request->input('id_cities');
        $airports->id_countrys = $request->input('id_countries');
        $airports->id_continents = $request->input('id_continents');
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
        $airports->description = $request->input('description');
        $airports->website = $request->input('website');
        $airports->foto = $request->input('foto');
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

    public function getLogout() {


        Auth::logout();

        return redirect('/airportsfront');

    }


}
