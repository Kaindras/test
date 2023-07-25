


@extends('admin.main')

@section('content')

		<div class="row">
		  <div class="col-md-15">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div align="center">From Tahun
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

    <form action="{{ route('store-thnplajaran') }}" method="post" enctype="multipart/form-data" name="form3" id="form3" onsubmit="return validasi_input(this)">
        @csrf

   <table width="526">

  <tr>
    <td>Nama Tahun </td>
    <td>:</td>
    <td>
	<div class="col-md-10">
                    <div class="form-group">
	<input name="nm_thnplajaran" type="text" placeholder='Tahun Pelajaran'class="form-control">
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







					</div>
				</div>
		  </div>

	  </div>
		<!-- /.row -->

	  <div class="row"></div>
		<!-- /.row -->




	  <div class="row"><!--/.col-->
		  <!--/.col-->
		  <!--/.col-->
		  <!--/.col-->
        </div>
		<!--/.row-->

	  <div class="row"><!--/.col-->
		  <!-- /.col-->
        </div>
		<!-- /.row -->

	</div><!--/.main-->

	@endsection
