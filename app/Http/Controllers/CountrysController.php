<?php

namespace App\Http\Controllers;


use App\Continent;
use Illuminate\Http\Request;
use App\Countrys;

class CountrysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countrys = Countrys::paginate(10);
        return view('countrys.index', compact('countrys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $continents = Continent::orderBy('kontynent')->get();
        $countrys =Countrys::orderBy('countrys')->get();
        return view('countrys.create', compact('countrys','continents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $country = new Countrys();
        $country->countrys = $request->input('countrys');
        $country->id_continents = $request->input('id_continents');
        $country->save();

        return redirect('/countrys');
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
        $countrys = Countrys::find($id);

        return view('countrys.edit', compact('countrys'));
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
        $country = Countrys::find($id);
        $country->countrys = $request->input('country');
        $country->save();

        return redirect('/countrys');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $country = Countrys::find($id);

        $country->delete();

        return redirect('/countrys');
    }
}
