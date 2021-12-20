<?php 
// Файл с роутами

$request_path = $_GET['route'];

if ($request_path == '') {
    $ctr = new \Controllers\Test_Cont();
    $ctr->test();
}