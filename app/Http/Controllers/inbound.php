<?php

namespace App\Http\Controllers;

use App\Models\inbound;
use Illuminate\Http\Request;

class inbound extends Controller
{
    public function index()
    {
        return inbound::all();
    }

    public function create(request $request)
    {
        $inbound = new inbound;
        $inbound->inbound_id = $request->inbound_id;
        $inbound->warehouse_id = $request->warehouse_id;
        $inbound->delivery_id = $request->delivery_id;
        $inbound->product_id = $request->product_id;
        $inbound->save();

        return "Data Berhasil Masuk";
    }


    public function update(Request $request, $inbound_id)
    {
        $inbound = inbound::find($id_dokumen);
        $inbound->update($request->all());

        return "Data Berhasil di Update";
    }



    public function delete($inbound_id)
    {
        $inbound_id = inbound_id$inbound_id::find($inbound_id);
        $inbound_id->delete();

        return "Data Berhasil di Hapus";
    }
}
