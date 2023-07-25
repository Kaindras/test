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





{{-- //edit data --}}


    <form action="" method="post" enctype="multipart/form-data" name="form6" id="form3">


   <table width="526">
  <tr>
    <td width="202">Tahun Ajaran</td>
    <td width="2">:</td>
    <td width="306">

	{{-- <?php echo $ajaran ?> --}}

	</td>
  </tr>
  <tr>
    <td width="202">Jurusan</td>
    <td width="2">:</td>
    <td width="306">

	{{-- <?php echo $nama_jurusan ?> --}}

	</td>
  </tr>
  <tr>
    <td width="202">Kelas</td>
    <td width="2">:</td>
    <td width="306">

	{{-- <?php echo $nama_kelas ?> --}}

	</td>
  </tr>
  <tr>
    <td width="202">Semester</td>
    <td width="2">:</td>
    <td width="306">

	{{-- <?php echo $nm_smstr ?> --}}

	</td>
  </tr>
  <tr>
    <td width="202">Wali Kelas</td>
    <td width="2">:</td>
    <td width="306">

	{{-- <?php echo $nm_guru ?> --}}

	</td>
  </tr>
  <tr>
    <td width="202">Siswa</td>
    <td width="2">:</td>
    <td width="306">

	{{-- <?php echo $namalengkap ?> --}}

	</td>
  </tr>
  <tr>
    <td width="202">Mata Pelajaran</td>
    <td width="2">:</td>
    <td width="306">

	{{-- <?php echo $nm_mapel ?> --}}

	</td>
  </tr>
  <tr>
    <td>Nilai Angka</td>
    <td>:</td>
    <td>

	<div class="col-md-10">
                    <div class="form-group">
	<input name="nilai_angka" type="text" id="nilai_angka" value="" class="form-control">
	</div></div>
	</td>
  </tr>



    <tr>
    <td></td>
    <td></td><div class="form-group">
    <td><input name="EDIT" type="submit" id="EDIT" value="EDIT" class="btn btn-primary"></td>
	</div>
  </tr>
</table>




	</form>



		</div>
</div>





@endsection
