<?php namespace Publico;
    require_once "../Config/Autoload.php";
    use Config\Autoload;
    \Config\Autoload::startAutoload();
    $man =new \App\Models\User();
    print_r($_SERVER['REQUEST_URI']);
    
   