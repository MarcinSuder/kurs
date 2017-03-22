<?php

namespace App\Http\Controllers;

use App\Comments;
use App\Http\Requests\CommentsRequest;
use Illuminate\Http\Request;
use App\Airports;
use App\Countrys;
use App\Cities;
use Auth;


class AirportsfrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $continents = Continent::all();
        $airports = Airports::orderBy('airports')->paginate(70);

        return view('airportsfront.index', compact('airports','continents'));
    }


    public function start() {



        return view('airportsfront.start');
    }


    public function airportsbycontinent($id)
    {
        $continent = Continent::where('id',$id)->get();
        $countries = Countrys::where('id_continents',$id)->orderBy('countrys')->get();
        $airports = Airports::where('id_continents',$id)->orderBy('airports')->paginate(50);


        return view('airportsfront.airportsbycontinent',compact('countries','airports','continent'));

    }


    public function airportsbycountry($id)
    {

        $country = Countrys::where('id',$id)->get();
        $cities = Cities::where('id_countrys',$id)->orderBy('cities')->get();
        $airports = Airports::where('id_countrys',$id)->orderBy('airports')->paginate(30);

        return view('airportsfront.airportsbycountry',compact('cities','airports','country'));
    }


    public function airportsbycity($id)
    {
        $city = Cities::where('id',$id)->get();
        $airports = Airports::where('id_cities',$id)->orderBy('airports')->paginate(12);

        return view('airportsfront.airportsbycity',compact('airports','city'));

    }



    public function airport($id){


        $comments = Comments::where('id_airports', $id)->get();
        $airports = Airports::where('id', $id)->get();

        $cityId = $airports[0]->id_cities;
        $countryId = $airports[0]->id_countrys;
        $continentsId = $airports[0]->id_continents;

        $city = Cities::where('id', $cityId)->get();
        $country = Countrys::where('id', $countryId)->get();
        $continent = Continent::where('id', $continentsId)->get();




        return view('airportsfront.showairport',compact('airports','city','country','continent','comments'));

    }


    public function contact()
    {

        return view('airportsfront.contact');
    }
    public function offer()
    {

        return view('airportsfront.offer');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function store(CommentsRequest $request,$id)
    {
          $comment = new Comments();
          $comment->nick = $request->input('nick');
          $comment->comments = $request->input('comment');
          $comment->id_airports = $id;
            $comment->save();
        return redirect()->route('showairport',$id);

    }


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
        //
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
        //
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
