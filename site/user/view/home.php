<?php


include './user/components/slider.php';
// include './user/category/category.php';
?>

<style>
    .picture {

        height: 340px;
    }
</style>
<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Giá tốt
            nhất</span></h2>
    <div class="row px-xl-5">
        <?
        $dshh =load_hanghoa_giathapnha();
        foreach($dshh as $hh){
            extract($hh);
            echo'
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <a href="index.php?page=sanphamct&ma_hh='.$ma_hh.'">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-80  picture mt-5 ml-lg-5" src="../controller/hinh/'.$hinh.'"
                            alt="1692267061265">
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">'.$ten_hh.'</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>'.number_format($don_gia) .' VNĐ</h5>
                            <h6 class="text-muted ml-2"><del>'.number_format($giam_gia) .'%</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small>'. $so_luot_xem .'</small>
                        </div>
                    </div>
                </a>
            </div>
        </div>
            ';
        }
        ?>
    </div>
</div>

<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Deal tốt
            trong ngày
        </span></h2>
    <div class="row px-xl-5">
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <a href="index.php?page=sanpham">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-80  picture mt-5 ml-lg-5" src="../controller/hinh/TheOBS.jpg" alt="TheOBS.jpg">
                        <!-- <div class="">
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                        </div> -->
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">TheOBS</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>390.000 VNĐ</h5>
                            <h6 class="text-muted ml-2"><del>590.000 VNĐ</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <a href="index.php?page=sanpham">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-80  picture mt-5 ml-lg-5" src="../controller/hinh/TheEndOFSelfHelp.jpg" alt="TheEndOFSelfHelp">
                        <!-- <div class="">
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                        </div> -->
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">The End OF Self Help</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>490.000 VNĐ</h5>
                            <h6 class="text-muted ml-2"><del>600.000 VNĐ</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <a href="index.php?page=sanpham">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-80  picture mt-5 ml-lg-5" src="../controller/hinh/MakingTheComplex.jpg" alt="makingTheComplex.jpg">
                        <!-- <div class="">
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                        </div> -->
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">Making The Complex</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>123.000 VNĐ</h5>
                            <h6 class="text-muted ml-2"><del>123.000 VNĐ</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <a href="index.php?page=sanpham">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-80  picture mt-5 ml-lg-5" src="../controller/hinh/bbb.jpg" alt="bbb.jpg">
                        <!-- <div class="">
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                        </div> -->
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">BBB.jpg</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>123.000 VNĐ</h5>
                            <h6 class="text-muted ml-2"><del>123.000 VNĐ</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <a href="index.php?page=sanpham">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-80  picture mt-5 ml-lg-5" src="../controller/hinh/MakingTheComplex.jpg" alt="MakingTheComplex">
                        <!-- <div class="">
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                        </div> -->
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">MakingTheComplex</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>123.000 VNĐ</h5>
                            <h6 class="text-muted ml-2"><del>123.000 VNĐ</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <a href="index.php?page=sanpham">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-80  picture mt-5 ml-lg-5" src="../controller/hinh/TheEndOFSelfHelp.jpg" alt="TheEndOFSelfHelp.jpg">
                        <!-- <div class="">
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                        </div> -->
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">TheEndOFSelfHelp</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>123.000 VNĐ</h5>
                            <h6 class="text-muted ml-2"><del>123.000 VNĐ</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <a href="index.php?page=sanpham">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-80  picture mt-5 ml-lg-5" src="../controller/hinh/theThing.jpg" alt="theThing">
                        <!-- <div class="">
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                        </div> -->
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">TheThing</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>123.000 VNĐ</h5>
                            <h6 class="text-muted ml-2"><del>123.000 VNĐ</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <a href="index.php?page=sanpham">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-80  picture mt-5 ml-lg-5" src="../controller/hinh/TheOBS.jpg" alt="">
                        <!-- <div class="">
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                        </div> -->
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">The Obstace</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>123.000 VNĐ</h5>
                            <h6 class="text-muted ml-2"><del>123.000 VNĐ</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>