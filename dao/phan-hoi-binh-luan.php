<?php

function phan_hoi_binh_luan_insert($ma_bl,$ma_nv,$phan_hoi,$ngay_them){
    $sql = "INSERT INTO phan_hoi_binh_luan(ma_bl,ma_nv,phan_hoi,ngay_them) VALUES (?,?,?,?)";
    pdo_execute($sql, $ma_bl,$ma_nv,$phan_hoi,$ngay_them);
}
function binh_luan_nv(){
    $sql = "SELECT * FROM phan_hoi_binh_luan";
        return pdo_query($sql);
}