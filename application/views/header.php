<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CATCH Surveillance Database</title>
    <link rel="stylesheet" href="<?php echo base_url("/assets/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("/assets/css/datatables.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("/assets/css/jquery-ui.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("/assets/css/sb-admin.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("/assets/css/rs.css"); ?>">
    <script type="text/javascript" src="<?php echo base_url('/assets/js/jquery-1.11.3.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('/assets/js/datatables.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('/assets/js/jquery-ui.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("/assets/js/bootstrap.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("/assets/js/chart.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("/assets/js/rs.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("/assets/js/jqBarGraph.1.1.min.js"); ?>"></script>
    <script>
        var base_url = '<?php echo base_url(); ?>';
    </script>
</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a style="color: white;" class="navbar-brand" href="<?php echo site_url('home'); ?>">Catch Surveillance Database</a>
        </div>

        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">

            <form action="<?php echo base_url(); ?>index.php/child/search" method="post"
                  class="navbar-form navbar-left">
                <div class="input-group">
                    <input type="text" name="keyword" placeholder="Enter Key Words" class="form-control"/>
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-default">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>
                </div>
            </form>

            <?php
            $checkUsername = $this->session->userdata('username');

            if (isset($checkUsername)) {
                echo '<li><a href="javascript: configure_system();">Configure System</a> </li>';
                echo '<li><a href="javascript: change_password();">User: ' . $this->session->userdata('username') . ' </a></li>';
                echo '<li><i class="fa fa-fw fa-power-off"></i><a href="javascript: logout();">Log Out</a></li>';
            }
            ?>


        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">

                <li class="<?php echo active_link('home'); ?>">
                    <a href="<?php echo site_url('home'); ?>">
                        <i class="glyphicon glyphicon-home"></i> Home</a>
                </li>

                <li class="<?php echo active_link('case_file'); ?>">
                    <a href="<?php echo site_url('case_file/listAll'); ?>">
                        <i class="glyphicon glyphicon-info-sign"></i> Case Files</a>
                </li>

                <li class="<?php echo active_link('arrest'); ?>">
                    <a href="<?php echo site_url('arrest/listAll'); ?>">
                        <i class="glyphicon glyphicon-info-sign"></i> Arrest Files</a>
                </li>

                <li class="<?php echo active_link('detention'); ?>">
                    <a href="<?php echo site_url('detention/listAll'); ?>">
                        <i class="glyphicon glyphicon-info-sign"></i> Detention Files</a>
                </li>

                <li class="<?php echo active_link('assesment'); ?>">
                    <a href="<?php echo site_url('assesment/listAll'); ?>">
                        <i class="glyphicon glyphicon-info-sign"></i> HR Violation Files</a>
                </li>

                <li class="<?php echo active_link('assesment'); ?>">
                    <a href="<?php echo site_url('release/listAll'); ?>">
                        <i class="glyphicon glyphicon-info-sign"></i> Release Files</a>
                </li>

                <li class="<?php echo active_method('upload_result'); ?>">
                    <a href="<?php echo site_url('case_file/upload_result'); ?>">
                        <i class="glyphicon glyphicon-upload"></i> Upload History</a>
                </li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

        <div class="container-fluid">

