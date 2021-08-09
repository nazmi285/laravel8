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
				<a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
					menu left
				</a>
				<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">menu right</button>

				<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
					<div class="offcanvas-header">
						<h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
						<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
					</div>
					<div class="offcanvas-body p-0">
						<div class="d-flex flex-column flex-shrink-0 p-3 bg-light">
							<a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
								<svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
								<span class="fs-4">Sidebar</span>
							</a>
							<hr>
							<ul class="nav nav-pills flex-column mb-auto">
								<li class="nav-item">
									<a href="#" class="nav-link active" aria-current="page">
										<svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
										Home
									</a>
								</li>
								<li>
									<a href="#" class="nav-link link-dark">
										<svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
										Dashboard
									</a>
								</li>
								<li>
									<a href="#" class="nav-link link-dark">
										<svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
										Orders
									</a>
								</li>
								<li>
									<a href="#" class="nav-link link-dark">
										<svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
										Products
									</a>
								</li>
								<li>
									<a href="#" class="nav-link link-dark">
										<svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
										Customers
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
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