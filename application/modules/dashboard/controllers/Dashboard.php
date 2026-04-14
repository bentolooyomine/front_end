<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller
{
	  public function __construct()
    {
        parent::__construct();
        $this->load->model('Dashboard_model');
    }
	public function index()
	{	$data['peraturan_index'] = $this->get_peraturan();
		$data['berita_index'] = $this->get_berita();
		$data['galeri_index'] = $this->get_galeri();
		$data['video_index'] = $this->get_video();
		  // MENU TREE LANGSUNG
    $data['menu'] = $this->Dashboard_model->get_menu_tree();
	
		$this->load->view('index_',$data);
	}

	function get_peraturan() {
		return $this->Dashboard_model->get_peraturan();
	}
	function get_berita() {
		return $this->Dashboard_model->get_berita();
	}

	function get_galeri() {
		return $this->Dashboard_model->get_galeri();
	}

function get_video() {
		return $this->Dashboard_model->get_video();
	}


	function get_detail_() {
		$data = $this->Dashboard_model->get_detail_();

		echo json_encode($data);
	}

	


	  public function submit()
    {
        $rating = $this->input->post('rating');
        $saran  = $this->input->post('saran');
        $token  = $this->input->post('token');

        if (!$rating) {
            echo json_encode([
                'status' => false,
                'message' => 'Rating wajib diisi'
            ]);
            return;
        }

        $data = [
            'rating' => $rating,
            'saran'  => $saran,
            'token'  => $token
        ];

        $this->Dashboard_model->insert_survei($data);

        echo json_encode([
            'status' => true,
            'message' => 'Terima kasih atas penilaian Anda!'
        ]);
    }


	public function hasil_survei()
{
    $data = $this->Dashboard_model->get_rekap_rating();

    $total_all = 0;
    foreach ($data as $d) {
        $total_all += $d->total;
    }

    $result = [];

    for ($i = 5; $i >= 1; $i--) {
        $found = false;

        foreach ($data as $d) {
            if ($d->rating == $i) {
                $result[$i] = $d->total;
                $found = true;
            }
        }

        if (!$found) {
            $result[$i] = 0;
        }
    }

    echo json_encode([
        'total' => $total_all,
        'data' => $result
    ]);
}

public function summary_survei()
{
    $data = $this->Dashboard_model->get_summary();

    $total = 0;
    $sum = 0;

    $rating_map = [
        5 => 0,
        4 => 0,
        3 => 0,
        2 => 0,
        1 => 0
    ];

    foreach ($data as $d) {
        $rating_map[$d->rating] = $d->total;
        $total += $d->total;
        $sum += $d->rating * $d->total;
    }

    $avg = $total > 0 ? round($sum / $total, 1) : 0;

    echo json_encode([
        'avg' => $avg,
        'total' => $total,
        'rating' => $rating_map
    ]);
}

 public function track()
    {
        // $this->load->model('Visitor_model');
        $this->load->library('user_agent');

        $ip = $this->input->ip_address();

        // CEK DUPLIKAT (hari ini)
        $exist = $this->Dashboard_model->check_today($ip);

        if ($exist) {
            echo json_encode([
                'status' => false,
                'message' => 'already tracked'
            ]);
            return;
        }

        $data = [
            'ip_address' => $ip,
            'counter' => 1,
            'browser' => $this->agent->browser(),
            'is_mobile' => $this->agent->is_mobile() ? 'YES' : 'NO',
            'operating_system' => $this->agent->platform(),
            'robot' => $this->agent->is_robot() ? 'YES' : 'NO',
            'visit_date' => date('Y-m-d H:i:s'),
            'created_at' => date('Y-m-d H:i:s')
        ];

        $this->Dashboard_model->insert_visitor($data);

        echo json_encode([
            'status' => true,
            'message' => 'tracked'
        ]);
    }

	  public function stats()
    {
          echo json_encode([
            'today' => $this->Dashboard_model->get_today(),
            'yesterday' => $this->Dashboard_model->get_yesterday(),
            'month' => $this->Dashboard_model->get_month(),
            'year' => $this->Dashboard_model->get_year(),
            'total' => $this->Dashboard_model->get_total(),
        ]);
    }


}
