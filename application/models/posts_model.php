<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Posts_model extends CI_Model
{
    public function __construct() {
        parent::__construct();
    }

    public function getAll()
    {
        $query = $this->db->get('posts');
        return $query->result();
    }

    public function getById($id)
    {
        $query = $this->db->where('id', $id)
                          ->get('posts');
        return $query->row();
    }

    public function getBySlug($id)
    {
        $query = $this->db->where('slug', $id)
                          ->join('users', 'users.id = posts.user_id')
                          ->get('posts');
        return $query->row();
    }

    public function getByCategoryId($id)
    {
        $query = $this->db->where('categories_posts.category_id', $id)
                          ->join('categories_posts', 'categories_posts.post_id = posts.id')
                          ->get('posts');
        return $query->result();
    }

    public function create()
    {
        $slug = str_replace(' ', '-', $this->input->post('slug'));
        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'content' => $this->input->post('content'),
            'user_id' => $this->session->user_id,
        );
        $this->db->insert('posts', $data);
        $post_id = $this->db->insert_id();

        //categories
        $categories = $this->input->post('category');
        foreach ($categories as $category) {
            $this->db->query("INSERT INTO categories_posts (category_id, post_id) VALUES(?, ?)", array($category, $post_id));
        }
        return $post_id;
    }

}
