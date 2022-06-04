<div>
    <button type="button" class="btn position-relative">
        <i class="fas fa-lg fa-shopping-cart me-1 text-muted"></i>
        @if($count_cart > 0)
        <small><span class="position-absolute top-0 end-0 badge border border-light rounded-pill bg-danger "><small>@if($count_cart>100)99+@else{{$count_cart}}@endif</small><span class="visually-hidden">1</span></span></small>
        @endif
    </button>
</div>
