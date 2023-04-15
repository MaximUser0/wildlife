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
        $name = "img/download/" . time() . $_FILES['main_img']['name'];
        copy($_FILES['main_img']['tmp_name'], $name);
        $desName = "img/download/" . time() . $_FILES['description_img']['name'];
        copy($_FILES['description_img']['tmp_name'], $desName);
        $features = $request['f1'].'%'.$request['f2'].'%'.$request['f3'].'%'.$request['f4'];
        Tour::create([
            "id_place" => $request['id_place'],
            "title" => $request['title'],
            "short_description" => $request['short_description'],
            "description" => $request['description'],
            "people_count" => $request['people_count'],
            "priсe" => $request['priсe'],
            "main_img" => $name,
            "description_img" => $desName,
            "complexity" => $request['complexity'],
            "features" => $features,
            "date" => $request['date'],
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
        $features = $request['f1'].'%'.$request['f2'].'%'.$request['f3'].'%'.$request['f4'];
        $data = [
            "id_place" => $request['id_place'],
            "title" => $request['title'],
            "short_description" => $request['short_description'],
            "description" => $request['description'],
            "people_count" => $request['people_count'],
            "priсe" => $request['priсe'],
            "complexity" => $request['complexity'],
            "features" => $features,
        ];
        if ($_FILES['main_img']['name'] != null) {
            $name = "img/download/" . time() . $_FILES['main_img']['name'];
            copy($_FILES['main_img']['tmp_name'], $name);
            $data["main_img"] = $name;
        };
        if ($_FILES['description_img']['name'] != null) {
            $desName = "img/download/" . time() . $_FILES['description_img']['name'];
            copy($_FILES['description_img']['tmp_name'], $desName);
            $data["description_img"] = $desName;
        };

        Tour::updateOrCreate(["id" => $id], $data);
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
        Tour::findOrFail($id)->delete();
        echo response("", 204);
    }
}
