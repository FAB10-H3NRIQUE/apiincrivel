<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LocalityModel;

class LocalityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locality = LocalityModel::all();
        return response()->json($locality);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "street"=>"required",
            "neighborhood"=>"required",
            "number"=>"required",
            "cep"=>"required",
            "city"=>"required",
            "state"=>"required",
            "country"=>"required",
        ]);
        $locality = LocalityModel::create($validatedData);

        return response()->json($locality, 201);
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $locality = LocalityModel::find($id);

        if(!$locality){
            return response()->json(["message" =>"Locality not found"], 404);
        }

        return response()->json($locality);
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $locality = LocalityModel::find($id);

        if(!$locality){
            return response()->json(["message" =>"Locality not found"], 404);
        }

        $validatedData = $request->validate([
            "street"=>"required",
            "neighborhood"=>"required",
            "number"=>"required",
            "cep"=>"required",
            "city"=>"required",
            "state"=>"required",
            "country"=>"required",
        ]);

        $locality->update($validatedData);

        return response()->json($locality, 200);
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $locality = LocalityModel::find($id);

        if(!$locality){
      return response()->json(["message" => "Locality not found"], 404);
        }

        $locality->delete();

        return response()->json(["message" => "Locality deleted sucessefully"], 200);

        //
    }
}