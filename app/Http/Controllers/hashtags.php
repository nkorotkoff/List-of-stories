<?php

namespace App\Http\Controllers;

use App\Models\hashtag;
use App\Models\history;
use Illuminate\Http\Request;

class hashtags extends Controller
{
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
        //
    }


    public function all()
    {
            $all = hashtag::all();
            return view('allhashtags',['all'=>$all]);
    }


    public function show($id)
    {
        $hastag = hashtag::find($id);
        return view('searchHashTag',['hashtag'=>$hastag]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hashtag  $hashtag
     * @return \Illuminate\Http\Response
     */
    public function edit(hashtag $hashtag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\hashtag  $hashtag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hashtag $hashtag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hashtag  $hashtag
     * @return \Illuminate\Http\Response
     */
    public function destroy(hashtag $hashtag)
    {
        //
    }
}
