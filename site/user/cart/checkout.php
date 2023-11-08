
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
        <h2 >THANH TOÁN</h2>
      </div>

      <div class="row">
        <div class="col-md-4 order-md-1 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Giỏ hàng của bạn</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Tên sản phẩm 1</h6>
                <small class="text-muted">Số lượng</small>
              </div>
              <span class="text-muted">$12</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
              <h6 class="my-0">Tên sản phẩm 2</h6>
              <small class="text-muted">Số lượng</small>
              </div>
              <span class="text-muted">$8</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
              <h6 class="my-0">Tên sản phẩm 3</h6>
              <small class="text-muted">Số lượng</small>
              </div>
              <span class="text-muted">$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Giảm giá</h6>
                <small>Mã giảm giá</small>
              </div>
              <span class="text-success">-$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Tổng tiền</span>
              <strong>$20</strong>
            </li>
          </ul>

        </div>
        <div class="col-lg-8 order-md-1">
          <h4 class="mb-3">Thông tin</h4>
          <form class="needs-validation" action="">
            <div class="row">
              <!-- <div class="col-md-6 mb-3">
                <label for="firstName">Họ</label>
                <input type="text" class="form-control" id="firstName" placeholder="Nhập vào họ" value="" required>
                <div class="invalid-feedback">
                  Vui lòng nhập vào họ
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Tên</label>
                <input type="text" class="form-control" id="lastName" placeholder="Nhập vào tên" value="" required>
                <div class="invalid-feedback">
                Vui lòng nhập vào tên
                </div>
              </div> -->
            </div>

            <div class="mb-3">
              <label for="username">Tên đăng nhập</label>
              <div class="input-group">
             
                <input type="text" class="form-control" id="username" placeholder="Nhập vào tên đăng nhập" required>
                <div class="invalid-feedback" style="width: 100%;">
                 Vui lòng nhập vào tên đăng nhập
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label for="username">Số điện thoại</label>
              <div class="input-group">
             
                <input type="number" class="form-control" id="username" placeholder="Nhập vào số điện thoại" required>
                <div class="invalid-feedback" style="width: 100%;">
                 Vui lòng nhập vào số điện thoại
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label for="email">Email </label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
               Vui lòng nhập vào Email
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Địa chỉ</label>
              <input type="text" class="form-control" id="address" placeholder="Nhập vào địa chỉ" required>
              <div class="invalid-feedback">
                Vui lòng nhập vào địa chỉ
              </div>
            </div>

       

            <!-- <hr class="mb-4"> -->
            <!-- <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-address">
              <label class="custom-control-label" for="same-address">Tôi cam kết thông tin trên là đúng</label>
            </div> -->
          
     

          
         
          
            <hr class="mb-4">
            <button type="submit" class="btn btn-primary btn-lg btn-block" style="background-color: #FBEE2C; color: #132A1E;" ><a class="payCheck" href="index.php?page=orderComplete">THANH TOÁN</a></button>
            
          </form>
        </div>
      </div>

    
    </div>
    <style>
      .payCheck{
        text-decoration: none !important;
        color: black ;
      }

    </style>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
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
