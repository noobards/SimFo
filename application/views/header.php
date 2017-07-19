<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en" ng-app="simFo">
<head>
	<meta charset="utf-8">
	<title>SimForums</title>
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
<body ng-controller="page">
<div class="container-fluid">