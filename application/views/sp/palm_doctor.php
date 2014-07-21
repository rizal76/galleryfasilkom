	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.js"></script>
	<link type="text/css" href="<?php echo base_url();?>resource/css/left.css" rel="stylesheet" />
	<script type="text/javascript" src="<?php echo base_url();?>resource/js/jquery.jcarousel.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>resource/js/jquery.pikachoose.js"></script>
		<article id="content-column">
			<h1>Palm Doctor</h1><br/>
			<div><i>Published in Gallery at 2 Nov 2012</i></div><br/>
			<section id="video">
				<!--
				<video width="640" height="480" controls="controls">
				  <source src="<?php echo base_url();?>resource/videos/bones82.mp4" type="video/mp4">
				  <source src="<?php echo base_url();?>resource/videos/bones82.3gp" type="video/3gpp">
				  <source src="<?php echo base_url();?>resource/videos/bones82.flv" type="video/x-flv">
				  <source src="<?php echo base_url();?>resource/videos/bones82.webm" type="video/webm">
				  <object data="<?php echo base_url();?>resource/videos/bones82.webm" width="320" height="240">
					<embed src="<?php echo base_url();?>resource/videos/bones82.webm" width="320" height="240">
				  </object> 
				</video>
				-->
				<!-- youtube version
				<iframe width="560" height="315" src="http://www.youtube.com/embed/V5ihnvX7wd8" frameborder="0" allowfullscreen></iframe>
				-->
				<!-- HTML 5 version
				<video width="320" height="240" controls="controls">
				  <source src="<?php echo base_url();?>resource/videos/bd2.mp4" type="video/mp4">
				Your browser does not support the video tag.
				</video>
				-->
			</section>
			<section id="desc">
				<h3>Description</h3>
				<p>
				Indonesia is the biggest supplier of oil palm plantations in the world. More than 50% of the supply of palm oil comes from Indonesia. In the development and maintenance, oil palm plantation facing the threat of pests, diseases and weeds that can cause a decrease in yields. Early detection of palm disease is essential to save the palm trees from damage and disruption of production. Therefore, the Doctor is developing Palm applications aimed for early detection of disease of oil palm plantations.
				Palm Doctor is a mobile application detection of disease on the leaves of palm trees. Diseases that can be detected by this application is a Hawar Daun disease, Antraknosa and Purple Spot. By leveraging the technology of image processing and machine learning, Doctor Palm applications can detect these diseases through visual symptoms appear on the leaves.
				</p>
			</section>
			<section id="photos">
				<!--
				<h3>Screenshots</h3>
				<p>
				<div class="pikachoose">
					<ul id="pikame" class="jcarousel-skin-pika">
						<li><a href="http://www.pikachoose.com"><img src="<?php echo base_url();?>resource/images/1.jpg"/></a><span>This is an example of the basic theme.</span></li>
						<li><a href="http://www.pikachoose.com"><img src="<?php echo base_url();?>resource/images/2.jpg"/></a><span>jCarousel is supported and can be integrated with PikaChoose!</span></li>
						<li><a href="http://www.pikachoose.com"><img src="<?php echo base_url();?>resource/images/3.jpg"/></a><span>Be sure to check out <a href="http://www.pikachoose.com">PikaChoose.com</a> for updates.</span></li>
						<li><a href="http://www.pikachoose.com"><img src="<?php echo base_url();?>resource/images/4.jpg"/></a><span>You can use any type of html you want with PikaChoose</span></li>
						<li><a href="http://www.pikachoose.com"><img src="<?php echo base_url();?>resource/images/5.jpg"/></a><span>PikaChoose survives on your donations! Keep the project alive with a donation.</span></li>
					</ul>
				</div>
				<script language="javascript">
					$(document).ready(
						function (){
							$("#pikame").PikaChoose({carousel:true, carouselVertical:true});
						});
				</script>
				</p>
				-->
			</section>
			<table>
				<tr>
					<td width="400">
						<section id="team">
						<h3>Team</h3>
						<p>
							Initiated as 2012 Student Project I-MHERE, with the team:<br/>
							<ul>
								<li>Hafizh Kalamullah </li>
								<li>Ardhi Putra Pratama </li>
								<li>Jodi Setiyawan </li>
								<li>Aprinaldi</li>
								<li>Qorib Munajat</li>
								<li>Alham Fikri Aji </li>
								<li>Hendi Irawan</li>
							</ul>
						</p>
						</section>
					</td>
					<!--
					<td style="vertical-align:top">
						<section id="link">
						<h3>More</h3>
						<p>
						</p>
						</section>
					</td>
					-->
				</tr>
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
