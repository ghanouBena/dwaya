<!DOCTYPE html>
<html>

<!-- Mirrored from thememakker.com/templates/swift/hospital/payments.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Apr 2018 09:42:36 GMT -->
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>:: Dwaya - <?= $data['page'] ?> ::</title>
<link rel="icon" href="/data/favicon.ico" type="image/x-icon">
<link href="/data/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
<link href="/data/assets/plugins/morrisjs/morris.css" rel="stylesheet" />
<link href="/data/assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" />
<!-- JQuery DataTable Css -->
<link href="/data/assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
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
<?php include 'app/views/admin/header.php' ?>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Accounts</h2>
            <small class="text-muted">Welcome to Dwaya application</small>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Users Accounts</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Active</th>
                                    <th>Complete</th>
                                    <th>Decision</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Active</th>
                                    <th>Complete</th>
                                    <th>Decision</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                
                                <?php if(!empty($data['accounts'])): ?>
                                    <?php foreach ($data['accounts'] as $v): ?>
                                        <tr>
                                            <td><?= $v->username ?></td>
                                            <td><?= $v->email_user ?></td>
                                            <td><?php if($v->niveau == 0){echo 'Patient';}elseif($v->niveau == 1){echo 'Doctor';}elseif($v->niveau == 2){echo 'Pharmacie';} ?></td>
                                            <td><?php echo $v->active?'yes':'none'; ?></td>
                                            <td><?php echo $v->complete?'yes':'none'; ?></td>
                                            <td>
                                                <button type="button" class="btn  btn-raised bg-green btn-xs waves-effect col-lg-4" data-type="ajax-loader" data-id="<?= $v->idusers ?>">Accept</button>
                                                <button type="button" class="btn  btn-raised bg-red btn-xs waves-effect col-lg-4" data-type="ajax-loader" data-id="<?= $v->idusers ?>" data-color="cyan" data-toggle="modal" data-target="#modSpe">Refuse</button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
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
                <h4 class="modal-title " id="defaultModalLabel" style="text-align: center;">Delete user</h4>
            </div>
            <div class="modal-body">
               <div class="row clearfix">
                <h5>Are you sure!! do you want to delete it ?</h5>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect" id="deleteUser">Delete</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal" id='CLOSE'>CLOSE</button>
            </div>
        </div>
    </div>
</div>
<div class="color-bg"></div>
<!-- Jquery Core Js --> 

<script src="/data/assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="/data/assets/bundles/morphingsearchscripts.bundle.js"></script> <!-- morphing search Js --> 
<script src="/data/assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="/data/assets/bundles/datatablescripts.bundle.js"></script><!-- Jquery DataTable Plugin Js -->

<script src="/data/assets/plugins/bootstrap-notify/bootstrap-notify.js"></script> <!-- Bootstrap Notify Plugin Js --> 
<script src="/data/assets/plugins/sweetalert/sweetalert.min.js"></script> <!-- SweetAlert Plugin Js --> 

<script src="/data/assets/js/pages/ui/dialogs.js"></script> 
<script src="/data/assets/js/pages/ui/modals.js"></script> 
<script src="/data/assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
<script src="/data/assets/bundles/morphingscripts.bundle.js"></script><!-- morphing search page js --> 
<script src="/data/assets/js/morphing.js"></script><!-- Custom Js -->  
<script src="/data/assets/js/pages/tables/jquery-datatable.js"></script>

<script>
    $(function() {
        $('.bg-red').click(function() {
            var id = $(this).attr('data-id');
            $('#deleteUser').attr('data-id',id);
        });
        $('#deleteUser').click(function() {
           var id = $(this).attr('data-id');
           $.post('/json/deleteUser',
           {
            idusers : id
           },
           function (data,status) {

                if(data.SUCCESS){
                    alert('The user is delete it');
                    $('#CLOSE').trigger('click');
                    window.location.href="/admin/accounts";
                }else{
                     alert('Something wrong try again');
                }
               
                },'json');
        });

        $('.bg-green').click(function() {
           var id = $(this).attr('data-id');
           $.post('/json/accept',
           {
            idusers : id
           },
           function (data,status) {

                if(data.SUCCESS){
                    alert('The user is accept it');
                     window.location.href="/admin/accounts";
                   
                }else{
                     alert('Something wrong try again');
                }
               
                },'json');
        });
    });
</script>

</body>

<!-- Mirrored from thememakker.com/templates/swift/hospital/payments.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Apr 2018 09:42:38 GMT -->
</html>