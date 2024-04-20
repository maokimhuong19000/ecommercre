@include('backend.layout.header')

<body class="bg-primary">
    <div class="unix-login">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="index.html"><span>HMN STORE</span></a>
                        </div>
                        <div class="login-form">
                            <h4>Administratior Login</h4>
                            @if (session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif
                            @if (session('success_register'))
                                <div class="alert alert-primary">{{ session('success_register') }}</div>
                            @endif
                            <form action="{{ route('login.post') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input type="text" class="form-control" placeholder="User Name..." id="username"
                                        name="username">
                                    @if ($errors->has('username'))
                                        <span class="text-danger">{{ $errors->first('username') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password" id="password"
                                        name="password">
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Remember Me
                                    </label>
                                    <label class="pull-right">
                                        <a href="#">Forgotten Password?</a>
                                    </label>

                                </div>
                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
                                {{-- <div class="social-login-content">
                                    <div class="social-button">
                                        <button type="button"
                                            class="btn btn-primary bg-facebook btn-flat btn-addon m-b-10"><i
                                                class="ti-facebook"></i>Sign in with facebook</button>
                                        <button type="button"
                                            class="btn btn-primary bg-twitter btn-flat btn-addon m-t-10"><i
                                                class="ti-twitter"></i>Sign in with twitter</button>
                                    </div>
                                </div> --}}
                                <div class="register-link m-t-15 text-center">
                                    <p>Don't have account ? <a href="{{ url('/register') }}"> Sign Up Here</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
