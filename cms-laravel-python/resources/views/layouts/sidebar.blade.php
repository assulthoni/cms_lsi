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
    <link href="{{ URL::asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ URL::asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/customs.css') }}">

    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');
    </style>

</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/')}}">
                <div class="sidebar-brand-icon rotate-n-15 p-3">
                    <img class="logo-index" id="logo-navbar" src="{{ URL::to('/img/logo-oke.png') }}" alt="Logo">
                </div>

            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            @if (Auth::user()->username!='admin')
            <!-- Nav Item - Tampilkan Semua -->
            <li class="nav-item {{ Request::is('tampilkansemua') ? 'active' : '' }}">
                <a class="nav-link" href="{{url('/tampilkansemua')}}">
                    <i class="fas fa-fw fa-eye"></i>
                    <span>Tampilkan Semua</span></a>
            </li>
            <!-- Nav Item - Tampilkan Pertahun -->
            <li class="nav-item {{ Request::segment(1)=='tampilkanpertahun' ? 'active' : '' }}">
                <a class="nav-link" href="{{url('/tampilkanpertahun')}}">
                    <i class="fas fa-fw fa-eye"></i>
                    <span>Tampilkan Pertahun</span></a>
            </li>

            <!-- Nav Item - Tampilkan Program Studi -->
            <li class="nav-item {{ Request::segment(1)=='programstudi' ? 'active' : '' }}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Program Studi</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Program Studi: </h6>
                        <a class="collapse-item" href="{{url('programstudi/fti')}}">FTI</a>
                        <a class="collapse-item" href="{{url('programstudi/ftsp')}}">FTSP</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Tampilkan Kategori -->
            <li class="nav-item {{ Request::segment(1)=='kategori' ? 'active' : '' }}">
                <a class="nav-link" href="{{url('/kategori')}}">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Kategori</span></a>
            </li>
            @else
            <!--      start admin-->
            <!-- Nav Item - Tampilkan Menu User -->
            <li class="nav-item {{ Request::is('menuuser') ? 'active' : '' }}">
                <a class="nav-link" href="{{url('/menuuser')}}">
                    <i class="fas fa-fw fa-eye"></i>
                    <span>Menu User</span></a>
            </li>

            <!-- Nav Item - Tampilkan Menu TA -->
            <li class="nav-item {{ Request::is('menuta') ? 'active' : '' }}">
                <a class="nav-link" href="{{url('/menuta')}}">
                    <i class="fas fa-fw fa-eye"></i>
                    <span>Menu TA</span></a>
            </li>
            <li class="nav-item {{ Request::is('menukategori') ? 'active' : '' }}">
                <a class="nav-link" href="{{url('/menukategori')}}">
                    <i class="fas fa-fw fa-eye"></i>
                    <span>Menu Kategori</span></a>
            </li>
            <!--end admin-->
            @endif

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->

                    <div class="d-none d-sm-inline-block ml-md-3 my-2 my-md-0 mw-100">
                        <h4>Institut Teknologi Padang</h4>
                    </div>

                    <form method="get" action="{{ route('searchquery')}}" class="d-sm-inline-block form-inline my-2 my-lg-0 ml-auto navbar-search">
                        <div class="input-group" id="search-index">
                            <input name="query" aria-describedby="basic-addon2" aria-label="Search" class="form-control bg-light border-0 small search-input" placeholder="Search for..." type="text">
                            <div class="input-group-append search-input">
                                <button class="btn btn-primary btn-search bg-gradient-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>


                    <ul class="navbar-nav ml-3">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->username}}</span>
                                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" >
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!--          INI ADALAH ISI-->
                    @yield('content')
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

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="index.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ URL::asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ URL::asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ URL::asset('js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ URL::asset('vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ URL::asset('js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ URL::asset('js/demo/chart-pie-demo.js') }}"></script>
</body>

</html>
