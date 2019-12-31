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

                                <div class="product-sale">

                                    <span>
                                        <label class="sale-lb">-</label> 11%
                                    </span>
                                </div>


                                <a class="slide-prev slide-nav" href="javascript:">
                                    <i class="fa fa-arrow-circle-o-left fa-2"></i>
                                </a>
                                <a class="slide-next slide-nav" href="javascript:">
                                    <i class="fa fa-arrow-circle-o-right fa-2"></i>
                                </a>

                                <img class="product-image-feature" src="//product.hstatic.net/1000365186/product/60238478_1428027704029966_8736336012642353152_o_ce532d14a186480a8d7f98caa61e4b5a_master.jpg" alt="Thuê xe tự lái Ford Ranger AT 2014">



                                <div id="sliderproduct" class="">
                                    <ul class="slides">

                                        <li class="product-thumb active">
                                            <a href="javascript:" data-image="//product.hstatic.net/1000365186/product/60238478_1428027704029966_8736336012642353152_o_ce532d14a186480a8d7f98caa61e4b5a_master.jpg" data-zoom-image="//product.hstatic.net/1000365186/product/60238478_1428027704029966_8736336012642353152_o_ce532d14a186480a8d7f98caa61e4b5a_master.jpg">
                                                <img alt="Thuê xe tự lái Ford Ranger AT 2014" data-image="//product.hstatic.net/1000365186/product/60238478_1428027704029966_8736336012642353152_o_ce532d14a186480a8d7f98caa61e4b5a_master.jpg" src="//product.hstatic.net/1000365186/product/60238478_1428027704029966_8736336012642353152_o_ce532d14a186480a8d7f98caa61e4b5a_small.jpg">
                                            </a></li>

                                        <li class="product-thumb">
                                            <a href="javascript:" data-image="//product.hstatic.net/1000365186/product/60266267_1428027730696630_1485772772738072576_o_a6ecdb34175a4c32ac1fb013b22ce42c_master.jpg" data-zoom-image="//product.hstatic.net/1000365186/product/60266267_1428027730696630_1485772772738072576_o_a6ecdb34175a4c32ac1fb013b22ce42c_master.jpg">
                                                <img alt="Thuê xe tự lái Ford Ranger AT 2014" data-image="//product.hstatic.net/1000365186/product/60266267_1428027730696630_1485772772738072576_o_a6ecdb34175a4c32ac1fb013b22ce42c_master.jpg" src="//product.hstatic.net/1000365186/product/60266267_1428027730696630_1485772772738072576_o_a6ecdb34175a4c32ac1fb013b22ce42c_small.jpg">
                                            </a></li>

                                    </ul>
                                </div>



                            </div>

                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="product-title">
                                <h1>Thuê xe tự lái Ford Ranger AT 2014</h1>

                                <span id="pro_sku"></span>

                            </div>
                            <div class="product-price" id="price-preview">

                                <span>800,000₫</span><del>900,000₫</del>


                            </div>





                            <form id="add-item-form" action="/cart/add" method="post" class="variants clearfix">
                                <div class="select clearfix" style="display:none">
                                    <select id="product-select" name="id" style="display:none">

                                        <option value="1039601953">Default Title - 800,000₫</option>

                                    </select>
                                </div>

                                <div class="select-wrapper ">
                                    <label>Số lượng</label>
                                    <input id="quantity" type="number" name="quantity" min="1" value="1" class="tc item-quantity">
                                </div>


                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                        <button id="add-to-cart" class=" btn-detail btn-color-add btn-min-width btn-mgt addtocart-modal" name="add">
                                            Thêm vào giỏ
                                        </button>
                                    </div>

                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                        <button id="buy-now" class=" btn-detail btn-color-buy btn-min-width btn-mgt">
                                            Mua ngay
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
                                            <a href="/collections/all/ford-ranger">Ford Ranger</a>
                                        </li>

                                    </ul>
                                </div>


                                <!-- End tags -->
                            </div>


                            <div class="pt20">
                                <!-- Begin social icons -->
                                <div class="addthis_toolbox addthis_default_style ">

                                    <div class="info-socials-article clearfix">
                                        <div class="box-like-socials-article">
                                            <div class="fb-send" data-href="/products/thue-xe-tu-lai-ford-ranger-at-2014">
                                            </div>
                                        </div>
                                        <div class="box-like-socials-article">
                                            <div class="fb-like fb_iframe_widget" data-href="/products/thue-xe-tu-lai-ford-ranger-at-2014" data-layout="button_count" data-action="like" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=&amp;container_width=0&amp;href=https%3A%2F%2Fxetulai247.com%2Fproducts%2Fthue-xe-tu-lai-ford-ranger-at-2014&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey"><span style="vertical-align: bottom; width: 0px; height: 0px;"><iframe name="f276ec66114bfb4" width="1000px" height="1000px" title="fb:like Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.11/plugins/like.php?action=like&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D45%23cb%3Df25158a7d675b78%26domain%3Dxetulai247.com%26origin%3Dhttps%253A%252F%252Fxetulai247.com%252Ff2957322396460c%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Fxetulai247.com%2Fproducts%2Fthue-xe-tu-lai-ford-ranger-at-2014&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey" class="" style="border: none; visibility: visible; width: 0px; height: 0px;"></iframe></span></div>
                                        </div>
                                        <div class="box-like-socials-article">
                                            <div class="fb-share-button fb_iframe_widget" data-href="/products/thue-xe-tu-lai-ford-ranger-at-2014" data-layout="button_count" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;container_width=0&amp;href=https%3A%2F%2Fxetulai247.com%2Fproducts%2Fthue-xe-tu-lai-ford-ranger-at-2014&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey"><span style="vertical-align: bottom; width: 0px; height: 0px;"><iframe name="f189bf0faa433fc" width="1000px" height="1000px" title="fb:share_button Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.11/plugins/share_button.php?app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D45%23cb%3Df2a73d81b8e15%26domain%3Dxetulai247.com%26origin%3Dhttps%253A%252F%252Fxetulai247.com%252Ff2957322396460c%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Fxetulai247.com%2Fproducts%2Fthue-xe-tu-lai-ford-ranger-at-2014&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey" class="" style="border: none; visibility: visible; width: 0px; height: 0px;"></iframe></span></div>
                                        </div>
                                    </div>


                                </div>
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
                                        <p>–&nbsp;<strong>Giá thuê theo ngày</strong>: 800,000 VNĐ</p>
                                        <p><strong>ĐIỀU KIỆN KÝ HỢP ĐỒNG:</strong></p>
                                        <p>– Sổ hộ khẩu Hà Nội ( Đối với khách hàng không có hộ khẩu Hà Nội có thể mượn hộ khẩu bạn bè, người thân tại Hà Nội).</p>
                                        <p>– Chứng minh thư nhân dân hoặc hộ chiếu.</p>
                                        <p>– Giấy phép lái xe ô tô.</p>
                                        <p>– Đặt cọc 1 xe máy có giấy đăng ký chính chủ (trị giá trên 20 triệu đồng) hoặc tiền mặt 30 triệu đồng.</p>
                                        <h4>Để biết thêm chi tiết cũng như giá thuê xe, làm thủ tục, hợp đồng mời quý khách liên hệ:</h4>
                                        <p class="p1">- - - - - - - - -</p>
                                        <p class="p1">Xetulai247.com</p>
                                        <p class="p1">Vp1: 247 Linh Đường- Hoàng Mai - Hà Nội</p>
                                        <p class="p1">Vp2: Ngõ 95 Hoàng Cầu - Đống Đa - HN</p>
                                        <p class="p1">Mob: 09 656 02468 - 0983 868388 - 0961 247 247</p>

                                    </div>
                                </div>
                                <div id="binhluan">
                                    <div class="title-bl">
                                        <h2>Bình luận</h2>
                                    </div>
                                    <div class="product-comment-fb">
                                        <div id="fb-root" class=" fb_reset">
                                            <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
                                                <div></div>
                                                <div><iframe name="fb_xdm_frame_https" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://staticxx.facebook.com/connect/xd_arbiter.php?version=45#channel=f2957322396460c&amp;origin=https%3A%2F%2Fxetulai247.com" style="border: none;"></iframe></div>
                                            </div>
                                            <div class="fb-customerchat ztb-customchatbox-198b6fa8 fb_invisible_flow fb_iframe_widget" page_id="398034353695978" theme_color="#008fff" logged_in_greeting="Hi! How can we help you?" logged_out_greeting="Hi! How can we help you?" greeting_dialog_display="show" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;container_width=0&amp;greeting_dialog_display=show&amp;locale=en_US&amp;logged_in_greeting=Hi!%20How%20can%20we%20help%20you%3F&amp;logged_out_greeting=Hi!%20How%20can%20we%20help%20you%3F&amp;page_id=398034353695978&amp;sdk=joey&amp;theme_color=%23008fff"><span style="vertical-align: top; width: 0px; height: 0px; overflow: hidden;"><iframe name="fa5ffb1969629" width="1000px" height="1000px" title="" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.11/plugins/customerchat.php?app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D45%23cb%3Df1cda4c7c1681dc%26domain%3Dxetulai247.com%26origin%3Dhttps%253A%252F%252Fxetulai247.com%252Ff2957322396460c%26relation%3Dparent.parent&amp;container_width=0&amp;greeting_dialog_display=show&amp;locale=en_US&amp;logged_in_greeting=Hi!%20How%20can%20we%20help%20you%3F&amp;logged_out_greeting=Hi!%20How%20can%20we%20help%20you%3F&amp;page_id=398034353695978&amp;sdk=joey&amp;theme_color=%23008fff" style="border: none; visibility: visible; width: 0px; height: 0px;"></iframe></span></div>
                                        </div>
                                        <div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid_desktop" data-href="https://xetulai247.com/products/thue-xe-tu-lai-ford-ranger-at-2014" data-numposts="5" width="100%" data-colorscheme="light" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;color_scheme=light&amp;container_width=828&amp;height=100&amp;href=https%3A%2F%2Fxetulai247.com%2Fproducts%2Fthue-xe-tu-lai-ford-ranger-at-2014&amp;locale=vi_VN&amp;numposts=5&amp;sdk=joey&amp;version=v2.0" style="width: 100%;"><span style="vertical-align: bottom; width: 100%; height: 178px;"><iframe name="f76036e906122c" width="1000px" height="100px" title="fb:comments Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.0/plugins/comments.php?app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D45%23cb%3Dfc500c3744f9%26domain%3Dxetulai247.com%26origin%3Dhttps%253A%252F%252Fxetulai247.com%252Ff1895cf77faf7b%26relation%3Dparent.parent&amp;color_scheme=light&amp;container_width=828&amp;height=100&amp;href=https%3A%2F%2Fxetulai247.com%2Fproducts%2Fthue-xe-tu-lai-ford-ranger-at-2014&amp;locale=vi_VN&amp;numposts=5&amp;sdk=joey&amp;version=v2.0" style="border: none; visibility: visible; width: 100%; height: 178px;" class=""></iframe></span></div>
                                        <!-- script comment fb -->
                                        <script type="text/javascript">
                                            (function(d, s, id) {
                                                var js, fjs = d.getElementsByTagName(s)[0];
                                                if (d.getElementById(id)) return;
                                                js = d.createElement(s);
                                                js.id = id;
                                                js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.0";
                                                fjs.parentNode.insertBefore(js, fjs);
                                            }(document, 'script', 'facebook-jssdk'));
                                        </script>
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
                                <div class="col-md-3 col-sm-6 col-xs-12 pro-loop">
                                    <div class="product-block product-resize fixheight" style="height: 216px;">
                                        <div class="product-img image-resize view view-third" style="height: 141px;">



                                            <a href="/products/xe-co-lai-16-cho" title="Xe có lái - 16 chỗ">
                                                <img class="first-image  has-img" alt=" Xe có lái - 16 chỗ " src="//product.hstatic.net/1000365186/product/16_cho_f06255e3dd42416381b32d67c8dd7d0f_large.jpg">

                                                <img class="second-image" src="//product.hstatic.net/1000365186/product/16_cho_2_670d9a67637b4eb6bad8a4e013420eec_large.jpg" alt=" Xe có lái - 16 chỗ ">

                                            </a>
                                            <div class="actionss">
                                                <div class="btn-cart-products">
                                                    <a href="javascript:void(0);" onclick="add_item_show_modalCart(1039175581)">
                                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div class="view-details">
                                                    <a href="/products/xe-co-lai-16-cho" class="view-detail">
                                                        <span><i class="fa fa-clone"> </i></span>
                                                    </a>
                                                </div>
                                                <div class="btn-quickview-products">
                                                    <a href="javascript:void(0);" class="quickview" data-handle="/products/xe-co-lai-16-cho"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="product-detail clearfix">
                                            <!-- sử dụng pull-left -->
                                            <h3 class="pro-name"><a href="/products/xe-co-lai-16-cho" title="Xe có lái - 16 chỗ">Xe có lái - 16 chỗ </a></h3>
                                            <div class="pro-prices">
                                                <p class="pro-price">Liên hệ</p>
                                                <p class="pro-price-del text-left"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 pro-loop">
                                    <div class="product-block product-resize fixheight" style="height: 216px;">
                                        <div class="product-img image-resize view view-third" style="height: 141px;">
                                            <div class="product-sale">
                                                <span><label class="sale-lb">- </label> 5%</span>
                                            </div>
                                            <a href="/products/toyota-fortuner-at-bac" title="Toyota Fortuner AT - Bạc">
                                                <img class="first-image  has-img" alt=" Toyota Fortuner AT - Bạc " src="//product.hstatic.net/1000365186/product/fortuner_at_2_1b0ee22324674df187ae19270a71b3a2_large.jpg">

                                                <img class="second-image" src="//product.hstatic.net/1000365186/product/fortuner_at_bac_49f4998e4d8b4550a994ae9048ff8ba4_large.jpg" alt=" Toyota Fortuner AT - Bạc ">

                                            </a>
                                            <div class="actionss">
                                                <div class="btn-cart-products">
                                                    <a href="javascript:void(0);" onclick="add_item_show_modalCart(1039174706)">
                                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div class="view-details">
                                                    <a href="/products/toyota-fortuner-at-bac" class="view-detail">
                                                        <span><i class="fa fa-clone"> </i></span>
                                                    </a>
                                                </div>
                                                <div class="btn-quickview-products">
                                                    <a href="javascript:void(0);" class="quickview" data-handle="/products/toyota-fortuner-at-bac"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-detail clearfix">
                                            <!-- sử dụng pull-right -->
                                            <h3 class="pro-name"><a href="/products/toyota-fortuner-at-bac" title="Toyota Fortuner AT - Bạc">Toyota Fortuner AT - Bạc </a></h3>
                                            <div class="pro-prices">
                                                <p class="pro-price">950,000₫</p>
                                                <p class="pro-price-del text-left"><del class="compare-price">1,000,000₫</del></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 pro-loop">
                                    <div class="product-block product-resize fixheight" style="height: 216px;">
                                        <div class="product-img image-resize view view-third" style="height: 141px;">

                                            <div class="product-sale">
                                                <span><label class="sale-lb">- </label> 8%</span>
                                            </div>
                                            <a href="/products/toyota-camry-den" title="Toyota Camry - Đen">
                                                <img class="first-image  has-img" alt=" Toyota Camry - Đen " src="//product.hstatic.net/1000365186/product/camry_2012_1_001b7966a40b47dbb1377a343c458840_large.jpg">

                                                <img class="second-image" src="//product.hstatic.net/1000365186/product/camry_2012_2_9cec6aa739424e20bd5b2a74e0c3c446_large.jpg" alt=" Toyota Camry - Đen ">

                                            </a>
                                            <div class="actionss">
                                                <div class="btn-cart-products">
                                                    <a href="javascript:void(0);" onclick="add_item_show_modalCart(1039174104)">
                                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div class="view-details">
                                                    <a href="/products/toyota-camry-den" class="view-detail">
                                                        <span><i class="fa fa-clone"> </i></span>
                                                    </a>
                                                </div>
                                                <div class="btn-quickview-products">
                                                    <a href="javascript:void(0);" class="quickview" data-handle="/products/toyota-camry-den"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="product-detail clearfix">


                                            <!-- sử dụng pull-left -->
                                            <h3 class="pro-name"><a href="/products/toyota-camry-den" title="Toyota Camry - Đen">Toyota Camry - Đen </a></h3>
                                            <div class="pro-prices">
                                                <p class="pro-price">1,200,000₫</p>
                                                <p class="pro-price-del text-left"><del class="compare-price">1,300,000₫</del></p>


                                            </div>


                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>




                    </div>
                </div>

            </div>
        </div>
    </div>
</section>




    @endsection