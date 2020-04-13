<!DOCTYPE html>
<html>

<!-- Mirrored from thememakker.com/templates/swift/hospital/add-doctor.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Apr 2018 09:42:50 GMT -->
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>:: Swift - Hospital Admin ::</title>
<link rel="icon" href="/data/favicon.ico" type="image/x-icon">
<link href="/data/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
<!-- Dropzone Css -->
<link href="/data/assets/plugins/dropzone/dropzone.css" rel="stylesheet">
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
<!-- Top Bar -->
<nav class="navbar clearHeader">
    <div class="col-12">
        <div class="navbar-header"> <a href="javascript:void(0);" class="bars"></a> <a class="navbar-brand" href="index.html">Swift Hospital</a> </div>
        <ul class="nav navbar-nav navbar-right">
            
            <li><a href="/login/logout" class="js-right-sidebar" data-close="true">Logout <i class="zmdi zmdi-sign-in"></i> </a></li>
        </ul>
    </div>
</nav>
<!-- #Top Bar -->

<section class="content" style="max-width: 1050px;">
    <div class="container-fluid" >
        <div class="block-header">
            <h2>Complete Account of Doctor</h2>
            <small class="text-muted">Welcome to Dwaya application</small>
        </div>
        <div class="row clearfix">
			<div class=" col-md-12 ">
				<div class="card">
					<div class="header">
						<h2>Basic Information <small>Description text here...</small> </h2>
						<ul class="header-dropdown m-r--5">
							<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
								<ul class="dropdown-menu pull-right">
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
								</ul>
							</li>
						</ul>
                        <?php if(isset($data['msg']) && !empty($data['msg'])): ?>
                        <div class="alert bg-red alert-dismissible" role="alert"><?= $data['msg'] ?></div>
                        <?php endif;?>
					</div>
					<div class="body">
                        <form action="/doctor/complete" method="POST" enctype="multipart/form-data">
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="fname" placeholder="First Name" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="lname" placeholder="Last Name" required="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="datepicker form-control" name="b_day" placeholder="Date of Birth" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group drop-custum">
                                    <select class="form-control show-tick" name="sexe" required="">
                                        <option value="">-- Gender --</option>
                                        <option value="Men">Male</option>
                                        <option value="Woman">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group drop-custum">
                                    <select class="form-control show-tick" name="spe" required="">
                                        <option value="">-- Speciality --</option>
                                        <?php if(isset($data['specialite']) && !empty($data['specialite'])): ?>
                                        <?php foreach($data['specialite'] as $v): ?>
                                        <option value="<?= $v->idspecialite ?>"><?= $v->nom_sep ?></option>
                                        <?php endforeach; ?>  
                                        <?php endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Phone" name="phone" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Enter Your Address" name="add" required="">
                                    </div>
                                </div>
                            </div>
                             <div class="col-sm-3">
                                <div class="form-group drop-custum">
                                    <select class="form-control show-tick" name="wilaya" id="wilaya" required="">
                                        <option value="">-- Wilaya --</option>
                                        <?php if(isset($data['wilaya']) && !empty($data['wilaya'])): ?>
                                        <?php foreach($data['wilaya'] as $v): ?>
                                        <option value="<?= $v->idwilaya ?>"><?= $v->nom_wilaya ?></option>
                                        <?php endforeach; ?>  
                                        <?php endif; ?>
                                    </select>
                                </div>
                            </div>
                             <div class="col-sm-3">
                                <div class="form-group drop-custum">
                                    <select class="form-control show-tick" name="commune" id="commune" required="">
                                        <option value="">-- City --</option>
                                        
                                    </select>
                                </div>
                            </div>
                             <div class="col-sm-3">
                                <div class="form-group drop-custum">
                                    <select class="form-control show-tick" name="quartie" id="quartie" required="">
                                        <option value="">-- District --</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                
                                    <div class="dz-message">
                                        <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                        <h3>upload your picture.</h3> 
                                        <?php if(isset($data['errors']) && $data['errors'] != NULL): ?>
                                        <div class="alert bg-red alert-dismissible" role="alert">
                                        <?php foreach($data['errors'] as $k => $v): ?>
                                            <p><?= $k.' : '.$v ?></p>
                                        <?php endforeach; ?>
                                        </div>
                                        <?php endif;?>
                                    </div>
                                    <div class="fallback">
                                        <input name="file" type="file" required="" />
                                    </div>
                                
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" name="save" value="save" class="btn btn-raised g-bg-cyan">Submit</button>
                                <button type="submit" class="btn btn-raised">Cancel</button>
                            </div>
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
<script src="/data/assets/plugins/dropzone/dropzone.js"></script> <!-- Dropzone Plugin Js -->
<!-- Bootstrap Material Datetime Picker Plugin Js --> 
<script src="/data/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script> 

<script src="/data/assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
<script src="/data/assets/bundles/morphingscripts.bundle.js"></script><!-- morphing search page js --> 
<script src="/data/assets/js/pages/forms/basic-form-elements.js"></script>
<script src="/data/js/wilaya_commune.js"></script>
</body>

<!-- Mirrored from thememakker.com/templates/swift/hospital/add-doctor.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Apr 2018 09:42:52 GMT -->
</html>