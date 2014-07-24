<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="Robots" content="index,follow" />
	<meta name="author" content="Luka Cvrk (www.solucija.com)" />
	<meta name="description" content="Description" />
	<meta name="keywords" content="key, words" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/css/screen.css" media="screen" />
	<link rel="icon" href="<?=base_url()?>resource/images/favicon2.png" type="image/png">
	<title>Gallery of Fasilkom UI Projects</title>
</head>
<body>
	
	<div id="content">
		<p id="top">Gallery of Fasilkom UI's projects</p>
		
		<div id="logo">
			<span id="fasilkom_logo">
				<a href="http://www.cs.ui.ac.id"><img src="<?php echo base_url();?>resource/images/logo/fasilkom.png" width="80px"/></a>
			</span>
			<h1><a href="<?php echo site_url('gallery/index');?>">Gallery</a></h1>
		</div>
		
		<div id="nav-container">
		<nav>
			<ul id="menu">
				<li <?php if ($menu=='home') { ?> class="current" <?php } ?>><a href="<?php echo site_url('gallery/index');?>">Home</a></li>
				<li <?php if ($menu=='sp') { ?> class="current" <?php } ?>><a href="<?php echo site_url('sp/index');?>">Research Products</a>
				<li <?php if ($menu=='bi') { ?> class="current" <?php } ?>><a href="<?php echo site_url('bi/index');?>">Business Incubators</a>
					<!--
					<ul>
						<li><a href="<?php echo site_url('imhere/research_product');?>">Research Products</a></li>
						<li><a href="<?php echo site_url('imhere/business_incubator');?>">Business Incubators</a></li>
					</ul>
					-->
				</li>
				<li <?php if ($menu=='games') { ?> class="current" <?php } ?>><a href="<?php echo site_url('games');?>">Games</a></li>
				<li <?php if ($menu=='apps') { ?> class="current" <?php } ?>><a href="<?php echo site_url('apps');?>">Applications</a></li>
			</ul>
		</nav>
		</div>

		<div class="line">
		<?php
		if(isset($user)){ 
			if($user!=null) echo "Welcome ".$user->userlogin.", press <a href='gallery/logout'>log out</a> to log out"; 
		}

		?>
		</div>
