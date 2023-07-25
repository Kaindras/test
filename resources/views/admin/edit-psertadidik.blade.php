@extends('admin.main')

@section('content')

    <div class="row">
		  <div class="col-md-15">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div align="center">Edit Peserta Didik
					    </div>
					</div>

            <!--/.col-->
            <div class="row">
				<div class="panel panel-default col-md-10">
					<div class="panel-body tabs">
                    {{-- <form action="{{ route('update.psertadidik', $psertadidik->id) }}" method="POST" enctype="multipart/form-data" name="update" id="update">

                        @method('PUT') --}}
                            {{-- @csrf --}}
                            <ul class="nav nav-pills">
                                <li class="active"><a href="#pilltab1" data-toggle="tab"><i class="glyphicon glyphicon-user"></i> Peserta Didik</a></li>
                                <li><a href="#pilltab2" data-toggle="tab"><i class="glyphicon glyphicon-home"></i> Tempat Tinggal</a></li>
                                <li><a href="#pilltab3" data-toggle="tab"><i class="glyphicon glyphicon-plus-sign"></i>Kesehatan</a></li>
                                <li><a href="#pilltab4" data-toggle="tab"><i class="glyphicon glyphicon-globe"></i>Pendidikan</a></li>
                                <li><a href="#pilltab5" data-toggle="tab"><i class="glyphicon glyphicon-star"></i>Ayah Kandung</a></li>
                                <li><a href="#pilltab6" data-toggle="tab"><i class="glyphicon glyphicon-star-empty"></i>Ibu Kandung</a></li>
                                <li><a href="#pilltab7" data-toggle="tab"><i class="glyphicon glyphicon-heart"></i>Wali</a></li>
                                <li><a href="#pilltab8" data-toggle="tab"><i class="glyphicon glyphicon-fire"></i>Kegemaran</a></li>
                                <li><a href="#pilltab9" data-toggle="tab"><i class="glyphicon glyphicon-pencil"></i>Perkembangan</a></li>
                                <li><a href="#pilltab10" data-toggle="tab"><i class="glyphicon glyphicon-briefcase"></i>Selesai Pendidikan</a></li>
                                <li><a href="#pilltab11" data-toggle="tab"><i class="glyphicon glyphicon-tasks"></i>Lain-Lain</a></li>
                            </ul>
                        <div class="tab-content ">
                            <div class="tab-pane fade in active" id="pilltab1">
								<h4>Keterangan Tentang Peserta Didik </h4>

                                <form action="{{ route('update.psertadidik', $psertadidik->id) }}" method="POST" enctype="multipart/form-data" name="update" id="update">
                                @method('PUT')
                                @csrf
								<table width="526">
                                    <tr>
                                        <td >NIPD</td>
                                        <td >:</td>
                                        <td ><div class="col-md-10">
                                                <div class="form-group">
                                                    <input name="nipd" type="text" value="{{ $psertadidik->nipd }} " id="nipd" class="form-control"  readonly>
                                                </div>
                                            </div>
                                        </td>
                                        </tr>
                                    <tr>
                                        <td >NISN</td>
                                        <td >:</td>
                                        <td ><div class="col-md-10">
                                                <div class="form-group">
                                                    <input name="nisn" type="text" value="{{ $psertadidik->nisn }} " id="nisn" class="form-control">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nama Lengkap Peserta Didik </td>
                                        <td>:</td>
                                        <td><div class="col-md-10">
                                                <div class="form-group">
                                                    <input name="nama_lengkap" type="text" value="{{ $psertadidik->nama_lengkap }}" class="form-control">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nama Panggilan </td>
                                        <td>:</td>
                                        <td><div class="col-md-10">
                                                <div class="form-group">
                                                    <input type="text" name="namapgl" value="{{ $psertadidik->namapgl }}" class="form-control" >
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Jenis Kelamin </td>
                                        <td>:</td>
                                        <td><div class="col-md-5">
                                                <div class="form-group">
                                                    <select name="jnsklmn" size="1" id="select1" class=" form-control">
                                                        @if (old('jnsklmn', $psertadidik->jnsklmn) == $psertadidik->jnsklmn)
                                                        <option value="{{ $psertadidik->jnsklmn }}" selected>{{ $psertadidik->jnsklmn }}</option>
                                                            <option >Laki-laki</option>
                                                            <option >Perempuan</option>
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tempat dan Tanggal Lahir </td>
                                            <td>:</td>
                                            <td><div class="col-md-6">
                                                    <div class="form-group">
                                                        <input name="tempatlhr" type="text" size="15" value="{{ $psertadidik->tempatlhr }}" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input name="tgllhr" type="date" size="15" value="{{ $psertadidik->tgllhr }}" class="form-control" >
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Agama</td>
                                            <td>:</td>
                                            <td><div class="col-md-5">
                                                    <div class="form-group">
                                                        <select name="agama" size="1" id="agama" class="form-control">
                                                            @if (old('agama',$psertadidik->agama) == $psertadidik->agama)
                                                            <option value="{{$psertadidik->agama}}" selected>{{ $psertadidik->agama }}</option>
                                                            <option>Islam</option>
                                                            <option>Kristen</option>
                                                            <option>Khatolik</option>
                                                            <option>Hindu</option>
                                                            <option>Budha</option>
                                                            <option>Kepercayaan</option>
                                                            <option>Konghucu</option>
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Kewarganegaraan</td>
                                            <td>:</td>
                                            <td><div class="col-md-5">
                                                    <div class="form-group">
                                                        <select name="kwgnegaraan" size="1" id="kwgnegaraan"  class="form-control">
                                                            @if (old('kwgnegaraan',$psertadidik->kwgnegaraan) == $psertadidik->kwgnegaraan)
                                                            <option value="{{$psertadidik->kwgnegaraan}}" selected>{{ $psertadidik->kwgnegaraan }}</option>
                                                            <option>WNI</option>
                                                            <option>WNA</option>
                                                            @endif
                                                            </select>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Anak Keberapa </td>
                                                <td>:</td>
                                                <td><div class="col-md-10">
                                                        <div class="form-group">
                                                            <input type="number" name="anakke" value="{{ $psertadidik->anakke }}" class="form-control">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jumlah Saudara Kandung </td>
                                                <td>:</td>
                                                <td><div class="col-md-10">
                                                        <div class="form-group">
                                                            <input type="number" name="jml_s_kd" value="{{ $psertadidik->jml_s_kd }}" class="form-control">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jumlah Saudara Tiri </td>
                                                <td>:</td>
                                                <td><div class="col-md-10">
                                                        <div class="form-group">
                                                            <input type="number" name="jml_s_tr" value="{{ $psertadidik->jml_s_tr }}" class="form-control">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Jumlah Saudara Angkat </td>
                                                <td>:</td>
                                                <td><div class="col-md-10">
                                                        <div class="form-group">
                                                            <input type="number" name="jml_s_angkat" value="{{ $psertadidik->jml_s_angkat }}" class="form-control">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Anak Yatim/Piatu/Yatim Piatu </td>
                                                <td>:</td>
                                                <td><div class="col-md-10">
                                                        <div class="form-group">
                                                            <select name="anky_yp_p" size="1" id="select4" class="form-control">
                                                                @if (old('anky_yp_p',$psertadidik->anky_yp_p) == $psertadidik->anky_yp_p)
                                                                <option value="{{ $psertadidik->anky_yp_p }}" selected>{{ $psertadidik->anky_yp_p }}</option>
                                                                <option>Tidak</option>
                                                                <option>Yatim</option>
                                                                <option>Piatu</option>
                                                                <option>Yatim Piatu</option>
                                                                @endif
                                                            </select>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Bahasa Sehari-hari di Rumah</td>
                                                <td>:</td>
                                                <td><div class="col-md-10">
                                                        <div class="form-group">
                                                            <input type="text" name="bhs" value="{{ $psertadidik->bhs }}" class="form-control">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label for="image" class="form-label">Ganti Foto</label>
                                                <td>:</td>
                                                <td><div class="col-md-10">
                                                    <div class="form-group">
                                                        <form action="{{ 'updateImage', $psertadidik->id }}" method="POST">
                                                            @csrf
                                                            @method('PATCH')
                                                        <input type="hidden" name="oldImage" value="{{ $psertadidik->foto_in }}">
                                                        @if ($psertadidik->foto_in)
                                                         <img src="{{ asset('/storage/foto_in/'.$psertadidik->foto_in) }} " class="foto-preview img-fluid mb-2 col-sm-6 d-block">
                                                        @else
                                                            <img  class="foto-preview img-fluid mb-2 col-sm-6" >
                                                        @endif

                                                        <input type="file" class="form-control" id="foto_in" name="foto_in" onchange="previewImage()">
                                                        <button type="submit" class="btn btn-danger btn-sm">Ganti</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> <div class="col-md-10"><div class="form-group">

                                                    <input name="update" type="submit" id="update" value="Perbaharui" class="btn btn-primary btn-sm"></div></div></td>
                                        </tr>
                                    </table>
                    </form>
                                </div>



                                <div class="tab-pane fade" id="pilltab2">
                                        <h4>Keterangan Tempat Tinggal</h4>
                                        <form action="{{ route('update.psertadidik', $psertadidik->id) }}" method="POST" enctype="multipart/form-data" name="update" id="update">
                                                    @method('PUT')
                                                    @csrf
                                            <table width="526">
                                                <tr>
                                                    <td>Alamat</td>
                                                    <td >:</td>
                                                    <td>
                                                        <div class="col-md-10">
                                                            <div class="form-group">
                                                            <input type="text"class="form-control" required value="{{ old('almt',$psertadidik->tinggal->almt) }}" id="almt" name="almt" >
                                                        </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kontak</td>
                                                    <td>:</td>
                                                    <td><div class="col-md-10">
                                                            <div class="form-group">
                                                                <input type="text" name="nohp" value="{{ $psertadidik->tinggal->nohp }}" class="form-control">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Tinggal Dengan</td>
                                                    <td>:</td>
                                                    <td><div class="col-md-10">
                                                            <div class="form-group">
                                                                <input type="text" name="tinggaldgn" value="{{ $psertadidik->tinggal->tinggaldgn }}" class="form-control">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Jarak Ke Sekolah</td>
                                                    <td>:</td>
                                                    <td><div class="col-md-10">
                                                            <div class="form-group">
                                                                <input type="text" name="jrk_k_sklh" value="{{ $psertadidik->tinggal->jrk_k_sklh }}" class="form-control">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><div>
                                                            Kilometer </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> <div class="col-md-10"><div class="form-group">
                                                            <input name="update" type="submit" id="update" value="Perbaharui" class="btn btn-primary btn-sm"></div></div></td>
                                                </tr>
                                            </table>
                                        </form>
                                        </div>

                                        <div class="tab-pane fade" id="pilltab3">
                                            <h4>Keterangan Kesehatan</h4>
                                            <form action="{{ route('update.psertadidik', $psertadidik->id) }}" method="POST" enctype="multipart/form-data" name="update" id="update">
                                                    @method('PUT')
                                                    @csrf
                                            <table width="470">
                                                <tr>
                                                    <td width="230">Golongan Darah</td>
                                                    <td width="2">:</td>
                                                    <td width="230"><div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <select name="gol_drh" size="1" id="gol_drh" class="form-control">
                                                                                @if (old('gol_drh',$psertadidik->kesehatan->gol_drh) == $psertadidik->kesehatan->gol_drh)
                                                                                <option value="{{ $psertadidik->kesehatan->gol_drh }}" selected>{{ $psertadidik->kesehatan->gol_drh }}</option>
                                                                                <option>A</option>
                                                                                <option>B</option>
                                                                                <option>O</option>
                                                                                <option>AB</option>
                                                                                @endif
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Penyakit yg Pernah Diderita</td>
                                                    <td>:</td>
                                                    <td><div class="col-md-10">
                                                            <div class="form-group">
                                                                <input type="text" name="pnykit_yg_drt" value="{{ $psertadidik->kesehatan->pnykit_yg_drt }}" class="form-control">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kelainan Jasmani</td>
                                                    <td>:</td>
                                                    <td><div class="col-md-10">
                                                            <div class="form-group">
                                                                <input type="text" name="kel_jasmani" value="{{ $psertadidik->kesehatan->kel_jasmani }}" class="form-control">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Tinggi Badan</td>
                                                    <td>:</td>
                                                    <td><div class="col-md-10">
                                                            <div class="form-group">
                                                            <input name="tinggi" type="text" value="{{ $psertadidik->kesehatan->tinggi }}" class="form-control">
                                                            </div>
                                                        </div>
                                                        <td><div class="col-md-5">
                                                            Centimeter </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Berat Badan</td>
                                                        <td>:</td>
                                                        <td><div class="col-md-10">
                                                            <div class="form-group">
                                                                <input name="bb" type="text" value="{{ $psertadidik->kesehatan->bb }}" class="form-control">
                                                            </div>
                                                        </div>
                                                        <td><div class="col-md-5">
                                                            Kilogram </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td> <div class="col-md-10"><div class="form-group">
                                                                <input name="update" type="submit" id="update" value="Perbaharui" class="btn btn-primary btn-sm"></div></div></td>
                                                    </tr>
                                                </table>
                                            </form>
                                                </div>






                                        <div class="tab-pane fade" id="pilltab4">
                                                <h4>Keterangan Pendidikan</h4>
                                                    <b>Pendidikan Sebelumnya</b>
                                                    <form action="{{ route('update.psertadidik', $psertadidik->id) }}" method="POST" enctype="multipart/form-data" name="update" id="update">
                                                    @method('PUT')
                                                    @csrf
                                            <table width="538">
                                                <tr>
                                                    <td width="230">Tamatan Dari</td>
                                                    <td width="2">:</td>
                                                    <td width="306"><div class="col-md-10">
                                                                    <div class="form-group">
                                                                        <input type="text" name="tamat_dr" value="{{ $psertadidik->pendidikan->tamat_dr }}" class="form-control">
                                                                    </div>
                                                                </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Tanggal Dan No Ijazah</td>
                                                    <td>:</td>
                                                    <td><div class="col-md-10">
                                                            <div class="form-group">
                                                                <input type="text" name="tgl_no_ijsh" value="{{$psertadidik->pendidikan->tgl_no_ijsh }}" class="form-control">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Tanggal Dan No STL/SKHUN</td>
                                                    <td>:</td>
                                                    <td><div class="col-md-10">
                                                            <div class="form-group">
                                                                <input type="text" name="tgl_no_skhu" value="{{ $psertadidik->pendidikan->tgl_no_skhu }}" class="form-control">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Lama Belajar</td>
                                                    <td>:</td>
                                                    <td><div class="col-md-10">
                                                            <div class="form-group">
                                                                <input type="text" name="lama_bljr" value="{{ $psertadidik->pendidikan->lama_bljr }}" class="form-control">
                                                        </div>
                                                    </div>
                                                    </td>
                                                </tr>
                                            </table>
                                             <br>
                                                    <b>Pindahan</b>
                                            <table width="536">
                                                <tr>
                                                    <td width="230">Dari Sekolah</td>
                                                    <td width="2">:</td>
                                                    <td width="303"><div class="col-md-10">
                                                                        <div class="form-group">
                                                                            <input type="text" name="pdh_dr_sklh" value="{{ $psertadidik->pendidikan->pdh_dr_sklh }}" class="form-control">
                                                                        </div>
                                                                    </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Alasan</td>
                                                    <td>:</td>
                                                    <td><div class="col-md-10">
                                                            <div class="form-group">
                                                                <input type="text" name="alasan_pdh" value="{{ $psertadidik->pendidikan->alasan_pdh }}" class="form-control">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                             <br>
                                            <b>Diterima disekolah ini</b>
                                            <table width="538">
                                                <tr>
                                                    <td width="230">Kelas</td>
                                                    <td width="2">:</td>
                                                    <td width="303"><div class="col-md-10">
                                                                        <div class="form-group">
                                                                            <input type="text" name="dtrm_kelas" value="{{ $psertadidik->pendidikan->dtrm_kelas }}" class="form-control">
                                                                        </div>
                                                                    </div>
                                                    </td>
                                                </tr>
                                               <tr>
                                                    <td>Bidang Studi Keahlian</td>
                                                    <td>:</td>
                                                    <td><div class="col-md-10">
                                                            <div class="form-group">
                                                                <input type="text" name="dtrm_bidang" value="{{ $psertadidik->pendidikan->dtrm_bidang }}" class="form-control">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Program Studi Keahlian</td>
                                                    <td>:</td>
                                                    <td><div class="col-md-10">
                                                            <div class="form-group">
                                                                <input type="text" name="dtrm_program" value="{{ $psertadidik->pendidikan->dtrm_program }}" class="form-control">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kompetensi Keahlian</td>
                                                    <td>:</td>
                                                    <td>
                                                    <div class="col-md-10">
                                                                    <div class="form-group">
                                                    <input type="text" name="dtrm_komp" value="{{ $psertadidik->pendidikan->dtrm_komp }}" class="form-control">
                                                    </div></div>
                                                    </td>
                                                    </tr>
                                                 <tr>
                                                 <td>Tanggal/Bulan/Tahun</td>
                                                 <td>:</td>
                                                 <td>
                                                 <div class="col-md-10">
                                                                 <div class="form-group">
                                                 <input type="date" name="tgl_dtrima" value="{{ $psertadidik->pendidikan->tgl_dtrima }}" class="form-control" placeholder="yyyy-mm-dd">
                                                 </div></div>
                                                 </td>
                                                </tr>
                                                <tr>
                                                    <td> <div class="col-md-10"><div class="form-group">
                                                            <input name="update" type="submit" id="update" value="Perbaharui" class="btn btn-primary btn-sm"></div></div></td>
                                                </tr>

                                            </table>
                                        </form>
                                        </div>

                                            <div class="tab-pane fade" id="pilltab5">
                                                                                         <h4>Keterangan Tentang Ayah Kandung</h4>
                                                                                         <form action="{{ route('update.psertadidik', $psertadidik->id) }}" method="POST" enctype="multipart/form-data" name="update" id="update">
                                                    @method('PUT')
                                                    @csrf
                                                                                         <table width="600">
                                                           <tr>



                                                <td width="230">Nama</td>
                                                <td width="2">:</td>
                                                <td width="360">
                                                <div class="col-md-10">
                                                                <div class="form-group">
                                                <input type="text" name="nama_ayah" value="{{ $psertadidik->ayahkandung->nama_ayah }}" class="form-control">
                                                </div></div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>Tempat dan Tanggal Lahir</td>
                                                <td>:</td>
                                                <td>
                                                <div class="col-md-5">
                                                                <div class="form-group">
                                                <input name="tmpt_ayah" type="text" value="{{ $psertadidik->ayahkandung->tmpt_ayah }}" class="form-control">
                                                </div></div>
                                                <div class="col-md-5">
                                                                <div class="form-group">
                                                  <input name="tgl_ayah" type="date" value="{{ $psertadidik->ayahkandung->tgl_ayah }}" class="form-control" placeholder="yyyy-mm-dd">
                                                  </div></div>
                                                  </td>
                                              </tr>
                                              <tr>
                                                <td>Agama</td>
                                                <td>:</td>
                                                <td><div class="col-md-5">
                                                            <div class="form-group">
                                                                <select name="agama_ayah" size="1" id="agama_ayah"  class="form-control">
                                                                    @if (old('agama_ayah', $psertadidik->ayahkandung->agama_ayah) == $psertadidik->ayahkandung->agama_ayah)
                                                                    <option value="{{ $psertadidik->ayahkandung->agama_ayah }}" selected>{{ $psertadidik->ayahkandung->agama_ayah }}</option>
                                                                    <option>Islam</option>
                                                                    <option>Kristen</option>
                                                                    <option>Khatolik</option>
                                                                    <option>Hindu</option>
                                                                    <option>Budha</option>
                                                                    <option>Kepercayaan</option>
                                                                    <option>Konghucu</option>
                                                                    @endif
                                                                </select>
                                                </div></div>
                                                </td>

                                              </tr>
                                                <tr>
                                                <td>Kewarganegaraan</td>
                                                <td>:</td>
                                                <td>
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                    <select name="kwg_ayah" size="1" id="kwg_ayah" class="form-control">
                                                         @if (old('kwg_ayah',$psertadidik->ayahkandung->kwg_ayah) == $psertadidik->ayahkandung->kwg_ayah)
                                                            <option value="{{ $psertadidik->ayahkandung->kwg_ayah }}" selected>{{ $psertadidik->ayahkandung->kwg_ayah }}</option>
                                                            <option>WNI</option>
                                                            <option>WNA</option>
                                                         @endif
                                                </select>
                                                </div></div>
                                                </td>
                                                </tr>
                                              <tr>
                                                <td>Pendidikan</td>
                                                <td>:</td>
                                                <td>
                                                <div class="col-md-10">
                                                                <div class="form-group">
                                                <input type="text" name="pndidikan_ayah" value="{{ $psertadidik->ayahkandung->pndidikan_ayah }}" class="form-control">
                                                </div></div>
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>Pekerjaan</td>
                                                <td>:</td>
                                                <td>
                                                <div class="col-md-10">
                                                                <div class="form-group">
                                                <input type="text" name="pkrjaan_ayah" value="{{ $psertadidik->ayahkandung->pkrjaan_ayah }}" class="form-control">
                                                    </div></div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>Pengeluaran Perbulan</td>
                                                <td>:</td>
                                                <td>
                                                    <div class="col-md-10">
                                                                <div class="form-group">
                                                <input type="text" name="pngeluaran_ayah" value="{{ $psertadidik->ayahkandung->pngeluaran_ayah }}" class="form-control">
                                                    </div></div>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>Alamat Rumah</td>
                                                <td>:</td>
                                                <td>
                                                    <div class="col-md-10">
                                                            <div class="form-group">
                                                            <input type="text" class="form-control" required value="{{ old('almt_ayah', $psertadidik->ayahkandung->almt_ayah) }}" id="almt_ayah" name="almt_ayah" >
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>





                                              <tr>
                                                <td>No HP</td>
                                                <td>:</td>
                                                <td>
                                                <div class="col-md-10">
                                                                <div class="form-group">
                                                <input type="text" name="nohp_ayah" value="{{ $psertadidik->ayahkandung->nohp_ayah }}" class="form-control">
                                                </div></div>
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>Masih Hidup/Meninggal Dunia</td>
                                                <td>:</td>
                                                <td>
                                                <div class="col-md-10">
                                                                <div class="form-group">
                                                <input type="text" name="hdp_mninggal_ayah" value="{{ $psertadidik->ayahkandung->hdp_mninggal_ayah }}" class="form-control">
                                                </div></div>
                                                </td>
                                              </tr>
                                              <tr>
                                                    <td> <div class="col-md-10"><div class="form-group">
                                                            <input name="update" type="submit" id="update" value="Perbaharui" class="btn btn-primary btn-sm"></div></div></td>
                                                </tr>
                                            </table>
                                        </form>
                                                                        </div>



                                                                        <div class="tab-pane fade" id="pilltab6">
                                                                            <h4>Keterangan Tentang Ibu Kandung</h4>
                                                                            <form action="{{ route('update.psertadidik', $psertadidik->id) }}" method="POST" enctype="multipart/form-data" name="update" id="update">
                                                    @method('PUT')
                                                    @csrf
                                                                            <table width="600">
                                              <tr>
                                                <td width="230">Nama</td>
                                                <td width="2">:</td>
                                                <td width="360">
                                                <div class="col-md-10">
                                                                <div class="form-group">
                                                <input type="text" name="nama_ibu" value="{{ $psertadidik->ibukandung->nama_ibu }}" class="form-control">
                                                </div></div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>Tempat dan Tanggal Lahir</td>
                                                <td>:</td>
                                                <td>
                                                <div class="col-md-5">
                                                                <div class="form-group">
                                                <input type="text" name="tmpt_ibu" value="{{ $psertadidik->ibukandung->tmpt_ibu }}" class="form-control">
                                                </div></div>
                                                <div class="col-md-5">
                                                                <div class="form-group">
                                                  <input type="date" name="tgl_ibu" value="{{ $psertadidik->ibukandung->tgl_ibu }}" class="form-control" placeholder="yyyy-mm-dd">
                                                  </div></div>
                                                  </td>
                                              </tr>
                                              <tr>
                                                <td>Agama</td>
                                                <td>:</td>
                                                <td><div class="col-md-5">
                                                            <div class="form-group">
                                                                <select name="agama_ibu" size="1" id="agama_wali"  class="form-control">
                                                                    @if (old('agama_ibu', $psertadidik->ibukandung->agama_ibu) == $psertadidik->ibukandung->agama_ibu)
                                                                    <option value="{{ $psertadidik->ibukandung->agama_ibu }}" selected>{{ $psertadidik->ibukandung->agama_ibu }}</option>
                                                                    <option>Islam</option>
                                                                    <option>Kristen</option>
                                                                    <option>Khatolik</option>
                                                                    <option>Hindu</option>
                                                                    <option>Budha</option>
                                                                    <option>Kepercayaan</option>
                                                                    <option>Konghucu</option>
                                                                    @endif
                                                                </select>
                                                </div></div>
                                                </td>
                                              </tr>

                                              <tr>
                                              <td>Kewarganegaraan</td>
                                              <td>:</td>
                                              <td>
                                                  <div class="col-md-5">
                                                      <div class="form-group">
                                                          <select name="kwg_ibu" size="1" id="kwg_ibu" class="form-control">
                                                              @if (old('kwg_ibu',$psertadidik->ibukandung->kwg_ibu)== $psertadidik->ibukandung->kwg_ibu)
                                                                  <option value="{{ $psertadidik->ibukandung->kwg_ibu }}" selected>{{ $psertadidik->ibukandung->kwg_ibu }}</option>
                                                                  <option>WNI</option>
                                                                  <option>WNA</option>
                                                               @endif
                                                          </select>

                                                          <tr>

                                                               <td>Pendidikan</td>
                                                               <td>:</td>
                                                               <td>
                                                                   <div class="col-md-10">
                                                                               <div class="form-group">
                                                               <input type="text" name="pndidikan_ibu" value="{{ $psertadidik->ibukandung->pndidikan_ibu }}" class="form-control">
                                                               </div></div>
                                                               </td>
                                                               </tr>
                                                               <tr>
                                                               <td>Pekerjaan</td>
                                                               <td>:</td>
                                                               <td>
                                                               <div class="col-md-10">
                                                                               <div class="form-group">
                                                               <input type="text" name="pkrjaan_ibu" value="{{ $psertadidik->ibukandung->pkrjaan_ibu }}" class="form-control">
                                                                   </div></div>
                                                               </td>
                                                             </tr>
                                                             <tr>
                                                               <td>Pengeluaran Perbulan</td>
                                                               <td>:</td>
                                                               <td>
                                                               <div class="col-md-10">
                                                                               <div class="form-group">
                                                               <input type="text" name="pngeluaran_ibu" value="{{ $psertadidik->ibukandung->pngeluaran_ibu }}" class="form-control">
                                                                   </div></div>
                                                               </td>
                                                               </tr>
                                                               <tr>
                                                               <td>Alamat Rumah</td>
                                                               <td>:</td>
                                                               <td>
                                                                    <div class="col-md-10">
                                                                        <div class="form-group">
                                                                            <input type="text" name="almt_ibu" class="form-control" required value="{{ old('almt_ibu', $psertadidik->ibukandung->almt_ibu) }}" id="almt_ibu"  >
                                                                        </div>
                                                                    </div>
                                                               </td>
                                                               </tr>
                                                             <tr>
                                                               <td>No HP</td>
                                                               <td>:</td>
                                                               <td>
                                                               <div class="col-md-10">
                                                                               <div class="form-group">
                                                               <input type="text" name="nohp_ibu" value="{{ $psertadidik->ibukandung->nohp_ibu }}" class="form-control">
                                                               </div></div>
                                                               </td>
                                                               </tr>
                                                               <tr>
                                                               <td>Masih Hidup/Meninggal Dunia</td>
                                                               <td>:</td>
                                                               <td>
                                                               <div class="col-md-10">
                                                                               <div class="form-group">
                                                               <input type="text" name="hdp_mninggal_ibu" value="{{ $psertadidik->ibukandung->hdp_mninggal_ibu }}" class="form-control">
                                                               </div></div>
                                                               </td>
                                                             </tr>
                                                           <tr>

                                                    <td> <div class="col-md-10"><div class="form-group">
                                                            <input name="update" type="submit" id="update" value="Perbaharui" class="btn btn-primary btn-sm"></div></div></td>
                                                </tr>
                                                           </table>
                                                        </form>
                                                          </div>


                                                          <div class="tab-pane fade" id="pilltab7">
                                                              <h4>Keterangan Tentang Wali</h4>
                                                              <form action="{{ route('update.psertadidik', $psertadidik->id) }}" method="POST" enctype="multipart/form-data" name="update" id="update">
                                                    @method('PUT')
                                                    @csrf
                                                              <table width="600">
                               <tr>
                                  <td width="230">Nama</td>
                                  <td width="2">:</td>
                                  <td width="460">
                                  <div class="col-md-10">
                                                  <div class="form-group">
                                  <input type="text" name="nama_wali" value="{{ $psertadidik->wali->nama_wali }}" class="form-control">
                                  </div></div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Tempat dan Tanggal Lahir</td>
                                  <td>:</td>
                                  <td>
                                  <div class="col-md-5">
                                                  <div class="form-group">
                                  <input type="text" name="tmpt_wali" value="{{ $psertadidik->wali->tmpt_wali }}" class="form-control">
                                  </div></div>
                                  <div class="col-md-5">
                                                  <div class="form-group">
                                    <input type="date" name="tgl_wali" value="{{ $psertadidik->wali->tgl_wali }}" class="form-control" placeholder="yyyy-mm-dd">
                                    </div></div>
                                    </td>
                                </tr>
                                <tr>
                                  <td>Agama</td>
                                  <td>:</td>
                                  <td>
                                  <div class="col-md-5">
                                              <div class="form-group">
                                                  <select name="agama_wali" size="1" id="agama_wali"  class="form-control">
                                                      @if (old('agama_wali', $psertadidik->wali->agama_wali) == $psertadidik->wali->agama_wali)
                                                      <option value="{{ $psertadidik->wali->agama_wali}}" selected>{{ $psertadidik->wali->agama_wali }}</option>
                                                      <option>Islam</option>
                                                      <option>Kristen</option>
                                                      <option>Khatolik</option>
                                                      <option>Hindu</option>
                                                      <option>Budha</option>
                                                      <option>Kepercayaan</option>
                                                      <option>Konghucu</option>
                                                      @endif
                                                  </select>
                                    </div></div>
                                  </td>
                                  </tr>

                                  <tr>
                                  <td>Kewarganegaraan</td>
                                  <td>:</td>
                                  <td>
                                      <div class="col-md-5">
                                          <div class="form-group">
                                              <select name="kwg_wali" size="1" id="kwg_wali" class="form-control">
                                                    @if (old('kwg_wali',$psertadidik->wali->kwg_wali) == $psertadidik->wali->kwg_wali)
                                                       <option value="{{ $psertadidik->wali->kwg_wali }}" selected>{{ $psertadidik->wali->kwg_wali }}</option>
                                                       <option>WNI</option>
                                                       <option>WNA</option>
                                                   </select>
                                                    @endif
                                                   </div></div>
                                               </td>
                                              </tr>





                                <tr>
                                  <td>Pendidikan</td>
                                  <td>:</td>
                                  <td>
                                  <div class="col-md-10">
                                                  <div class="form-group">
                                  <input type="text" name="pndidikan_wali" value="{{ $psertadidik->wali->pndidikan_wali }}" class="form-control">
                                   </div></div>
                                  </td>
                                  </tr>
                                  <tr>
                                  <td>Pekerjaan</td>
                                  <td>:</td>
                                  <td>
                                      <div class="col-md-10">
                                                  <div class="form-group">
                                  <input type="text" name="pkrjaan_wali" value="{{ $psertadidik->wali->pkrjaan_wali }}" class="form-control">
                                   </div></div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Pengeluaran Perbulan</td>
                                  <td>:</td>
                                  <td>
                                  <div class="col-md-10">
                                                  <div class="form-group">
                                  <input type="text" name="pngeluaran_wali" value="{{ $psertadidik->wali->pngeluaran_wali }}" class="form-control">
                                   </div></div>
                                  </td>
                                  </tr>
                                  <tr>
                                  <td>Alamat Rumah</td>
                                  <td>:</td>
                                  <td>
                                   <div class="col-md-10">
                                       <div class="form-group">
                                           <input type="text"class="form-control" required value="{{ old('almt_wali', $psertadidik->wali->almt_wali) }}" id="almt_wali" name="almt_wali" >
                                        </div>
                                    </div>
                                </td>
                                </tr>
                              <tr>

                                  <td>No HP</td>
                                  <td>:</td>
                                  <td>
                                  <div class="col-md-10">
                                                  <div class="form-group">
                                  <input type="text" name="nohp_wali" value="{{ $psertadidik->wali->nohp_wali }}" class="form-control">
                                   </div></div>
                                  </td>
                                  </tr>
                                  <tr>
                                      <td> <div class="col-md-10"><div class="form-group">
                                              <input name="update" type="submit" id="update" value="Perbaharui" class="btn btn-primary btn-sm"></div></div></td>
                                  </tr>
                              </table>
                            </form>
                                                          </div>












                                                                        <div class="tab-pane fade" id="pilltab8">
                                                                            <h4>Kegemaran Peserta Didik</h4>
                                                                            <form action="{{ route('update.psertadidik', $psertadidik->id) }}" method="POST" enctype="multipart/form-data" name="update" id="update">
                                                    @method('PUT')
                                                    @csrf
                                                                            <table width="600">
                                              <tr>
                                                <td width="230">Kesenian</td>
                                                <td width="2">:</td>
                                                <td width="330">
                                                <div class="col-md-10">
                                                                <div class="form-group">
                                                <input type="text" name="kgm_kesenian" value="{{ $psertadidik->kegemaran->kgm_kesenian }}" class="form-control">
                                                 </div></div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>Olahraga</td>
                                                <td>:</td>
                                                <td>
                                                <div class="col-md-10">
                                                                <div class="form-group">
                                                <input type="text" name="kgm_olhraga" value="{{ $psertadidik->kegemaran->kgm_olhraga }}" class="form-control">
                                                 </div></div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>Kemasyarakatan</td>
                                                <td>:</td>
                                                <td>
                                                <div class="col-md-10">
                                                                <div class="form-group">
                                                <input type="text" name="kgm_orgnsasi" value="{{ $psertadidik->kegemaran->kgm_orgnsasi }}" class="form-control">
                                                 </div></div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>Lain-Lain</td>
                                                <td>:</td>
                                                <td>
                                                <div class="col-md-10">
                                                                <div class="form-group">
                                                <input type="text" name="kgm_lain" value="{{ $psertadidik->kegemaran->kgm_lain }}" class="form-control">
                                                 </div></div>
                                                </td>
                                                </tr>
                                                <tr>
                                                    <td> <div class="col-md-10"><div class="form-group">
                                                            <input name="update" type="submit" id="update" value="Perbaharui" class="btn btn-primary btn-sm"></div></div></td>
                                                </tr>
                                            </table>
                                        </form>
                                                                        </div>




                                                                        <div class="tab-pane fade" id="pilltab9">
                                                                            <h4>Keterangan Perkembangan Peserta Didik</h4>
                                                                            <form action="{{ route('update.psertadidik', $psertadidik->id) }}" method="POST" enctype="multipart/form-data" name="update" id="update">
                                                    @method('PUT')
                                                    @csrf
                                                                            <table width="800">
                                               <tr>
                                                <td width="230" height="24">Menerima Beasiswa Tahun</td>
                                                <td width="2">:</td>
                                                <td width="560">
                                                    <div class="col-md-3">
                                                                <div class="form-group">
                                                  <input name="beasiswa_thn" type="text" value="{{ $psertadidik->perkembangan->beasiswa_thn }}" class="form-control" Placeholder="tahun">
                                                   </div></div>
                                                   <div class="col-md-3">
                                                                <div class="form-group">
                                                  <input name="beasiswa_kls" type="text" value="{{ $psertadidik->perkembangan->beasiswa_kls }}" class="form-control" Placeholder="kls">
                                                  </div></div>
                                                  <div class="col-md-3">
                                                                <div class="form-group">
                                                  <input type="text" name="beasiswa_dari" value="{{ $psertadidik->perkembangan->beasiswa_dari }}" class="form-control" Placeholder="dari">
                                                   </div></div>
                                                  </td>
                                              </tr>


                                            </table>
                                            <br>
                                            <b>Meninggalkan Sekolah Ini</b>
                                            <table width="470">
                                               <tr>
                                                <td width="230">Tanggal Meninggalkan </td>
                                                <td width="2">:</td>
                                                <td width="230">
                                                <div class="col-md-10">
                                                                <div class="form-group">
                                                <input type="text" name="tgl_tinggal_sklh" value="{{ $psertadidik->perkembangan->tgl_tinggal_sklh }}" placeholder="yyyy-mm-dd" class="form-control">
                                                 </div></div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>Alasan</td>
                                                <td>:</td>
                                                <td>
                                                <div class="col-md-10">
                                                                <div class="form-group">
                                                <input type="text" name="alasan_tinggal" value="{{ $psertadidik->perkembangan->alasan_tinggal }}" class="form-control">
                                                 </div></div>
                                                </td>
                                              </tr>
                                            </table>
                                            <br>
                                            <b>Akhir Pendidikan</b>
                                            <table width="470">
                                              <tr>
                                                <td width="230">Lulus</td>
                                                <td width="2">:</td>
                                                <td width="230">
                                                <div class="col-md-10">
                                                                <div class="form-group">
                                                <input type="text" name="lulus_pdk" value="{{ $psertadidik->perkembangan->lulus_pdk }}" class="form-control">
                                                 </div></div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>Nomor/Tanggal Ijazah</td>
                                                <td>:</td>
                                                <td>
                                                <div class="col-md-10">
                                                                <div class="form-group">
                                                <input type="text" name="no_tgl_ijasah" value="{{ $psertadidik->perkembangan->no_tgl_ijasah }}" class="form-control">
                                                 </div></div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>Nomor/Tanggal SKHUN</td>
                                                <td>:</td>
                                                <td>
                                                <div class="col-md-10">
                                                                <div class="form-group">
                                                <input type="text" name="no_tgl_skhu" value="{{ $psertadidik->perkembangan->no_tgl_skhu }}" class="form-control">
                                                 </div></div>
                                                </td>
                                              </tr>
                                              <tr>
                                                    <td> <div class="col-md-10"><div class="form-group">
                                                            <input name="update" type="submit" id="update" value="Perbaharui" class="btn btn-primary btn-sm"></div></div></td>
                                                </tr>
                                            </table>
                                        </form>
                                                                        </div>



                                                                        <div class="tab-pane fade" id="pilltab10">
                                                                            <h4>Keterangan Setelah Selesai Pendidikan </h4>
                                            <form action="{{ route('update.psertadidik', $psertadidik->id) }}" method="POST" enctype="multipart/form-data" name="update" id="update">
                                                    @method('PUT')
                                                    @csrf
                                                                            <table width="470">
                                             <tr>
                                                <td width="230">Melanjutkan Ke</td>
                                                <td width="2">:</td>
                                                <td width="230">
                                                <div class="col-md-10">
                                                                <div class="form-group">
                                                <input type="text" name="mlanjutkan_ke" value="{{ $psertadidik->perkembangan->mlanjutkan_ke }}" class="form-control">
                                                 </div></div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>Bekerja Di</td>
                                                <td>:</td>
                                                <td>
                                                    <div class="col-md-10">
                                                                <div class="form-group">
                                                <input type="text" name="bkerja_di" value="{{ $psertadidik->perkembangan->bkerja_di }}" class="form-control">
                                                 </div></div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>Tanggal Mulai Bekerja</td>
                                                <td>:</td>
                                                <td>
                                                    <div class="col-md-10">
                                                                <div class="form-group">
                                                <input type="date" name="tgl_mulai_krja" value="{{ $psertadidik->perkembangan->tgl_mulai_krja }}" placeholder="yyyy-mm-dd" class="form-control">
                                                 </div></div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>Nama Perusahaan/Lembaga</td>
                                                <td>:</td>
                                                <td>
                                                <div class="col-md-10">
                                                                <div class="form-group">
                                                <input type="text" name="nma_prshaan" value="{{ $psertadidik->perkembangan->nma_prshaan }}" class="form-control">
                                                 </div></div>
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>Penghasilan</td>
                                                <td>:</td>
                                                <td>
                                                <div class="col-md-10">
                                                                <div class="form-group">
                                                <input type="text" name="penghasilan" value="{{ $psertadidik->perkembangan->penghasilan }}" class="form-control">
                                                 </div></div>
                                                </td>
                                              </tr>
                                              <tr>
                                                    <td> <div class="col-md-10"><div class="form-group">
                                                            <input name="update" type="submit" id="update" value="Perbaharui" class="btn btn-primary btn-sm"></div></div></td>
                                                </tr>
                                            </table>
                                            </form>
                                            </div>

                                            <div class="tab-pane fade" id="pilltab11">
                                                <h4>Lain-Lain </h4>
                                                <form action="{{ route('update.psertadidik', $psertadidik->id) }}" method="POST" enctype="multipart/form-data" name="update" id="update">
                                                    @method('PUT')
                                                    @csrf
                                                    <table width="470">
                                                        <tr>


                                                <td>Diterima Di Kelas</td>
                                                <td>:</td>
                                                <td>

                                                </td>
                                                </tr>
                                              <tr>
                                              <tr>
                                                <td>PPDB Jalur</td>
                                                <td>:</td>
                                                <td><div class="col-md-10">
                                                            <div class="form-group">
                                                                <select name="nama_ppdb" size="1" id="nama_ppdb"  class="form-control">
                                                                    @if (old('nama_ppdb', $psertadidik->ppdb->nama_ppdb) ==  $psertadidik->ppdb->nama_ppdb)
                                                                    <option value="{{ $psertadidik->ppdb->nama_ppdb }}" selected>{{ $psertadidik->ppdb->nama_ppdb }}</option>
                                                                    <option>Prestasi Akademik</option>
                                                                    <option>Prestasi Non Akademik</option>
                                                                    <option>Afirmasi</option>
                                                                    <option>Zonasi</option>
                                                                    <option>Perpindahan Orang Tua</option>
                                                                    <option>Mutasi</option>
                                                                    @endif
                                                                </select>
                                                  </div></div>
                                                </td>
                                                </tr>

                                              <tr>
                                                <td>NIK</td>
                                                <td>:</td>
                                                <td>
                                                <div class="col-md-10">
                                                                <div class="form-group">
                                                <input type="number" name="nik" value="{{ $psertadidik->ppdb->nik }}" class="form-control">
                                                 </div></div>
                                                </td>
                                                </tr>
                                            <tr>
                                              <tr>
                                                <td>Nomor KK</td>
                                                <td>:</td>
                                                <td>
                                                <div class="col-md-10">
                                                                <div class="form-group">
                                                <input type="number" name="kk" value="{{ $psertadidik->ppdb->kk }}" class="form-control">
                                                 </div></div>
                                                </td>
                                                </tr>

                                            <tr></tr>
                                            <tr></tr>
                                            <tr></tr>
                                            <tr></tr>


                                              <tr>
                                                 <td> <div class="col-md-10">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary fload-end">SIMPAN</button> </td>

                                              {{-- <input name="SIMPAN" type="submit" id="SIMPAN" value="SIMPAN" class="btn btn-primary"></td> --}}

                                              </tr>
                                            </table>


                                            </form>
                                                </div>
<script>

    function previewImage(){
        const image = document.querySelector ('#foto_in');
        const imgPreview = document.querySelector ('.foto-preview');

        imgPreview.style.display ='blok';
    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREevent) {
        imgPreview.src = oFREevent.target.result;
    }
    }


</script>

            @endsection





















