<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Page_model extends CI_Model {
	public function get_peraturan()
	{
	return $this->db->query('SELECT * FROM produks WHERE produks.status = 1 ORDER BY produks.id DESC LIMIT 4')->result();
	
		
	}

	public function get_berita()
	{
	return $this->db->query('SELECT * FROM beritas WHERE beritas.publish = 1 ORDER BY beritas.id DESC LIMIT 4')->result();
	
		
	}


	public function get_galeri()
	{
	return $this->db->query('SELECT * FROM galeris ORDER BY galeris.id DESC LIMIT 4')->result();
	
		
	}


	public function get_video()
	{
	return $this->db->query('SELECT * FROM videos ORDER BY videos.id DESC LIMIT 4')->result();
	
		
	}
function get_detail_() {
	return $this->db->query('SELECT  k.nama_kategori, COUNT(p.id) AS jumlah FROM kategoriproduks k LEFT JOIN produks p   ON k.id = p.kategori   AND p.status = 1 GROUP BY k.id, k.nama_kategori')->result();
}

 public function insert_survei($data)
    {
        return $this->db->insert('survei_jdih', $data);
    }

	   public function get_rekap_rating()
    {
        $this->db->select('rating, COUNT(*) as total');
        $this->db->from('survei_jdih');
        $this->db->group_by('rating');
        $this->db->order_by('rating', 'DESC');

        return $this->db->get()->result();
    }

	public function get_summary()
    {
        $this->db->select('rating, COUNT(*) as total');
        $this->db->from('survei_jdih');
        $this->db->group_by('rating');
        return $this->db->get()->result();
    }

	 public function check_today($ip)
    {
        $this->db->where('ip_address', $ip);
        $this->db->where('DATE(visit_date)', date('Y-m-d'));
        return $this->db->get('visitors')->row();
    }

    public function insert_visitor($data)
    {
        return $this->db->insert('visitors', $data);
    }


	public function get_today()
    {
        return $this->db
            ->where('DATE(visit_date)', date('Y-m-d'))
            ->count_all_results('visitors');
    }

    public function get_yesterday()
    {
        return $this->db
            ->where('DATE(visit_date)', date('Y-m-d', strtotime('-1 day')))
            ->count_all_results('visitors');
    }

    public function get_month()
    {
        return $this->db
            ->where('MONTH(visit_date)', date('m'))
            ->where('YEAR(visit_date)', date('Y'))
            ->count_all_results('visitors');
    }

    public function get_year()
    {
        return $this->db
            ->where('YEAR(visit_date)', date('Y'))
            ->count_all_results('visitors');
    }

    public function get_total()
    {
        return $this->db->count_all('visitors');
    }
public function get_menu_tree()
{
    $menu = $this->db->where('is_active', 1)
                     ->order_by('sort', 'ASC')
                     ->get('menu')
                     ->result();

    $tree = [];
    foreach ($menu as $m) {
        $tree[$m->parent_id][] = $m;
    }

    return $tree;
}

function get_visi_misi()  {
    return $this->db->query('SELECT * FROM visimisis WHERE id=1')->result();
    
}

   public function get_produk($limit, $start)
{
    $this->db->select('produks.*, kategoriproduks.nama_kategori');
    $this->db->from('produks');
    $this->db->join('kategoriproduks', 'produks.kategori = kategoriproduks.id', 'left');
    $this->db->order_by('produks.id', 'DESC');
    $this->db->limit($limit, $start);

    return $this->db->get()->result();
}

public function count_produk()
{
    return $this->db->count_all('produks');
}


function get_data_peraturan($id) {
    return $this->db->query('SELECT * FROM produks WHERE produks.id = '.$id)->result();
    
}



   public function get_beritas($limit, $start)
{
    $this->db->select('beritas.*, beritas.judul');
    $this->db->from('beritas');
    // $this->db->join('kategoriproduks', 'produks.kategori = kategoriproduks.id', 'left');
    $this->db->order_by('beritas.id', 'DESC');
    $this->db->limit($limit, $start);

    return $this->db->get()->result();
}

public function count_beritas()
{
    return $this->db->count_all('beritas');
}

function get_data_berita($id) {
    return $this->db->query('SELECT * FROM beritas WHERE beritas.id = '.$id)->result();
    
}


}
