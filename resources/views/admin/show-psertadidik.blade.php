@extends('admin.main')

@section('content')

<div class="row">
		<div class="panel panel-primary">
			<div class="panel-heading">
						<div align="center">Detail Peserta Didik
					    </div>
					</div>
					</div>
<form action="{{ route('psertadidik',$psertadidik->id) }}" method="get" enctype="multipart/form-data" name="form1" id="form1"  onsubmit="return validasi_input(this)">
@csrf

<table align="center">
<div class ="text-center">
@if($psertadidik->foto_in !='')
<img src="{{asset('storage/'.$psertadidik->foto_in)}}" alt="" width="150px">
@else
<img src="{{asset('image/default-image.png')}}" alt="" width="200px">
@endif
</div>
    <tr>
    <td > <div class="text-center">
	   <h3> NIPD : {{ $psertadidik->nipd}} <br> NISN : {{ $psertadidik->nisn }}</h3>
	</div></td>
  </tr>

			</table>

			<!--/.col-->
<div class="col-md-15">
				<div class="panel panel-default">
					<div class="panel-body tabs">

						<ul class="nav nav-pills">
							<li class="active"><a href="#pilltab1" data-toggle="tab"><i class="glyphicon glyphicon-user"></i> Peserta Didik</a></li>
							<li><a href="#pilltab2" data-toggle="tab"><i class="glyphicon glyphicon-home"></i> Tempat Tinggal</a></li>
							<li><a href="#pilltab3" data-toggle="tab">
							<i class="glyphicon glyphicon-plus-sign"></i>Kesehatan</a></li>
							<li><a href="#pilltab4" data-toggle="tab">
							<i class="glyphicon glyphicon-globe"></i>Pendidikan</a></li>
							<li><a href="#pilltab5" data-toggle="tab">
							<i class="glyphicon glyphicon-star"></i>
							Ayah Kandung</a></li>
							<li><a href="#pilltab6" data-toggle="tab">
							<i class="glyphicon glyphicon-star-empty"></i>Ibu Kandung</a></li>
							<li><a href="#pilltab7" data-toggle="tab">
							<i class="glyphicon glyphicon-heart"></i>Wali</a></li>
							<li><a href="#pilltab8" data-toggle="tab">
							<i class="glyphicon glyphicon-fire"></i>Kegemaran</a></li>
							<li><a href="#pilltab9" data-toggle="tab"><i class="glyphicon glyphicon-pencil"></i>Perkembangan</a></li>
							<li><a href="#pilltab10" data-toggle="tab"><i class="glyphicon glyphicon-briefcase"></i>Selesai Pendidikan</a></li>
							<li><a href="#pilltab11" data-toggle="tab"><i class="glyphicon glyphicon-tasks"></i>Lain-Lain</a></li>
						</ul>





						<div class="tab-content">
							<div class="tab-pane fade in active" id="pilltab1">

								<h4>Keterangan Tentang Peserta Didik </h4>
								<table width="526">


	<input name="id" type="hidden"  id="id" value="{{ $psertadidik->id }}"

    <tr>
    <td width="202">Nama Lengkap Peserta Didik </td>
    <td width="2">:</td>
    <td width="306">
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->nama_lengkap }}
	</div></div>
	</td>
  </tr>
  <tr>
    <td>Nama Panggilan </td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->namapgl }}
	</div></div>
	</td>
  </tr>
  <tr>
    <td>Jenis Kelamin </td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->jnsklmn }}
	</div></div>
	</td>
  </tr>
  <tr>
    <td>Tempat dan Tanggal Lahir </td>
    <td>:</td>

    <td>
	<div class="col-md-5">
                    <div class="form-group">
	{{ $psertadidik->tempatlhr }}
	</div></div>
	<div class="col-md-5">
                    <div class="form-group">
      {{ $psertadidik->tgllhr }}</td>
	 </div></div>
  </tr>
  <tr>
    <td>Agama</td>
    <td>:</td>
    <td>
	<div class="col-md-5">
                    <div class="form-group">
    {{ $psertadidik->agama }}
	 </div></div>
	</td>
  </tr>
  <tr>
    <td>Kewarganegaraan</td>
    <td>:</td>
    <td>
	<div class="col-md-5">
                    <div class="form-group">
	{{ $psertadidik->kwgnegaraan }}
	 </div></div>
	</td>
  </tr>
  <tr>
    <td>Anak Keberapa </td>
    <td>:</td>
    <td>
		<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->anakke }}
	 </div></div>
	</td>
  </tr>
  <tr>
    <td>Jumlah Saudara Kandung </td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->jml_s_kd }}
	</div></div>
	</td>
  </tr>
  <tr>
    <td>Jumlah Saudara Tiri </td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->jml_s_tr }}
	</div></div>
	</td>
  </tr>
  <tr>
    <td>Jumlah Saudara Angkat </td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->jml_s_angkat }}
	</div></div>
	</td>
  </tr>
  <tr>
    <td>Anak Yatim/Piatu/Yatim Piatu </td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->anky_yp_p }}
	</div></div>
	</td>
  </tr>
  <tr>
    <td>Bahasa Sehari-hari di Rumah</td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->bhs }}
	</div></div>
	</td>
  </tr>
</table>
							</div>



							<div class="tab-pane fade" id="pilltab2">
								<h4>Keterangan Tempat Tinggal</h4>
								<table width="526">
  <tr>


    <td width="209">Alamat</td>
    <td width="2">:</td>
    <td width="305">
	<div class="col-md-10">
    <div class="form-group">
    {{ $psertadidik->tinggal->almt}}
	</div></div>


	</td>
  </tr>
  <tr>
    <td>Kontak</td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->tinggal->nohp }}
	</div></div>
	</td>
  </tr>
  <tr>
  <td>Tinggal Dengan</td>
  <td>:</td>
  <td>
  <div class="col-md-10">
                    <div class="form-group">
 {{ $psertadidik->tinggal->tinggaldgn }}
  </div></div>
  </td>
  </tr>
  <tr>
  <td>Jarak Ke Sekolah</td>
  <td>:</td>
  <td>
   <div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->tinggal->jrk_k_sklh }}
  </div></div>
  </td>
  </tr>
</table>
				</div>
{{-- Kesehatan --}}
							<div class="tab-pane fade" id="pilltab3">
								<h4>Keterangan Kesehatan</h4>
								<table width="470">
  <tr>
    <td width="230">Golongan Darah</td>
    <td width="2">:</td>
    <td width="230">
	<div class="col-md-10">
    <div class="form-group">
	{{ $psertadidik->kesehatan->gol_drh }}
	</div></div>
	</td>
  </tr>
  <tr>
    <td>Penyakit yg Pernah Diderita</td>
    <td>:</td>
    <td>
	 <div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->kesehatan->pnykit_yg_drt }}
	</div></div>
	</td>
  </tr>
  <tr>
    <td>Kelainan Jasmani</td>
    <td>:</td>
    <td>
	 <div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->kesehatan->kel_jasmani }}
	</div></div>
	</td>
  </tr>
  <tr>
    <td>Tinggi Badan dan Berat Badan </td>
    <td>:</td>
    <td>
	 <div class="col-md-5">
                    <div class="form-group">
	{{ $psertadidik->kesehatan->tinggi }}
		</div></div>
		 <div class="col-md-5">
                    <div class="form-group">
      {{ $psertadidik->bb }}
	  	</div></div>
	  </td>
	</tr>
</table>
							</div>


							<div class="tab-pane fade" id="pilltab4">
								<h4>Keterangan Pendidikan</h4>

								<b>Pendidikan Sebelumnya</b>
								<table width="538">
   <tr>
    <td width="230">Tamatan Dari</td>
    <td width="2">:</td>
    <td width="306">
	 <div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->pendidikan->tamat_dr }}
	</div></div>
	</td>
  </tr>
  <tr>
    <td>Tanggal Dan No Ijazah</td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->pendidikan->tgl_no_ijsh }}
	</div></div>
	</td>
  </tr>
  <tr>
    <td>Tanggal Dan No STL/SKHUN</td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->pendidikan->tgl_no_skhu }}
	</div></div>
	</td>
  </tr>
  <tr>
    <td>Lama Belajar</td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->pendidikan->lama_bljr }}
	</div></div>
	</td>
	</tr>
</table>
<br>
<b>Pindahan</b>
<table width="536">
   <tr>
    <td width="230">Dari Sekolah</td>
    <td width="2">:</td>
    <td width="303">
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->pendidikan->pdh_dr_sklh }}
	</div></div>
	</td>
  </tr>
  <tr>
    <td>Alasan</td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->pendidikan->alasan_pdh }}
	</div></div>
	</td>
  </tr>
</table>
<br>
<b>Diterima disekolah ini</b>
<table width="538">
  <tr>
    <td width="230">Kelas</td>
    <td width="2">:</td>
    <td width="303">
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->pendidikan->dtrm_kelas }}
	</div></div>
	</td>
  </tr>
  <tr>
    <td>Bidang Studi Keahlian</td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->pendidikan->dtrm_bidang }}
	</div></div>
	</td>
  </tr>
  <tr>
    <td>Program Studi Keahlian</td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->pendidikan->dtrm_program }}
	</div></div>
	</td>
  </tr>
  <tr>
    <td>Kompetensi Keahlian</td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->pendidikan->dtrm_komp }}
	</div></div>
	</td>
	</tr>
	<tr>
    <td>Tanggal/Bulan/Tahun</td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->pendidikan->tgl_dtrima }}
	</div></div>
	</td>
  </tr>
</table>
							</div>



							<div class="tab-pane fade" id="pilltab5">
								<h4>Keterangan Tentang Ayah Kandung</h4>
								<table width="600">
  <tr>
    <td width="230">Nama</td>
    <td width="2">:</td>
    <td width="360">
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->ayahkandung->nama_ayah }}
	</div></div>
	</td>
  </tr>
  <tr>
    <td>Tempat dan Tanggal Lahir</td>
    <td>:</td>
    <td>
	<div class="col-md-5">
                    <div class="form-group">
	{{ $psertadidik->ayahkandung->tmpt_ayah }}
	</div></div>
	<div class="col-md-5">
                    <div class="form-group">
     {{ $psertadidik->ayahkandung->tgl_ayah }}
	  </div></div>
	  </td>
  </tr>
  <tr>
    <td>Agama</td>
    <td>:</td>
    <td>
	<div class="col-md-5">
                    <div class="form-group">
	{{ $psertadidik->ayahkandung->agama_ayah }}
	</div></div>
    </td>
  </tr>
	<tr>
    <td>Kewarganegaraan</td>
    <td>:</td>
    <td>
	<div class="col-md-5">
                    <div class="form-group">
	{{ $psertadidik->ayahkandung->kwg_ayah }}
	</div></div>
    </td>
	</tr>
  <tr>
    <td>Pendidikan</td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->ayahkandung->pndidikan_ayah }}
	</div></div>
	</td>
	</tr>
	<tr>
    <td>Pekerjaan</td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->ayahkandung->pkrjaan_ayah }}
		</div></div>
	</td>
  </tr>
  <tr>
    <td>Pengeluaran Perbulan</td>
    <td>:</td>
    <td>
		<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->ayahkandung->pngeluaran_ayah }}
		</div></div>
	</td>
	</tr>
	<tr>
    <td>Alamat Rumah</td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->ayahkandung->almt_ayah }}
		</div></div>
	</td>
	</tr>
  <tr>
    <td>No HP</td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->ayahkandung->nohp_ayah }}
	</div></div>
	</td>
	</tr>
	<tr>
    <td>Masih Hidup/Meninggal Dunia</td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->ayahkandung->hdp_mninggal_ayah }}
	</div></div>
	</td>
  </tr>
</table>
							</div>



							<div class="tab-pane fade" id="pilltab6">
								<h4>Keterangan Tentang Ibu Kandung</h4>
								<table width="600">
  <tr>
    <td width="230">Nama</td>
    <td width="2">:</td>
    <td width="360">
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->ibukandung->nama_ibu }}
	</div></div>
	</td>
  </tr>
  <tr>
    <td>Tempat dan Tanggal Lahir</td>
    <td>:</td>
    <td>
	<div class="col-md-5">
                    <div class="form-group">
	{{ $psertadidik->ibukandung->tmpt_ibu }}
	</div></div>
	<div class="col-md-5">
                    <div class="form-group">
      {{ $psertadidik->ibukandung->tgl_ibu }}
	  </div></div>
	  </td>
  </tr>
  <tr>
    <td>Agama</td>
    <td>:</td>
    <td>
	<div class="col-md-5">
                    <div class="form-group">
{{ $psertadidik->ibukandung->agama_ibu }}
	</div></div>
	</td>
  </tr>
	<tr>
    <td>Kewarganegaraan</td>
    <td>:</td>
    <td>
	<div class="col-md-5">
                    <div class="form-group">
{{ $psertadidik->ibukandung->kwg_ibu }}
	</div></div>
    </td>
  </tr>
  <tr>
    <td>Pendidikan</td>
    <td>:</td>
    <td>
		<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->ibukandung->pndidikan_ibu }}
	</div></div>
	</td>
	</tr>
	<tr>
    <td>Pekerjaan</td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->ibukandung->pkrjaan_ibu }}
		</div></div>
	</td>
  </tr>
  <tr>
    <td>Pengeluaran Perbulan</td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->ibukandung->pngeluaran_ibu }}
		</div></div>
	</td>
	</tr>
	<tr>
    <td>Alamat Rumah</td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->ibukandung->almt_ibu }}
	</div></div>
	</td>
	</tr>
  <tr>
    <td>No HP</td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->ibukandung->nohp_ibu }}
	</div></div>
	</td>
	</tr>
	<tr>
    <td>Masih Hidup/Meninggal Dunia</td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->ibukandung->hdp_mninggal_ibu }}
	</div></div>
	</td>
  </tr>
</table>
							</div>



							<div class="tab-pane fade" id="pilltab7">
								<h4>Keterangan Tentang Wali</h4>
								<table width="600">
 <tr>
    <td width="230">Nama</td>
    <td width="2">:</td>
    <td width="460">
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->wali->nama_wali }}
	</div></div>
	</td>
  </tr>
  <tr>
    <td>Tempat dan Tanggal Lahir</td>
    <td>:</td>
    <td>
	<div class="col-md-5">
                    <div class="form-group">
	{{ $psertadidik->wali->tmpt_wali }}
	</div></div>
	<div class="col-md-5">
                    <div class="form-group">
      {{ $psertadidik->wali->tgl_wali }}
	  </div></div>
	  </td>
  </tr>
  <tr>
    <td>Agama</td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->wali->agama_wali }}
	  </div></div>
	</td>
	</tr>
	<tr>
    <td>Kewarganegaraan</td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->wali->kwg_wali }}
	  </div></div>
	</td>
  </tr>
  <tr>
    <td>Pendidikan</td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->wali->pndidikan_wali }}
	 </div></div>
	</td>
	</tr>
	<tr>
    <td>Pekerjaan</td>
    <td>:</td>
    <td>
		<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->wali->pkrjaan_wali }}
	 </div></div>
	</td>
  </tr>
  <tr>
    <td>Pengeluaran Perbulan</td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->wali->pngeluaran_wali }}
	 </div></div>
	</td>
	</tr>
	<tr>
    <td>Alamat Rumah</td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->wali->almt_wali }}
	 </div></div>
	</td>
	</tr>
  <tr>
    <td>No HP</td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->wali->nohp_wali }}
	 </div></div>
	</td>
	</tr>
</table>
							</div>



							<div class="tab-pane fade" id="pilltab8">
								<h4>Kegemaran Peserta Didik</h4>
								<table width="600">
  <tr>
    <td width="230">Kesenian</td>
    <td width="2">:</td>
    <td width="330">
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->kegemaran->kgm_kesenian }}
	 </div></div>
	</td>
  </tr>
  <tr>
    <td>Olahraga</td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->kegemaran->kgm_olhraga }}
	 </div></div>
	</td>
  </tr>
  <tr>
    <td>Kemasyarakatan</td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->kegemaran->kgm_orgnsasi }}
	 </div></div>
	</td>
  </tr>
  <tr>
    <td>Lain-Lain</td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->kegemaran->kgm_lain }}
	 </div></div>
	</td>
	</tr>
</table>
							</div>




							<div class="tab-pane fade" id="pilltab9">
								<h4>Keterangan Perkembangan Peserta Didik</h4>
								<table width="800">
   <tr>
    <td width="230" height="24">Menerima Beasiswa Tahun</td>
    <td width="2">:</td>
    <td width="560">
		<div class="col-md-3">
                    <div class="form-group">
      {{ $psertadidik->perkembangan->beasiswa_thn }}
	   </div></div>
	   <div class="col-md-3">
                    <div class="form-group">
      {{ $psertadidik->perkembangan->beasiswa_kls }}
      </div></div>
	  <div class="col-md-3">
                    <div class="form-group">
      {{ $psertadidik->perkembangan->beasiswa_dari }}
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
	{{ $psertadidik->perkembangan->tgl_tinggal_sklh }}
	 </div></div>
	</td>
  </tr>
  <tr>
    <td>Alasan</td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->perkembangan->alasan_tinggal }}
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
	{{ $psertadidik->perkembangan->lulus_pdk }}
	 </div></div>
	</td>
  </tr>
  <tr>
    <td>Nomor/Tanggal Ijazah</td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->perkembangan->no_tgl_ijasah }}
	 </div></div>
	</td>
  </tr>
  <tr>
    <td>Nomor/Tanggal SKHUN</td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->perkembangan->no_tgl_skhu }}
	 </div></div>
	</td>
  </tr>
</table>
							</div>



							<div class="tab-pane fade" id="pilltab10">
								<h4>Keterangan Setelah Selesai Pendidikan </h4>
								<table width="470">
 <tr>
    <td width="230">Melanjutkan Ke</td>
    <td width="2">:</td>
    <td width="230">
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->perkembangan->mlanjutkan_ke }}
	 </div></div>
	</td>
  </tr>
  <tr>
    <td>Bekerja Di</td>
    <td>:</td>
    <td>
		<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->perkembangan->bkerja_di }}
	 </div></div>
	</td>
  </tr>
  <tr>
    <td>Tanggal Mulai Bekerja</td>
    <td>:</td>
    <td>
		<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->perkembangan->tgl_mulai_krja }}
	 </div></div>
	</td>
  </tr>
  <tr>
    <td>Nama Perusahaan/Lembaga</td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->perkembangan->nma_prshaan }}
	 </div></div>
	</td>
	</tr>
	<tr>
    <td>Penghasilan</td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">
	{{ $psertadidik->perkembangan->penghasilan }}
	 </div></div>
	</td>
  </tr>
</table>

</div>

<div class="tab-pane fade" id="pilltab11">
								<h4>Lain-Lain </h4>
								<table width="470">
<tr>
								<td >Foto Masuk</td>
                            <td>:</td>
                            <td >
	{{-- {{ $psertadidik->foto->foto_masuk }} --}}

	</td>
	</tr>

 <tr>
                            <td >Kelas </td>
                            <td>:</td>
                            <td >
							<div class="col-md-8">
                    <div class="form-group">
						{{ $psertadidik->pendidikan->dtrm_kelas }}
							</div></div>
							</td>
                          </tr>
{{-- <tr>
						  <td >PPDB Jalur </td>
                            <td>:</td>
                            <td >
							<div class="col-md-8">
                    <div class="form-group">

							</div></div>
							</td>
                          </tr>


						   <tr>
                            <td>Tahun Ajaran </td>
                            <td>:</td>
                            <td>
							<div class="col-md-8">
                    <div class="form-group">
						{{ $psertadidik->ppdb }}
							</div></div>
							</td>
                          </tr>


                          <tr>
                            <td>Wali kelas </td>
                            <td>:</td>
                            <td>
							<div class="col-md-8">
                    <div class="form-group">
							{{ $psertadidik->pendidikan }}
							</div></div>
							</td>
                          </tr>


<tr> --}}
<td >Tanggal Daftar </td>
                            <td>:</td>
                            <td >
							<div class="col-md-8">
                    <div class="form-group">
							{{ $psertadidik->pendidikan->tgl_dtrima }}
							</div></div>
							</td>
                          </tr>


  <tr>
    <td></td>
    <td></td><div class="form-group">
    <td><input name="KEMBALI" type="submit" id="KEMBALI" value="KEMBALI" class="btn btn-primary"></td>
	</div>
  </tr>


</table>

</div>



</div>


@endsection
