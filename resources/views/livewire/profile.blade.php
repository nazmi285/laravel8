<div>
	@section('title')
        <h4 class="fw-bold p-2 mb-0">My Profile</h4>
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
								<form wire:submit.prevent="save">
									<div class="mb-3">
										<img class="img-fluid rounded-circle mb-3" src="{{$user->image_url? $user->image_url:'https://github.com/mdo.png'}}" width="78px" alt="...">
										<input wire:model="image_url" type="file" class="form-control file-hidden image_url" name="image_url" id="image_url">
									</div>
									<div class="mb-3">
										<label for="name" class="form-label">Name</label>
										<input wire:model="user.name" type="text" class="form-control" id="name" value="{{$user->name}}">
									</div>
									<div class="mb-3">
										<label for="exampleInputPassword1" class="form-label">Email</label>
										<p class="form-control-plaintext">{{$user->email}}</p>
									</div>
									<button wire:click="store()" type="submit" class="btn btn-primary float-end">Save</button>
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
										<input type="text" class="form-control" id="current_password">
									</div>
									<div class="mb-3">
										<label for="password" class="form-label">New Password</label>
										<input type="text" class="form-control" id="password">
									</div>
									<div class="mb-3">
										<label for="confirm_password" class="form-label">Confirm Password</label>
										<input type="text" class="form-control" id="confirm_password">
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