<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function animation(){
		$this->load->view('html5_animation');
	}
	
	
	public function linkage(){
		$this->load->model("model_linkage");
		$data['rand_years'] = $this->model_linkage->rand_years();
		$this->load->view('linkage_jm',$data);
	}
	
	public function gaussian_blur(){
		$bg_path = "img/bg-race-terran-top";
		echo $bg_path."<br />"; 
		
		$this->load->library('image_lib');
		$config['image_library'] = 'GD2';
		$config['source_image'] = $bg_path.".jpg";
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
		$config['width'] = '500';
		$config['height'] = '500';
		
		$this->image_lib->initialize($config);
		
		if(!$this->image_lib->resize())
		{
		   echo $this->image_lib->display_errors();
		}else{
			echo '<img src="'.base_url().$bg_path.'_thumb.jpg" />';
		}
		// echo '<img src="'.base_url().$bg_path.'.jpg" />';
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */