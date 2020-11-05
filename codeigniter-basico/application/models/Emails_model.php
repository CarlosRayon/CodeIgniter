<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Emails_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
    }


    /**
     * sendMail  Example
     *
     * @param  boolean $debugger
     * @return void
     */
    public function sendMail($debugger = false)
    {

        $config = array(
            'protocol' => 'smtp',
            'charset' => 'utf-8',
            'wordwrap' => true,
            'mailtype' => 'html',
            'smtp_host' => 'host',
            'smtp_user' => 'user@mail',
            'smtp_pass' => 'pass',
            'smtp_port' => 465,
            'smtp_crypto' => 'ssl',
            'newline' => "\r\n", //must have "" for office365!
            'crlf' => "\r\n", //must have "" for office365!
            'validate' => 'TRUE',
        );
        $this->email->initialize($config);
        $this->email->from('user', 'user name');
        $this->email->to('to email', 'to name');
        $this->email->bcc('carlos.rayon@sitelicon.com');
        $this->email->subject('subject');
        // $this->email->message('Text to message');

        /* Load view html to send */
        $this->email->message(
            $this->load->view('email_templete', array(), true)
        );

        $is_send = $this->email->send(false);

        if ($debugger) {
            $debug = $this->email->print_debugger();
            ddr($debug);
        }

        $this->email->clear();

        return $is_send;
    }
}
