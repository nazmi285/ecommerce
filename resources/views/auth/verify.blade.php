@extends('layouts.master')

@section('title')
    <h4 class="fw-bold p-2 mb-0">Verify Email</h4>
@endsection

@section('content')
<div class="container">
    <div class="d-flex justify-content-center">
        <div class="col-12 col-md-5">
            <div class="card border-0 mt-5">
                <div class="card-body text-center">
                    @if (session('resent'))
                        <div class="alert alert-success mb-5" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    <img src="{{asset('images/icons8-mail.png')}}" alt="...">
                    <h1 class="card-title">Hello, {{Auth()->user()->name}}</h1>
                    <p class="card-text">
                        {{ __('Just one more step, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                        </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection