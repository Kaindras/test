<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/datepicker3.css') }}">
<link rel="stylesheet" href="{{ asset('css/styles.css')}}">

    <title>Beranda Pesert Didik</title>
</head>
<body>
<body>
    <div class="row">
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Dashboard</span>Peserta Didik</a>
				<ul class="user-menu pull-right">
					<li class="dropdown">
						<a href="" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-female-user"></use></svg> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="/logout"><svg class="glyph stroked cancel"><use xlink:href="#stroked-male-user"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>

		</div><!-- /.container-fluid -->
	</nav>
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="center"></div>
		<ul class="nav menu">
		<center><img src="../image/logo196.png" width="110x" height="110px"><br>
		<b>Powered By  Management 196</b> </center>
        <br>

			<li><a href="/student"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg>Home</a></li>


            <li><a href=" "> <svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg>Data Peserta Didik</a></li>





			<li><a href=""><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg>Jadwal Pelajaran</a></li>


			<li><a href=""><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg>Nilai</a></li>



			<li><a href=""><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg>Perkembangan</a></li>

			<li><a href=""><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg>Kehadiran</a></li>



		</ul>
	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<!--/.row-->

	  <div class="row"></div>
		<!--/.row-->


	 <div class="row"></div>
		<!--/.row-->
{{-- Content --}}
   <div class="row">
		  <div class="col-md-15">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div align="center">Data Individu
					    </div>
					</div>
                    <div class="panel-body">
                        <div class="col-md-12 col-sm-10">
                            <Table>
                                <th>Nama</th>
                            </Table>
                        </div>
                    </div>
                </div>

            </div>
</div>




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
</div>
</div>





 <script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/chart.min.js') }}"></script>
    <script src="{{ asset('js/chart-data.js') }}"></script>
	<script src="{{ asset('js/easypiechart.js') }}"></script>
    <script src="{{ asset('js/easypiechart-data.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('js/checkboxall.js') }}"></script>

</body>
</html>
