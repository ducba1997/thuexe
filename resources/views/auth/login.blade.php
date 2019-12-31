@extends('layout.master')
@section('content')
<div class="row">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 custom-create" id="layout-page">
        <span class="header-contact header-page clearfix">
            <h1>Đăng nhập</h1>
        </span>

        <div id="customer-login">
            <div id="login" class="userbox">
                <div class="accounttype">
                    <h2 class="title"></h2>
                </div>
                <form accept-charset="UTF-8" action="{{url('/login')}}" id="customer_login" method="post">
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
                    <div class="clearfix large_form">
                        <label for="customer_email" class="icon-field"><i class="icon-login icon-envelope "></i></label>
                        <input required="" type="email" value="{{ old('email') }}" name="email" id="customer_email" placeholder="Email" class="text">
                    </div>
                    <div class="clearfix large_form">
                        <label for="customer_password" class="icon-field"><i class="icon-login icon-shield"></i></label>
                        <input required="" type="password" value="{{ old('password') }}" name="password" id="customer_password" placeholder="Mật khẩu" class="text" size="16">
                    </div>
                    <div class="action_bottom">
                        <input class="btn btn-signin" type="submit" value="Đăng nhập">
                    </div>
                    <div class="req_pass">
                        <a href="#" onclick="showRecoverPasswordForm();return false;">Quên mật khẩu?</a>

                        hoặc <a href="{{url('/register')}}" title="Đăng ký">Đăng ký</a>
                    </div>

                </form>
            </div>

            <div id="recover-password" style="display:none;" class="userbox">
                <div class="accounttype">
                    <h2>Phục hồi mật khẩu</h2>
                </div>

                <form accept-charset="UTF-8" action="/account/recover" method="post">
                    <label for="email" class="icon-field"><i class="icon-login icon-envelope "></i></label>
                    <input type="email" value="" size="30" name="email" placeholder="Email" id="recover-email" class="text">

                    <div class="action_bottom">
                        <input class="btn" type="submit" value="Gửi">
                    </div>
                    <div class="req_pass">
                        <a href="#" onclick="hideRecoverPasswordForm();return false;">Hủy</a>
                    </div>
                </form>
            </div>


        </div>
    </div>
    <script type="text/javascript">
        function showRecoverPasswordForm() {
            document.getElementById('recover-password').style.display = 'block';
            document.getElementById('login').style.display = 'none';
        }

        function hideRecoverPasswordForm() {
            document.getElementById('recover-password').style.display = 'none';
            document.getElementById('login').style.display = 'block';
        }

        if (window.location.hash == '#recover') {
            showRecoverPasswordForm()
        }
    </script>

</div>
@endsection