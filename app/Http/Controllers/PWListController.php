<?php

namespace App\Http\Controllers;

use App\Pwlist;
use App\Instrumentals;
use Illuminate\Http\Request;

class PWListController extends Controller
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
    
       return view('pwlist.create');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createWorship()
    {    
       $bnworship = PWlist::where('pwtype','w')->get();
       return view('pwlist.worship',['bnworship'=>$bnworship]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPraise()
    {    
       $bnworship = PWlist::where('pwtype','p')->get();
       return view('pwlist.praise',['bnworship'=>$bnworship]);
    }
     

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$this->formValidation($request);
        $pwlists = new \App\Pwlist;
        
        $pwlists->userId = \Auth::user()->id;
        $pwlists->title = $request->title;
        $pwlists->slug = str_slug($request->title, '-');
        $pwlists->songwriter = $request->songwriter;
        $pwlists->vocalsURL = $request->vocalsURL;
        $pwlists->pwtype = $request->pwtype;

        $pwlists->save();

        $myplaylists = new \App\Myplaylist;
        $myplaylists->user_Id = \Auth::user()->id;
        $myplaylists->pwlist_Id = $pwlists->id;
        $myplaylists->save();

        $request->session()->flash('success', 'Successfully added');
        return back();
      //  return redirect()->to('/chapters/'.$books->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PWList  $pWList
     * @return \Illuminate\Http\Response
     */
    public function show(PWList $pWList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PWList  $pWList
     * @return \Illuminate\Http\Response
     */
    public function edit(PWList $pWList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PWList  $pWList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PWList $pWList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PWList  $pWList
     * @return \Illuminate\Http\Response
     */
    public function destroy(PWList $pWList)
    {
        //
    }
}
