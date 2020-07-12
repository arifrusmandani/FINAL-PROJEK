@extends('layouts.master')
@section('breadcrumb')
    <div class="breadcrumbs">
        <section class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Login</h1>
                </div>
                <div class="col-md-12">
                    <div class="crumbs">
                        <a href="#">Home</a>
                        <span class="crumbs-span">/</span>
                        <a href="#">Pages</a>
                        <span class="crumbs-span">/</span>
                        <span class="current">Login</span>
                    </div>
                </div>
            </div><!-- End row -->
        </section><!-- End container -->
    </div><!-- End breadcrumbs -->
@endsection
@section('content')
<div class="login">
            <div class="row">
                <div class="col-md-6">
                    <div class="page-content">
                        <h2>Login</h2>
                        <div class="form-style form-style-3">
                            <form method="POST" action="{{ route('login') }}">
                            @csrf
                                <div class="form-inputs clearfix">
                                    <p class="login-text">
                                        <input type="email" placeholder="Email" name="email" onfocus="if (this.value == 'Email') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Email';}">
                                        <i class="icon-user"></i>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </p>
                                    <p class="login-password">
                                        <input type="password" placeholder="Password" name="password" onfocus="if (this.value == 'Password') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Password';}">
                                        <i class="icon-lock"></i>
                                        <a href="#">Forget</a>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </p>
                                </div>
                                <p class="form-submit login-submit">
                                    <input type="submit" value="Log in" class="button color small login-submit submit">
                                </p>
                                <div class="rememberme">
                                    <label><input type="checkbox" checked="checked"> Remember Me</label>
                                </div>
                            </form>
                        </div>
                    </div><!-- End page-content -->
                </div><!-- End col-md-6 -->
                <div class="col-md-6">
                    <div class="page-content">
                        <h2>Register Now</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravdio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequa. Vivamus vulputate posuere nisl quis consequat.</p>
                        <a class="button small color signup">Create an account</a>
                    </div><!-- End page-content -->
                </div><!-- End col-md-6 -->
            </div><!-- End row -->
        </div><!-- End login -->
@endsection