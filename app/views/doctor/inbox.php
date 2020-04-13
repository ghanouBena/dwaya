<!DOCTYPE html>
<html>

<!-- Mirrored from thememakker.com/templates/swift/hospital/mail-inbox.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Apr 2018 09:42:38 GMT -->
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>:: Dwaya - <?= $data['page'] ?> ::</title>
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
<?php include 'app/views/doctor/header.php' ?>
<!-- main content -->
<section class="content email-page">
    <div class="container-fluid">
        <div class="row">                 
            <div class="col-lg-12">
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#primary">Primary</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active in" id="primary">
                        <section class="mail_listing body table-responsive">
                            <table class="table table-hover">                                
                                <tbody>
                                    <?php if(isset($data['messages'])): ?>
                                        <?php foreach($data['messages'] as $v): ?>
                                    <tr class="<?php if(!$v->opened){ echo 'unread'; } ?>">
                                        <td>
                                            <div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_2" />
                                                <label for="basic_checkbox_2"></label>
                                            </div>
                                        </td>                                    
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star-outline"></i></td>
                                        <td class="hidden-sm-down hidden-md-down"><img src="<?=  $this->getDataURI($v->url_pic) ?>" alt="profile img"><?= $v->nom_user.' '.$v->prenom_user ?></td>
                                        <td class="max-texts">
                                            <a href="<?= $v->mail_doctor ?>"><?= $v->subject ?></a>
                                        </td>
                                        
                                        <td class="hidden-sm-down">
                                            <?php if($v->idfiles): ?>
                                            <i class="zmdi zmdi-attachment-alt"></i>
                                            <?php endif; ?>
                                        </td>
                                        
                                        <td class="text-right"> <?= $v->time_sent ?> </td>
                                    </tr>
                                    <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </section>
                    </div>
                </div>
            </div>        
            <div class="col-sm-6">
                <p class="m-t-15">Showing 1 - 15 of 200</p>
            </div>
            <div class="col-sm-6 text-right">
                <button type="button" class="btn btn-raised btn-default btn-sm"><i class="zmdi zmdi-arrow-left"></i></button>
                <button type="button" class="btn btn-raised btn-default btn-sm"><i class="zmdi zmdi-arrow-right"></i></button>
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

<!-- Mirrored from thememakker.com/templates/swift/hospital/mail-inbox.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Apr 2018 09:42:39 GMT -->
</html>