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
		$this->title = "Search Data";
		$this->subtitle = "halaman untuk melakukan Search data";


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
		$search = $this->input->post('search');  // Mengambil data dari POST

		$data['users'] = $this->data_tracking_model->get_users($search);

		$data['title'] = $this->title;
		$data['subtitle'] = $this->subtitle;
		$data['navbar'] = "data_user";

		if ($this->input->is_ajax_request()) {
			echo json_encode($data['users']);
		} else {
			$this->load->view('data/tracking/index', $data);
		}
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
