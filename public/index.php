<?php
require_once '../app/init.php';
error_reporting(3);
if(!session_id()){
    session_start();
}
$app = new App();
?>