<div class="container">
    <div class="inner-column row">
        <div class="col-xs-12 col-sm-6 col-lg-4 pb20">
            <h2>Lupa Password</h2><hr><br>
            <form action="{{url('member/forgetpassword')}}" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Email anda" name="recoveryEmail" required>
                    <span class="input-group-btn">
                        <button class="btn btn-green" type="submit">Reset Password</button>
                    </span>
                </div>
            </form>
            <br><br>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-4 pb20">
            <h2>Pelanggan Baru</h2><hr><br>
            <p>Nikmati kemudahan berbelanja dengan mendaftar sebagai member.</p>
            <div class="input-group">
                <span class="input-group-btn">
                    <a href="{{url('member/create')}}" class="btn btn-red">Daftar</a>
                </span>
            </div>
        </div>
        <div id="left_sidebar" class="col-xs-12 col-sm-12 col-lg-3 pull-right">
            {{ Theme::partial('subscribe') }}
        </div>
    </div>
</div>