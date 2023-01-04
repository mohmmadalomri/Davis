<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $home = Home::all();
        return view('dashboard.account', compact('home'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $home = Home::all();
        $homes = new Home();
        return view('dashboard.account', compact('home', 'homes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $home = new Home();
        $home->name = $request->name;
        $home->description = $request->description;
        $home->facbook = $request->facbook;
        $home->twitter = $request->twitter;
        $home->gethub = $request->gethub;


        $image = $request->file('image');
        if ($request->hasFile('image')) {
            $imageurl = $image->store('homs', 'public');
            $home->image = $imageurl;
        }
        $home->save();
        return redirect('/account')->with('done', 'profile saved');
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
