<!DOCTYPE html>
<html>

<!-- Mirrored from thememakker.com/templates/swift/hospital/book-appointment.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Apr 2018 09:42:44 GMT -->
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>:: Dwaya - <?= $data['page'] ?> ::</title>
<link rel="icon" href="/data/favicon.ico" type="image/x-icon">
<link href="/data/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
<!-- Bootstrap Material Datetime Picker Css -->
<link href="/data/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
<!-- Wait Me Css -->
<link href="/data/assets/plugins/waitme/waitMe.css" rel="stylesheet" />
<!-- Bootstrap Select Css -->
<link href="/data/assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

<link href="/data/assets/css/main.css" rel="stylesheet">
<!-- Custom Css -->

<!-- Swift Themes. You can choose a theme from css/themes instead of get all themes -->
<link href="/data/assets/css/themes/all-themes.css" rel="stylesheet" />
<style>
   .listPatient{

    position: absolute;
    background: rgba(255,255,255,1);
    box-shadow: 0 0 8px rgba(0,0,0,0.18),0 8px 16px rgba(0,0,0,0.36);
    width: 100%;
    z-index: 1000;
    display: none;
    height: 80px;
    overflow: auto;

   } 
   .listP{
    
    
    width: 100%;
   }
   .itemPatient{
    display: block;
     position: relative;
    left: -20px;
    width: 100%;
    padding: 8px;
    border-bottom: 1px solid rgba(0,0,0,0.35);
    color: #000;
    cursor: pointer;
   }
    .itemPatient:hover{
        background: rgba(0,0,0,.35);
        color: #fff;
    }
</style>
</head>

<body class="theme-cyan">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
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

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Search Medicament</h2>
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
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2>Disponibility Medicament <small>Search Medicament by select type and name of medicament...</small> </h2>
						<ul class="header-dropdown m-r--5">
							<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
								<ul class="dropdown-menu pull-right">
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="body">
                        <form id="fromMedDis">
                          
                        <div class="row clearfix">
                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                       <select class="form-control show-tick" name="type" required="" id="tp">
                                        <option value="">-- Type --</option>
                                        <?php if(!empty($data['type'])): ?>
                                        <?php foreach ($data['type'] as $v): ?>
                                            <option value="<?= $v->idtype ?>"><?= $v->nom_type ?></option>
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                                    </select>
                                        
                                    </div>
                                     
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <select class="form-control show-tick" name="med" required="" id="med">
                                        <option value="">-- Medicament --</option>
                                        
                                    </select>
                                    </div>
                                </div>
                            </div>
                           
                            </div>

                            <div class="row clearfix">
                                <?php if(!empty($data['Med'])): ?>
                                    <?php foreach ($data['Med'] as $v): ?>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="card all-patients">
                                        <div class="body">
                                         <div class="row">
                                             <div class="col-md-4 col-sm-4 text-center m-b-0">
                                                 <a href="javascript:void(0)" class="p-profile-pix"><img src="<?php echo $this->getDataURI("data/assets/images/med.jpg"); ?>" style="width:108.33px;   height: 108.33px; " alt="user" class="img-thumbnail img-fluid"></a>
                                                </div>
                                                <div class="col-md-8 col-sm-8 m-b-0">
                                                    <h5 class="m-b-0">Med : <?= $v->nom_medicament ?> , Labo : <?= $v->labo_medicament ?></h5>
                                                    <b> Qt: <?= $v->quantite?> Boxes , Price : <?= $v->prix_med?> DA</b>
                                                    <address class="m-b-0">
                                                        Ph: <?= $v->nom_user.' '.$v->prenom_user ?> <br>
                                                        <?= $v->add_user.', '.$v->nom_quartie.', '.$v->nom_commune.', '.$v->nom_wilaya ?><br>
                                                        <abbr title="Phone">P:</abbr> (123) <?= $v->tel_user ?>
                                                    </address>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </form>
                    </div>
				</div>
			</div>
		</div>
    </div>
</section>

<div class="color-bg"></div>
<!-- Jquery Core Js --> 
<script src="/data/assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="/data/assets/bundles/morphingsearchscripts.bundle.js"></script> <!-- morphing search Js --> 
<script src="/data/assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="/data/assets/plugins/autosize/autosize.js"></script> <!-- Autosize Plugin Js --> 
<script src="/data/assets/plugins/momentjs/moment.js"></script> <!-- Moment Plugin Js --> 
<!-- Bootstrap Material Datetime Picker Plugin Js --> 
<script src="/data/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script> 

<script src="/data/assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
<script src="/data/assets/bundles/morphingscripts.bundle.js"></script><!-- morphing search page js --> 
<script src="/data/assets/js/pages/forms/basic-form-elements.js"></script>
<script src="/data/js/medicament.js"></script>
<script src="/data/js/searchDocPha.js"></script>
<script>
    $('#med').change(function() {
            // body...
            //var dataF = $('#fromMedDis').serialize();
            var idMed = $(this).val();
            window.location.href='/patient/medicament/'+idMed;
           
            
        });
</script>

</body>

<!-- Mirrored from thememakker.com/templates/swift/hospital/book-appointment.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Apr 2018 09:42:48 GMT -->
</html>