<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo json_encode(Tour::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tour::create([
            "id_place" => $request['id_place'],
            "title" => $request['title'],
            "short_description" => $request['short_description'],
            "description" => $request['description'],
            "people_count" => $request['people_count'],
            "priсe" => $request['priсe'],
            "main_img" => $request['main_img'],
            "description_img" => $request['description_img'],
            "complexity" => $request['complexity'],
            "features" => $request['features'],
            "date" => $request['date'],
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
        echo json_encode(Tour::findOrFail($id));
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
        Tour::updateOrCreate(["id" => $id], [
            "id_place" => $request['id_place'],
            "title" => $request['title'],
            "short_description" => $request['short_description'],
            "description" => $request['description'],
            "people_count" => $request['people_count'],
            "priсe" => $request['priсe'],
            "main_img" => $request['main_img'],
            "description_img" => $request['description_img'],
            "complexity" => $request['complexity'],
            "features" => $request['features'],
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
        Tour::findOrFail($id)->delete();
        echo response("", 204);
    }
}
