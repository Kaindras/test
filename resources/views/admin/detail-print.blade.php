<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Lengkap Peserta Didik</title>
</head>

<style type="text/css" media="print">
    @media print {
        @page {
            margin-top: 0;
            margin-bottom: 0;
            margin-left: 0;
            margin-right: 0;
        }

        body {
            padding-top: 3rem;
            padding-bottom: 3rem;
            padding-left: 2rem;
            padding-right: 2rem;
            font-family: 'Ubuntu', sans-serif;
            font-size: 12px;
        }
    }
</style>
<style>
    table {
        border-collapse: collapse;
    }

    tr.noBorder td {
        border: 0;
    }

    .brd {
        border: 0;
    }
</style>

<body onload="window.print();">

        <table border="1" width="100%">
            <thead>
            <tr>
                <th align="center" colspan="8" class="brd" style="margin-left: 5px; margin-top: 20px;"><p>SMPN 196 JAKARTA</p> NPSN : 20103606
                    </th>
            </tr>
            <tr class="noBorder">
                <th rowspan="4" width="10%"><img width='100px'
                        @if($psertadidik->foto_in !='')
                            <img src="{{asset('storage/foto_in/'.$psertadidik->foto_in)}}" alt="" width="150px">
                        @else
                        <img src="{{asset('image/default-image.png')}}" alt="" width="200px">
                        @endif </th>
                <td align="left" colspan="" style="width: 5%; font-size: 14px; font-weight: bold; height: 30px;"></td>
                <td align="left" colspan="" style="width: 10%; font-size: 14px; font-weight: bold; height: 30px;">NIPD</td>
                <td align="center" colspan="" style="width: 5%; font-size: 14px; font-weight: bold; height: 30px;">:</td>
                <td align="left" colspan="" style="width: 25%; font-size: 14px; font-weight: bold; height: 30px;">{{ $psertadidik->nipd }}</td>
                <td align="left" colspan="" style="width: 10%; font-size: 14px; font-weight: bold; height: 30px;">NIK</td>
                <td align="center" colspan="" style="width: 5%; font-size: 14px; font-weight: bold; height: 30px;">:</td>
                <td align="left" colspan="" style="width: 25%; font-size: 14px; font-weight: bold; height: 30px;">{{ $psertadidik->ppdb->nik }}</td>
            </tr>
            <tr class="noBorder">
                <td align="left" colspan="" style="width: 5%; font-size: 14px; font-weight: bold; height: 30px;"></td>
                <td align="left" colspan="" style="width: 10%;; font-size: 14px; font-weight: bold; height: 30px;">NISN</td>
               <td align="center" colspan="" style="width: 5%; font-size: 14px; font-weight: bold; height: 30px;">:</td>
                <td align="left" colspan="" style="width: 25%; font-size: 14px; font-weight: bold; height: 30px;">{{ $psertadidik->nisn }}</td>

                <td align="left" colspan="" style="width: 10%; font-size: 14px; font-weight: bold; height: 30px;">No. KK</td>
                <td align="center" colspan="" style="width: 5%; font-size: 14px; font-weight: bold; height: 30px;">:</td>
                <td align="left" colspan="" style="width: 25%; font-size: 14px; font-weight: bold; height: 30px;">{{ $psertadidik->ppdb->kk }}</td>
            </tr>

          <tr class="noBorder">
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>

            </tr>
            <tr class="noBorder">

            <td></td>
              <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
        </tr>
            </thead>

        </table>

         <table border="1">
                <tr>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" colspan="5"
                    style="border-bottom: 0; font-weight: bold; font-size: 14px; height: 30px;">A. KETERANGAN TENTANG PESERTA DIDIK</td>
                </tr>

             <tr class="border">
                <td class="td" align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >1.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Nama Lengkap</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->nama_lengkap}}</td>
                </tr>
             <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >2.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Nama Panggilan</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->namapgl}}</td>
                </tr>
             <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >3.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Jenis Kelamin</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->jnsklmn}}</td>
                </tr>
             <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >4.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Tempat dan Tanggal Lahir</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->tempatlhr}} ./ {{ $psertadidik->tgllhr }}</td>
                </tr>
             <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >5.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Agama</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->agama }}</td>
                </tr>
             <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >6.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Kewarganegaraan</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->kwgnegaraan }}</td>
                </tr>
             <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >7.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Anak Ke</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->anakke}}</td>
                </tr>
             <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >8.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Jumlah Saudara Kandung</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->jml_s_kd}}</td>
                </tr>
             <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >9.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Jumlah Saudara Tiri</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->jml_s_tr}}</td>
                </tr>
             <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >10.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Jumlah Saudara Tiri</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->jml_s_angkat}}</td>
                </tr>
             <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >11.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Keterngan Yatim/Piatu/Yatim Piatu</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->anky_yp_p}}</td>
                </tr>
             <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >12.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Bahasa Sehari-hari di Rumah</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->bhs}}</td>
                </tr>
                 {{-- Keterangan Tempat Tinggal --}}
                <tr>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" colspan="5"
                    style="border-bottom: 0; font-weight: bold; font-size: 14px; height: 30px;">B. KETERANGAN TEMPAT TINGGAL</td>
                </tr>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >13.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Alamat</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->tinggal->almt}}</td>
                </tr>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >14.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Kontak</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->tinggal->nohp}}</td>
                </tr>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >15.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Tinggal Dengan</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->tinggal->tinggaldgn}}</td>
                </tr>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >16.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Jarak Ke Sekolah</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->tinggal->jrk_k_sklh}} &nbsp; &nbsp; Km</td>
                </tr>

                {{-- Keterangan Kesehatan --}}
                <tr>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" colspan="5"
                    style="border-bottom: 0; font-weight: bold; font-size: 14px; height: 30px;">C. KETERANGAN KESEHATAN</td>
                </tr>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >17.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Golongan Darah</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->kesehatan->gol_drh}}</td>
                </tr>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >18.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Penyakit Yang Pernah di Derita</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->kesehatan->pnykit_yg_drt}}</td>
                </tr>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >19.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Kelainan Jasmani</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->kesehatan->kel_jasmani}}</td>
                </tr>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >20.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Tinggi Badan dan Berat Badan</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->kesehatan->tinggi}} &nbsp; &nbsp; Cm /&nbsp;&nbsp; {{ $psertadidik->kesehatan->bb }} &nbsp; &nbsp; Kg</td>
                </tr>

                {{-- Keterangan Pendidikan --}}
                <tr>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" colspan="5"
                    style="border-bottom: 0; font-weight: bold; font-size: 14px; height: 30px;">D. KETERANGAN PENDIDIKAN</td>
                </tr>
                <tr><td><td align="left" colspan="5"
                    style="border-bottom: 0; font-weight: bold; font-size: 14px; height: 30px;">Pendidikan Sebelumnya</td></td></tr>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >21.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Tamatan Dari</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->pendidikan->tamat_dr}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >22.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Tanggal dan Nomor Ijazah</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->pendidikan->tgl_no_ijsh}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >23.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Tanggal dan Nomor SKHU</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->pendidikan->tgl_no_skhu}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >24.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Lama Belajar</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->pendidikan->lama_bljr}}</td>
                <tr><td><td align="left" colspan="5"
                    style="border-bottom: 0; font-weight: bold; font-size: 14px; height: 30px;">Pindahan</td></td></tr>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >25.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Pindahan</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->pendidikan->pdh_dr_sklh}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >26.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Pindahan</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->pendidikan->alasan_pdh}}</td>

                <tr><td><td align="left" colspan="5"
                    style="border-bottom: 0; font-weight: bold; font-size: 14px; height: 30px;">Diterima Disekolah Ini</td></td></tr>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >27.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Kelas</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->pendidikan->dtrm_kelas}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >28.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Bidang Studi Keahlian</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->pendidikan->dtrm_bidang}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >29.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Program Studi Keahlian</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->pendidikan->dtrm_program}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >30.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Kompetensi Keahlian</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->pendidikan->dtrm_komp}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >31.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Tanggal/Bulan/Tahun Diterima</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->pendidikan->tgl_dtrima}}</td>

                 {{-- Keterangan Tentang Ayah Kandung --}}
                    <tr>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" colspan="5"
                    style="border-bottom: 0; font-weight: bold; font-size: 14px; height: 30px;">E. KETERANGAN TENTANG AYAH KANDUNG</td>
                    </tr>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >32.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Nama Ayah Kandung</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->ayahkandung->nama_ayah}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >33.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Tempat dan Tanggal Lahir</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->ayahkandung->tmpt_ayah}} &nbsp; &nbsp; &nbsp;/ {{$psertadidik->ayahkandung->tgl_ayah}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >34.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Agama</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->ayahkandung->agama_ayah}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >35.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Kewarganegaraan</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->ayahkandung->kwg_ayah}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >36.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Pendidikan</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->ayahkandung->pndidikan_ayah}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >37.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Pekerjaan</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->ayahkandung->pkrjaan_ayah}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >38.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Pengeluaran per Bulan</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->ayahkandung->pngeluaran_ayah}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >39.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Alamat</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->ayahkandung->almt_ayah}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >40.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">No HP</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->ayahkandung->nohp_ayah}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >41.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Masih Hidup / Sudah Meninggal</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->ayahkandung->hdp_mninggal_ayah}}</td>

                 {{-- Keterangan Tentang Ibu Kandung --}}
                    <tr>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" colspan="5"
                    style="border-bottom: 0; font-weight: bold; font-size: 14px; height: 30px;">F. KETERANGAN TENTANG IBU KANDUNG</td>
                    </tr>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >42.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Nama ibu Kandung</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->ibukandung->nama_ibu}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >43.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Tempat dan Tanggal Lahir</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->ibukandung->tmpt_ibu}} &nbsp; &nbsp; &nbsp;/ {{$psertadidik->ibukandung->tgl_ibu}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >44.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Agama</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->ibukandung->agama_ibu}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >45.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Kewarganegaraan</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->ibukandung->kwg_ibu}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >46.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Pendidikan</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->ibukandung->pndidikan_ibu}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >47.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Pekerjaan</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->ibukandung->pkrjaan_ibu}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >48.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Pengeluaran per Bulan</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->ibukandung->pngeluaran_ibu}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >49.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Alamat</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->ibukandung->almt_ibu}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >50.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">No HP</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->ibukandung->nohp_ibu}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >51.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Masih Hidup / Sudah Meninggal</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->ibukandung->hdp_mninggal_ibu}}</td>

                 {{-- Keterangan Tentang Wali --}}
                    <tr>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" colspan="5"
                    style="border-bottom: 0; font-weight: bold; font-size: 14px; height: 30px;">G. KETERANGAN TENTANG WALI</td>
                        </tr>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >52.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Nama Wali</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->wali->nama_wali}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >53.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Tempat dan Tanggal Lahir</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->wali->tmpt_wali}} &nbsp; &nbsp; &nbsp;/ {{$psertadidik->wali->tgl_wali}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >54.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Agama</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->wali->agama_wali}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >55.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Kewarganegaraan</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->wali->kwg_wali}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >56.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Pendidikan</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->wali->pndidikan_wali}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >57.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Pekerjaan</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->wali->pkrjaan_wali}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >58.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Pengeluaran per Bulan</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->wali->pngeluaran_wali}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >59.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Alamat</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->wali->almt_wali}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >60.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">No HP</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->wali->nohp_wali}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >61.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Masih Hidup / Sudah Meninggal</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->wali->hdp_mninggal_wali}}</td>

                 {{-- Keterangan Kegemaran --}}
                <tr>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" colspan="5"
                    style="border-bottom: 0; font-weight: bold; font-size: 14px; height: 30px;">H. KEGEMARAN PESERTA DIDIK</td>
                </tr>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >62.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Kesenian</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->kegemaran->kgm_kesenian}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >63.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Olah Raga</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->kegemaran->kgm_olhraga}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >64.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Kemasyarakatan</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->kegemaran->kgm_orgnsasi}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >65.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Lain-lain</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->kegemaran->kgm_lain }}</td>



                 {{-- Keterangan Perkembangan --}}
                    <tr>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" colspan="5"
                    style="border-bottom: 0; font-weight: bold; font-size: 14px; height: 30px;">I.KETERANGAN PERKEMBANGAN PESERTA DIDIK</td>
                    </tr>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >66.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Menerima Beasiswa tahun</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->perkembangan->beasiswa_thn}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >67.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Beasisww Dari</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->perkembangan->beasiswa_dari}}</td>



                <tr><td><td align="left" colspan="5"
                    style="border-bottom: 0; font-weight: bold; font-size: 14px; height: 30px;">Meninggalkan Sekolah ini</td></td></tr>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >68.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Tanggal Meninggalkan</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->perkembangan->tgl_tinggal_sklh}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >68.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Alasan Meninggalkan</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->perkembangan->alasan_tinggal}}</td>
                <tr><td><td align="left" colspan="5"
                    style="border-bottom: 0; font-weight: bold; font-size: 14px; height: 30px;">Akhir Pendidikan</td></td></tr>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >69.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Lulus</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->perkembangan->lulus_pdk}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >70.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Nomor dan Tanggal Ijazah</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->perkembangan->no_tgl_ijasah}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >71.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Nomor dan Tanggal SKHU</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->perkembangan->no_tgl_skhu}}</td>

                 {{-- Keterangan Selesai Pendidikan --}}
                    <tr>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" colspan="5"
                    style="border-bottom: 0; font-weight: bold; font-size: 14px; height: 30px;">J. KETERANGAN SELESAI PENDIDIKAN</td>
                    </tr>
                {{-- <tr><td><td align="left" colspan="5"
                    style="border-bottom: 0; font-weight: bold; font-size: 14px; height: 30px;">Pendidikan Sebelumnya</td></td></tr> --}}
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >72.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Melanjutkan Ke</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->perkembangan->mlanjutkan_ke}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >73.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Bekerja Di</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->perkembangan->bkerja_di}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >74.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Tanggal Mulai Bekerja</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->perkembangan->tgl_mulai_krja}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >75.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Nama Perusahaan/ Lembaga</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->perkembangan->nma_prshaan}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >76.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Penghasilan</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->perkembangan->penghasilan}}</td>

                 {{-- Keterangan Selesai Pendidikan --}}
                    <tr>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" colspan="5"
                    style="border-bottom: 0; font-weight: bold; font-size: 14px; height: 30px;">K. KETERANGAN LAIN-LAIN</td>
                    </tr>
                    <tr class="border">
                    <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                    <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >77.</td>
                    <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                    <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Foto Pendaftaran</td>
                    <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                    <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                    {{ $psertadidik->foto_out}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >78.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Jalur Seleksi PPDB</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->ppdb->nama_ppbb}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >79.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Nomor Induk Kependudukan</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->ppdb->nik}}</td>
                <tr class="border">
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 2%" >80.</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 5%" ></td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 30%">Nomor Kartu Keluarga</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px;  width: 2%">:</td>
                <td align="left" style="font-size: 14px; font-weight: bold; height: 10px; width: 50%">
                {{ $psertadidik->ppdb->kk}}</td>




    </table>
</body>

</html>
