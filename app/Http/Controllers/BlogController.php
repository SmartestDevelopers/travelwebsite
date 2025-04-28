<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showBlog()
    {
        //
        return view('blog');
    }

    public function buddhistBlog()
    {
        return view('buddhistblog');
    }

    public function honeymoonBlog()
    {
        return view('honeymoonblog');
    }

    public function skarduBlog()
    {
        return view('skardublog');
    }

    public function hunzaBlog()
    {
        return view('hunzablog');
    }

    public function sikhSitesBlog()
    {
        return view('sikhsitesblog');
    }

    public function sikhGurdwaraBlog()
    {
        return view('sikhgurdwara');
    }

public function storeBlog(Request $request)
{
       // Handle the image upload
    $imagePath = $request->file('image')->store('blogs', 'public');

    // Insert the blog data into the database
    DB::table('blog')->insert([
        'title' => $request->title,
        'image' => $imagePath,
        'description' => $request->description,
    ]);

    return redirect()->back()->with('success', 'Blog has been submitted successfully!');
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
