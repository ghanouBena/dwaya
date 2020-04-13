<!DOCTYPE html>
<html>

<!-- Mirrored from thememakker.com/templates/swift/hospital/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Apr 2018 09:42:43 GMT -->
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>:: <?= SITE_NAME.' - '.$data['page'] ?> ::</title>
<link href="<?= SITE; ?>data/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
<link rel="icon" href="<?= SITE; ?>data/favicon.ico" type="image/x-icon">
<!-- Custom Css -->
<link href="<?= SITE; ?>data/assets/css/main.css" rel="stylesheet">
<link href="<?= SITE; ?>data/assets/css/login.css" rel="stylesheet">

<!-- Swift Themes. You can choose a theme from css/themes instead of get all themes -->
<link href="<?= SITE; ?>data/assets/css/themes/all-themes.css" rel="stylesheet" />
</head>
<body class="theme-cyan login-page authentication">
<nav class="navbar claerHeader" style="background: rgba(0,0,0,0.35);height: 60px;">
    <div class="col-12" >
        <div class="navbar-header"> <a class="navbar-brand" href="<?= SITE; ?>"><?= SITE_NAME ?></a> </div>
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
        <h1 class="title"><span><?= SITE_NAME ?></span>Login <span class="msg">Sign in to start your session</span></h1>
        <?php if(!empty($data['msg'])): ?>
                <div class="alert bg-red alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                           <?= $data['msg'] ?>
                        </div>
            <?php endif; ?>
        <div class="col-md-12">
            <form id="sign_in" action="/login" method="POST">
                
                <div class="input-group"> <span class="input-group-addon"> <i class="zmdi zmdi-account"></i> </span>
                    <div class="form-line">
                        <input type="text" class="form-control" name="user" placeholder="Username" required autofocus>
                    </div>
                </div>
                <div class="input-group"> <span class="input-group-addon"> <i class="zmdi zmdi-lock"></i> </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="pass" placeholder="Password" required>
                    </div>
                </div>
                <div>
                    <div class="">
                        <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                        <label for="rememberme">Remember Me</label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-raised waves-effect g-bg-cyan" name="login" value="login">SIGN IN</button>
                        <a href="/register" class="btn btn-raised waves-effect">SIGN UP</a>
                    </div>
                    <div class="text-center"> <a href="#">Forgot Password?</a></div>
                </div>
            </form>
        </div>
    </div>    
</div>
<div class="theme-bg"></div>

<!-- Jquery Core Js --> 
<script src="<?= SITE; ?>data/assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="<?= SITE; ?>data/assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

<script src="<?= SITE; ?>data/assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
</body>

<!-- Mirrored from thememakker.com/templates/swift/hospital/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Apr 2018 09:42:44 GMT -->
</html>