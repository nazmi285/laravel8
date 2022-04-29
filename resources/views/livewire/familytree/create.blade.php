<div>
    <div wire:ignore.self class="modal fade p-0" id="addNewFamilyModal" tabindex="-1" aria-labelledby="addNewFamilyModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-md-down">
            <form class="modal-content" wire:submit.prevent="store">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Family Member</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="form-group row">
                        <div class="col-12 col-md-12 mb-3">
                            <label class="col-12 col-sm-4 col-md-4" for="name">Name</label>
                            <div class="col-12 col-sm-8 col-md-8">
                                <input type="text" class="form-control" wire:model="form.name" id="name" placeholder="e.g.Muhammad">
                            </div>
                        </div>
                        <div class="col-12 col-md-12 mb-3">
                            <label class="col-12 col-sm-4 col-md-4" for="gender">Gender</label>
                            <div class="col-12 col-sm-8 col-md-8">
                                <select class="form-select" wire:model="form.gender" id="gender">
                                    <option value="male" selected="true">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 mb-3">
                            <label class="col-12 col-sm-4 col-md-4" for="birthdate">Date Of Birth</label>
                            <div class="col-12 col-sm-8 col-md-8">
                                <input type="date" class="form-control" wire:model="form.birthdate" id="birthdate">
                            </div>
                        </div>
                        <div class="col-12 col-md-12 mb-3">
                            <label class="col-12 col-sm-4 col-md-4" for="relationship">Relationship</label>
                            <div class="col-12 col-sm-8 col-md-8">
                                <select class="form-select" wire:model="form.relationship" id="relationship">
                                    <option value="spouse">Spouse</option>
                                    <option value="child" selected="true">Child</option>
                                    <option value="sibling" selected="true">Sibling</option>
                                    {{-- <option value="parent">parent</option> --}}
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary px-5">
                        <i class="fas fa-circle-notch fa-spin d-none mr-2" id="icon-processing"></i>
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

