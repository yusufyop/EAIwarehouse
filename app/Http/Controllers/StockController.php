<?php

namespace App\Http\Controllers;

use App\Models\stock;
use Illuminate\Http\Request;


class StockController extends Controller
{

    public function index()
    {
        return stock::all();
    }

    public function create(request $request)
    {
        $stock = new Stock;
        $stock->location = $request->location;
        $stock->capacity = $request->capacity;
        $stock->save();

        return "Data Berhasil Masuk";
    }

    public function update(Request $request, $stock_id)
    {
        $stock = stock::findOrFail($stock_id);
        $stock->update($request->all());

        return "Data Berhasil di Update";
    }

    public function delete($stock_id)
    {
        $stock = stock::find($stock_id);
        $stock->delete();

        return "Data Berhasil di Hapus";
    }
}
