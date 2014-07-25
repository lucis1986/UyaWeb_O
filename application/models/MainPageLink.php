<?php
/**
 * Created by PhpStorm.
 * User: Saphir
 * Date: 14-7-2
 * Time: 上午10:52
 */
class Type extends CI_Model {


    function __construct()
    {
        parent::__construct();
    }

    function get_last_ten_entries()
    {
        $query = $this->db->get('type', 10);
        return $query->result();
    }
    function get_all()
    {
        $query = $this->db->get('type');
        return $query->result();
    }



} 