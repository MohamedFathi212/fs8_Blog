<?php

session_start();
require_once "lib/protoflio.php";


$res = deletePro($_GET['proid']);

if($res == 1){

    header("location:allprotofolio.php");

}else{

    header("location:allprotofolio.php");


}

