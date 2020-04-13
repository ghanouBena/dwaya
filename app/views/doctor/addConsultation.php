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
<?php include 'app/views/doctor/header.php' ?>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Add Consultation</h2>
            <small class="text-muted">Welcome to Dwaya application</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2>Add Consultations <small>here you can create a consultation for any patient by just insert username of him...</small> </h2>
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
                        <form action="/doctor/consultation" method="POST">
                            <?php if(isset($data['msg']) && !empty($data['msg'])): ?>
                <div class="alert bg-red alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                           <?= $data['msg'] ?>
                        </div>
            <?php endif; ?>
            <?php if(isset($data['msgS']) && !empty($data['msgS'])): ?>
                <div class="alert bg-green alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                           <?= $data['msgS'] ?>
                        </div>
            <?php endif; ?>
                        <div class="row clearfix">
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="username" class="form-control" placeholder="Username of patient" id="sPatient">
                                        
                                    </div>
                                     
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="4" name="details" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                
                                    <label for="">Add Medicament</label>
                                    <a class="btn btn-raised btn-primary waves-effect btn-xs"  id="addMed"><i class="zmdi zmdi-plus"></i></a>
                                
                            </div>
                           
                            </div>

                            <div class="row clearfix" id="listMed">
                           
                               
                            
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" name="save" class="btn btn-raised g-bg-cyan">Submit</button>
                                <button type="reset" class="btn btn-raised">Cancel</button>
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
<script >
    var allmed = '<option>Select Medicament</option><?php if(isset($data["allmed"]) && !empty($data["allmed"]))foreach($data["allmed"] as $v){echo "<option value=".$v->idmedicament.">".$v->nom_medicament."</option>";} ?>';
    $("#addMed").click(function() {

        var med = '<div class="col-sm-4"><div class="form-group"><div class="form-line"><select type="text" name="medName[]" class="form-control" placeholder="Full Name Of Patient" >'+allmed+'</select> </div></div></div><div class="col-sm-4"><div class="form-group"><div class="form-line"><input type="number" name="NbBox[]" class="form-control" placeholder="Number of Boxes" ></div></div></div> <div class="col-sm-4"><div class="form-group"><div class="form-line"><input type="text" name="des[]" class="form-control" placeholder="Description" ></div></div></div>';
        $('#listMed').append(med);
    });
</script>
</body>

<!-- Mirrored from thememakker.com/templates/swift/hospital/book-appointment.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Apr 2018 09:42:48 GMT -->
</html>