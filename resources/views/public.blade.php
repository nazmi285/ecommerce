@extends('layouts.public')

@section('content')
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8 mb-3">
            @if (Route::currentRouteName()=="store")
                <livewire:store />
            @elseif (Route::currentRouteName()=="store.cart")
                <livewire:store.cart />
            @endif
        </div>
    </div>
</div>
@endsection
@push('scripts')


@endpush