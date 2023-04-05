<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo json_encode(Place::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Place::create([
            "title" => $request['title'],
            "short_description" => $request['short_description'],
            "title_description" => $request['title_description'],
            "description" => $request['description'],
            "main_img" => $request['main_img']
        ]);
        echo response("Successfully created", 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo json_encode(Place::findOrFail($id));
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
        Place::updateOrCreate(["id" => $id],[
            "title" => $request['title'],
            "short_description" => $request['short_description'],
            "title_description" => $request['title_description'],
            "description" => $request['description'],
            "main_img" => $request['main_img']
        ]);
        echo response("Successfully updated", 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Place::findOrFail($id)->delete();
        echo response("", 204);
    }
}