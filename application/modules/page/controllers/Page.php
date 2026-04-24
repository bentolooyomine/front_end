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
    $this->load->library('pagination');
    $this->load->model('Page_model');
    $this->Page_model-> get_detail_();

    $config['base_url'] = base_url('page/peraturan_');
    $config['total_rows'] = $this->Page_model->count_produk(); // total data
    $config['per_page'] = 10;
    $config['uri_segment'] = 3;
        // Bootstrap style
    $config['full_tag_open'] = '<ul class="pagination justify-content-center">';
    $config['full_tag_close'] = '</ul>';
    $config['attributes'] = ['class' => 'page-link'];

    $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">';
    $config['cur_tag_close'] = '</a></li>';
    $config['num_tag_open'] = '<li class="page-item">';
    $config['num_tag_close'] = '</li>';

    $this->pagination->initialize($config);

    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

    $data['menu'] = $this->Page_model->get_menu_tree();
    $data['detail'] = $this->Page_model->get_detail_();
    $data['detail_'] = $this->Page_model->get_produk($config['per_page'], $page);
    $data['pagination'] = $this->pagination->create_links();
    

    $this->load->view('peraturan', $data);
}



public function detail($id)
{
    $data['id'] = $id;
    $this->load->view('redirect_post', $data);
}

public function detail_peraturan()
{
    $id = $this->input->post('id');

    if (!$id) {
        redirect('page'); // jaga-jaga kalau akses langsung
    }

    $data['menu'] = $this->Page_model->get_menu_tree();
    $data['detail'] = $this->Page_model->get_detail_();
    $data['data'] = $this->Page_model->get_data_peraturan($id);
    $this->load->view('detail_peraturan',$data);
}



public function berita()
{
    $this->load->library('pagination');
    $this->load->model('Page_model');
    $this->Page_model-> get_detail_();

    $config['base_url'] = base_url('page/berita');
    $config['total_rows'] = $this->Page_model->count_produk(); // total data
    $config['per_page'] = 10;
    $config['uri_segment'] = 3;
        // Bootstrap style
    $config['full_tag_open'] = '<ul class="pagination justify-content-center">';
    $config['full_tag_close'] = '</ul>';
    $config['attributes'] = ['class' => 'page-link'];

    $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">';
    $config['cur_tag_close'] = '</a></li>';
    $config['num_tag_open'] = '<li class="page-item">';
    $config['num_tag_close'] = '</li>';

    $this->pagination->initialize($config);

    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

    $data['menu'] = $this->Page_model->get_menu_tree();
    $data['detail'] = $this->Page_model->get_detail_();
    $data['detail_'] = $this->Page_model->get_beritas($config['per_page'], $page);
    $data['pagination'] = $this->pagination->create_links();
    

    $this->load->view('berita', $data);
}




public function detail_berita($id)
{
    $data['id'] = $id;
    $this->load->view('redirect_berita', $data);
}

public function detail_beritas()
{
    $id = $this->input->post('id');

    if (!$id) {
        redirect('page'); // jaga-jaga kalau akses langsung
    }

    $data['menu'] = $this->Page_model->get_menu_tree();
    $data['detail'] = $this->Page_model->get_detail_();
    $data['data'] = $this->Page_model->get_data_berita($id);
    $this->load->view('detail_berita',$data);
}



}


	




