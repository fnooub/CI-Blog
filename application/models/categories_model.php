<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Categories_model extends CI_Model
{
    public function __construct() {
        parent::__construct();
    }

    public function getAll()
    {
        $query = $this->db->get('categories');
        return $query->result();
    }

    public function getById($id)
    {
        $query = $this->db->where('id', $id)
                          ->get('categories');
        return $query->row();
    }

    public function getByPost($id)
    {
        $query = $this->db->where('categories_posts.post_id', $id)
                          ->join('categories_posts', 'categories_posts.category_id = categories.id')
                          ->get('categories');
        return $query->result();
    }

    public function create()
    {
        $data = array(
            'name' => $this->input->post('name'),
        );
		$this->db->insert('categories', $data);
        return $this->db->insert_id();
    }
}
