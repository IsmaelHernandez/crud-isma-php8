<?php

define("DB_HOST","127.0.0.1");
define("DB_USER","root");
define("DB_NAME","crud");
define("DB_PASS","");


$mysqli=new mysqli('127.0.0.1','root','','crud');
if($mysqli->connect_errno):
        echo "Error: ".$mysqli->connect_error."\n";
   exit;
endif;



?>