<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ajaran;
use Illuminate\Support\Facades\Redirect;

class PelajaranController extends Controller
{
    //
    public function pelajaran()
    {   $pelajaran = Ajaran::all();
        return view ('admin.pelajaran',['pelajaran'=> $pelajaran]);
    }

    public function create_thnplajaran()
    {
        return view('admin.create-thnpelajaran');
    }
    public function store_thnplajaran(Request $request)
    {
        $request->validate ([
            'nm_thnplajaran' => 'required'
        ]);
        Ajaran::create([
            'nm_thnplajaran'=> $request->nm_thnplajaran

        ]);

        return Redirect::route('pelajaran');
    }

    public function edit_thnplajaran(Ajaran $ajaran)
    {
        return view('admin.edit-thnpelajaran',compact('ajaran'));
    }

    public function update_thnplajaran(Request $request, Ajaran $ajaran)
    {
        $ajaran -> update([
            'nm_thnplajaran' => $request->nm_thnplajaran
        ]);

        return Redirect::route('pelajaran');
    }

    public function delete_thnplajaran(Ajaran $ajaran)
    {
        $ajaran->delete();
        return Redirect::route('pelajaran');
    }

}
