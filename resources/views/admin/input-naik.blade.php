@extends('admin.main')


@section('content')

<div class="row">
      <div class="col-md-15">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <div align="center">Proses Naik Kelas Peserta Didik Kelas </div>

              </div>
          </div>
          <div class="panel-body">




        <div class="container">
        <div class="row col-md-9 col-md-offset-0 custyle">

<center><h4>Tahun Ajaran :</h4></center>


<table align="center" border="1"><tr><td>
<form name="form" id="form" class="form" action="{{ route('store-naik') }}" onsubmit="return validasi_input(this)" method="post" >
    @csrf

<input type="hidden" name="thnplajaran_id" value="" />
<table width="436" height="231" border="0" align="center" style="margin:20px">
  <tr>
    <td>Tahun Lahir </td>
    <td>:</td>

    <td>
	<div class="col-md-6">
                    <div class="form-group">
	<input name="tahun" type="text" size="15" class="form-control" >
	</div></div>

     </td>
  </tr>
    <tr>
    <td>Tahun Ajaran </td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">

	<select name="thnplajaran_id" id="thnplajaran_id" class="form-control">
        <option>--Pilih Tahun Pelajaran--</option>
        @foreach ($ajaran as $ajaran)
        <option>{{$ajaran->id}}-{{$ajaran->nm_thnplajaran}}</option>
        @endforeach

</select>
	</div></div>
	</td>
  </tr>

   <tr>
    <td>Kelas </td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">

	<select name="kelas_id" id="kelas_id" class="form-control">
                              <option>--Pilih Kelas--</option>
                              @foreach ($kelas as $kelas )
                              <option> {{ $kelas->nama_kelas }}</option>
                              @endforeach



</select>
	</div></div>
	</td>
  </tr>

<tr>
    <td width="111" height="48">Wali Kelas </td>
    <td width="14">:</td>
    <td width="297"><div class="col-md-10">
                    <div class="form-group">

  <select name="user_id" id="user_id" class="form-control">
                              <option>-- PILIH Wali Kelas--</option>
                              @foreach ($user as $user )
                              <option>{{ $user->name }}</option>

                              @endforeach

</select>
  </div></div>    </td>
  </tr>



{{-- <tr><td><input type="checkbox" name="checkbox" onclick="checkUncheckAll(this);"/>Pilih Semua</td></tr> --}}

  <tr>

<td width="297">
@foreach ( $psertadidik as $psertadidik)
<p>{{ $loop->iteration }}</p>
<p>{{ $psertadidik->id }}</p>
<p>{{ $psertadidik->nama_lengkap }}</p>

@endforeach

        </td>
  </tr>
<input type="hidden" name="jums" value="" />

  <tr>
    <td colspan="3"><div align="center">
    <a href="{{ route('naik') }}" ><input type="button" value="Kembali" /></a>
      <input type="submit" name="simpan" value="Simpan Data" />
	  <input type="reset" name="reset" value="Reset" />
    </div></td>
  </tr>

</table>
</form>
</td></tr>
</table>




@endsection
