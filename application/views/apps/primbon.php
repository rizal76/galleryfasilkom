	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.js"></script>
	<link type="text/css" href="<?php echo base_url();?>resource/css/left.css" rel="stylesheet" />
	<script type="text/javascript" src="<?php echo base_url();?>resource/js/jquery.jcarousel.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>resource/js/jquery.pikachoose.js"></script>

		<article id="content-column">
			<h1>Primbon & Soul Card</h1><br/>
			<div><i>Published in Gallery at 17 Dec 2012</i></div>
			<i>Published in Google Play Store at 15 Dec 2012</i>
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
				<!-- <iframe width="560" height="315" src="https://www.youtube.com/v/VBFXNXJX8ms?fs=1&rel=0&version=3" frameborder="0" allowfullscreen></iframe> -->
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
				Primbon & Soul Card adalah aplikasi ramalan berdasarkan Soul Card dan Primbon. Soul Card adalah teknik yang digunakan   	untuk mengetahui karakter dasar seseorang dengan cara menghitung tanggal lahir orang tersebut secara numerology hingga menjadi satu digit untuk mendefinisikan karakter seseorang berdasarkan major arcana dari kartu tarot. Sedangkan primbon adalah sebuah metode tradisional Jawa yang digunakan untuk menghitung berbagai aspek kehidupan, seperti arti dari tanggal lahir, nama, arti kedutan, hari baik, hari pernikahan dan lain-lain.</p>
				<p>Main feature:<br/>
					<ol>
						<li>Menghitung Soul Card anda berdasarkan tanggal lahir dan mendapatkan penjelasan karakter anda berdasarkan Soul Card.</li>
						<li> Menghitung Wetonan anda berdasarkan tanggal lahir dan nama anda.</li>
						<li>Memberikan penjelasan karakter berdasarkan wetonan anda.</li>
						<li>Penjelasan tentang kejadian sehari-hari seperti kedutan, bersin dan kuping berdenging menurut primbon.</li>
						<li>Update mingguan ramalan anda berdasarkan Soul Card (seperti horoskop).</li>
						<li>Share Soul Card dan ramalan mingguan anda ke aplikasi lain yang diinginkan.</li>
					</ol>
				</p>
			</section>
			<section id="photos">
				<h3>Screenshots</h3>
				<p>
				<div class="pikachoose">
					<ul id="pikame" class="jcarousel-skin-pika">
						<li><a href="#"><img src="<?php echo base_url();?>resource/images/Primbon/primbon.jpg"/></a><span>Primbon</span></li>
						<li><a href="#"><img src="<?php echo base_url();?>resource/images/Primbon/primbon1.jpg"/></a><span>Primbon</span></li>
						<li><a href="#"><img src="<?php echo base_url();?>resource/images/Primbon/primbon2.jpg"/></a><span>Primbon</span></li>
						<li><a href="#"><img src="<?php echo base_url();?>resource/images/Primbon/primbon3.jpg"/></a><span>Primbon</span></li>
						<li><a href="#"><img src="<?php echo base_url();?>resource/images/Primbon/primbon4.jpg"/></a><span>Primbon</span></li>
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
							Initiated as IT-Project class 2012 assignment by:<br/>
							<ul>
								<li>Drajat Dwi Anggoro</li>
								<li>Adilla Widyaputri</li>
								<li>Aji Pradipta Rahmadi</li>
								<li>Ariano Giantama Hertono</li>
								<li>Kelvin</li>
								<li>Ni Putu Suwitri Novita Sanjiwani</li>
							</ul>
						</p>
						</section>
					</td>
					<td style="vertical-align:top">
						<section id="link">
							
						<h3>More</h3>
						<p>
						<a href="https://play.google.com/store/apps/details?id=primbon.soulcard.main">Google Play Store Primbon & Soul Card</a>
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
