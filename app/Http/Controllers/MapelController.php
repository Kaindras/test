<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mapel;
use Illuminate\Support\Facades\Redirect;

class MapelController extends Controller
{
    //Index Mata Pelajaran
    public function index_mapel()
    {
        $mapels = Mapel::all();
        return view('admin.mapel', ['mapels' => $mapels]);
    }

    public function create_mapel()
    {
        return view('admin.create-mapel');
    }
    public function store_mapel(Request $request)
    {
        $request->validate([
            'nama_mapel' => 'required'
        ]);
        Mapel::create([
            'nama_mapel' => $request->nama_mapel
        ]);
        return Redirect::route('mapel');
    }
    public function edit_mapel(Mapel $mapels)
    {
        return view('admin.edit-mapel',compact('mapels'));
    }
    public function update_mapel(Request $request, Mapel $mapels)
    {
        $mapels->update([
            'nama_mapel' =>$request->nama_mapel
        ]);
        return Redirect::route('mapel');
    }

    public function delete_mapel(Mapel $mapels)
    {

        $mapels->delete();
        return Redirect::route('mapel');
    }
}
