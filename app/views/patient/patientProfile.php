<!DOCTYPE html>
<html>

<!-- Mirrored from thememakker.com/templates/swift/hospital/patient-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Apr 2018 09:42:52 GMT -->
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>:: Swift - Hospital Admin ::</title>
<link rel="icon" href="/data/favicon.ico" type="image/x-icon">
<link href="/data/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
<link href="/data/assets/css/main.css" rel="stylesheet">
<link href="/data/assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
<link href="/data/assets/plugins/morrisjs/morris.css" rel="stylesheet" />
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
<?php include 'app/views/patient/header.php' ?>


<section class="content profile-page">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Patient Profile</h2>
            <small class="text-muted">Welcome to Swift application</small>
        </div>        
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class=" card patient-profile">
                    <img src="<?php echo $this->getDataURI($data['patient']->url_pic); ?>" style="width: 409.33px;height: 272.33px" class="img-fluid" alt="">                              
                </div>
                <div class="card">
                    <div class="header">
                        <h2>About Patient</h2>
                    </div>
                    <div class="body">
                        <?php if(!empty($data['patient'])): ?>
                        <strong>Name</strong>
                        <p><?= $data['patient']->nom_user.' '.$data['patient']->prenom_user ?></p>
                        <strong>Birth Day</strong>
                        <p><?= $data['patient']->data_nais?></p>
                        <strong>Sexe</strong>
                        <p><?= $data['patient']->sexe?></p>
                        <strong>Occupation</strong>
                        <p>Patient</p>
                        <strong>Email ID</strong>
                        <p><?= $data['patient']->email_user?></p>
                        <strong>Phone</strong>
                        <p>+213 <?= $data['patient']->tel_user ?></p>
                        <hr>
                        <strong>Address</strong>
                        <address><?= $data['patient']->add_user.', '.$data['patient']->nom_quartie.', '.$data['patient']->nom_commune.', '.$data['patient']->nom_wilaya?></address>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="card">
                    <div class="body"> 
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"><a class="nav-link active"data-toggle="tab"  href="#report">Ordonnances</a></li>
                        </ul>
                        
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane in active" id="report">                               
                            <div class="wrap-reset">
                                <div class="mypost-list">
                                    <div class="post-box">
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                                    </div>
                                    <hr>
                                    <div class="post-box">
                                        <h4>General Report</h4>                                        
                                        <div class="body p-l-0 p-r-0">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table id="mainTable" class="table table-striped table-hover js-basic-example dataTable" style="cursor: pointer;">
                                                        <thead>
                                                            <tr>
                                                                
                                                                <th>Code Ord</th>
                                                                <th>Data Ord</th>
                                                                <th>Date of purchase</th>
                                                                <th>Details</th>
                                                                <th>Action</th>
                                                             </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php if(!empty($data['ord'])): ?>
                                                            <?php foreach($data['ord'] as $k=>$v): ?>
                                                            <tr>
                                                                <td><?= $v->code_ordonnance ?></td>
                                                                <td><?= $v->data_ordonnance ?></td>
                                                                <td><?= ($v->data_achet_ord == NULL)?'not bought':$v->data_achet_ord; ?></td>
                                                                <td><?= $v->details ?></td>
                                                                <td><a href="<?= $v->url_patient ?>" class="btn btn-raised bg-green btn-xs waves-effect" data-id="<?= $v->idordonnance ?>" target="_blank" >Show</a></td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                            <?php endif; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Large Size -->
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalLabel">Modal title</h4>
            </div>
            <div class="modal-body"> 
                <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Invoices Detail</h2>
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
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-4 col-sm-4">
                                    <h4><img src="/data/favicon.ico" width="70" alt="velonic"></h4>                                                
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <h4>Invoice # <br>
                                        <strong>2015-04-5654667546</strong>
                                    </h4>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <address>
                                        <strong>Twitter, Inc.</strong><br>
                                        795 Folsom Ave, Suite 546<br>
                                        San Francisco, CA 54656<br>
                                        <abbr title="Phone">P:</abbr> (123) 456-34636
                                    </address>
                                </div>
                                <div class="col-md-6 col-sm-6 text-right">
                                    <p><strong>Order Date: </strong> Jun 15, 2016</p>
                                    <p class="m-t-10"><strong>Order Status: </strong> <span class="badge bg-orange">Pending</span></p>
                                    <p class="m-t-10"><strong>Order ID: </strong> #123456</p>
                                </div>
                            </div>
                            <div class="mt-40"></div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table id="mainTable" class="table table-striped" style="cursor: pointer;">
                                            <thead>
                                                <tr><th>#</th>
                                                <th>Item</th>
                                                <th>Description</th>
                                                <th>Quantity</th>
                                                <th>Unit Cost</th>
                                                <th>Total</th>
                                            </tr></thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>LCD</td>
                                                    <td>Lorem ipsum dolor sit amet.</td>
                                                    <td>1</td>
                                                    <td>$380</td>
                                                    <td>$380</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Mobile</td>
                                                    <td>Lorem ipsum dolor sit amet.</td>
                                                    <td>5</td>
                                                    <td>$50</td>
                                                    <td>$250</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>LED</td>
                                                    <td>Lorem ipsum dolor sit amet.</td>
                                                    <td>2</td>
                                                    <td>$500</td>
                                                    <td>$1000</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>LCD</td>
                                                    <td>Lorem ipsum dolor sit amet.</td>
                                                    <td>3</td>
                                                    <td>$300</td>
                                                    <td>$900</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Mobile</td>
                                                    <td>Lorem ipsum dolor sit amet.</td>
                                                    <td>5</td>
                                                    <td>$80</td>
                                                    <td>$400</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="hidden-print col-md-12 text-right">
                                <a href="javascript:window.print()" class="btn btn-raised btn-success"><i class="zmdi zmdi-print"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
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

<script src="/data/assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
<script src="/data/assets/bundles/morphingscripts.bundle.js"></script><!-- morphing search page js --> 
<script src="/data/assets/bundles/datatablescripts.bundle.js"></script><!-- Jquery DataTable Plugin Js -->
<script src="/data/assets/js/pages/tables/jquery-datatable.js"></script>
<script src="/data/js/searchDocPha.js"></script>

<script>
    $(function () {
        // body...
        //$('#largeModal').modal('show');
    });
</script>
</body>

<!-- Mirrored from thememakker.com/templates/swift/hospital/patient-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Apr 2018 09:42:52 GMT -->
</html>