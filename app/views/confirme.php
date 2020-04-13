<!DOCTYPE html>
<html>

<!-- Mirrored from thememakker.com/templates/swift/hospital/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Apr 2018 09:43:05 GMT -->
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>:: Dwaya - <?= $data['page'] ?> ::</title>
<link href="/data/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
<link rel="icon" href="/data/favicon.ico" type="image/x-icon">
<!-- Custom Css -->
<link href="/data/assets/css/main.css" rel="stylesheet">
<link href="/data/assets/css/login.css" rel="stylesheet">

<!-- Swift Themes. You can choose a theme from css/themes instead of get all themes -->
<link href="/data/assets/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="login-page authentication">
    <nav class="navbar claerHeader" style="background: rgba(0,0,0,0.35);height: 60px;">
    <div class="col-12" >
        <div class="navbar-header"> <a class="navbar-brand" href="/">Dwaya Site</a> </div>
        <ul class="nav navbar-nav navbar-right">
            <!-- Notifications -->
            <li class="btn btn-raised bg-green" style="margin-top:-10px;"> <a href="/login" role="button"><i class="zmdi zmdi-sign-in"></i> Login </a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="card-top"></div>
    <div class="card">
        <h1 class="title"><span>Dwaya Site</span>Active Account</h1>
                <?php   switch($data['type']){
                   case 'accept': 
                        echo   '<div class="alert bg-green alert-dismissible" role="alert">'. $data['msg'].'</div>';
                    break; 
                     case 'recheck':
                           echo '<div class="alert bg-teal alert-dismissible" role="alert">'. $data['msg'].'</div>';
                    break;    
                    case 'errorEmail': 
                           echo '<div class="alert bg-red alert-dismissible" role="alert">'.$data['msg'] .'</div>';
                       break;  
                       case 'check': 
                            echo '<div class="alert bg-red alert-dismissible" role="alert">'.$data['msg'] .'</div>';
                     break;  } ?>
        <div class="col-md-12">
            <form id="sign_in" method="POST">

                <?php if($data['type'] == 'errorEmail'): ?>
                    <div class="input-group"> <span class="input-group-addon"> <i class="zmdi zmdi-email"></i> </span>
                            <div class="form-line">
                                <input class="form-control" name="email" placeholder="Email" required="" autofocus="" type="email">
                            </div>
                    </div>
                <?php   endif; ?>
                              
                <div class="row">                    
                    <div class="col-sm-12 text-center">
                        <a href="/login" class="btn btn-raised waves-effect g-bg-cyan">Sign In!</a>
                    </div>
                   
                </div>
            </form>
        </div>
    </div>    
</div>

<div class="theme-bg"></div>
<!-- Jquery Core Js --> 
<script src="/data/assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="/data/assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="/data/assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
</body>

<!-- Mirrored from thememakker.com/templates/swift/hospital/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Apr 2018 09:43:05 GMT -->
</html>