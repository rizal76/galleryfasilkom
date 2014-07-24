<?php

class Games extends CI_Controller {

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
		$data['menu'] = 'games';
		$data['title'] = 'Games';
		$this->load->view('header', $data);
		$this->load->view('games');
		$this->load->view('footer');
	}
	
	public function tap_the_beat()
	{
		$data['menu'] = 'games';
		$data['sidebar'] = 'tap_the_beat';
		$data['isIntermediary'] = FALSE;
		$this->texttoimage->draw('aa.qidd@gmail.com', 'tap_the_beat');
		$this->load->view('header', $data);
		$this->load->view('games/tap_the_beat', $data);
		$this->load->view('games/sidebar', $data);
		$this->load->view('footer');
	}
	
	public function room_of_disaster()
	{
		$data['menu'] = 'games';
		$data['sidebar'] = 'room_of_disaster';
		$data['isIntermediary'] = TRUE;
		$this->texttoimage->draw('herik@cs.ui.ac.id', 'room_of_disaster');
		$this->load->view('header', $data);
		$this->load->view('games/room_of_disaster');
		$this->load->view('games/sidebar');
		$this->load->view('footer');
	}
	
	public function animal_learning()
	{
		$data['menu'] = 'games';
		$data['sidebar'] = 'animal_learning';
		$data['isIntermediary'] = TRUE;
		$this->texttoimage->draw('herik@cs.ui.ac.id', 'animal_learning');
		$this->load->view('header', $data);
		$this->load->view('games/animal_learning');
		$this->load->view('games/sidebar');
		$this->load->view('footer');
	}
	
	public function think_thing()
	{
		$data['menu'] = 'games';
		$data['sidebar'] = 'think_thing';
		$data['isIntermediary'] = TRUE;
		$this->texttoimage->draw('herik@cs.ui.ac.id', 'think_thing');
		$this->load->view('header', $data);
		$this->load->view('games/think_thing');
		$this->load->view('games/sidebar');
		$this->load->view('footer');
	}
	
	public function world_word_challenge()
	{
		$data['menu'] = 'games';
		$data['sidebar'] = 'world_word_challenge';
		$data['isIntermediary'] = TRUE;
		$this->texttoimage->draw('herik@cs.ui.ac.id', 'world_word_challenge');
		$this->load->view('header', $data);
		$this->load->view('games/world_word_challenge');
		$this->load->view('games/sidebar');
		$this->load->view('footer');
	}
	/*
	public function to_mate()
	{
		$data['menu'] = 'apps';
		$data['sidebar'] = 'to_mate';
		$this->load->view('header', $data);
		$this->load->view('apps/to_mate');
		$this->load->view('apps/sidebar');
		$this->load->view('footer');
	}
	
	public function animal_explorer()
	{
		$data['menu'] = 'apps';
		$data['sidebar'] = 'animal_explorer';
		$this->load->view('header', $data);
		$this->load->view('apps/animal_explorer');
		$this->load->view('apps/sidebar');
		$this->load->view('footer');
	}
	*/
	/*
	public function magic_words()
	{
		$data['menu'] = 'apps';
		$data['sidebar'] = 'magic_words';
		$this->load->view('header', $data);
		$this->load->view('apps/magic_words');
		$this->load->view('apps/sidebar');
		$this->load->view('footer');
	}
	
	public function cloud_miimo()
	{
		$data['menu'] = 'apps';
		$data['sidebar'] = 'cloud_miimo';
		$this->load->view('header', $data);
		$this->load->view('apps/cloud_miimo');
		$this->load->view('apps/sidebar');
		$this->load->view('footer');
	}
*/

	

//new function here

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
}