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
order by b.post_time desc";

        $query = $this->db->query($sql);
        return  $query->result();
    }

    public function get_catalog_list(){
        $query = $this->db->get('t_blog_catalog');
        return $query->result();
    }

    public function get_blog_list_by_id($id){
        $sql = "select *,
(select count(*) from t_comment tc where tc.blog_id = b.blog_id) num
 from t_blog b,t_blog_catalog c
where b.catalog_id = c.catalog_id and b.user_id=$id
order by b.post_time desc";

        $query = $this->db->query($sql);
        return  $query->result();
    }

    public function get_blog_by_id($blog_id){
        $sql = "select *,(select count(*) from t_comment c where c.blog_id = b.blog_id) num,
        (select count(*) from t_collect tc where tc.blog_id = b.blog_id) cnum
                from t_blog b where b.blog_id = $blog_id";

        $query = $this->db->query($sql);
        return  $query->row();
    }

    public function get_comment_by_blogid($blog_id){

//        return $this->db->get_where('t_comment',array(
//            'blog_id'=>$blog_id
//        ))->result();

        $this->db->select('*');
        $this->db->from('t_comment c');
        $this->db->join('t_user u','c.user_id=u.id');
        $this->db->where('c.blog_id',$blog_id);
        return $this->db->get()->result();

//        $sql = "
//        select * from t_comment c,t_user u where c.user_id=u.user_id and c.blog_id =1
//        ";
//
//        $sql = "
//        select * from t_comment c left join t_user on c.user_id=u.user_id  where c.blog_id =1
//        ";

    }

}