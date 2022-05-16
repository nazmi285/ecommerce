<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8 mb-3">
			<form class="row g-3 needs-validation" novalidate>
				<div class="col-6">
					<label for="order_no" class="form-label">Order No.</label>
					<input wire:model="order_no" type="text" class="form-control" id="order_no" placeholder="ORD_0001" maxlength="8" required>
					<div class="valid-feedback"></div>
				</div>
                <div class="col-6">
                    <label for="price" class="form-label">Price</label>
                    <div class="input-group">
                        <span class="input-group-text" id="price">RM</span>
                        <input wire:model="price" type="text" class="form-control text-end" id="price" placeholder="0.00" maxlength="8" required>
                    </div>
                </div>
				<div class="col-12 d-grid">
					<button wire:click="store()" type="button" class="btn btn-block btn-primary" id="btnSave">Save</button>
				</div>
			</form>
		</div>
        <div class="col-md-8 mb-3">
            <form class="row g-3 needs-validation" novalidate>
                <div class="col-6">
                    <label for="bill_no" class="form-label">Bill No.</label>
                    <input wire:model="bill_no" type="text" class="form-control" id="bill_no" placeholder="BIL_0001" maxlength="8" required>
                    <div class="valid-feedback"></div>
                </div>
                <div class="col-6">
                    <label for="bill_price" class="form-label">Price</label>
                    <div class="input-group">
                        <span class="input-group-text" id="bill_price">RM</span>
                        <input wire:model="bill_price" type="text" class="form-control text-end" id="bill_price" placeholder="0.00" maxlength="8" required>
                    </div>
                </div>
                <div class="col-12 d-grid">
                    <button wire:click="store2()" type="button" class="btn btn-block btn-primary" id="btnSave">Save</button>
                </div>
            </form>
        </div>
	</div>
</div>

<script type="text/javascript">
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
      'use strict'

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.querySelectorAll('.needs-validation')

      // Loop over them and prevent submission
      Array.prototype.slice.call(forms)
        .forEach(function (form) {
          form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }

            form.classList.add('was-validated')
          }, false)
        })
    })()
</script>

