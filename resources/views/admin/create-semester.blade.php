
<script type="text/javascript">
function validasi_input(form){

 if (form.ns.value ==""){
    alert("Anda belum memasukkan nama Semester!");
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
						<div align="center">From Semester
					    </div>
					</div>
					<div class="panel-body">

@if ($errors->any())
@foreach ( $errors->all() as $error )
<p>{{ $error }}</p>
@endforeach
@endif



						<div class="container">
    <div class="row col-md-9 col-md-offset-0 custyle">

    <form action="{{ route('store_smstr') }}" method="post" enctype="multipart/form-data" name="form4" id="form3" onsubmit="return validasi_input(this)">

        @csrf
   <table width="526">

  <tr>
    <td>Semester </td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">
	<input name="nama semester" type="text" class="form-control">
	</div></div>
	</td>
  </tr>


    <tr>
    <td></td>
    <td></td><div class="form-group">
    <td><input name="SIMPAN" type="submit" id="SIMPAN" value="SIMPAN" class="btn btn-primary"></td>
	</div>
  </tr>
</table>




	</form>



		</div>
</div>




@endsection

