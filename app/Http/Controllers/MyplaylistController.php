<?php

namespace App\Http\Controllers;

use App\Myplaylist;
use App\Rehearsal;
use Illuminate\Http\Request;

class MyplaylistController extends Controller
{
        public function __construct()
    {
         $this->middleware(['auth', 'verified']);
    }
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
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addtomyplaylist(Request $request)
    {
       
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $myplaylists = new \App\Myplaylist;
        $myplaylists->user_Id = \Auth::user()->id;
        $myplaylists->pwlist_Id = $request->pwlist_Id;
        $myplaylists->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Myplaylist  $myplaylist
     * @return \Illuminate\Http\Response
     */
    public function show(Myplaylist $myplaylist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Myplaylist  $myplaylist
     * @return \Illuminate\Http\Response
     */
    public function edit(Myplaylist $myplaylist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Myplaylist  $myplaylist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Myplaylist $myplaylist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Myplaylist  $myplaylist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Myplaylist $myplaylist)
    {
        //
    }
}
