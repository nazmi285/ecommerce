@extends('layouts.master')

@section('content')

<div class="container mb-5">
    <div class="row justify-content-center">
        @if (Route::currentRouteName()=="home")
            <livewire:dashboard />
        @elseif(Route::currentRouteName()=="product")
            <livewire:products />
        @elseif(Route::currentRouteName()=="product.create")
            <livewire:product.create />
        @elseif(Route::currentRouteName()=="explore")
            <livewire:explore />
        @elseif(Route::currentRouteName()=="notification")
            <livewire:notification />
        @elseif(Route::currentRouteName()=="setting")
            <livewire:setting />
        @elseif(Route::currentRouteName()=="familytree")
            <livewire:familytree />
        @elseif(Route::currentRouteName()=="firebase")
            <livewire:firebase />
        @elseif(Route::currentRouteName()=="bootstrap")
            <livewire:bootstrap />
        @elseif(Route::currentRouteName()=="profile")
            <livewire:profile />
        @elseif(Route::currentRouteName()=="booking")
            <livewire:booking />
        @endif
    </div>
</div>

@endsection
@push('scripts')
    <script>
        window.addEventListener('name-updated', event => {
            alert('hello world');
        })
    </script>
@endpush