<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// class statistics extends CI_Controller {
class statistics extends TreeTrailController {


  public function index_get() {
	$this->load->model('statistics_model','s_model');
	$stat = $this->s_model->retrieve_all();
	$data['num_rows'] = $stat->num_rows();
	
	$data['data'] = $stat->result_array();

	$this->render('statistics_page',$data,[
      'layout' => 'layout'
    ]);
	
	// $this->render('home',[
	// ],[
      // 'layout' => 'layout'
    // ]);
  }
  
}
