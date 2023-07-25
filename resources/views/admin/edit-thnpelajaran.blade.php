@extends('admin.main')
@section('content')


		<div class="row">
		  <div class="col-md-15">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div align="center">Edit Tahun
					    </div>
					</div>
					<div class="panel-body">





						<div class="container">
    <div class="row col-md-9 col-md-offset-0 custyle">


    <form action="{{ route('update-thnplajaran', $ajaran) }}" method="post" enctype="multipart/form-data" name="form6" id="form3">
        @method('patch')
        @csrf

   <table width="526">
  <tr>
    <td width="202">Tahun</td>
    <td width="2">:</td>
    <td width="306">

	<div class="col-md-10">
                    <div class="form-group">
	<input name="nm_thnplajaran" type="text" id="thn_plajaran" value="{{ $ajaran->thn_plajaran }}" class="form-control">
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
