<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nilai;
use App\Models\Semester;
use App\Models\Mapel;
use App\Models\Naikkelas;
use App\Models\Psertadidik;
use App\Models\Kela;

class NilaiController extends Controller
{
    //Index Nilai
    public function index_nilai()
    {
        $nilais = Nilai::all();


        return view('admin.nilai', ['nilais' => $nilais]);
    }

    public function create_nilai()
    {
        return view('admin.create-nilai');
    }

    public function edit_nilai()
    {
        return view('admin.edit_nilai');
    }

}
