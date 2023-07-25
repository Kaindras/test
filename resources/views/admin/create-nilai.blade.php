<script type="text/javascript">
function validasi_input(form){
 if (form.id_ajaran.value =="-- PILIH Tahun Ajaran--"){
    alert("Anda belum memilih Tahun Ajaran!");
    return (false);
 }
 if (form.id_jurusan.value =="-- PILIH JURUSAN--"){
    alert("Anda belum memilih Jurusan!");
    return (false);
 }
 if (form.id_kelas.value =="-- PILIH KELAS--"){
    alert("Anda belum memilih Kelas!");
    return (false);
 }
 if (form.nip.value =="-- PILIH Wali Kelas--"){
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
						<div align="center">From Nilai
					    </div>
					</div>
					<div class="panel-body">




						<div class="container">
    <div class="row col-md-9 col-md-offset-0 custyle">


   <form name="form" id="form" class="form" action="input2_nilai.php" onsubmit="return validasi_input(this)" method="get">

   <table width="526">
<tr>
    <td>Tahun Ajaran </td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">

	<select name="id_ajaran" id="id_ajaran" class="form-control">
                              <option>-- PILIH Tahun Ajaran--</option>

</select>
	</div></div>
	</td>
  </tr>



{{-- <tr>
    <td>JURUSAN </td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">

	<select name="id_jurusan" id="id_jurusan" class="form-control">
                              <option>-- PILIH JURUSAN--</option>

</select>

	</div></div>
	</td>
  </tr> --}}



<tr>
    <td>KELAS </td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">

	<select name="id_kelas" id="id_kelas" class="form-control">
                              <option>-- PILIH KELAS--</option>

</select>
	</div></div>
	</td>
  </tr>



<tr>
    <td>Wali Kelas </td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">

	<select name="nip" id="nip" class="form-control">
                              <option>-- PILIH Wali Kelas--</option>


</select>
	</div></div>
	</td>
  </tr>


    <tr>
    <td></td>
    <td></td><div class="form-group">
    <td><input name="masuk" type="submit" id="SIMPAN" value="input nilai" class="btn btn-primary" ></td>
	</div>
  </tr>
</table>




	</form>



		</div>
</div>







@endsection
