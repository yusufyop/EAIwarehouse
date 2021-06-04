<?php

namespace App\Http\Controllers;

use App\Models\Inbound;
use Illuminate\Http\Request;


class InboundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inbound::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        $inbound = new Inbound;
        $warehouse = Warehouse::join('warehouses','warehouse.id', '=','inbounds.warehouse_id')->
        select('warehouses.warehouse_id')->
        where('inbounds.warehouse_id', '=', $warehouse_id)->get();
        $inbound->delivery_id = $request->delivery_id;
        $inbound->product_id = $request->product_id;
        $inbound->in_date = $request->in_date;
        $inbound->quantity_in = $request->quantity_in;
        $inbound->save();

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
     * @param  \App\Models\Inbound  $inbound
     * @return \Illuminate\Http\Response
     */
    public function show(Inbound $inbound)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inbound  $inbound
     * @return \Illuminate\Http\Response
     */
    public function edit(Inbound $inbound)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inbound  $inbound
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $inbound_id)
    {
        $inbound = Inbound::findOrFail($inbound_id);
        $inbound->update($request->all());

        return "Data Berhasil di Update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inbound  $inbound
     * @return \Illuminate\Http\Response
     */
    public function delete($inbound_id)
    {
        $inbound = Inbound::find($inbound_id);
        $inbound->delete();

        return "Data Berhasil di Hapus";
    }
}
