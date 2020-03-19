<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('webservices'); /* autoload */
    }


    public function index()
    {
        $this->load->view('home');
    }

    public function gracias()
    {
        $data['leads'] = $this->webservices->getLead();
        $this->load->view('gracias', $data);
    }
}
