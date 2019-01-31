<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>



		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
			<div class="carousel-item active">
			  <img class="d-block w-100" src="<?php echo base_url ('style/img/slide.jpg');?>" alt="First slide">
				<div class="carousel-caption">
					<h3>Los Angeles</h3>
					<p>LA is always so much fun!</p>
				</div>
			</div>
			<div class="carousel-item">
			  <img class="d-block w-100" src="<?php echo base_url ('style/img/slide3.jpg');?>" alt="Second slide">
			  <div class="carousel-caption">
					<h3>Los Angeles</h3>
					<p>LA is always so much fun!</p>
				</div>
			</div>
			<div class="carousel-item">
			  <img class="d-block w-100" src="<?php echo base_url ('style/img/slide2.jpg');?>" alt="Third slide">
			  <div class="carousel-caption">
					<h3>Los Angeles</h3>
					<p>LA is always so much fun!</p>
				</div>
			</div>
		 </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>
	<br>
	
	<div class="container ">
		<div class="row">
			<div class="col">
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="<?php echo base_url ('style/img/286x180.svg');?>" alt="Card image cap">
					 <div class="card-body d-flex flex-column align-items-start">
						  <strong class="d-inline-block mb-2 text-primary">Health</strong>
						  <h3 class="mb-0">
							<a class="text-dark" href="#">Featured post</a>
						  </h3>
						  <div class="mb-1 text-muted">Nov 12</div>
						  <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
						  <a href="<?php echo site_url('post/view_blog');?>">Continue reading »</a>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="<?php echo base_url ('style/img/286x180.svg');?>" alt="Card image cap">
					  <div class="card-body d-flex flex-column align-items-start">
					  <strong class="d-inline-block mb-2 text-success">Beauty</strong>
						  <h3 class="mb-0">
							<a class="text-dark" href="#">Post title</a>
						  </h3>
						  <div class="mb-1 text-muted">Nov 11</div>
						  <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
						  <a href="<?php echo site_url('post/view_blog');?>">Continue reading »</a>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="<?php echo base_url ('style/img/286x180.svg');?>" alt="Card image cap">
				  <div class="card-body d-flex flex-column align-items-start">
						  <strong class="d-inline-block mb-2 text-danger">love</strong>
						  <h3 class="mb-0">
							<a class="text-dark" href="#">Featured post</a>
						  </h3>
						  <div class="mb-1 text-muted">Nov 12</div>
						  <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
						  <a href="<?php echo site_url('post/view_blog');?>">Continue reading »</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	
</body>
