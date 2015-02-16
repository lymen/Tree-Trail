<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Init_db extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->model("init_db_model", "db_checker");
	}

	public function index() {
		//run checks
		$this->db_checker->reset_results();

		$this->db_checker->check_if_tables_exist();
		$this->db_checker->check_for_partial_tables();
		$this->db_checker->check_db_table_collations();

		$data = $this->db_checker->results();
		$this->load->view("init_db/status", $data);
	}

	public function start_init() {
		
	}

}
