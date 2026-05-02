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

function statistik() {
    $data['menu'] = $this->Page_model->get_menu_tree();

    $data['grafik_kategori'] = $this->Page_model->grafik_kategori();
    $data['grafik_tahun']    = $this->Page_model->grafik_tahun();
    $data['grafik_status']   = $this->Page_model->grafik_status();
    $data['grafik_stack']    = $this->Page_model->grafik_stack();
    $data['grafik5'] = $this->Page_model->grafik_topkategori();
$data['grafik6'] = $this->Page_model->grafik_growth();

    $this->load->view('statistik', $data);
}

//tugas pokok
public function tugaspokok()
	{
    $data['menu'] = $this->Page_model->get_menu_tree();
    $data['data_'] = $this->Page_model->tugaspokok();
    $data['nama_modul'] = 'Tugas Pokok';
	$this->load->view('tugas_pokok',$data);
	}
//hubungi kami

public function hubungi_kami()
	{
    $data['menu'] = $this->Page_model->get_menu_tree();
    $data['data_'] = $this->Page_model->hubungi_kami();
    $data['nama_modul'] = 'Hubungi Kami';
	$this->load->view('hubungi_kami',$data);
	}


    //anggota JDIH
public function anggota_jdih()
	{
    $data['menu'] = $this->Page_model->get_menu_tree();
    $data['data_'] = $this->Page_model->anggota_jdih();
    $data['nama_modul'] = 'Anggota JDIH';
	$this->load->view('anggota_jdih',$data);
	}
//sop JDIh
    public function sop_jdih()
	{
    $data['menu'] = $this->Page_model->get_menu_tree();
    $data['data_'] = $this->Page_model->sop_jdih();
    $data['nama_modul'] = 'SOP JDIH';
	$this->load->view('sop_jdih',$data);
	}

    //sop JDIh
    public function struktur_organisasi()
	{
    $data['menu'] = $this->Page_model->get_menu_tree();
    $data['data_'] = $this->Page_model->struktur_organisasi();
    $data['nama_modul'] = 'Struktur Organisasi';
	$this->load->view('struktur_organisasi',$data);
	}



    public function galeri_video()
{
    $data['menu'] = $this->Page_model->get_menu_tree();
    $data['nama_modul'] = 'Galeri Video';
    $data['video'] = $this->Page_model->galeri_video();

    $this->load->view('galeri_video',$data);
}


public function peraturan($id_menu)
{

    $this->load->library('pagination');
    $this->load->model('Page_model');

    $config['base_url'] = base_url('page/peraturan/'.$id_menu);
    $config['total_rows'] = $this->Page_model->count_produks($id_menu);
    $config['per_page'] = 10;
    $config['uri_segment'] = 4; // <-- pindah ke segment 4

    // Bootstrap style
    $config['full_tag_open'] = '<ul class="pagination justify-content-center">';
    $config['full_tag_close'] = '</ul>';
    $config['attributes'] = ['class' => 'page-link'];

    $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">';
    $config['cur_tag_close'] = '</a></li>';
    $config['num_tag_open'] = '<li class="page-item">';
    $config['num_tag_close'] = '</li>';

    $this->pagination->initialize($config);

    // ambil page dari segment 4
    $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

    $data['menu'] = $this->Page_model->get_menu_tree();
    $data['detail'] = $this->Page_model->get_detail_();
    $data['detail_'] = $this->Page_model->get_produks($config['per_page'], $page, $id_menu);
    $data['pagination'] = $this->pagination->create_links();
    $data['nama_menu'] = $this->Page_model->get_menu_produks($id_menu);

    $this->load->view('peraturan_', $data);

}


    public function galeri_kegiatan()
{
    $data['menu'] = $this->Page_model->get_menu_tree();
    $data['nama_modul'] = 'Galeri Kegiatan';
    $data['gambar'] = $this->Page_model->galeri_kegiatan();

    $this->load->view('galeri_kegiatan',$data);
}


    public function katalog_perda()
{
    $data['menu'] = $this->Page_model->get_menu_tree();
    $data['nama_modul'] = 'Katalog Perda';
    $data['gambar'] = $this->Page_model->katalog_perda();

    $this->load->view('katalog_perda',$data);
}

   public function katalog_perbub()
{
    $data['menu'] = $this->Page_model->get_menu_tree();
    $data['nama_modul'] = 'Katalog Perbub';
    $data['gambar'] = $this->Page_model->katalog_perbub();

    $this->load->view('katalog_perbub',$data);
}


}


	




