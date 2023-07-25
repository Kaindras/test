<?php

use App\Http\Controllers\ExportPf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\http\Controllers\NaikController;
use App\Http\Controllers\UserController;
use App\http\Controllers\KelasController;
use App\http\Controllers\MapelController;
use App\http\Controllers\NilaiController;
use App\Http\Controllers\SiswaController;
use App\http\Controllers\SemesterController;
use App\http\Controllers\PelajaranController;
use App\http\Controllers\PsertadidikController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('admin.home');
})->middleware('auth');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('login', [AuthController::class,'authenticating'])->middleware('guest');
Route::get('/logout', [AuthController::class,'logout'])->middleware('auth');
// Peserta Didik Route
Route::get('/', [PsertadidikController::class,'dashboard'])->name('kalkulasi')->middleware('auth');
Route::get('/psertadidik', [PsertadidikController::class, 'index_psertadidik'])->name('psertadidik')->middleware('auth');
Route::get('/show/{id}', [PsertadidikController::class, 'show'])->name('psertadidik.show')->middleware(['auth']);
Route::get('/create_psertadidik', [PsertadidikController::class,'create_psertadidik'])->name('create_psertadidik')->middleware(['auth']);
Route::post('/create_psertadidik/store', [PsertadidikController::class,'store_psertadidik'])->name('store_psertadidik')->middleware(['auth','must-admin-staf']);
Route::get('/psertadidik/{id}', [PsertadidikController::class, 'edit'])->name('edit.psertadidik')->middleware(['auth']);
Route::put('/psertadidik/{id}', [PsertadidikController::class,'update'])->name('update.psertadidik')->middleware(['auth']);
Route::patch('/verifikasi/{id}', [PsertadidikController::class,'verifikasi'])->name('verifikasi')->middleware(['auth',]);
Route::get('/psertadidik/print/{id}', [PsertadidikController::class, 'print'])->name('print-psertadidik');
Route::patch('psertadidik/{id}', [PsertadidikController::class,'updateImage']);

// Tahun Pelajaran Route
Route::get('/pelajaran', [PelajaranController::class,'pelajaran'])->name('pelajaran')->middleware(['auth']);
Route::get('/create', [PelajaranController::class,'create_thnplajaran'])->name('create-thnplajaran')->middleware(['auth']);
Route::post('/create', [PelajaranController::class,'store_thnplajaran'])->name('store-thnplajaran')->middleware(['auth']);
Route::get('/edit_ajaran/{ajaran}', [PelajaranController::class,'edit_thnplajaran'])->name('edit-thnplajaran')->middleware(['auth']);
Route::patch('update_ajaran/{ajaran}', [PelajaranController::class,'update_thnplajaran'])->name('update-thnplajaran')->middleware(['auth']);
Route::delete('delete/{ajaran}', [PelajaranController::class,'delete_thnplajaran'])->name('delete-thnplajaran')->middleware(['auth']);
//Semester Route
Route::get('/semester', [SemesterController::class,'index_smstr'])->name('semester')->middleware(['auth']);
Route::get('/create_semester', [SemesterController::class,'create_smstr'])->name('create_smstr')->middleware(['auth']);
Route::post('/store_semester', [SemesterController::class,'store_smstr'])->name('store_smstr')->middleware(['auth']);
Route::get('/edit_semester/{semester}', [SemesterController::class,'edit_smstr'])->name('edit_smstr')->middleware(['auth']);
Route::patch('/update_semester/{semester}', [SemesterController::class,'update_smstr'])->name('update_smstr')->middleware(['auth']);
Route::delete('/delete_smstr/{semester}', [SemesterController::class,'delete_smstr'])->name('delete_smstr')->middleware(['auth']);
//Kelas Route
Route::get('/kelas', [KelasController::class,'index_kelas'])->name('kelas')->middleware(['auth']);
Route::get('/edit-kelas/{kelas}', [KelasController::class,'edit_kelas'])->name('edit-kelas')->middleware(['auth']);
Route::patch('update-kelas/{kelas}', [KelasController::class,'update_kelas'])->name('update-kelas')->middleware(['auth']);
Route::get('/create-kelas', [KelasController::class,'create_kelas'])->name('create-kelas')->middleware(['auth']);
Route::post('/store-kelas', [KelasController::class,'store_kelas'])->name('store-kelas')->middleware(['auth']);
Route::delete('delete-kelas/{kelas}', [KelasController::class,'delete_kelas'])->name('delete-kelas')->middleware(['auth']);
Route::get('/kelas/print/{id}', [KelasController::class, 'delapantiga_limalima'])->name('print-8355');
//Route Mapel
Route::get('/mapel', [MapelController::class,'index_mapel'])->name('mapel')->middleware(['auth']);
Route::get('/create_mapel', [MapelController::class, 'create_mapel'])->name('create_mapel')->middleware(['auth']);
Route::post('/create_mapel', [MapelController::class,'store_mapel'])->name('store_mapel')->middleware(['auth']);
Route::get('/edit_mapel/{mapels}',[MapelController::class, 'edit_mapel'])->name('edit_mapel')->middleware(['auth']);
Route::patch('/update_mapel/{mapels}', [MapelController::class,'update_mapel'])->name('update_mapel')->middleware(['auth']);
Route::delete('/delete_mapel/{mapels}', [MapelController::class,'delete_mapel'])->name('delete_mapel')->middleware(['auth']);
//Route Nilai
Route::get('/nilai', [NilaiController::class,'index_nilai'])->name('nilai')->middleware(['auth']);
Route::get('/create_nilai', [NilaiController::class, 'create_nilai'])->name('create_nilai')->middleware(['auth']);
Route::get('/edit_nilai',[NilaiController::class, 'edit_nilai'])->name('edit_nilai')->middleware(['auth']);

//Route Naik Kelas
Route::get('/naik', [NaikController::class,'index_naik'])->name('naik')->middleware(['auth']);
Route::delete('/delete_naik/{naikkelas}', [NaikController::class,'delete_naik'])->name('delete-naik')->middleware(['auth','must-admin-staf']);
Route::get('/create-naik', [NaikController::class,'create_naik'])->name('create-naik')->middleware(['auth','must-admin-staf']);
Route::post('/create-naik', [NaikController::class,'store_naik'])->name('store-naik')->middleware(['auth','must-admin-staf']);
// Route::post('/create-naikAll', [NaikController::class,'store_naikAll'])->name('store-naikAll')->middleware(['auth', 'must-admin']);
Route::get('edit_naik', [NaikController::class,'edit_naik'])->name('edit_naik')->middleware(['auth']);

//Route User
Route::get('/user',[UserController::class,'index'])->name('user-index')->middleware(['auth', 'must-admin-staf']);
Route::get('/user-create',[UserController::class,'create'])->name('create-user')->middleware(['auth', 'must-admin-staf']);
Route::post('/user-store', [UserController::class,'store'])->name('store-user')->middleware(['auth', 'must-admin-staf']);
Route::delete('/destroy/{user}', [UserController::class,'destroy'])->name('destroy')->middleware(['auth', 'must-admin-staf']);
Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit-user')->middleware(['auth', 'must-admin-staf']);
Route::patch('/update/{user}', [UserController::class, 'update'])->name('update')->middleware(['auth', 'must-admin-staf']);

//User Peserta Didik

Route::get('/student', [SiswaController::class,'index'])->name('beranda')->middleware('auth');
