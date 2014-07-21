	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.js"></script>
	<link type="text/css" href="<?php echo base_url();?>resource/css/left.css" rel="stylesheet" />
	<script type="text/javascript" src="<?php echo base_url();?>resource/js/jquery.jcarousel.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>resource/js/jquery.pikachoose.js"></script>
	
		<article id="content-column">
			<h1>SISTEM INFORMASI PUSAT KESEHATAN MAHASISWA UI</h1><br/> <!-- Judul Karya, boleh dengan spasi atau karakter lain -->
			<div><i>Published in Gallery at 2 Dec 2013</i></div><br/> <!-- tanggal publish di gallery
			<div><i>Published in NAMA_STORE at TANGGAL_PUBLISH_DI_STORE</i></div><br/> <!-- tanggal publish di store, jika ada, ganti NAMA_STORE dengan nama storenya -->
			
			<!-- 
				section untuk masukin video jika ada. kalo ga ada, dicomment aja.
				kalau video disimpan di server gallery, specify pathnya, dan uncomment path yang dipake
				pastikan udah handle buat html5 sama yang non-html5 
			  -->
			<section id="video">					
				<!-- 
				<video width="640" height="480" controls="controls"> -->
					<!-- bagian ini untuk handle html5 kalo browsernya support 
				  <source src="<?php echo base_url();?>resource/videos/bones82.mp4" type="video/mp4">
				  <source src="<?php echo base_url();?>resource/videos/bones82.3gp" type="video/3gpp">
				  <source src="<?php echo base_url();?>resource/videos/bones82.flv" type="video/x-flv">
				  <source src="<?php echo base_url();?>resource/videos/bones82.webm" type="video/webm">
				  	
				  	<!-- bagian ini untuk embed video biasa, klo browsernya belum support html5 -->
				  	<!--
				  <object data="<?php echo base_url();?>resource/videos/bones82.webm" width="640" height="480">
					<embed src="<?php echo base_url();?>resource/videos/bones82.webm" width="640" height="480">
				  </object>
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
				<p>Pusat Kesehatan Mahasiswa Universitas Indonesia (PKM UI) is an organization which engages in health services, operating in two branches: UI Salemba and UI Depok. Until now, provided health services are still processed manually, such as patient's and employee's data, pharmacy operational records, and preparation of reports related to finance and diseases. This polyclinic information system will provide solutions to these obstacles and integrating business process of PKM UI.</p>	<!-- isi dengan deskripsi produk/karya, sekitar 1-3 paragraf sudah cukup -->
			</section>
			
			<section id="photos">
				
				<h3>Pictures and Screenshots</h3>
				<p>
				<div class="pikachoose">
					<ul id="pikame" class="jcarousel-skin-pika">
						<!-- 
							ganti PATH_KE_GAMBAR dengan path yang betul, dan CAPTION_GAMBAR dengan caption gambar jika ada
							silakan menggandakan line ini sesuai jumlah gambar yang disimpan
						-->
						<?php $sipkm_imgs = array('login.png','rekammedis.png','daftarpasien.png','laporan.png','register.png','resep.png','statistik.png','tindakan.png'); ?>
						<?php foreach($sipkm_imgs as $sipkm_img) { ?>
						<li><img src="<?php echo base_url();?>resource/images/rp/sipkm/<?php echo $sipkm_img; ?>"></a><span></span></li>
						<?php } ?>
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
						Initiated as 2013 Student Project, by the team:<br/>
							<ul>
								<li>Fauria Bisara</li>
								<li>Afrishal Priyandhana</li>
								<li>Alfian Erliansyah</li>
								<li>Rizky Amalia Kurnia</li>
								<li>Dwi Novanto Ji</li>
								<li>Elizabeth</li>
								<li>M. Sidqi Hadyan</li>	<!-- ganti dengan nama anggota tim awal, gandakan sesuai kebutuhan -->
							</ul>
						</p>
						</section>
					</td>
					
					<td style="vertical-align:top">
						<section id="link">
						<h3>More</h3>
						<p>
							<a href="http://beta.pkm.ui.ac.id/pkm/index.php/project" title="Sistem Informasi Poliklinik Homepage">Sistem Informasi Poliklinik Homepage</a><br/>
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