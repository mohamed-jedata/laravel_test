<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <title>Staff</title>

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" />
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body>

        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="index.html" class="logo">
                            <span>Logo</span>
                        </a>
                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras navbar-topbar">

                        <ul class="list-inline float-right mb-0">

                            <li class="list-inline-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>

                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="assets/images/users/avatar.jpg" alt="user" class="rounded-circle"> <h5 class="text-overflow"><small>IFA Administrator</small> </h5>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="zmdi zmdi-power"></i> <span>Logout</span>
                                    </a>

                                </div>
                            </li>

                        </ul>

                    </div> <!-- end menu-extras -->
                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->


            <div class="navbar-custom">
                <div class="container">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
                            <li class="active">
                                <a href="ifa/staff.html" title="Staff"><i class="fa fa-users"></i> <span> Staff</span> </a>
                            </li>
                        </ul>
                        <!-- End navigation menu  -->
                    </div>
                </div>
            </div>
        </header>
        <!-- End Navigation Bar-->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12" style="padding-bottom: 20px;">
                        <div class="btn-group m-t-15">
                            
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card-box table-responsive">
                            <div class="header">
                                <h3>Staff <button class="btn btn-primary waves-effect waves-light pull-right" data-toggle="modal" data-target="#sendInvitation"><i class="fa fa-plus"></i> Create Account</button></h3>
                            </div>

                            <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Last Operation</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>email@example.com</td>
                                        <td>27/09/2017</td>
                                        <td><span class="label label-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>email@example.com</td>
                                        <td>27/09/2017</td>
                                        <td><span class="label label-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>Airi Satou</td>
                                        <td>email@example.com</td>
                                        <td>27/09/2017</td>
                                        <td><span class="label label-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>Brielle Williamson</td>
                                        <td>email@example.com</td>
                                        <td>27/09/2017</td>
                                        <td><span class="label label-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>Herrod Chandler</td>
                                        <td>email@example.com</td>
                                        <td>-</td>
                                        <td><span class="label label-info">Invitation Sent</span></td>
                                    </tr>
                                    <tr>
                                        <td>Rhona Davidson</td>
                                        <td>email@example.com</td>
                                        <td>27/09/2017</td>
                                        <td><span class="label label-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>Colleen Hurst</td>
                                        <td>email@example.com</td>
                                        <td>-</td>
                                        <td><span class="label label-info">Invitation Sent</span></td>
                                    </tr>
                                    <tr>
                                        <td>Sonya Frost</td>
                                        <td>email@example.com</td>
                                        <td>27/09/2017</td>
                                        <td><span class="label label-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>Jena Gaines</td>
                                        <td>email@example.com</td>
                                        <td>27/09/2017</td>
                                        <td><span class="label label-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>Quinn Flynn</td>
                                        <td>email@example.com</td>
                                        <td>27/09/2017</td>
                                        <td><span class="label label-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>Charde Marshall</td>
                                        <td>email@example.com</td>
                                        <td>27/09/2017</td>
                                        <td><span class="label label-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>Haley Kennedy</td>                                        
                                        <td>email@example.com</td>
                                        <td>-</td>
                                        <td><span class="label label-info">Invitation Sent</span></td>
                                    </tr>
                                    <tr>
                                        <td>Tatyana Fitzpatrick</td>
                                        <td>email@example.com</td>
                                        <td>27/09/2017</td>
                                        <td><span class="label label-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>Michael Silva</td>
                                        <td>email@example.com</td>
                                        <td>27/09/2017</td>
                                        <td><span class="label label-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>Paul Byrd</td>
                                        <td>email@example.com</td>
                                        <td>27/09/2017</td>
                                        <td><span class="label label-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>Gloria Little</td>
                                        <td>email@example.com</td>
                                        <td>27/09/2017</td>
                                        <td><span class="label label-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>Bradley Greer</td>
                                        <td>email@example.com</td>
                                        <td>27/09/2017</td>
                                        <td><span class="label label-success">Active</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="sendInvitation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Send Invitation</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <fieldset class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" required/>
                                        </fieldset>
                                        
                                        <fieldset class="form-group">
                                            <label>Email</label>
                                            <input type="email"  name="email" class="form-control" required/>
                                        </fieldset>

                                        <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-paper-plane-o"></i> Send</button>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->


            </div> <!-- container -->


            <!-- Footer -->
            <footer class="footer">
                &copy; 2017. All Righs Reserved.
            </footer>
            <!-- End Footer -->

        </div> <!-- End wrapper -->




        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script><!-- Tether for Bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>

        <!-- Required datatable js -->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="assets/plugins/datatables/jszip.min.js"></script>
        <script src="assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="assets/plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false
                    //buttons: ['copy', 'excel', 'pdf']
                });

                table.buttons().container().appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            } );

        </script>

    </body>
</html>