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
		redirect('http://localhost/fifa/index.php/welcome/articles');

	}

	function delete_comment() {
				
				$id = $_POST['id']; 
				$this->db->query("DELETE from articles where id = $id " );
				redirect('http://localhost/fifa/index.php/welcome/articles');

	}
	

	function update_comment() {
	if(isset($_GET['text'])){
		echo 
		'
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<form method = "post">
		<div post>
        <textarea class="form-control" rows="7" id="comment" name= "text" align="center" required width 300px>'.$_GET['text'].'</textarea> </br>
		<div post>
		<button type="submit" class="btn btn-success" name = "saglabat">Saglabat izmainas</button>
		</form>
		';
	}else{
		echo 
		'
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<form method = "post">
		<div post>
		<textarea class="form-control" rows="7" id="comment" name= "text" align="center" required ></textarea> </br>
		</div>
		<button type="submit" class="btn btn-success" name = "saglabat">Saglabat izmainas</button>
		</form>
		'
		;
	}		
		
	if (isset($_POST['saglabat'])) {
		$data = array(
            'text' => $_POST['text'],
        );
		$id = $_GET['id'];

		 $this->db->where('id', $id);
        $this->db->update('articles', $data);
			redirect('http://localhost/fifa/index.php/welcome/articles');
	
}
    }
	
	function gallery() {
		
		$this->load->view('gallery_view');
	}
	
	}
	
	
	
