<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>


<body>
	<main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron" style="background-image: url(http://[::1]/app/style/img/baner.jpg">
        <div class="container">
			<br>
			<h1 class="mb-0"><?php echo $post['title'];?></h1>
			<strong class="d-inline-block mb-2 text-primary"><?php echo $post['category'];?></strong>
            <p class="blog-post-meta"><?php echo $post['creat_at'];?> by <a href="#"><?php echo $post['creat_name'];?></a></p>  
        </div>
      </div>
	
	
      <div class="container">
        <!-- Example row of columns -->
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo site_url('/home2');?>">Home</a></li>
			<li class="breadcrumb-item"><a href="<?php echo site_url('post/'.$con);?>"><?= $title ?></a></li>
			<li class="breadcrumb-item active" aria-current="page">Post</li>
		  </ol>
		</nav>
        <div class="row">
          <div class="col-md-8 blog-main">
          <div class="blog-post">
			<hr>
            <p><?php echo $post['body'];?></p>
          </div><!-- /.blog-post -->
			<hr>
          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>
		<br>
        </div><!-- /.blog-main -->
		
        <aside class="col-md-4 blog-sidebar">
          

          <div class="p-3">
            <h4 class="font-italic">Archives</h4>
            <ol class="list-unstyled mb-0">
              <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
            </ol>
          </div>
		  

          <div class="p-3">
            <h4 class="font-italic">Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="<?php echo site_url('post/blog_BH');?>">Beauty & Healthy</a></li>
              <li><a href="<?php echo site_url('post/blog_TL');?>">Think & Love</a></li>
              <li><a href="<?php echo site_url('post/blog_PT');?>">Place & Travel</a></li>
            </ol>
          </div>
        </aside><!-- /.blog-sidebar -->
        </div>

        

      </div> <!-- /container -->

    </main>
</body>

