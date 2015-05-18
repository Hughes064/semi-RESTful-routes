<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {


	public function index()
	{
		$this->load->view('products');
	}

	public function show($productId)
	{
		$this->load->model('Product');
		$result = $this->Product->getProduct($productId);
		$this->load->view('show', $result);

	}

	public function update() {
	$post_data = $this->input->post();
	// var_dump($post_data);
	// die();
	$this->load->model('Product');
	$this->Product->updateProduct($post_data);
	redirect('/');
	}


	public function edit($productId)
	{

	// {	var_dump($productId);		
		$this->load->model('Product');
		$result = $this->Product->getProduct($productId);
		$this->load->view('edit', $result);		 
	}

	public function addProduct()
	{
		$this->load->view('new');
	}

	public function create()
	{
		$this->load->model('Product');

		$result = $this->Product->send_data($this->input->post());
		redirect('/');
	}

	public function destroy($productId) 
	{
		$this->load->model('Product');
		$result = $this->Product->delete_data($productId);
		redirect('/');

	}


}
