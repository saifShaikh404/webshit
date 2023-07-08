<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$this->form_validation->set_rules("searchBar","searchBar","required");

		if($this->form_validation->run() == false){
			$this->load->model("crud_model");
			$data["dataTable"] = $this->crud_model->get();
			$this->load->view("welcome_message", $data);
		}
		else{
			$inputData = $this->input->post("searchBar");
			redirect(base_url() . "Home/data/" . $inputData);
		}

		// $this->load->model("crud_model");
		// $data["dataTable"] = $this->crud_model->get();
		// $this->load->view("welcome_message", $data);


			
	}

	

	public function data($inputData){
		$input = urldecode($inputData);
		$searchArr = explode(" ", $input);

		$this->load->model("crud_model");
		$data["namesList"] = $this->crud_model->search($searchArr);

		$this->load->view("result", $data);
	}

	public function homebar(){
		
	}
    
}
