<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-lg-8 table-responsive mb-5">
            <table class="table table-light table-borderless table-hover text-center mb-0">
                <thead class="thead-dark">
                    <tr>
                        <th>Sản Phẩm</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Giảm giá</th>
                        <th>Giá</th>
                        <th>Số Lượng</th>
                        <th>Tổng Tiền</th>
                        <th>Xóa</th>
                      
                    </tr>
                </thead>
                <tbody class="align-middle">
                    <?



                    foreach ($_SESSION['mycart'] as $cart) {
                        $thanhtien = $cart['giam_gia']>0 ? (floatval($cart['don_gia']) * $cart['soluong']) * ($cart['giam_gia'] = (100 - $cart['giam_gia']) / 100):floatval($cart['don_gia']) * $cart['soluong'];

                        $compleThanhTien = number_format($thanhtien, 3);

                        // $tong = $tong + $compleThanhTien;
                    

                        // $tongthanhtoan = $ship + $tong;
                        echo '
                  
                  <tr>
                  <td class="align-middle"><img  src="' . $cart['hinh'] . '"alt="hinh" style="width: 50px;"></td>
                  <td class="align-middle">
                     ' . $cart['ten_hh'] . ' 
              </td>
              <td class="align-middle">' . $cart['giam_gia'] * 100 . ' %</td>
                  <td class="align-middle">' . $cart['don_gia'] . ' VNĐ</td>
             
                  <td class="align-middle">
                  ' . $cart['soluong'] . '
                 
                
                
                  </td>
                  <td class="align-middle">' . $compleThanhTien . ' VNĐ</td>
                  <td class="align-middle">
                  
                  <a href="index.php?page=xoacart&ma_hh=' . $cart['ma_hh'] . '">  Xóa
                  </a>

                </td>
     
                
              </td>
              </tr>
                  
                  ';

                    }


                    ?>


                    <?
                    $tong = 0;

                    $ship = 30;
                    $castShip = number_format($ship, 3);
                    $tongthanhtoan = 0;
                    $total = array_sum(array_map(function ($item) {
                        $thanhtien = $item['giam_gia']>0 ? (floatval($item['don_gia']) * $item['soluong']) * ($item['giam_gia'] = (100 - $item['giam_gia']) / 100):floatval($item['don_gia']) * $item['soluong'];   
                        return $thanhtien;
                    }, $_SESSION['mycart']));

                   
                    $tongthanhtoan = $castShip + $total;

                    ?>

                </tbody>
            </table>
        </div>
        <div class="col-lg-4">
            <form class="mb-30" action="index.php?page=checkout">
                <div class="input-group">
                    <input type="text" class="form-control border-0 p-4" placeholder="Nhập Mã Giảm Giá">
                    <div class="input-group-append">
                        <button class="btn btn-primary">Nhập</button>
                    </div>
                </div>
            </form>
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Tổng Giỏ
                    Hàng</span></h5>
            <div class="bg-light p-30 mb-5">
                <div class="border-bottom pb-2">
                    <div class="d-flex justify-content-between mb-3">
                        <h6>Tổng Tiền Sản Phẩm</h6>
                        <h6>
                            <?= number_format($total, 3) ?> VNĐ
                        </h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Tiền Ship</h6>
                        <h6 class="font-weight-medium">
                            <?= $castShip; ?> VNĐ
                        </h6>
                    </div>
                </div>
                <div class="pt-2">
                    <div class="d-flex justify-content-between mt-2">
                        <h5>Tổng Tiền</h5>
                        <h5>
                            <?= number_format($tongthanhtoan, 3) ?> VNĐ
                        </h5>
                    </div>
                    <?
                    if ($tongthanhtoan == 0) {
                        echo 'Giỏ Hàng Rỗng';
                    } else {
                        echo ' <a class="thanhtoan" href="index.php?page=checkout"> <button class="btn btn-block btn-primary font-weight-bold my-3 py-3">Thanh Toán</button></a>';
                    }
                    ?>
                </div>
            </div>
        </div>

    </div>
</div>
<style>
    .thanhtoan {

        color: black;

    }

    .thanhtoan:hover {

        text-decoration: none;
        color: white;
    }
</style>