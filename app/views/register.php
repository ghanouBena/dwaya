<!DOCTYPE html>
<html>

<!-- Mirrored from thememakker.com/templates/swift/hospital/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Apr 2018 09:43:05 GMT -->
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
<body class="theme-cyan login-page authentication">
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
        <h1 class="title"><span>Dwaya Site</span>Register <span class="msg">Register a new membership</span>
            <?php if(!empty($data['msg'])): ?>
                <div class="alert bg-green alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                           <?= $data['msg'] ?>
                        </div>
            <?php endif; ?>
        </h1>
        <div class="col-md-12">
            <form id="sign_up" action="/register" class="col-xs-12" method="POST">            
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="zmdi zmdi-account"></i>
                </span>
                <div class="form-line">
                    <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus>
                </div>
            </div>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="zmdi zmdi-email"></i>
                </span>
                <div class="form-line">
                    <input type="email" class="form-control" name="email" placeholder="Email Address" required="">
                </div>
            </div>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="zmdi zmdi-lock"></i>
                </span>
                <div class="form-line">
                    <input type="password" id="pass" class="form-control" name="password" minlength="6" placeholder="Password" required="">
                </div>
            </div>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="zmdi zmdi-lock"></i>
                </span>
                <div class="form-line">
                    <input type="password" id="passcf" class="form-control" name="confirm"  aria-required="true" aria-invalid="false" minlength="6" placeholder="Confirm Password" required="">
                </div>
                
            </div>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="zmdi zmdi-account"></i>
                </span>
                <div class="form-line">
                    <select  class="form-control" name="niveau"  required="">
                        <option value="0">Patient</option>
                        <option value="1">Doctor</option>
                        <option value="2">Pharmacie</option>
                    </select>
                </div>
                
            </div>
            <div class="form-group">
                <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink" required="">
                <label for="terms">I read and agree to the <a href="javascript:void(0);">terms of usage</a>.</label>
            </div>
            <div class="text-center">
                <button  type="submit" name="register" value="register" class="btn btn-raised g-bg-cyan waves-effect">SIGN UP</button>
            </div>
            <div class="m-t-10 m-b--5 align-center">
                <a href="/login">You already have a membership?</a>
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
<script>
    $(function() {
        $('#sign_up').submit(function () {
            var pass   = $("#pass").val();
            var passcf = $("#passcf").val();
            if(pass == passcf){
                return true;
            }else{
               alert("passwords doesn't matched");
            }
            return false;
        });

    });
</script>
</body>

<!-- Mirrored from thememakker.com/templates/swift/hospital/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Apr 2018 09:43:05 GMT -->
</html>