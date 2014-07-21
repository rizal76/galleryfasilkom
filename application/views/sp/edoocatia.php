	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.js"></script>
	<link type="text/css" href="<?php echo base_url();?>resource/css/left.css" rel="stylesheet" />
	<script type="text/javascript" src="<?php echo base_url();?>resource/js/jquery.jcarousel.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>resource/js/jquery.pikachoose.js"></script>
		<article id="content-column">
			<h1>Edoocatia</h1><br/>
			<div><i>Published in Gallery at 13 Dec 2012</i></div><br/>
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
				Learning is everyone’s needs and rights, since they were born until they are died. Learning in the context of academic is actually useful for children as the provision for their future. Unfortunately, the major activities of learning in this context are not pleasing for them. Learning is often regarded as a burden faced by children since it made them lost their rights of doing something fun like playing and other fun activities, due to one reason: for the sake of success in academic. Hence, changes are necessary for the sake of the urgency of learning for children and their right to keep doing fun activities.
				</p>
				<p>
				Motivated by the worst fact of learning, the application called ‘Edoocatia’ is born. Edoocatia is a game application designed as an alternative learning for primary school children. It educates children using its contents. In this application, the game explores the school lessons like basic science for children. The lessons are laid out into scenarios or storyboards of game. Hence there will appear so many questions in the scenario that alluded to the matter of school lesson. By using this application, it is expected that children can understand the lessons easily and keep fun until their knowledge increased unconsciously. Furthermore, this alternative learning will enhance their sense of curios towards the matter of lesson.
				</p>
				<p>
				There are some supporting features in this application which accommodate the children’s sense of curiousity such as ‘Forum Kita Pintar’ and ‘Jelajah Web’. By these features, children can dig out more about the matters appear on the game they are playing. In the ‘Forum’ they can ask fellow users to exchange insights, while in the ‘Jelajah Web’ they can procure many references and any new knowledge from the internet. The other supporting feature is ‘Sang Juara’, which in this feature a player can views score of him and others, thus player will be pushed ahead to run into higher score. As the point of the aim, with ‘Edoocatia’, children would like to learn everything by their initiatives without compulsion. Hence, learning would become more exciting and fun.
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
							Initiated as 2012 Student Project I-MHERE, by the team:<br/>
							<ul>
								<li>Futuhal Arifin</li>
								<li>Yahya Muhammad</li>
								<li>Fikrul Arif Nadra</li>
								<li>Gatra Nugraha</li>
								<li>Dika Handika</li>
								<li>Tsabitah Alaa M</li>
								<li>Liza Yudhita W</li>
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
