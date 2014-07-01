<?php
/**
 * Created by PhpStorm.
 * User: Saphir
 * Date: 14-6-30
 * Time: 上午10:04
 */

class News extends CI_Controller
{
    public function  pages(){
        $pagenum=$this->uri->segment(3)?$this->uri->segment(3):1;
        $data['query']=$this->db->get('news');
        $data['title']="新闻公告";
        $data['blocktitle']="新闻公告";
        $this->load->library('pagination');
        $config['base_url'] = '/news/pages/';
        $config['total_rows'] = $data['query']->num_rows;
        $config['per_page'] =15;
        $config['use_page_numbers'] = TRUE;
        $config['first_link'] = '首页';
        $config['last_link'] = '末页';
        $this->pagination->initialize($config);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topnav', $data);
        $this->load->view('templates/view', $data);
        $this->load->view('templates/footer', $data);
    }
    public function index(){

        $data['title'] = $id;
        $data['blocktitle']="新闻公告";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topnav', $data);
        $this->load->view('templates/view', $data);
        $this->load->view('templates/footer', $data);
    }
}