@extends('layout.master')
@section('content')
<section id="content" class="clearfix container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="main-content">
                            <div class="product-list clearfix">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <aside class="styled_header  use_icon ">
                                            <h2>What hot</h2>
                                            <h3>Sản phẩm nổi bật</h3>
                                            <span class="icon"><img src="img/icon_featured5a54.png" alt=""></span>
                                        </aside>
                                    </div>
                                </div>
                                <!--Product loop-->
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 col-xs-12  pull-center center">
                                        <a class="btn btn-readmore" href="collections/hot-products.html" role="button">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                            <!--Product loop-->
                            <div class="row content-product-list products-resize">
                                    <?php

                                        use App\Model\ProductModel;
                                        $data=ProductModel::all();
                                        if($data) {
                                        foreach ($data as $row) {?>

                                        <div class="col-md-3 col-sm-6 col-xs-6 pro-loop">
                                        <div class="product-block product-resize">
                                            <div class="product-img image-resize view view-third">
                                                <a href="{{url('/product/'.$row['id'])}}" title="<?php echo $row['tenxe']; ?>">
                                                    <img class="first-image" alt=" <?php echo $row['tenxe']; ?> " src="img/<?php echo $row['urlhinhanh']; ?>" />
                                                </a>
                                            </div>
                                            <div class="product-detail clearfix">
                                                <!-- sử dụng pull-left -->
                                                <h3 class="pro-name"><a href="products/kia-morning-at.html" title="echo $row['tenxe'];"><?php echo $row['tenxe']; ?> </a></h3>
                                                <div class="pro-prices">
                                                    <p class="pro-price"><?php echo $row['giamoi']; ?>₫</p>
                                                    <p class="pro-price-del text-left"><del class="compare-price"><?php echo $row['giacu']; ?>₫</del></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }
                                    }else { echo "Chưa có xe nào trong bảng dữ liệu";} ?>
                                </div>
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-xs-12">
                                    <div class="animation fade-in home-banner-1">
                                        <aside class="banner-home-1">
                                            <div class="divcontent"><span class="ad_banner_1">Không tăng giá dịp Lễ Tết<strong class="ad_banner_2">Với tất cả các đơn hàng thuê xe </strong></span>
                                                <span class="ad_banner_desc">Chúng tôi cam kết giữ nguyên giá kể cả trong các dịp Lễ Tết. </span>
                                            </div>
                                            <div class="divstyle" style="border-color:;"></div>
                                        </aside>
                                    </div>
                                </div>
                            </div>
                            <div class="banner-bottom">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 home-category-item-2">
                                        <div class="block-home-category">
                                            <a href="collections/hot-products.html">
                                                <img class="b-lazy b-loaded" src="img/block_home_category15a54.jpg" alt="Dịch vụ thuê xe ">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 home-category-item-3">
                                        <div class="block-home-category">
                                            <a href="collections/hot-products.html">
                                                <img class="b-lazy b-loaded" height="277px" src="img/kinh-nghiem-mua-xe-cu.jpg" alt="Dịch vụ sửa chữa">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end Content-->
                    </div>
                </div>
            </section>
            @endsection