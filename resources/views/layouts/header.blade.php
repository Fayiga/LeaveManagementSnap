<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Leave Management Application</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>

    <div class="container">
        <div class="row" style="">
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;width: 100%">
                  <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('home') }}" style="font-weight: 700">Leave Management Application</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="#">Create New Staff</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Assign Approver Leave</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Set-up Leave days</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#" class="btn btn-sm btn-info">Apply for leave</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Logout</a>
                        </li>
                      </ul>
                    </div>
                  </div>
            </nav>
            <div class="container">
                @yield('content')
            </div>
        </div>  
    </div><div class="clearfix"></div>   
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>