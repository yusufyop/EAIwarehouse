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
        $inbound->nama_barang = $request->nama_barang;
        $inbound->jenis_barang = $request->jenis_barang;
        $inbound->jumlah_barang = $request->jumlah_barang;
        $inbound->tanggal_masuk = $request->tanggal_masuk;
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
    public function update(Request $request, $id_inbound)
    {
        $inbound = Inbound::findOrFail($id_inbound);
        $inbound->update($request->all());

        return "Data Berhasil di Update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inbound  $inbound
     * @return \Illuminate\Http\Response
     */
    public function delete($id_inbound)
    {
        $inbound = Inbound::find($id_inbound);
        $inbound->delete();

        return "Data Berhasil di Hapus";
    }
}
