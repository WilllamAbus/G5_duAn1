<?php


function chi_tiet_don_hang($ma_hd){
    $sql = "SELECT * FROM hoa_don_chi_tiet WHERE ma_hd=?";
    return pdo_query($sql, $ma_hd);
}
function don_hang_select_all(){
    $sql = "SELECT * FROM hoa_don dh ORDER BY ngay_lap DESC";
        return pdo_query($sql);
}

function don_hang_delete($ma_hd){
    $sql = "DELETE FROM hoa_don WHERE ma_hd = ?";
        pdo_execute($sql, $ma_hd);
}
function don_hang_update_total_dang_dong_goi($ma_hd,$ma_nv){
    $sql = "UPDATE hoa_don SET tinh_trang = 1, ma_nv =? WHERE ma_hd = ?";
        pdo_execute($sql,$ma_nv,$ma_hd);
}
function don_hang_update_total_dang_giao_hang($ma_hd){
    $sql = "UPDATE hoa_don SET tinh_trang = 2 WHERE ma_hd = ?";
        pdo_execute($sql, $ma_hd);
}
function don_hang_update_total_da_giao_hang($ma_hd){
    $sql = "UPDATE hoa_don SET tinh_trang = 3 WHERE ma_hd = ?";
        pdo_execute($sql, $ma_hd);
}
function don_hang_update_total_bi_huy($ma_hd){
    $sql = "UPDATE hoa_don SET tinh_trang = 4 WHERE ma_hd = ?";
        pdo_execute($sql, $ma_hd);
}

function order_data(array $order_data){
    $conn = pdo_get_connection();
     $sql = "INSERT INTO hoa_don(ma_hd,ma_nd,ten_nd,dia_chi,sdt,ngay_lap,pttt,tong_tien) " .
         " VALUES(:ma_hd,:ma_nd,:ten_nd,:dia_chi,:sdt,:ngay_lap,:pttt,:tong_tien)";
     $statement = $conn->prepare($sql);
     $statement->execute();
} 

function order_detail_data(array $order_detail_data){
    $conn = pdo_get_connection();
     $sql = "INSERT INTO hoa_don_chi_tiet(ma_hd,ma_hh,size,don_gia,so_luong,giam_gia,thanh_tien ) " .
         " VALUES(:ma_hd,:ma_hh,:size,:don_gia,:so_luong,:giam_gia,:thanh_tien)";
     $statement = $conn->prepare($sql);
     $statement->execute();
} 
function update_order_customer($ma_hd, $ten_kh, $dia_chi, $sdt){
    $sql = "UPDATE hoa_don SET ten_kh=?, dia_chi=?, sdt=? WHERE ma_hd = $ma_hd";
        pdo_execute($sql, $ten_kh, $dia_chi, $sdt);
}


/**
 * Summary of sanpham_detail
 * @param mixed $ma_hh
 * @return void
 */
function sanpham_detail($ma_hh){
    $conn = pdo_get_connection();
    $sql = "SELECT * FROM hang_hoa h where h.ma_hh = $ma_hh";
    $stmt = $conn->prepare( $sql );
    $stmt->bindParam(':mahh', $ma_hh, PDO::PARAM_INT);
  
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Close the database connection
    $conn = null;

    // Return the product details
    return $result;
 
}


function addToCart($ma_hh, $ten_hh, $don_gia, $hinh, $soluong) {
    // Check if the cart has been initialized
    if (!isset($_SESSION['mycart'])) {
        $_SESSION['mycart'] = array();
    }

    // Check if the product is already in the cart
    $index = array_search($ma_hh, array_column($_SESSION['mycart'], 'ma_hh'));
    if($index !== null){
        $_SESSION['mycart'][$index]['soluong'] += $soluong;
    }else{
        $_SESSION['cart'][] = array(
            'ma_hh' => $ma_hh,
            'ten_hh' => $ten_hh,
            'don_gia' => $don_gia,
            'hinh' => $hinh,
            'soluong' => $soluong
        );
    }
   
  
    // if ($index !== false) {
    //     // Update quantity if the product is already in the cart
     
    // } else {
    //     // Add a new item to the cart
      
    // }
}

?>