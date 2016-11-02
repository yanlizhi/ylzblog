<?php
class Contents extends CI_Controller{
	public function __construct()
	{
		parent:: __construct();
		$this->load->database();
		$this->load->model('Contents_model');
		$this->load->helper('url_helper');
	}
	public function index()
	{
		$data['contents']=$this->Contents_model->get_contents();
		$data['title']='Blogs archive';
		$this->load->view('templates/header',$data);
		$this->load->view('contents/index',$data);
		$this->load->view('templates/footer');
	}
	public function view($slug=NULL)
	{
		$data['contents_item']=$this->Contents_model->get_contents($slug);
		if(empty($data['contents_item']))
		{
			show_404();
		}
		$data['title']=$data['contents_item']['title'];
		$this->load->view('templates/header',$data);
		$this->load->view('contents/view',$data);
		$this->load->view('templates/footer');
	}
	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$data['title']='Create a blog item';
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('text','Text','required');
		if($this->form_validation->run()===FALSE)
		{
			$this->load->view('templates/header',$data);
			$this->load->view('contents/create');
			$this->load->view('templates/footer');
		}
		else
		{
			$this->Contents_model->set_contents();
			$this->load->view('contents/success');
		}
	}
}
?>  