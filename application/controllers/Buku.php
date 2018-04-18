<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/buku
	 *	- or -
	 * 		http://example.com/index.php/buku/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/buku/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		

		$this->template->load('buku/index');
	}

	public function create(){
		$model=IsNewRecord($this->Buku_model->Attribute());
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			redirect('buku/index','refresh');
		}else{
			$data=[
				'content'=>$model,
				'halo'=>'hallo'
			];
			$this->template->load('buku/create',$data);
		}
	}

	public function update(){
		$id=$this->input->get('id');
		$model=$this->find_one();
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {

			redirect('buku/index','refresh');
		}else{
			$data=[
				'content'=>$model,
				'halo'=>'hallo'
			];
			$this->template->load('buku/update',$data);
		}
	}
	
	private function find_one(){
		$x=2;
		if ($x==1){
			$result=IsNewRecord($this->Buku_model->Attribute());
			return $result;
		}else{
			redirect('/buku/error_rep','refresh');
		}
	}

	public function error_rep(){
		$data=['heading'=>'404 Not Found','message'=>'Sorry, an error has occured, Requested page not found!'];
		// $result=
		$this->output->set_status_header('404'); 
		// $this->template->load('errors/html/error_404',$data);
		$this->load->view('errors/html/error_404',$data);
	}
	public function get(){
		$get_param=$this->input->get('get_param');
		echo json_encode($get_param);
	}
}
