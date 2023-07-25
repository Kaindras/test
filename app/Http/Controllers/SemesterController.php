<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Semester;
use Illuminate\Support\Facades\Redirect;

class SemesterController extends Controller
{
    //
    public function index_smstr()
    {
        $semester = Semester::all();
        return view('admin.semester',['semester'=> $semester]);
    }



    public function create_smstr()
    {
        return view('admin.create-semester');
    }
    public function store_smstr(Request $request)
    {
        $request->validate([
            'nama_semester' => 'required'
        ]);

        Semester::create([
            'nama_semester' => $request->nama_semester
        ]);

        return Redirect::route('semester');

    }

    public function edit_smstr(Semester $semester)
    {
        return view('admin.edit-semester',compact('semester'));
    }

    public function update_smstr(Request $request, Semester $semester)
    {
        $semester-> update([
            'nama_semester' => $request->nama_semester
        ]);

        return Redirect::route('semester');
    }


    public function delete_smstr(Semester $semester)
    {
        $semester->delete();

        return Redirect::route('semester');
    }
}
