	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.js"></script>
	<link type="text/css" href="<?php echo base_url();?>resource/css/left.css" rel="stylesheet" />
	<script type="text/javascript" src="<?php echo base_url();?>resource/js/jquery.jcarousel.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>resource/js/jquery.pikachoose.js"></script>
		<article id="content-column">
			<h1>Kresek Chat</h1><br/>
			<div><i>Published in Gallery at 7 Nov 2012</i></div>
			<div><i>Published in Google Play Store at 4 Sep 2012</div></i><br/>

			<!--
			<section id="video">
				<video width="640" height="480" controls="controls">
				  <source src="http://mrzon.github.com/GraphBT/videos/GraphBTMovie.mp4" type="video/mp4">
				  <object data="http://mrzon.github.com/GraphBT/videos/GraphBTMovie.mp4" width="320" height="240">
					<embed src="http://mrzon.github.com/GraphBT/videos/GraphBTMovie.mp4" width="320" height="240">
				  </object> 
				</video>
			-->
				<!-- youtube version
				<iframe width="560" height="315" src="https://www.youtube.com/v/VBFXNXJX8ms?fs=1&rel=0&version=3" frameborder="0" allowfullscreen></iframe>
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
				Kresek Chat is a conference messenger application that is built to show a
				presentation, such as teaching or meeting. A user can create a room or join
				into a specific room. Each user has a specific role with different
				authorization. There are 2 different roles: the Presenter and Audience.
				Presenter is the owner of the room who can upload the presentation
				picture and speak along the chat. The Audience is the user who join the room,
				who can only speak after obtaining permission from the Presenter. The Audience
				can send an interruption message so the Presenter can allow or deny the
				Audience to speak during the chat. The interruption process is like
				simulation of raising hand in a class. Any roles can download the
				presentation pictures and save the chat log.</p>
			</section>
			<section id="photos">
				<h3>Screenshots</h3>
				<p>
				<div class="pikachoose">
					<ul id="pikame" class="jcarousel-skin-pika">
						<li><a href="#"><img src="<?php echo base_url();?>resource/images/Kresek_chat/ss1.jpg"/></a><span>Kresek Chat</span></li>
						<li><a href="#"><img src="<?php echo base_url();?>resource/images/Kresek_chat/ss2.jpg"/></a><span>Kresek Chat</span></li>
						<li><a href="#"><img src="<?php echo base_url();?>resource/images/Kresek_chat/ss3.jpg"/></a><span>Kresek Chat</span></li>
						<li><a href="#"><img src="<?php echo base_url();?>resource/images/Kresek_chat/ss4.jpg"/></a><span>Kresek Chat</span></li>					</ul>
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
						<h3>Team</h3>
						<p>
							Initiated as assignment for Software Development course, by the team:<br/>
							<ul>
								<li>Philip Arthur</li>
								<li>Ibnu Sina</li>
								<li>Fitri Nurinsani Rachbini</li>
								<li>Muhammad Andri Ihsannudin</li>
							</ul>
						</p>
						</section>
					</td>
					<td style="vertical-align:top">
						<section id="link">
						<h3>More</h3>
						<p>
						<a href="https://play.google.com/store/apps/details?id=ac.id.fasilkom.ppla6">Google Play Store</a>
						</p>
						</section>
					</td>
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
