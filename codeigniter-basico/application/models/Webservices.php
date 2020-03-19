<?php

class Webservices extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getLead()
    {
        return $this->db->get('leads')
            ->result();
    }
}
