<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends MY_Controller
{
	  public function __construct()
    {
        parent::__construct();
        $this->load->model('Page_model');
    }
	public function visi_misi()
	{
    $data['menu'] = $this->Page_model->get_menu_tree();
	
		$this->load->view('visi_misi',$data);
	}

}


	




