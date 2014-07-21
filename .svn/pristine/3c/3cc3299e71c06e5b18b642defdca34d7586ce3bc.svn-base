	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.js"></script>
	<link type="text/css" href="<?php echo base_url();?>resource/css/left.css" rel="stylesheet" />
	<script type="text/javascript" src="<?php echo base_url();?>resource/js/jquery.jcarousel.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>resource/js/jquery.pikachoose.js"></script>
	
		<article id="content-column">
			<h1>BolaNG</h1><br/> <!-- Judul Karya, boleh dengan spasi atau karakter lain -->
			<div><i>Published in Gallery at 30 Nov 2013</i></div><br/> <!-- tanggal publish di gallery
			<div><i>Published in NAMA_STORE at TANGGAL_PUBLISH_DI_STORE</i></div><br/> <!-- tanggal publish di store, jika ada, ganti NAMA_STORE dengan nama storenya -->
			
			<!-- 
				section untuk masukin video jika ada. kalo ga ada, dicomment aja.
				kalau video disimpan di server gallery, specify pathnya, dan uncomment path yang dipake
				pastikan udah handle buat html5 sama yang non-html5 
			  -->
			<!--
			<section id="video">					
				<video width="640" height="480" controls="controls">
					<!-- bagian ini untuk handle html5 kalo browsernya support 
				  <source src="<?php //echo base_url();?>resource/videos/bones82.mp4" type="video/mp4">
				  <source src="<?php //echo base_url();?>resource/videos/bones82.3gp" type="video/3gpp">
				  <source src="<?php //echo base_url();?>resource/videos/bones82.flv" type="video/x-flv">
				  <source src="<?php //echo base_url();?>resource/videos/bones82.webm" type="video/webm">
				  	
				  	<!-- bagian ini untuk embed video biasa, klo browsernya belum support html5 -->
				  	<!--
				  <object data="<?php //echo base_url();?>resource/videos/bones82.webm" width="640" height="480">
					<embed src="<?php //echo base_url();?>resource/videos/bones82.webm" width="640" height="480">
				  </object>
					-->
				  <!-- 
				</video>
				-->
				
				<!--	section untuk masukin video dari youtube	-->
				<!--
					<iframe width="560" height="315" src="http://www.youtube.com/embed/V5ihnvX7wd8" frameborder="0" allowfullscreen></iframe>
				-->
			</section>
			
			<section id="desc">
				<h3>Description</h3>
				<p>BolaNG is a Natural Language Generation (NLG) system for football match report.
				The match report is generated automatically based on football match data. Techniques of 
				Natural Language Generation (NLG) is used in the generation process of the text. The data 
				used by the system is a non-linguistic data stored in a knowledge base. The system can 
				generate varied text based on mode, perspective, and language. The system is implemented 
				in the form of web service where users can access the functionality through the Bolang website.
				In the research that has been done, the amount of match data available are limited and were 
				collected in semi-automatic ways. However, for the future development it is possible to improve 
				this system to collect data fully automatic from web, database, or other data resources.</p>	<!-- isi dengan deskripsi produk/karya, sekitar 1-3 paragraf sudah cukup -->
			</section>
			
			<section id="photos">
				
				<h3>Pictures and Screenshots</h3>
				<p>
				<div class="pikachoose">
					<ul id="pikame" class="jcarousel-skin-pika">
						<li><img src="<?php echo base_url();?>resource/images/bolang/_1.png"/></a><span>BolaNG</span></li>
						<li><img src="<?php echo base_url();?>resource/images/bolang/_2.png"/></a><span>BolaNG</span></li>
						<li><img src="<?php echo base_url();?>resource/images/bolang/_3.png"/></a><span>BolaNG</span></li>
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
							<!-- ganti JENIS_TUGAS_ATAU_PROYEK_AWAL dengan proyek yang menginisiasi dibuatnya karya ini, misal Imhere atau tugas kuliah -->
						Initiated as Student Project 2013, by the team:<br/>
							<ul>
								<li>Achmad Fatchuttamam Abka</li>
								<li>Daya Adianto</li>								<!-- ganti dengan nama anggota tim awal, gandakan sesuai kebutuhan -->
							</ul>
						</p>
						</section>
					</td>
					
					<td style="vertical-align:top">
						<section id="link">
						<h3>More</h3>
						<p>
							<!-- ganti URL_LAIN dengan URL lain yg bisa menjelaskan ttg produk, dst. Gandakan sesuai kebutuhan -->
							<a href="http://bolang.cs.ui.ac.id" title="BolaNG Web App">BolaNG @ Server Fasilkom</a><br/>
						</p>
						</section>
					</td>
				</tr>
			</table>
			
			<div id="contactperson">
				<!-- Tidak perlu mengubah bagian ini -->
			<?php if ($isIntermediary) { ?>
				Contact intermediary person at <img src="<?php echo base_url().'resource/contacts/'.$sidebar.'.png';?>"/>
			<?php } else { ?>
				Contact at <img src="<?php echo base_url().'resource/contacts/'.$sidebar.'.png';?>"/>
			<?php } ?>
			</div>
		</article>
