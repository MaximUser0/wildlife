<?php

namespace App\Http\Controllers;

use App\Models\ImgPlace;
use Illuminate\Http\Request;

class ImgPlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo json_encode(ImgPlace::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ImgPlace::create([
            "url" => $request['url'],
            "id_place" => $request['id_place'],
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
        echo json_encode(ImgPlace::findOrFail($id));
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
        ImgPlace::updateOrCreate(["id" => $id], [
            "id_place" => $request['id_place'],
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
        ImgPlace::findOrFail($id)->delete();
        echo response("", 204);
    }
}
