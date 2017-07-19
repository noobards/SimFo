<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en" ng-app="simFo">
<head>
	<meta charset="utf-8">
	<title>SimForums - Login</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/theme.css">
	
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/angularjs.min.js"></script>
	<script type="text/javascript">
	var simFo = {};
	simFo.baseUrl = '<?= base_url(); ?>';
	simFo.siteUrl = '<?= site_url(); ?>';
	</script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/simFo.js"></script>
</head>
<body ng-controller="login">
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="form-group">
				<label class="control-label" for="un">Email Address:</label>
				<input type="text" id="un" ng-model="data.un" class="form-control">
			</div>
			<div class="form-group">
				<label class="control-label" for="pw">Password:</label>
				<input type="password" id="pw" ng-model="data.pw" class="form-control">
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<button ng-click="authenticate($event)" class="btn btn-primary">Login</button>
					</div>
					<div class="col-md-6 text-right">
						<a href="#">Forgot Password?</a>
					</div>
				</div>				
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/angularjs/login.js"></script>
</body>
</html>