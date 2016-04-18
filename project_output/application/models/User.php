<?php

/**
 * Created by PhpStorm.
 * User: taind
 * Date: 4/15/16
 * Time: 15:43
 */
class User extends CI_Model
{
    /**
     * User constructor.
     * @access public
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    /**
     * Login Method
     * @param $username
     * @param $password
     * @return bool
     */
    public function login($username, $password)
    {
        $this->db->select('id, username, password');
        $this->db->from('Users');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->limit(1);

        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }


    /**
     * Create_user Function
     * @param $username
     * @param $email
     * @param $password
     * @return mixed
     */
    public function create_user($username, $email, $password)
    {
        $data = array(
            'username' => $username,
            'email'    => $email,
            'password' =>$this->hash_password($password),
            'created_at' => date('Y-m-j H:i:s')
        );

        return $this->db->insert('users', $data);

    }



    /**
     * get_user_id_from_username function
     * @param $username
     * @return mixed
     */
    public function get_user_id_from_username($username)
    {
        $this->db->select('id');
        $this->db->from('users');
        $this->db->where('username', $username);

        return $this->db->get()->row('id');
    }


    /**
     * get_user function
     * @param $user_id
     * @return mixed
     */
    public function get_user($user_id)
    {
        $this->db->from('users');
        $this->db->where('id', $user_id);

        return $this->db->get()->row();
    }

    /**
     * resolve_user_login function
     * @param $username
     * @param $password
     */
    public function resolve_user_login($username, $password)
    {
        $this->db->select('password');
        $this->db->from('users');
        $this->db->where('username', $username);
        $hash  = $this->db->get()->row('password');

        return $this->hash_password($password,$hash);
    }


    /**
     * verify_password_hash function
     * @param $password
     * @param $hash
     * @return bool
     */
    public function verify_password_hash($password, $hash)
    {
        return password_verify($password, $hash);
    }

    /**
     *
     * hash_password function
     * @access private
     * @param $password
     * @return bool|mixed|string
     */
    private function hash_password($password)
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }

}