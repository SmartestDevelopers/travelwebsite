<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function signup()
    {
        return view('signup');
    }

    public function login()
    {
        return view('login');
    }

    public function becomeLocalExpert(){

        return view('becomeLocalExpert');

    }


    public function tourList(){
        return view('tourList');
    }

    public function tourDetails(){
        return view('tour-details');
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

    public function contactUs(){
        return view('contactUs');
    }


    public function insertContactRecord(Request $request){
        // echo "<pre>";
        // print_r($request->all());
        // echo "</pre>";

        $record = $request->all();


        $name = $record['name'];
        $email = $record['email'];
        $message = $record['message'];
        DB::table('contact_us')->insert(
            ['name' => $name, 'email' => $email, 'message'=>$message]);
            return redirect()->back()->with('success','your record has been successfully submited!');
    }

    public function about(){
        return view('about');
    }

    public function services(){
        return view('services');
    }
    public function blog(){
        return view('blog');
    }

    public function gallery(){
        return view('gallery');
    }

    public function register(Request $request){
        // echo "<pre>";
        // print_r($request->all());
        // echo "</pre>";

        // Validate the form input
    $request->validate([
        'username' => 'required|string|max:255',
        'email' => 'required|email|unique:sign_up,email',
        'password' => 'required|string|min:8|confirmed',
    ]);

        // $record = $request->all();

        // $username = $record['username'];
        // $email = $record['email'];
        // $password = $record['password'];

        // Insert the record into the database
        DB::table('sign_up')->insert(
            ['username' => $username, 
            'email' => $email, 
            'password'=>$password]);
            
            // Redirect with a success message
            return redirect()->back()->with('Success','You have successfully registered!');
        }
      
}
