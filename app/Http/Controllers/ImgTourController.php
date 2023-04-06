<?php

namespace App\Http\Controllers;

use App\Models\ImgTour;
use Illuminate\Http\Request;

class ImgTourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo json_encode(ImgTour::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ImgTour::create([
            "url" => $request['url'],
            "id_tour" => $request['id_tour'],
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
        echo json_encode(ImgTour::findOrFail($id));
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
        ImgTour::updateOrCreate(["id" => $id], [
            "id_tour" => $request['id_tour'],
            "url" => $request['url'],
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
        ImgTour::findOrFail($id)->delete();
        echo response("", 204);
    }
}
