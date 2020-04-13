<!DOCTYPE html>
<html>

<!-- Mirrored from thememakker.com/templates/swift/hospital/mail-compose.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Apr 2018 09:43:18 GMT -->
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>:: Swift - Hospital Admin ::</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link href="/data/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
<!-- Custom Css -->
<link href="/data/assets/css/main.css" rel="stylesheet">
<!-- Swift Themes. You can choose a theme from css/themes instead of get all themes -->
<link href="/data/assets/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-cyan">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-cyan">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader --> 
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- #Float icon -->
<ul id="f-menu" class="mfb-component--br mfb-zoomin" data-mfb-toggle="hover">
  <li class="mfb-component__wrap">
    <a href="#" class="mfb-component__button--main g-bg-cyan">
      <i class="mfb-component__main-icon--resting zmdi zmdi-plus"></i>
      <i class="mfb-component__main-icon--active zmdi zmdi-close"></i>
    </a>
    <ul class="mfb-component__list">
      <li>
        <a href="doctor-schedule.html" data-mfb-label="Doctor Schedule" class="mfb-component__button--child bg-blue">
          <i class="zmdi zmdi-calendar mfb-component__child-icon"></i>
        </a>
      </li>
      <li>
        <a href="patients.html" data-mfb-label="Patients List" class="mfb-component__button--child bg-orange">
          <i class="zmdi zmdi-account-o mfb-component__child-icon"></i>
        </a>
      </li>

      <li>
        <a href="payments.html" data-mfb-label="Payments" class="mfb-component__button--child bg-purple">
          <i class="zmdi zmdi-balance-wallet mfb-component__child-icon"></i>
        </a>
      </li>
    </ul>
  </li>
</ul>
<!-- #Float icon -->
<?php include 'app/views/patient/header.php' ?>
<!-- main content -->
<section class="content email-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="body">
                    <form action="/patient/compose" method="POST" enctype="multipart/form-data" multiple="">
                        <div class="row clearfix">
                           <?php if(isset($data['msg']) && !empty($data['msg'])): ?>
                <div class="alert bg-red alert-dismissible col-lg-12" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                           <?= $data['msg'] ?>
                        </div>
            <?php endif; ?>
            <?php if(isset($data['msgS']) && !empty($data['msgS'])): ?>
                <div class="alert bg-green alert-dismissible col-lg-12" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                           <?= $data['msgS'] ?>
                        </div>
            <?php endif; ?>
                        <div class="col-lg-12 ">
                            <button type="button" onclick="performClick('theFile');" class="btn btn-raised btn-default waves-effect custom" ><i class="zmdi zmdi-attachment-alt"></i></button>
                            <input type="file" id="theFile" name="files[]" style="display: none;" multiple />
                            <button type="button" class="btn btn-raised btn-default waves-effect custom"><i class="zmdi zmdi-google-drive"></i></button>
                            <button type="button" class="btn btn-raised btn-default waves-effect custom"><i class="zmdi zmdi-collection-folder-image"></i></button>
                            <button type="button" class="btn btn-raised btn-default waves-effect custom"><i class="zmdi zmdi-link"></i></button>
                            <button type="button" class="btn btn-raised btn-default waves-effect custom"><i class="zmdi zmdi-mood"></i></button>
                            <button type="button" class="btn btn-raised bg-red waves-effect custom col-white"><i class="zmdi zmdi-delete"></i></button>
                        </div>                      
                        <div class="col-lg-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="email" class="form-control" name="to" required="" value="<?php if(isset($data['email'])) echo $data['email']; ?>">
                                    <label class="form-label">To :</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="subject" required="" >
                                    <label class="form-label">Subject :</label>
                                </div>
                            </div>
                        </div>                        
                        <div class="col-lg-12 m-b-20">
                            <p>Content :</p>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea name="message" rows="4" cols="5" name="details" class="form-control no-resize" placeholder="Please type what you want..." required=""></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                        <div class="col-lg-12">
                            <button type="submit" name="send" value="send" class="btn btn-raised btn-success waves-effect">Send Message</button>
                        </div>
                        </div>  
                    </form>                  
                </div>
            </div>
        </div>
    </div>
</section>
<div class="color-bg"></div>
<!-- Jquery Core Js --> 
<script src="/data/assets/bundles/libscripts.bundle.js"></script> <!-- Bootstrap JS and jQuery v3.2.1 -->
<script src="/data/assets/bundles/morphingsearchscripts.bundle.js"></script> <!-- morphing search Js -->
<script src="/data/assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->  



<script src="/data/assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="/data/assets/bundles/morphingscripts.bundle.js"></script><!-- morphing search page js -->
<script src="/data/assets/js/pages/forms/editors.js"></script>
<script src="/data/js/searchDocPha.js"></script>
<script type="text/javascript">
function performClick(elemId) {
   var elem = document.getElementById(elemId);
   if(elem && document.createEvent) {
      var evt = document.createEvent("MouseEvents");
      evt.initEvent("click", true, false);
      elem.dispatchEvent(evt);
   }
}
</script>
</body>

<!-- Mirrored from thememakker.com/templates/swift/hospital/mail-compose.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Apr 2018 09:43:20 GMT -->
</html>