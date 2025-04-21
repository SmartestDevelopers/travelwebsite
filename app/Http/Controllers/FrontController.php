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

    public function gallery(){
        return view('gallery');
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
      
}
