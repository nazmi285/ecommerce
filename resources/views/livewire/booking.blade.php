<div class="container">
	<div class="row justify-content-center">
		<div class="col-12 col-sm-12 col-md-8 mb-3">	
			<div class="card rounded-3">
			    <div class="card-body rounded-3">
			    	<h5 class="card-title">Set your availability</h5>
    				<p class="card-text">Let your customer know when you’re typically available to accept meetings.</p>
    				<hr>
			    	<div class="row g-3">
					  	<div class="col-6">
					  		<label for="date_from" class="form-label">Available From</label>
					    	<select class="form-select" name="date_from" id="date_from">
							  	<option value="0600">6:00am</option>
							  	<option value="0700">7:00am</option>
							  	<option value="0800">8:00am</option>
							  	<option value="0900" selected>9:00am</option>
							  	<option value="1000">10:00am</option>
							  	<option value="1100">11:00am</option>
							  	<option value="1200">12:00am</option>
							  	<option value="1300">1:00pm</option>
							  	<option value="1400">2:00pm</option>
							  	<option value="1500">3:00pm</option>
							  	<option value="1600">4:00pm</option>
							  	<option value="1700">5:00pm</option>
							  	<option value="1800">6:00pm</option>
							  	<option value="1900">7:00pm</option>
							  	<option value="2000">8:00pm</option>
							  	<option value="2100">9:00pm</option>
							  	<option value="2200">10:00pm</option>
							  	<option value="2300">11:00pm</option>
							</select>
					  	</div>
					  	<div class="col-6">
					    	<label for="date_to" class="form-label">Available To</label>
					    	<select class="form-select" name="date_to" id="date_to">
							  	<option value="0600">6:00am</option>
							  	<option value="0700">7:00am</option>
							  	<option value="0800">8:00am</option>
							  	<option value="0900">9:00am</option>
							  	<option value="1000">10:00am</option>
							  	<option value="1100">11:00am</option>
							  	<option value="1200">12:00am</option>
							  	<option value="1300">1:00pm</option>
							  	<option value="1400">2:00pm</option>
							  	<option value="1500">3:00pm</option>
							  	<option value="1600">4:00pm</option>
							  	<option value="1700" selected>5:00pm</option>
							  	<option value="1800">6:00pm</option>
							  	<option value="1900">7:00pm</option>
							  	<option value="2000">8:00pm</option>
							  	<option value="2100">9:00pm</option>
							  	<option value="2200">10:00pm</option>
							  	<option value="2300">11:00pm</option>
							</select>
					  	</div>
					  	<div class="col-12">
					  		<label for="date_from" class="form-label">Available Days</label>
					  		<ul class="list-group list-group-horizontal-lg">
							  	<li class="list-group-item">
							  		<input class="form-check-input me-2" type="checkbox" value="" aria-label="...">
							 		Sunday
							 	</li>
							  	<li class="list-group-item">
							  		<input class="form-check-input me-2" type="checkbox" value="" checked aria-label="...">
							  		Monday
							  	</li>
							  	<li class="list-group-item">
							  		<input class="form-check-input me-2" type="checkbox" value="" checked aria-label="...">
							  		Tuesday
							  	</li>
							  	<li class="list-group-item">
							  		<input class="form-check-input me-2" type="checkbox" value="" checked aria-label="...">
							  		Wednesday
							  	</li>
							  	<li class="list-group-item">
							  		<input class="form-check-input me-2" type="checkbox" value="" checked aria-label="...">
							  		Thursday
							  	</li>
							  	<li class="list-group-item">
							  		<input class="form-check-input me-2" type="checkbox" value="" checked aria-label="...">
							  		Friday
							  	</li>
							  	<li class="list-group-item">
							  		<input class="form-check-input me-2" type="checkbox" value="" aria-label="...">
							  		Sutarday
							  	</li>
							</ul>
					  	</div>

					  	<div class="col mb-5">
					  		<p class="card-text">
					  			&nbsp;Don’t worry! You’ll be able to further customize your availability later on.
  							</p>
					  	</div>
					  	<div class="d-grid gap-2 d-md-flex justify-content-md-end">
						  	<button class="btn" type="button">Cancel</button>
						  	<button class="btn btn-primary me-md-2" type="button">Create</button>
						</div>
					</div>
			    </div>
			</div>
		</div>





<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script>
	$(document).ready(function(){
		$('.form-selectxx').on('click',function(){
			
			$(this).attr('multiple',true);
		});

		$('.form-selectxx').on('change',function(){
			if($(this).prop("selected", true)){
				$(this).removeAttr('multiple');
			}
			
		});
	});
</script>