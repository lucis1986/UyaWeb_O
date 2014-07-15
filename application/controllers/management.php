<?php

/**
 * Created by PhpStorm.
 * User: Saphir
 * Date: 14-7-4
 * Time: 上午9:10
 */
class Management extends CI_Controller
{
    public function index()
    {
        $this->load->model("Type");
        $data['types'] = $this->Type->get_all();
        $this->load->model('Module');
        $data['modules'] = $this->Module->get_all();
        $this->load->view('management.php', $data);
    }

    public function createmodule()
    {
        $servername = $_SERVER['SERVER_NAME']; //当前运行脚本所在服务器主机的名字。
        $sub_from = $_SERVER["HTTP_REFERER"]; //链接到当前页面的前一页面的 URL 地址
        $sub_len = strlen($servername); //统计服务器的名字长度。
        $checkfrom = substr($sub_from, 7, $sub_len); //截取提交到前一页面的url，不包含http:://的部分。
        if ($checkfrom != $servername) {
            $msg = "数据来源有误！请从本站提交！";
            header("Content-Type: text/html;charset=utf-8");
            echo $msg;
        } else {
            $this->load->model('Module');
            $this->Module->insert_entry();
            $this->load->helper('url');
            redirect("../management/index");
        }
    }
} 