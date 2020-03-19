<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Validates data
 */

class Validate extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('validates'); /* autoload */
    }


    public function index()
    {
        /* Helper response */
        echo json_msg(true, 'hola', 'mundo');
    }

    /**
     * ajaxValidateForm
     *
     * @param  array $form
     * @return array json
     */
    public function ajaxValidateForm()
    {
        /* Block not json request */
        if (!$this->input->is_ajax_request()) {
            die('No direct script access allowed');
        }

        $data = $_POST;
        if (!$this->validate->validateName($data['name'])) {
            echo json_msg(true, 'errorName', 'Campo nombre no correcto');
        }
    }
}
