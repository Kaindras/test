<script language="javascript">
function tanya2() {
if (confirm ("Anda Yakin Akan Menghapus Data Ini?")) {
return true;
} else {
return false;
}
}
</script>

@extends('admin.main')
@section('content')

		<div class="row">
		  <div class="col-md-15">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div align="center">Data Kelas
					    </div>
					</div>
					<div class="panel-body">





						<div class="container">
    <div class="row col-md-9 col-md-offset-0 custyle">
    <table class="table table-striped custab">
    <thead>
    <a href="{{ route('create-kelas') }}" class="btn btn-primary btn-xs pull-right"><b>+</b> Tambah Data</a>



                          <tr>
						   <th >No
                               </th>
                            <th >Nama Kelas
                                </th>
								<th class="text-center">Action</th>
                          </tr>


					   </thead>




@foreach ($kelas as $kelas )



<tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $kelas->nama_kelas }} </td>
							<td class="text-center">

							<a class='btn btn-info btn-xs' href='{{ route('edit-kelas', $kelas) }}'><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                <form action="{{ route('delete-kelas', $kelas) }}" method="post" class="inner">
                                @method('delete')
                                @csrf
							<button class="btn btn-danger btn-xs inner" onclick='return tanya2()'><span class="glyphicon glyphicon-remove"></span> Del </button>
                            </form>

                            <a class='btn btn-info btn-xs' href='{{ route('print-8355', $kelas->id) }}'><span class="glyphicon glyphicon-edit"></span> 8355</a>

							</td>


                             </tr>
@endforeach

</table>

		</div>
</div>







@endsection
