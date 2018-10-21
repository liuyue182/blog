<?php

/**
 * Created by PhpStorm.
 * User: apple
 * Date: 18/10/20
 * Time: 下午2:49
 */
class Blog_model extends CI_Model
{

    public function get_blog_list(){
//        $query = $this->db->get('t_blog');
//        return $query->result();

        $sql = "select *,
(select count(*) from t_comment tc where tc.blog_id = b.blog_id) num
 from t_blog b,t_blog_catalog c
where b.catalog_id = c.catalog_id
order by b.post_time";

        $query = $this->db->query($sql);
        return  $query->result();
    }
    public function get_catalog_list(){
        $query = $this->db->get('t_blog_catalog');
        return $query->result();
    }
}