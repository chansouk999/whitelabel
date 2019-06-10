@extends('layouts.app')

@section('content')
<div class="wrapper wrapper-full-page ">
    <div class="full-page register-page">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 ml-auto">
                        <div class="info-area info-horizontal mt-5">
                            <div class="icon icon-warning">
                                <i class="tim-icons icon-wifi"></i>
                            </div>
                            <div class="description">
                                <h3 class="info-title">Marketing</h3>
                                <p class="description">
                                    We've created the marketing campaign of the website. It was a very interesting collaboration.
                                </p>
                            </div>
                        </div>
                        <div class="info-area info-horizontal">
                            <div class="icon icon-primary">
                                <i class="tim-icons icon-triangle-right-17"></i>
                            </div>
                            <div class="description">
                                <h3 class="info-title">Fully Coded in HTML5</h3>
                                <p class="description">
                                    We've developed the website with HTML5 and CSS3. The client has access to the code using GitHub.
                                </p>
                            </div>
                        </div>
                        <div class="info-area info-horizontal">
                            <div class="icon icon-info">
                                <i class="tim-icons icon-trophy"></i>
                            </div>
                            <div class="description">
                                <h3 class="info-title">Built Audience</h3>
                                <p class="description">
                                    There is also a Fully Customizable CMS Admin Dashboard for this product.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 mr-auto">
                        <div class="card card-register card-white">
                            <div class="card-header">
                                <img class="card-img" src="../../assets/img/card-primary.png" alt="Card image">
                                <h4 class="card-title">{{ __('Registerte') }}</h4>
                            </div>
                            <form method="POST" action="{{ route('register') }}">
                                    @csrf
                            <div class="card-body">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="tim-icons icon-single-02"></i>
                                            </div>
                                        </div>
                                        <input id="name" type="text" class="form-control" placeholder="Full Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="tim-icons icon-email-85"></i>
                                            </div>
                                        </div>
                                        <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Password" autocomplete="new-password">

                                        @error('password')
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
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required  placeholder="Confirm Password" autocomplete="new-password">
                                    </div>
                                    <div class="form-check text-left">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox">
                                            <span class="form-check-sign"></span>
                                            I agree to the
                                            <a href="javascript:void(0)">terms and conditions</a>.
                                        </label>
                                    </div>
                                
                            </div>
                            <div class="card-footer">
                            <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                            </form>
                        </div>
                    </div>
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
                    </script> made with <i class="tim-icons icon-heart-2"></i> by
                    <a href="javascript:void(0)" target="_blank">Creative Tim</a> for a better web.
                </div>
            </div>
        </footer>
    </div>
</div>
@endsection