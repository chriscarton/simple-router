<?php 
    $request_uri = $_SERVER['REQUEST_URI'];
    if(
        $request_uri=="/home" 
        || $request_uri == "/"
    ){
        require_once("pages/home.php");
    }else{
        if(is_string($request_uri)){

            if(file_exists("pages/".$request_uri.".php")){
                require_once("pages/".$request_uri.".php");
            }else{
                require_once('not_found.php');
            }
        }else{
            require_once('not_found.php');
        }
    }
?>