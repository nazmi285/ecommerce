@extends('layouts.public')

@section('content')
<div class="container mb-5">
    <div class="row justify-content-center">
        @if (Route::currentRouteName()=="store")
            <livewire:store />
        @endif
    </div>
</div>
@endsection
@push('scripts')


@endpush