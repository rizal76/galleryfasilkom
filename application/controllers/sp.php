<?php

class SP extends CI_Controller {

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
		$data['menu'] = 'sp';
		$this->load->view('header', $data);
		$this->load->view('student_project');
		$this->load->view('footer');
	}
	
	public function mobile_ws()
	{
		$data['menu'] = 'sp';
		$data['sidebar']= 'mobile_ws';
		$data['isIntermediary'] = FALSE;
		$this->texttoimage->draw('herik@ui.ac.id', 'mobile_ws');
		$this->load->view('header', $data);
		$this->load->view('sp/mobile_ws');
		$this->load->view('sp/sidebar',$data);
		$this->load->view('footer');
	}
	
	public function print_management()
	{
		$data['menu'] = 'sp';
		$data['sidebar']= 'print_management';
		$data['isIntermediary'] = FALSE;
		$this->texttoimage->draw('santo@cs.ui.ac.id', 'print_management');
		$this->load->view('header', $data);
		$this->load->view('sp/print_management');
		$this->load->view('sp/sidebar',$data);
		$this->load->view('footer');
	}
	
	public function traffic_light()
	{
		$data['menu'] = 'sp';
		$data['sidebar']= 'traffic_light';
		$data['isIntermediary'] = FALSE;
		$this->texttoimage->draw('setiadi@cs.ui.ac.id', 'traffic_light');
		$this->load->view('header', $data);
		$this->load->view('sp/traffic_light');
		$this->load->view('sp/sidebar',$data);
		$this->load->view('footer');
	}
	
	public function detecting_plagiarism()
	{
		$data['menu'] = 'sp';
		$data['sidebar']= 'detecting_plagiarism';
		$data['isIntermediary'] = FALSE;
		$this->texttoimage->draw('tisha@cs.ui.ac.id', 'detecting_plagiarism');
		$this->load->view('header', $data);
		$this->load->view('sp/detecting_plagiarism');
		$this->load->view('sp/sidebar',$data);
		$this->load->view('footer');
	}
	
	public function semantic_data()
	{
		$data['menu'] = 'sp';
		$data['sidebar']= 'semantic_data';
		$data['isIntermediary'] = TRUE;
		$this->texttoimage->draw('ade@cs.ui.ac.id', 'semantic_data');
		$this->load->view('header', $data);
		$this->load->view('sp/semantic_data');
		$this->load->view('sp/sidebar',$data);
		$this->load->view('footer');
	}
	
	public function ahpc()
	{
		$data['menu'] = 'sp';
		$data['sidebar']= 'ahpc';
		$data['isIntermediary'] = FALSE;
		$this->texttoimage->draw('muhammad.hilman@ui.ac.id', 'ahpc');
		$this->load->view('header', $data);
		$this->load->view('sp/ahpc');
		$this->load->view('sp/sidebar',$data);
		$this->load->view('footer');
	}
	
	public function antarnusa()
	{
		$data['menu'] = 'sp';
		$data['sidebar']= 'antarnusa';
		$data['isIntermediary'] = FALSE;
		$this->texttoimage->draw('niken.listya@gmail.com', 'antarnusa');
		$this->load->view('header', $data);
		$this->load->view('sp/antarnusa');
		$this->load->view('sp/sidebar',$data);
		$this->load->view('footer');
	}
	
	public function hello_mom()
	{
		$data['menu'] = 'sp';
		$data['sidebar']= 'hello_mom';
		$data['isIntermediary'] = FALSE;
		$this->texttoimage->draw('peradnya@gmail.com', 'hello_mom');
		$this->load->view('header', $data);
		$this->load->view('sp/hello_mom');
		$this->load->view('sp/sidebar',$data);
		$this->load->view('footer');
	}

	public function graphbt()
	{
		$data['menu'] = 'sp';
		$data['sidebar']= 'graphbt';
		$data['isIntermediary'] = false;
		$this->texttoimage->draw('emerson_simbolon@yahoo.com', 'graphbt');
		$this->load->view('header', $data);
		$this->load->view('sp/graphbt');
		$this->load->view('sp/sidebar',$data);
		$this->load->view('footer');
	}

	public function pheris()
	{
		$data['menu'] = 'sp';
		$data['sidebar']= 'pheris';
		$data['isIntermediary'] = false;
		$this->texttoimage->draw('gilang.kusuma@live.com', 'pheris');
		$this->load->view('header', $data);
		$this->load->view('sp/pheris');
		$this->load->view('sp/sidebar',$data);
		$this->load->view('footer');
	}

	public function palm_doctor()
	{
		$data['menu'] = 'sp';
		$data['sidebar']= 'palm_doctor';
		$data['isIntermediary'] = false;
		$this->texttoimage->draw('qorib.munajat@gmail.com', 'palm_doctor');
		$this->load->view('header', $data);
		$this->load->view('sp/palm_doctor');
		$this->load->view('sp/sidebar',$data);
		$this->load->view('footer');
	}

	public function edoocatia()
	{
		$data['menu'] = 'sp';
		$data['sidebar']= 'edoocatia';
		$data['isIntermediary'] = false;
		$this->texttoimage->draw('riff.2192@gmail.com', 'edoocatia');
		$this->load->view('header', $data);
		$this->load->view('sp/edoocatia');
		$this->load->view('sp/sidebar',$data);
		$this->load->view('footer');
	}

	public function sipkm()
	{
		$data['menu'] = 'sp';
		$data['sidebar']= 'sipkm';
		$data['isIntermediary'] = false;
		$this->texttoimage->draw('fauria.bisara@gmail.com', 'sipkm');
		$this->load->view('header', $data);
		$this->load->view('sp/sipkm');
		$this->load->view('sp/sidebar',$data);
		$this->load->view('footer');
	}
	
	public function gamified_elearning()
	{
		$data['menu'] = 'sp';
		$data['sidebar']= 'gamified_elearning';
		$data['isIntermediary'] = false;
		$this->texttoimage->draw('afifa.amriani@gmail.com', 'gamified_elearning');
		$this->load->view('header', $data);
		$this->load->view('sp/gamified_elearning');
		$this->load->view('sp/sidebar',$data);
		$this->load->view('footer');
	}

	//new function here

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
