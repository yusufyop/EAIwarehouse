<?php

namespace App\Http\Controllers;

use App\Models\outbound;
use Illuminate\Http\Request;

class outbound extends Controller
{
    public function index()
    {
        return outbound::all();
    }

    public function create(request $request)
    {
        $outbound = new outbound;
        $outbound->outbound_id = $request->outbound_id;
        $outbound->warehouse_id = $request->warehouse_id;
        $outbound->vehicle_id = $request->vehicle_id;
        $outbound->product_id = $request->product_id;
        $outbound->save();

        return "Data Berhasil Masuk";
    }


    public function update(Request $request, $outbound_id)
    {
        $outbound = outbound::find($id_dokumen);
        $outbound->update($request->all());

        return "Data Berhasil di Update";
    }



    public function delete($outbound_id)
    {
        $outbound_id = outbound_id$outbound_id::find($outbound_id);
        $outbound_id->delete();

        return "Data Berhasil di Hapus";
    }
}
