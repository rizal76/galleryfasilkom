	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.js"></script>
	<link type="text/css" href="<?php echo base_url();?>resource/css/left.css" rel="stylesheet" />
	<script type="text/javascript" src="<?php echo base_url();?>resource/js/jquery.jcarousel.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>resource/js/jquery.pikachoose.js"></script>
		<article id="content-column">
			<h1>Green Force</h1><br/>
			<div><i>Published in Gallery at 18 Jan 2013</i></div>
			

			<!--
			<section id="video">
				<video width="640" height="480" controls="controls">
				  <source src="http://mrzon.github.com/GraphBT/videos/GraphBTMovie.mp4" type="video/mp4">
				  <object data="http://mrzon.github.com/GraphBT/videos/GraphBTMovie.mp4" width="320" height="240">
					<embed src="http://mrzon.github.com/GraphBT/videos/GraphBTMovie.mp4" width="320" height="240">
				  </object> 
				</video>
			-->
				<!-- youtube version-->
				<!--
				<iframe width="560" height="315" src="https://www.youtube.com/v/VBFXNXJX8ms?fs=1&rel=0&version=3" frameborder="0" allowfullscreen></iframe>
				-->
				<!-- -->
				<!-- HTML 5 version
				<video width="320" height="240" controls="controls">
				  <source src="<?php echo base_url();?>resource/videos/bd2.mp4" type="video/mp4">
				Your browser does not support the video tag.
				</video>
				-->
			</section>
			<br/><br/>
			<section id="desc">
				<h3>Description</h3>
				<p>
				Greenforce is an application which helps user reports various existing environmental problems so other users can see and be encouraged to take some real actions to solve those enviromental problems.</p>
				<p>Main feature:<br/>
					<ol>
						<li>report existing enviromental problems</li>
						<li>read enviromental issues that have been post by another Greenforce users</li>
						<li>share existing enviromental problems through message, twitter, facebook, etc.</li>
					</ol>
				</p>
			</section>
			<section id="photos">
				<h3>Screenshots</h3>
				<p>
				<div class="pikachoose">
					<ul id="pikame" class="jcarousel-skin-pika">
						<li><a href="#"><img src="<?php echo base_url();?>resource/images/green_force/droid@screen-1.png"/></a><span>Green Force</span></li>
						<li><a href="#"><img src="<?php echo base_url();?>resource/images/green_force/droid@screen-2.png"/></a><span>Green Force</span></li>
						<li><a href="#"><img src="<?php echo base_url();?>resource/images/green_force/droid@screen-3.png"/></a><span>Green Force</span></li>
						<li><a href="#"><img src="<?php echo base_url();?>resource/images/green_force/droid@screen-4.png"/></a><span>Green Force</span></li>
						<li><a href="#"><img src="<?php echo base_url();?>resource/images/green_force/droid@screen-5.png"/></a><span>Green Force</span></li>
						<li><a href="#"><img src="<?php echo base_url();?>resource/images/green_force/droid@screen-6.png"/></a><span>Green Force</span></li>
					</ul>
				</div>
				<script language="javascript">
					$(document).ready(
						function (){
							$("#pikame").PikaChoose({carousel:true, carouselVertical:true});
						});
				</script>
				</p>
			</section>
			<table>
				<tr>
					<td width="450">
						<section id="team">
						<!-- <h3>Team</h3>
						<p>
							Initiated as assignment for Software Development course, by the team:<br/>
							<ul>
								<li>Pandu Wicaksono</li>
								<li>Riyan Noor Hidayat</li>
								<li>Esteria Soplantila</li>
								<li>Muhammad Ridho Fikri</li>
							</ul>
						</p>
						</section>
					</td>
					<td style="vertical-align:top">
						<section id="link">
							
						<h3>More</h3>
						<p>
						<a href="https://play.google.com/store/apps/details?id=com.ppl.hanacaraka">Google Play Store</a>
						</p>
						</section>
					</td>
				</tr>
				-->
			</table>
			<div id="contactperson">
			<?php if ($isIntermediary) { ?>
				Contact intermediary person at <img src="<?php echo base_url().'resource/contacts/'.$sidebar.'.png';?>"/>
			<?php } else { ?>
				Contact at <img src="<?php echo base_url().'resource/contacts/'.$sidebar.'.png';?>"/>
			<?php } ?>
			</div>
		</article>
		<!--
		<div class="left">
			<h4>Join the Movement</h4>
			<p><em>Laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</em></p>
		</div>
		<div class="right">
			<h3>12 / 2009</h3>
			<p>Duis rutrum dapibus diam. Sed turpis sem, suscipit et, ullamcorper vel, aliquam in, tellus. Phasellus interdum. Sed pede. Fusce semper tellus quis sapien.</p>
			<br />
			<h3>12 / 2009</h3>
			<p>Duis rutrum dapibus diam. Sed turpis sem, suscipit et, ullamcorper vel, aliquam in, tellus. Phasellus interdum. Sed pede. Fusce semper tellus quis sapien.</p>
		</div>
		-->
