@extends('layout.master')
@section('content')
<section id="content" class="clearfix container">
    <div class="row">
        <div id="cart" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!-- Begin empty cart -->

            <div class="row">
                <div id="layout-page" class="col-md-12 col-sm-12 col-xs-12">
                    <span class="header-page clearfix">
                        <h1>Giỏ hàng</h1>
                    </span>
                    <form action="/cart" method="post" id="cartformpage">
                        <table>
                            <thead>
                                <tr>
                                    <th class="image">&nbsp;</th>
                                    <th class="item">Tên sản phẩm</th>
                                    <th class="qty">Số lượng</th>
                                    <th class="price">Giá tiền</th>
                                    <th class="remove">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php

use App\Cart;

$oldcart = new Cart(Session('cart'));
$product = $oldcart->items;
?>
@if(Session::has('cart'))
@foreach($product as $data)
                                <tr>
                                    <td class="image">
                                        <div class="product_image">
                                            <a href="{{url('/product/'.$data['item']['id'])}}">
                                                <img src=" {{url('/img/'.$data['item']['urlhinhanh'])}} " alt="{{$data['item']['tenxe']}}">
                                            </a>
                                        </div>
                                    </td>
                                    <td class="item">
                                        <a href="{{url('/product/'.$data['item']['id'])}}">
                                            <strong>{{$data['item']['tenxe']}}</strong>

                                        </a>
                                    </td>
                                    <td class="qty">
                                    {{$data['qty']}}
                                    </td>
                                    <td class="price">{{$data['item']['giamoi']}} ₫</td>
                                    <td class="remove">
                                        <a href="/cart/change?line=1&amp;quantity=0" class="cart">Xóa</a>
                                    </td>
                                </tr>
@endforeach
@endif
                                <tr class="summary">
                                    <td class="image">&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td class="text-center"><b>Tổng cộng:</b></td>
                                    <td class="price">
                                        <span class="total">
                                            <strong>{{$oldcart->totalPrice}}₫</strong>
                                        </span>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12 inner-left inner-right">
                                <div class="checkout-buttons clearfix">
                                    <label for="note">Ghi chú </label>
                                    <textarea id="note" name="note" rows="8" cols="50"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 cart-buttons inner-right inner-left">
                                <div class="buttons clearfix">
                                    <button type="submit" id="checkout" class="button-default" name="checkout" value="">Thanh toán</button>
                                    <button type="submit" id="update-cart" class="button-default" name="update" value="">Cập nhật</button>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12  col-xs-12 continue-shop">

                                <a href="url('/')">
                                    <i class="fa fa-reply"></i> Tiếp tục mua hàng</a>
                            </div>

                        </div>
                    </form>
                </div>
            </div>



            <!-- End cart -->

        </div>


    </div>
</section>
@endsection