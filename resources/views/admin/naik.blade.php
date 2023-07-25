
<script language="javascript">
function tanya2() {
if (confirm ("Anda Yakin Akan Menghapus Data Ini?")) {
return true;
} else {
return false;
}
}
</script>




<script language="javascript">
function tanya2() {
if (confirm ("Anda Yakin Akan Menghapus Data Ini?")) {
return true;
} else {
return false;
}
}
</script>

<script type="text/javascript">
function validasi_cari(form){
	if (form.pilihajaran.value =="-- PILIH TAHUN AJARAN--"){
    alert("Anda belum memasukkan Tahun ajaran!");
    return (false);
 }
 if (form.pilihkelas.value =="-- PILIH KELAS--"){
    alert("Anda belum memilih kelas!");
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
						<div align="center">Data Naik Kelas
					    </div>
					</div>
					<div class="panel-body">



						<div class="container">
    <div class="row col-md-8 col-md-offset-0 custyle">
    <table class="table table-striped custab">
    <thead>
    <a href="create-naik" class="btn btn-primary btn-xs pull-right"><b>+</b>Proses Klaper</a>


                        <p>&nbsp;</p>

                          <tr>
                          <th >No
                               </th>
						   <th >NIPD
                               </th>
						   <th >NISN
                               </th>
                               <th >Nama Lengkap
                            </th>
                            <th >JK
                            </th>
                            <th >Agama
                            </th>
                            <th >Kelas
                            </th>
								<th class="text-center">Action</th>
                          </tr>


					   </thead>



@foreach ( $naikkelas as $naikkelas)

<tr>
                            <td> {{ $loop->iteration }}</td>
                            <td> {{ $naikkelas->psertadidik->nipd}}</td>
                            <td> {{ $naikkelas->psertadidik->nisn}}</td>
							<td> {{ $naikkelas->psertadidik->nama_lengkap}} </td>
							<td> {{ $naikkelas->psertadidik->jnsklmn}} </td>
							<td> {{ $naikkelas->psertadidik->agama}} </td>
                            <td> {{ $naikkelas->kelas->nama_kelas}}</td>
							<td class="text-center">
                                <form action="{{ route('delete-naik',$naikkelas) }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger btn-xs" onclick='return tanya2()'><span class="glyphicon glyphicon-remove"></span> Del</button>
                                </form>
							</td>

                             </tr>
@endforeach
</table>




		</div>
</div>







@endsection
