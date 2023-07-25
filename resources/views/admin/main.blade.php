
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> --}}
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/datepicker3.css') }}">
<link rel="stylesheet" href="{{ asset('css/styles.css')}}">

<title>Buku Induk Siswa</title>
<!--Icons-->

<script src=" {{ asset('js/lumino.glyphs.js') }}"></script>

{{-- [if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif] --}}
<style>
    #outer{
        width: 100%;
        text-align: center;
    }
    .inner
    {
        display: inline-block;
    }

</style>

</head>

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
				<a class="navbar-brand" href="#"><span>Aplikasi Buku Induk Siswa</span>SMP Negeri 196 Jakarta</a>
				<ul class="user-menu pull-right">
					<li class="dropdown">
						<a href="{{ route('login') }}" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>{{ Auth::user()->name}} <span class="caret"></span></a>
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
        {{-- all Role --}}
			<li><a href="/"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Home</a></li>

         {{-- All Role --}}


            <li><a href="{{ route('psertadidik') }} "> <svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Data Peserta Didik</a></li>


            @if (Auth::user()->role_id == 1 && Auth::user()->role_id == 2 && Auth::user()->role_id == 3 && Auth::user()->role_id == 4)
            @else
			<li><a href="{{ route('naik') }}"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Buku Klaper</a></li>
            @endif



            @if (Auth::user()->role_id != 1)
            @else
			<li><a href="{{ route('kelas') }}"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg>Kelas</a></li>
            @endif

            @if (Auth::user()->role_id != 1)
            @else
			<li><a href="{{ route('semester') }}"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Semester</a></li>
            @endif



            @if (Auth::user()->role_id != 1)
            @else
			<li><a href="{{ route('pelajaran') }}"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg>Tahun Pelajaran</a></li>
            @endif


            @if (Auth::user()->role_id != 1)
            @else
			<li><a href="{{ route('user-index') }}"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Pengguna</a></li>
            @endif

            {{-- @if (Auth::user()->role_id != 1 && Auth::user()->role_id != 3)
            @else
			<li><a href="{{ route('mapel') }}"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Mata Pelajaran</a></li>
            @endif --}}



			{{-- <li><a href="datalogin.php"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Data Login</a></li> --}}
			{{-- <li><a href="{{ route('index_jurusan') }}"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Jurusan</a></li> --}}

            {{-- @if (Auth::user()->role_id != 1 && Auth::user()->role_id != 3)
            @else
           <li><a href="{{ route('nilai') }}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Data Nilai</a></li>
           @endif --}}

		</ul>


	</div><!--/.sidebar-->


	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<!--/.row-->

	  <div class="row"></div>
		<!--/.row-->


	 <div class="row"></div>
		<!--/.row-->

    @yield('content')




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

    {{-- <script>
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
	</script> --}}

{{-- <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> --}}

</body>

</html>


