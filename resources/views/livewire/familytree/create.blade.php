<div>
    <div wire:ignore class="modal fade p-0" id="addNewFamilyModal" tabindex="-1" aria-labelledby="addNewFamilyModalLabel" aria-hidden="true">
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
                            <label class="col-12 col-sm-4 col-md-4" for="name">Full Name</label>
                            <div class="col-12 col-sm-8 col-md-8">
                                <input type="text" class="form-control" maxlength="255" wire:model.defer="form.name" id="name" placeholder="e.g.Muhammad Nazmi Bin Radzuan">
                            </div>
                        </div>
                        <div class="col-12 col-md-12 mb-3">
                            <label class="col-12 col-sm-4 col-md-4" for="short name">Short Name</label>
                            <div class="col-12 col-sm-8 col-md-8">
                                <input type="text" class="form-control" maxlength="10" wire:model.defer="form.short_name" id="short name" placeholder="e.g.Nazmi">
                                <small>Limited to 10 characters</small>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 mb-3">
                            <label class="col-12 col-sm-4 col-md-4" for="gender">Gender</label>
                            <div class="col-12 col-sm-8 col-md-8">
                                <select class="form-select" wire:model.defer="form.gender" id="gender">
                                    <option value="">Please Choose</option>
                                    <option value="male" selected="true">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 mb-3">
                            <label class="col-12 col-sm-4 col-md-4" for="birthdate">Date Of Birth</label>
                            <div class="col-12 col-sm-8 col-md-8">
                                <input type="date" class="form-control" wire:model.defer="form.birthdate" id="birthdate">
                            </div>
                        </div>
                        @if(!empty($person))
                        <div class="col-12 col-md-12 mb-3">
                            <label class="col-12 col-sm-4 col-md-4" for="relationship">Relationship</label>
                            <div class="col-12 col-sm-8 col-md-8">
                                <select class="form-select" wire:model.defer="form.relationship" id="relationship">
                                    <option value="">Please Choose</option>
                                    <option value="spouse">Spouse</option>
                                    <option value="child" selected="true">Child</option>
                                    <option value="sibling" selected="true">Sibling</option>
                                    <option value="parent">parent</option>
                                </select>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary px-5">
                        <i class="fas fa-circle-notch fa-spin d-none mr-2" id="icon-processing"></i>
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

