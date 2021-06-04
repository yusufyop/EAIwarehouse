<?php

namespace App\Http\Controllers;

use App\Models\warehouse;
use Illuminate\Http\Request;


class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Warehouse::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        $Warehouse = new Warehouse;
        $warehouse->location = $request->location;
        $warehouse->capacity = $request->capacity;

        $warehouse->save();

        return "Data Berhasil Masuk";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\warehouse  
     * @return \Illuminate\Http\Response
     */
    public function show(Warehouse $warehouse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\warehouse 
     * @return \Illuminate\Http\Response
     */
    public function edit(Warehouse $warehouse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\warehouse  $inbound
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $warehouse_id)
    {
        $warehouse = warehouse::findOrFail($warehouse_id);
        $warehouse->update($request->all());

        return "Data Berhasil di Update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\warehouse  $inbound
     * @return \Illuminate\Http\Response
     */
    public function delete($warehouse_id)
    {
        $warehouse = warehouse::find($warehouse_id);
        $warehouse->delete();

        return "Data Berhasil di Hapus";
    }
}
