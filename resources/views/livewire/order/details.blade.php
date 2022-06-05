<div>
    <div wire:ignore.self class="modal fade p-0" id="orderDetailsModal_{{$order->id}}" tabindex="-1" aria-labelledby="orderDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-md-down">
            <form class="modal-content" wire:submit.prevent="update">
                <div class="modal-header">
                    <h5 class="modal-title">Order Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                </div>
            </form>
        </div>
    </div>
</div>
