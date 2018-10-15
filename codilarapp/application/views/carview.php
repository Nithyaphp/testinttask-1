<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Codilar App - API</title>

        <link rel="icon" href="<?php echo base_url(); ?>static/images/codilaricon.png" type="image/png">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

        <!-- Bootstrap Core Css -->
        <link href="<?php echo base_url(); ?>static/mdesign/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- Waves Effect Css -->
        <link href="<?php echo base_url(); ?>static/mdesign/plugins/node-waves/waves.css" rel="stylesheet" />

        <!-- Animation Css -->
        <link href="<?php echo base_url(); ?>static/mdesign/plugins/animate-css/animate.css" rel="stylesheet" />
        
        <!-- Bootstrap Material Datetime Picker Css -->
        <link href="<?php echo base_url(); ?>static/mdesign/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
        
        <!-- Wait Me Css -->
        <link href="<?php echo base_url(); ?>static/mdesign/plugins/waitme/waitMe.css" rel="stylesheet" />

        <!-- Bootstrap Select Css -->
        <link href="<?php echo base_url(); ?>static/mdesign/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
        
            <!-- Light Gallery Plugin Js -->
        <!--script src="<?php echo base_url(); ?>static/mdesign/plugins/light-gallery/js/lightgallery-all.js"></script-->

        <!-- Custom Js -->
        <!--script src="<?php //echo base_url(); ?>static/mdesign/js/pages/medias/image-gallery.js"></script-->
        
        <!-- Custom Css -->
        <link href="<?php echo base_url(); ?>static/mdesign/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>static/mdesign/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>static/mdesign/css/bootstrap-select.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>static/mdesign/plugins/light-gallery/css/lightgallery.css" rel="stylesheet">
        
        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="<?php echo base_url(); ?>static/mdesign/css/themes/all-themes.css" rel="stylesheet" />

	<style type="text/css">

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	</style>
</head>
<body>

<div id="container">
    <div class="block-header">
        <h2>Student Detail View</h2>
    </div>
    <div class="row clearfix">
        <div class="card">
            <div class="header">
                <h2>
                    Student Profile
                    <small>Detail of student</small>
                </h2>
                <ul class="dropdown-menu pull-right">
                    <li><a href="javascript:void(0);">Action</a></li>
                    <li><a href="javascript:void(0);">Another action</a></li>
                    <li><a href="javascript:void(0);">Something else here</a></li>
                </ul>
            </div>
            
            <div class="body">
                <div id="aniimated-thumbnials" class="list-unstyled row clearfix ">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                            <label for="companyname">Company Name  : </label>
                            &nbsp;
                             <?php 
                             echo $row->companyname; ?>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                            <label for="model">Model : </label>
                            &nbsp;
                             <?php echo $row->model; ?>
                        </div>
                    </div>
                    <!--div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">    
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                            <label for="image"> Image  : </label>
                            &nbsp;
                            <img src="<?php //echo $row->image; ?>" width="30%" height="30%">
                        </div>
                    </div-->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">    
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                            <label for="status">Age  : </label>
                            &nbsp;
                             <?php echo $row->status; ?>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">    
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                            <label for="createddate">Created Date  : </label>
                            &nbsp;
                             <?php echo $row->created_date; ?>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">    
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                            <label for="updateddate">Updated Date  : </label>
                            &nbsp;
                             <?php echo $row->updated_date; ?>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">    
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                            <label for="deleteddate">Deleted Date  : </label>
                            &nbsp;
                             <?php 
                                if(!$row->isdeleted){
                                    echo"Not Deleted";
                                }else{
                                    echo $row->isdeleted; 
                                }
                             ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Jquery Core Js -->
    <script src="<?php echo base_url(); ?>static/mdesign/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url(); ?>static/mdesign/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url(); ?>static/mdesign/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url(); ?>static/mdesign/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url(); ?>static/mdesign/plugins/node-waves/waves.js"></script>

    <!-- Autosize Plugin Js -->
    <script src="<?php echo base_url(); ?>static/mdesign/plugins/autosize/autosize.js"></script>

    <!-- Moment Plugin Js -->
    <script src="<?php echo base_url(); ?>static/mdesign/plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="<?php echo base_url(); ?>static/mdesign/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    
    <!-- Custom Js -->
    <!--script src="<?php //echo base_url(); ?>static/mdesign/js/admin.js"></script-->

    <!-- Demo Js -->
    <script src="<?php echo base_url(); ?>static/mdesign/js/demo.js"></script>
    <script src="<?php echo base_url(); ?>static/mdesign/js/bootstrap-material-datetimepicker.js"></script>
    <script src="<?php echo base_url(); ?>static/mdesign/js/bootstrap-select.js"></script>

    <script type="text/javascript">
        
    </script>
</body>
</html>