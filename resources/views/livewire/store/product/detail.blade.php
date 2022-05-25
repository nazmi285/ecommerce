<div>
    <div wire:ignore.self class="modal fade p-0" id="productDetailModal_{{$product->id}}" tabindex="-1" aria-labelledby="productDetailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-md-down">
            <form class="modal-content" wire:submit.prevent="update">
                <div class="modal-body p-0">
                    <div class="screen-wrap">

                        {{-- <header class="app-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </header> --}}

                        <main class="app-content position-relative">
                            <div class="position-absolute m-3 top-0 start-0"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
                            <section class="gallery-wrap scroll-horizontal">
                                <div class="item-slider"><img src="{{asset('images/items/item.jpg')}}"></div>
                                <div class="item-slider"><img src="{{asset('images/items/item.jpg')}}"></div>
                                <div class="item-slider"><img src="{{asset('images/items/item.jpg')}}"></div>
                            </section>

                            <section class="padding-around">

                                <div class="rating-wrap mb-2">
                                    <ul class="rating-stars">
                                        <li style="width:80%" class="stars-active">
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </li>
                                    </ul>
                                    <small class="label-rating text-muted">7/10</small>
                                </div> <!-- rating-wrap.// -->

                                <h6 class="title-detail">{{$name}}  </h6>  
                                <div class="price-wrap mb-3">
                                    <span class="h6 price text-warning">179 000 sum</span> 
                                </div> <!-- price-wrap.// -->


                                <div class="d-flex">
                                    <div class="flex-grow-1 mr-2"><a href="page-cart.html" class="btn btn-primary btn-block">Savatga solish</a></div>
                                    <div><a href="page-cart.html" class="btn btn-light btn-icon"><i class="fa fa-heart"></i></a></div>
                                </div>

                                <article class="info-detail-wrap mt-2">
                                    Great words is nothing but just sounds tovar xarakteristikasi uchun tekst shunchaki aliquid molestias ipsum tenetur nesciunt assumenda sequi, dolor doloremque quo nam earum.
                                         <a href="#" class="btn-link"> Read more</a>
                                </article>

                            </section>
                        </main>

                        </div>
                </div>
                <div class="modal-footer">
                    <span class="">RM 89</span>
                    <a href="#" class="btn btn-primary" wire:click="addToCart"><i class="fa fa-shopping-cart"></i> Add To Cart </a>
                </div>
            </form>
        </div>
    </div>
</div>
