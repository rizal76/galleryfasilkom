	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.js"></script>
	<link type="text/css" href="<?php echo base_url();?>resource/css/left.css" rel="stylesheet" />
	<script type="text/javascript" src="<?php echo base_url();?>resource/js/jquery.jcarousel.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>resource/js/jquery.pikachoose.js"></script>
		<article id="content-column">
			<h1>eMorse</h1><br/>
			<div><i>Published in Gallery at 7 Nov 2012</i></div>
			<div><i>Published in Google Play Store at 3 Sep 2012</div></i><br/>

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
				<iframe width="560" height="315" src="https://www.youtube.com/v/ojprv6JyOMI?fs=1&rel=0&version=3" frameborder="0" allowfullscreen></iframe>
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
				eMorse is the abbreviation of Electronic Morse. The
				inception of this Android application is to create a medium to
				facilitate handicap people to communicate with each other, for example when a
				blind tries to communicate with a deaf.
				</p>
				<p>
				The idea is to use Morse code to solve the problem. Using the Morse code, a
				blind can hear the sound of the code and a deaf can see the light that
				follows the pattern of the Morse code. Another reason to use Morse code is
				it is already known worldwide and relatively easy to teach.
				However, there are several people who do not have any knowledge about
				Morse code. That is why the team decided to create an application to help people
				understand the Morse code.
				</p>
				<p>
				Features:<br/>
				<ul>
					<li>Translate from Latin alphabet to Morse code and vise versa</li>
					<li>See the list of available Morse code and the character it represents</li>
					<li>Train the user to master the Morse code</li>
					<li>Send SMS with Morse code and translate it</li>
				</ul>
				</p>
			</section>
			<section id="photos">
				<h3>Screenshots</h3>
				<p>
				<div class="pikachoose">
					<ul id="pikame" class="jcarousel-skin-pika">
						<li><a href="#"><img src="<?php echo base_url();?>resource/images/E_morse/ss1.jpg"/></a><span>eMorse</span></li>
						<li><a href="#"><img src="<?php echo base_url();?>resource/images/E_morse/ss2.jpg"/></a><span>eMorse</span></li>
						<li><a href="#"><img src="<?php echo base_url();?>resource/images/E_morse/ss3.jpg"/></a><span>eMorse</span></li>
						<li><a href="#"><img src="<?php echo base_url();?>resource/images/E_morse/ss4.jpg"/></a><span>eMorse</span></li>
						<li><a href="#"><img src="<?php echo base_url();?>resource/images/E_morse/ss5.jpg"/></a><span>eMorse</span></li>
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
								<li>I.B.P. Peradnya D</li>
								<li>Ricky Timothy Gultom</li>
								<li>Gatra Nugraha</li>
								<li>Anandra Achmad Rinaldo Soroinda</li>
							</ul>
						</p>
						</section>
					</td>
					<td style="vertical-align:top">
						<section id="link">
							
						<h3>More</h3>
						<p>
						<a href="https://play.google.com/store/apps/details?id=ppl.eMorseActivity">Google Play Store</a>
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
