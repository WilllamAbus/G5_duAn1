<?php
session_start();
include 'user/components/stylesshet.php';
include 'user/components/header.php';
require_once '../common/global.php';
include_once '../dao/hang-hoa.php';
include_once '../dao/loai.php';
// include_once '../dao/sanpham.php';
?>

<?
// include './account/changePass.php';
// include 'slider.php'; 
// include 'support.php'; 
// include 'category.php'; 
if (isset($_GET["page"])) {
    switch ($_GET["page"]) {
        case 'trangchu':
            include 'user/view/home.php';
            break;
        case 'sanpham':
            $product = san_pham_select_trend();
            include 'user/product/product.php';
            break;

        case 'giohang':
            if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];
            if (isset($_POST['addcart']) && ($_POST['addcart'])) {
                $mahh = $_POST['mahh'];
                $tenhh = $_POST['tenhh'];
                $dongia = $_POST['dongia'];
                $hinh = $_POST['hinh'];
                $soluong = $_POST['soluong'];
              
                $fl = 0; 
                for ($i = 0; $i < sizeof($_SESSION['mycart']); $i++) {
                    if ($_SESSION['mycart'][$i][1] == $tenhh) {
                        $fl = 1;
                        $soluongnew = $soluong + $_SESSION['mycart'][$i][4];
                        $_SESSION['mycart'][$i][4] = $soluongnew;
                        break;
                    }
                }
                if ($fl == 0) {
                    
                    $hanghoa = [$mahh, $tenhh, $dongia, $hinh, $soluong];
                    $_SESSION['mycart'] []= $hanghoa;
                }
              
            }
            include 'user/cart/cart.php';
            break;
        case 'xoacart':
            include 'user/cart/cart.php';
            
    break;
        case 'checkout':
            include 'user/cart/checkout.php';
            break;
        case 'orderComplete':
            include 'user/cart/orderComplete.php';
            break;
        case 'sanphamct':
            include 'user/product/productdetail.php';
            break;
        case 'danhmuc':
            $listdanhmuc = loadall_danhmuc();
            include 'user/category/category.php';
            break;
        case 'changePass':
            include './account/changePass.php';
            break;

        case 'login':
            include './account/login.php';
            break;
        case 'signup':
            include './account/signup.php';
            break;
        case 'update':
            include './account/update.php';
            break;
        case 'forgot':
            include './account/forgot.php';
            break;

        default:
            include 'user/view/home.php';
            break;
    }
} else {
    include 'user/view/home.php';
}
include 'user/components/footer.php';


