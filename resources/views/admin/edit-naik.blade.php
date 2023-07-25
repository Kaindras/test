<script type="text/javascript">
function validasi_input(form){
 if (form.kelas.value =="-- PILIH KELAS--"){
    alert("Anda belum memilih Kelas!");
    return (false);
 }
 if (form.guru.value =="-- PILIH Wali Kelas--"){
    alert("Anda belum memilih Wali Kelas!");
    return (false);
 }
return (true);
}
</script>



@extends('admin.main')

@section('content')





<div class="row">
      <div class="col-md-15">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <div align="center">Proses Naik Kelas Peserta Didik Kelas

              </div>
          </div>
          <div class="panel-body">




            <div class="container">
    <div class="row col-md-9 col-md-offset-0 custyle">

<center><h4>Tahun Ajaran : </h4></center>






<table align="center" border="1"><tr><td>
<form name="form" id="form" class="form" action="" onsubmit="return validasi_input(this)" method="post" >
<input type="hidden" name="id_ajaran" value="" />
<input type="hidden" name="id_jurusan" value="" />

<table width="436" height="231" border="0" align="center" style="margin:20px">
  <tr>
    <td width="111" height="48">Naik Kelas </td>
    <td width="14">:</td>
    <td width="297"><div class="col-md-10">
                    <div class="form-group">

  <select name="kelas" id="kelas" class="form-control">
                              <option>-- PILIH KELAS--</option>


</select>
  </div></div>      </td>
  </tr>

<tr>
    <td width="111" height="48">Wali Kelas </td>
    <td width="14">:</td>
    <td width="297"><div class="col-md-10">
                    <div class="form-group">

  <select name="guru" id="guru" class="form-control">
                              <option>-- PILIH Wali Kelas--</option>

</select>
  </div></div>    </td>
  </tr>

<tr>
    <td >Tanggal Naik</td>
    <td>:</td>
    <td>
   <input type="text" name="tahun" placeholder="yyyy-mm-dd">
     </td>
  </tr>

<tr><td><input type="checkbox" name="checkbox" onclick="checkUncheckAll(this);"/>Pilih Semua</td></tr>

  <tr>

    <td width="297">


        </td>
  </tr>
<input type="hidden" name="jums" value="" />

  <tr>
    <td colspan="3"><div align="center">
    <a href="from_naik.php" ><input type="button" value="Kembali" /></a>
      <input type="submit" name="simpan" value="Simpan Data" />
	  <input type="reset" name="reset" value="Reset" />
    </div></td>
  </tr>

</table>
</form>
</td></tr></table>








@endsection
