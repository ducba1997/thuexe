@extends('layout.master')
@section('content')
<div class="row">

    <div id="layout-page" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 custom-create">
        <span class="header-contact header-page clearfix">
            <h1>Tạo tài khoản</h1>
        </span>
        <div class="userbox">
            <form accept-charset="UTF-8" action="{{url('/register')}}" id="create_customer" method="post">
                @csrf
                @if(count($errors)>0)
                    <div class="errors">
                    @foreach($errors->all() as $error)
                        <ul>
                            <li>{{$error}}</li>
                        </ul>
                        @endforeach
                    </div>
                @endif
                <div id="first_name" class="clearfix large_form">
                    <label for="first_name" class="label icon-field"><i class="icon-login icon-user "></i></label>
                    <input required="" type="text" value="{{ old('name') }}" name="name" placeholder="Tên" id="first_name" class="text" size="30">
                </div>
                <div id="email" class="clearfix large_form">
                    <label for="email" class="label icon-field"><i class="icon-login icon-envelope "></i></label>
                    <input required="" type="email" value="{{ old('email') }}" placeholder="Email" name="email" id="email" class="text" size="30">
                </div>
                <div id="password" class="clearfix large_form">
                    <label for="password" class="label icon-field"><i class="icon-login icon-shield "></i></label>
                    <input required="" type="password" value="" placeholder="Mật khẩu" name="password" id="password" class="password text" size="30">
                </div>
                <div id="password" class="clearfix large_form">
                    <label for="password" class="label icon-field"><i class="icon-login icon-shield "></i></label>
                    <input required="" type="password" value="" placeholder="Nhập lại mật khẩu" name="password_confirmation" id="password" class="password text" size="30">
                </div>
                <div class="action_bottom">
                    <input class="btn" type="submit" value="Đăng ký">
                </div>
                <div class="req_pass">
                    <a class="come-back" href="{{url('/')}}"><i class="fa fa-long-arrow-left"></i> Quay lại trang chủ</a>
                </div>

            </form>
        </div>

    </div><!-- #register -->
    <!-- #customer-register -->

</div>
@endsection