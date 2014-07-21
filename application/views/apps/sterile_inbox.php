	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.js"></script>
	<link type="text/css" href="<?php echo base_url();?>resource/css/left.css" rel="stylesheet" />
	<script type="text/javascript" src="<?php echo base_url();?>resource/js/jquery.jcarousel.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>resource/js/jquery.pikachoose.js"></script>
		<article id="content-column">
			<h1>Sterile Inbox</h1><br/>
			<div><i>Published in Gallery at 22 Jan 2013</i></div>
			<div><i>Published in Google Play Store at 7 Dec 2012</div></i><br/>

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
				Enjoy the brand new experience of Sterile Inbox!!
				Sterile Inbox is back with revamped look & feel, lots of bug fixes, stability & performance improvements, and refined spam filtering process!
				
				Sterile Inbox is a SMS spam filter for Bahasa Indonesia.
				It is used alongside your default SMS application and prevent spam from reaching your inbox.
				Enjoy your daily activity without any disturbance from spam message.

				Currently Sterile Inbox offers various features including
				<ul>				
					<li> Spam Filtering </li>
					<li> Blocking specified spammer </li>
					<li> Customization of ringtone and vibration for spam notification </li>
					<li> Disable spam filtering for known contacts </li>
					<li> Adjusting spam filtering behavior </li>
					<li> Adding new model of spam message </li>
				</ul>
				Send your suggestions, questions & problems to sterileinbox@gmail.com
				</p>
			</section>
			<section id="photos">
				<h3>Screenshots</h3>
				<p>
				<div class="pikachoose">
					<ul id="pikame" class="jcarousel-skin-pika">
						<li><a href="#"><img src="<?php echo base_url();?>resource/images/apps/sterile_inbox/ss1.png"/></a><span>Spam data addition</span></li>
						<li><a href="#"><img src="<?php echo base_url();?>resource/images/apps/sterile_inbox/ss2.png"/></a><span>Blocking sender</span></li>
						<li><a href="#"><img src="<?php echo base_url();?>resource/images/apps/sterile_inbox/ss3.png"/></a><span>Settings</span></li>
						<li><a href="#"><img src="<?php echo base_url();?>resource/images/apps/sterile_inbox/ss4.png"/></a><span>Viewing Spam</span></li>
						<li><a href="#"><img src="<?php echo base_url();?>resource/images/apps/sterile_inbox/ss5.png"/></a><span>Spam list</span></li>
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
						<h3>Team</h3>
						<p>
							Initiated as assignment for Software Development course, by the team:<br/>
							<ul>
								<li>Adani Arisy</li>
								<li>Eka Zahnia P.</li>
								<li>Miftahul Husni</li>
							</ul>
						</p>
						</section>
					</td>
					<td style="vertical-align:top">
						<section id="link">
							
						<h3>More</h3>
						<p>
						<a href="https://play.google.com/store/apps/details?id=com.b2.sterileinbox">Google Play Store</a>
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
