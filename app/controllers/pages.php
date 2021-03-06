<?php

class Pages extends CI_Controller {

	public function view($page = 'entrance')
	{
		if ( ! file_exists('app/views/pages/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}

		//$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/header');
		$this->load->view('pages/'.$page);
		$this->load->view('templates/footer');
	}
}