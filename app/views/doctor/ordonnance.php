<!DOCTYPE html>
<html>

<!-- Mirrored from thememakker.com/templates/swift/hospital/patient-invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Apr 2018 09:42:52 GMT -->
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
<?php include 'app/views/doctor/header.php' ?>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Patient's Invoice</h2>
            <small class="text-muted">Welcome to Dwaya application</small>
        </div>
        <div class="row clearfix" >
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Ordonnance Detail</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Print Invoices</a></li>
                                        <li role="presentation" class="divider"></li>
                                        <li><a href="javascript:void(0);">Export to XLS</a></li>
                                        <li><a href="javascript:void(0);">Export to CSV</a></li>
                                        <li><a href="javascript:void(0);">Export to XML</a></li>                                    
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body" id="ordn">
                            <div class="row clearfix">
                                <div class="col-md-4 col-sm-4">
                                    <h4><img src="/data/favicon.ico" width="70" alt="velonic"></h4>                                                
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <h4>Ordonnance # <br>
                                        <strong><?php if(!empty($data['ord'])) echo $data['ord'][0]->code_ordonnance ?></strong>
                                    </h4>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <address>
                                        <strong>Dwaya.dz, Inc.</strong><br>
                                        Doctor Name : <?php if(!empty($data['ord'])) echo $data['ord'][0]->nom_med.' '.$data['ord'][0]->prenom_med ?> <br>
                                        <?php if(!empty($data['ord'])) echo $data['ord'][0]->add_med.', '.$data['ord'][0]->nom_quartie.', '.$data['ord'][0]->nom_commune.', '.$data['ord'][0]->nom_wilaya ?><br>
                                        <abbr title="Phone">P:</abbr> (+213) <?php if(!empty($data['ord'])) echo $data['ord'][0]->tel_med ?><br>
                                        <abbr title="Phone">Specialite:</abbr> <?php if(!empty($data['ord'])) echo $data['ord'][0]->nom_sep ?>
                                    </address>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <address>
                                        <strong>Dwaya.dz, Inc.</strong><br>
                                        Patient Name : <?php if(!empty($data['ord'])) echo $data['ord'][0]->nom_user.' '.$data['ord'][0]->prenom_user ?> <br>
                                        <?php if(!empty($data['ord'])) echo $data['ord'][0]->add_user?><br>
                                        <abbr title="Phone">P:</abbr> (+213) <?php if(!empty($data['ord'])) echo $data['ord'][0]->tel_user?>
                                    </address>
                                </div>
                                <div class="col-md-6 col-sm-6 text-right">
                                    <p><strong>Ordonnance Date: </strong> <?php if(!empty($data['ord'])) echo $data['ord'][0]->data_ordonnance?></p>
                                    <p class="m-t-10"><strong>Order ID: </strong> <?php if(!empty($data['ord'])) echo $data['ord'][0]->code_ordonnance ?></p>
                                </div>
                            </div>
                            <div class="mt-40">
                                <p class="m-t-10"><strong>Description: </strong><br> <?php if(!empty($data['ord'])) echo $data['ord'][0]->details ?></p>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table id="mainTable" class="table table-striped" style="cursor: pointer;">
                                            <thead>
                                                <tr><th>#</th>
                                                <th>Medicament</th>
                                                <th>Quantity</th>
                                                <th>Description</th>
                                            </tr></thead>
                                            <tbody>
                                                <?php if(!empty($data['ord'])): ?>
                                                <?php foreach($data['ord'] as $k=>$v): ?>
                                                <tr>
                                                    <td><?= $k+1 ?></td>
                                                    <td><?= $v->nom_medicament ?></td>
                                                    <td><?= $v->quantite ?></td>
                                                    <td><?= $v->description ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="hidden-print col-md-12 text-right">
                                <a href="javascript:void(0)" onclick="return PrintElem('ordn')"  class="btn btn-raised btn-success"><i class="zmdi zmdi-print"></i></a>
                            </div>
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

<script src="/data/assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
<script src="/data/assets/bundles/morphingscripts.bundle.js"></script><!-- morphing search page js --> 
<script>
    function PrintElem(elem)
{
    var mywindow = window.open('', 'PRINT', 'height=400,width=600');

    mywindow.document.write('<html><head><title>' + document.title  + '</title>');
    mywindow.document.write('</head><body >');
    mywindow.document.write('<h1>' + document.title  + '</h1>');
    mywindow.document.write(document.getElementById(elem).innerHTML);
    mywindow.document.write('</body></html>');

    mywindow.document.close(); // necessary for IE >= 10
    mywindow.focus(); // necessary for IE >= 10*/

    mywindow.print();
    mywindow.close();

    return true;
}
</script>
</body>

<!-- Mirrored from thememakker.com/templates/swift/hospital/patient-invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Apr 2018 09:42:55 GMT -->
</html>