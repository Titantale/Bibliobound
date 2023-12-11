<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ShareKitPa</title>

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="/template4/assets/food.ico" />
    
    <!-- Custom fonts for this template-->
    <link href="/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/template/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="/template/css/register.css" rel="stylesheet">
    <link href="/template4/css/styles.css" rel="stylesheet" />

</head>
<style>
    .container-fluid{
  
  background-image: url("https://images.pexels.com/photos/1831234/pexels-photo-1831234.jpeg?cs=srgb&dl=pexels-madison-inouye-1831234.jpg&fm=jpg");
   font-family: "Asap", sans-serif;
 }
</style>
<body id="page-top">


    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->

                <!-- <nav class="navbar navbar-expand navbar-dark fixed-top bg-dark">
                    <a class="btn btn-primary" href="/" role="button">Back</a>

                <nav class="navbar navbar-expand navbar-dark bg-red">
                    <a class="btn btn-dark" href="/" role="button">Back</a>

                    <div class="topnav">
                        <div class="topnav-centered">
                            <a href="#home" class="active">ShareKitPa</a>
                        </div>
                    </div>
                    <style>
                        .bg-red{
                            background-color: tomato;
                        }
                        .topnav a {
                            float: left;
                            color: #f2f2f2;
                            text-align: center;
                            padding: 14px 16px;
                            text-decoration: none;
                            font-size: 17px;
                        }
                        .topnav-centered a {
                            float: none;
                            position: absolute;
                            top: 50%;
                            left: 50%;
                            transform: translate(-50%, -50%);
                            font-size: 30px;
                        }
                    </style>
                </nav> -->
                <!-- End of Topbar -->
                

                 <!-- Navigation-->
        <nav class="navbar navbar-expand navbar-dark fixed-top bg-dark" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand text-white" href="/">ShareKitPa</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link text-white" href="/member/login">Login</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="/member/register">      Sign Up</a></li>
                    </ul>
                </div>
                <style>
                        .topnav a {
                            float: left;
                            color: #f2f2f2;
                            text-align: center;
                            padding: 14px 16px;
                            text-decoration: none;
                            font-size: 17px;
                        }
                        .topnav-centered a {
                            float: none;
                            position: absolute;
                            top: 50%;
                            left: 50%;
                            transform: translate(-50%, -50%);
                        }
                    </style>
            </div>
        </nav>

                <!-- Begin Page Content -->
                <div class="container-fluid " >

                    @yield('content')

                </div>
                <!-- /.container-fluid -->
                <br></br>
                <!-- <div style="text-align: center;"><h4>Contact the owner to claim the food</h4></div> -->
                

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; ShareKitPa</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->





    <!-- Bootstrap core JavaScript-->
    <script src="/template/vendor/jquery/jquery.min.js"></script>
    <script src="/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/template/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/template/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/template/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/template/js/demo/chart-area-demo.js"></script>
    <script src="/template/js/demo/chart-pie-demo.js"></script>

</body>

</html>