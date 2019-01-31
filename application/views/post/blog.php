<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>


<body class="bg-light">
	<div class="jumbotron p-7 p-md-9 text-white" style="background-image: url(http://[::1]/app/style/img/slide.jpg)">
		<div class="container">
			<div class="col-md-6 px-0">
			  <h1 class="display-4 font-italic"  style="justify-content: center"><?= $title ?></h1>
			  <p class="lead my-3"><?= $quote ?></p>
			 
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row mb-2">
			<?php foreach($post as $post):?>
			<div class="col-md-6">
			  <div class="card flex-md-row mb-3 box-shadow h-md-250">
				<div class="card-body d-flex flex-column align-items-start">
				  <strong class="d-inline-block mb-2 "><?php echo $post['category'];?></strong>
				  <h5 class="mb-0">
					<a class="text-dark" href="#"><?php echo $post['title'];?></a>
				  </h5>
				  <div class="mb-1 text-muted"><?php echo $post['creat_at'];?> by <a href="#"><?php echo $post['creat_name'];?></a></div>
				  <p class="card-text mb-auto"><?php echo $post['short_post'];?></p>
				  <a href="<?php echo site_url('view/'.$con.'/'.$post['slug']);?>">Continue reading »</a>
				</div>
				<img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="<?php echo $post['picture'];?>" data-holder-rendered="true">
			  </div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
	<hr>

	<div class="row justify-content-md-center">
		<nav class="blog-pagination">
			<a class="btn btn-outline-secondary disabled" href="#">Newer</a>
			<a class="btn btn-outline-primary" href="#">Older</a>
		</nav>
	</div>
	<br>
</body>