@extends('layout.master')
@section('content')
<section id="content" class="clearfix container" style="margin-top: 40px">
    <div class="row">
        <div id="product" class="content-pages" data-sticky_parent="">
            <div class="wrapper-sticky" style="display: block; height: 611px; width: 25%; margin: auto; position: relative; float: left; left: auto; right: auto; top: auto; bottom: auto; vertical-align: top;">
                <div class="col-md-3 col-sm-12 col-xs-12  leftsidebar-col" data-sticky_column="" style="width: 293px; top: auto; bottom: auto; right: auto; left: 0px;">
                    <div class="group_sidebar">

                        <div class="list-group navbar-inner ">
                            <div class="mega-left-title btn-navbar title-hidden-sm">
                                <h3 class="sb-title">Danh mục </h3>
                            </div>

                            <ul class="nav navs sidebar menu" id="cssmenu">
                                <li class="item  first">
                                    <a href="/collections/onsale">
                                        <span>Sản phẩm khuyến mãi</span>
                                    </a>
                                </li>
                                <li class="item  ">
                                    <a href="/collections/hot-products">
                                        <span>Sản phẩm nổi bật</span>
                                    </a>
                                </li>
                                <li class="item  ">
                                    <a href="/collections/all">
                                        <span>Tất cả sản phẩm</span>
                                    </a>
                                </li>
                                <li class="item  last">
                                    <a href="/collections/dich-vu-sua-chua-bao-duong">
                                        <span>Dịch Vụ Sửa Chữa &amp; Bảo Dưỡng</span>
                                    </a>
                                </li>
                            </ul>

                        </div>

                        <!-- Banner quảng cáo -->
                        <div class="list-group_l banner-left hidden-sm hidden-xs">

                            <a href="">
                                <img src="//theme.hstatic.net/1000365186/1000465136/14/left_image_ad.jpg?v=89">
                            </a>

                        </div>
                    </div>
                    <script>
                        $(document).ready(function() {
                            //$('ul li:has(ul)').addClass('hassub');
                            $('#cssmenu ul ul li:odd').addClass('odd');
                            $('#cssmenu ul ul li:even').addClass('even');
                            $('#cssmenu > ul > li > a').click(function() {
                                $('#cssmenu li').removeClass('active');
                                $(this).closest('li').addClass('active');
                                var checkElement = $(this).nextS();
                                if ((checkElement.is('ul')) && (checkElement.is(':visible'))) {
                                    $(this).closest('li').removeClass('active');
                                    checkElement.slideUp('normal');
                                }
                                if ((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
                                    $('#cssmenu ul ul:visible').slideUp('normal');
                                    checkElement.slideDown('normal');
                                }
                                if ($(this).closest('li').find('ul').children().length == 0) {
                                    return true;
                                } else {
                                    return false;
                                }
                            });

                            $('.drop-down').click(function(e) {
                                if ($(this).parents('li').hasClass('has-sub')) {
                                    e.preventDefault();
                                    if ($(this).hasClass('open-nav')) {
                                        $(this).removeClass('open-nav');
                                        $(this).parents('li').children('ul.lve2').slideUp('normal').removeClass('in');
                                    } else {
                                        $(this).addClass('open-nav');
                                        $(this).parents('li').children('ul.lve2').slideDown('normal').addClass('in');
                                    }
                                } else {

                                }
                            });

                        });

                        $("#list-group-l ul.navs li.active").parents('ul.children').addClass("in");
                    </script>

                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" data-sticky_column="">
                <div id="wrapper-detail" class="product-page">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div id="surround">
                                <img class="product-image-feature" src="{{url('/img/'.$data['urlhinhanh'])}}" alt="Thuê xe tự lái {{$data['tenxe']}}">
                            </div>

                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="product-title">
                                <h1>Thuê xe tự lái {{$data['tenxe']}}</h1>

                                <span id="pro_sku"></span>

                            </div>
                            <div class="product-price" id="price-preview">

                                <span>{{$data['giamoi']}} ₫</span><del>{{$data['giacu']}} ₫</del>

                            </div>
                            <form id="{{url('/cart'.$data['id'])}}" action="" onsubmit="return false;" method="get" class="variants clearfix">

                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                        <button id="add-to-cart" class=" btn-detail btn-color-add btn-min-width btn-mgt addtocart-modal" type="submit">
                                            Thêm vào giỏ
                                        </button>
                                    </div>

                                </div>
                            </form>

                            <div class="pt20">
                                <!-- Begin tags -->

                                <div class="tag-wrapper">
                                    <label>
                                        Tags:
                                    </label>
                                    <ul class="tags">

                                        <li class="active">
                                            <a href="{{url('/product/'.$data['id'])}}">{{$data['tenxe']}}</a>
                                        </li>

                                    </ul>
                                </div>


                                <!-- End tags -->
                            </div>


                            <div class="pt20">
                                <!-- Begin social icons -->
                                <!-- End social icons -->
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:20px;">
                            <div role="tabpanel" class="product-comment">
                                <!-- Nav tabs -->
                                <ul class="nav visible-lg visible-md" role="tablist">
                                    <li role="presentation" class="active"><a data-spy="scroll" data-target="#mota" href="#mota" aria-controls="mota" role="tab">Mô tả sản phẩm</a></li>

                                    <li role="presentation">
                                        <a data-spy="scroll" href="#binhluan" aria-controls="binhluan" role="tab">Bình luận</a>
                                    </li>


                                    <li role="presentation">
                                        <a data-spy="scroll" href="#like" aria-controls="like" role="tab">Sản phẩm khác</a>
                                    </li>

                                </ul>
                                <!-- Tab panes -->

                                <div id="mota">

                                    <div class="title-bl visible-xs visible-sm">
                                        <h2>Mô tả</h2>
                                    </div>

                                    <div class="product-description-wrapper">

                                        <p>–&nbsp;<strong>Đời xe</strong>: 2014</p>
                                        <p>–&nbsp;<strong>Giá thuê theo ngày</strong>: {{$data['giamoi']}} VNĐ</p>
                                        <p><strong>ĐIỀU KIỆN KÝ HỢP ĐỒNG:</strong></p>
                                        <p>– Sổ hộ khẩu Nghệ An ( Đối với khách hàng không có hộ khẩu Nghệ An có thể mượn hộ khẩu bạn bè, người thân tại Nghệ An).</p>
                                        <p>– Chứng minh thư nhân dân hoặc hộ chiếu.</p>
                                        <p>– Giấy phép lái xe ô tô.</p>
                                        <p>– Đặt cọc 1 xe máy có giấy đăng ký chính chủ (trị giá trên 20 triệu đồng) hoặc tiền mặt 30 triệu đồng.</p>
                                        <h4>Để biết thêm chi tiết cũng như giá thuê xe, làm thủ tục, hợp đồng mời quý khách liên hệ:</h4>
                                        <p class="p1">- - - - - - - - -</p>
                                        <p class="p1">Mr: Lê Hoàng Anh</p>
                                        <p class="p1">Địa chỉ: Bến Thủy, TP Vinh</p>
                                        <p class="p1">Mob: 09888888888</p>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12  list-like">
                    <div id="like">
                        <div class="title-like">
                            <h2>Sản phẩm khác</h2>
                        </div>
                        <div class="row product-list ">
                            <div class="content-product-list">
                                <?php 
                                use App\Model\ProductModel;
                                $otherproduct= ProductModel::all()->random(4)?>
                                @foreach($otherproduct as $row)
                                <div class="col-md-3 col-sm-6 col-xs-12 pro-loop">
                                    <div class="product-block product-resize fixheight" style="height: 216px;">
                                        <div class="product-img image-resize view view-third" style="height: 141px;">



                                            <a href="{{url('/product/'.$row['id'])}}" title="Xe {{$row['tenxe']}}">
                                                <img class="first-image" alt=" Xe có lái - 16 chỗ " src="{{url('/img/'.$row['urlhinhanh'])}}">

                                            </a>

                                        </div>

                                        <div class="product-detail clearfix">
                                            <!-- sử dụng pull-left -->
                                            <h3 class="pro-name"><a href="{{url('/product/'.$row['id'])}}" title="Xe có lái - 16 chỗ">Xe {{$row['tenxe']}} </a></h3>
                                            <div class="pro-prices">
                                                <p class="pro-price">Liên hệ</p>
                                                <p class="pro-price-del text-left"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach
                            </div>
                        </div>




                    </div>
                </div>

            </div>
        </div>
    </div>
</section>




    @endsection