@extends('index')
@section('title','Login')
@section('content')
<section class="uk-section uk-section-small">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="uk-container">
            <div class="uk-grid-medium " uk-grid>
                <div class="uk-width-1-1 col-md-6 mx-auto uk-width-expand@m">
                    <div class="uk-card uk-card-default uk-card-small tm-ignore-container">
                        <header class="uk-card-header">
                            <h1 class="uk-h2">Login</h1>
                        </header>
                        <div class="uk-card-body">
                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-3 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-9">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-3 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-9">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <br>

                            <!-- <div class="form-group row">
                                <div class="form-check col-md-4" align="center">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label " for="remember">
                                        {{ __('Remember Me') }}
                                    </label>

                                </div>

                                <div class="col-md-8 "align="right">
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                </div>
                            </div> -->
                           
                            <span class="form-group">
                                <label class="form-check-label " for="remember">Remember Me</label>
                                <input type="checkbox" name="remember" id="remember" 'checked' : '' class="hidden"
                                    {{ old('remember') ? 'checked' : '' }}>
                                    
                                @if (Route::has('password.request'))                               
                                <a class="btn btn-link pull-right" href="{{ route('password.request') }}">Forgot
                                    Password?</a>
                                @endif
                            </span>
                            
                            <hr class="colorgraph">

                            <!-- <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>


                                </div>
                            </div> -->
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input type="submit" class="btn btn-md btn-primary btn-block" value="Sign In">
                                </div>
                            </div>
                            <br>
                            <div class="row" align="center">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <span>Don't have an account?</span>
                                    <a href="/register" class="Link Link--secondary">Create one</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
@endsection
