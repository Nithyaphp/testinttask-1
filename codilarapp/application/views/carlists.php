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

        <!-- Custom Css -->
        <link href="<?php echo base_url(); ?>static/mdesign/css/style.css" rel="stylesheet">

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
        <h3>Car Detail</h3>
    </div>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Car List
                    </h2>
                    <div class="pull-right">
                        <a href="<?php echo base_url(); ?>index.php/carcompanycontroller/addcarcompany" role="button" aria-haspopup="true" aria-expanded="false">
                            <button type="button" class="btn btn-primary btn-circle waves-effect waves-circle waves-float" title="ADD">
                                <i class="material-icons">add</i>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="body table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>S.no</th>
                                <th>Company Name</th>
                                <th>Model</th>
                                <!--th>Image</th-->
                                <th>Status</th>
                                <th>Acton</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i = 1;
                                if($records){
                                    foreach($records as $row) { 
                                        echo "<tr>"; 
                                        echo "<td>".$i."</td>"; 
                                        echo "<td>".$row->companyname."</td>";
                                        echo "<td>".$row->model."</td>";
                                        //echo "<td>Image</td>";
                                        echo "<td>";
                                        if($row->status == 1){
                                            echo"Active";
                                        }else if($row->status == 0){
                                            if($row->isdeleted == 0){
                                                echo"In-Active";
                                            }else if($row->isdeleted == 1){
                                                echo"Deleted";
                                            }                                        
                                        }
                                        echo"</td>";
                                        echo "<td><a href = '".base_url()."index.php/carcompanycontroller/editcar/".$row->id."'>"
                                                . "<button type='button' class='btn btn-success btn-circle waves-effect waves-circle waves-float' title='Delete'>"
                                                . "<i class='material-icons'>edit</i></button></a>"; 
                                        echo "&nbsp;&nbsp;<a href = '".base_url()."index.php/carcompanycontroller/deletecar/".$row->id."'>"
                                                . "<button type='button' class='btn bg-deep-orange btn-circle waves-effect waves-circle waves-float' title='Delete'>"
                                                ."<i class='material-icons'>delete</i></button></a>"; 
                                        echo "&nbsp;&nbsp;<a href = '".base_url()."index.php/carcompanycontroller/carcompanyview/".$row->id."'>"
                                                . "<button type='button' class='btn bg-blue btn-circle waves-effect waves-circle waves-float' title='View'>"
                                                ."<i class='material-icons'>pageview</i></button></a></td>"; 

                                        echo "<tr>"; 
                                        $i++;
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
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

    <!-- Custom Js -->
    <script src="<?php echo base_url(); ?>static/mdesign/js/admin.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url(); ?>static/mdesign/js/demo.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url(); ?>static/mdesign/js/demo.js"></script>
    
</body>
</html>