<?php

namespace App\Http\Controllers;

use App\Models\Operational;
use Illuminate\Http\Request;


class OperationalController extends Controller
{

    public function index()
    {
        return Operational::all();
    }

    public function create(request $request)
    {
        $operational = new Operational;
        $operational->quantity_exp = $request->quantity_exp;
        $operational->date = $request->date;
        $operational->save();

        return "Data Berhasil Masuk";
    }

    public function update(Request $request, $id_Operational)
    {
        $operational = Operational::findOrFail($id_Operational);
        $operational->update($request->all());

        return "Data Berhasil di Update";
    }

    public function delete($id_Operational)
    {
        $operational = Operational::find($id_Operational);
        $operational->delete();

        return "Data Berhasil di Hapus";
    }
}
