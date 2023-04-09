<?php

namespace App\Http\Controllers;

use App\Models\ImgTour;
use App\Models\Request as ModelsRequest;
use App\Models\Tour;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo json_encode(ModelsRequest::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ModelsRequest::create([
            "id_tour" => $request['id_tour'],
            "name" => $request['name'],
            "date_born" => $request['date_born'],
            "phone_number" => $request['phone_number'],
            "gmail" => $request['gmail'],
            "card_number" => $request['card_number'],
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
        echo json_encode(ModelsRequest::findOrFail($id));
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
        ModelsRequest::updateOrCreate(["id" => $id], [
            "id_tour" => $request['id_tour'],
            "name" => $request['name'],
            "date_born" => $request['date_born'],
            "phone_number" => $request['phone_number'],
            "gmail" => $request['gmail'],
            "card_number" => $request['card_number'],
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
        ModelsRequest::findOrFail($id)->delete();
        echo response("", 204);
    }
}
