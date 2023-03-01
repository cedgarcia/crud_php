<?php
require_once 'app/init.php';

$c = isset($_GET['c']) ? $_GET['c'] : 'crud';
$m = isset($_GET['m']) ? $_GET['m'] : 'index';

// concatenate 
$c .= 'Controller';

if(file_exists('app/controllers/' . $c . '.php')){
    require_once 'app/controllers/' . $c . '.php';
    if(method_exists($c, $m)){
        $c = new $c;
        call_user_func([$c,$m]);
    }else{
        die("Error : The method or function [{$m}()] does not exist]");
    }    
}else{
    die("Error : Controller [{$c}] does not exist.");
}