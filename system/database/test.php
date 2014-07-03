<?php
/**
 * Created by PhpStorm.
 * User: zly
 * Date: 14-6-3
 * Time: 下午3:26
 */

class test {
    function selectTable()
    {
        $conn = @ mysql_connect("localhost", "root", "") or die("无法连接MySQL数据库服务器！");
        mysql_select_db("VKD", $conn)or die("无法连接数据库！");
        mysql_query("set names 'GBK'"); //使用GBK中文编码;
        $sql="select count（*） as total from news";//生成查询记录数的SQL语句
        mysql_query($sql) or die("无法执行SQL语句："+$sql+"！");
        $num= mysql_query("news",$conn);
    }
} 