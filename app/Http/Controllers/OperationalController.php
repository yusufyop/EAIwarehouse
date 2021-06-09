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
        // $Operational = new Operational;
        // $Operational->quantity_exp = $request->quantity_exp;
        // $Operational->date = $request->date;
        // $Operational->save();

        // return "Data Berhasil Masuk";
    }

    public function update(Request $request, $id_Operational)
    {
        // $Operational = Operational::findOrFail($id_Operational);
        // $Operational->update($request->all());

        // return "Data Berhasil di Update";
    }

    public function delete($id_Operational)
    {
        $Operational = Operational::find($id_Operational);
        $Operational->delete();

        return "Data Berhasil di Hapus";
    }
}
