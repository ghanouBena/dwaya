<!DOCTYPE html>
<html>

<!-- Mirrored from thememakker.com/templates/swift/hospital/mail-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Apr 2018 09:43:20 GMT -->
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>:: Dwaya - <?= $data['page'] ?> ::</title>
<link rel="icon" href="/data/favicon.ico" type="image/x-icon">
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
<?php include 'app/views/doctor/header.php' ?>
<!-- main content -->
<section class="content email-page">
    <div class="container-fluid">
        <div class="row">            
            <div class="col-lg-12">
                <div class="body mail-single">
                    <?php if(isset($data['message'])): ?>
                    <div class="row clearfix">
                        
                        <div class="col-lg-12">
                            <h3 class="m-t-0"><?= $data['message'][0]->subject ?></h3>
                            <div class="media">
                                <div class="m-r-20">
                                    <div class="thumb thumb-md"> <img class="" src="<?=  $this->getDataURI($data['message'][0]->url_pic) ?>" alt=""> </div>
                                </div>
                                <div class="media-body">
                                    <p class="m-b-0"> <span class="text-muted">from</span> <a href="<?= $data['message'][0]->compose_doctor ?>" class="text-default"><?= $data['message'][0]->email_user ?> 
                                        (<?= $data['message'][0]->nom_user.' '.$data['message'][0]->prenom_user ?>)</a> <span class="text-muted text-sm pull-right"><?= $data['message'][0]->time_sent ?></span> </p>
                                    <p class="m-b-0"><span class="text-muted">to</span> Me</p>
                                    <?php if($data['message'][0]->idfiles): ?>
                                    <p class="m-b-0 text-sm"><span class="text-muted"><i class="zmdi zmdi-attachment-alt"></i></span>(<?= count($data['message'])?> files)</p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="col-lg-12">
                            <p><?= $data['message'][0]->message ?></p>
                            <hr>
                        </div>
                        <?php if($data['message'][0]->idfiles): ?>
                        <div class="col-lg-12">
                           <?php foreach($data['message'] as $v): ?>
                            <div class="thumb thumb-xxl">
                                <div class="thumb-header" style="word-wrap: break-word;"><i class="zmdi zmdi-attachment-alt"></i> 
                                    <?php $image=explode('/',$v->url); echo $image[count($image)-1]; ?>
                                </div>
                                <div class="thumb-body bg-white"> <a href="<?= '/'.$v->url ?>" target="_blank">
                                    <img src="<?= $this->getDataURI($v->url) ?>" alt="" style="width: 150px;height: 80px;"></a> </div>                                    
                            </div>
                        <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                        <div class="col-lg-12">
                            <div class="panel-heading m-t-20">
                            <div class="m-b-10 m-t-10"> Click here to <a href="<?= $data['message'][0]->compose_doctor ?>">Reply</a> or <a href="mail-compose.html">Forward</a>
                            </div>
                          </div>
                        </div>
                    </div>
                    <?php endif; ?>
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
</body>

<!-- Mirrored from thememakker.com/templates/swift/hospital/mail-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Apr 2018 09:43:20 GMT -->
</html>