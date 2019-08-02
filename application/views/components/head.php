<?php
/*
* Filename: head.php
* Filepath: views / components / head.php
* Author: Saddam
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title><?= $title; ?></title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
	<script type="text/javascript" src="<?= base_url('assets/js/jquery.js'); ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
  <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?= base_url('name_finder'); ?>">NameFinder</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?= base_url('name_finder'); ?>">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="<?= base_url('home/about_us'); ?>">About</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Names <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?= base_url('name_finder/add_names'); ?>">Add Names</a></li>
            <li><a href="<?= base_url('name_finder/view_names'); ?>">View Names</a></li>
            <li><a href="<?= base_url('name_finder/search_names'); ?>">Search Names</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="/">Downlads</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?= base_url('name_finder/contact'); ?>">Contact</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control input-sm" placeholder="Search for names..." required>
        </div>
        <button type="submit" name="search" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-search"></span></button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Actions <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li <?php if($this->session->userdata('username')): ?> class="disabled" <?php endif; ?>><a href="<?= base_url('login'); ?>">Login</a></li>
            <li><a href="<?= base_url('login/sign_up'); ?>">Sign Up</a></li>
            <li><a href="<?= base_url('name_finder/sitemap'); ?>">Sitemap</a></li>
            <li role="separator" class="divider"></li>
            <?php if($this->session->userdata('username')): ?>
              <li><a href="<?= base_url('login/logout'); ?>">Logout</a></li>
            <?php else: ?>
              <li><a href="#">Click on the login.</a></li>
            <?php endif; ?>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>