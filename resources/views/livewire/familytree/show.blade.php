<div>
    <div wire:ignore.self class="modal fade p-0 " id="showDetailMemberModal" tabindex="-1" aria-labelledby="showDetailMemberModalLabel" aria-modal="true" role="dialog" >
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
                                <input type="text" class="form-control disabled" maxlength="255" id="name" value="{{$member?$member->name:''}}">
                            </div>
                        </div>
                        <div class="col-12 col-md-12 mb-3">
                            <label class="col-12 col-sm-4 col-md-4" for="short name">Short Name</label>
                            <div class="col-12 col-sm-8 col-md-8">
                                <input type="text" class="form-control disabled" maxlength="10" id="short_name" value="{{$member?$member->short_name:''}}">
                            </div>
                        </div>
                        <div class="col-12 col-md-12 mb-3">
                            <label class="col-12 col-sm-4 col-md-4" for="gender">Gender</label>
                            <div class="col-12 col-sm-8 col-md-8">
                                <input type="text" class="form-control disabled" id="gender" value="{{$member?ucfirst($member->gender):''}}">
                            </div>
                        </div>
                        <div class="col-12 col-md-12 mb-3">
                            <label class="col-12 col-sm-4 col-md-4" for="birthdate">Date Of Birth</label>
                            <div class="col-12 col-sm-8 col-md-8">
                                <input type="text" class="form-control disabled" id="birthdate" value="{{$member?dateConvertDMY1($member->birthdate):''}}">
                            </div>
                        </div>
                        {{-- <div class="col-12 col-md-12 mb-3">
                            <label class="col-12 col-sm-4 col-md-4" for="birthdate">Relationship</label>
                            <div class="col-12 col-sm-8 col-md-8">
                                <input type="text" class="form-control disabled" id="birthdate" value="{{$member?ucfirst($member->relationship):''}}">
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
