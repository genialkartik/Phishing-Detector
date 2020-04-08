<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\urls;

class UrlsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enteredURL = $_GET['url'];
        $item = urls::where('url', $enteredURL)->get();
        return view('url.index')->with(['item' => $item, 'enteredURL' => $enteredURL]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('url.insertURL');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'url' => 'required'
        ]);
        $i_url = new urls;
        $i_url->url = $request->input('url');
        $i_url->save();
        //return redirect('/phishedURL');
        return view('url.insertURL');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
    public function listAll(){
        $urls = urls::orderBy('created_at','desc')->simplePaginate(5);
        return view('url.phishedURL')->with('urls', $urls);
        
    }
    
}
