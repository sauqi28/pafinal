<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tracking extends CI_Controller
{
	private $title, $subtitle;


	public function __construct()
	{
		parent::__construct();

		$this->load->model('data/data_tracking_model');
		$this->load->helper('url_helper');
		$this->load->library('form_validation');
		$this->load->library('pagination');
		$this->title = "Tracking Data Serial Number";
		$this->subtitle = "halaman untuk melakukan tracking data serial number";


		if (!$this->session->userdata('logged_in')) {
			redirect('auth/login');
		}
	}

	// public function index()
	// {
	// 	$data['users'] = $this->data_tracking_model->get_users();
	// 	$this->load->view('data/tracking/index', $data);
	// }

	public function index()
	{
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$search = $this->input->get('search');

		$config['base_url'] = site_url('tracking/index');
		$config['total_rows'] = $this->data_tracking_model->get_users_count($search);
		$config['per_page'] = 10;
		$config['uri_segment'] = 3;
		$config['reuse_query_string'] = TRUE;


		$config['full_tag_open'] = '<nav aria-label="..."><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav>';
		$config['first_link'] = FALSE;
		$config['last_link'] = FALSE;
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Previous';
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = ' <span class="sr-only">(current)</span></a></li>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</a></li>';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</a></li>';
		$config['attributes'] = array('class' => 'page-link');

		$this->pagination->initialize($config);



		$data['users'] = $this->data_tracking_model->get_users($config['per_page'], $page, $search);
		$data['pagination'] = $this->pagination->create_links();
		$data['title'] = $this->title;
		$data['subtitle'] = $this->subtitle;
		$data['navbar'] = "data_user";

		$this->load->view('data/tracking/index', $data);
	}



	public function view()
	{
		$id = $this->uri->segment(3);
		$data['user'] = $this->data_tracking_model->get_users_view($id);
		// var_dump($data);

		if (empty($data['user'])) {
			show_404();
		}

		$data['title'] = $this->title;
		$data['subtitle'] = $this->subtitle;
		$data['navbar'] = "data_user_add";
		$this->load->view('data/tracking/view', $data);
	}
}
