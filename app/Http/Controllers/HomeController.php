<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rehearsal;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
         $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $bnrehearsal = Rehearsal::where('userId','=',\Auth::user()->id)->get();
       return view('home',['bnrehearsal'=>$bnrehearsal]);
    
    }
}
