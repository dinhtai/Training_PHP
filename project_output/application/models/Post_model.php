<?php

/**
 * Created by PhpStorm.
 * User: taind
 * Date: 4/15/16
 * Time: 13:33
 */
class Post_model extends Model
{
    /**
     * Get list Post show on timeline
     * @param array $filter
     * @param int $limit
     * @param int $offet
     */
    public function getPosts($filter = [], $limit = 50, $offet = 0)
    {
        $listPost = array();

        $query = $this->db->where($filter);
        $query = $this->db->order_by('modified DESC');
        $query = $this->db->get('posts', $limit, $offet);

        // get user infor
        foreach ($query->result() as $id => $post) {
            $user_id = $post->user_id;
            // get user infor by user_id
            $user_infor = $this->getUserByid($user_id);
            $post->user_infor = $user_infor;
            $listPost[$id] = $post;
        }
        return $listPost;
    }

    /**
     * Get User By Id
     * @param $id
     * @return array
     */
    public function getUserByid($id)
    {
        $user_infor = array();

        $query = $this->db->where(array('id' => $id));
        $query = $this->db->get('users');

        $user_infor = $query->result();
        return $user_infor;
    }


    public function postNews($post_content)
    {
        if (empty($post_content)) {
            return false;
        }
        $user_id = $_SESSION['user_id'];
        if (isset($user_id)) {
            $data = array(
                'user_id' => $user_id,
                'content' => $post_content
            );
            $this->insert($data, 'posts');
        }


    }
}