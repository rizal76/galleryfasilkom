Web Portal Gallery Fasilkom UI.

--------------------------------------------------------------------------------------------

Portal ini dibuat dengan menggunakan framework CodeIgniter.

STRUKTUR FRAMEWORK
- application, direktori berisi file html dan MVC
- system, direktori berisi library-library yang tidak boleh diubah tanpa persetujuan
- resource, direktori yang berisi resource (css, js, image, video)
- data, direktori untuk hosting data yang digunakan aplikasi mobile lain (titipan, tidak ada hubungannya dengan gallery fasilkom ini)

--------------------------------------------------------------------------------------------

STRUKTUR MVC

Controller
Ada 5 Controller yang mewakili tiap jenis karya di web, yaitu:
- Gallery, untuk index / home, diwakili dengan gallery.php
- Apps, diwakili dengan apps.php
- Games, diwakili dengan games.php
- SP, untuk bagian Research Products, diwakili dengan sp.php
- BI, untuk bagian Business Incubators, diwakili dengan bp.php
Ada 5 file yang mewakili 5 controller tersebut, berada di application/controllers

Model
Tidak ada database yang digunakan

View
File-file untuk tampilan, berada di application/views
Terdapat 4 direktori yang mewakilkan lokasi view setiap karya, yaitu:
- apps
- bi, untuk bagian Business Incubator
- games
- sp, untuk bagian Research Products

--------------------------------------------------------------------------------------------

MENAMBAHKAN KONTEN/PRODUK

1. Tentukan jenis karyanya. Misalnya Games. 

2. Buka controller Games, tambahkan fungsi berikut:
   public function nama_unik_karya()
	{
		$data['menu'] = 'namaController';					// atau nama controllernya
		$data['sidebar'] = 'nama_unik_karya';					// nama unik untuk karya tersebut *
		$data['isIntermediary'] = FALSE;						// jika email contact yang diberikan di bawahnya adalah intermediary, tulis TRUE
		$this->texttoimage->draw('EMAIL_KONTAK', 'nama_unik_karya');	// EMAIL_KONTAK : email kontak yang diberikan
		$this->load->view('header', $data);
		$this->load->view('namaController/nama_unik_karya');	// nama direktori views dan nama unik yang mau dipakai untuk karya tersebut
		$this->load->view('namaController/sidebar');		// nama direktori views 
		$this->load->view('footer');
	}

3. Buka direktori application/views/namaController, ubah file sidebar.php
	<li><a <?php if ($sidebar == 'nama_unik_karya') { ?> class="current" <?php } ?> href="<?php echo site_url('namaController/nama_unik_karya');?>">judulKarya<a></li>

4. Copy file application/views/template.php dari direktori views, kemudian masukkan di direktori views sesuai jenis/controllernya.
   Misalnya karya yang dimasukkan adalah game, maka paste file tersebut di application/views/games/template.php
   Rename file yang sudah di-paste tersebut menjadi nama_unik_karya.php, jadi path-nya application/views/namaController/nama_unik_karya.php.
   Nama unik karya harus sama dengan yang digunakan di step 2, yang ditandai dengan *.
   
   Terdapat beberapa bagian yang harus diisi:
   1) Judul karya
   2) Tanggal publish karya di Gallery atau di Store lain
   3) Video, jika ada
   4) Deskripsi, pada bagian Description
   5) Gambar, pada bagian Pictures and Screenshots
   6) Anggota tim, pada bagian Team
   7) URL lain tentang karya tersebut jika ada, pada bagian More
   8) Contact person. Untuk sementara dapat dikosongkan dahulu.
   
5. Masukkan image-image yang bersangkutan di direktori resource/images/namaController/nama_unik_karya/

6. Buka direktori application/views, buka file namaController.php. 
   File ini berisi interface yang tampil ketika menu Research Products, Apps, Games, atau Business Incubators dibuka.
   Tambahkan kode berikut di awal file:
   <a class="showcase" href="<?php echo site_url('apps/teropong');?>">
		<figure class="crop">
			<img src="<?php echo base_url();?>resource/images/namaController/nama_unik_karya/gambarYangMauDitampilkanDiDepan" /> // isi dengan path gambar yang ingin ditampilkan di depan
		</figure>
		<h3>Judul_Karya</h3>
		<p>Deskripsi_singkat_karya</p>
	</a>