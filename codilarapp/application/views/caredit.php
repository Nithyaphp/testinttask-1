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
        
        <!-- Custom Css -->
        <link href="<?php echo base_url(); ?>static/mdesign/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>static/mdesign/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>static/mdesign/css/bootstrap-select.css" rel="stylesheet">
        
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
        <h2>Car Detail Add</h2>
    </div>
    <div class="row clearfix">
        <div class="card">
            <div class="header">
                <h2>
                    Add Form
                </h2>
                <ul class="dropdown-menu pull-right">
                    <li><a href="javascript:void(0);">Action</a></li>
                    <li><a href="javascript:void(0);">Another action</a></li>
                    <li><a href="javascript:void(0);">Something else here</a></li>
                </ul>
            </div>
            <div class="body">
                <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/carcompanycontroller/updatecar" id="myform">
                    <div class="row clearfix addressform">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                <label for="companyname">Company Name<span style="color:red;">*</span></label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="companyname" name="companyname" value="<?php echo $row->companyname; ?>" maxlength="30" minlength="3" required="required" aria-required="true" class="form-control" placeholder="Company Name">
                                        <input type="hidden" id="id" name="id" class="form-control" placeholder="id" value="<?php echo $row->id; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                <label for="model">Model</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="model" name="model" value="<?php echo $row->model; ?>" class="form-control" placeholder="Model">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                <label for="image">Image<span style="color:red;">*</span></label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" id="image" required="required" accept="image/jpg,image/gif,image/jpeg,image/png" name="image" class="form-control" placeholder="image"><br>
                                    </div>
                                    <div class="help-info" id="imgfile">
                                        <p id="ext">upload only jpg,gif,jpeg,png files</p>
                                        <p id="size">Size greater than equal to 5kb</p>
                                    </div>
                                </div>
                            </div>
                        </div-->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                <label for="status">Status<span style="color:red;">*</span></label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <select id="status" name="status" class="form-control selectpicker show-tick">
                                            <?php
                                                if($row->status == 1){
                                                    echo"<option value='0'>In-Active</option>"
                                                    . "<option value='1' selected>Active</option>";
                                                }else if($row->status == 0){
                                                    echo"<option value='0' selected>In-Active</option>"
                                                    . "<option value='1'>Active</option>";
                                                }
                                            
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <button type="submit" class="btn btn-primary waves-effect">Save</button>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <button type="reset" class="btn bg-grey waves-effect pull-center">Clear</button>
                            </div>
                        </div>
                        
                    </div>
                </form>
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
    
    <script src="<?php echo base_url(); ?>static/mdesign/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Moment Plugin Js -->
    <script src="<?php echo base_url(); ?>static/mdesign/plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="<?php echo base_url(); ?>static/mdesign/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    
    <!-- Custom Js -->
    <!--script src="<?php //echo base_url(); ?>static/mdesign/js/admin.js"></script-->

	<script src="<?php echo base_url(); ?>static/mdesign/js/pages/forms/form-validation.js"></script>
    <!-- Demo Js -->
    <script src="<?php echo base_url(); ?>static/mdesign/js/demo.js"></script>
    <script src="<?php echo base_url(); ?>static/mdesign/js/bootstrap-material-datetimepicker.js"></script>
    <script src="<?php echo base_url(); ?>static/mdesign/js/bootstrap-select.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
             $( "#myform" ).validate();

            /* $("#image").change(function(){
                 //alert($("#image")[0].files[0].size);
                var img = $("#image").val();
                
                var res = img.split(".");
                //console.log($.inArray( res[1], ["jpg","gif","jpeg","png"]));
                if($.inArray( res[1], ["jpg","gif","jpeg","png"]) =='-1'){
                    $("#image").val("");
                    $("#imgfile").find("p#size").removeAttr("style");
                    $("#imgfile").find("p#ext").attr("style", "color: red;");
                }else if($.inArray( res[1], ["jpg","gif","jpeg","png"]) !='-1'){
                    $("#imgfile").find("p#ext").removeAttr("style");
                    $("#imgfile").find("p#size").removeAttr("style");
                    if($("#image")[0].files[0].size >= 5120){
                        $("#image").val("");
                        $("#imgfile").find("p#size").attr("style", "color: red;");
                    }else{
                        $("#imgfile").find("p#size").removeAttr("style");
                    }
                }
            });*/
        });
        
       
        
        
    </script>
</body>
</html>