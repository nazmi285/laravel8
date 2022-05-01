<div>
    <div wire:ignore.self class="modal fade p-0" id="showDetailMemberModal" tabindex="-1" aria-labelledby="updateFamilyModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-md-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Member Information</h5>
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
                                <input type="text" class="form-control" maxlength="255" wire:model="person.name" id="name" placeholder="e.g.Muhammad Nazmi Bin Radzuan" value="{{$person->name}}">
                            </div>
                        </div>
                        <div class="col-12 col-md-12 mb-3">
                            <label class="col-12 col-sm-4 col-md-4" for="short name">Short Name</label>
                            <div class="col-12 col-sm-8 col-md-8">
                                <input type="text" class="form-control" maxlength="10" wire:model="person.short_name" id="short name" placeholder="e.g.Nazmi">
                                <small>Limited to 10 characters</small>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 mb-3">
                            <label class="col-12 col-sm-4 col-md-4" for="gender">Gender</label>
                            <div class="col-12 col-sm-8 col-md-8">
                                <select class="form-select" wire:model="form.gender" id="gender">
                                    <option value="">Please Choose</option>
                                    <option value="male">Male</option>
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
                        @if(!empty($person))
                        <div class="col-12 col-md-12 mb-3">
                            <label class="col-12 col-sm-4 col-md-4" for="relationship">Relationship</label>
                            <div class="col-12 col-sm-8 col-md-8">
                                <select class="form-select" wire:model="form.relationship" id="relationship">
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
            </div>
        </div>
    </div>
</div>
