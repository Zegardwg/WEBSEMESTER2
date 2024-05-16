<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="assets/css/green.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="assets/css/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img style="margin-top: -5px;" height="32" width="32" src="assets/images/logo.png"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img style="margin-top: -5px;" height="32" width="32" src="assets/images/logo.png"><b> Trans Madiun</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="http://walkeprashant.in/wp-content/uploads/2016/02/Prashant_Walke.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Prashant Walke</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="http://walkeprashant.in/wp-content/uploads/2016/02/Prashant_Walke.jpg" class="img-circle" alt="User Image">

                <p>
                  Prashant Walke - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
               
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>          
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->      
    <div class="user-panel">
        <div class="pull-left image">
          <img src="http://walkeprashant.in/wp-content/uploads/2016/02/Prashant_Walke.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Prashant Walke</p>
        </div>
      </div>
      <!-- /.search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree"> 
        <li><a href="home.html"><i class="fa fa-home"></i> <span>Home</span></a></li>
        <!--<li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Report</span></a></li>-->
       
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Post Mangment       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a> > Post Mangment </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">


<div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-green">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Post</h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Post Name</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Post Name">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Description</label>

                  <div class="col-sm-9">
                    <textarea  id="inputEmail3" rows="5" cols="55"  placeholder="Description"></textarea>
                  </div>
                </div>
              </form>
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-warning">Add</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

      <!-- Info boxes -->
      <div class="row">
        
       <div class="row docs-premium-template">
                    <div class="col-sm-12 col-md-12">
                <div class="box box-solid">
                    <div class="box-body">
                      <div class="row">
                      <div class="col-sm-5 col-md-5">

                       <div class="form-group">

                  <label for="exampleInputEmail1">Post name</label>
                  <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" style="background-color:#fff" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button  style="background-color:#fff" type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
                </div>
                 <button type="submit" class="btn btn-flat btn-warning">Search </button>
                <button type="submit" class="btn btn-flat btn-Secondary">Clear</button>
              </div>
            </div>
            <div class="row">
                      <div class="col-sm-12 col-md-12">
<br><br>
              <h4 style="background-color:#f7f7f7; font-size: 18px;padding: 7px 10px; margin-top: 0;">
                           <a data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus-circle"></i> Add </a>
                          &nbsp <i class="fa fa-edit"></i> Edit 
                           &nbsp <i class="fa fa-trash"></i> Delete 
                            &nbsp<i class="fa fa-copy"></i>  Copy
                        </h4>

                        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Posts</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody><tr>
                  <th style="width: 10px">#</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th style="width: 40px">Label</th>
                </tr>
                <tr>
                  <td>1.</td>
                  <td>Update software</td>
                  <td>
                    Test Description
                  </td>
                  <td><span class="badge bg-red">55%</span></td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>Clean database</td>
                  <td>
                     Test Description
                  </td>
                  <td><span class="badge bg-yellow">70%</span></td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td>Cron job running</td>
                  <td>
                    Test Description
                  </td>
                  <td><span class="badge bg-light-blue">30%</span></td>
                </tr>
                <tr>
                  <td>4.</td>
                  <td>Fix and squish bugs</td>
                  <td>
                     Test Description
                  </td>
                  <td><span class="badge bg-green">90%</span></td>
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
              </ul>
            </div>
          </div>
          <!-- /.box -->

         
        </div>
               
                            </div>
                </div>
            </div>
            </div>
                </div>
                   
            </div>

      </div>
      <!-- /.row -->      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016.</strong> All rights
    reserved.
  </footer>
<style type="text/css">
.home-icon{
  margin-top: 45px!important;
}
</style>


</div>
<!-- ./wrapper -->

<script src="assets/js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/js/bootstrap.min.js"></script>
<
<script src="assets/js/adminlte.min.js"></script>

<script src="assets/js/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->

</body>
</html>
