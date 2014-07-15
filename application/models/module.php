<?php
/**
 * Created by PhpStorm.
 * User: Saphir
 * Date: 14-7-2
 * Time: 上午10:52
 */
class Module extends CI_Model {
    var $title   = '';
    var $typeid;
    var $flag='';
    var $deleted=0;

    function __construct()
    {
        parent::__construct();
    }

    function get_last_ten_entries()
    {
        $query = $this->db->get('module', 10);
        return $query->result();
    }
    function get_all()
    {
        $query = $this->db->get('module');
        return $query->result();
    }

    function insert_entry()
    {
        $this->title   = $_POST['title']; // 请阅读下方的备注
        $this->typeid = $_POST['type'];
        $this->flag=$_POST['flag'];
        $this->db->insert('module', $this);
    }

    function delete_entry()
    {
        $this->db->delete('module', $this, array('id' => $_POST['id']));
    }

} 