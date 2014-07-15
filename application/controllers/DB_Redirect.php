<?php

/**
 * Created by PhpStorm.
 * User: Saphir
 * Date: 14-7-14
 * Time: 下午3:30
 */

class DB_Redirect extends CI_Controller
{
    public function index()
    {
        $moudel = $this->db->query('select  * from module where flag="' . $this->uri->segments[1] . '"');
        $result = $moudel->result();
        if (count($result) > 0) {
            $type = $this->db->query('select  * from type where id=' . $result[0]->typeid)->result();

            if (count($type) > 0) {
                $class= $type[0]->flag;
                require(APPPATH."controllers/".$class.".php");
                $t=new $class();
                $method=$this->uri->segments[2];
                $t->baseurl="/".$this->uri->segments[1]."/".$method;
                $num=!isset($this->uri->segments[3])?1:$this->uri->segments[3];
                call_user_func_array(array(&$t,$method),array($num));
            }
        }
    }
} 