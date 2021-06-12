<?php

namespace App\Http\Controllers;

use App\Models\Inbound;
use Illuminate\Http\Request;


class InboundController extends Controller
{
    public function index()
    {
        return Inbound::all();
    }

    public function create(request $request)
    {
        $inbound = new Inbound;
        $inbound->warehouse_id = $request->warehouse_id;
        $inbound->delivery_id = $request->delivery_id;
        $inbound->product_id = $request->product_id;
        $inbound->in_date = $request->in_date;
        $inbound->quantity_in = $request->quantity_in;
        $inbound->save();

        return "Data Berhasil Masuk";
    }

    public function update(Request $request, $inbound_id)
    {
        $inbound = Inbound::findOrFail($inbound_id);
        $inbound->update($request->all());

        return "Data Berhasil di Update";
    }


    public function delete($inbound_id)
    {
        $inbound = Inbound::find($inbound_id);
        $inbound->delete();

        return "Data Berhasil di Hapus";
    }
}
