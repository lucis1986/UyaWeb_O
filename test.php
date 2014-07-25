<?php


///**
// * Created by PhpStorm.
// * User: Saphir
// * Date: 14-7-9
// * Time: 上午9:18
// */
//echo $_SERVER['DOCUMENT_ROOT'];
//
//echo "<br/>";
//
//$basedir = dirname(__FILE__);
//echo $basedir;
//echo "<br/>";
//echo __FILE__;
//
//echo "<br/>";
//$APP_PATH= str_replace($_SERVER['DOCUMENT_ROOT'], '', __FILE__);
//echo $APP_PATH;
//
//echo "<br/>";
//echo $_SERVER['REQUEST_URI'];
//echo "<br/>";
//echo BASEPATH;
//echo "<br/>";
//echo $_SERVER['SCRIPT_NAME'];
//echo "<br/>";
//$a[]=0;
//$a[]=1;
//$a[]=2;
//print_r($a);
//
//

/*function foobar($arg, $arg2) {
    echo __FUNCTION__, " got $arg and $arg2\n";
}
class foo {
    function bar($arg, $arg2) {
        echo __METHOD__, " got $arg and $arg2\n";
    }
}
// Call the foobar() function with 2 arguments
call_user_func_array("foobar", array("one", "two"));
// Call the $foo->bar() method with 2 arguments
$foo = new foo;
call_user_func_array(array($foo, "bar"), array("three", "four"));*/



/*$var1 = 1;
$var2 = 2;

if ( ! function_exists('is_loaded'))
{
    function &is_loaded($class = '')
    {
        static $_is_loaded = array();

        if ($class != '')
        {
            $_is_loaded[strtolower($class)] = $class;
        }

        return $_is_loaded;
    }
}


is_loaded("sss");
is_loaded("ttt");
class ttt{
    public function __construct(){
        $t=array();
        $t["sss"]="sss";
        $t["ccc"]="cccc";
        foreach ($t as $var => $class) {
            $this->$var=&sss($class);
        }

    }
    public function ss(){
      echo $this->ccc;
    }
}
$c=new ttt();
$c->ss();

function test_global()
{
    global $var1,$var2;
    $var1=&$var2;
    $var1=7;


}
test_global();
$var1=4;
echo $var1;
echo $var2;

function &sss($class=""){
    return $class;
}*/

/*$ss["tt"]="sss";
$ss["cc"]="111";

$tt=$ss;
print_r($tt);
$ss["ss"]="222";
array_push($tt,$ss["ss"]);
print_r($tt);*/

/*function &test()
{
    static $b=0;//申明一个静态变量
    $b=$b+1;
    echo $b;
    return $b;
}

$a=test();//这条语句会输出　$b的值　为１
$a=5;
$a=test();//这条语句会输出　$b的值　为2

$a=&test();//这条语句会输出　$b的值　为3
$a=5;
$a=test();//这条语句会输出　$b的值　为6*/

echo date("H:i:s",time());