<?php

namespace App\Http\Controllers;
use App\Models\Ppdb;
use App\Models\Wali;
use App\Models\Kelas;
use App\Models\Tinggal;
use App\Models\Kegemaran;
use App\Models\Kesehatan;
use App\Models\Naikkelas;
use App\Models\Ibukandung;
use App\Models\Pendidikan;
use App\Models\Ayahkandung;
use App\Models\Psertadidik;
use App\Models\Perkembangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Observers\PsertadidikObserver;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\PsertadidikCreateRequest;
use App\Http\Requests\PsertadidikUpdateRequest;

class PsertadidikController extends Controller
{   //home
    public function dashboard(){
        $psertadidikCount = Psertadidik::count();
        $psertadidik = Psertadidik::all()
        ->where('verifikasi','LIKE',1);
        $sdhVerifikasi = $psertadidik->count();

        $psertadidik = Psertadidik::all()
        ->where('verifikasi','LIKE',0);
        $blmVerifikasi = $psertadidik->count();
        // ->where('verifikasi','LIKE',0)
        // $blmVerifikasi = $psertadidik->count();
        return view('admin.home',['psertadidikCount'=> $psertadidikCount,'sdhVerifikasi' => $sdhVerifikasi,'blmVerifikasi' => $blmVerifikasi]);
    }
    // Index Peserta Didik
    public function index_psertadidik(Request $request)
    {
        // $psertadidik  = Psertadidik::all();
        // dd($psertadidik);
        $kelas = Kelas::all();
        $keyword = $request->keyword;
        $naikkelas = Naikkelas::all();
        $psertadidiks = Psertadidik::with(['naikkelas'])
        ->orwhere('nama_lengkap','LIKE','%'.$keyword.'%')
        ->orWhere('nipd','LIKE','%'.$keyword.'%')
        ->orWhere('nisn','LIKE','%'.$keyword.'%')
        ->orWhereHas('naikkelas', function($query) use($keyword){
        $query->where('kelas_id', 'LIKE', '%'.$keyword.'%');
        })
        ->paginate(36);
        return view('admin.psertadidik',['psertadidiks' => $psertadidiks,'naikkelas'=>$naikkelas, 'kelas' =>$kelas]);
    }

    public function show($id)
    {
        $psertadidik = Psertadidik::find($id);
        $tinggal = $psertadidik->tinggal;
        return view ('admin.detail',['psertadidik' => $psertadidik, 'tinggal'=>$tinggal]);

        // return response()->json($psertadidik);
    }

    public function create_psertadidik(Psertadidik $psertadidik)
    {
        $psertadidik = Psertadidik::all();
        $q = DB::table('psertadidiks')->select(DB::raw('MAX(RIGHT(nipd, 4)) as nipd'));
        $nipd = "";
        if ($q->count() > 0) {
            foreach ($q->get() as $k) {
                $tmp = ((int)$k->nipd) + 1;
                $nipd = sprintf("%04s", $tmp);
            }
        } else {
            $nipd = "0001";
        }
        return view('admin.create-psertadidik',compact('nipd','psertadidik'));

    }
    public function store_psertadidik(PsertadidikCreateRequest $request)
    {
        $path ='';
        if ($request->file('foto_in'))
        {
        $file = $request->file('foto_in');
        $path = time().'_'.$request->nipd . '.' .$file->getClientOriginalExtension();
        Storage::disk('public')->put('foto_in/'. $path, file_get_contents($file));

        }

     Psertadidik::create([
            'nama_lengkap' => $request->nama_lengkap,
            'namapgl' => $request->namapgl,
            'nipd' => $request->nipd,
            'nisn' => $request->nisn,
            'jnsklmn' => $request->jnsklmn,
            'tempatlhr' => $request->tempatlhr,
            'tgllhr' => $request->tgllhr,
            'agama' => $request->agama,
            'kwgnegaraan' => $request->kwgnegaraan,
            'anakke' => $request->anakke,
            'jml_s_kd' => $request->jml_s_kd,
            'jml_s_tr' => $request->jml_s_tr,
            'jml_s_angkat' => $request->jml_s_angkat,
            'anky_yp_p' => $request->anky_yp_p,
            'foto_in' => $path,
            // 'foto_out' =>$path,
            'bhs' => $request->bhs,
     ]);
                Session::flash('status','success');
                Session::flash('message','Peserta Didik Berhasil Ditambahkan');

        return Redirect::route('psertadidik');
    }

    public function edit($id )
    {
        $psertadidik = Psertadidik::findOrFail($id);
        return view('admin.edit-psertadidik',compact('psertadidik'));
    }
    public function update(Request $request, Psertadidik $psertadidik, $id){

        $psertadidik = Psertadidik::findOrFail($id);
        $tinggal = Tinggal::findOrFail($id);
        $kesehatan = Kesehatan::findOrFail($id);
        $pendidikan = Pendidikan::findOrFail($id);
        $ayahkandung = Ayahkandung::findOrFail($id);
        $ibukandung = Ibukandung::findOrFail($id);
        $wali = Wali::findOrFail($id);
        $kegemaran = Kegemaran::findOrFail($id);
        $perkembangan = Perkembangan::findOrFail($id);
        $ppdb = Ppdb::findOrFail($id);

        $psertadidik->update($request->all());
        $tinggal->update($request->all());
        $kesehatan->update($request->all());
        $pendidikan->update($request->all());
        $ayahkandung->update($request->all());
        $ibukandung->update($request->all());
        $wali->update($request->all());
        $kegemaran->update($request->all());
       $perkembangan->update($request->all());
       $ppdb->update($request->all());


        return Redirect::route('edit.psertadidik',$psertadidik->id);
        }

 public function updateImage(Request $request, $id)
 {
    $validatedData = $request->validate([
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:5012' // Validasi tipe file dan ukuran
    ]);

    $psertadidik = Psertadidik::findOrFail($id);

    // Menghapus gambar yang ada jika ada perubahan gambar
    if ($request->hasFile('foto_in')) {
        $currentImage = $psertadidik->foto_in; // Simpan nama gambar yang sedang digunakan

        // Menghapus gambar yang sedang digunakan
        if ($currentImage && Storage::disk('public')->exists('foto_in/' . $currentImage))
         {
            Storage::disk('public')->delete('foto_in/' . $currentImage);
         }
        // Mengunggah gambar baru
        $image = $request->file('foto_in');
        $imageName = time() . '_' . $image->getClientOriginalName();
        Storage::disk('public')->putFileAs('foto_in', $image, $imageName);
        // Memperbarui nama gambar pada model
        $psertadidik->foto_in = $imageName;
    }
    // Simpan perubahan pada model
    $psertadidik->save();
    return redirect()->back()->with('success', 'Gambar berhasil diperbarui.');
}

public function verifikasi($id)
{
    $psertadidik = Psertadidik::find($id);
    $psertadidik->verifikasi = 1;
    $psertadidik->save();

    return Redirect::route('psertadidik');

    }
      public function print($id)
    {
        $psertadidik = Psertadidik::findOrFail($id);
        return view('admin.detail-print',['psertadidik'=> $psertadidik]);
    }


}






