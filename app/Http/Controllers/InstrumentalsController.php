<?php

namespace App\Http\Controllers;

use App\Instrumentals;
use Illuminate\Http\Request;

class InstrumentalsController extends Controller
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
        $instrumentalsCat = Instrumentals::pluck('category', 'id');

    //   return Response($instrumentalsCat,200);
       return view('pwlist.create', ['instrumentalsCat'=> $instrumentalsCat]);
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
     * @param  \App\Instrumentals  $instrumentals
     * @return \Illuminate\Http\Response
     */
    public function show(Instrumentals $instrumentals)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Instrumentals  $instrumentals
     * @return \Illuminate\Http\Response
     */
    public function edit(Instrumentals $instrumentals)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Instrumentals  $instrumentals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Instrumentals $instrumentals)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Instrumentals  $instrumentals
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instrumentals $instrumentals)
    {
        //
    }
}
