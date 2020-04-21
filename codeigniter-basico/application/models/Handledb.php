<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Handledb extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }



    /**
     * exampleInsert
     *
     * @param  array $dataTest array('campo' => 'valor', 'campo-2' => valor)
     * @return Int
     */
    public function exampleInsert($dataTest)
    {

        $this->db->insert('leads', $dataTest);
        return $this->db->insert_id();
    }

    /**
     * exampleGet
     *
     * @return Array
     */
    public function exampleGet()
    {
        return $this->db->get('leads')->result();
    }
}
