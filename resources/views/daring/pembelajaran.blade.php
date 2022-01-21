<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Adminmart Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="{{asset('layout2/assets/extra-libs/c3/c3.min.css')}}" rel="stylesheet">
    <link href="{{asset('layout2/assets/libs/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('layout2/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{asset('layout2/dist/css/style.min.css')}}" rel="stylesheet">
    <link href="{{asset('layout2/assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin6">
        <nav class="navbar top-navbar navbar-expand-md">
            <div class="navbar-header" data-logobg="skin6">
                <!-- This is for the sidebar toggle which is visible on mobile only -->
                <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                    class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="index.html">
                            <b class="logo-icon">
                                <i class="bi bi-mortarboard"></i>
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                E-Lerning
                            </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                    data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                    class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                        <!-- Notification -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle pl-md-3 position-relative" href="javascript:void(0)"
                            id="bell" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">


                        </a>
                        <div class="dropdown-menu dropdown-menu-left mailbox animated bounceInDown">
                            <ul class="list-style-none">
                                <li>

                                </li>

                            </ul>
                        </div>
                    </li>
                    <!-- End Notification -->
                    <!-- ============================================================== -->
                    <!-- create new -->
                    <!-- ============================================================== -->


                </ul>
                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-right">
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        @if (Str::length(Auth::guard('baak')->user()) > 0)
                        <img src="{{asset('layout2/img/admin.png')}}" alt="user" class="rounded-circle"
                        width="40">
                        @endif
                        @if (Str::length(Auth::guard('dosen')->user()) > 0)
                          
                         @if(Auth::guard('dosen')->user()->jk=="laki-laki")
                        <img src="{{asset('layout2/img/d_cwo.png')}}"
                        width="40">
                        
                        @elseif(Auth::guard('dosen')->user()->jk=="perempuan")

                         <img src="{{asset('layout2/img/d_cwe.png')}}"
                        width="40">
                         @endif

                        @endif


                        @if (Str::length(Auth::guard('mahasiswa')->user()) > 0)
                          
                         @if(Auth::guard('mahasiswa')->user()->jk=="laki-laki")
                        <img src="{{asset('layout2/img/m_cwo.png')}}"
                        width="40">
                        
                        @elseif(Auth::guard('mahasiswa')->user()->jk=="perempuan")

                          <img src="{{asset('layout2/img/m_cwe.png')}}"
                        width="40">
                         @endif

                        @endif



                        <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> 
                        @if (Str::length(Auth::guard('baak')->user()) > 0)
                        <span class="text-dark">{{Auth::guard('baak')->user()->name}}</span> 
                        @elseif (Str::length(Auth::guard('dosen')->user()) > 0)
                        <span class="text-dark">{{Auth::guard('dosen')->user()->name}}</span> 
                        @elseif (Str::length(Auth::guard('mahasiswa')->user()) > 0)
                        <span class="text-dark">{{Auth::guard('mahasiswa')->user()->name}}</span> 
                        @endif
                        <i data-feather="chevron-down" class="svg-icon"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">

                        @if (Str::length(Auth::guard('baak')->user()) > 0)
                        <a class="dropdown-item" href="javascript:void(0)">
                            <i data-feather="user"class="svg-icon mr-2 ml-1"></i>
                            {{Auth::guard('baak')->user()->name}}</a>

                            @elseif (Str::length(Auth::guard('dosen')->user()) > 0)
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i data-feather="user"class="svg-icon mr-2 ml-1"></i>
                                {{Auth::guard('dosen')->user()->name}}</a>

                                @elseif (Str::length(Auth::guard('mahasiswa')->user()) > 0)
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i data-feather="user"class="svg-icon mr-2 ml-1"></i>
                                    {{Auth::guard('mahasiswa')->user()->name}}</a>
                                    @endif



                                    <div class="dropdown-divider"></div>

                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item btn1" href="{{url('logout')}}">
                                        <i data-feather="power" class="svg-icon mr-2 ml-1"></i>
                                        Logout
                                    </a>
                                    <div class="dropdown-divider"></div>

                                </div>
                            </li>
                            <!-- ============================================================== -->
                            <!-- User profile and search -->
                            <!-- ============================================================== -->
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- ============================================================== -->
            <!-- End Topbar header -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->

            <aside class="left-sidebar" data-sidebarbg="skin6">

                <!-- Sidebar scroll-->
                <div class="scroll-sidebar" data-sidebarbg="skin6">
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav">
                            <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{url('home')}}"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                class="hide-menu">Dashboard</span></a></li>
                                <li class="list-divider"></li>



                                







                                @if (Str::length(Auth::guard('dosen')->user()) > 0)
                                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                    aria-expanded="false"><i data-feather="feather" class="feather-icon"></i><span
                                    class="hide-menu">Menu Dosen
                                </span></a>
                                <ul aria-expanded="false" class="collapse first-level base-level-line">
                                    <li class="sidebar-item"><a href="icon-fontawesome.html" class="sidebar-link"><span
                                        class="hide-menu">Mengajar</span></a></li>

                                        <li class="sidebar-item"><a href="icon-simple-lineicon.html" class="sidebar-link"><span
                                            class="hide-menu">Profil</span></a></li>
                                        </ul>
                                    </li>




                                    @endif
                                </nav>
                                <!-- End Sidebar navigation -->
                            </div>
                            <!-- End Sidebar scroll-->
                        </aside>
                        <!-- ============================================================== -->
                        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Page wrapper  -->
                        <!-- ============================================================== -->
                        <div class="page-wrapper">
                            <!-- ============================================================== -->
                            <!-- Bread crumb and right sidebar toggle -->
                            <!-- ============================================================== -->
                            <div class="page-breadcrumb">
                                <div class="row">
                                    <div class="col-7 align-self-center">
                                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Mata Kuliah</h3>
                                        <div class="d-flex align-items-center">
                                            <nav aria-label="breadcrumb">
                                                <ol class="breadcrumb m-0 p-0">
                                                    <li class="breadcrumb-item"><a href="index.html"></a>
                                                    </li>
                                                </ol>
                                            </nav>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- End Bread crumb and right sidebar toggle -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- Container fluid  -->
                            <!-- ============================================================== -->


                            @if (Str::length(Auth::guard('mahasiswa')->user()) > 0)
                             @if(Auth::guard('mahasiswa')->user()->jurusan=="informatika")
                            <div class="container-fluid">
                             <div class="row mb-2">
                                 @foreach ($if as $x)

                                 <div class="col-xl-3 col-md-6 mb-4">

                                    <div class="card h-100 bg-primary">
                                      <div class="card-body">
                                        <div class="row align-items-center">
                                          <div class="col mr-2">


                                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                        <div>
                                            <a href=""><h5 class="text-white mb-1 w-100 text-truncate font-weight-medium">{{$x->nama_matkul}}</h5></a>
                                                <h6 class="text-white font-weight-normal mb-0 w-100 text-truncate">{{$x->jurusan}}
                                                </h6>
                                            </div>
                                            <div class="ml-auto mt-md-3 mt-lg-0">
                                                <span class="opacity-7 text-muted"><i data-feather="book" class="text-white"></i></span>
                                            </div>
                                        </div>

                                            </div>
                                            <div class="col-auto">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             
                            @endforeach 
                            @endif



                            @if(Auth::guard('mahasiswa')->user()->jurusan=="sistem infromasi")
                            @foreach ($si as $x)

                                 <div class="col-xl-3 col-md-6 mb-4">

                                    <div class="card h-100 bg-primary">
                                      <div class="card-body">
                                        <div class="row align-items-center">
                                          <div class="col mr-2">


                                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                        <div>
                                            <a href=""><h5 class="text-white mb-1 w-100 text-truncate font-weight-medium">{{$x->nama_matkul}}</h5></a>
                                                <h6 class="text-white font-weight-normal mb-0 w-100 text-truncate">{{$x->jurusan}}
                                                </h6>
                                            </div>
                                            <div class="ml-auto mt-md-3 mt-lg-0">
                                                <span class="opacity-7 text-muted"><i data-feather="book" class="text-white"></i></span>
                                            </div>
                                        </div>

                                            </div>
                                            <div class="col-auto">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach 
                            @endif


                            @if(Auth::guard('mahasiswa')->user()->jurusan=="siak")
                            @foreach ($siak as $x)

                                 <div class="col-xl-3 col-md-6 mb-4">

                                    <div class="card h-100 bg-primary">
                                      <div class="card-body">
                                        <div class="row align-items-center">
                                          <div class="col mr-2">


                                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                        <div>
                                            <a href=""><h5 class="text-white mb-1 w-100 text-truncate font-weight-medium">{{$x->nama_matkul}}</h5></a>
                                                <h6 class="text-white font-weight-normal mb-0 w-100 text-truncate">{{$x->jurusan}}
                                                </h6>
                                            </div>
                                            <div class="ml-auto mt-md-3 mt-lg-0">
                                                <span class="opacity-7 text-muted"><i data-feather="book" class="text-white"></i></span>
                                            </div>
                                        </div>

                                            </div>
                                            <div class="col-auto">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach 
                            @endif

                        </div>
                        <!-- *************************************************************** -->
                        <!-- Start First Cards -->
                        <!-- *************************************************************** -->
                        <!--<div class="card-group">
                            
                            <div class="card border-right">
                                <div class="card-body">
                                    <div class="d-flex d-lg-flex d-md-block align-items-center">
                                        <div>
                                            <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup
                                                class="set-doller">$</sup>18,306</h2>
                                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Earnings of Month
                                                </h6>
                                            </div>
                                            <div class="ml-auto mt-md-3 mt-lg-0">
                                                <span class="opacity-7 text-muted"><i data-feather="user"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-right">
                                    <div class="card-body">
                                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                                            <div>
                                                <div class="d-inline-flex align-items-center">
                                                    <h2 class="text-dark mb-1 font-weight-medium">1538</h2>
                                                    <span
                                                    class="badge bg-danger font-12 text-white font-weight-medium badge-pill ml-2 d-md-none d-lg-block">-18.33%</span>
                                                </div>
                                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">New Projects</h6>
                                            </div>
                                            <div class="ml-auto mt-md-3 mt-lg-0">
                                                <span class="opacity-7 text-muted"><i data-feather="user"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                                            <div>
                                                <h2 class="text-dark mb-1 font-weight-medium">864</h2>
                                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Projects</h6>
                                            </div>
                                            <div class="ml-auto mt-md-3 mt-lg-0">
                                                <span class="opacity-7 text-muted"><i data-feather="user"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                           
                        </div>-->
                        @endif
                        <!-- ============================================================== -->
                        <!-- End Container fluid  -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- footer -->
                        <!-- ============================================================== -->
                        @if (Str::length(Auth::guard('baak')->user()) > 0)
                        <footer class="footer text-center text-muted">
                            <a href="https://wrappixel.com">haidar</a>.
                        </footer>
                        @elseif (Str::length(Auth::guard('dosen')->user()) > 0)
                        <footer class="footer text-center text-muted">
                            All Rights Reserved by Adminmart. Designed and Developed by <a
                            href="https://wrappixel.com">WrapPixel</a>.
                        </footer>
                        @elseif (Str::length(Auth::guard('mahasiswa')->user()) > 0)
                        <footer class="footer text-center text-muted">
                            All Rights Reserved by Adminmart. Designed and Developed by <a
                            href="https://wrappixel.com">WrapPixel</a>.
                        </footer>
                        @endif

                        <!-- ============================================================== -->
                        <!-- End footer -->
                        <!-- ============================================================== -->
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Page wrapper  -->
                    <!-- ============================================================== -->
                </div>
                <!-- ============================================================== -->
                <!-- End Wrapper -->
                <!-- ============================================================== -->
                <!-- End Wrapper -->
                <!-- ============================================================== -->
                <!-- All Jquery -->
                <!-- ============================================================== -->
                <script src="{{asset('layout2/assets/libs/jquery/dist/jquery.min.js')}}"></script>
                <script src="{{asset('layout2/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
                <script src="{{asset('layout2/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
                <!-- apps -->
                <!-- apps -->
                <script src="{{asset('layout2/dist/js/app-style-switcher.js')}}"></script>
                <script src="{{asset('layout2/dist/js/feather.min.js')}}"></script>
                <script src="{{asset('layout2/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
                <script src="{{asset('layout2/dist/js/sidebarmenu.js')}}"></script>
                <!--Custom JavaScript -->
                <script src="{{asset('layout2/dist/js/custom.min.js')}}"></script>
                <!--This page JavaScript -->
                <script src="{{asset('layout2/assets/extra-libs/c3/d3.min.js')}}"></script>
                <script src="{{asset('layout2/assets/extra-libs/c3/c3.min.js')}}"></script>
                <script src="{{asset('layout2/assets/libs/chartist/dist/chartist.min.js')}}"></script>
                <script src="{{asset('layout2/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
                <script src="{{asset('layout2/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js')}}"></script>
                <script src="{{asset('layout2/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js')}}"></script>
                <script src="{{asset('layout2/dist/js/pages/dashboards/dashboard1.min.js')}}"></script>
                <script type="text/javascript" src="{{asset('layout2/sweetalert/sweetalert2.all.min.js')}}"></script>
                <script src="{{asset('layout2/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
                <script src="{{asset('layout2/dist/js/pages/datatable/datatable-basic.init.js')}}"></script>

                <script type="text/javascript">
                  $(".btn1").click(function(e){
                     e.preventDefault();
                     var hapus = $(this).attr('href');
                     Swal.fire({
                      title: 'Yakin ?',
                      text: "{{Auth::guard('mahasiswa')->user()->name}} Kamu Akan Keluar",
                      icon: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#00cc00',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Ya'
                  }).then((result) => {
                      if (result.isConfirmed) {
                        window.location = hapus;

                    }
                })
              })
          </script>
          @include('sweetalert::alert')
      </body>

      </html>