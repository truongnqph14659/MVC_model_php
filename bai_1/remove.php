<?php
require_once './category.php';
$id = $_GET['id'];
category::destroy($id);
echo "done";
