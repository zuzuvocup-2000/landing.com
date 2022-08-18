<div id="login-modal" class="uk-modal">
    <div class="uk-modal-dialog">
        <a href="" class="uk-modal-close uk-close"></a>
        <div class="back-to-form hide"><svg class="tiktok-1i5fgpz-StyledChevronLeftOffset eg439om1" width="1em" height="1em" viewBox="0 0 48 48" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M4.58579 22.5858L20.8787 6.29289C21.2692 5.90237 21.9024 5.90237 22.2929 6.29289L23.7071 7.70711C24.0976 8.09763 24.0976 8.7308 23.7071 9.12132L8.82843 24L23.7071 38.8787C24.0976 39.2692 24.0976 39.9024 23.7071 40.2929L22.2929 41.7071C21.9024 42.0976 21.2692 42.0976 20.8787 41.7071L4.58579 25.4142C3.80474 24.6332 3.80474 23.3668 4.58579 22.5858Z"></path></svg></div>
        <div class="login-main">
            <div class="login">
                <h1 class="heading-1"><span>Đăng nhập</span></h1>
                <div id="login-phone" class="loginfor"><a href="" title=""><i class="fa fa-mobile" aria-hidden="true"></i> Số điện thoại</a></div>
                <div id="login-apple" class="loginfor"><a href="" title=""><i class="fa fa-apple" aria-hidden="true"></i> Apple</a></div>
                <div id="login-facebook" class="loginfor"><a href="" title=""><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></div>
                <div id="login-google" class="loginfor"><a href="" title=""><i class="fa fa-google" aria-hidden="true"></i> Gmail</a></div>
                <form action="" class="login-form">
                    <div class="wrap-input mb15">
                        <label>Số điện thoại</label>
                        <input autocomplete="on" type="text" name="phone" value="" class="form-input">
                    </div>
                    <div class="wrap-input mb10">
                        <label>Password</label>
                        <input autocomplete="on" type="password" name="password" value="" class="form-input">
                    </div>
                    <a href="" class="login-forgot-pass uk-display-inline-block mb15">Quên mật khẩu?</a>
                    <div  class="btn-login" ><a href="" title="">Đăng nhập</a></div>
                </form>
            </div>
            <div class="register">
                <h1 class="heading-1"><span>Đăng ký</span></h1>
                <form action="" class="register-form">
                    <div class="wrap-input mb15">
                        <label>Số điện thoại</label>
                        <input autocomplete="on" type="text" name="phone" value="" class="form-input">
                    </div>
                    <div class="wrap-input mb15">
                        <label>Email</label>
                        <input autocomplete="on" type="text" name="email" value="" class="form-input">
                    </div>
                    <div class="wrap-input mb15">
                        <label>Nhập mật khẩu</label>
                        <input autocomplete="on" type="password" name="password" value="" class="form-input">
                    </div>
                    <div class="wrap-input mb20">
                        <label>Nhập lại mật khẩu</label>
                        <input autocomplete="on" type="password" name="password" value="" class="form-input">
                    </div>
                    <div  class="btn-login" ><a href="" title="">Xác nhận</a></div>
                </form>
            </div>
            <div class="forgot">
                <h1 class="heading-1"><span>Đặt lại mật khẩu</span></h1>
                <form action="" class="forgot-form">
                    <div class="wrap-input mb15">
                        <label>Email</label>
                        <input autocomplete="on" type="text" name="email" value="" class="form-input">
                    </div>
                    <div class="wrap-input mb15">
                        <label>Nhập mã gồm 6 số</label>
                        <input autocomplete="on" type="number" name="code" value="" class="form-input">
                        <input autocomplete="on" type="submit" value="Submit">
                    </div>
                    <div class="wrap-input mb20">
                        <label>Nhập mật khẩu mới</label>
                        <input autocomplete="on" type="password" name="password" value="" class="form-input">
                    </div>
                    <div class="btn-login" ><a href="" title="">Xác nhận</a></div>
                </form>
            </div>
        </div>
        <div class="login-foot">
            <div class="btn-register"><span>Bạn không có tài khoản ?</span> <a href="" title="">Đăng ký</a></div>
            <!-- <div class="btn-forgot"><a  href="" title="">Quên mật khẩu ?</a></div> -->
            <div class="btn-login2"><span>Bạn đã có tài khoản?</span><a  href="" title="">Đăng nhập</a></div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function(){
        $('#login-phone').on('click', function(){
            reset_display('.register, .btn-login2, .btn-register, .login, .forgot, .login-form, .loginfor, .back-to-form')
            $('.login-form').addClass('block')
            $('.loginfor').addClass('hide')
            return false;
        });
        $('.login-forgot-pass').on('click', function(){
            reset_display('.register, .btn-login2, .btn-register, .login, .forgot, .login-form, .loginfor, .back-to-form')
            $('.forgot').addClass('block')
            $('.login').addClass('hide')
            return false;
        });
        $('.btn-login2').on('click', function(){
            reset_display('.register, .btn-login2, .btn-register, .login, .forgot, .login-form, .loginfor, .back-to-form')
            $('.register, .btn-login2').addClass('hide')
            $('.btn-register, .login').addClass('block')
            return false;
        });

        $('.btn-open-modal-login, .back-to-form').on('click', function(){
            reset_display('.register, .btn-login2, .btn-register, .login, .forgot, .login-form, .loginfor, .back-to-form')
            $('.back-to-form').addClass('hide')
        });
        $('.btn-register').on('click', function(){
            reset_display('.register, .btn-login2, .btn-register, .login, .forgot, .login-form, .loginfor, .back-to-form')
            $('.register, .btn-login2').addClass('block')
            $('.btn-register, .login').addClass('hide')
            return false;
        });
    });

    function reset_display(class_name){
        $(class_name).removeClass('block').removeClass('hide')
    }
</script>