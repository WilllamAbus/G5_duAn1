
<?php
session_start();
ob_start();

include 'user/components/stylesshet.php';
include 'user/components/header.php';
require_once '../common/global.php';
include_once '../dao/hang-hoa.php';
include_once '../dao/loai.php';
include_once '../dao/user.php';






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


ob_end_flush();
