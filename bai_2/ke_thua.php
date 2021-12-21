<?php
require_once './category.php';
require_once './user.php';
$data_user = user::all();
$data_category =  category::where('id', '=', '4')->get();

echo "<pre>";
var_dump($data_category);
// echo "<br>";
// var_dump($data_user);
