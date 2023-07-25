{{-- <script type="text/javascript">
function validasi_cari(form){
 if (form.pilihkelas.value =="-- PILIH KELAS--"){
    alert("Anda belum memilih kelas!");
    return (false);
 }
return (true);
}
</script>


<script type="text/javascript">
function validasi_print(form){
 if (form.pilihkelas.value =="-- PILIH KELAS--"){
    alert("Anda belum memilih kelas!");
    return (false);
 }
 if (form.pilihsemester.value =="-- PILIH semester--"){
    alert("Anda belum memilih kelas!");
    return (false);
 }
 if (form.query.value ==""){
    alert("Anda belum memasukkan no induk!");
    return (false);
 }
return (true);
}
</script> --}}


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
						<div align="center">Data Nilai
					    </div>
					</div>
					<div class="panel-body">





						<div class="container">
    <div class="row col-md-9 col-md-offset-0 custyle">
    <table class="table table-striped custab">
    <thead>
    <a href="create_nilai" class="btn btn-primary btn-xs pull-right"><b>+</b> Tambah Data</a>


<input type="submit" value="cetak" name="cetak" id="cetak"/>

</form>



                        <p>&nbsp;</p>

                          <tr>
                           <th >No
                               </th>
                               <th >No. Induk
                               </th>
						   <th >Nama Lengkap
                               </th>
                               <th >Kelas
                               </th>
                               <th >semester
                               </th>
                               <th >Mapel
                               </th>
								 <th >Nilai Angka
                                </th>
								 <th >Nilai Huruf
                                </th>
								<th class="text-center">Action</th>
                          </tr>


					   </thead>



@foreach ($nilais as $nilai )



<tr>
							<td>{{ $loop->iteration }} </td>
							<td>{{ $nilai->psertadidik_id}} </td>
                            <td>{{ $nilai->psertadidik_id }} </td>
                            <td>{{ $nilai->kelas_id}}</td>
                            <td>{{ $nilai->semester_id}} </td>
                            <td>{{ $nilai->mapel_id }}</td>
                            <td>{{ $nilai->nilai }} </td>
							 <td>{{ $nilai->predikat }}</td>
							<td class="text-center">
							<a class='btn btn-info btn-xs' href=''><span class="glyphicon glyphicon-edit"></span> Edit</a>
							<a href='' class="btn btn-danger btn-xs" onclick='return tanya2()'><span class="glyphicon glyphicon-remove"></span> Del</a>


							</td>

                             </tr>
@endforeach
</table>


		</div>
</div>

@endsection
