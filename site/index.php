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
$listdanhmuc = loadall_danhmuc();
$dshh = loadall_sanpham("", 0);
if (isset($_GET["page"])) {
    switch ($_GET["page"]) {
        case 'trangchu':
            include 'user/view/home.php';
            break;
        case 'sanpham':
            if (isset($_POST['inputProduct']) && ($_POST['inputProduct'])) {
                $inputProduct = $_POST['inputProduct'];
            } else {
                $inputProduct = " ";
            }
            if (isset($_GET['maloai']) && ($_GET['maloai'] > 0)) {
                $ma_loai = $_GET['maloai'];
            } else {
                $ma_loai = 0;

            }
            $dshh = loadall_sanpham($inputProduct, $ma_loai);
            //$product = san_pham_select_trend();
            include 'user/product/product.php';
            break;
        case 'giohang':
            if (!isset($_SESSION['mycart']))
                $_SESSION['mycart'] = [];
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
                    $_SESSION['mycart'][] = $hanghoa;
                }
            }
            include 'user/cart/cart.php';
            break;
        case 'xoacart':
            include 'user/cart/cart.php';
            break;
        case 'checkout':
            if (isset($_POST['checkout']) && ($_POST['checkout'])) {
                $email = isset($_POST['email']) ? $_POST['email'] : '';
                $hoten = isset($_POST['hoten']) ? $_POST['hoten'] : '';
                $sdt = isset($_POST['sdt']) ? $_POST['sdt'] : '';
                $diachi = isset($_POST['diachi']) ? $_POST['diachi'] : '';
                if (empty($email)) {
                    $erremail = "Email trống";
                } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $erremail = "Email sai định dạng";
                }
                if (empty($hoten)) {
                    $errhoten = "Họ tên trống";
                }
                if (empty($sdt)) {
                    $errsdt = "Số điện thoại trống";
                }
                if (empty($diachi)) {
                    $errdiachi = "Địa chỉ trống";
                }
            }
            if (!isset($erremail) && !isset($errhoten) && !isset($errsdt) && !isset($errdiachi)) {
               // header('Location: index.php?page=orderComplete');
            }
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
