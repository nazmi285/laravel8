<div>
	@section('title')
        <h4 class="fw-bold p-2 mb-0">My Profile</h4>
    @endsection
	<div class="d-flex justify-content-center">
		<div class="col-12 col-md-6 mb-3">
				@if (session()->has('success'))
					<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Successful!</strong> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
				<div class="card mb-3">
					<div class="card-body">
						<div class="row">
							<div class="col-12 col-md-6 mb-3">
								<h4>Profile</h4>
								<p>Update your account's profile information and email address.</p>
							</div>
							<div class="col-12 col-md-6 mb-3" >
					
								<form wire:submit.prevent="store">
									<div class="mb-3">
										<i class="fas fa-4x text-secondary fa-user-circle d-inline"></i>
										{{-- <img class="img-fluid rounded-circle mb-3" src="{{$user->image_url? $user->image_url:'https://github.com/mdo.png'}}" width="78px" alt="..."> --}}
										<input wire:model.defer="photo" type="file" class="form-control d-inline w-50 align-middle" id="photo">
										@error('photo') <span class="error">{{ $message }}</span> @enderror
 
									</div>
									<div class="mb-3">
										<label for="name" class="form-label">Name</label>
										<input type="text" class="form-control @error('name') is-invalid @enderror" wire:model.defer="state.name" id="name" value="{{$user->name}}">
										@error('name') <span class="invalid-feedback">{{ $message }}</span> @enderror
									</div>
									<div class="mb-3">
										<label for="exampleInputPassword1" class="form-label">Email</label>
										<input type="text" class="form-control disabled" wire:model.defer="state.email" id="email" value="{{$user->email}}" disabled="">
									</div>
									<button wire:click="store()" type="button" class="btn btn-primary float-end px-5">Save</button>
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
								<form>
									<div class="mb-3">
										<label for="current_password" class="form-label">Current Password</label>
										<input type="password" class="form-control @error('current_password') is-invalid @enderror" wire:model.defer="state.current_password" id="current_password">
										@error('current_password')
											<span class="invalid-feedback">{{ $message }}</span> 
										@enderror
									</div>
									<div class="mb-3">
										<label for="password" class="form-label">New Password</label>
										<input type="password" class="form-control @error('password') is-invalid @enderror" wire:model.defer="state.password" id="password">
										@error('password') 
											<span class="invalid-feedback">{{ $message }}</span> 
										@enderror
									</div>
									<div class="mb-3">
										<label for="password_confirmation" class="form-label">Confirm Password</label>
										<input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" wire:model.defer="state.password_confirmation" id="password_confirmation">
										@error('password_confirmation') 
											<span class="invalid-feedback">{{ $message }}</span>
										@enderror
									</div>
									<button wire:click="changePassword()"  type="button" class="btn btn-primary float-end px-5">Save</button>
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
									<button type="submit" class="btn btn-danger float-end" disabled="">DELETE ACCOUNT</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			
		</div>

	</div>
</div>
