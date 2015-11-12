<div class="container">
    <div class="inner-column row">
        <div id="left_sidebar" class="col-lg-3 col-xs-12 col-sm-4 pull-right">
            {{ Theme::partial('subscribe') }}
            <br>
        </div>
        <div id="center_column" class="col-lg-4 col-xs-12 col-sm-4">
            <h2>Lupa Password</h2><hr><br>
            <form action="{{url('member/forgetpassword')}}" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Email" name="recoveryEmail" required>
                    <span class="input-group-btn">
                        <button class="btn btn-green" type="submit">Reset Password</button>
                    </span>
                </div>
            </form>
            <br><br>
        </div>
        <div id="center_column" class="col-lg-4 col-md-offset-1">
            <h2>Pelanggan Baru</h2><hr><br>
            <p>Nikmati kemudahan berbelanja dengan mendaftar sebagai member.</p>
            <div class="input-group">
                <span class="input-group-btn">
                    <a href="{{url('member/create')}}" class="btn btn-red">Daftar</a>
                </span>
            </div>
        </div>
    </div>
</div>