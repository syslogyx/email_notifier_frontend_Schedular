<!DOCTYPE html>
<html>
    <head>
        <base href="/">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Email Notifier</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="shortcut icon" href="/resources/img/favicon.ico">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="/resources/plugins/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="/resources/lib/font-awesome-4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="/resources/lib/ionicons-2.0.1/css/ionicons.min.css">

        <link rel="stylesheet" href="/resources/lib/sweetalert2-6.6.0/sweetalert2.min.css">
        <!--iCheck -->
        <link rel="stylesheet" href="/resources/plugins/iCheck/square/blue.css">
        <link rel="stylesheet" href="/resources/plugins/easyAutoComplete/easyAutocomplete.min.css">

        <!-- Theme style -->
        <link rel="stylesheet" href="/resources/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="/resources/css/skins/_all-skins.css">
        <!-- css default skin: _all-skins.min.css   -->

        <link rel="stylesheet" href="/resources/lib/bootstrap-3.1.1/css/bootstrap.min.css">

        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <!-- Data Table -->
        <link rel="stylesheet" type="text/css" href="/resources/lib/datatables-1.10.15/css/datatables.min.css"/>

        <!--<link rel="stylesheet" href="resources/css/style.css">-->

        <link rel="stylesheet" href="/resources/lib/angular-toggle-switch-master/angular-toggle-switch.css">
        <link rel="stylesheet" href="/resources/lib/angular-toggle-switch-master/angular-toggle-switch-bootstrap.css">
        <link rel="stylesheet" href="/resources/lib/angular-block-ui-master/dist/angular-block-ui.min.css"/>

        <link rel="stylesheet" href="/resources/plugins/datepicker/datepicker3.css">

        <link rel="stylesheet" href="/resources/bower_components/bootstrap-daterangepicker/daterangepicker.css">
        <link rel="stylesheet" type="text/css" href="/resources/plugins/timepicker/bootstrap-timepicker.min.css" />
        <link href="/resources/bower_components/bootstrap-toggle-master/css/bootstrap-toggle.min.css" rel="stylesheet">
        <!-- Select2 -->
        <link rel="stylesheet" href="/resources/plugins/select2/select2.min.css">

        <!-- Custom common style -->
        <link rel="stylesheet" type="text/css" href="/resources/css/commonStyle.css"/>

        <link rel="stylesheet" type="text/css" href="/resources/css/sweetalert-master/dist/sweetalert.css">
        <!-- pie_chart -->
        <link rel="stylesheet" href="/resources/pie_chart/jqwidgets/styles/jqx.base.css" type="text/css" />

        <link href="/resources/css/ziehharmonika.css" rel="stylesheet">
        <!-- dropzone -->
        <!--  <link rel="stylesheet" type="text/css" href="/resources/dropzone/dropzone.css"> -->
        <script src="/resources/js/sweetalert-master/dist/sweetalert.min.js"></script>
        <!-- Material design icons -->
        <link rel="stylesheet" type="text/css" href="/resources/node_modules/mdi/css/materialdesignicons.min.css">

        <!-- Material design icons -->
        <link rel="stylesheet" type="text/css" href="/resources/css/animate.css">

        <!-- For toaster alert section -->
        <link rel="stylesheet" href="/resources/bower_components/toastr/toastr.min.css">


        <style>
            [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-    ng-cloak{
                display: none !important;
            }
            .Blink {
                animation: blinker 1.5s cubic-bezier(.5, 0, 1, 1) infinite alternate;
            }
            @keyframes blinker {
                from { opacity: 1; }
                to { opacity: 0; }
            }

            .skin-blue .sidebar-menu > li:hover > a, .skin-blue .sidebar-menu > li.active > a {
                outline:0;
                text-decoration: none;
            }
            #userSection:hover {
                background-color: #005998 !important;
            }
            #userSection{
                background-color: #005998 !important;
            }
            @media (max-width: 1200px) {
                #logoutDiv{
                    margin-top: 0% !important;
                }   
            }
            #logoutDiv{
                    margin-top: 18%;
                }
        </style>
    </head>

    <body ng-app="myapp" class="hold-transition skin-blue sidebar-mini ng-cloak" ng-cloak="" ui-view autoscroll="false" >
        <div id="loading" style="display:none;">
            <img id="loading-image" src="resources/img/loader.gif" alt="Loading..." />
        </div>
        <!-- Site wrapper -->
        <div class="wrapper">
            <div ng-controller="menuCtrl" >
                <header class="main-header">
                    <!-- Logo -->
                    <a href="/" class="logo">
                        <!-- mini logo for sidebar mini 50x50 pixels -->
                        <img src="/resources/img/Syslogyx_logo_samll.png" style="    padding-left: 7px; padding-top: 7px;" class="logo-mini">
                        <!-- logo for regular state and mobile devices -->
                        <img src="/resources/img/syslogyx_logo.png" style="padding-left: 46px;" class="logo-lg">
                    </a>
                    <!-- Header Navbar: style can be found in header.less -->
                    <nav class="navbar navbar-static-top" >
                        <!-- Sidebar toggle button-->
                        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button" >
                            <span class="sr-only">Toggle navigation</span>
                        </a>

                        <div class="navbar-custom-menu" ng-controller="homeCtrl">
                            <ul class="nav navbar-nav" >
                                <li class="dropdown notifications-menu" style='display:none'> 
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-bell-o"></i>
                                        <span class="label label-warning" ng-if='deviceStatusDataList.flag=="True"'>1</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="header">You have {{deviceStatusDataList.flag=='True'?1:0}} notifications</li>
                                        <li>
                                        <!-- inner menu: contains the actual data -->
                                            <ul class="menu" >
                                                <li ng-if='deviceStatusDataList.flag=="True"'>
                                                    <a href="" ng-click="pagelink();" style="white-space: inherit;">
                                                        <i class="fa fa-cogs text-aqua"></i>Machine '<b>{{deviceStatusDataList.machine.name}}</b>' is turned '<b>OFF</b>'. Please give time estimation.
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown user user-menu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="userSection">
                                        <img src="resources/img/default_profile.png" class="user-image" alt="User Image">
                                    </a>
                                    <ul class="dropdown-menu" id="logoutDiv">
                                      <!-- User image -->
                                        <li class="user-header">
                                            <img src="resources/img/default_profile.png" class="img-circle" alt="User Image">
                                            <p>
                                                <span ng-href="" style="color: white;">{{name}}</span>
                                            </p>
                                        </li>

                                      <!-- Menu Footer-->
                                        <li class="user-footer">
                                            <div class="pull-left">
                                                <button type="button" class="btn btn-default btn-md" title="Update Profile" data-ng-click="getUserData()">Update Profile
                                                </button>
                                            </div>
                                            <div class="pull-right">
                                                <button type="button" class="btn btn-default btn-md" title="Logout" data-ng-click="clearToken()">Logout
                                                </button>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </header>

                <!-- =============================================== -->

                <!-- Left side column. contains the sidebar -->
                <aside class="main-sidebar " >
                    <!-- sidebar: style can be found in sidebar.less -->
                    <section class="sidebar">
                        <!-- Sidebar user panel -->
                        <div class="user-panel push-menu">
                            <div class="pull-left image">
                                <img src="resources/img/default_profile.png" class="img-circle" alt="User Image">
                            </div>
                            <div class="pull-left info">
                                <p>{{name}}</p>
                            </div>
                        </div>
                        <!-- sidebar menu: : style can be found in sidebar.less -->
                        <ul class="sidebar-menu" data-widget="treeview" role="menu">
                            <!-- Dashboard Menu -->
                            <li ng-repeat = "item in menuList" ng-click="menuClick(item.Link)" class="{{item.active}}">
                                <a href="{{item.Link}}" id="{{item.id}}"  style="outline:0;text-decoration: none;">
                                    <i class="{{item.icon}}"></i> <span>{{item.Title}}</span>
                                </a>
                            </li>
                        </ul>
                    </section>
                    <!-- /.sidebar -->
                </aside>

                <!-- Modal for adding new project resource -->
                <div class="modal fade" id="updateUserModal" role="dialog">
                    <div class="modal-dialog modal-md">
                        <form role="form" name="updateUserForm" id="updateUserForm">
                            <div class="modal-content">
                                <div class="modal-header" id="popUpModalHeader">
                                    <button type="button" class="close" data-dismiss="modal" style="margin-right: 5px;">&times;</button>
                                    <h4 class="modal-title popUpModalTitle">Update User Profile</h4>
                                </div>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="mandatory" for="">Name</label>
                                                    <input type="text" class="form-control" name="userName" ng-model="userName" placeholder="Enter user name">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mandatory" for="">Email</label>
                                                    <input type="text" class="form-control" name="userEmail" ng-model="userEmail" placeholder="Enter email">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="mandatory" for="">Password</label>
                                                    <input type="text" class="form-control" name="userProfilePassword"  id="userProfilePassword" ng-model="userpassword" placeholder="Enter password">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mandatory" for="">Mobile</label>
                                                    <input type="text" class="form-control" id="mobileNo" name="mobileNo" ng-model="mobileNo" placeholder="Enter mobile number">
                                                </div>
                                            </div>
                                         </div>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <div class="pull pull-right">
                                        <input type="submit" id="saveProfileBtn" value="Save" data-ng-click="saveUser()" class="btn btn-success"/>
                                        <!-- <input ng-if="tec.title == 'Add New Technology'" type="reset" value="Reset" ng-click="resetForm()" class="btn" /> -->
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div ng-controller="homeCtrl" class="modal fade deviceEstimationModal" id="deviceEstimationModal" role="dialog">
                    <div class="modal-dialog modal-md">
                        <form id="deviceEstimationForm">
                            <div class="modal-content" style="border-radius: 0px!important;" >
                                <div class="modal-header" id="popUpModalHeader"> 
                                    <button type="button" class="close" data-dismiss="modal" ng-click="resetForm()" style="margin-right: 5px;">&times;</button>
                                    <h4 class="modal-title popUpModalTitle">User Estimation</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12" style="margin-top: 1%;">
                                            <div class="col-md-6" style="padding: 1px;">
                                                <label class="mandatory" style="font-size: 14px">Estimation(In HH:MM) </label>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id ="estimationHr" name="estimationHr" ng-model="estimationHr" placeholder="Hour">
                                                </div>
                                            </div>
                                            <div class="col-md-6" style="padding: 1px;">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id ="estimationMin" name="estimationMin" ng-model="estimationMin" placeholder="Minute" style="margin-top:9.5%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12" style="margin-top: 1%;">
                                            <div class="form-group">
                                                <label class="mandatory" style="font-size: 14px">Comment</label>
                                                <textarea class="form-control" id="comment" name="comment" ng-model="comment" rows="2"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer" style="margin-top: 0px;"> 
                                    <button type="button" id="changeStatusBtn" class="btn btn-primary"  data-ng-click="addEstimationStatus();" >Save</button>
                                    <button type="reset" id="closeModal" class="btn btn-warning"  ng-click="resetForm()" data-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper" >
                <div id="viewPort" data-ng-view ></div>
            </div>
            <!-- /.content-wrapper -->

            <div ng-controller="menuCtrl" >
                <footer class="main-footer">
                    <div class="pull-right hidden-xs">
                      <b>Version</b> 0.2
                    </div>
                    <strong>Copyright &copy; 2018 <a href="http://www.syslogyx.com/">Syslogyx Technologies Pvt. Ltd.</a></strong> All rights
                    reserved.
                </footer>

                <div class="pm_uploader_container pmct">
                    <div class="pm_uploader_head">
                        <h4 >Uploading 1 file</h4>
                        <a href="" class="pm_close"><i class="mdi mdi-close"></i></a>
                    </div>
                    <div class="pm_uploader_body">
                        <div class="file_info">
                            sbfkjqhnkasnd.jpg
                        </div>
                        <div class="file_activity">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                     aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                    <span class="sr-only">70% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- ./wrapper -->
        <div data-ng-controller="sidebarCtrl" id="sidebarComponent">
                <div ng-include="'resources/templates/comp_user_info.html'"></div>
        </div>

        <!-- jQuery 3 -->
        <script src="/resources/plugins/jquery/dist/jquery.min.js"></script>
        <!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> -->
        <!-- jQuery UI 1.11.4 -->
        <script src="/resources/plugins/jquery-ui/jquery-ui.min.js"></script>

        <!-- Bootstrap 3.3.6 -->
        <script src="/resources/js/bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="/resources/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="/resources/plugins/fastclick/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="/resources/js/app.min.js"></script>
        <script src="/resources/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="/resources/js/demo.js"></script>

        <!--jQuery Cookies -->
        <script src="/resources/bower_components/jquery-cookie-master/src/jquery.cookie.js"></script>

        <!-- Data Table -->
        <script type="text/javascript" src="/resources/lib/datatables-1.10.15/js/datatables.min.js"></script>

        <script src="/resources/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
        <script src="/resources/plugins/iCheck/icheck.min.js"></script>

        <script src="/resources/lib/angular-1.4.8/angular.min.js"></script>
         <!-- For tagging user in mom-task section -->
        <script src="https://jeff-collins.github.io/ment.io/dist/mentio.js"></script>

        <script src="/resources/lib/angular-1.4.8/angular-route.js"></script>
        <script src="/resources/bower_components/angular-acl/angular-acl.js"></script>
        <script src="/resources/bower_components/angular-cookies/angular-cookies.js"></script>
        <script src="/resources/bower_components/breadcrum/ng-breadcrumbs.min.js"></script>
        <!-- <script src="/resources/bower_components/breadcrum/ng-breadcrumbs.js"></script> -->

        <script src="/resources/lib/sweetalert2-6.6.0/sweetalert2.min.js"></script>
        <!--<script src="/resources/plugins/jquery-validation/dist/jquery.validate.min.js"></script>-->
        <script src="/resources/plugins/iCheck/icheck.min.js"></script>
        <!-- CK Editor -->
        <script src="/resources/plugins/ckeditor/ckeditor.js"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="/resources/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

        <!-- For toaster alert -->
        <script src="/resources/bower_components/toastr/toastr.min.js"></script>

        <!-- date-range-picker -->
        <script src="/resources/lib/moment/moment.min.js"></script>
        <script src="/resources/plugins/daterangepicker/daterangepicker.js"></script>
        <script src="/resources/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

        <!-- bootstrap datepicker -->
        <script src="/resources/plugins/datepicker/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="/resources/plugins/timepicker/bootstrap-timepicker.min.js"></script>
        <script src="/resources/bower_components/bootstrap-toggle-master/js/bootstrap-toggle.min.js"></script>
        <!-- Select2 -->
        <script src="/resources/plugins/select2/select2.full.min.js"></script>
        <!-- TwoPagination Plugin -->
        <script src="/resources/plugins/jquery.twbsPagination/jquery.twbsPagination.min.js"></script>

        <script src="https://cdn.ravenjs.com/3.17.0/raven.min.js" crossorigin="anonymous"></script>

        <!-- Ck editor liberary f -->
        <script type="text/javascript" src="/resources/lib/ckeditor-new/ckeditor.js"></script>
        <script type="text/javascript" src="/resources/lib/ckeditor-new/jquery.js"></script>

        <script src="/resources/js/ui-bootstrap-tpls.js"></script>
        <script src="/resources/js/angular-breadcrumb.js"></script>
        <!-- pdf -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>

        <script src="/resources/plugins/easyAutoComplete/easyAutocomplete.min.js"></script>

        <script type="text/javascript" src="/resources/pie_chart/jqwidgets/jqxcore.js"></script>
        <script type="text/javascript" src="/resources/pie_chart/jqwidgets/jqxdraw.js"></script>
        <script type="text/javascript" src="/resources/pie_chart/jqwidgets/jqxchart.core.js"></script>
        <!-- <script type="text/javascript" src="scripts/demos.js"></script> -->
        <script type="text/javascript" src="/resources/pie_chart/jqwidgets/jqxdata.js"></script>
    
        <script src="/resources/js/myapp.js"></script>
        <script type="text/javascript">
            var _c = new Date().getTime();
            var controllerList=[
                                    "homeCtrl",
                                    "loginCtrl",
                                    "deviceCtrl",
                                    "menuCtrl",
                                    "userCtrl",
                                    "settingsCtrl",
                                    "machineCtrl",
                                    "createMachineCtrl",
                                    "deviceManagmentCtrl",
                                    "createDeviceCtrl",
                                    "assignMachineCtrl",
                                    "reportCtrl",
                                    "analyticsCtrl"
                                  ];

            document.write('<script type="text/javascript" src="/resources/js/myapp.js?v='+_c+'"><\/script>');

            for(var i=0;i<controllerList.length;i++){
                document.write('<script type="text/javascript" src="/controller/'+controllerList[i]+'.js?v='+_c+'"><\/script>');
            }
        </script>
        <script >
            $( window ).scroll(function() {
                $(".date-picker").blur();
            });

            $(window).on('popstate', function(event) {
                // console.log("back button clicked");
                $(".modal").modal("hide");
                $('.modal-backdrop').remove();
                // $('.modal').remove();
                $("body").removeClass("modal-open");
                $("body").css("padding-right", "0px");
            });
        </script>
        <script>
            var clickedOnScrollbar = function(mouseX){
                if( $(window).outerWidth() <= mouseX ){
                return true;
                }
            }

            $(document).mousedown(function(e){
                if( clickedOnScrollbar(e.clientX) ){
                    $(".date-picker").blur();
                }
            });
        </script>
        <script>
            $(document).ready(function () {

                $.validator.addMethod('regex', function (value, element, regexp) {
                    if (regexp.constructor != RegExp)
                        regexp = new RegExp(regexp);
                    else if (regexp.global)
                        regexp.lastIndex = 0;
                    return this.optional(element) || regexp.test(value);
                }, 'Please enter a valid Email Address.');

                $.validator.addMethod("number", function (phone_number, element){
                    phone_number = phone_number.replace(/\s+/g, "");
                    return this.optional(element) || phone_number.length > 9 &&
                            phone_number.match(/^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/);
                }, 'Please enter a valid mobile number.');

                $("#updateUserForm").validate({
                    errorElement: 'span', //default input error message container
                    errorClass: 'help-block help-block-error',
                    errorPlacement: function (error, element) {

                        var type = $(element).attr("type");
                        if ($(element).attr("id") === "mobileNo")
                        {
                            // custom placement
                            element.parent().append(error);
                        } else {
                            error.insertAfter(element);
                        }
                    },
                    focusInvalid: true, // set focus the last invalid input
                    ignore: [], // validate all fields including form hidden input
                    rules: {
                        userName: {
                            required: true
                        },
                        userEmail: {
                            required: true,
                            regex: /\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b/i
                        },

                        mobileNo: {
                            required:true,
                            number: true,
                            minlength: 10,
                            maxlength: 12,
                        }
                    },
                    messages: {
                        userName: {
                            required: "User name is required."
                        },
                        userEmail: {
                            required: "Email is required."
                        },
                        userProfilePassword: {
                            required: "Password is required."
                        },
                        mobileNo: {
                            required: "Mobile No. is required",
                            maxlength:"Please enter at least 12 digits"
                        }
                    },
                    highlight: function (element) { // hightlight error inputs
                        $(element)
                                .closest('.form-group').addClass('has-error');
                        $(element)
                                .next().children().children().attr('style', 'border-color:#dd4b39!important');
                        // set error class to the control group
                    },
                    unhighlight: function (element) { // revert the change done by hightlight
                        $(element)
                                .closest('.form-group').removeClass('has-error');
                        $(element)
                                .next().children().children().attr('style', 'border-color:'); // set error class to the control group
                    },
                    success: function (label) {
                        label
                                .closest('.form-group').removeClass('has-error'); // set success class to the control group
                    }
                });
            });
        </script>
        <script>
            $("#deviceEstimationForm").validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error',
                errorPlacement: function (error, element) {

                    var type = $(element).attr("type");
                    if ($(element).attr("id") === "")
                    {
                        element.parent().append(error);

                    } 
                    else {
                        error.insertAfter(element);
                    }
                },
                rules: {
                    estimationHr: {
                        required: true,
                        digits:true
                    },
                    estimationMin:{
                        required: true,
                        digits:true,
                        range: [0, 59],
                    },
                    comment: {
                        required: true
                    }
                },
                messages: {
                    estimationHr: {
                        required: "Estimation hour is required.",
                        digits:"Enter estimation hours in digits."
                    },
                    estimationMin: {
                        required: "Estimation minute is required.",
                        digits:"Enter estimation minutes in digits.",
                        range:"Enter minute in between 0 to 59."
                    },
                    comment: {
                        required: "Comment is required."
                    }
                },
                highlight: function (element) { // hightlight error inputs
                    $(element).closest('.form-group').addClass('has-error');

                    $(element).next().children().children().attr('style', 'border-color:#dd4b39!important');
                    // set error class to the control group
                },
                unhighlight: function (element) { // revert the change done by hightlight
                    $(element).closest('.form-group').removeClass('has-error');
                    $(element).next().children().children().attr('style', 'border-color:'); // set error class to the control group
                },
                success: function (label) {
                    label.closest('.form-group').removeClass('has-error'); // set success class to the control group
                }
            });
        </script>
    </body>
</html>
