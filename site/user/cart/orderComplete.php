<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">



    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container">
        <div class="py-5 text-center">
            <h2>CẢM ƠN QUÝ KHÁCH</h2>
        </div>

        <div class="row">
            <div class="col-lg-12 order-md-2 mb-4">
                    <?
                    // $tong = 0;
                    // $i = 0;
                    // $ship = 30000;
                    // $tongthanhtoan = 0;
                    // $tongsl = 0;
                    foreach ($_SESSION['mycart'] as $cart) {
                        // $thanhtien = $cart[2] * $cart[4];
                        // $tong = $tong + $thanhtien;
                        // $tongthanhtoan = $ship + $tong;
                        // $tongsl += $cart['soluong'];
                        // $i += 1;
                        echo ' 
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                    
                    
                    </h4>
    
                    <ul class="list-group mb-3">
                       <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">Tên sản phẩm : ' . $cart['ten_hh'] . '</h6>
                                <img src="' . $cart['hinh'] . '"class="border rounded me-3" style="width: 76px; height: 116px;" />
                                <small class="text-muted" style="color: black;">Số lượng: ' . $cart['soluong'] . '</small>
                            </div>
                            <span class="text-muted">'.$cart['don_gia'].' VNĐ</span>
                        </li>';

                    }


                    ?>

                    <?
                                      $tong=0;
                          
                                      $ship =30;
                                      $castShip = number_format($ship, 3);
                                      $tongthanhtoan=0;
                                       $total = array_sum(array_map(function ($item) {
                                          return floatval($item['don_gia']) * $item['soluong'];
                                      }, $_SESSION['mycart']));
                        
                                      
                                     $tongthanhtoan = $castShip + $total;
                    ?>
                    <li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                            <h6 class="my-0">Giảm giá</h6>
                            <small>Mã giảm giá</small>
                        </div>
                        <span class="text-success">0</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                            <h6 class="my-0">Tiền Ship</h6>

                        </div>
                        <span class="text-success">
                            <?= $castShip ?> VNĐ
                        </span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Tổng tiền</span>
                        <strong>
                            <?= number_format($tongthanhtoan, 3) ?> VNĐ
                        </strong>
                    </li>
                </ul>
                <div class=" p-2">
                    <div class="form-group">

                        <a href="index.php?page=trangchu"><button type="submit" class="btn  btn-lg btn-block"
                            style="background-color: #FBEE2C; color: #132A1E;">TIẾP TỤC MUA SẮM</button></a>
                    </div>

                </div>
            </div>

        </div>


    </div>
    <style>
        .payCheck {
            text-decoration: none !important;
            color: black;
        }
    </style>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function () {
                'use strict';

                window.addEventListener('load', function () {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');

                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function (form) {
                        form.addEventListener('submit', function (event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
    </script>
</body>

</html>