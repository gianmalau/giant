@extends('index')
@section('title','Reset Password')
@section('content')
<section class="uk-section uk-section-small">
<div class="uk-container">
<div class="uk-grid-medium " uk-grid>
<div class="uk-width-1-1 col-md-6 mx-auto uk-width-expand@m">
            <div class="card">
                <div class="card-header" align="center">{{ __('Dashboard') }}</div>

                <div class="card-body" align="center">
                    @if (session('status'))
                        <div class="alert alert-success" align="center" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
</div>
</div>
</section>
@endsection
