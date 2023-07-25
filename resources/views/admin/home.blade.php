@extends('admin.main')
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
@section('content')

<div class="row">
		<div class="panel panel-primary">
			<div class="panel-heading">
						<div align="center">Aplikasi Buku Induk
					    </div>
					</div>
					</div
{{-- content Home --}}
<div class="col-md-15">
				<div class="panel panel-default">
					<div class="panel-body tabs">
						<ul class="nav nav-pills">
							<li class="active"><a href="#pilltab1" data-toggle="tab"><i class="glyphicon glyphicon-globe"></i>SAMPUL</a></li>
							<li><a href="#pilltab2" data-toggle="tab"><i class="glyphicon glyphicon-pencil"></i>PETUNJUK UMUM</a></li>
							<li><a href="#pilltab3" data-toggle="tab"><i class="glyphicon glyphicon-pencil"></i>PETUNJUK KHUSUS</a></li>
							{{-- <li><a href="#pilltab4" data-toggle="tab"><i class="glyphicon glyphicon-tasks"></i>Lain-Lain</a></li> --}}

						</ul>

	<div class="tab-content">
		<div class="tab-pane fade in active" id="pilltab1">
            <div class="panel-body">

                <div class="row">
                    <div class="col-lg-4">
                         <div class="card-data pesertadidik">
                            <div class="row">
                                <div class="col-6 d-flex flex-column justify-content-center"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg></div>
                                    <div class="col-6 d-flex flex-column justify-content-center align-items-end" >
                                    <div class="card-desc">Peserta Didik Ter Registrasi</div>
                                    <div class="card-count">{{ $psertadidikCount }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="col-lg-4">
                         <div class="card-data verifikasi">
                            <div class="row">
                                <div class="col-6 d-flex flex-column justify-content-center"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg></div>
                                    <div class="col-6 d-flex flex-column justify-content-center align-items-end" >
                                    <div class="card-desc">Data Sudah Di Verifikasi</div>
                                    <div class="card-count">{{ $sdhVerifikasi }}</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card-data unverifikasi">
                            <div class="row">
                                <div class="col-6 d-flex flex-column justify-content-center"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg></div>
                                <div class="col-6 d-flex flex-column justify-content-center align-items-end" >
                                    <div class="card-desc">Data Belum Di Verifikasi</div>
                                    <div class="card-count">{{$blmVerifikasi }}</div>
                                </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>

	    <div class="tab-pane fade" id="pilltab2">
        {{-- Textkonteks Petunjuk I --}}
                <div align="center">
                     <p><img src="image/tutwuri.png" alt="tutwuri.png width="120" height="120" longdesc="image/tutwuri.png"></p>
                        </div>
                <table border="0">
                    <tr>
                        <th align="center" colspan="" class="brd" style="margin-left: 5px; margin-top: 20px;"></th>
                        <th align="center" colspan="3" class="brd" style="margin-left: 5px; margin-top: 20px;"><p>I.PETUNJUK UMUM</p></th>
                    </tr>

                    <tr class="noBorder">
                        <td align="left" style="font-size: 14px;  height: 10px; width: 5% " ></td>
                        <td align="center" valign="top" style="font-size: 14px;  height: 10px; width: 2% ">1.</td>
                        <td align="left" style="font-size: 14px;  height: 10px; width: 93%" >Buku Induk Register ialah buku yang berisi data pribadi dan data perkembangan pendidikan Peserta Didik selama bersekolah di suatu sekolah, dan berlaku sejak peserta didik tersebut diterima di sekolah yang bersangkutan baik sebagai peserta didik baru ataupun sebagai peserta didik pindahan.<p></p></td></tr>
                    <tr class="noBorder">
                        <td align="left" style="font-size: 14px;  height: 10px; width: 5% margin-top: 0px;" ></td>
                        <td align="center" valign="top" style="font-size: 14px;  height: 10px; width: 2%" >2.</td>
                        <td align="left" style="font-size: 14px;  height: 10px; width: 93%" >Induk Register diisi pada saat peserta didik diterima dan selanjutnya diikuti pencatatan perkembangan peserta didik sesuai dengan butir-butir dalam lembaran Buku Induk Register ini. <p></p></td></tr>
                        <tr class="noBorder">
                        <td align="left" style="font-size: 14px;  height: 10px; width: 5% margin-top: 0px;" ></td>
                        <td align="center" valign="top" style="font-size: 14px;  height: 10px; width: 2%" >3.</td>
                        <td align="left" style="font-size: 14px;  height: 10px; width: 93%" >Pengisian dilakukan dengan menggunakan font warna hitam. <p></p></td></tr>
                    <tr class="noBorder">
                        <td align="left" style="font-size: 14px;  height: 10px; width: 5% margin-top: 0px;" ></td>
                        <td align="center" valign="top" style="font-size: 14px;  height: 10px; width: 2%" >4.</td>
                        <td align="left" style="font-size: 14px;  height: 10px; width: 93%" >Hanya diisikan data yang dapat dijaminkan kebenarnnya. <p></p></td></tr>
                    <tr class="noBorder">
                        <td align="left" style="font-size: 14px;  height: 10px; width: 5% margin-top: 0px;" ></td>
                        <td align="center" valign="top" style="font-size: 14px;  height: 10px; width: 2%" >5.</td>
                        <td align="left" style="font-size: 14px;  height: 10px; width: 93%" >Dalam pengisian tidak dibenarkan ada kesalahan "(typo)" <p></p></td></tr>
                    <tr class="noBorder">
                        <td align="left" style="font-size: 14px;  height: 10px; width: 5% margin-top: 0px;" ></td>
                        <td align="center" valign="top" style="font-size: 14px;  height: 10px; width: 2%" >6.</td>
                        <td align="left" style="font-size: 14px;  height: 10px; width: 93%" >6. Pengelolaan Buku Induk Register ditangani oleh Kepala Sekolah <p></p></td></tr>

                </table>
            </div>

		    <div class="tab-pane fade" id="pilltab3">

                <table border="0">
                    <tr>
                        <th align="center" colspan="" class="brd" style="margin-left: 5px; margin-top: 20px;"></th>
                        <th align="center" colspan="3" class="brd" style="margin-left: 5px; margin-top: 20px;"><p>II.PETUNJUK KHUSUS</p></th>
                    </tr>
                    <tr>
                        <th align="center" colspan="" class="brd" style="margin-left: 5px; margin-top: 20px;"></th>
                        <th align="center" colspan="3" class="brd" style="margin-left: 5px; margin-top: 20px font-size: 14px;"><p>A. KETERANGAN PRIBADI</p></th>
                    </tr>
                    <tr class="noBorder">
                        <td align="left" style="font-size: 14px;  height: 10px; width: 5% " ></td>
                        <td align="center" valign="top" style="font-size: 14px;  height: 10px; width: 2% "></td>
                        <td align="left" style="font-size: 14px;  height: 10px; width: 93%" >Nama Lengkap Peserta Didik <br>
                        Nama Lengkap dimulai dengan nama peserta didik. nama keluarga atau marga (kalau ada), kemudian gelar misalnya: <br>
                        Nama anak : Nanang <br>
                        Nama Ayah:Kosim<br>
                        Gelar: Raden Mas (R.M)<br>
                        Ditulis: Nanang Kosim R.M<br>
                        Nama anak: Hadi<br>
                        Nama Keluarga: Pangaribuan<br>
                        Ditulis: hadi Pangaribuan<br>
                        Nama anak: Wahyu<br>
                        Nama ayah: Purnama<br>
                        Gelar: Datuk Mangkuto<br>
                        Ditulis: Wahyu Purnama Datuk Mangkuto<br>
                        Nama panggilan ditanyakan kepada siswa yang bersangkutan<br>
                        Jenis Kelamin ditulus Laki-laki atau Perempuan<br>
                        Tempat lahir, ditulis nama ibukota/ nama kabupaten atau ibu kota kabupaten<br>
                        Agama, ditulis sesuai dengan agama peserta didik,<br> misalnya : Islam, Protestan, Khatolik, Hindu, Budha, Konghucu, Kepercayaan<br>
                        Status dalam keluarga : Anak Kandung, Anak Tiri, atau Anak Angkat<br>
                        Anak ke berapa, ditulis sesusai dengan kesatu, kedua, ketiga dan sebagainya<br>
                        Jumlah saudara, cukup jelas<br>
                        Saudara kandung adalah saudara seayah dan seibu, cukup jelas<br>
                        Saudara tiri adalah saudara laun ayah dan atau ibu, cukup jelas<br>
                        Saudara angkat adalah saudara yang diangkat keluarga lain, cukup jelas<br>
                        Anak yatim/piatu/yatim piatu, cukup jelas<br>
                        Bahasa sehari-hari dirumah, cukup jelas<br>
                        Penempatan pas photo 3 x 4, agar tidak bertumpuk pada satu sudut,<br> diisi silang sesuai dengan nomor urut Urut 2, pada kotak nomor (2) dan seterusnya kembali seperti semula.<br> Setiap siswa membubuhi tanda tangan dibawah pas photonya, stempel sekolah ketika masuk dan meninggalkan sekolah.<p></p></td></tr>

                        <th align="center" colspan="" class="brd" style="margin-left: 5px; margin-top: 20px;"></th>
                        <th align="center" colspan="3" class="brd" style="margin-left: 5px; margin-top: 20px; font-size 12px"><p>B. KETERANGAN TEMPAT TINGGAL PESERTA DIDIK</p></th>
                    </tr>
                    <tr class="noBorder">
                        <td align="left" style="font-size: 14px;  height: 10px; width: 5% " ></td>
                        <td align="center" valign="top" style="font-size: 14px;  height: 10px; width: 2% "></td>
                        <td align="left" style="font-size: 14px;  height: 10px; width: 93%" >Alamat, diisi lengkap dengan jalan/gang, nomor rumah, RT/RW, Kelurahan/Desa, dan Kecamatan, Nomor telepon/HP, cukup jelas
                        Apabila tinggal pada wali atau menumpang berikan keterengan mengenai sifat hubungannya dengan peserta didik dan apabila tinggal dis asrama, berikan keterengan nama asrama, nama badan/yayasan penyelenggaraanya
                        jarak dari tempat tinggal ke sekolah, diiisi dalam satuan meter atau kilometer
                        Berkendaraan atau jalan kaki, diisi dengan sepeda motor, bis, sado, atau berjalan kaki. dll<p></p><br></td></tr>
                    <tr>
                        <th align="center" colspan="" class="brd" style="margin-left: 5px; margin-top: 20px;"></th>
                        <th align="center" colspan="3" class="brd" style="margin-left: 5px; margin-top: 20px font-size: 12px;"><p>C. KETERANGAN JASMANI DAN KESEHATAN PESERTA DIDIK</p></th>
                    </tr>

                    <tr class="noBorder">
                        <td align="left" style="font-size: 14px;  height: 10px; width: 5% " ></td>
                        <td align="center" valign="top" style="font-size: 14px;  height: 10px; width: 2% "></td>
                        <td align="left" style="font-size: 14px;  height: 10px; width: 93%" >Berat badan, diisi pada waktu diterima dan meninggalkan sekolah dalam satuan “kg”
                        Tinggi badan, diisi pada waktu diterima dan meninggalkan sekolah dalam satuan “cm”
                        Gologan darah, diisi berdasarkan keterangan dari PMI
                        Penyakit yang pernah diderita (misalnya : TBC, Cacar, dan lain-lain)
                        Diisi misalnya ada cacat jasmani/kelainan jasmaniah, seperti Penggap, rabun jauh, mata juling, buta warna, kurang lengkap alat panca indera, pincangm dan lain-lain, pengisianya dikonsultasikan dengan guru Bimbingan Konseling(BK). <p></p><td><tr>
                    <tr>
                        <th align="center" colspan="" class="brd" style="margin-left: 5px; margin-top: 20px;"></th>
                        <th align="center" colspan="3" class="brd" style="margin-left: 5px; margin-top: 20px font-size: 12px;"><p>D. KETERANGAN PENDIDIKAN SEBELUMNYA</p></th>
                    </tr>
                    <tr class="noBorder">
                        <td align="left" style="font-size: 14px;  height: 10px; width: 5% " ></td>
                        <td align="center" valign="top" style="font-size: 14px;  height: 10px; width: 2% "></td>
                        <td align="left" style="font-size: 14px;  height: 10px; width: 93%" >Diisi nama sekolah peserta didik yang bersangkutan sebelum masuk sekolah ini. Diisi nama sekolah peserta didik yang bersangkutan sebelum pindah ke sekolah ini.<p></p> </td></tr>
                    <tr>
                        <th align="center" colspan="" class="brd" style="margin-left: 5px; margin-top: 20px;"></th>
                        <th align="center" colspan="3" class="brd" style="margin-left: 5px; margin-top: 20px font-size: 12px;"><p>E. KETERANGAN TENTANG ORANG TUA KANDUNG</p></th>
                    </tr>
                    <tr class="noBorder">
                        <td align="left" style="font-size: 14px;  height: 10px; width: 5% " ></td>
                        <td align="center" valign="top" style="font-size: 14px;  height: 10px; width: 2% "></td>
                        <td align="left" style="font-size: 14px;  height: 10px; width: 93%" >Cukup jelas<p></p> </td></tr>
                    <tr>
                        <th align="center" colspan="" class="brd" style="margin-left: 5px; margin-top: 20px;"></th>
                        <th align="center" colspan="3" class="brd" style="margin-left: 5px; margin-top: 20px font-size: 12px;"><p>F. KETERANGAN TENTANG WALI</p></th>
                    </tr>
                        <tr class="noBorder">
                        <td align="left" style="font-size: 14px;  height: 10px; width: 5% " ></td>
                        <td align="center" valign="top" style="font-size: 14px;  height: 10px; width: 2% "></td>
                        <td align="left" style="font-size: 14px;  height: 10px; width: 93%" >Cukup Jelas<p></p> </td></tr>
                    <tr>
                        <th align="center" colspan="" class="brd" style="margin-left: 5px; margin-top: 20px;"></th>
                        <th align="center" colspan="3" class="brd" style="margin-left: 5px; margin-top: 20px font-size: 12px;"><p>G. KETERANGAN INTELEGENSI, KEPRIBADIAN DAN PRESTASI SISWA</p></th>
                    </tr>
                    <tr class="noBorder">
                        <td align="left" style="font-size: 14px;  height: 10px; width: 5% " ></td>
                        <td align="center" valign="top" style="font-size: 14px;  height: 10px; width: 2% "></td>
                        <td align="left" style="font-size: 14px;  height: 10px; width: 93%" >Diisi berdasarkan hasil tes. Cukup jelas. Diisi dengan hasil prestasi yang pernah dicapai siswa yang bersangkutan.Cukup jelas.<p></p> </td></tr>
                    <tr>
                        <th align="center" colspan="" class="brd" style="margin-left: 5px; margin-top: 20px;"></th>
                        <th align="center" colspan="3" class="brd" style="margin-left: 5px; margin-top: 20px font-size: 12px;"><p>H.  KETERANGAN KEHADIRAN</p></th>
                    </tr>
                    <tr class="noBorder">
                        <td align="left" style="font-size: 14px;  height: 10px; width: 5% " ></td>
                        <td align="center" valign="top" style="font-size: 14px;  height: 10px; width: 2% "></td>
                        <td align="left" style="font-size: 14px;  height: 10px; width: 93%" >Kolom 1 diisi kelas berapa
                        Kolom 2 diisi jumlah kehadiran
                        Kolom 3 diisi prosentase kehadiran tiap semester
                        Kolom 4 diisi jumlah tidak hadir karena alasan sakit
                        Kolom 5 diisi jumlah tidak hadir dengan izin
                        Kolom 6 diisi jumlah tidak hadir tanpa keterangan (Alpa)
                        Kolom 7 diisi jumlah seluruh ketidakhadiran
                        Kolom 8 diisi prosentase jumlah ketidakhadiran
                        Kolom 9 diisi jumlah hari belajar efektif berdasarkan kalender pendidikan yang berlaku misalnya:<p></p> </td></tr>
                    <tr></tr> </table>
                <table class="table table-striped custab">
                    <thead>
                     <tr>
                        <th></th>
                        <th>Hadir      %</th>
                        <th>Sakit  %</th>
                        <th>Izin %</th>
                        <th>Alpa %</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td></td>
                        <td>230 dari    95,5</td>
                        <td>4 dari    1,7%</td>
                        <td>3 dari  1,25%</td>
                        <td>3 dari   1,25%</td>
                        <td></td>
                    </tr>
                    </thead>
                </table>

                <table border="0">
                    <tr>
                        <th align="center" colspan="" class="brd" style="margin-left: 5px; margin-top: 20px;"></th>
                        <th align="center" colspan="3" class="brd" style="margin-left: 5px; margin-top: 20px font-size: 12px;"><p>I.  MENINGGALKAN SEKOLAH</p></th>
                    </tr>
                    <tr class="noBorder">
                        <td align="left" style="font-size: 14px;  height: 10px; width: 5% " ></td>
                        <td align="center" valign="top" style="font-size: 14px;  height: 10px; width: 2% "></td>
                        <td align="left" style="font-size: 14px;  height: 10px; width: 93%" >30. Cukup jelas <br>
                        31. Cukup jelas <br>
                        32. Cukup jelasCukup Jelas<p></p></td></tr>
                    <tr>
                    <th align="center" colspan="" class="brd" style="margin-left: 5px; margin-top: 20px;"></th>
                    <th align="center" colspan="3" class="brd" style="margin-left: 5px; margin-top: 20px font-size: 12px;"><p>J. KETERANGAN JASMANI DAN KESEHATAN PESERTA DIDIK</p></th>
                    </tr>
                    <tr class="noBorder">
                        <td align="left" style="font-size: 14px;  height: 10px; width: 5% " ></td>
                        <td align="center" valign="top" style="font-size: 14px;  height: 10px; width: 2% "></td>
                        <td align="left" style="font-size: 14px;  height: 10px; width: 93%" >33. Diisi oleh data penting selama peserta didik besangkutan berseklah di sekolah ini.
                    <p></p><p></p> </td></tr>
                    <tr>
                        <th align="center" colspan="" class="brd" style="margin-left: 5px; margin-top: 20px;"></th>
                        <th align="center" colspan="3" class="brd" style="margin-left: 5px; margin-top: 20px font-size: 12px;"><p>K. SALINAN LAPORAN HASIL PENCAPAIAN KOMPETENSI PESERTA DIDIK</p></th>
                    </tr>
                    <tr class="noBorder">
                        <td align="left" style="font-size: 14px;  height: 10px; width: 5% " ></td>
                        <td align="center" valign="top" style="font-size: 14px;  height: 10px; width: 2% "></td>
                        <td align="left" style="font-size: 14px;  height: 10px; width: 93%" >- Salinan Nilai Test Sumatif<p></p> </td></tr>
                </table>
            </div>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

@endsection
