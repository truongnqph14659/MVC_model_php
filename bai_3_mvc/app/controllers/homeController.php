<?php

namespace App\homeController;

use App\BaseModel\category;

class homeController
{
    function trang_Chu()
    {
        $data = category::all();
        include_once '../app/views/homepage.php';
    }
    function contact()
    {
        echo "day la trang contact";
    }
    function tin_tuc()
    {
        echo "day la trang tin tuc";
    }
    function tim_kiem()
    {
        echo "day la trang tim kiem";
    }
}
