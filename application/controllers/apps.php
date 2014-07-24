<?php

class Apps extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		// Your own constructor code
		$this->load->helper('url');
		$this->load->library('texttoimage');
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
		$data['menu'] = 'apps';
		$data['title'] = 'Applications';
		$this->load->view('header', $data);
		$this->load->view('apps');
		$this->load->view('footer');
	}
	
	public function bolang()
	{
		$data['menu'] = 'apps';
		$data['sidebar'] = 'bolang';
		$data['isIntermediary'] = FALSE;
		$this->texttoimage->draw('achmad.f.abka@gmail.com', 'bolang');
		$this->load->view('header', $data);
		$this->load->view('apps/bolang');
		$this->load->view('apps/sidebar');
		$this->load->view('footer');
	}
	
	public function teropong()
	{
		$data['menu'] = 'apps';
		$data['sidebar'] = 'teropong';
		$data['isIntermediary'] = TRUE;
		$this->texttoimage->draw('muhammad.hilman@ui.ac.id', 'teropong');
		$this->load->view('header', $data);
		$this->load->view('apps/teropong');
		$this->load->view('apps/sidebar');
		$this->load->view('footer');
	}
	
	public function smspot()
	{
		$data['menu'] = 'apps';
		$data['sidebar'] = 'smspot';
		$data['isIntermediary'] = TRUE;
		$this->texttoimage->draw('muhammad.hilman@ui.ac.id', 'smspot');
		$this->load->view('header', $data);
		$this->load->view('apps/smspot');
		$this->load->view('apps/sidebar');
		$this->load->view('footer');
	}
	
	public function riyada()
	{
		$data['menu'] = 'apps';
		$data['sidebar'] = 'riyada';
		$data['isIntermediary'] = TRUE;
		$this->texttoimage->draw('muhammad.hilman@ui.ac.id', 'riyada');
		$this->load->view('header', $data);
		$this->load->view('apps/riyada');
		$this->load->view('apps/sidebar');
		$this->load->view('footer');
	}
	
	public function reg_droid()
	{
		$data['menu'] = 'apps';
		$data['sidebar'] = 'reg_droid';
		$data['isIntermediary'] = TRUE;
		$this->texttoimage->draw('muhammad.hilman@ui.ac.id', 'reg_droid');
		$this->load->view('header', $data);
		$this->load->view('apps/reg_droid');
		$this->load->view('apps/sidebar');
		$this->load->view('footer');
	}
	
	public function mythopet()
	{
		$data['menu'] = 'apps';
		$data['sidebar'] = 'mythopet';
		$data['isIntermediary'] = TRUE;
		$this->texttoimage->draw('muhammad.hilman@ui.ac.id', 'mythopet');
		$this->load->view('header', $data);
		$this->load->view('apps/mythopet');
		$this->load->view('apps/sidebar');
		$this->load->view('footer');
	}
	
	public function meetups()
	{
		$data['menu'] = 'apps';
		$data['sidebar'] = 'meetups';
		$data['isIntermediary'] = TRUE;
		$this->texttoimage->draw('muhammad.hilman@ui.ac.id', 'meetups');
		$this->load->view('header', $data);
		$this->load->view('apps/meetups');
		$this->load->view('apps/sidebar');
		$this->load->view('footer');
	}
	
	public function kabar_ui()
	{
		$data['menu'] = 'apps';
		$data['sidebar'] = 'kabar_ui';
		$data['isIntermediary'] = TRUE;
		$this->texttoimage->draw('muhammad.hilman@ui.ac.id', 'kabar_ui');
		$this->load->view('header', $data);
		$this->load->view('apps/kabar_ui');
		$this->load->view('apps/sidebar');
		$this->load->view('footer');
	}
	
	public function green_force()
	{
		$data['menu'] = 'apps';
		$data['sidebar'] = 'green_force';
		$data['isIntermediary'] = TRUE;
		$this->texttoimage->draw('muhammad.hilman@ui.ac.id', 'green_force');
		$this->load->view('header', $data);
		$this->load->view('apps/green_force');
		$this->load->view('apps/sidebar');
		$this->load->view('footer');
	}
	
	public function ecs()
	{
		$data['menu'] = 'apps';
		$data['sidebar'] = 'ecs';
		$data['isIntermediary'] = TRUE;
		$this->texttoimage->draw('muhammad.hilman@ui.ac.id', 'ecs');
		$this->load->view('header', $data);
		$this->load->view('apps/ecs');
		$this->load->view('apps/sidebar');
		$this->load->view('footer');
	}
	
	public function diary_keuangan()
	{
		$data['menu'] = 'apps';
		$data['sidebar'] = 'diary_keuangan';
		$data['isIntermediary'] = TRUE;
		$this->texttoimage->draw('muhammad.hilman@ui.ac.id', 'diary_keuangan');
		$this->load->view('header', $data);
		$this->load->view('apps/diary_keuangan');
		$this->load->view('apps/sidebar');
		$this->load->view('footer');
	}
	
	public function backpacom()
	{
		$data['menu'] = 'apps';
		$data['sidebar'] = 'backpacom';
		$data['isIntermediary'] = TRUE;
		$this->texttoimage->draw('muhammad.hilman@ui.ac.id', 'backpacom');
		$this->load->view('header', $data);
		$this->load->view('apps/backpacom');
		$this->load->view('apps/sidebar');
		$this->load->view('footer');
	}
	
	public function anonymouz()
	{
		$data['menu'] = 'apps';
		$data['sidebar'] = 'anonymouz';
		$data['isIntermediary'] = TRUE;
		$this->texttoimage->draw('muhammad.hilman@ui.ac.id', 'anonymouz');
		$this->load->view('header', $data);
		$this->load->view('apps/anonymouz');
		$this->load->view('apps/sidebar');
		$this->load->view('footer');
	}
	
	public function fokus_bola()
	{
		$data['menu'] = 'apps';
		$data['sidebar'] = 'fokus_bola';
		$data['isIntermediary'] = TRUE;
		$this->texttoimage->draw('muhammad.hilman@ui.ac.id', 'fokus_bola');
		$this->load->view('header', $data);
		$this->load->view('apps/fokus_bola');
		$this->load->view('apps/sidebar');
		$this->load->view('footer');
	}
	
	public function primbon()
	{
		$data['menu'] = 'apps';
		$data['sidebar'] = 'primbon';
		$data['isIntermediary'] = FALSE;
		$this->texttoimage->draw('drajat.anggoro@gmail.com', 'primbon');
		$this->load->view('header', $data);
		$this->load->view('apps/primbon');
		$this->load->view('apps/sidebar');
		$this->load->view('footer');
	}
	
	public function delman()
	{
		$data['menu'] = 'apps';
		$data['sidebar'] = 'delman';
		$data['isIntermediary'] = TRUE;
		$this->texttoimage->draw('ade@cs.ui.ac.id', 'delman');
		$this->load->view('header', $data);
		$this->load->view('apps/delman');
		$this->load->view('apps/sidebar');
		$this->load->view('footer');
	}
	
	public function hanacaraka()
	{
		$data['menu'] = 'apps';
		$data['sidebar'] = 'hanacaraka';
		$data['isIntermediary'] = FALSE;
		$this->texttoimage->draw('riyan.n68@gmail.com', 'hanacaraka');
		$this->load->view('header', $data);
		$this->load->view('apps/hanacaraka');
		$this->load->view('apps/sidebar');
		$this->load->view('footer');
	}
	
	public function e_morse()
	{
		$data['menu'] = 'apps';
		$data['sidebar'] = 'e_morse';
		$data['isIntermediary'] = FALSE;
		$this->texttoimage->draw('peradnya@gmail.com', 'e_morse');
		$this->load->view('header', $data);
		$this->load->view('apps/e_morse');
		$this->load->view('apps/sidebar');
		$this->load->view('footer');
	}	
	
	public function i_wallet()
	{
		$data['menu'] = 'apps';
		$data['sidebar'] = 'i_wallet';
		$data['isIntermediary'] = FALSE;
		$this->texttoimage->draw('devita.mira@gmail.com', 'i_wallet');
		$this->load->view('header', $data);
		$this->load->view('apps/i_wallet');
		$this->load->view('apps/sidebar');
		$this->load->view('footer');
	}

	public function cek_kulkas()
	{
		$data['menu'] = 'apps';
		$data['sidebar'] = 'cek_kulkas';
		$data['isIntermediary'] = TRUE;
		$this->texttoimage->draw('hadaiq@cs.ui.ac.id', 'cek_kulkas');
		$this->load->view('header', $data);
		$this->load->view('apps/cek_kulkas');
		$this->load->view('apps/sidebar');
		$this->load->view('footer');
	}		
	
	public function kresek_chat()
	{
		$data['menu'] = 'apps';
		$data['sidebar'] = 'kresek_chat';
		$data['isIntermediary'] = FALSE;
		$this->texttoimage->draw('fitri.n91@ui.ac.id', 'kresek_chat');
		$this->load->view('header', $data);
		$this->load->view('apps/kresek_chat');
		$this->load->view('apps/sidebar');
		$this->load->view('footer');
	}	
	
	public function nusabahana()
	{
		$data['menu'] = 'apps';
		$data['sidebar'] = 'nusabahana';
		$data['isIntermediary'] = FALSE;
		$this->texttoimage->draw('robethrahmatullah@gmail.com', 'i_nusabahana');
		$this->load->view('header', $data);
		$this->load->view('apps/nusabahana');
		$this->load->view('apps/sidebar');
		$this->load->view('footer');
	}

	public function siasrama()
	{
		$data['menu'] = 'apps';
		$data['sidebar'] = 'siasrama';
		$data['isIntermediary'] = FALSE;
		$this->texttoimage->draw('ferdy.alfarizka@gmail.com', 'siasrama');
		$this->load->view('header', $data);
		$this->load->view('apps/siasrama');
		$this->load->view('apps/sidebar');
		$this->load->view('footer');
	}
	
	public function simama()
	{
		$data['menu'] = 'apps';
		$data['sidebar'] = 'simama';
		$data['isIntermediary'] = FALSE;
		$this->texttoimage->draw('daramutia@gmail.com', 'simama');
		$this->load->view('header', $data);
		$this->load->view('apps/simama');
		$this->load->view('apps/sidebar');
		$this->load->view('footer');
	}
	
	public function notepedia()
	{
		$data['menu'] = 'apps';
		$data['sidebar'] = 'notepedia';
		$data['isIntermediary'] = TRUE;
		$this->texttoimage->draw('herik@cs.ui.ac.id', 'notepedia');
		$this->load->view('header', $data);
		$this->load->view('apps/notepedia');
		$this->load->view('apps/sidebar');
		$this->load->view('footer');
	}	

	public function remoqte()
	{
		$data['menu'] = 'apps';
		$data['sidebar'] = 'remoqte';
		$data['isIntermediary'] = TRUE;
		$this->texttoimage->draw('herik@cs.ui.ac.id', 'remoqte');
		$this->load->view('header', $data);
		$this->load->view('apps/remoqte');
		$this->load->view('apps/sidebar');
		$this->load->view('footer');
	}
	
	
	public function hanwrite()
	{
		$data['menu'] = 'apps';
		$data['sidebar'] = 'hanwrite';
		$data['isIntermediary'] = FALSE;
		$this->texttoimage->draw('steffi@esquete.com', 'hanwrite');
		$this->load->view('header', $data);
		$this->load->view('apps/hanwrite');
		$this->load->view('apps/sidebar');
		$this->load->view('footer');
	}

	public function sterile_inbox()
	{
		$data['menu'] = 'apps';
		$data['sidebar'] = 'sterile_inbox';
		$data['isIntermediary'] = FALSE;
		$this->texttoimage->draw('dani.arisy@gmail.com', 'sterile_inbox');
		$this->load->view('header', $data);
		$this->load->view('apps/sterile_inbox');
		$this->load->view('apps/sidebar');
		$this->load->view('footer');
	}

	//new function here
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
