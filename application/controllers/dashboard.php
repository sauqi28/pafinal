<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		// $this->load->library('session');
		// var_dump($this->session->userdata('logged_in'));
		// exit();
		if (!$this->session->userdata('logged_in')) {
			redirect('auth/login');
		} else if ($this->session->userdata('role') != 'superadmin') {
			redirect('tracking');
		}
	}

	public function index()
	{
		//var_dump($this->session->userdata('logged_in'));
		$this->load->model('dashboard_model');
		$data['grafik1'] = $this->dashboard_model->grafik1();
		$data['grafik2'] = $this->dashboard_model->grafik2();
		$data['total_mesin'] = $this->dashboard_model->total_mesin();
		// var_dump($data);
		$this->load->view('dashboard', $data);
		// $this->load->view('dashboard');
	}
}
