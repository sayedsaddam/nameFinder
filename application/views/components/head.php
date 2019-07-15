<!DOCTYPE html>
<html>
<head>
	<title><?= $title; ?></title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
	<script type="text/javascript" src="<?= base_url('assets/js/jquery.js'); ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-inverse">
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
        <li><a href="#">About</a></li>
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
          <input type="text" class="form-control" placeholder="Search for names..." required>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Actions <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?= base_url('login/sign_in'); ?>">Login</a></li>
            <li><a href="<?= base_url('login/sign_up'); ?>">Sign Up</a></li>
            <li><a href="<?= base_url('name_finder/sitemap'); ?>">Sitemap</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Divider</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>