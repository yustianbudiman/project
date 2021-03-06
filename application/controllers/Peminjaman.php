<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/peminjaman
	 *	- or -
	 * 		http://example.com/index.php/peminjaman/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/peminjaman/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
			/*load API dari aplikasi core*/
			$url="http://localhost/dashboard_apps-master/peminjaman/";
      		$curl = curl_init();
      			curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
          		curl_setopt($curl, CURLOPT_USERPWD, "username:password");
          		curl_setopt($curl, CURLOPT_HTTPHEADER, array(
          				'api_auth_key: f99aecef3d12e02dcbb6260bbdd35189c89e6e73',
          				'Content-Type: aplicaton/json'
          			));
          		curl_setopt($curl, CURLOPT_URL, $url);
          		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		        $result = curl_exec($curl);
		        curl_close($curl);
		    $data=['result'=>$result,
					];
		$this->template->load('peminjaman/index',$data);
	}

	public function create(){
		$model=IsNewRecord($this->Peminjaman_model->Attribute());
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {

			$service_url = 'http://localhost/dashboard_apps-master/index.php/peminjaman/';
			$curl = curl_init($service_url);
			$data = array(
		        'no_faktur' => $this->input->post('no_faktur'),
		        'tanggal' => $this->input->post('tanggal'),
		        'id_anggota' => $this->input->post('id_anggota')
			);
			curl_setopt($curl, CURLOPT_URL,$service_url);
			curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
			curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
			curl_setopt($curl, CURLOPT_HTTPHEADER, array(
          				'api_auth_key: f99aecef3d12e02dcbb6260bbdd35189c89e6e73',
          				// 'Content-Type: application/x-www-form-urlencoded'
          				// 'Content-Type: application/json'
          			));
			$output = curl_exec($curl);
			curl_close($curl);
			redirect('peminjaman/index','refresh');
		}else{
			$data=[
				'content'=>$model,
				'halo'=>'hallo'
			];
			$this->template->load('peminjaman/create',$data);
		}
	}

	public function update(){
		$id=$this->input->get('id');

		/*load API dari aplikasi core*/
			$url="http://localhost/dashboard_apps-master/peminjaman/index/".$id;
      		$curl = curl_init();
      			curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
          		curl_setopt($curl, CURLOPT_USERPWD, "username:password");
          		curl_setopt($curl, CURLOPT_HTTPHEADER, array(
          				'api_auth_key: f99aecef3d12e02dcbb6260bbdd35189c89e6e73',
          				'Content-Type: aplicaton/json'
          			));
          		curl_setopt($curl, CURLOPT_URL, $url);
          		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		        $result = curl_exec($curl);
		        curl_close($curl);
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {

			$service_url = 'http://localhost/dashboard_apps-master/index.php/peminjaman/single/'.$this->input->post('id');
			$curl = curl_init($service_url);
			$data = array(
		        'no_faktur' => $this->input->post('no_faktur'),
		        'tanggal' => $this->input->post('tanggal'),
		        'id_anggota' => $this->input->post('id_anggota')
			);
			curl_setopt($curl, CURLOPT_URL,$service_url);
			curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
			curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
			curl_setopt($curl, CURLOPT_HTTPHEADER, array(
          				'api_auth_key: f99aecef3d12e02dcbb6260bbdd35189c89e6e73',
          				'Content-Type: application/x-www-form-urlencoded',
          			));
			$output = curl_exec($curl);
			curl_close($curl);
			redirect('peminjaman/index','refresh');
		}else{

			$data=[
				'content'=>json_decode($result,true),
				'halo'=>'hallo'
			];
			$this->template->load('peminjaman/update',$data);
		}
	}

	public function delete(){
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$service_url = 'http://localhost/dashboard_apps-master/index.php/peminjaman/single/'.$this->input->post('id');
			$curl = curl_init($service_url);
			$data = array(
		        'id' => $this->input->post('id'),
		        'delete' => true,
			);
			curl_setopt($curl, CURLOPT_URL,$service_url);
			curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
			curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
			curl_setopt($curl, CURLOPT_HTTPHEADER, array(
          				'api_auth_key: f99aecef3d12e02dcbb6260bbdd35189c89e6e73',
          				'Content-Type: application/x-www-form-urlencoded',
          			));
			$output = curl_exec($curl);
			curl_close($curl);
			redirect('peminjaman/index');
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

	public function kirim_email()
    {
        
    }
}
