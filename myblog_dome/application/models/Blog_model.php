<?php
    class Blog_model extends CI_Model
    {
        public function get_t_log()
        {
            $query = $this->db->get('t_blog');      //查表
            return $query->result();
        }
    }