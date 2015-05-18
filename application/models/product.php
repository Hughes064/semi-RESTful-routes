<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Model {

	public function send_data($input_data) {
		$query = "INSERT INTO products (name, description, price) VALUES (?, ?, ?)";
		$values = array($input_data['name'], $input_data['description'], $input_data['price']);
		return $this->db->query($query, $values);
	}

	public function getProduct($productId) {
		$query = "SELECT * FROM products WHERE id = {$productId}";
		return $this->db->query($query)->row_array();

	}

	public function updateProduct($post_data) {
		$query = "UPDATE products SET name=?, description=?, price=? WHERE id =?";
		$values = array($post_data['name'], $post_data['description'], $post_data['price'], $post_data['id']);
		return $this->db->query($query, $values);
	}

	public function delete_data($productId)
	{
	
		$query = "DELETE from products WHERE id = ?";
		return $this->db->query($query, $productId);
	}
}

