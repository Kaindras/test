<?php

namespace App\Http\Controllers;



use App\Models\Kelas;
use App\Models\Ajaran;
use App\Models\Naikkelas;
use App\Models\Psertadidik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class KelasController extends Controller
{
    // Index Kelas
    public function index_kelas()
    {
        $kelas = Kelas::all();
        return view('admin.kelas', ['kelas'=> $kelas]);
    }

    public function edit_kelas(Kelas $kelas)
    {
        return view('admin.edit-kelas', compact('kelas'));
    }

    public function update_kelas(Request $request, Kelas $kelas)
    {
        $kelas->update([
            'nama_kelas' => $request->nama_kelas
        ]);

        return Redirect::route('kelas');
    }

    public function create_kelas()
    {
        return view('admin.create-kelas');
    }

    public function store_kelas(Request $request)
    {
        $request->validate([
            'nama_kelas' => 'required',
        ]);

        Kelas::create([
            'nama_kelas'=> $request->nama_kelas
        ]);

        return Redirect::route('kelas');
    }

    public function delete_kelas(Kelas $kelas)
    {
        $kelas->delete();

        return Redirect::route('kelas');
    }

     public function delapantiga_limalima($id)
    {

        // $naikkelas = Naikkelas::with('kelas')->get();
        $kelas = Kelas::findOrFail($id);
        $psertadidik  = Psertadidik::paginate(18);
        return view('admin.rekap-8355',['kelas'=> $kelas,'psertadidik' => $psertadidik]);
    }

}
