<div wire:poll.keep-alive>
    @section('title')
    <h4 class="fw-bold p-2 mb-0">{{ config('app.name', 'Laravel') }}</h4>
    @endsection

    <div class="row justify-content-center mb-2">
        <div class="col-12 col-sm-8 col-md-8 col-lg-8">
            
            <div class="py-5 ps-3">
                <small class="text-muted">28 Aug 2021</small>
                <h4 class="fw-bold">Hello, {{Auth::user()->name}}</h4>
            </div>
            <h5 class="d-grid ms-2"> Orders </h5>
            @foreach($orders as $key => $val)
                <span class="badge mb-1 mt-2 rounded-0 fs-6 fw-normal text-muted">{{carbonDateSorting($key)}}</span>
                @foreach($val as $order)
                <div class="card border-0 mb-2">
                    <div class="card-body">
                        <div class="clearfix">
                            <h5 class="card-title float-start fw-bold">#{{$order->order_no}}</h5>
                            <span class="float-end">{{carbonDiffForHumanShort($order->created_at)}}</span>
                        </div>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                    </div>
                </div>
                @endforeach
            @endforeach
        </div>
    </div>
</div>
@push('scripts')
    <script>

    // Enable pusher logging - don't include this in production
    // Pusher.logToConsole = true;

    // var pusher = new Pusher('008d20185269e76240f3', {
    //     cluster: 'ap1'
    // });

    // var channel = pusher.subscribe('my-channel');
    // channel.bind('my-event', function(data) {
    //     alert(JSON.stringify(data));


    // });
    </script>
@endpush