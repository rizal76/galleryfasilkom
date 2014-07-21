<?php

class BI extends CI_Controller {

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
		$data['menu'] = 'bi';
		$this->load->view('header', $data);
		$this->load->view('business_incubator');
		$this->load->view('footer');
	}
		
	public function business_incubator()
	{
		$data['menu'] = 'imhere';
		$this->load->view('header', $data);
		$this->load->view('imhere_bi');
		$this->load->view('footer');
	}
	
	public function bi_veda()
	{
		$data['menu'] = 'bi';
		$data['sidebar']= 'veda';
		$data['isIntermediary'] = FALSE;
		$this->texttoimage->draw('lima5budiarto@gmail.com', 'veda');
		$this->load->view('header', $data);
		$this->load->view('bi/bi_veda');
		$this->load->view('sidebar',$data);
		$this->load->view('footer');
	}
	
	public function bi_euis()
	{
		$data['menu'] = 'bi';
		$data['sidebar']= 'euis';
		$data['isIntermediary'] = FALSE;
		$this->texttoimage->draw('santo@cs.ui.ac.id', 'euis');
		$this->load->view('header', $data);
		$this->load->view('bi/bi_euis');
		$this->load->view('sidebar',$data);
		$this->load->view('footer');
	}
	
	public function bi_saas()
	{
		$data['menu'] = 'imhere';
		$data['sidebar']= 'saas';
		$data['isIntermediary'] = FALSE;
		$this->texttoimage->draw('wibi@alumni.ui.ac.id', 'saas');
		$this->load->view('header', $data);
		$this->load->view('bi/bi_saas');
		$this->load->view('sidebar',$data);
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
