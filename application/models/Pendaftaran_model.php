<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran_model extends CI_Model
{
    public function insert_pendaftaran($data)
    {
        return $this->db->insert('Pendaftaran', $data);
    }
}
