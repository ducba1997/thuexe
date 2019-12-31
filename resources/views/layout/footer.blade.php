<footer id="footer">
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 col-xs-12 clear-sm">
                    <div class="widget-wrapper animated">
                        <h3 class="title title_left">Giới thiệu</h3>
                        <div class="inner about_us">
                            <p class="message">Oto Hoang Anh là một trong những đơn vị đi đầu trong lĩnh vực cho thuê xe ô tô giá rẻ, uy tín. Chúng tôi cung cấp các dịch vụ cho thuê xe dài ngày, ngắn ngày, tự lái và có lái cho những đối tượng có nhu cầu thê xe với cam kết đêm đến giá cả tốt nhất cho người có nhu cầu thuê xe.</p>
                            <ul class="list-unstyled">
                                <li>
                                    <i class="fa fa-home"></i>Bến Thủy - tp.Vinh - Nghệ An
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o"></i> <a href="">hoanganh@gmail.com</a>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>0999999999
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-2 col-xs-12 clear-sm">
                    <div class="widget-wrapper animated">
                        <h3 class="title title_left">Liên kết</h3>
                        <div class="inner">
                            <ul class="list-unstyled list-styled">
                                <li>
                                    <a href="">Trang chủ</a>
                                </li>
                                <li>
                                    <a href="pages/dieu-khoan-dich-vu.html">Về chúng tôi</a>
                                </li>
                                <li>
                                    <a href="collections/all.html">Sản phẩm & Dịch vụ</a>
                                </li>
                                <li>
                                    <a href="pages/about-us.html">Hướng dẫn thuê xe</a>
                                </li>
                                <li>
                                    <a href="collections/dich-vu-sua-chua-bao-duong.html">Sửa chữa & Bảo dưỡng</a>
                                </li>
                                <li>
                                    <a href="blogs/news.html">Tin</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-xs-12 clear-sm">
                    <div class="widget-wrapper animated">
                        <h3 class="title title_left">Đăng kí nhận tin</h3>
                        <div class="inner">
                            <form accept-charset='UTF-8' action='/account/contact' class='contact-form' method='post'>
                                <input name='form_type' type='hidden' value='customer'>
                                <input name='utf8' type='hidden' value='✓'>
                                <div class="group-input">
                                    <input type="hidden" id="contact_tags" name="contact[tags]" value="khách hàng tiềm năng, bản tin" />
                                    <input type="email" required="required" name="contact[email]" id="contact_email" />
                                    <span class="bar"></span>
                                    <label>Nhập email của bạn</label>
                                    <button type="submit"><i class="fa fa-paper-plane-o"></i></button>
                                </div>
                            </form>
                            <div class="caption">Hãy nhập facebook của bạn vào đây để nhận tin!</div>
                        </div>
                        <div id="widget-social" class="social-icons">
                            <ul class="list-inline">
                                <li>
                                    <a target="_blank" href="#">
                                        <span class="social-icon">
                                            <i class="fa fa-facebook"></i>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xs-12 clear-sm">
                    <div class="widget-wrapper animated">
                        <div class="inner">
                            <!-- Facebook widget -->
                            <div class="footer-static-content">
                                <div class="fb-page" data-href="" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"> </div>
                            </div>
                            <div style="clear:both;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container copyright">
            <p>Copyright &copy; 2019 Oto Hoàng Anh. <a target='_blank' href=''>Powered by Hoang Anh</a>.</p>
        </div>
    </div>
</footer>
<a href="#" class="scrollToTop ">
    <i class="fa fa-chevron-up"></i>
</a>
<!--Scroll to Top-->
<div id="myCart" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">
                    Bạn có <b></b> sản phẩm trong giỏ hàng
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="hrv-close-modal"></span>
                </button>
            </div>
            <form action="/cart" method="post" id="cartform">
                <div class="modal-body">
                    <table style="width:100%;" id="cart-table">
                        <tr>
                            <th></th>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá tiền</th>
                            <th></th>
                        </tr>
                        <tr class="line-item original">
                            <td class="item-image"></td>
                            <td class="item-title">
                                <a></a>
                            </td>
                            <td class="item-quantity"></td>
                            <td class="item-price"></td>
                            <td class="item-delete text-center"></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="modal-note">
                                <textarea placeholder="Viết ghi chú" id="note" name="note" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="total-price-modal">
                                Tổng cộng : <span class="item-total"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top:10px;">
                        <div class="col-lg-6">
                            <div class="comeback">
                                <a href="collections/all.html">
                                    <i class="fa fa-caret-left mr10"></i>Tiếp tục mua hàng
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 text-right">
                            <div class="buttons btn-modal-cart">
                                <button type="submit" class="button-default" id="checkout" name="checkout">
                                    Đặt hàng
                                    <i class="fa fa-caret-right"></i>
                                </button>
                            </div>
                            <div class="buttons btn-modal-cart">
                                <button type="submit" class="button-default" id="update-cart-modal" name="">
                                    <i class="fa fa-caret-left"></i>
                                    Cập nhật
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</section>
</body>

</html>