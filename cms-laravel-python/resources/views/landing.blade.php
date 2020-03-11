<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>LSI - Home</title>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/customs.css">

    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');
    </style>

</head>
<body id="page-top">
<!-- Page Wrapper -->
<div id="wrapper">
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light  topbar mb-4 static-top shadow">
                <!-- Topbar Navbar -->
                <div class="d-none d-sm-inline-block ml-md-3 my-2 my-md-0 mw-100">
                    <h4>Institut Teknologi Padang</h4>
                </div>
                <ul class="navbar-nav ml-auto">
                    <!-- Nav Item - User Information -->
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('login') }}"  role="button" aria-haspopup="true" aria-expanded="false">
                            Login
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- End of Topbar -->
            <!-- Begin Page Content -->
            <div class="container" id="contain">
                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                    <h1 class="margin-bottom">Information Retrieval</h1>
                    <h3 class="margin-bottom">Institut Teknologi Padang</h3>
                    <p>
                        <img class="logo-index margin-bottom" src="img/logo-oke.png" alt="Logo">
                    </p>
                    <form method="get" action="{{ route('searchquery')}}" class="d-sm-inline-block form-inline search-index margin-bottom">
                        <div class="input-group" id="search-index">
                            <input type="text" class="form-control border-0 search-input" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append search-input">
                                <button class="btn btn-primary btn-search bg-gradient-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-md-3 col-lg-3 col-sm-6 menu-index  margin-bottom">
                            <div  class="card card-body card-menu">
                                <a href="{{url('/tampilkansemua')}}">
                                    <h2><i class="fa fa-eye"></i></h2>
                                    <p class="text-menu-index">Tampilkan Semua</p>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3 col-lg-3 col-sm-6 menu-index  margin-bottom">
                            <div  class="card card-body card-menu">
                                <a href="{{url('/tampilkanpertahun')}}">
                                    <h2><i class="fa fa-eye"></i></h2>
                                    <p class="text-menu-index">Tampilkan Pertahun</p>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3 col-lg-3 col-sm-6 menu-index  margin-bottom">
                            <div  class="card card-body card-menu">
                                <a href="{{url('programstudi/fti')}}">
                                    <h2><i class="fa fa-book"></i></h2>
                                    <p class="text-menu-index">Program Studi</p>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3 col-lg-3 col-sm-6 menu-index  margin-bottom">
                            <div  class="card card-body card-menu">
                                <a href="{{url('/kategori')}}">
                                    <h2><i class="fa fa-list"></i></h2>
                                    <p class="text-menu-index">Kategori</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; LSI Institut Teknologi Padang 2020</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
