<?php
/**
 * Created by PhpStorm.
 * User: Saphir
 * Date: 14-7-25
 * Time: 上午11:12
 */

class MY_Controller extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->test();
    }
    public function test(){
        echo "tttt";
    }

} 