<!DOCTYPE html>
<html lang="zxx" class="js">
<!-- Mirrored from dashlite.themenio.com/demo4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Jan 2021 11:53:19 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>CLAM Media Department Portal.</title>
    <link rel="stylesheet" href="assets/css/dashlite3601.css">
    <link id="skin-default" rel="stylesheet" href="assets/css/bootstrap.css">
    <link id="skin-default" rel="stylesheet" href="assets/css/select2.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('styles')
    <style type="text/css" media="screen">
        .nk-header.is-light:not([class*=bg-]) {
          background: #2d3092;
        }

        .nk-menu-main .nk-menu-link {
          color: #ffffff;
          padding-left: 24px;
        }

        h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
            margin-bottom: .5rem;
            font-family: Nunito,sans-serif;
            font-weight: 700;
            line-height: 1.5;
            color: #2d3092;
        }
    </style>
</head>

<body class="nk-body bg-white npc-default has-aside ">
    <div class="nk-app-root">
        <div class="nk-main ">
            <div class="nk-wrap ">
                <div class="nk-header nk-header-fixed is-light  nk-header-fixed">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
                    <div class="container-lg wide-xl">
                        <div class="nk-header-wrap">
                            <div class="nk-header-brand"><a href="{{ route('welcome') }}" class="logo-link"><img
                                        class="logo-light logo-img" src="images/logo.png"
                                        srcset="/demo4/images/logo2x.png 2x" alt="logo"><img class="logo-dark logo-img"
                                        src="images/logo-dark.png" srcset="/demo4/images/logo-dark2x.png 2x"
                                        alt="logo-dark"></a></div>
                            <div class="nk-header-menu">
                                <ul class="nk-menu nk-menu-main">
                                    <li class="nk-menu-item"><a href="{{ route('welcome') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Home</span></a></li>
                                    <li class="nk-menu-item"><a href="https://prayerparliament.com" target="_blank"
                                            class="nk-menu-link"><span
                                                class="nk-menu-text">Prayer Parliament</span></a>
                                    </li>
                                    <li class="nk-menu-item"><a href="https://clamgo.org/" target="_blank" class="nk-menu-link"><span
                                                class="nk-menu-text">CLAM Website</span></a></li>
                                    <li class="nk-menu-item"><a href="support-kb.html" class="nk-menu-link"><span
                                                class="nk-menu-text">Support</span></a></li>
                                    <li class="nk-menu-item"><a href="pages/contact.html" class="nk-menu-link"><span
                                                class="nk-menu-text">Contact</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-content ">
                    <div class="container wide-xl">
                        <div class="nk-content-inner">
                            <div class="nk-aside" data-content="sideNav" data-toggle-overlay="true"
                                data-toggle-screen="lg" data-toggle-body="true">
                                <div class="nk-sidebar-menu" data-simplebar>
                                    <ul class="nk-menu nk-menu-main">
                                        <li class="nk-menu-item"><a href="{{ route('welcome') }}" class="nk-menu-link"><span
                                                    class="nk-menu-text">Home</span></a></li>
                                        <li class="nk-menu-item"><a href="https://prayerparliament.com" target="_blank"
                                                class="nk-menu-link"><span
                                                    class="nk-menu-text">Prayer Parliament</span></a>
                                        </li>
                                        <li class="nk-menu-item"><a href="https://clamgo.org/" target="_blank" class="nk-menu-link"><span
                                                    class="nk-menu-text">CLAM Website</span></a></li>
                                        <li class="nk-menu-item"><a href="support-kb.html" class="nk-menu-link"><span
                                                    class="nk-menu-text">Support</span></a></li>
                                        <li class="nk-menu-item"><a href="pages/contact.html" class="nk-menu-link"><span
                                                    class="nk-menu-text">Contact</span></a></li>
                                    </ul>
                                    <ul class="nk-menu">
                                        <li class="nk-menu-heading">
                                            <h6 class="overline-title text-primary-alt">Departmet</h6>
                                        </li>
                                        <li class="nk-menu-item"><a href="{{ route('welcome') }}" class="nk-menu-link"
                                                ><span class="nk-menu-icon"><em class="icon ni ni-home-alt"></em></span><span
                                                    class="nk-menu-text">Return Home</span></a>
                                        </li>
                                        <li class="nk-menu-item"><a href="{{ route('welcome') }}" class="nk-menu-link"
                                                ><span class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span><span
                                                    class="nk-menu-text">Request Form</span></a>
                                        </li>
                                        <li class="nk-menu-item"><a href="{{ route('registration') }}" class="nk-menu-link"
                                                ><span class="nk-menu-icon"><em class="icon ni ni-file-check"></em></span><span
                                                    class="nk-menu-text">Membership Registration</span></a>
                                        </li>
                                        <li class="nk-menu-item"><a href="{{ route('welcome') }}" class="nk-menu-link"
                                                ><span class="nk-menu-icon"><em class="icon ni ni-users"></em></span><span
                                                    class="nk-menu-text">Media Members</span></a>
                                        </li>
                                        <li class="nk-menu-item"><a href="subscription/index.html" class="nk-menu-link"
                                        ><span class="nk-menu-icon"><em class="icon ni ni-signin"></em></span><span
                                                    class="nk-menu-text">Logins</span></a>
                                        </li>
                                        <li class="nk-menu-heading">
                                            <h6 class="overline-title text-primary-alt">Code of Conduct</h6>
                                        </li>
                                        <li class="nk-menu-item"><a href="{{ route('mission') }}" class="nk-menu-link"><span
                                                    class="nk-menu-icon"><em class="icon ni ni-tile-thumb"></em></span><span
                                                    class="nk-menu-text"> Mission, vision & values</span></a>
                                        </li>
                                        <li class="nk-menu-item"><a href="{{ route('purpose') }}"
                                                class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-activity-round"></em></span><span
                                                    class="nk-menu-text">Purpose & Scope</span></a>
                                        </li>
                                        <li class="nk-menu-item"><a href="{{ route('definition') }}"
                                                class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-book-fill"></em></span><span
                                                    class="nk-menu-text">Definations</span></a>
                                        </li>
                                        <li class="nk-menu-item"><a href="{{ route('policy') }}"
                                                class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-bulb"></em></span><span
                                                    class="nk-menu-text">Policy Elements</span></a>
                                        </li>
                                        <li class="nk-menu-item"><a href="{{ route('ethics') }}"
                                                class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-tranx-fill"></em></span><span
                                                    class="nk-menu-text">Ethics & Code of Conduct</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="nk-aside-close"><a href="#" class="toggle" data-target="sideNav"><em
                                            class="icon ni ni-cross"></em></a></div>
                            </div>
                            <div class="nk-content-body">
                                
                                @yield('admin_content')
                                
                                <div class="nk-footer">
                                    <div class="container wide-xl">
                                        <div class="nk-footer-wrap g-2">
                                            <div class="nk-footer-copyright"> &copy; 2020 Christ Livingspring Apostolic Ministry (CLAM). Designed by <a
                                                    href="#">CLAM Media Department</a></div>
                                            <div class="nk-footer-links">
                                                <ul class="nav nav-sm">
                                                    <li class="nav-item"><a class="nav-link" href="#">Terms</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="#">Privacy</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- <script src="assets/js/bundle3601.js?ver=2.2.0"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/scripts3601.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/jqueryvalidate.min.js"></script>
    <script src="assets/js/jquery-validate-additional.min.js"></script>
    <script src="assets/js/demo-settings3601.js"></script>
    <script src="assets/js/charts/gd-default3601.js"></script>
    <script src="assets/js/apps/calendar3601.js"></script>
    <script src="assets/js/apps/chats3601.js"></script>
    <script src="assets/js/apps/file-manager3601.js"></script>
    <script src="assets/js/apps/kanban3601.js"></script>
    <script src="assets/js/apps/messages3601.js"></script>
    <script src="assets/js/editors3601.js"></script>
    <script src="assets/js/example-chart3601.js"></script>
    <script src="assets/js/example-sweetalert3601.js"></script>
    <script src="assets/js/example-toastr3601.js"></script>
    <script src="assets/js/libs/fullcalendar3601.js"></script>
    <script src="assets/js/libs/jkanban3601.js"></script>
    <script src="assets/js/libs/jqvmap3601.js"></script>
    <script src="assets/js/libs/tagify3601.js"></script>
    <script src="assets/js/libs/editors/quill3601.js"></script>
    <script src="assets/js/libs/editors/summernote3601.js"></script>
    <script src="assets/js/libs/editors/tinymce3601.js"></script>
    <script src="assets/js/charts/gd-analytics3601.js"></script>
    <script src="assets/js/charts/gd-default3601.js"></script>

    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.select2').select2();
            $(".validateForm").validate();
        });
    </script>
    @stack('scripts')
</body>

</html>