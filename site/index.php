<?php
session_start();
ob_start();
include 'user/components/stylesshet.php';
include 'user/components/header.php';
require_once '../common/global.php';
include_once '../dao/hang-hoa.php';
include_once '../dao/loai.php';
include_once '../dao/user.php';
include_once '../dao/binh-luan.php';
include_once '../dao/phan-hoi-binh-luan.php';
include_once '../dao/cart.php'
    ?>

<?
// include './account/changePass.php';
// include 'slider.php'; 
// include 'support.php'; 
// include 'category.php'; 
$hh=loadall_sanpham("",0);
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
            $hh=loadall_sanpham($inputProduct,$ma_loai);
           
           // $product = san_pham_select_trend();
            include 'user/product/product.php';
            break;

        case 'giohang':
            if (!isset($_COOKIE['ma_nd'])) {
                header('Location: index.php?page=login');
                exit();
            }


            // Assuming this is part of your index.php file
            if (!isset($_SESSION['mycart'])) {
                $_SESSION['mycart'] = [];
            }

            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['addcart'])) {
                $ma_hh = filter_input(INPUT_POST, 'ma_hh', FILTER_SANITIZE_NUMBER_INT);
                $ten_hh = filter_input(INPUT_POST, 'ten_hh', FILTER_SANITIZE_STRING);
                $don_gia = filter_input(INPUT_POST, 'don_gia', FILTER_SANITIZE_STRING);
                $hinh = filter_input(INPUT_POST, 'hinh', FILTER_SANITIZE_STRING);
                $soluong = filter_input(INPUT_POST, 'soluong', FILTER_SANITIZE_NUMBER_INT);
                $giam_gia = filter_input(INPUT_POST, 'giam_gia', FILTER_SANITIZE_NUMBER_INT); 
                if ($ma_hh && $ten_hh && $don_gia && $hinh && $soluong && $giam_gia) {
                    // Here, you would add the product to the cart. Modify this part based on your specific cart logic.
                    // You might have a function like addToCart() or similar.

                    // For demonstration purposes, let's assume a basic cart structure using $_SESSION['mycart']:

                  

                    // Check if the product is already in the cart
                    $index = array_search($ma_hh, array_column($_SESSION['mycart'], 'ma_hh'));

                    if ($index !== false) {
                        // Update quantity if the product is already in the cart
                        $_SESSION['mycart'][$index]['soluong'] += $soluong;
                    } else {
                        // Add a new item to the cart
                      
                        $_SESSION['mycart'][] = [
                            'ma_hh' => $ma_hh,
                            'ten_hh' => $ten_hh,
                            'don_gia' => $don_gia,
                            'hinh' => $hinh,
                            'soluong' => $soluong,
                            'giam_gia' => $giam_gia,
                        ];;
                    }

                 
                } 
            }




            //     // if (isset($_SESSION['mycart']) && (count($_SESSION['mycart']) > 0)) {

            //     //     if (isset($_GET['mahh'])) {
            //     //         extract($_REQUEST);
            //     //         $mahh = $_GET['mahh'];




            //     //     }


            //     //     // if ($sp[0] == $mahh) {

            //     //     //     // $soluong += $sp[4];

            //     //     //     //   $_SESSION['mycart'][$i][4] = $soluongnew;
            //     //     //     // $_SESSION['cart'][$i][4] = $soluong;
            //     //     //     break;
            //     //     // }
            //     //     // foreach ($_SESSION['mycart'] as $sp) {



            //     //     // }
            //     // }
            //     // // for ($i = 1; $i < sizeof($_SESSION['mycart']); $i++) {
            //     // //     if ($_SESSION['mycart'][$i][1] == $mahh) {
            //     // //         $fl = 2;
            //     // //         $soluongnew = $soluong + $_SESSION['mycart'][$i][4];
            //     // //         // $_SESSION['mycart'][$i][4] = $soluongnew;
            //     // //         break;
            //     // //     }
            //     // // }
            //     // if ($fl == 0) {
            //     //     $hanghoa = [$mahh, $tenhh, $dongia, $hinh, $soluong];

            //     //     $_SESSION['mycart'][] = $hanghoa;


            //     // }  


            // }
            include 'user/cart/cart.php';
            break;
        case 'xoacart':

            if (isset($_GET['ma_hh'])) {
                $ma_hh_to_remove = filter_input(INPUT_GET, 'ma_hh', FILTER_SANITIZE_NUMBER_INT);
            
                // Search for the product in the cart
                foreach ($_SESSION['mycart'] as $index => $cartItem) {
                    if ($cartItem['ma_hh'] == $ma_hh_to_remove) {
                        // If product is found, remove it from the cart
                        unset($_SESSION['mycart'][$index]);
                       
                        break; // Exit the loop after removing the ite
                    }
                }
            
                // Reindex the array to remove gaps
                $_SESSION['mycart'] = array_values($_SESSION['mycart']);
            } 
            
            





            // if (isset($_SESSION['mycart'])) {
            //     if (isset($_GET['idcart'])) {

            //         array_splice($_SESSION['mycart'], $_GET['idcart'], 1);

            //     } else {
            //         unset($_SESSION['cartmy']);
            //     }

            //     // if(count($_SESSION['cart'])>0) header('location: cart.php')  ;
            //     //    else  header('location: productPage.php');



            // }
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
        case 'logout':
            include 'logOut.php';
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
