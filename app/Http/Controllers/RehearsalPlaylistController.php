<?php

namespace App\Http\Controllers;

use App\RehearsalPlaylist;
use App\Myplaylist;
use App\Rehearsal;
use Illuminate\Http\Request;

class RehearsalPlaylistController extends Controller
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
       $rehearsals = Rehearsal::where('userId',\Auth::user()->id)->pluck('eventtitle', 'id');
         $songs = \Auth::user()->playlist;
        $playlists = $songs->pluck('title', 'id');
        return view('rehearsalsplaylist.create', ['rehearsals'=> $rehearsals, 'playlists'=> $playlists]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rehearsalplaylists = new \App\RehearsalPlaylist;
        $rehearsalplaylists->rehearsal_Id = $request->rehearsals;
        $rehearsalplaylists->pwlist_Id = $request->playlists;
        $rehearsalplaylists->save();
        $request->session()->flash('success', 'Successfully added');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RehearsalPlaylist  $rehearsalPlaylist
     * @return \Illuminate\Http\Response
     */
    public function show(RehearsalPlaylist $rehearsalPlaylist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RehearsalPlaylist  $rehearsalPlaylist
     * @return \Illuminate\Http\Response
     */
    public function edit(RehearsalPlaylist $rehearsalPlaylist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RehearsalPlaylist  $rehearsalPlaylist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RehearsalPlaylist $rehearsalPlaylist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RehearsalPlaylist  $rehearsalPlaylist
     * @return \Illuminate\Http\Response
     */
    public function destroy(RehearsalPlaylist $rehearsalPlaylist)
    {
        //
    }
}
