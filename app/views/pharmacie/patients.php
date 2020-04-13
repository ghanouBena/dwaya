<!DOCTYPE html>
<html>

<!-- Mirrored from thememakker.com/templates/swift/hospital/patients.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Apr 2018 09:42:34 GMT -->
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>:: Dwaya - <?= $data['page'] ?> ::</title>
<link rel="icon" href="/data/favicon.ico" type="image/x-icon">
<link href="/data/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
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
<?php include 'app/views/pharmacie/header.php' ?>

<section class="content patients">
    <div class="container-fluid">
        <div class="block-header">
            <h2>All Patients</h2>
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

                            <div class="col-sm-4">
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
                             <div class="col-sm-4">
                                <div class="form-group drop-custum">
                                    <select class="form-control show-tick" name="commune" id="commune" required="">
                                        <option value="">-- City --</option>
                                        
                                    </select>
                                </div>
                            </div>
                             <div class="col-sm-4">
                                <div class="form-group drop-custum">
                                    <select class="form-control show-tick" name="quartie" id="quartie" required="">
                                        <option value="">-- District --</option>
                                    </select>
                                </div>
                            </div>
        </div>
        <div class="row clearfix">
            <?php if(!empty($data['allPatient'])){ ?>
                <?php foreach ($data['allPatient'] as $v): ?>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card all-patients">
                    <div class="body">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 text-center m-b-0">
                                <a href="#" class="p-profile-pix"><img src="<?php echo $this->getDataURI($v->url_pic); ?>" style="width:108.33px;height: 108.33px; " alt="user" class="img-thumbnail img-fluid"></a>
                            </div>
                            <div class="col-md-8 col-sm-8 m-b-0">
                                <h5 class="m-b-0"><?= $v->nom_user.' '.$v->prenom_user ?> <a href="<?= $v->url_pharmacie ?>" class="edit"><i class="zmdi zmdi-edit"></i></a></h5> <small>Patient</small>
                                <address class="m-b-0">
                                    <?= $v->add_user.', '.$v->nom_quartie.', '.$v->nom_commune.', '.$v->nom_wilaya ?><br>
                                    <abbr title="Phone">P:</abbr> (123) <?= $v->tel_user ?>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php }else{ ?>
            
                <div class="col-lg-12 col-md-12 col-sm-6">
                <div class="info-box-4 hover-zoom-effect">
                    
                    <div class="content">
                        <div class="text"><h3>Sorry, No result founded</h3></div>
                    </div>
                </div>
                </div>
               
            <?php } ?>
        </div>
    </div>
</section>

<div class="color-bg"></div>
<!-- Jquery Core Js --> 
<script src="/data/assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="/data/assets/bundles/morphingsearchscripts.bundle.js"></script> <!-- morphing search Js --> 
<script src="/data/assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="/data/assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
<script src="/data/assets/bundles/morphingscripts.bundle.js"></script><!-- morphing search page js --> 
<script src="/data/js/wilaya_commune.js"></script>
<script>    
        $(function() {
            // body...
            //get all camion with matricul
    $('#quartie').change(function() {
        var out='';
        var id_c = $(this).val();
        window.location.href='/pharmacie/patients/'+id_c;
         $.post("/json/patients",
    {
        nPatient: id_c
    },
    function(data, status){
        var patients = data.data;
        if(data.SUCCESS == true){

        for (var i = 0; i <quartie.length ; i++) {
            out+='';
        }
        
    }else{
        out ='<option>accune quartie</option>';
    }
        $('#quartie').html(out);
        
      
    }, "json");
    });
        });

</script>
</body>

<!-- Mirrored from thememakker.com/templates/swift/hospital/patients.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Apr 2018 09:42:36 GMT -->
</html>