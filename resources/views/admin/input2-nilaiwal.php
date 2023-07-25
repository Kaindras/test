<script type="text/javascript">
function validasi_input(form){
 if (form.mapel.value =="Pilih Mapel"){
    alert("Anda belum memilih Mata Pelajaran!");
    return (false);
 }
 if (form.id_semester.value =="-- PILIH SEMESTER--"){
    alert("Anda belum memilih Semester!");
    return (false);
 }
return (true);
}
</script>




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
 
  
<script type="text/javascript" src="js/checkboxall.js"></script>

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
    Powered By si one </center>


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
    


<?php
include "config/koneksi.php";
$ajaran = $_GET['id_ajaran'];
$jurusan = $_GET['id_jurusan'];
$kelas = $_GET['id_kelas'];
$wali = $_GET['nip'];
?>





<div class="row">
      <div class="col-md-15">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <div align="center">Input Nilai Peserta Didik Kelas <?php $kls = mysqli_fetch_array(mysqli_query($connect,"SELECT * from naik_kelas INNER JOIN kelas INNER JOIN ajaran ON naik_kelas.id_kelas=kelas.id_kelas AND naik_kelas.id_ajaran=ajaran.id_ajaran where naik_kelas.id_kelas=$kelas AND naik_kelas.id_ajaran=$ajaran ")); 
printf(": %s\n", mysqli_error($connect)); 
echo $kls['nama_kelas'];?>

              </div>
          </div>
          <div class="panel-body">
          
          
          
            
            <div class="container">
    <div class="row col-md-9 col-md-offset-0 custyle">
    
<center><h4>Tahun Ajaran : <?php echo $kls['ajaran']; ?></h4></center>



<table align="center" border="1"><tr><td>
<form name="form" id="form" class="form" action="" onsubmit="return validasi_input(this)" method="post">
<input type="hidden" name="id_ajaran" value="<?php echo $ajaran; ?>" />
<input type="hidden" name="id_jurusan" value="<?php echo $jurusan; ?>" />
<input type="hidden" name="id_kelas" value="<?php echo $kelas;?>" />
<input type="hidden" name="nip" value="<?php echo $wali; ?>" />
<table width="436" height="231" border="0" align="center" style="margin:20px">
<br>
  <tr>
    <td width="111" height="48">Mata Pelajaran</td>
    <td width="14">:</td>
    <td width="150">
 <div class="col-md-16">
                    <div class="form-group">
                    <select name="mapel" id="mapel" class="form-control">
	<option>Pilih Mapel</option>
	<?php 
  $baris=mysqli_query($connect,"SELECT * from mapel");
	  while ($mapel = mysqli_fetch_array($baris)){
	  echo "<option value=\"$mapel[id_mapel]\">$mapel[nm_mapel]</option>";

    printf(": %s\n", mysqli_error($connect));
	}
	?>
    </select>  </div></div>    </td>
  </tr>

<tr>
    <td>Semester </td>
    <td>:</td>
    <td>
  <div class="col-md-16">
                    <div class="form-group">

  <select name="id_semester" id="id_semester" class="form-control">
                              <option>-- PILIH SEMESTER--</option>
                              <?php
    
    include "config/koneksi.php";
    $sql5=mysqli_query($connect,"SELECT * from semester");
    
    while ($hasil5=mysqli_fetch_array($sql5))
    {
    echo "<option value='$hasil5[id_semester]'> $hasil5[nm_smstr]</option>";
    }
    
    ?>
</select>
  </div></div>  
  </td>
  </tr>
<tr><td><input type="checkbox" name="checkbox" onclick="checkUncheckAll(this);"/>Pilih Semua</td></tr>

    
 <table class="table table-striped custab">

 
  
                              <?php
    
    include "config/koneksi.php";
    

$sql5 = mysqli_query($connect,"SELECT * from naik_kelas INNER JOIN ajaran INNER JOIN jurusan INNER JOIN kelas INNER JOIN pserta_didik ON naik_kelas.id_ajaran=ajaran.id_ajaran AND naik_kelas.id_jurusan=jurusan.id_jurusan AND naik_kelas.id_kelas=kelas.id_kelas AND naik_kelas.id_siswa=pserta_didik.id_siswa WHERE naik_kelas.id_kelas = '$kls[id_kelas]' AND naik_kelas.id_ajaran = '$kls[id_ajaran]' AND naik_kelas.id_jurusan = '$kls[id_jurusan]' AND naik_kelas.nip = '$wali' ");


    $no = 1;
    while ($hasil5=mysqli_fetch_array($sql5))
    {
    
    echo "<tr>";
    echo "<td width='180'>";

    echo "<input type='checkbox' value='".$hasil5['id_siswa']."' name='sis".$no."' /> ".$hasil5['namalengkap']."<br /> ";
   
    echo "</td>";


 echo "<td>";
 echo "<div class='col-md-6'>";
echo  "<div class='form-group'>";
echo "<input type='text' placeholder='angka' class='form-control' name='nangka".$no."'>" ; 
 echo "</div>"."</div>";
 echo "</td>";


echo "</tr>";
$no++; 


  } ; 
    ?>

  

  </tr>

  

<input type="hidden" name="jumsis" value="<?php echo $no-1; ?>" />
</table>

  <tr>
    <td colspan="3"><div align="center">
    <a href="from_nilaiwal.php" ><input type="button" value="Kembali" /></a>
      <input type="submit" name="simpan" value="Simpan Data" />
	  <input type="reset" name="reset" value="Reset" />
    </div></td>
  </tr>
</table>
</form>
</td></tr></table>





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


<?php
include "config/koneksi.php";
if (isset($_POST['simpan'])) {  
$id_ajaran =$_POST['id_ajaran'];
$id_jurusan =$_POST['id_jurusan'];
$id_kelas =$_POST['id_kelas'];
$nip =$_POST['nip'];
$mapel =$_POST['mapel'];
$id_semester =$_POST['id_semester'];


$jumsis = $_POST['jumsis'];


for($i = 1 ; $i <= $jumsis ; $i++)
{
   $sis = @$_POST['sis'.$i];
   $nangka =@$_POST['nangka'.$i];

if ($nangka >=90){$grade='A';}else
if ($nangka >=80){$grade='B+';}else
if ($nangka >=70){$grade='B';}else
if ($nangka >=61){$grade='C+';}else
if ($nangka >=50){$grade='C';}else
if ($nangka >=30){$grade='D';}else
if ($nangka >=0){$grade='E';}

 $cek_nilai=mysqli_num_rows(mysqli_query
             ($connect,"SELECT id_siswa,id_kelas,id_jurusan,id_ajaran,id_semester,id_mapel FROM nilai
               WHERE id_siswa='$sis' AND id_kelas='$id_kelas' AND id_jurusan='$id_jurusan' AND id_ajaran='$id_ajaran' AND id_semester='$id_semester' AND id_mapel='$mapel' "));
// Kalau nilai mapel sama sudah dimasukkan
if ($cek_nilai > 0){
  echo "";
}

   elseif (!empty($sis)AND($nangka))
   {

$bos = mysqli_query($connect,"INSERT INTO nilai (nilai_angka,nilai_huruf,id_mapel,id_semester,id_siswa,id_kelas,nip,id_jurusan,id_ajaran)VALUES ('$nangka','$grade','$mapel','$id_semester','$sis','$id_kelas','$nip','$id_jurusan','$id_ajaran')");



}}
}

else{
 printf(": %s\n", mysqli_error($connect));
 

}

?>