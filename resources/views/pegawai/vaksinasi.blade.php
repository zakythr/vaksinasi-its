<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="DashForge">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="http://themepixels.me/dashforge/img/dashforge-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/dashforge">
    <meta property="og:title" content="DashForge">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="http://themepixels.me/dashforge/img/dashforge-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/dashforge/img/dashforge-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="ThemePixels">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/img/favicon.png')}}">

    <title>myITS Vaksin</title>

    <!-- vendor css -->
    <link href="{{ asset('/lib/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{ asset('/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('/lib/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('/lib/prismjs/themes/prism-vs.css')}}" rel="stylesheet">
    <link href="{{ asset('/lib/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- DashForge CSS -->
    <link rel="stylesheet" href="{{ asset('/css/dashforge.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/dashforge.customs.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/skin.light.css')}}">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
  </head>
  <body>

    <aside class="aside aside-fixed">
                  <div class="aside-header">
                <a href="../../index.html" class="tx-montserrat tx-semibold tx-18 aside-logo">myITS Vaksin</a>
                <a href="" class="aside-menu-link">
                    <i data-feather="menu"></i>
                    <i data-feather="x"></i>
                </a>
            </div>
            <div class="aside-body">
                <ul class="nav nav-aside">
                    <li class="nav-item"><a href="../beranda" class="nav-link"><i data-feather="home"></i> <span>Beranda</span></a></li>
                    <li class="nav-label mg-t-15">Pegawai</li>
                    <li class="nav-item"><a href="../pegawai/riwayat.html" class="nav-link"><i data-feather="clock"></i> <span>Riwayat</span></a></li>
                    <li class="nav-item"><a href="../pegawai/vaksinasi.html" class="nav-link"><i data-feather="calendar"></i> <span>Jadwal vaksinasi</span></a></li>
                </ul>
            </div>
    </aside>

    <div class="content ht-100v pd-0" style="position: relative">
            <div class="content-header align-items-center justify-content-start pos-fixed wd-100p z-index-10">
          <div>
              <a href="../../index.html" class="tx-montserrat tx-semibold tx-18 d-lg-none">myITS Vaksin</a>
          </div>
          <nav class="nav r-25 pos-fixed z-index-10">
              <div class="dropdown dropdown-profile allow-focus">
                <a href="" class="dropdown-link" data-toggle="dropdown" data-display="static" aria-expanded="false">
                  <div class="avatar avatar-sm"><img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" class="rounded-circle" alt=""></div>
                </a>
                <div class="dropdown-menu dropdown-menu-right allow-focus">
                  <h5 class="tx-medium tx-montserrat mg-b-5">Nama</h5>
                  <p class="mg-b-25 tx-13 tx-color-03">NRP/NIP</p>
                  <a href="" class="dropdown-item" data-toggle="modal" data-target="#chgRoleUser" data-animation="effect-scale">
                    <i data-feather="users"></i>Ganti hak akses
                  </a>
                  <a href="" class="dropdown-item  ht-30"><i data-feather="home"></i>myITS SSO</a>
                  <a href="../dashboard/login-mhs.html" class="dropdown-item ht-30"><i data-feather="log-out"></i>Keluar</a>
                </div>
              </div>
          </nav>
      </div>

      <div class="modal fade effect-scale" id="chgRoleUser" tabindex="-1" role="dialog" aria-labelledby="chgRoleUserLabel" aria-modal="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content bg-white">
            <div class="modal-body">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
              <h5 class="tx-montserrat tx-medium" id="chgRoleUserLabel">Hak Akses</h5>
              <p class="tx-color-02">Hak akses Anda saat ini: <b>User </b>.</p>
              <select class="form-control" id="menu">
                <option selected="selected">Select One</option>
                <option value="{{ url('/jadwalvaksinpegawai') }}">Pegawai</option>
                <option value="{{ url('/jadwalvaksinadmin') }}">Admin</option>
              </select>
              <div class="mg-t-20 d-flex justify-content-end">
                <button type="button" class="btn btn-white tx-montserrat tx-semibold" data-dismiss="modal">Batal</button>
                <input class="btn btn-its tx-montserrat tx-semibold mg-l-5 mg-lg-l-10" type="button" id="goBtn" value="Ganti">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="content-body ht-100p pd-t-80">
        <div class="container pd-x-0" id="content">

          <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
              <nav aria-label="breadcrumb" class="d-none d-lg-block">
                <ol class="breadcrumb breadcrumb-style2 mg-b-10">
                  <li class="breadcrumb-item"><a href="../dashboard">Beranda</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Jadwal Vaksinasi</li>
                </ol>
              </nav>
              <h4 class="mg-b-0 tx-montserrat tx-medium text-truncate">
                Jadwal Vaksinasi
              </h4>
            </div>
            <div class="d-lg-none mg-t-10">
            </div>
            <div>
            </div>
          </div>

          <div class="row row-xs">
            <div class="col-sm-12 col-lg-12">
              <div class="card">
                <div class="card-body card-list">
                  <div class="card-list-item">
                    <a href="vaksinasi-detail.html">
                      <div class="d-flex justify-content-between align-items-center sc-link">
                        <div class="media">
                          <div class="wd-40 ht-40 bg-its-icon tx-color-its mg-r-15 mg-md-r-15 d-flex align-items-center justify-content-center rounded-its"><i data-feather="calendar"></i></div>
                          <div class="media-body align-self-center">
                            <p class="tx-montserrat tx-semibold mg-b-0 tx-color-02">Sabtu, 03 Apr 2021</p> 
                            <p class="tx-color-03 tx-13">07.00 - 12.00</p>
                            <span class="tx-13"><span class="tx-info"><i class="far fa-play-circle mg-r-5"></i>Pendaftaran dibuka</span></span>
                          </div>
                        </div>
                        <div class="btn btn-icon btn-its-icon btn-hover">
                          <i data-feather="chevron-right"></i>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="card-list-item">
                    <a href="#">
                      <div class="d-flex justify-content-between align-items-center sc-link">
                        <div class="media">
                          <div class="wd-40 ht-40 bg-its-icon tx-color-its mg-r-15 mg-md-r-15 d-flex align-items-center justify-content-center rounded-its"><i data-feather="calendar"></i></div>
                          <div class="media-body align-self-center">
                            <p class="tx-montserrat tx-semibold mg-b-0 tx-color-02">Sabtu, 24 Apr 2021</p> 
                            <p class="tx-color-03 tx-13">08.00 - 15.00</p>
                            <span class="tx-13"><span class="tx-gray-700"><i class="far fa-circle mg-r-5"></i>Pendaftaran belum dibuka</span></span>
                          </div>
                        </div>
                        <div class="btn btn-icon btn-its-icon btn-hover">
                          <i data-feather="chevron-right"></i>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="card-list-item">
                    <a href="#">
                      <div class="d-flex justify-content-between align-items-center sc-link">
                        <div class="media">
                          <div class="wd-40 ht-40 bg-its-icon tx-color-its mg-r-15 mg-md-r-15 d-flex align-items-center justify-content-center rounded-its"><i data-feather="calendar"></i></div>
                          <div class="media-body align-self-center">
                            <p class="tx-montserrat tx-semibold mg-b-0 tx-color-02">Sabtu, 06 Mar 2021</p> 
                            <p class="tx-color-03 tx-13">12.00 - 15.00</p>
                            <span class="tx-13"><span class="tx-danger"><i class="far fa-times-circle mg-r-5"></i>Pendaftaran ditutup</span></span>
                          </div>
                        </div>
                        <div class="btn btn-icon btn-its-icon btn-hover">
                          <i data-feather="chevron-right"></i>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>

          </div><!-- row -->
        </div><!-- container -->
      </div>
    </div>
    
    <script src="../../lib/jquery/jquery.min.js"></script>
    <script src="../../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../lib/feather-icons/feather.min.js"></script>
    <script src="../../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../../lib/js-cookie/js.cookie.js"></script>
    <script src="../../js/dashforge.js"></script>
    <script src="../../js/dashforge.aside.js"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

    <!-- Script base -->
    <script>
        //canvas menu
        $(function(){
            'use strict'

            $('.off-canvas-menu').on('click', function(e){
                e.preventDefault();
                var target = $(this).attr('href');
                $(target).addClass('show');
            });

            $('.off-canvas .close').on('click', function(e){
                e.preventDefault();
                $(this).closest('.off-canvas').removeClass('show');
            })

            $(document).on('click touchstart', function(e){
                e.stopPropagation();
                if(!$(e.target).closest('.off-canvas-menu').length) {
                var offCanvas = $(e.target).closest('.off-canvas').length;
                if(!offCanvas) {
                    $('.off-canvas.show').removeClass('show');
                }
                }
            });
        });

        //tooltip
        $('[data-toggle="tooltip"]').tooltip();

        //allow focus menu
        $(document).on('click', '.allow-focus', function (e) {
            e.stopPropagation();
        });
        
        //file name input
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });

        //script sementara untuk beralih role
        var goBtn = document.getElementById("goBtn");
        var menu = document.getElementById("menu");

        goBtn.onclick = function() {
            window.location = menu.value;
        }
    </script>

  </body>
</html>
