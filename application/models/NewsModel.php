<?php
/**
 * Created by PhpStorm.
 * User: Saphir
 * Date: 14-7-2
 * Time: 上午10:52
 */
class NewsModel extends CI_Model {
    var $title   = '';
    var $body = '';


    function __construct()
    {
        parent::__construct();
    }

    function get_last_ten_entries()
    {
        $query = $this->db->get('entries', 10);
        return $query->result();
    }

    function insert_entry()
    {
        $this->title   = $_POST['title']; // 请阅读下方的备注
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->insert('entries', $this);
    }

    function update_entry()
    {
        $this->title   = $_POST['title'];
        $this->body = $_POST['body'];
        $this->db->update('news', $this, array('id' => $_POST['id']));
    }


} 