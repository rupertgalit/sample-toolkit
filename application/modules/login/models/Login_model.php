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

    public function getchapters()
    {
        $this->db->from('tbl_chapters');
        $this->db->where('chp_stat', 'active'); // Move the where clause here
        $query = $this->db->get();
    
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
}
