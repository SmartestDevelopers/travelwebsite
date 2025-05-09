<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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

    public function myLogin(Request $request){

        // logic = every programming language starts with logic, 
        // (1) variable declaration $, var, let, const, 
        // (2) data types int, float, string, boolean, array, object, null,
        // (3) operators +, -, *, /, %, ==, !=, ===, !==,
        // (4) control structures if, else if, else, switch, case, default, for, foreach
        // (5) functions, methods, classes, objects, inheritance, polymorphism, encapsulation,
        // (6) arrays, objects, collections, maps, sets, stacks, queues, trees,
        // (7) exceptions, error handling, try, catch, finally, throw, throw exception,
        // (8) file input/output, file read, file write, file append, file delete,
        // (9) database, CRUD, select, insert, update, delete, join, subquery
        // (10) security, authentication, authorization, encryption, decryption, hashing, salting, password
        // (11) web development, http, https, http request, http response, http method,
        // (12) web framework, mvc, mvp, mvvm, rest, soap,
        // (13) testing, unit testing, integration testing, functional testing, black box testing, whit
        // box testing, smoke testing, regression testing, sanity testing, exploratory testing, acceptance testing,
        // (14) deployment, continuous integration, continuous deployment, continuous delivery, continuous monitoring, continuous testing
        // (15) cloud computing, aws, azure, google cloud, ibm cloud, oracle cloud
        // (16) machine learning, deep learning, natural language processing, computer vision, reinforcement learning,
        // (17) data science, data analysis, data visualization, data mining, data warehousing,
        // (18) big data, hadoop, spark, flink, kafka, cassandra,
        // (19) cybersecurity, threat modeling, risk assessment, vulnerability assessment, penetration testing, security testing
        // (20) DevOps, agile, scrum, kanban, lean, six sigma,
        // (21) project management, gantt, asana, trello, basecamp
        // (22) agile methodologies, scrum, kanban, lean, six sigma, extreme programming
        // (23) software development methodologies, waterfall, v model, spiral model, prototyping model,
        // (24) software testing methodologies, black box testing, white box testing, gray box testing,
        // (25) software testing techniques, equivalence partitioning, boundary value analysis, state transition testing,


        $record = $request->all();
        $email = $record['email'];
        $password = $record['password'];

        
        $loggedInDetail = DB::table('users')->where('email', $email)->first();


        if($loggedInDetail){
            if (Hash::check($password, $loggedInDetail->password)) {
                // Password matches
               
            //    echo "matches success";
                //return redirect()->back()->with('Success', 'Login successful!');
                return redirect('home');
            } else {
                // Invalid email or password
    
                echo "matches Failed";
                //return redirect()->back()->with('Error', 'Invalid credentials');
            }
        }else{
            echo "Email not exists";
        }
        //print_r($loggedInDetail);


       // die();
       



    }

    public function becomeLocalExpert(){

        $faqlists = DB::table('faq')->get();
        return view('becomeLocalExpert', compact('faqlists'));

    }
    
    public function registerLocalExpert(Request $request)
{
    $record = $request->all();
    $name = $record['name'];
    $email = $record['email'];
    $phone = $record['phone'];
    $location = $record['location'];
    $expertise = $record['expertise'];
    $experience = $record['experience'];
    $availability = $record['availability'];

    // Insert the record into the database
    DB::table('local_experts')->insert([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'location' => $request->location,
        'expertise' => $request->expertise,
        'experience' => $request->experience,
        'availability' => $request->availability,
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    // Redirect with a success message
    return redirect()->back()->with('success', 'Your application has been submitted successfully!');
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

        
        $record = $request->all();
        $name = $record['name'];
        $email = $record['email'];
        $message = $record['message'];
        // Insert the record into the database
        DB::table('contact_us')->insert(
            ['name' => $name, 
            'email' => $email, 
            'message'=>$message]);
            
            // Redirect with a success message
            return redirect()->back()->with('Success','Your message has been sent successfully!');

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

    // public function gallery(){
    //     return view('gallery');
    // }

    public function termsAndConditions(){
        return view('termsandconditions');
    }

    public function privacyPolicy(){
        return view('privacypolicy');
    }
    
    public function register(Request $request){


        $record = $request->all();

        $name = $record['name'];
        $email = $record['email'];
        $password = $record['password'];

        // Insert the record into the database
        DB::table('users')->insert(
            ['name' => $name, 
            'email' => $email, 
            'created_at' => now(),
            'updated_at' => now(), 
            'password'=> Hash::make($password)
            
            ]);
            
            // Redirect with a success message
            return redirect()->back()->with('Success','You have successfully registered!');
        }
   

    //     public function signupDataInsert(Request $request){


    //         $record = $request->all();
    
    //         $username = $record['username'];
    //         $email = $record['email'];
    //         $password = $record['password'];
    
    //         // Insert the record into the database
    //         DB::table('sign_up')->insert(
    //             ['username' => $username, 
    //             'email' => $email, 
    //             'created_at' => now(),
    //             'updated_at' => now(), 
    //             'password'=> Hash::make($password)
                
    //             ]);
                
    //             // Redirect with a success message
    //             return redirect()->back()->with('Success','You have successfully registered!');
    //         }


    //         public function userLogin(Request $request){
    //             $record = $request->all();
    //     $email = $record['email'];
    //     $password = $record['password'];

        
    //     $loggedInDetail = DB::table('sign_up')->where('email', $email)->first();


    //     if($loggedInDetail){
    //         if (Hash::check($password, $loggedInDetail->password)) {
    //             // Password matches
               
    //         //    echo "matches success";
    //             //return redirect()->back()->with('Success', 'Login successful!');
    //             return redirect('userdashboard');
    //         } else {
    //             // Invalid email or password
    
    //             echo "matches Failed";
    //             //return redirect()->back()->with('Error', 'Invalid credentials');
    //         }
    //     }else{
    //         echo "Email not exists";
    //     }
    //     //print_r($loggedInDetail);


    //    // die();

    // }

       
        public function submitTourList(Request $request)
        {
            // Validate the incoming request data
            $request->validate([
                'destination' => 'required|string|max:255',
                'daterange' => 'required|string',
                'adult_number' => 'required|integer|min:0',
                'child_number' => 'required|integer|min:0',
                'price' => 'nullable|string',
            ]);
        
            // Parse the daterange into start_date and end_date
            $dates = explode(' - ', $request->input('daterange'));
            $start_date = \Carbon\Carbon::createFromFormat('d/m/Y', trim($dates[0]))->format('Y-m-d');
            $end_date = \Carbon\Carbon::createFromFormat('d/m/Y', trim($dates[1]))->format('Y-m-d');
        
            // Store the data in the session
            session([
                'destination' => $request->input('destination'),
                'start_date' => $start_date,
                'end_date' => $end_date,
                'adult_number' => $request->input('adult_number'),
                'child_number' => $request->input('child_number'),
                'price' => $request->input('price'),
            ]);
        
            // Insert data into the submit_tour_list table
            DB::table('submit_tour_list')->insert([
                'destination' => $request->input('destination'),
                'start_date' => $start_date,
                'end_date' => $end_date,
                'adult_number' => $request->input('adult_number'),
                'child_number' => $request->input('child_number'),
                'price' => $request->input('price'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        
            // Redirect back to the tourList page with a success message
            return redirect('/tour-list')->with('success', 'Tour list submitted successfully!');
        }

        public function tourBooking(){
            return view('booking');
        }


        public function insertBookingRecord(Request $request)
        {

            $request->validate([
    'firstname' => 'required|string|max:255',
    'lastname' => 'required|string|max:255',
    'email' => 'required|email|max:255',
    'phone' => 'required|string|max:20',
    'address' => 'required|string|max:255',
    'country' => 'required|string|max:255',
    'tour' => 'required|string|max:255',
    'date_from' => 'required|date',
    'date_to' => 'required|date|after_or_equal:date_from',
    'adults' => 'required|integer|min:1',
    'kids' => 'nullable|integer|min:0',
    'promotional_offers' => 'nullable|boolean', // Optional field
]);
            $record = $request->all();
            $firstname = $record['firstname'];
            $lastname = $record['lastname'];
            $email = $record['email'];
            $phone = $record['phone'];
            $address = $record['address'];
            $country = $record['country'];
            $tour = $record['tour'];
            $date_from = $record['date_from'];
            $date_to = $record['date_to'];
            $adults = $record['adults'];
            $kids = $record['kids'];
            $promotional_offers = $record['promotional_offers'];
    

    // Insert the booking record into the database
    DB::table('bookings')->insert([
        'firstname' => $request->input('firstname'),
        'lastname' => $request->input('lastname'),
        'email' => $request->input('email'),
        'phone' => $request->input('phone'),
        'address' => $request->input('address'),
        'country' => $request->input('country'),
        'tour' => $request->input('tour'),
        'date_from' => $request->input('date_from'),
        'date_to' => $request->input('date_to'),
        'adults' => $request->input('adults'),
        'kids' => $request->input('kids', 0), // Default to 0 if not provided
        'promotional_offers' => $request->has('promotional_offers') ? 1 : 0, // Save 1 if checked, 0 otherwise
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Booking record inserted successfully!');
}


    public function subscriptionList(Request $request)
    {
        $record = $request->all();
        $email = $record['email'];
        // Insert the record into the database
        DB::table('subscription_list')->insert(
            ['email' => $email, 
            'created_at' => now(),
            'updated_at' => now()
            
            ]);
            
            // Redirect with a success message
            return redirect()->back()->with('Success','You have successfully subscribed!');
    }
    
}
