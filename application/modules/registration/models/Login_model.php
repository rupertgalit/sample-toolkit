<?php

class Login_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function checkuser($data)
    {
        $result = $this->db->get_where('users', [
            'username' => $data['postusername']
        ])->row();

        return $result ? $result : false;
    }
}
