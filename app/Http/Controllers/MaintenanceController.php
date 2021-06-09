<?php

namespace App\Http\Controllers;

use App\Models\Maintenance;
use Illuminate\Http\Request;


class MaintenanceController extends Controller
{

    public function index()
    {
        return Maintenance::all();
    }

    public function create(request $request)
    {
        $maintenance = new Maintenance;
        $maintenance->quantity_exp = $request->quantity_exp;
        $maintenance->date = $request->date;
        $maintenance->save();

        return "Data Berhasil Masuk";
    }

    public function update(Request $request, $id_maintenance)
    {
        $maintenance = Maintenance::findOrFail($id_maintenance);
        $maintenance->update($request->all());

        return "Data Berhasil di Update";
    }

    public function delete($id_maintenance)
    {
        $maintenance = Maintenance::find($id_maintenance);
        $maintenance->delete();

        return "Data Berhasil di Hapus";
    }
}
