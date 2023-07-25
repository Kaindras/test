<!DOCTYPE html>
<html lang="en">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Login Buku Induk</title>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">




   </head>
   <style>
    body {
	background-color: #fff;
	/* background-image: url(image/singkong.jpg); */
}
    .login-box {

        border : solid 1px rgb(21, 138, 206);
        width: 400px;
        padding: 20px;
        box-sizing: border-box;
        box-shadow: 10px;
        border-radius: 1em

    }
</style>

<body class="modal-body">

    @if (Session::has('status'))
    <div class="alert alert-danger" role="alert">
        {{ Session::get('message'); }}
    </div>

    @endif

<body class="modal-open" data-new-gr-c-s-check-loaded="14.1114.0" data-gr-ext-installed="">
      <!-- ================================
         login-wrapper
         ================================-->

      <section class="login-center-wrapper">
         <div class="login-top-bg"></div>
         <!-- end of login-top-bg -->
         <div class="login-bottom-bg"></div>
         <!--end of login-bottom-bg -->
         <div class="login">

            <!-- end of login-head -->
            <div class="vh-100  d-flex justify-content-center align-items-center" >
         <div class="login-box">
           <div class="mb-3 text-center">
                <img src="image/tutwuri.png" alt="logosmp width="100" height="100" longdesc="image/tutwuri.png">

            </div>
        <form action="" method="post">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label" >Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
             <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary form-control">Login</button>
            </div>
        </form>
    </div></div>
         <!-- end of login -->
        <!-- Modal -->
        <div class="modal fade in" id="infomodal" tabindex="-1" role="dialog" style="display: block;">
            <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Informasi</h4>
                </div>
                <div class="modal-body">
                <p>
                    </p><h5>

                        <strong>
                            Hubungi Operator Admin <br>
                            </strong>
                                Untuk mendapatkan username dan password <br>
                                Atau Registrasi untuk penguna baru


                    </h5>
                <p></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
            </div>

            </div>
        </div>
      </section>
      <!-- end of login-outer-wrapper -->
      <!--==============================
         footer
         ==============================-->
      <footer>
         <div class="container">
            <div class="row text-center">
               <div class="col-sm-12">
                   <p>Copyright © Kaindras| 2023</p>
               </div>
            </div>
            <!-- end of row -->
         </div>
         <!-- end of container -->
      </footer>

      <!-- Jquery -->
      <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
      <!-- bootstrap -->
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <!-- apexcharts -->
      <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
      <!-- datatable -->
      <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

      <script>
        $(document).ready(function() {
            // show the alert
            setTimeout(function() {
                $("#alert").alert('close');
            }, 2000);

        });
      </script>
      <script>
        $(document).ready(function(){
        // Show the Modal on load
        $("#infomodal").modal("show");

        // Hide the Modal
        $("#myBtn").click(function(){
            $("#myModal").modal("hide");
        });
        });
        </script>



{{-- <div class="modal-backdrop fade in"></div><svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M0 0 "></path></svg></body> --}}
