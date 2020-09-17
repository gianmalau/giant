@extends('index')
@section('title','Reset Password')
@section('content')
<section class="uk-section uk-section-small">
    <div class="uk-container">
        <div class="uk-grid-medium " uk-grid>
            <div class="uk-width-1-1 col-md-6 mx-auto uk-width-expand@m">
                <div class="uk-card uk-card-default uk-card-small tm-ignore-container">
                    <header class="uk-card-header">
                        <h1 class="uk-h2">Reset Password</h1>
                    </header>

                    <div class="uk-card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
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
                            <br>
                            <hr class="colorgraph">
                            <div class="form-group row mb-0">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <button type="submit" class="btn btn-md btn-primary btn-block">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
