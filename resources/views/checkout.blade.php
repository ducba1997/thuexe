<!doctype html>
<html class="no-js" lang="vi">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
	<link rel="shortcut icon" href="{{ URL::asset('img/favicon5a54.png')}}" type="image/png" />
	<meta charset="utf-8" />
	<title>Oto Hoàng Anh</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=0' name='viewport' />
	<script src="{{ URL::asset('/js/jquery.min.1.11.0.js')}}"></script>
	<script src="{{ URL::asset('/js/bootstrap.min.js')}}"></script>
	<script src="{{ URL::asset('/js/default_script.min5a54.js')}}" type='text/javascript'></script>
	<link href="{{ URL::asset('/css/default_style.min5a54.css')}}" rel='stylesheet' type='text/css' media='all' />
	<script src="{{ URL::asset('/js/jquery-migrate-1.2.0.min.js')}}"></script>
	<script data-target=".product-resize" data-parent=".products-resize" data-img-box=".image-resize" src="{{ URL::asset('/js/fixheightproductv2.js')}}"></script>
	<script src="{{ URL::asset('/js/jquery.flexslider.js')}}" type='text/javascript'></script>
	<link href="{{ URL::asset('/css/flexslider.css')}}" rel='stylesheet' type='text/css' media='all' />
	<script src="{{ URL::asset('/js/scripts5a54.js')}}" type='text/javascript'></script>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/roboto.css')}}">
	<link rel="stylesheet" href="{{ URL::asset('/css/bootstrap.3.3.1.css')}}">
	<link href="{{ URL::asset('/font-awesome/4.6.3/css/font-awesome.min.css')}}" rel='stylesheet' type='text/css' media='all' />
	<link href="{{ URL::asset('/css/styles5a54.css')}}" rel='stylesheet' type='text/css' media='all' />
	<link href="{{ URL::asset('/css/checkouts.css')}}" rel='stylesheet' type='text/css' media='all' />
</head>

<body style="">
	<div class="content">

		<div class="wrap">
			<div class="sidebar">
				<div class="sidebar-content">
					<div class="order-summary order-summary-is-collapsed">
						<h2 class="visually-hidden">Thông tin đơn hàng</h2>
						<div class="order-summary-sections">
							<div class="order-summary-section order-summary-section-product-list" data-order-summary-section="line-items">
								<table class="product-table">
									<thead>
										<tr>
											<th scope="col"><span class="visually-hidden">Hình ảnh</span></th>
											<th scope="col"><span class="visually-hidden">Mô tả</span></th>
											<th scope="col"><span class="visually-hidden">Số lượng</span></th>
											<th scope="col"><span class="visually-hidden">Giá</span></th>
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
										<tr class="product" >
											<td class="product-image">
												<div class="product-thumbnail">
													<div class="product-thumbnail-wrapper">
														<img class="product-thumbnail-image" alt="{{url('/product/'.$data['item']['id'])}}" src="{{url('/img/'.$data['item']['urlhinhanh'])}}">
													</div>
													<span class="product-thumbnail-quantity" aria-hidden="true">{{$data['qty']}}</span>
												</div>
											</td>
											<td class="product-description" style="padding-left: 20px">
												<span class="product-description-name order-summary-emphasis">{{$data['item']['tenxe']}}</span>

											</td>
											<td class="product-quantity visually-hidden">1</td>
											<td class="product-price">
												<span class="order-summary-emphasis">{{$data['item']['giamoi']}}₫</span>
											</td>
										</tr>
										@endforeach
                                                @else
                                                <tr>
                                                    <td>Hiện chưa có sản phẩm</td>
                                                </tr>
                                                @endif
									</tbody>
								</table>
							</div>




							<div class="order-summary-section order-summary-section-total-lines" data-order-summary-section="payment-lines">
								<table class="total-line-table">
									<thead>
										<tr>
											<th scope="col"><span class="visually-hidden">Mô tả</span></th>
											<th scope="col"><span class="visually-hidden">Giá</span></th>
										</tr>
									</thead>
									<tbody>
										<tr class="total-line total-line-subtotal">
											<td class="total-line-name">Tạm tính</td>
											<td class="total-line-price">
												<span class="order-summary-emphasis" >
													{{$oldcart->totalPrice}}₫
												</span>
											</td>
										</tr>

										<tr class="total-line total-line-shipping">
											<td class="total-line-name">Phí vận chuyển</td>
											<td class="total-line-price">
												<span class="order-summary-emphasis" >

													FreeShip

												</span>
											</td>
										</tr>

									</tbody>
									<tfoot class="total-line-table-footer">
										<tr class="total-line">
											<td class="total-line-name payment-due-label">
												<span class="payment-due-label-total">Tổng cộng</span>
											</td>
											<td class="total-line-name payment-due">
												<span class="payment-due-currency">VND</span>
												<span class="payment-due-price" data-checkout-payment-due-target="130000000">
												{{$oldcart->totalPrice}}₫
												</span>
											</td>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="main">
				<div class="main-content">

					<div class="step">
						<div class="step-sections " step="1">


							<div class="section">
								<div class="section-header">
									<h2 class="section-title">Thông tin giao hàng</h2>
								</div>
								<div class="section-content section-customer-information no-mb">

									<input name="utf8" type="hidden" value="✓">
									<div class="inventory_location_data">


										<input name="customer_shipping_district" type="hidden" value="">
										<input name="customer_shipping_ward" type="hidden" value="">

									</div>


									<div class="fieldset">


										<div class="field   ">
											<div class="field-input-wrapper">
												<label class="field-label" for="billing_address_full_name">Họ và tên</label>
												<input placeholder="Họ và tên" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="text" id="billing_address_full_name" name="billing_address[full_name]" value="">
											</div>

										</div>



										<div class="field  field-two-thirds  ">
											<div class="field-input-wrapper">
												<label class="field-label" for="checkout_user_email">Email</label>
												<input placeholder="Email" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="email" id="checkout_user_email" name="checkout_user[email]" value="">
											</div>

										</div>



										<div class="field field-required field-third  ">
											<div class="field-input-wrapper">
												<label class="field-label" for="billing_address_phone">Số điện thoại</label>
												<input placeholder="Số điện thoại" autocapitalize="off" spellcheck="false" class="field-input" size="30" maxlength="11" type="tel" id="billing_address_phone" name="billing_address[phone]" value="">
											</div>

										</div>


										<div class="field   ">
											<div class="field-input-wrapper">
												<label class="field-label" for="billing_address_address1">Địa chỉ</label>
												<input placeholder="Địa chỉ" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="text" id="billing_address_address1" name="billing_address[address1]" value="">
											</div>

										</div>

									</div>
								</div>
								<div id="change_pick_location_or_shipping">


								</div>
							</div>


						</div>
						<div class="step-footer">


							<form id="form_next_step" action="{{url('/checkouts')}}" accept-charset="UTF-8" method="get">
								<input name="utf8" type="hidden" value="✓">
								<button type="submit" class="step-footer-continue-btn btn">
									<span class="btn-content">Tiến hành thanh toán</span>
									<i class="btn-spinner icon icon-button-spinner"></i>
								</button>
							</form>
							<a class="step-footer-previous-link" href="{{url('/carts')}}">
								<svg class="previous-link-icon icon-chevron icon" xmlns="http://www.w3.org/2000/svg" width="6.7" height="11.3" viewBox="0 0 6.7 11.3">
									<path d="M6.7 1.1l-1-1.1-4.6 4.6-1.1 1.1 1.1 1 4.6 4.6 1-1-4.6-4.6z"></path>
								</svg>
								Giỏ hàng
							</a>


						</div>
					</div>

				</div>
				<div class="main-footer">

				</div>
			</div>
		</div>

	</div>
</body>


</html>