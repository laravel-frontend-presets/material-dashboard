<<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Extra details for Live View on GitHub Pages -->
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/material-dashboard-laravel" />


    <!--  Social tags      -->
    <meta name="keywords" content="creative tim, html dashboard, laravel, html css dashboard laravel, web dashboard, bootstrap 4 dashboard laravel, bootstrap 4, css3 dashboard, bootstrap 4 admin laravel, material ui dashboard bootstrap 4 laravel, frontend, responsive bootstrap 4 dashboard, material design, material laravel bootstrap 4 dashboard">
    <meta name="description" content="Material Dashboard Laravel is a Free Material Bootstrap Admin Preset for Laravel with a fresh, new design inspired by Google's Material Design.">


    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Material Dashboard Laravel by Creative Tim">
    <meta itemprop="description" content="Material Dashboard Laravel is a Free Material Bootstrap Admin Preset for Laravel with a fresh, new design inspired by Google's Material Design.">

    <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/154/opt_md_laravel_thumbnail.jpg">


    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Material Dashboard Laravel by Creative Tim">

    <meta name="twitter:description" content="Material Dashboard Laravel is a Free Material Bootstrap Admin Preset for Laravel with a fresh, new design inspired by Google's Material Design.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/154/opt_md_laravel_thumbnail.jpg">


    <!-- Open Graph data -->
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Material Dashboard Laravel by Creative Tim" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://material-dashboard-laravel.creative-tim.com/" />
    <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/154/opt_md_laravel_thumbnail.jpg"/>
    <meta property="og:description" content="Material Dashboard Laravel is a Free Material Bootstrap Admin Preset for Laravel with a fresh, new design inspired by Google's Material Design." />
    <meta property="og:site_name" content="Creative Tim" />
    
    <title>{{ __('Material Dashboard Laravel - Free Frontend Preset for Laravel') }}</title>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('material') }}/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('material') }}/img/favicon.png">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{ asset('material') }}/css/material-dashboard.css?v=2.1.3" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('material') }}/demo/demo.css" rel="stylesheet" />
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-NKDMSK6');</script>
      <!-- End Google Tag Manager -->

    </head>
  <body class="clickup-chrome-ext_installed">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              <input type="hidden" name="_token" value="NKN81BvuQSzEbJlULUVrTDRewUlcAIJhPbOwli18">            </form>
          <div class="wrapper ">
            <div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
              <!--
                  Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
            
                  Tip 2: you can also add an image using data-image tag
              -->
              <div class="logo">
                <a href="https://creative-tim.com/" class="simple-text logo-normal">
                  {{ __('Creative Tim') }}
                </a>
              </div>
              <div class="sidebar-wrapper">
                <ul class="nav">
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                      <i class="material-icons">dashboard</i>
                        <p>{{ __('Dashboard') }}</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
                      <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
                      <p>{{ __('Laravel Examples') }}
                        <b class="caret"></b>
                      </p>
                    </a>
                    <div class="collapse show" id="laravelExample">
                      <ul class="nav">
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('profile.edit') }}">
                            <span class="sidebar-mini"> UP </span>
                            <span class="sidebar-normal">{{ __('User profile') }} </span>
                          </a>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link" href="{{ route('user.index') }}">
                            <span class="sidebar-mini"> UM </span>
                            <span class="sidebar-normal"> {{ __('User Management') }} </span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('table') }}">
                      <i class="material-icons">content_paste</i>
                        <p>{{ __('Table List') }}</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('typography') }}">
                      <i class="material-icons">library_books</i>
                        <p>{{ __('Typography') }}</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('icons') }}">
                      <i class="material-icons">bubble_chart</i>
                      <p>{{ __('Icons') }}</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('map') }}">
                      <i class="material-icons">location_ons</i>
                        <p>{{ __('Maps') }}</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('notifications') }}">
                      <i class="material-icons">notifications</i>
                      <p>{{ __('Notifications') }}</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('language') }}">
                      <i class="material-icons">language</i>
                      <p>{{ __('RTL Support') }}</p>
                    </a>
                  </li>
                  <li class="nav-item active-pro{{ $activePage == 'upgrade' ? ' active' : '' }}">
                    <a class="nav-link text-white bg-danger" href="{{ route('upgrade') }}">
                      <i class="material-icons text-white">unarchive</i>
                      <p>{{ __('Upgrade to PRO') }}</p>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
<div class="main-panel">
  <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
<div class="container-fluid">
  <div class="navbar-wrapper">
    <a class="navbar-brand" href="#">User Management</a>
  </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
    
  <span class="sr-only">Toggle navigation</span>
  <span class="navbar-toggler-icon icon-bar"></span>
  <span class="navbar-toggler-icon icon-bar"></span>
  <span class="navbar-toggler-icon icon-bar"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end">
    <form class="navbar-form">
      <span class="bmd-form-group"><div class="input-group no-border">
      <input type="text" value="" class="form-control" placeholder="Search...">
      <button type="submit" class="btn btn-white btn-round btn-just-icon">
        <i class="material-icons">search</i>
        <div class="ripple-container"></div>
      </button>
      </div></span>
    </form>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
          <p class="d-lg-none d-md-block">
            Stats
          </p>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="material-icons">notifications</i>
          <span class="notification">5</span>
          <p class="d-lg-none d-md-block">
            Some Actions
          </p>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Mike John responded to your email</a>
          <a class="dropdown-item" href="#">You have 5 new tasks</a>
          <a class="dropdown-item" href="#">You're now friend with Andrew</a>
          <a class="dropdown-item" href="#">Another Notification</a>
          <a class="dropdown-item" href="#">Another One</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="material-icons">person</i>
          <p class="d-lg-none d-md-block">
            Account
          </p>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
          <a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a>
          <a class="dropdown-item" href="#">Settings</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log out</a>
        </div>
      </li>
    </ul>
  </div>
</div>
</nav>

    <div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Users</h4>
              <p class="card-category"> Here you can manage users</p>
            </div>
            <div class="card-body">
                              <div class="row">
                <div class="col-12 text-right">
                  <a href="#" class="btn btn-sm btn-primary">Add user</a>
                </div>
              </div>
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <tr><th>
                        Name
                    </th>
                    <th>
                      Email
                    </th>
                    <th>
                      Creation date
                    </th>
                    <th class="text-right">
                      Actions
                    </th>
                  </tr></thead>
                  <tbody>
                                            <tr>
                        <td>
                          Admin Admin
                        </td>
                        <td>
                          admin@material.com
                        </td>
                        <td>
                          2020-02-24
                        </td>
                        <td class="td-actions text-right">
                                                        <a rel="tooltip" class="btn btn-success btn-link" href="#" data-original-title="" title="">
                              <i class="material-icons">edit</i>
                              <div class="ripple-container"></div>
                            </a>
                                                    </td>
                      </tr>
                                        </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="alert alert-danger">
            <span style="font-size:18px;">
              <b> </b> This is a PRO feature!</span>
          </div>
      </div>
    </div>
  </div>
</div>
  <footer class="footer">
<div class="container-fluid">
  <nav class="float-left">
    <ul>
      <li>
        <a href="https://www.creative-tim.com">
            Creative Tim
        </a>
      </li>
      <li>
        <a href="https://creative-tim.com/presentation">
            About Us
        </a>
      </li>
      <li>
        <a href="http://blog.creative-tim.com">
            Blog
        </a>
      </li>
      <li>
        <a href="https://www.creative-tim.com/license">
            Licenses
        </a>
      </li>
    </ul>
  </nav>
  <div class="copyright float-right">
    ©
    <script>
      document.write(new Date().getFullYear())
    </script>, made with <i class="material-icons">favorite</i> by
    <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> and <a href="https://www.updivision.com" target="_blank">UPDIVISION</a> for a better web.
  </div>
</div>
</footer>
</div>
</div>
                      
      <div class="fixed-plugin">
        <div class="dropdown show-dropdown">
          <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
          </a>
          <ul class="dropdown-menu">
            <li class="header-title"> Sidebar Filters</li>
            <li class="adjustments-line">
              <a href="javascript:void(0)" class="switch-trigger active-color">
                <div class="badge-colors ml-auto mr-auto">
                  <span class="badge filter badge-purple" data-color="purple"></span>
                  <span class="badge filter badge-azure" data-color="azure"></span>
                  <span class="badge filter badge-green" data-color="green"></span>
                  <span class="badge filter badge-warning active" data-color="orange"></span>
                  <span class="badge filter badge-danger" data-color="danger"></span>
                  <span class="badge filter badge-rose" data-color="rose"></span>
                </div>
                <div class="clearfix"></div>
              </a>
            </li>
            <li class="header-title">Images</li>
            <li class="active">
              <a class="img-holder switch-trigger" href="javascript:void(0)">
                <img src="{{ asset('material') }}/img/sidebar-1.jpg" alt="">
              </a>
            </li>
            <li>
              <a class="img-holder switch-trigger" href="javascript:void(0)">
                <img src="{{ asset('material') }}/img/sidebar-2.jpg" alt="">
              </a>
            </li>
            <li>
              <a class="img-holder switch-trigger" href="javascript:void(0)">
                <img src="{{ asset('material') }}/img/sidebar-3.jpg" alt="">
              </a>
            </li>
            <li>
              <a class="img-holder switch-trigger" href="javascript:void(0)">
                <img src="{{ asset('material') }}/img/sidebar-4.jpg" alt="">
              </a>
            </li>
            <li class="button-container">
              <a href="https://www.creative-tim.com/product/material-dashboard-laravel" target="_blank" class="btn btn-primary btn-block">Free Download</a>
            </li>
            <!-- <li class="header-title">Want more components?</li>
                <li class="button-container">
                    <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-warning btn-block">
                      Get the pro version
                    </a>
                </li> -->
            <li class="button-container">
              <a href="https://material-dashboard-laravel.creative-tim.com/docs/getting-started/laravel-setup.html" target="_blank" class="btn btn-default btn-block">
                View Documentation
              </a>
            </li>
            <li class="button-container">
              <a href="https://www.creative-tim.com/product/material-dashboard-pro-laravel" target="_blank" class="btn btn-danger btn-block btn-round">
                Upgrade to PRO
              </a>
            </li>
            <li class="button-container github-star">
              <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard-laravel" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
            </li>
            <li class="header-title">Thank you for 95 shares!</li>
            <li class="button-container text-center">
              <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> · 45</button>
              <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> · 50</button>
              <br>
              <br>
            </li>
          </ul>
        </div>
      </div>
        <!--   Core JS Files   -->
        <script src="{{ asset('material') }}/js/core/jquery.min.js"></script>
        <script src="{{ asset('material') }}/js/core/popper.min.js"></script>
        <script src="{{ asset('material') }}/js/core/bootstrap-material-design.min.js"></script>
        <script src="{{ asset('material') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
        <!-- Plugin for the momentJs  -->
        <script src="{{ asset('material') }}/js/plugins/moment.min.js"></script>
        <!--  Plugin for Sweet Alert -->
        <script src="{{ asset('material') }}/js/plugins/sweetalert2.js"></script>
        <!-- Forms Validations Plugin -->
        <script src="{{ asset('material') }}/js/plugins/jquery.validate.min.js"></script>
        <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
        <script src="{{ asset('material') }}/js/plugins/jquery.bootstrap-wizard.js"></script>
        <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
        <script src="{{ asset('material') }}/js/plugins/bootstrap-selectpicker.js"></script>
        <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
        <script src="{{ asset('material') }}/js/plugins/bootstrap-datetimepicker.min.js"></script>
        <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
        <script src="{{ asset('material') }}/js/plugins/jquery.dataTables.min.js"></script>
        <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
        <script src="{{ asset('material') }}/js/plugins/bootstrap-tagsinput.js"></script>
        <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
        <script src="{{ asset('material') }}/js/plugins/jasny-bootstrap.min.js"></script>
        <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
        <script src="{{ asset('material') }}/js/plugins/fullcalendar.min.js"></script>
        <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
        <script src="{{ asset('material') }}/js/plugins/jquery-jvectormap.js"></script>
        <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
        <script src="{{ asset('material') }}/js/plugins/nouislider.min.js"></script>
        <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
        <!-- Library for adding dinamically elements -->
        <script src="{{ asset('material') }}/js/plugins/arrive.min.js"></script>
        <!--  Google Maps Plugin    -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE'"></script>
        <!-- Chartist JS -->
        <script src="{{ asset('material') }}/js/plugins/chartist.min.js"></script>
        <!--  Notifications Plugin    -->
        <script src="{{ asset('material') }}/js/plugins/bootstrap-notify.js"></script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="{{ asset('material') }}/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
        <!-- Material Dashboard DEMO methods, don't include it in your project! -->
        <script src="{{ asset('material') }}/demo/demo.js"></script>
        <script src="{{ asset('material') }}/js/settings.js"></script>
        <script>
          // Facebook Pixel Code Don't Delete
            ! function(f, b, e, v, n, t, s) {
              if (f.fbq) return;
              n = f.fbq = function() {
                n.callMethod ?
                  n.callMethod.apply(n, arguments) : n.queue.push(arguments)
              };
              if (!f._fbq) f._fbq = n;
              n.push = n;
              n.loaded = !0;
              n.version = '2.0';
              n.queue = [];
              t = b.createElement(e);
              t.async = !0;
              t.src = v;
              s = b.getElementsByTagName(e)[0];
              s.parentNode.insertBefore(t, s)
            }(window,
              document, 'script', '//connect.facebook.net/en_US/fbevents.js');
            try {
              fbq('init', '111649226022273');
              fbq('track', "PageView");
            } catch (err) {
              console.log('Facebook Track Error:', err);
            }
        </script>
        <noscript>
          <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />
        </noscript>
        @stack('js')
    </body>
</html>
