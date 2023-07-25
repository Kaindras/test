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
		<ul class="nav menu">
		<center><img src="image/uns.png" width="110px" height="110px"><br>
		<b>Powered By  si one</b> </center>
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
						<div align="center">From Mapel
					    </div>
					</div>
					<div class="panel-body">
					
					
					
					
						
						<div class="container">
    <div class="row col-md-9 col-md-offset-0 custyle">



<?php
include "config/koneksi.php";
//view data yang akan di edit
$id_siswa = $_GET['id_siswa'];
$id_kelas = $_GET['id_kelas'];
$id_semester = $_GET['id_semester'];
$id_mapel = $_GET['id_mapel'];

$sql=mysqli_query($connect,"SELECT *
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
AND login.nip = naik_kelas.nip
AND kelas.id_kelas = naik_kelas.id_kelas
AND pserta_didik.id_siswa = naik_kelas.id_siswa  WHERE nilai.id_siswa='".$id_siswa."' AND nilai.id_kelas='".$id_kelas."' AND nilai.id_semester='".$id_semester."' AND nilai.id_mapel='".$id_mapel."'");
$hasil=mysqli_fetch_array($sql);
$ajaran=$hasil['ajaran'];
$nama_jurusan=$hasil['nama_jurusan'];
$nm_guru=$hasil['nm_guru'];
$nama_kelas=$hasil['nama_kelas'];
$namalengkap=$hasil['namalengkap'];
$nm_smstr=$hasil['nm_smstr'];
$nm_mapel=$hasil['nm_mapel'];
$nilai_huruf=$hasil['nilai_huruf'];
$nilai_angka=$hasil['nilai_angka'];

//edit data
if (isset($_POST['EDIT'])){

$nilai_angk=$_POST['nilai_angka'];

if ($nilai_angk >=90){$grade='A';}else
if ($nilai_angk >=80){$grade='B+';}else
if ($nilai_angk >=70){$grade='B';}else
if ($nilai_angk >=61){$grade='C+';}else
if ($nilai_angk >=50){$grade='C';}else
if ($nilai_angk >=30){$grade='D';}else
if ($nilai_angk >=0){$grade='E';}

$sql=mysqli_query($connect,"UPDATE nilai set nilai_angka='$nilai_angk' , nilai_huruf='$grade' WHERE id_siswa='".$id_siswa."' AND id_kelas='".$id_kelas."' AND id_semester='".$id_semester."' AND id_mapel='".$id_mapel."'");
if($sql)
{
echo "Data berhasil di edit";
}
else
{
echo "data tidak tersimpan";
}
}
?>

    
    <form action="" method="post" enctype="multipart/form-data" name="form6" id="form3">
   
   
   <table width="526">
  <tr>
    <td width="202">Tahun Ajaran</td>
    <td width="2">:</td>
    <td width="306">
	
	<?php echo $ajaran ?>  
	           
	</td>
  </tr>
  <tr>
    <td width="202">Jurusan</td>
    <td width="2">:</td>
    <td width="306">
	
	<?php echo $nama_jurusan ?>  
	           
	</td>
  </tr>
  <tr>
    <td width="202">Kelas</td>
    <td width="2">:</td>
    <td width="306">
	
	<?php echo $nama_kelas ?>  
	           
	</td>
  </tr>
  <tr>
    <td width="202">Semester</td>
    <td width="2">:</td>
    <td width="306">
	
	<?php echo $nm_smstr ?>  
	           
	</td>
  </tr>
  <tr>
    <td width="202">Wali Kelas</td>
    <td width="2">:</td>
    <td width="306">
	
	<?php echo $nm_guru ?>  
	           
	</td>
  </tr>
  <tr>
    <td width="202">Siswa</td>
    <td width="2">:</td>
    <td width="306">
	
	<?php echo $namalengkap ?>  
	           
	</td>
  </tr>
  <tr>
    <td width="202">Mata Pelajaran</td>
    <td width="2">:</td>
    <td width="306">
	
	<?php echo $nm_mapel ?>  
	           
	</td>
  </tr>
  <tr>
    <td>Nilai Angka</td>
    <td>:</td>
    <td>
   
	<div class="col-md-10">
                    <div class="form-group">
	<input name="nilai_angka" type="text" id="nilai_angka" value="<?php echo $nilai_angka ?>" class="form-control">
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
