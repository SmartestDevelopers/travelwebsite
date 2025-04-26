<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tourBuddhistDetails()
    {
        //
        return view('buddhisttour');
    }

    public function sikhNatureTour()
    {
        //
        return view('sikhnaturetour');
    }

    public function sikhSiteTour()
    {
        //
        return view('siksitetour');
    }
    public function sikhReligiousTour()
    {
        //
        return view('sikhreligioustour');
    }


    public function skarduTour()
    {
        //
        return view('skardutour');
    }

    public function skarduWaterfallTour()
    {
        //
        return view('skarduwaterfall');
    }

    public function hunzaValley()
    {
        //
        return view('hunzavalley');
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
