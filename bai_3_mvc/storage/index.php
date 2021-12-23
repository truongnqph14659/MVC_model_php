<?php
$url = isset($_GET['url']) ? $_GET['url'] : "/";
require_once '../app/controllers/homeController.php';
require_once '../app/controllers/productController.php';
require_once '../app/models/baseModel.php';
require_once '../app/models/category.php';

use App\homeController\homeController;
use App\ProductController\productController;
use App\ProductController_b\productController as product_b;


switch ($url) {
    case 'index.php':
        $home = new homeController();
        $home->trang_Chu();
        break;
    case 'contact':
        $home = new homeController();
        $home->contact();
        break;
    case 'add_form':
        $home = new productController();
        $home->add_Form();
        break;
    case 'san_pham_b':
        $product = new product_b();
        $product->san_pham();
        break;
    default:
        echo "duong dan khong ton tai";
        break;
}
