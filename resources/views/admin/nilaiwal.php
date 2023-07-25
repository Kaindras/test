<script type="text/javascript">
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
</script>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Buku Induk Siswa</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->


<script language="javascript">
function tanya2() {
if (confirm ("Anda Yakin Akan Menghapus Data Ini?")) {
return true;
} else {
return false;
}
}
</script>



</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">

				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Aplikasi Buku Induk Siswa</span>Smkn 1 Mejayan</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="logout.php" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Wali Logout <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							
							<li><a href="logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-male-user"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		
		
		<ul class="nav menu">
<center><img src="image/uns.png" width="110px" height="110px"><br>
		Powered By si One </center>


		<br>
			<li ><a href="halwali.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Home</a></li>
			<li class="active"><a href="nilaiwal.php"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Data Nilai</a></li>
			
			
			
		</ul>

	</div><!--/.sidebar-->
	
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<!--/.row-->
		
	  <div class="row"></div>
		<!--/.row-->
				
		
	  <div class="row"></div>
		<!--/.row-->		
		
		
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
    <a href="from_nilaiwal.php" class="btn btn-primary btn-xs pull-right"><b>+</b> Tambah Data</a>
						
						
			
			
				
					   
						  <form method="POST" action="" onsubmit="return validasi_cari(this)">
						 
<input type="text" name="query" placeholder="masukan noinduk" id="query">
 
<select name="pilihkelas" id="pilihkelas" >
                              <option>-- PILIH KELAS--</option>
                              <?php
		
		include "config/koneksi.php";
		$sql=mysqli_query($connect,"select * from kelas");
		
		while ($hasil=mysqli_fetch_array($sql))
		{
		echo "<option value='$hasil[nama_kelas]' > $hasil[nama_kelas]</option>";
		}
		
		?>
</select>
</div></div>

<input type="submit" value="Search" name="submit"/>

</form>
						<br><br>
						<form method="POST" action="print3.php" onsubmit="return validasi_print(this)">
						 
<input type="text" name="query" placeholder="masukan noinduk" id="query">
 
<select name="pilihsemester" id="pilihsemester" >
                              <option>-- PILIH semester--</option>
                              <?php
		
		include "config/koneksi.php";
		$sql=mysqli_query($connect,"select * from semester");
		
		while ($hasil=mysqli_fetch_array($sql))
		{
		echo "<option value='$hasil[id_semester]' > $hasil[nm_smstr]</option>";
		}
		
		?>
</select>

<select name="pilihkelas" id="pilihkelas" >
                              <option>-- PILIH KELAS--</option>
                              <?php
		
		include "config/koneksi.php";
		$sql=mysqli_query($connect,"select * from kelas");
		
		while ($hasil=mysqli_fetch_array($sql))
		{
		echo "<option value='$hasil[nama_kelas]' > $hasil[nama_kelas]</option>";
		}
		
		?>
</select>
</div></div>

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
					   
					   
                            <?php
require_once ('config/koneksi.php');
include "config/class_paging.php";

$p = new Paging;



// Tentukan limit atau batas
$batas = 10;

// Cek halaman dan posisi data
$posisi = $p->cariPosisi($batas);


$sql="SELECT *
FROM nilai
INNER JOIN mapel
INNER JOIN semester
INNER JOIN naik_kelas
INNER JOIN kelas

INNER JOIN jurusan
INNER JOIN ajaran
INNER JOIN pserta_didik
ON nilai.id_mapel = mapel.id_mapel
AND nilai.id_semester = semester.id_semester
AND nilai.id_siswa = naik_kelas.id_siswa
AND nilai.id_kelas = naik_kelas.id_kelas
AND nilai.nip = naik_kelas.nip
AND nilai.id_jurusan = naik_kelas.id_jurusan
AND nilai.id_ajaran = naik_kelas.id_ajaran
AND ajaran.id_ajaran = naik_kelas.id_ajaran
AND jurusan.id_jurusan = naik_kelas.id_jurusan

AND kelas.id_kelas = naik_kelas.id_kelas
AND pserta_didik.id_siswa = naik_kelas.id_siswa
ORDER by noinduk
ASC LIMIT $posisi,$batas
";

$nomer=$posisi+1;

if(isset($_POST['submit'])){
$query=$_POST['query'];
$pilihkelas = $_POST['pilihkelas'];
$sql="SELECT *
FROM nilai
INNER JOIN mapel
INNER JOIN semester
INNER JOIN naik_kelas
INNER JOIN kelas

INNER JOIN jurusan
INNER JOIN ajaran
INNER JOIN pserta_didik
ON nilai.id_mapel = mapel.id_mapel
AND nilai.id_semester = semester.id_semester
AND nilai.id_siswa = naik_kelas.id_siswa
AND nilai.id_kelas = naik_kelas.id_kelas
AND nilai.nip = naik_kelas.nip
AND nilai.id_jurusan = naik_kelas.id_jurusan
AND nilai.id_ajaran = naik_kelas.id_ajaran
AND ajaran.id_ajaran = naik_kelas.id_ajaran
AND jurusan.id_jurusan = naik_kelas.id_jurusan

AND kelas.id_kelas = naik_kelas.id_kelas
AND pserta_didik.id_siswa = naik_kelas.id_siswa where nama_kelas like '%$pilihkelas%' AND noinduk like '%$query%' ORDER by noinduk ";
}

$result=mysqli_query($connect,$sql) or die (mysqli_error());
while($rows=mysqli_fetch_object($result)){?>



<tr>
							<td><?php echo $nomer++; ?> </td>
							<td><?php echo $rows ->noinduk ;?> </td>
                            <td><?php echo $rows ->namalengkap ;?> </td>
                            <td><?php echo $rows ->nama_kelas ;?> </td>
                            <td><?php echo $rows ->nm_smstr ;?> </td>
                            <td><?php echo $rows ->nm_mapel ;?> </td>
                            <td><?php echo $rows ->nilai_angka ;?> </td>
							 <td><?php echo $rows ->nilai_huruf ;?> </td>
							<td class="text-center">
							<a class='btn btn-info btn-xs' href='edit_nilaiwal.php?id_siswa=<?php echo $rows -> id_siswa?>&&id_kelas=<?php echo $rows -> id_kelas?>&&id_semester=<?php echo $rows -> id_semester?>&&id_mapel=<?php echo $rows -> id_mapel?>'><span class="glyphicon glyphicon-edit"></span> Edit</a> 
							<a href='hapus_nilaiwal.php?id_siswa=<?php echo $rows -> id_siswa?>&&id_kelas=<?php echo $rows -> id_kelas?>&&id_semester=<?php echo $rows -> id_semester?>&&id_mapel=<?php echo $rows -> id_mapel?>' class="btn btn-danger btn-xs" onclick='return tanya2()'><span class="glyphicon glyphicon-remove"></span> Del</a>


							</td>
							
                             </tr>
                          <?php } ?>
</table>
				

		</div>
</div>				
						
		<?php
			//paging 		
// Dapatkan jumlah data keseluruhan
$query2     = mysqli_query($connect, "SELECT *
FROM nilai
INNER JOIN mapel
INNER JOIN semester
INNER JOIN naik_kelas
INNER JOIN kelas
INNER JOIN login
INNER JOIN jurusan
INNER JOIN ajaran
INNER JOIN pserta_didik
ON nilai.id_mapel = mapel.id_mapel
AND nilai.id_semester = semester.id_semester
AND nilai.id_siswa = naik_kelas.id_siswa
AND nilai.id_kelas = naik_kelas.id_kelas
AND nilai.nip = naik_kelas.nip
AND nilai.id_jurusan = naik_kelas.id_jurusan
AND nilai.id_ajaran = naik_kelas.id_ajaran
AND ajaran.id_ajaran = naik_kelas.id_ajaran
AND jurusan.id_jurusan = naik_kelas.id_jurusan

AND kelas.id_kelas = naik_kelas.id_kelas
AND pserta_didik.id_siswa = naik_kelas.id_siswa");
$jmldata    = mysqli_num_rows($query2);

// Dapatkan jumlah halaman
$jmlhalaman = $p->jumlahHalaman($jmldata, $batas);

// Cetak link navigasi halaman
$linkHalaman = $p->navHalaman($_GET['halaman'], $jmlhalaman);
echo $linkHalaman;
?>				
						
						
						
						
						
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

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>


<script type="text/javascript">
	function validasi() {
		var query = document.getElementById("query").value;
		var pilihkelas = document.getElementById("pilihkelas").value;
		if (query != "" && pilihkelas!="" ) {
			return true;
		}else{
			alert('Anda harus mengisi data dengan lengkap !');
		}
	}
</script>
