<?php

namespace App\Http\Controllers;

use App\Models\warehouse;
use Illuminate\Http\Request;


class WarehouseController extends Controller
{

    public function index()
    {
        return Warehouse::all();
    }

    public function create(request $request)
    {
        $warehouse = new Warehouse;
        $warehouse->location = $request->location;
        $warehouse->capacity = $request->capacity;
        $warehouse->save();

        return "Data Berhasil Masuk";
    }

    public function update(Request $request, $warehouse_id)
    {
        $warehouse = warehouse::findOrFail($warehouse_id);
        $warehouse->update($request->all());

        return "Data Berhasil di Update";
    }

    public function delete($warehouse_id)
    {
        $warehouse = warehouse::find($warehouse_id);
        $warehouse->delete();

        return "Data Berhasil di Hapus";
    }
}
