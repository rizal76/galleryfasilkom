<?php

class Gallery extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		// Your own constructor code
		$this->load->helper('url');
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['menu'] = 'home';
		$this->load->view('header', $data);
		$this->load->view('home');
		$this->load->view('footer');
	}
	
	public function imhere()
	{
		$data['menu'] = 'imhere';
		$this->load->view('header', $data);
		$this->load->view('imhere');
	}
	
	public function games()
	{
		$data['menu'] = 'games';
		$this->load->view('header', $data);
		$this->load->view('games');
	}
	
	public function apps()
	{
		$data['menu'] = 'apps';
		$this->load->view('header', $data);
		$this->load->view('apps');
	}

	public function daftarKarya(){
		$data['menu'] = 'daftarKarya';
		$this->load->view('header', $data);
		$this->load->view('daftarkarya');
		$this->load->view('footer');
	}

	public function addKarya(){
		//validasi
		//masukan semua attribut ke file csv
		$nama_unik = $this->input->post('element_1');
		$email = $this->input->post('element_2');
		$judul = $this->input->post('element_3');
		$tanggal = $this->input->post('element_4');
		$video = $this->input->post('element_5');
		$deskripsi = $this->input->post('element_6');
		$deskripsi_singkat = $this->input->post('element_7');
		//$gambar = $this->input->post('element_8');
		$pesan = "fine";
		if(!empty($nama_unik)) {
				$this->load->library('upload');
				mkdir('resource/images/'.$nama_unik, 0700);
	            $config['upload_path'] = 'resource/images/'.$nama_unik;
	            $config['allowed_types'] = 'gif|jpg|jpeg|png';
	            $config['max_size'] = '100';
	            $config['max_width']  = '1024';
	            $config['max_height']  = '768';
	 
	            $this->upload->initialize($config);
	 
	            foreach($_FILES as $field => $file)
	            {
	                // No problems with the file
	                if($file['error'] == 0)
	                {
	                    // So lets upload
	                    if ($this->upload->do_upload($field))
	                    {
	                        $data = $this->upload->data();
	                    }
	                    else
	                    {
	                        $errors = $this->upload->display_errors();
	                    }
	                }
	            }

			$anggotaTim  = $this->input->post('element_9');
			$more = $this->input->post('element_10');
			$cp = $this->input->post('element_11');
			$jenisKarya = $this->input->post('element_12');


			//UNTUK WRITE FILE PENDING OKE
			$filename = 'resource/csv/karyaPending.csv';
			$somecontent = "0,".$jenisKarya.",".$nama_unik.",".$email.",".$judul.",".$tanggal.",".$video.",".$deskripsi.",".$deskripsi_singkat.",".$anggotaTim.",".$more.",".$cp."\n";
			
			// Let's make sure the file exists and is writable first.
			if (is_writable($filename)) {
			    // In our example we're opening $filename in append mode.
			    // The file pointer is at the bottom of the file hence
			    // that's where $somecontent will go when we fwrite() it.
			    if (!$handle = fopen($filename, 'a')) {
			         $pesan= "Cannot open file ($filename)";
			         exit;
			    }
			    // Write $somecontent to our opened file.
			    if (fwrite($handle, $somecontent) === FALSE) {
			        $pesan = "Cannot write to file ($filename)";
			        exit;
			    }
			    $pesan = "Success, wrote ($somecontent) to file ($filename)";
			    fclose($handle);
			} else {
			    $pesan = "The file $filename is not writable";
			}
		}
		$data['menu'] = 'daftarKarya';
		$data['pesan'] = $pesan;
		$this->load->view('header', $data);
		$this->load->view('daftarkarya', $data);
		$this->load->view('footer');

	}

	public function approveKarya($nama_unik){
		//membaca setiap attribute karya dengan nama unik
		$handle = fopen("resource/csv/karyaPending.csv", "r");
		if ($handle) {
		    while (($line = fgets($handle)) !== false) {
		        // process the line read.
		         $karya = explode(",", $line);
		         if($karya[0]=="0" && $karya[2]==$nama_unik){
		         	$this->approveKaryaNext($karya);
		         }
		    }
		} else {
		    // error opening the file.
		} 
		fclose($handle);
		
	}

	public function approveKaryaNext($karya){
		//inisialisasi variable
		$controller = $karya[1];
		$nama_unik = $karya[2];
		$email = $karya[3];
		$judul = $karya[4];
		$tanggal = $karya[5];
		$video = $karya[6];
		$deskripsi = $karya[7];
		$deskripsi_singkat = $karya[8];
		$tugasApa = $karya[9];
		$nama_tim = $karya[10];
		$url = $karya[12];
		$cp = $karya[13];

		//1. menambahkan fungsi baru ke controller sesuai dengan jenis karya
		$direktori = "application/controllers/".$controller.".php";
		$pointer ="//new function here";
		$content = "\tpublic function ".$nama_unik."() \n\t{\n";
		$content .= "\t\t\$data[\"menu\"] = \"".$controller."\";\n";
		$content .= "\t\t\$data[\"sidebar\"] = \"".$nama_unik."\";\n";			
		$content .= "\t\t\$data[\"isIntermediary\"] = FALSE;\n";				
		$content .= "\t\t\$this->texttoimage->draw(\"".$email."\",\" ".$nama_unik."\");\n";
		$content .= "\t\t\$this->load->view(\"header\", \$data);\n";
		$content .= "\t\t\$this->load->view(\"".$controller."/".$nama_unik."\");\n";	
		$content .= "\t\t\$this->load->view(\"".$controller."/sidebar\");\n";
		$content .= "\t\t\$this->load->view(\"footer\");\n";
		$content .= "\t}\n\n";
		$content .= $pointer;
		$pesan ="okee empty";
		$this->changeFile($direktori,$content,$pointer);
		
		//2. Ubah sidebar diview  sesuai dengan jenis karya
		$direktori = "application/views/".$controller."/sidebar.php";
		$pointer ="<!--new code here-->";
		$content = "<li><a <?php if (\$sidebar == '{$nama_unik}') { ?> class=\"current\" <?php } ?> href=\"<?php echo site_url('{$controller}/{$nama_unik}');?>\">{$judul}<a></li>\n\t\t\t".$pointer;
		$this->changeFile($direktori,$content,$pointer);
		
		//3.  Buat view dari template
		$file_template = 'application/views/template.php';
		$direktori = "application/views/".$controller."/".$nama_unik.".php";
		if (!copy($file_template, $direktori)) {
		    $pesan = "failed to copy $file...\n"; //debug
		}
		$pointer = array();
		$pointer[0] = "JUDUL_KARYA";
		$pointer[1] = "TANGGAL_PUBLISH_DI_GALLERY";
		$pointer[2] = "VIDE0_YOUTUBE";
		$pointer[3] = "DESKRIPSI";
		$pointer[4] = "JENIS_TUGAS_ATAU_PROYEK_AWAL";
		$pointer[5] = "NAMA_TIM";
		$pointer[6] = "NAMA_URL";
		$pointer[7] = "<!--ANGGOTA_TIM-->";
		$pointer[8] = "<!--LIST_IMAGES-->";
		$imagesDir = 'resource/images/'.$nama_unik."/";
		$images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

		$content = array();
		$content['general']= array();
		$content['general'][0] = $judul;
		$content['general'][1] = $tanggal;
		$content['general'][2] = $video;
		$content['general'][3] = $deskripsi;
		$content['general'][4] = $tugasApa;
		$content['general'][5] = $nama_tim;
		$content['general'][6] = $url;
		$content['team']=explode(";", $karya[11]);
		$content['images']= $images ;
		$this->changeFile($direktori,$content,$pointer);
		


		//4. add show case di setiap view sesuai dengan jenis karya
		$direktori = "application/views/".$controller.".php";
		$pointer ="<!--new code here-->";
		$content = "<a class=\"showcase\" href=\"<?php echo site_url('{$controller}/{$nama_unik}');?>\">\n";
		$content .= "\t\t\t<figure class=\"crop\">\n";
		$content .= "\t\t\t\t<img src=\"<?php echo base_url();?>{$images[0]}\" style=\"margin-bottom: -120px;\"/>\n";
		$content .= "\t\t\t</figure>\n";
		$content .= "\t\t\t<h3>{$judul}</h3>\n";
		$content .= "\t\t\t<p>{$deskripsi_singkat}</p>\n";
		$content .= "\t\t</a>\n\t\t".$pointer;

		$this->changeFile($direktori,$content,$pointer);
		
		//load view
		$data['menu'] = 'daftarKarya';
		$data['pesan'] = $pesan; //untuk debug only
		$this->load->view('header', $data);
		$this->load->view('daftarkarya', $data);
		$this->load->view('footer');

	}

	public function changeFile($direktori,$content,$pointer){
		chmod($direktori, 0777); 
		$fhandle = fopen($direktori, 'r');
		$contentFile = fread($fhandle,filesize($direktori)); 

		if(is_array($pointer) && is_array($content))
		{
			$newContent = "";
			$newContentImg = "";
			foreach ($content as $key => $value) {
				if($key=='general'){
					foreach ($content['general'] as $key2 => $value2) 
						$contentFile = str_replace($pointer[$key2], $content['general'][$key2], $contentFile); 
				} elseif ($key=='team') {
					
					foreach ($content['team'] as $key2 => $value2) 
						$newContent .= "<li>".$content['team'][$key2]."</li>\n";
					
				} else{
					
					foreach ($content['images'] as $key2 => $value2) 
						$newContentImg .= "<li><img src=\"<?php echo base_url();?>{$content['images'][$key2]}\"/></a><span>{$content['general'][0]}</span></li>";
					
				}
			}
			$newContent .= $pointer[7];
			$contentFile = str_replace($pointer[7], $newContent, $contentFile); 

			$newContentImg .= $pointer[8];
			$contentFile = str_replace($pointer[8], $newContentImg, $contentFile); 
		} else {
			$contentFile = str_replace($pointer, $content, $contentFile); 			
		}
		$fhandle = fopen($direktori,"w"); 
		fwrite($fhandle,$contentFile); 
		fclose($fhandle);
		chmod($direktori, 0644); 
		
	}

}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
