<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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





    public function contactList(){
        $contacts = DB::table('contact_us')->get();
        
        return view('contact.view', compact('contacts'));
    }

    public function bookingList(){
        
        $bookings = DB::table('bookings')->get();

        // echo "<pre>";
        // echo "<h1>Booking List</h1>";
        // print_r($bookings);
        // echo "</pre>";
        // die();

        return view('booking.show', compact('bookings'));
    }

    public function localList(){
        $locallists = DB::table('local_experts')->get();
        
        return view('becomelocalexpert.local', compact('locallists'));
    }

    public function faqList(){
        $faqlists = DB::table('faq')->get();
        
        return view('faqs.faqlist', compact('faqlists'));
    }

    public function blogList(){
        $bloglists = DB::table('blog')->get();
        
        return view('blog.blogshow', compact('bloglists'));
    }
    public function adminSubmitTourList()
    {
        // Fetch data from the submit_tour_list table
        $toursearchlists = DB::table('submit_tour_list')->get();
    
        // Pass the data to the view
        return view('Tourlistsearch.toursearch', compact('toursearchlists'));
    }

    public function adminSubscriptionList()
    {
        // Fetch data from the subscription table
        $subscriptions = DB::table('subscription_list')->get();
    
        // Pass the data to the view
        return view('subs.subscribeemail', compact('subscriptions'));
    }
}