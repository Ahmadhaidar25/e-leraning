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
    <title>E-learning</title>
    <!-- Custom CSS -->
    <link href="{{asset('layout2/assets/extra-libs/c3/c3.min.css')}}" rel="stylesheet">
    <link href="{{asset('layout2/assets/libs/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('layout2/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{asset('layout2/dist/css/style.min.css')}}" rel="stylesheet">
    <link href="{{asset('layout2/assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">


    <style type="text/css">
        .comments-main{
            background: #FFF;
        }
        .comment time, .comment:hover time,.icon-rocknroll, .like-count {
            -webkit-transition: .25s opacity linear;
            transition: .25s opacity linear;
        }
        .comments-main ul li{
            list-style: none;
        }
        .comments .comment {
            padding: 5px 10px;
            background: #00AF90;
        }
        .comments .comment:hover time{
            opacity: 1;
        }
        .comments .user-img img {
            width: 50px;
            height: 50px;
        }
        .comments .comment h4 {
            display: inline-block;
            font-size: 16px;
        }
        .comments .comment h4 a {
            color: #404040;
            text-decoration: none;
        }
        .comments .comment .icon-rocknroll {
            color: #545454;
            font-size: .85rem;
        }
        .comments .comment .icon-rocknroll:hover {
            opacity: .5;
        }
        .comments .comment time,.comments .comment .like-count,.comments .comment .icon-rocknroll {
            font-size: .75rem;
            opacity: 0;
        }
        .comments .comment time, .comments .comment .like-count {
            font-weight: 300;
        }
        .comments .comment p {
            font-size: 13px;
        }
        .comments .comment p .reply {
            color: #BFBFA8;
            cursor: pointer;
        }
        .comments .comment .active {
            opacity: 1;
        }
        .icon-rocknroll {
            background: none;
            outline: none;
            cursor: pointer;
            margin: 0 .125rem 0 0;
        }
        .comments .comment:hover .icon-rocknroll,.comments .comment:hover .like-count {
            opacity: 1;
        }
        .comment-box-main{
            background: #CA1D5F;
        }
        @media (min-width: 320px) and (max-width: 480px){
            .comments .comment h4 {
                font-size: 12px;
            }
            .comments .comment p{
                font-size: 11px;
            }
            .comment-box-main .send-btn button{
                margin-left: 5px;
            }
        </style>
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
                                   <img src="{{asset('login2/STMIIK.png')}}" class="rounded float-start" alt="..." style="width: 200px;">
                               </b>
                               <!--End Logo icon -->
                               <!-- Logo text -->
                               <span class="logo-text">

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


                                    <li class="sidebar-item">
                                        <a href="{{('input-materi')}}" class="sidebar-link"><span
                                            class="hide-menu">Mulai Mengajar</span></a></li>

                                            <li class="sidebar-item">
                                                <a href="{{url('profil-dosen')}}" class="sidebar-link"><span
                                                    class="hide-menu">Profil Dosen</span></a></li>
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
                                                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Data Materi Kuliah</h3>
                                                <div class="d-flex align-items-center">
                                                    <nav aria-label="breadcrumb">
                                                        <ol class="breadcrumb m-0 p-0">

                                                        </ol>
                                                    </nav>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    @if (count($errors) > 0)


                                    <div class="alert alert-danger alert-block" role="alert">
                                     <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    <button type="button" class="close" data-dismiss="alert">×</button> 
                                </div>
                                @endif
                                <!-- ============================================================== -->
                                <!-- End Bread crumb and right sidebar toggle -->
                                <!-- ============================================================== -->
                                <!-- ============================================================== -->
                                <!-- Container fluid  -->
                                <!-- ============================================================== -->


                                @if (Str::length(Auth::guard('dosen')->user()) > 0)
                                <div class="container">
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah</button>
                                </div>
                                @foreach ($dosen->materi as $x)

                                <div class="container-fluid">
                                 <div class="row mb-2">

                                     <div class="card mb-3 ml-2" style="max-width: 540px;">

                                      <div class="row g-0">
                                        <div class="col-md-4">

                                            <embed src="{{asset('/materi')}}/{{$x->materi}}" type="application/pdf" width="150px" height="200"/>
                                            </div>

                                            <div class="col-md-8">
                                              <div class="card-body">
                                                <div class="btn-group float-right" role="group" aria-label="Basic example">
                                                  <a href="" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#lihat-{{$x->id}}">
                                                    <i class="bi bi-eye"></i></a>

                                                    <a href="{{url('/del-materi')}}/{{$x->id}}" class="btn btn-danger btn2">
                                                        <i class="bi bi-trash"></i></a>

                                                    </div>

                                                    <h5 class="card-title">
                                                        {{$x->judul_materi}}</h5>
                                                        <p class="card-text">{{$x->deskripsi}}</p>
                                                        <br><br>
                                                        <p class="card-text ">
                                                            <small class="text-muted">
                                                                <a href="" data-bs-toggle="modal" data-bs-target="#coment" class="btn btn-primary">&nbsp;<i class="bi bi-chat-dots"></i></a>
                                                            </small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>

                                    @endforeach

                                    @endif


                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Materi</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="{{url('post-materi')}}" method="post" enctype="multipart/form-data">
                                            <div class="modal-body">
                                                @csrf

                                                <div class="input-group mb-3">

                                                    <select class="form-control" 
                                                    name="matkul_id">
                                                        @foreach ($dosen->matkul as $x)
                                <option value="{{$x->id}}">{{$x->matkul}}</option>
                                                        @endforeach
                                                    </select>


                                                </div>

                                                <div class="input-group mb-3">

                                                    <select class="form-control" 
                                                    name="dosen_id">
                                                        @foreach ($dsn as $x)
                                <option value="{{$x->id}}">{{$x->name}}</option>
                                                        @endforeach
                                                    </select>


                                                </div>

                                                  <div class="input-group mb-3">

                                                    <select class="form-control" 
                                                    name="mahasiswa_id">
                                                        @foreach ($mhs as $x)
                                <option value="{{$x->id}}">{{$x->name}}</option>
                                                        @endforeach
                                                    </select>


                                                </div>

                                                

                                                <div class="input-group mb-3">

                                                  <input type="text" class="form-control" name="judul_materi" placeholder="Judul Materi" value="{{old('judul_materi')}}">
                                              </div>

                                             

                                           <div class="input-group mb-3">

                                              <input type="file" class="form-control" name="materi" placeholder="Materi" value="{{old('materi')}}">
                                          </div>

                                           <div class="input-group mb-3">

                                               <textarea class="form-control" name="deskripsi"></textarea>
                                           </div>



                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>



                    @foreach ($dosen->materi as $l)
                    <div class="modal fade" id="lihat-{{$l->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                           <iframe src="{{asset('/materi')}}/{{$l->materi}}" type="application/pdf" width="100%" height="500px"/></iframe>
                       </div>
                   </div>

               </div>
           </div>
       </div>
       @endforeach




   
     <div class="modal fade" id="coment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Komentar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @foreach ($coment as $cm)
                <div class="container">
                    <div class="row mt-5">
                        <div class="col-md-6 offset-md-3 col-sm-6 offset-sm-3 col-12 comments-main pt-4 rounded">
                            <ul class="p-0">
                                <li>
                                    <div class="row comments mb-2">
                                        <div class="col-md-2 col-sm-2 col-3 text-center user-img">
                                            <img id="profile-photo" src="http://nicesnippets.com/demo/man01.png" class="rounded-circle" />
                                        </div>
                                        &nbsp;&nbsp;
                                        <div class="col-md-9 col-sm-9 col-9 comment rounded mb-2">
                                            <h4 class="m-0"><a href="#"></a></h4>

                                            <time class="text-white">{{$cm->created_at}}</time>
                                            
                                            <p class="mb-0 text-white">{{$cm->komentar}}</p>
                                        </div>
                                    </div>
                                </li>



                            </ul>
                        </div>
                    </div>
                </div>
               @endforeach

            </div>
            <form action="{{url('komentar')}}" method="post">
              <div class="modal-footer">
                @csrf
            <textarea class="form-control" name="komentar" id="komentar-kelas" style="display: none;"></textarea>
                 <button type="button" id="btn-komentar" class="btn btn-primary">Komentar</button>
                 <button type="submit" class="btn btn-primary"><i class="bi bi-send"></i></button>
             </div>
         </form>
     </div>
 </div>
</div>


<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
@if (Str::length(Auth::guard('baak')->user()) > 0)
<footer class="footer text-center text-muted">
    <a href="https://wrappixel.com">Ahmad haidar & Alvin Supryan</a>.
</footer>
@elseif (Str::length(Auth::guard('dosen')->user()) > 0)
<footer class="footer text-center text-muted">
   Ahmad haidar & Alvin Supryan 
</footer>
@elseif (Str::length(Auth::guard('mahasiswa')->user()) > 0)
<footer class="footer text-center text-muted">
    Ahmad haidar & Alvin Supryan
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
<script src="{{asset('layout2/dist/js/bootstrap.js')}}"></script>
<script src="{{asset('layout2/cari/search.js')}}"></script>

<script type="text/javascript">
  $(".btn1").click(function(e){
     e.preventDefault();
     var log = $(this).attr('href');
     Swal.fire({
      title: 'Yakin ?',
      text: "{{Auth::guard('dosen')->user()->name}} Kamu Akan Keluar",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#00cc00',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya'
  }).then((result) => {
      if (result.isConfirmed) {
        window.location = log;

    }
})
})

  $(".btn2").click(function(e){
     e.preventDefault();
     var hapus = $(this).attr('href');
     Swal.fire({
      title: 'Yakin ?',
      text: "Kamu Akan Menghapus Data",
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


  $(document).ready(function(){
    $('#btn-komentar').click(function(){
        $('#komentar-kelas').toggle('slide');
    })
})
</script>
@include('sweetalert::alert')
</body>

</html>