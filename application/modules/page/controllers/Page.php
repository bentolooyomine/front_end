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
    $data['data_'] = $this->Page_model->get_visi_misi();
	$this->load->view('visi_misi',$data);
	}
public function peraturan_()
	{
    $data['menu'] = $this->Page_model->get_menu_tree();
    // $data['data_'] = $this->Page_model->get_visi_misi();
	$this->load->view('peraturan',$data);
	}

}


	




