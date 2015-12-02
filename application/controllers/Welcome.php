<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$this->load->view('galvena_view');
	}

	function articles()
	{
		$this->load->model('articles_model');
		$data['articles'] = $this->articles_model->get_articles();
		$this->load->view('articles_view', $data);
	}

		function Blog()
		{
			parrent::Controller();
			$this->load->helper('url');
			$this->load->helper('form');
		}
	function comment_insert() {
		$this->db->insert('articles', $_POST);
		redirect('welcome/articles/'.$_POST['entry_id']);

	}
	function delete() {
		$this->db->delete('articles ' );
		redirect('welcome/articles/'.$_POST['entry_id']);

	}
}