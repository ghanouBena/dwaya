<!DOCTYPE html>
<html>

<!-- Mirrored from thememakker.com/templates/swift/hospital/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Apr 2018 09:41:30 GMT -->
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>:: Dwaya - <?= $data['page'] ?> ::</title>
<link rel="icon" href="/data/favicon.ico" type="image/x-icon">
<link href="/data/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
<link href="/data/assets/plugins/morrisjs/morris.css" rel="stylesheet" />
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
<!-- Morphing Search  -->
<div id="morphsearch" class="morphsearch">
    <form class="morphsearch-form">
        <div class="form-group m-0">
            <input value="" type="search" placeholder="Explore Swift..." class="form-control morphsearch-input" />
            <button class="morphsearch-submit" type="submit">Search</button>
        </div>
    </form>
    <div class="morphsearch-content">
        <div class="dummy-column">
            <h2>People</h2>
            <a class="dummy-media-object" href="#"> <img class="round" src="/data/assets/images/xs/avatar1.jpg" alt=""/>
            <h3>Sara Soueidan</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="/data/assets/images/xs/avatar2.jpg" alt=""/>
            <h3>Rachel Smith</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="/data/assets/images/xs/avatar3.jpg" alt=""/>
            <h3>Peter Finlan</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="/data/assets/images/xs/avatar4.jpg" alt=""/>
            <h3>Patrick Cox</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="/data/assets/images/xs/avatar5.jpg" alt=""/>
            <h3>Tim Holman</h3>
            </a></div>
        <div class="dummy-column">
            <h2>Popular</h2>
            <a class="dummy-media-object" href="#"> <img class="round" src="/data/assets/images/xs/avatar5.jpg" alt=""/>
            <h3>Sara Soueidan</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="/data/assets/images/xs/avatar4.jpg" alt=""/>
            <h3>Rachel Smith</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="/data/assets/images/xs/avatar1.jpg" alt=""/>
            <h3>Peter Finlan</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="/data/assets/images/xs/avatar2.jpg" alt=""/>
            <h3>Patrick Cox</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="/data/assets/images/xs/avatar3.jpg" alt=""/>
            <h3>Tim Holman</h3>
            </a> </div>
        <div class="dummy-column">
            <h2>Recent</h2>
            <a class="dummy-media-object" href="#"> <img class="round" src="/data/assets/images/xs/avatar1.jpg" alt=""/>
            <h3>Sara Soueidan</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="/data/assets/images/xs/avatar5.jpg" alt=""/>
            <h3>Rachel Smith</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="/data/assets/images/xs/avatar1.jpg" alt=""/>
            <h3>Peter Finlan</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="/data/assets/images/xs/avatar4.jpg" alt=""/>
            <h3>Patrick Cox</h3>
            </a> <a class="dummy-media-object" href="#"> <img class="round" src="/data/assets/images/xs/avatar2.jpg" alt=""/>
            <h3>Tim Holman</h3>
            </a></div>
    </div>
    <!-- /morphsearch-content --> 
    <span class="morphsearch-close"></span> </div>
<!-- Top Bar -->
<?php include 'app/views/admin/header.php' ?>

<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <h2>City</h2>
            <small class="text-muted">Welcome to Dwaya application</small>
        </div>
        
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"> <i class="zmdi zmdi-account col-blue"></i> </div>
                    <div class="content">
                        <div class="text">New Patient</div>
                        <div class="number">27</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"> <i class="zmdi zmdi-account col-green"></i> </div>
                    <div class="content">
                        <div class="text">OPD Patient</div>
                        <div class="number">12</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"> <i class="zmdi zmdi-bug col-blush"></i> </div>
                    <div class="content">
                        <div class="text">Today's Operations</div>
                        <div class="number">05</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"> <i class="zmdi zmdi-balance col-cyan"></i> </div>
                    <div class="content">
                        <div class="text">Hospital Earning</div>
                        <div class="number">$3,540</div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="thumbnail card">
                    <div class="body">
                        <img src="/data/places/medea.jpg" style="height: 300px;width: 100%;" class="img-thumbnail img-fluid" alt="">
                        <div class="caption">
                            <h3>Add City</h3>
                            <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                text ever since the 1500s </p>
                            <a href="javascript:void(0);" class="btn btn-raised g-bg-cyan waves-effect waves-effect btn-sm button-demo js-modal-buttons col-sm-12" role="button" data-color="cyan" data-toggle="modal" data-target="#addspe" >Add City</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="thumbnail card">
                    <div class="body">
                        <img src="/data/places/medea.jpg" style="height: 300px;width: 100%;" class="img-thumbnail img-fluid" alt="">
                        <div class="caption">
                            <h3>Modify City</h3>
                            <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                text ever since the 1500s </p>
                            <a href="javascript:void(0);" class="btn btn-raised g-bg-cyan waves-effect waves-effect btn-sm button-demo js-modal-buttons col-sm-12" role="button" data-color="cyan" data-toggle="modal" data-target="#modSpe" >Modify City</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</section>



<!-- For Material Design Colors -->
<div class="modal fade" id="modSpe" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-col-cyan">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Modify City</h4>
            </div>
            <div class="modal-body">
               <div class="row clearfix">
            <div class=" col-md-12 ">
                <div class="card">
                    <div class="header">
                        
                        <?php if(isset($data['msg']) && !empty($data['msg'])): ?>
                        <div class="alert bg-red alert-dismissible" role="alert"><?= $data['msg'] ?></div>
                        <?php endif;?>
                    </div>
                    <div class="body">
                        <form id="fromModSpe">
                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="city" placeholder="City Name" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <select class="form-control show-tick" name="listWilaya" required="" id="wilaya">
                                        <option value="">-- Wilaya --</option>
                                        <?php if(!empty($data['wilaya'])): ?>
                                        <?php foreach ($data['wilaya'] as $v): ?>
                                            <option value="<?= $v->idwilaya ?>"><?= $v->nom_wilaya ?></option>
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <select class="form-control show-tick" name="listCity" required="" id="commune">
                                        <option value="">-- City --</option>
                                        
                                    </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect" id="modifySpe">SAVE CHANGES</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>

<!-- For Material Design Colors -->
<div class="modal fade" id="addspe" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-col-cyan">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Add City</h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
            <div class=" col-md-12 ">
                <div class="card">
                    <div class="header">
                        
                        <?php if(isset($data['msg']) && !empty($data['msg'])): ?>
                        <div class="alert bg-red alert-dismissible" role="alert"><?= $data['msg'] ?></div>
                        <?php endif;?>
                    </div>
                    <div class="body">
                        <form id="fromNewSpe">
                        <div class="row clearfix">
                            
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="newCity" placeholder="Type Name" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <select class="form-control show-tick" name="listWilaya" required="">
                                        <option value="">-- Wilaya --</option>
                                        <?php if(!empty($data['wilaya'])): ?>
                                        <?php foreach ($data['wilaya'] as $v): ?>
                                            <option value="<?= $v->idwilaya ?>"><?= $v->nom_wilaya ?></option>
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                                    </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect" id="saveNewSpe">SAVE CHANGES</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
<div class="color-bg"></div>
<!-- Jquery Core Js --> 
<script src="/data/assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="/data/assets/bundles/morphingsearchscripts.bundle.js"></script> <!-- morphing search Js --> 
<script src="/data/assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="/data/assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script> <!-- Sparkline Plugin Js -->
<script src="/data/assets/plugins/chartjs/Chart.bundle.min.js"></script> <!-- Chart Plugins Js --> 

<script src="/data/assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
<script src="/data/assets/bundles/morphingscripts.bundle.js"></script><!-- morphing search page js --> 
<script src="/data/assets/js/pages/index.js"></script>
<script src="/data/assets/js/pages/charts/sparkline.min.js"></script>
<script src="/data/assets/js/pages/ui/modals.js"></script> 
<script src="/data/js/city.js"></script>
<script src="/data/js/wilaya_commune.js"></script>
<script>

</script>
</body>

<!-- Mirrored from thememakker.com/templates/swift/hospital/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Apr 2018 09:42:27 GMT -->
</html>