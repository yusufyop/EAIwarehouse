<?php

namespace App\Http\Controllers;

use App\Models\Maintenance;
use Illuminate\Http\Request;


class MaintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Maintenance::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response    
     */
    public function create(request $request)
    {
        $maintenance = new Maintenance;
        $maintenance->quantity_exp = $request->quantity_exp;
        $maintenance->date = $request->date;
        $maintenance->save();

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
     * @param  \App\Models\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function show(Maintenance $maintenance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function edit(Maintenance $maintenance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_maintenance)
    {
        $maintenance = Maintenance::findOrFail($id_maintenance);
        $maintenance->update($request->all());

        return "Data Berhasil di Update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function delete($id_maintenance)
    {
        $maintenance = Maintenance::find($id_maintenance);
        $maintenance->delete();

        return "Data Berhasil di Hapus";
    }
}
