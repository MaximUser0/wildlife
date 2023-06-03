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
        $name = "img/download/" . time() . $_FILES['url']['name'];
        copy($_FILES['url']['tmp_name'], $name);
        ImgTour::create([
            "url" => $name,
            "id_tour" => $request['id_tour'],
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
        $img  = ImgTour::findOrFail($id);
        unlink($img->url);
        $img->delete();
        echo response("", 204);
        return back()->withInput();
    }
}
