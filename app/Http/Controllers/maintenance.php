<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\maintenance;
use Illuminate\Http\Request;

class maintenance extends Controller
{
    public function index()
    {
        return maintenance::all();
    }

    public function create(request $request)
    {
        $maintenance = new maintenance;
        $maintenance->inbound_id = $request->inbound_id;
        $maintenance->warehouse_id = $request->warehouse_id;
        $maintenance->delivery_id = $request->delivery_id;
        $maintenance->product_id = $request->product_id;
        $maintenance->save();

        return "Data Berhasil Masuk";
    }


    public function update(Request $request, $id_dokumen)
    {
        $maintenance = maintenance::find($id_dokumen);
        $maintenance->update($request->all());

        return "Data Berhasil di Update";
    }



    public function delete($id_dokumen)
    {
        $maintenance = maintenance::find($id_dokumen);
        $maintenance->delete();

        return "Data Berhasil di Hapus";
    }