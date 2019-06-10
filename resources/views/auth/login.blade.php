@extends('layouts.app')
@section('content')
<!-- End Navbar -->
<div class="wrapper wrapper-full-page">
    <div class="full-page login-page">
        <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
        <div class="content">
            <div class="container">
                <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="card card-login card-white">
                            <div class="card-header">
                                <img src="../../assets/img/card-primary.png" alt="">
                                <h1 class="card-title">{{ __('Login') }}</h1>
                            </div>
                            <div class="card-body">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="tim-icons icon-email-85"></i>
                                        </div>
                                    </div>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="tim-icons icon-lock-circle"></i>
                                        </div>
                                    </div>
                                    <input type="password" id="password" placeholder="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        {{ __('Remember Me') }}
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                                <div class="pull-left">
                                    <h6>
                                        <a href="{{ route('password.request') }}" class="link footer-link">Create
                                            Account</a>
                                    </h6>
                                </div>
                                <div class="pull-right">
                                    <h6>
                                        @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="link footer-link"> {{ __('Forgot Your Password?') }}</a>
                                        @endif
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <ul class="nav">
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link">
                            Creative Tim
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link">
                            About Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link">
                            Blog
                        </a>
                    </li>
                </ul>
                <div class="copyright">
                    ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    made with <i class="tim-icons icon-heart-2"></i> by
                    <a href="javascript:void(0)" target="_blank">Creative Tim</a> for
                    a better web.
                </div>
            </div>
        </footer>
    </div>
</div>
@endsection