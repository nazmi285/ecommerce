<div id="carouselExampleIndicators" class="carousel slide" data-bs-interval="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
    	<div class="card card-body h-100">
	    	<div class="d-flex justify-content-center">
		    	<form>
		    		<div class="mb-3">
		    			<label for="exampleInputEmail1" class="form-label">Email address</label>
		    			<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		    			<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
		    		</div>
		    		<div class="mb-3">
		    			<label for="exampleInputPassword1" class="form-label">Password</label>
		    			<input type="password" class="form-control" id="exampleInputPassword1">
		    		</div>
		    		<div class="mb-3 form-check">
		    			<input type="checkbox" class="form-check-input" id="exampleCheck1">
		    			<label class="form-check-label" for="exampleCheck1">Check me out</label>
		    		</div>
		    		<button type="submit" class="btn btn-primary">Submit</button>
		    	</form>
		    </div>
		</div>
    </div>
    <div class="carousel-item">
    	<div class="card card-body h-100">
	    	<div class="d-flex justify-content-center">
		    	<form>
		    		<fieldset disabled>
		    			<legend>Disabled fieldset example</legend>
		    			<div class="mb-3">
		    				<label for="disabledTextInput" class="form-label">Disabled input</label>
		    				<input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
		    			</div>
		    			<div class="mb-3">
		    				<label for="disabledSelect" class="form-label">Disabled select menu</label>
		    				<select id="disabledSelect" class="form-select">
		    					<option>Disabled select</option>
		    				</select>
		    			</div>
		    			<div class="mb-3">
		    				<div class="form-check">
		    					<input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
		    					<label class="form-check-label" for="disabledFieldsetCheck">
		    						Can't check this
		    					</label>
		    				</div>
		    			</div>
		    			<button type="submit" class="btn btn-primary">Submit</button>
		    		</fieldset>
		    	</form>
		    </div>
		</div>
    </div>
    <div class="carousel-item">
    	<div class="card card-body h-100">
	    	<div class="d-flex justify-content-center">
				<div class="form-floating mb-3">
				<input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
				<label for="floatingInput">Email address</label>
				</div>
				<div class="form-floating">
				<input type="password" class="form-control" id="floatingPassword" placeholder="Password">
				<label for="floatingPassword">Password</label>
				</div>
			</div>
		</div>
    </div>
  </div>
  <button class="btn btn-primary" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    	Previous
  </button>
  <button class="btn btn-primary" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    Next
  </button>
</div>
<div class="col-md-8 mb-3">
	<style type="text/css">
	    .nav-underline > li > a.active,
	    .nav-underline > li > a.active:hover {
	        text-decoration: none;
	        border-radius:0px;
	        border-bottom: 3px solid #007BFE;
	        color: #007BFE !important;
	        background-color: transparent !important;

	    }
	    .nav-underline > li > a:hover {
	    	text-decoration: none;
	        border-radius:0px;
	        /*border-bottom: 3px solid #007BFE;*/
	        color: #007BFE !important;
	        background-color: transparent !important;
	        /*text-decoration: none;
	        font-weight: bold;
	        border-radius:0px;
	            color: #007BFE !important;
	          background-color: #f8f9fa;
	          margin-left: 3px;
	          margin-right: 3px;*/

	    }
	    .nav-underline  > li > a{
	        border-radius:0px;
	        /*font-weight: bold;*/
	        color: #6c757d  !important;
	        /*margin-left: 3px;*/
	          /*margin-right: 3px;*/

	    }
	</style>
	<nav>
		<ul class="nav nav-justified nav-underline border-bottom">
			<li class="nav-item">
				<a class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
			</li>
		</ul>
	</nav>
	<div class="tab-content" id="nav-tabContent">
		<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
			<p><strong>1. This is some placeholder content the Home tab's associated content.</strong> Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other .nav-powered navigation.</p>
		</div>
		<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
			<strong>2. This is some placeholder content the Home tab's associated content.</strong> Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other .nav-powered navigation.
		</div>
		<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
			<strong>3. This is some placeholder content the Home tab's associated content.</strong> Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other .nav-powered navigation.
		</div>
	</div>


	<div class="col-md-8 mb-3">
		<div class="card" style="height: 250px">
			<div class="card-body position-relative">
				<div class="position-absolute top-0 start-0 bg-dark">xxx</div>
				<div class="position-absolute top-0 end-0 bg-dark">xxx</div>
				<div class="position-absolute top-50 start-50 bg-dark">xxx</div>
				<div class="position-absolute bottom-50 end-50 bg-dark">xxx</div>
				<div class="position-absolute bottom-0 start-0 bg-dark">xxx</div>
				<div class="position-absolute bottom-0 end-0 bg-dark">xxx</div>
			</div>
		</div>
	</div>
</div>
<div class="col-md-8 mb-3">
    <div class="card" style="height: 250px">
        <div class="card-body position-relative ">
            <div class="position-absolute top-0 start-0 translate-middle bg-dark">xxx</div>
            <div class="position-absolute top-0 start-50 translate-middle bg-dark">xxx</div>
            <div class="position-absolute top-0 start-100 translate-middle bg-dark">xxx</div>
            <div class="position-absolute top-50 start-0 translate-middle bg-dark">xxx</div>
            <div class="position-absolute top-50 start-50 translate-middle bg-dark">xxx</div>
            <div class="position-absolute top-50 start-100 translate-middle bg-dark">xxx</div>
            <div class="position-absolute top-100 start-0 translate-middle bg-dark">xxx</div>
            <div class="position-absolute top-100 start-50 translate-middle bg-dark">xxx</div>
          <div class="position-absolute top-100 start-100 translate-middle bg-dark">xxx</div>
      </div>
  </div>
</div>
<div class="col-md-8 mb-3">
    <div class="card" style="height: 250px">
        <div class="card-body position-relative">
            <div class="position-absolute top-0 start-0 bg-dark">xxx</div>
            <div class="position-absolute top-0 start-50 translate-middle-x bg-dark">xxx</div>
            <div class="position-absolute top-0 end-0 bg-dark">xxx</div>
            <div class="position-absolute top-50 start-0 translate-middle-y bg-dark">xxx</div>
            <div class="position-absolute top-50 start-50 translate-middle bg-dark">xxx</div>
            <div class="position-absolute top-50 end-0 translate-middle-y bg-dark">xxx</div>
            <div class="position-absolute bottom-0 start-0 bg-dark">xxx</div>
            <div class="position-absolute bottom-0 start-50 translate-middle-x bg-dark">xxx</div>
            <div class="position-absolute bottom-0 end-0 bg-dark">xxx</div>
        </div>
  	</div>
</div>
<div class="col-md-8 mb-3">
	<div class="spinner-border text-primary" role="status">
		<span class="visually-hidden">Loading...</span>
	</div>
	<div class="spinner-border text-secondary" role="status">
		<span class="visually-hidden">Loading...</span>
	</div>
	<div class="spinner-border text-success" role="status">
		<span class="visually-hidden">Loading...</span>
	</div>
	<div class="spinner-border text-danger" role="status">
		<span class="visually-hidden">Loading...</span>
	</div>
	<div class="spinner-border text-warning" role="status">
		<span class="visually-hidden">Loading...</span>
	</div>
	<div class="spinner-border text-info" role="status">
		<span class="visually-hidden">Loading...</span>
	</div>
	<div class="spinner-border text-light" role="status">
		<span class="visually-hidden">Loading...</span>
	</div>
	<div class="spinner-border text-dark" role="status">
		<span class="visually-hidden">Loading...</span>
	</div>
</div>

<style type="text/css">
    .nav-underline > li > a.active,
    .nav-underline > li > a.active:hover {
        text-decoration: none;
        border-radius:0px;
        border-bottom: 3px solid #007BFE;
        color: #007BFE !important;
        background-color: transparent !important;

    }
    .nav-underline > li > a:hover {
    	text-decoration: none;
        border-radius:0px;
        /*border-bottom: 3px solid #007BFE;*/
        color: #007BFE !important;
        background-color: transparent !important;
        /*text-decoration: none;
        font-weight: bold;
        border-radius:0px;
            color: #007BFE !important;
          background-color: #f8f9fa;
          margin-left: 3px;
          margin-right: 3px;*/

    }
    .nav-underline  > a{
        border-radius:0px;
        font-weight: bold;
        color: #6c757d  !important;
        margin-left: 3px;
          margin-right: 3px;

    }
</style>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8 mb-3">
			<nav id="navbar-example2" class="navbar navbar-light sticky-top bg-light px-3" style="top:55px;">
				<a class="navbar-brand" href="#">Navbar</a>
				<ul class="nav nav-underline">
					<li class="nav-item">
						<a class="nav-link active" href="#scrollspyHeading1">First</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#scrollspyHeading2">Second</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="#scrollspyHeading3">Third</a></li>
							<li><a class="dropdown-item" href="#scrollspyHeading4">Fourth</a></li>
							<li><hr class="dropdown-divider"></li>
							<li><a class="dropdown-item" href="#scrollspyHeading5">Fifth</a></li>
						</ul>
					</li>
				</ul>
			</nav>
			<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
				<h4 id="scrollspyHeading1">First heading</h4>
				<p>...</p>
				<h4 id="scrollspyHeading2">Second heading</h4>
				<p>...</p>
				<h4 id="scrollspyHeading3">Third heading</h4>
				<p>...</p>
				<h4 id="scrollspyHeading4">Fourth heading</h4>
				<p>...</p>
				<h4 id="scrollspyHeading5">Fifth heading</h4>
				<p>...</p>
			</div>

		</div>
	</div>
</div>


<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8 mb-3">
			<button type="button" class="btn btn-primary">Primary</button>
			<button type="button" class="btn btn-secondary">Secondary</button>
			<button type="button" class="btn btn-success">Success</button>
			<button type="button" class="btn btn-danger">Danger</button>
			<button type="button" class="btn btn-warning">Warning</button>
			<button type="button" class="btn btn-info">Info</button>
			<button type="button" class="btn btn-light">Light</button>
			<button type="button" class="btn btn-dark">Dark</button>

			<button type="button" class="btn btn-link">Link</button>
		</div>
		<div class="col-md-8 mb-3">
			<div class="bg-info clearfix">
				<button type="button" class="btn btn-secondary float-start">Example Button floated left</button>
				<button type="button" class="btn btn-secondary float-end">Example Button floated right</button>
			</div>
		</div>
		<div class="col-md-8 mb-3">
			<div class="d-flex justify-content-between">
				<button type="button" class="btn btn-primary position-relative">
					Mails <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">+99 <span class="visually-hidden">unread messages</span></span>
				</button>
				<button type="button" class="btn btn-dark position-relative">
					Marker <svg width="1em" height="1em" viewBox="0 0 16 16" class="position-absolute top-100 start-50 translate-middle mt-1 bi bi-caret-down-fill" fill="#212529" xmlns="http://www.w3.org/2000/svg"><path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/></svg>
				</button>
				<button type="button" class="btn btn-primary position-relative">
					Alerts <span class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-2"><span class="visually-hidden">unread messages</span></span>
				</button>
			</div>
		</div>


		<div class="col-md-8 my-5">
			<div class="d-flex justify-content-between">
				<a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample1" role="button" aria-controls="offcanvasExample">
					menu left
				</a>
				<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample2" aria-controls="offcanvasExample2">menu right</button>

				
				<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample1" aria-labelledby="offcanvasLeftLabel">
					<div class="offcanvas-header">
						<h5 id="offcanvasLeftLabel">Offcanvas left</h5>
						<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
					</div>
					<div class="offcanvas-body">
						...
					</div>
				</div>

				<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample2" aria-labelledby="offcanvasRightLabel">
					<div class="offcanvas-header">
						<h5 id="offcanvasRightLabel">Offcanvas right</h5>
						<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
					</div>
					<div class="offcanvas-body">
						...
					</div>
				</div>

			</div>
		</div>
		<div class="col-md-8 my-5 zindex-modal">
			<div class="position-relative m-4">
				<div class="progress" style="height: 1px;">
					<div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<button type="button" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">1</button>
				<button type="button" class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">2</button>
				<button type="button" class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill" style="width: 2rem; height:2rem;">3</button>
			</div>
		</div>
		<div class="col-md-8 my-5">
			<button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
				Tooltip on top
			</button>
			<button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right">
				Tooltip on right
			</button>
			<button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">
				Tooltip on bottom
			</button>
			<button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left">
				Tooltip on left
			</button>
		</div>
	</div>
</div>


<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8 mb-3">
			<form class="row g-3 needs-validation" novalidate>
				<div class="col-md-4">
					<label for="validationCustom01" class="form-label">First name</label>
					<input type="text" class="form-control" id="validationCustom01" value="Mark" required>
					<div class="valid-feedback">
						Looks good!
					</div>
				</div>
				<div class="col-md-4">
					<label for="validationCustom02" class="form-label">Last name</label>
					<input type="text" class="form-control" id="validationCustom02" value="Otto" required>
					<div class="valid-feedback">
						Looks good!
					</div>
				</div>
				<div class="col-md-4">
					<label for="validationCustomUsername" class="form-label">Username</label>
					<div class="input-group has-validation">
						<span class="input-group-text" id="inputGroupPrepend">@</span>
						<input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
						<div class="invalid-feedback">
							Please choose a username.
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<label for="validationCustom03" class="form-label">City</label>
					<input type="text" class="form-control" id="validationCustom03" required>
					<div class="invalid-feedback">
						Please provide a valid city.
					</div>
				</div>
				<div class="col-md-3">
					<label for="validationCustom04" class="form-label">State</label>
					<select class="form-select" id="validationCustom04" required>
						<option selected disabled value="">Choose...</option>
						<option>...</option>
					</select>
					<div class="invalid-feedback">
						Please select a valid state.
					</div>
				</div>
				<div class="col-md-3">
					<label for="validationCustom05" class="form-label">Zip</label>
					<input type="text" class="form-control" id="validationCustom05" required>
					<div class="invalid-feedback">
						Please provide a valid zip.
					</div>
				</div>
				<div class="col-12">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
						<label class="form-check-label" for="invalidCheck">
							Agree to terms and conditions
						</label>
						<div class="invalid-feedback">
							You must agree before submitting.
						</div>
					</div>
				</div>
				<div class="col-12">
					<button class="btn btn-primary" type="submit">Submit form</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8 mb-3">
			<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  				<div class="carousel-inner">
					<div class="carousel-item ">
						<img src="{{ asset('storage/product/photos/9ONn0bjNZ0TtTGV7uqfLl3fB7dNRUjKWOndkIpml.jpg') }}" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item active">
						<img src="{{asset('storage/photos/SNiT6z9v9I1fgyq8XQVWGjkL8ObdcpiMe7y5TdJv.jpg')}}" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="{{asset('images/items/item.jpg')}}" class="d-block w-100" alt="...">
					</div>
				</div>
				 <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="visually-hidden">Previous</span>
				  </button>
				  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="visually-hidden">Next</span>
				  </button>
			</div>

		</div>
	</div>
</div>
@push('scripts')
<script>

</script>
@endpush
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