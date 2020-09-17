@extends('index')
@section('title','Register')
@section('content')
<section class="uk-section uk-section-small">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="uk-container">
            <div class="uk-grid-medium " uk-grid>
                {{-- register form --}}
                <div class="uk-width-1-1 col-md-6 mx-auto uk-width-expand@m">
                    <div class="uk-card uk-card-default uk-card-small tm-ignore-container">
                    <header class="uk-card-header">
                            <h1 class="uk-h2">Register Account</h1>
                        </header>
                        <div class="uk-card-body">

                        <div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-8">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-8">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-8">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-8">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            
                            <hr class="colorgraph">
                            <div class="form-group row mb-0">
                                <div class="col-md-12 offset-md-12">
                                    <button type="submit" class="btn btn-md btn-primary btn-block">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                            <br>
                          <div class="row" align="center">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <span>Already have an account?</span>
                                    <a href="/login" class="Link Link--secondary">Login</a>
                                </div>
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
