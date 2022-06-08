<div>
	@section('title')
		<h4 class="fw-bold p-2 mb-0">Profile</h4>
	@endsection

	<div class="row justify-content-center">
		<div class="col-12 col-md-8 mb-3">
			
				<div class="card mb-3">
					<div class="card-body">
						<div class="row">
							<div class="col-12 col-md-6 mb-3">
								<h4>Profile</h4>
								<p>Update your account's profile information and email address.</p>
							</div>
							<div class="col-12 col-md-6 mb-3">
								<form wire:submit.prevent="update">
									<div class="mb-3">
										@if (isset($photo))
											<img class="img-fluid rounded-circle" src="{{ $photo->temporaryUrl() }}" width="78px" alt="...">
										@else
											@if(isset($user->image_url))
												<img class="img-fluid rounded-circle" src="{{asset('storage/'.$user->image_url)}}" width="78px" alt="...">
											@else
												<img class="img-fluid rounded-circle" src="https://github.com/mdo.png" width="78px" alt="...">
											@endif
										@endif
										<input type="file" class="form-control mt-3" wire:model="photo" id="photo">
										@error('photo') <span class="text-danger">{{ $message }}</span> @enderror
									</div>
									<div class="mb-3">
										<label for="username" class="form-label">Username</label>
										<input type="text" class="form-control @error('username') is-invalid @enderror" wire:model="form.name" id="username">
										@error('username') <span class="error">{{ $message }}</span> @enderror
									</div>
									<div class="mb-3">
										<label for="exampleInputPassword1" class="form-label">Email</label>
										<p class="form-control-plaintext">{{$user->email}}</p>
									</div>
									<button type="submit" class="btn btn-primary float-end">Save</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="card mb-3">
					<div class="card-body">
						<div class="row">
							<div class="col-12 col-md-6 mb-3">
								<h4>Update Password</h4>
								<p>Ensure your account is using a long, random password to stay secure.</p>
							</div>
							<div class="col-12 col-md-6 mb-3">
								<form wire:submit.prevent="changePassword">
									<div class="mb-3">
										<label for="current_password" class="form-label">Current Password</label>
										<input type="password" class="form-control @error('current_password') is-invalid @enderror" wire:model.defer="form.current_password" id="current_password">
										@error('current_password')
											<span class="invalid-feedback">{{ $message }}</span> 
										@enderror
									</div>
									<div class="mb-3">
										<label for="password" class="form-label">New Password</label>
										<input type="password" class="form-control @error('password') is-invalid @enderror" wire:model.defer="form.password" id="password">
										@error('password') 
											<span class="invalid-feedback">{{ $message }}</span> 
										@enderror
									</div>
									<div class="mb-3">
										<label for="password_confirmation" class="form-label">Confirm Password</label>
										<input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" wire:model.defer="form.password_confirmation" id="password_confirmation">
										@error('password_confirmation') 
											<span class="invalid-feedback">{{ $message }}</span>
										@enderror
									</div>
									<button type="submit" class="btn btn-primary float-end px-5">Save</button>
								</form>
							</div>
						</div>
					</div>
				</div>

				<div class="card mb-3">
					<div class="card-body">
						<div class="row">
							<div class="col-12 col-md-6 mb-3">
								<h4>Delete Account</h4>
								<p>Permanently delete your account.</p>
							</div>
							<div class="col-12 col-md-6 mb-3">
								<p>Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.</p>
								<form>
									<button type="submit" class="btn btn-danger">DELETE ACCOUNT</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			
		</div>

	</div>
</div>