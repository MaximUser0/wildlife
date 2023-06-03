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
        $name = "img/download/" . time() . $_FILES['main_img']['name'];
        copy($_FILES['main_img']['tmp_name'], $name);
        Place::create([
            "title" => $request['title'],
            "short_description" => $request['short_description'],
            "title_description" => $request['title_description'],
            "description" => $request['description'],
            "main_img" => $name
        ]);
        echo response("Successfully created", 200);
        return back()->withInput();
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
        if ($_FILES['main_img']['name'] == null) {
            Place::updateOrCreate(["id" => $id], [
                "title" => $request['title'],
                "short_description" => $request['short_description'],
                "title_description" => $request['title_description'],
                "description" => $request['description']
            ]);
        } else {
            $name = "img/download/" . time() . $_FILES['main_img']['name'];
            copy($_FILES['main_img']['tmp_name'], $name);
            Place::updateOrCreate(["id" => $id], [
                "title" => $request['title'],
                "short_description" => $request['short_description'],
                "title_description" => $request['title_description'],
                "description" => $request['description'],
                "main_img" => $name
            ]);
        }
        echo response("Successfully updated", 200);
        return back()->withInput();
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