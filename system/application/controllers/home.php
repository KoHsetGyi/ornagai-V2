<?php

class Home extends Controller {

	function Welcome()
	{
		parent::Controller();	
	}
	
	function index()
	{
                $data['base']=$this->config->item('base_url');
		$this->load->view('home_view',$data);
	}
}


?>