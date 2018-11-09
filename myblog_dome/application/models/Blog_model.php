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
        public function get_user_by_email($email){
            $query = $this->db->get_where('t_user',array(
                'email'=>$email
            ));
            return $query->result();
        }
        public function save($email,$name,$password,$gender,$province){
            $data=array(
                'name'=>$name,
                'password'=>$password,
                'email'=>$email,
                'sex'=>$gender,
                'provice'=>$province
            );
            $query =$this->db->insert('t_user', $data);
            return $query;
        }
    }