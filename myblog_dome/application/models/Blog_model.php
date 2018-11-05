<?php
    class Blog_model extends CI_Model
    {
        public function get_t_log()
        {
//            $query = $this->db->get('t_blog');      //查表
//            return $query->result();
            $this->db->select('*');
            $this->db->from('t_blog a');
            $this->db->join('t_blog_catalog b','a.catalog_id=b.catalog_id' );
            $this->db->order_by('a.post_time','desc');
            $query = $this->db->get();

            return $query->result();

        }
        public function get_t_blog_catalog(){
            $query = $this->db->get('t_blog_catalog');
            return $query->result();
        }
    }