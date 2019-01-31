<body>

    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?php echo site_url('admin/dashboard');?>"><img src="<?php echo base_url ('style/img/logo.png');?>" alt="Logo"></a>
                <a class="navbar-brand hidden" href="<?php echo site_url('admin/dashboard');?>"><img src="<?php echo base_url ('style/img/logo2.png');?>" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?php echo site_url('admin/dashboard');?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Panel Blog</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Posting</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-female"></i><a href="<?php echo site_url('post/create_BH');?>">Beauty & Healthy</a></li>
                            <li><i class="fa fa-heart"></i><a href="<?php echo site_url('post/create_TL');?>">Think & Love</a></li>
                            <li><i class="fa fa-globe"></i><a href="<?php echo site_url('post/create_PT');?>">Place & Travel</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-comments"></i>Komentar</a>
                         <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-female"></i><a href="ui-buttons.html">Beauty & Healthy</a></li>
                            <li><i class="fa fa-heart"></i><a href="ui-badges.html">Think & Love</a></li>
                            <li><i class="fa fa-globe"></i><a href="ui-tabs.html">Place & Travel</a></li>
                        </ul>
                    </li>
					<li>
                        <a href="widgets.html"><i class="menu-icon fa fa-bar-chart"></i>Statistik</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->