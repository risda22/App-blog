<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
		<title>MyDiaryIzda</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="<?php echo base_url ('style/css/bootstrap.min.css');?>"/>
		<link rel="stylesheet" href="<?php echo base_url ('style/css/style.css');?>">
		
		<script type="text/javascript" src="<?php echo base_url ('style/js/jquery.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url ('style/js/bootstrap.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url ('style/js/bootstrap.js');?>"></script>
		
		<script src="<?php echo base_url();?>assets/js/smoothscroll.js"></script>
		<script src="<?php echo base_url();?>assets/js/scripts.js"></script>
		
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<script>
		// Only enable if the document has a long scroll bar
		// Note the window height + offset
		if ( ($(window).height() + 100) < $(document).height() ) {
			$('#top-link-block').removeClass('hidden').affix({
				// how far to scroll down before link "slides" into view
				offset: {top:100}
			});
		}
		</script>
		
		<style>
			.btn-circle.btn-xl {
			  width: 70px;
			  height: 70px;
			  padding: 10px 16px;
			  font-size: 24px;
			  line-height: 1.33;
			  border-radius: 35px;
			}
		</style>
	</head>	
	<body class="bg-light">
	
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark ">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
        <ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="<?php echo site_url('/home2');?>">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo site_url('/about');?>">About Me</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				 What I'm Doing?
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				<a class="dropdown-item" href="<?php echo site_url('post/blog_BH');?>">Beauty & Healthy</a>
				<a class="dropdown-item" href="<?php echo site_url('post/blog_TL');?>">Think & Love</a>
				<a class="dropdown-item" href="<?php echo site_url('post/blog_PT');?>">Place & Travel</a>
				</div>
			</li>
		</ul>
      </div>
    </nav>