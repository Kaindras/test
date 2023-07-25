@extends('admin.main')

@section('content')


		<div class="row">
		  <div class="col-md-15">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div align="center">Edit Kelas
					    </div>
					</div>
					<div class="panel-body">





						<div class="container">
    <div class="row col-md-9 col-md-offset-0 custyle">





    <form action="{{ route('update-kelas', $kelas) }}" method="post" enctype="multipart/form-data" name="form6" id="form3">
        @method('patch')
        @csrf


   <table width="526">

  <tr>
    <td width="202">Kelas</td>
    <td width="2">:</td>
    <td width="306">

	<div class="col-md-10">
                    <div class="form-group">
	<input name="nama_kelas" type="text" id="nmkls" value="{{ $kelas->nama_kelas }}" class="form-control">
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

