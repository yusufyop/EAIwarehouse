<?php

namespace App\Http\Controllers;

use App\Models\Outbound;
use Illuminate\Http\Request;


class OutboundController extends Controller
{
   
    public function index()
    {
        return Outbound::all();
    }


    public function create(request $request)
    {
        $outbound = new outbound;
        $outbound->outbound_id = $request->outbound_id;
        $outbound->warehouse_id = $request->warehouse_id;
        $outbound->vehicle_id = $request->vehicle_id;
        $outbound->out_date = $request->out_date;
        $outbound->address = $request->address;
        $outbound->quantity_out = $request->quantity_out;
        $outbound->save();

        return "Data Berhasil Masuk";
    }

   
    public function store(Request $request)
    {

    }

    public function show(Outbound $outbound)
    {
    }

    public function edit(Outbound $outbound)
    {
    }

    
    public function update(Request $request, $id_outbound)
    {
        $outbound = Outbound::findOrFail($id_outbound);
        $outbound->update($request->all());

        return "Data Berhasil di Update";
    }

    public function delete($id_outbound)
    {
        $outbound = Outbound::find($id_outbound);
        $outbound->delete();

        return "Data Berhasil di Hapus";
    }
}
