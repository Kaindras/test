<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kelas;
use App\Models\Ajaran;
use App\Models\Naikkelas;
use App\Models\Psertadidik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class NaikController extends Controller
{
    //Index Naik Kelas
    public function index_naik(Request $request)
    {   $kelas = Kelas::all();
        $naikkelas = Naikkelas::all();
        return view('admin.naik', ['naikkelas' => $naikkelas,'kelas' => $kelas]);

    }

    public function create_naik()
    {
        $user = User::all();
        $kelas = Kelas::all();
        $ajaran = Ajaran::all();
        $psertadidik = Psertadidik::all();
        $naikkelas = Naikkelas::all();

        return view('admin.create-naik',[
            'naikkelas'=> $naikkelas,
            'ajaran' =>$ajaran,
            'kelas' =>$kelas,
            'user' => $user,
            'psertadidik' => $psertadidik

            ]);
    }

    public function store_naik(Request $request){
        //   dd($request->all());
        $naikkelas = Naikkelas::create([
            'tahun' => $request->tahun,
            'kelas_id' => $request->kelas_id,
            'thnplajaran_id' => $request->thnplajaran_id,
            'psertadidik_id' => $request->psertadidik_id,
            'user_id'=> $request->user_id
        ]);

        return Redirect::route('naik');
    }

    public function delete_naik(Naikkelas $naikkelas)
    {

        $naikkelas->delete();
        return Redirect::route('naik');
    }




    public function edit_naik()
    {
        return view('admin.edit-naik');
    }
}
