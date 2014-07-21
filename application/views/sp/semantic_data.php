	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.js"></script>
	<link type="text/css" href="<?php echo base_url();?>resource/css/left.css" rel="stylesheet" />
	<script type="text/javascript" src="<?php echo base_url();?>resource/js/jquery.jcarousel.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>resource/js/jquery.pikachoose.js"></script>
		<article id="content-column">
			<h1>Semantic Data Infrastructure Development in Universitas Indonesia Environment</h1><br/>
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
				Universitas Indonesia (UI) has several information systems using the social network concept. These systems aims to support every social activities conducted in UI, such as the laboratories information system and the students forum. Using these information systems, the data is stored in the main database, which is maintained by the Pusat Pelayanan Sistem Informasi UI (PPSI UI).
				</p><p>
				Similar to today's Web, the data stored in these systems is fragmented and stored without any ontology. Thus, the data is only useful under human supervision. This research aims to construct the data to adjust it to the Web vision, that is the semantic web.
				</p>
			</section>
			<section id="photos">
				<h3>Screenshots</h3>
				<p>
				<div class="pikachoose">
					<ul id="pikame" class="jcarousel-skin-pika">
						<li><a href="http://www.pikachoose.com"><img src="<?php echo base_url();?>resource/images/rp/semantic_data/home opendata.png"/></a><span>Home screen</span></li>
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
					<td width="400">
						<section id="team">
						<h3>Team</h3>
						<p>
							Initiated as 2011 Student Project I-MHERE, with the team:<br/>
							<ul>
								<li>Ananda Budi P</li>
								<li>Jan Peter Alexander</li>
								<li>Rudi Airlangga</li>
								<li>Fariz Darari</li>
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
