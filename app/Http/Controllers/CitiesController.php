<?php

namespace App\Http\Controllers;

use App\Countrys;
use Illuminate\Http\Request;
use App\Cities;
use App\Continent;

class CitiesController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }


    public function index()
    {
        $cities = Cities::paginate(10);
        return view('cities.index', compact('cities'));
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
        $cities =Cities::all();
        return view('cities.create', compact('cities','countries','continents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $city = new Cities();
        $city->cities = $request->input('cities');
        $city->id_countrys = $request->input('id_countrys');
        $city->id_continents = $request->input('id_continents');
        $city->save();

        return redirect('/cities');
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
        $city = Cities::find($id);

        return view('cities.edit', compact('city'));

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
        $cities = cities::find($id);
        $cities->cities = $request->input('cities');
        $cities->save();

        return redirect('/cities');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cities = Cities::find($id);

        $cities->delete();

        return redirect('/cities');
    }
}
