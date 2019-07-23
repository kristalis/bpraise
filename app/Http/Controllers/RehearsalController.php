<?php

namespace App\Http\Controllers;

use App\Rehearsal;
use App\Myplaylist;
use Illuminate\Http\Request;
use Carbon\Carbon;

class RehearsalController extends Controller
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
      //  $myplaylists = \Auth::user()->playlist;

      
       return view('rehearsals.create');

    }
   


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * Carbon\Carbon::parse(Auth::user()->created_at)->toDateTimeString() }}
     */
    public function store(Request $request)
    {
        //$this->formValidation($request);
        $rehearsals = new \App\Rehearsal;
        
        $rehearsals->userId = \Auth::user()->id;
        $rehearsals->eventtitle = $request->eventtitle;
        $rehearsals->eventdate =  Carbon::parse($request->eventdate)->toDateTimeString();
        $rehearsals->slug = str_slug($request->title, '-');
        $rehearsals->startdate = Carbon::parse($request->startdate)->toDateTimeString();
        $rehearsals->occurrence = $request->occurrence;
       

        $rehearsals->save();
        $request->session()->flash('success', 'Successfully added');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rehearsals  $rehearsals
     * @return \Illuminate\Http\Response
     */
    public function show(Rehearsals $rehearsals)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rehearsals  $rehearsals
     * @return \Illuminate\Http\Response
     */
    public function edit(Rehearsals $rehearsals)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rehearsals  $rehearsals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rehearsals $rehearsals)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rehearsals  $rehearsals
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rehearsals $rehearsals)
    {
        //
    }
}
