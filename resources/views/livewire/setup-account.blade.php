<div>
    @section('title')
        <h4 class="fw-bold p-2 mb-0">Setup My Account</h4>
    @endsection

    <div class="d-flex justify-content-center">
        <div class="col-12 col-md-6 mb-3">
            <div class="form-group row justify-content-center">
                <div class="col-12 col-md-6 mb-3">
                    <label for="mother_name">Mother Name</label>
                    <input type="search" class="form-control" wire:model.lazy="mother_name" id="mother_name" list="mothers">
                    <datalist id="mothers">
                        @forelse($mothers as $mother)
                            <option value="{{$mother->fullname}}"></option>
                        @empty
                        @endforelse
                    </datalist>
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-12 col-md-6 mb-3">
                    <div class="or-container">
                        <div class="line-separator"></div>
                        <div class="or-label">or</div>
                        <div class="line-separator"></div>
                    </div>
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-12 col-md-6 mb-3">
                    <div class="d-grid gap-2">
                      <button class="btn btn-outline-primary" type="button"><i class="fas fa-plus"></i> Create New Family</button>
                    </div>
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-12 col-md-6 mb-3">
                    <button class="btn btn-secondary float-end" wire:click="skip()" type="button">Skip</button>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')

@endpush