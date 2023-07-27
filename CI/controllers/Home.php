<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		// $this->form_validation->set_rules("searchBar","searchBar","required");

		// Method 2
		$this->form_validation->set_rules("second_search","Second Search");

		if($this->form_validation->run() == false){
			$this->load->model("crud_model");
			$data["dataTable"] = $this->crud_model->get();
			$this->load->view("welcome_message", $data);
		}
		else{
			// $inputData = $this->input->post("searchBar");
			// redirect(base_url() . "Home/data/" . $inputData);

			// Method 2
			$inputData = $this->input->post("second_search");
			redirect(base_url() . "Home/multiple/" . $inputData);
		}

	}

	

	public function data($inputData){
		$input = urldecode($inputData);
		$searchArr = explode(" ", strtolower($input));

		$this->load->model("crud_model");
		$data["namesList"] = $this->crud_model->search($searchArr);
		$this->load->view("result", $data);
	}

	public function multiple($inputData){
		$input = urldecode($inputData);
		$searchArr = explode(" ", strtolower($input));

		$this->load->model("crud_model");
		$data["namesList"] = $this->crud_model->getSearch($searchArr);
		
		$this->load->view("result", $data);
	}
    
}
