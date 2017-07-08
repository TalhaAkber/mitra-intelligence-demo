<!DOCTYPE html>
<html ng-app="mitraApp" ng-cloak>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Mitra Intelligence</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/_all-skins.min.css') }}">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
      <script type="text/javascript" src="{{ asset('js/angular.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/angular-app/app.js') }}"></script>
      <style type="text/css">
         .no-bottom-margin{
         margin-bottom: 0px !important;
         }
      </style>
   </head>
   <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
   <body class="hold-transition skin-blue layout-top-nav" ng-controller="homeController" ng-init="init();">
      <div class="wrapper">
         <header class="main-header">
            <nav class="navbar navbar-static-top">
               <div class="container">
                  <div class="navbar-header">
                     <a href="../../index2.html" class="navbar-brand"><b>Mitra Intelligence</b></a>
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                     <i class="fa fa-bars"></i>
                     </button>
                  </div>
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                     <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Reports</a></li>
                     </ul>
                  </div>
                  <!-- /.navbar-collapse -->
                  <!-- Navbar Right Menu -->
               </div>
               <!-- /.container-fluid -->
            </nav>
         </header>
         <!-- Full Width Column -->
         <div class="content-wrapper">
            <div class="container">
               <!-- Content Header (Page header) -->
               <section class="content-header">
                  <h1>
                     Interview Demo Application
                  </h1>
                  <ol class="breadcrumb">
                     <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                  </ol>
               </section>
               <!-- Main content -->
               <section class="content">
                  <div class="row">
                     <div class="col-md-12">
                        <!-- Box Comment -->
                        <div class="box box-widget">
                           <div class="box-header with-border">
                              <div class="user-block">
                                 <div class="box-header ui-sortable-handle" style="cursor: move;">
                                    <i class="fa fa-tachometer"></i>
                                    <h3 class="box-title">Performace</h3>
                                 </div>
                              </div>
                              <!-- /.user-block -->
                              <div class="box-tools col-md-6">
                                 <div class="col-md-6">
                                    <p class="text-center no-bottom-margin">
                                       <strong>Festival Name:</strong>
                                    </p>
                                    <div class="row"></div>
                                    <select class="form-control col-md-4" ng-model="selectedName" ng-change="updateYears()">
                                       <option selected>Hula</option>
                                       <option>Lola</option>
                                    </select>
                                 </div>
                                 <div class="col-md-6">
                                    <p class="text-center no-bottom-margin">
                                       <strong>Year:</strong>
                                    </p>
                                    <div class="row"></div>
                                    <select class="form-control col-md-4" ng-model="year" ng-options="o.year as o.year for o in yearOptions" ng-change="updateRecord()">
                                    </select>
                                 </div>
                              </div>
                              <!-- /.box-tools -->
                           </div>
                           <!-- /.box-header -->
                           <div class="box-body">
                              <div class="row">
                                 <div class="col-md-4">
                                    <!-- Box Comment -->
                                    <div class="box box-widget">
                                       <!-- /.box-header -->
                                       <div class="box-body">
                                          <div class="progress-group">
                                             <div class="progress sm">
                                                <div class="progress-bar progress-bar-aqua" ng-style="{'width': (((current.behavioural) / 100)*100) + '%' }"></div>
                                             </div>
                                          </div>
                                          <p class="text-center no-bottom-margin">
                                             <strong>Behavioural Intention</strong>
                                          </p>
                                          <h3 class="text-primary text-center no-bottom-margin"><b>{[{ current.behavioural }]}</b></h3>
                                          <p class="text-center" ng-if="current.behavioural == previous.behavioural"><strong>No change</strong></p>
                                          <div ng-if="current.behavioural != previous.behavioural">
                                             <p class="text-center no-bottom-margin"><strong>Diff. to previous</strong></p>
                                             <p class="text-center no-bottom-margin"><span class="description-percentage" ng-class="(current.behavioural - previous.behavioural > 0) ? 'text-green' : (current.behavioural - previous.behavioural < 0) ? 'text-red' : 'text-yellow'">
                                                <i class="fa" ng-class="(current.behavioural - previous.behavioural > 0) ? 'fa-caret-up' : (current.behavioural - previous.behavioural < 0) ? 'fa-caret-down' : 'fa-caret-right'"></i> {[{ current.behavioural - previous.behavioural }]} (ABS)</span>
                                             </p>
                                             <p class="text-center"><span class="description-percentage" ng-class="(current.behavioural - previous.behavioural > 0) ? 'text-green' : (current.behavioural - previous.behavioural < 0) ? 'text-red' : 'text-yellow'">
                                                <i class="fa" ng-class="(current.behavioural - previous.behavioural > 0) ? 'fa-caret-up' : (current.behavioural - previous.behavioural < 0) ? 'fa-caret-down' : 'fa-caret-right'"></i> {[{ calculatePercent(current.behavioural, previous.behavioural) | number:2 }]}% (REL)</span>
                                             </p>
                                          </div>
                                          <p class="text-center">
                                             <img ng-src="{{ asset('img/') }}/{[{ (current.behavioural - previous.behavioural > 0) ? 'up-arrow.png' : (current.behavioural - previous.behavioural < 0) ? 'down-arrow.png' : 'same-as-before.png' }]}" width="50" height="50">
                                          </p>
                                       </div>
                                    </div>
                                    <!-- /.box -->
                                 </div>
                                 <div class="col-md-4">
                                    <!-- Box Comment -->
                                    <div class="box box-widget">
                                       <!-- /.box-header -->
                                       <div class="box-body">
                                          <div class="progress-group">
                                             <div class="progress sm">
                                                <div class="progress-bar progress-bar-aqua" ng-style="{'width': (((current.satisfaction) / 100)*100) + '%' }"></div>
                                             </div>
                                          </div>
                                          <p class="text-center no-bottom-margin">
                                             <strong>Satisfaction</strong>
                                          </p>
                                          <h3 class="text-primary text-center no-bottom-margin"><b>{[{ current.satisfaction }]}</b></h3>
                                          <p class="text-center" ng-if="current.satisfaction == previous.satisfaction"><strong>No change</strong></p>
                                            <div ng-if="current.satisfaction != previous.satisfaction">
                                                <p class="text-center no-bottom-margin"><strong>Diff. to previous</strong></p>
                                                <p class="text-center no-bottom-margin"><span class="description-percentage" ng-class="(current.satisfaction - previous.satisfaction > 0) ? 'text-green' : (current.satisfaction - previous.satisfaction < 0) ? 'text-red' : 'text-yellow'">
                                                    <i class="fa" ng-class="(current.satisfaction - previous.satisfaction > 0) ? 'fa-caret-up' : (current.satisfaction - previous.satisfaction < 0) ? 'fa-caret-down' : 'fa-caret-right'"></i> {[{ current.satisfaction - previous.satisfaction }]} (ABS)</span>
                                                </p>
                                                <p class="text-center"><span class="description-percentage" ng-class="(current.satisfaction - previous.satisfaction > 0) ? 'text-green' : (current.satisfaction - previous.satisfaction < 0) ? 'text-red' : 'text-yellow'">
                                                    <i class="fa" ng-class="(current.satisfaction - previous.satisfaction > 0) ? 'fa-caret-up' : (current.satisfaction - previous.satisfaction < 0) ? 'fa-caret-down' : 'fa-caret-right'"></i> {[{ calculatePercent(current.satisfaction, previous.satisfaction) | number:2 }]}% (REL)</span>
                                                </p>
                                            </div>
                                          <p class="text-center">
                                             <img ng-src="{{ asset('img/') }}/{[{ (current.satisfaction - previous.satisfaction > 0) ? 'up-arrow.png' : (current.satisfaction - previous.satisfaction < 0) ? 'down-arrow.png' : 'same-as-before.png' }]}" width="50" height="50">
                                          </p>
                                       </div>
                                       <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                 </div>
                                 <div class="col-md-4">
                                    <!-- Box Comment -->
                                    <div class="box box-widget">
                                       <!-- /.box-header -->
                                       <div class="box-body">
                                          <div class="progress-group">
                                             <div class="progress sm">
                                                <div class="progress-bar progress-bar-aqua" ng-style="{'width': (((current.lineup) / 100)*100) + '%' }"></div>
                                             </div>
                                          </div>
                                          <p class="text-center no-bottom-margin">
                                             <strong>Line-Up</strong>
                                          </p>
                                          <h3 class="text-primary text-center no-bottom-margin"><b>{[{ current.lineup }]}</b></h3>
                                          <p class="text-center" ng-if="current.lineup == previous.lineup"><strong>No change</strong></p>
                                          <div ng-if="current.lineup != previous.lineup">
                                                <p class="text-center no-bottom-margin"><strong>Diff. to previous</strong></p>
                                                <p class="text-center no-bottom-margin"><span class="description-percentage" ng-class="(current.lineup - previous.lineup > 0) ? 'text-green' : (current.lineup - previous.lineup < 0) ? 'text-red' : 'text-yellow'">
                                                    <i class="fa" ng-class="(current.lineup - previous.lineup > 0) ? 'fa-caret-up' : (current.lineup - previous.lineup < 0) ? 'fa-caret-down' : 'fa-caret-right'"></i> {[{ current.lineup - previous.lineup }]} (ABS)</span>
                                                </p>
                                                <p class="text-center"><span class="description-percentage" ng-class="(current.lineup - previous.lineup > 0) ? 'text-green' : (current.lineup - previous.lineup < 0) ? 'text-red' : 'text-yellow'">
                                                    <i class="fa" ng-class="(current.lineup - previous.lineup > 0) ? 'fa-caret-up' : (current.lineup - previous.lineup < 0) ? 'fa-caret-down' : 'fa-caret-right'"></i> {[{ calculatePercent(current.lineup, previous.lineup) | number:2 }]}% (REL)</span>
                                                </p>
                                          </div>
                                          <p class="text-center">
                                             <img ng-src="{{ asset('img/') }}/{[{ (current.lineup - previous.lineup > 0) ? 'up-arrow.png' : (current.lineup - previous.lineup < 0) ? 'down-arrow.png' : 'same-as-before.png' }]}" width="50" height="50">
                                          </p>
                                       </div>
                                    </div>
                                    <!-- /.box -->
                                 </div>
                              </div>
                           </div>
                           <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                     </div>
                  </div>
                  <!-- /.box -->
               </section>
               <!-- /.content -->
            </div>
            <!-- /.container -->
         </div>
         <!-- /.content-wrapper -->
         <footer class="main-footer">
            <div class="container">
               <strong>Copyright &copy; 2017 <a href="#">Mitra Intelligence</a>.</strong> All rights
               reserved.
            </div>
            <!-- /.container -->
         </footer>
      </div>
      <!-- ./wrapper -->
      <!-- jQuery 3 -->
      <script src="{{ asset('js/jquery.min.js') }}"></script>
      <!-- Bootstrap 3.3.7 -->
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      <!-- AdminLTE App -->
      <script src="{{ asset('js/adminlte.min.js') }}"></script>
   </body>
</html>