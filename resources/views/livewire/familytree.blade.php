<div>
    @section('title')
        <h4 class="fw-bold p-2 mb-0">Big Family Tree</h4>
    @endsection
    <div class="d-flex justify-content-center mb-2 ">
        <div class="col-12 col-md-6 mb-3 d-flex justify-content-between">
            {{-- <div class="clearfix mt-3 mb-3">
                <a class="btn btn-link text-decoration-none" href="{{url('familytree/list')}}"><i class="fas fa-th-list"></i> Show List</a>
            </div> --}}
            <div class="clearfix mt-3 mb-3">
                <select class="form-select" wire:model="filter" id="filter">
                    <option value="">Please Choose</option>
                    @forelse($family_rs as $member)
                        <option value="{{$member->id}}">{{$member->name}}</option>
                    @empty
                    @endforelse
                </select>
            </div>
            <div class="clearfix mt-3 mb-3">
                <button type="button" class="btn btn-link text-decoration-none" data-bs-toggle="modal" data-bs-target="#addNewFamilyModal"><i class="fa fa-plus" aria-hidden="true"></i> New Family</button>
            </div>
        </div>
    </div>
    <div class="d-flex overflow-auto mb-3 justify-content-center" align="center">
        <div class="tree" id="FamilyTreeDiv">
            @forelse($families as $family)
                <ul>
                    <li>
                        <div class="position-relative">
                            <button class="btn btn-sm position-absolute top-0 start-100 translate-middle rounded-circle" name="btnAdd" data-bs-toggle="modal" data-bs-target="#addNewFamilyModal" wire:click="newRelatedMember({{$family->partner? $family->partner->id :$family->id}})"><i class="fas fa-plus"></i></button>
                            <span class="{{$family->gender}}">
                                <i class="fas fa-3x fa-user-circle" style="cursor: pointer;" wire:click="showMember({{$family->id}})"></i>
                                <p>{{$family->short_name}}</p>
                            </span>
                            @if($family->partner)
                                <span class="{{$family->partner->gender}}">
                                    <i class="fas fa-3x fa-user-circle" style="cursor: pointer;" wire:click="showMember({{$family->partner->id}})"></i>
                                    <p>{{$family->partner->short_name}}</p>
                                </span>
                            @endif
                           
                        </div>
                        @if($family->partner)
                            @if(count($family->partner->childParents) > 0)
                                <ul>
                                    @foreach ($family->partner->childParents as $childParents)
                                        @include('child_parents', ['sub_family' => $childParents])
                                    @endforeach
                                </ul>
                            @endif
                        @endif
                        @if(count($family->childParents) > 0)
                            <ul>
                                @foreach ($family->childParents as $childParents)
                                    @include('child_parents', ['sub_family' => $childParents])
                                @endforeach
                            </ul>
                        @endif
                    </li>
                </ul>
            @empty
            @endforelse

            <ul>
                {{-- @forelse($families as $family)
                <li>
                    <div>
                        <span class="male">
                            <img src="https://github.com/mdo.png" alt="mdo" width="46" height="46" class="rounded-circle">
                        </span>
                    </div>
                </li>
                @empty
                @endforelse --}}
                {{-- <li>
                    <div>
                        <span class="male">
                            <img src="https://github.com/mdo.png" alt="mdo" width="46" height="46" class="rounded-circle">
                        </span>
                        <span class="female">
                            <img src="https://github.com/mdo.png" alt="mdo" width="46" height="46" class="rounded-circle">
                        </span>
                    </div>
                    <ul>
                        <li>
                            <div>
                                <span class="male"><img src="https://github.com/mdo.png" alt="mdo" width="46" height="46" class="rounded-circle"></span>
                                <span class="female"><img src="https://github.com/mdo.png" alt="mdo" width="46" height="46" class="rounded-circle"></span>
                            </div>
                            <ul>
                                <li>
                                    <div>
                                        <span class="male"><img src="https://github.com/mdo.png" alt="mdo" width="46" height="46" class="rounded-circle"></span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <span class="female"><img src="https://github.com/mdo.png" alt="mdo" width="46" height="46" class="rounded-circle"></span>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div>
                                <span class="male"><img src="https://github.com/mdo.png" alt="mdo" width="46" height="46" class="rounded-circle"></span>
                                <span class="female"><img src="https://github.com/mdo.png" alt="mdo" width="46" height="46" class="rounded-circle"></span>
                            </div>
                            <ul>
                                <li>
                                    <div>
                                        <span class="male"><img src="https://github.com/mdo.png" alt="mdo" width="46" height="46" class="rounded-circle"></span>
                                        <span class="female"><img src="https://github.com/mdo.png" alt="mdo" width="46" height="46" class="rounded-circle"></span>
                                    </div>
                                    <ul>
                                        <li>
                                            <div>
                                                <span class="female"><img src="https://github.com/mdo.png" alt="mdo" width="46" height="46" class="rounded-circle"></span>
                                            </div>
                                            <ul>
                                                <li>
                                                    <div>
                                                        <span class="female"><img src="https://github.com/mdo.png" alt="mdo" width="46" height="46" class="rounded-circle"></span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div>
                                        <span class="female"><img src="https://github.com/mdo.png" alt="mdo" width="46" height="46" class="rounded-circle"></span>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div>
                                <span class="male"><img src="https://github.com/mdo.png" alt="mdo" width="46" height="46" class="rounded-circle"></span>
                                <span class="female"><img src="https://github.com/mdo.png" alt="mdo" width="46" height="46" class="rounded-circle"></span>
                            </div>
                            <ul>
                                <li>
                                    <div>
                                        <span class="male"><img src="https://github.com/mdo.png" alt="mdo" width="46" height="46" class="rounded-circle"></span>
                                        <span class="female"><img src="https://github.com/mdo.png" alt="mdo" width="46" height="46" class="rounded-circle"></span>
                                    </div>
                                    <ul>
                                        <li>
                                            <div>
                                                <span class="female"><img src="https://github.com/mdo.png" alt="mdo" width="46" height="46" class="rounded-circle"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div>
                                        <span class="male"><img src="https://github.com/mdo.png" alt="mdo" width="46" height="46" class="rounded-circle"></span>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li> --}}
            </ul>
        </div>
    </div>
    <livewire:familytree.create/>
    <div wire:ignore class="modal fade p-0 " id="showMemberModal" tabindex="-1" aria-labelledby="showMemberModalLabel" aria-modal="true" role="dialog" >
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-md-down">
            <form class="modal-content" wire:submit.prevent="updateMember">
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
                                <input type="text" class="form-control disabled" maxlength="255" wire:model.defer="upd_name" id="name" >
                            </div>
                        </div>
                        <div class="col-12 col-md-12 mb-3">
                            <label class="col-12 col-sm-4 col-md-4" for="short_name">Short Name</label>
                            <div class="col-12 col-sm-8 col-md-8">
                                <input type="text" class="form-control disabled" maxlength="10" wire:model.defer="upd_short_name" id="short_name" >
                            </div>
                        </div>
                        <div class="col-12 col-md-12 mb-3">
                            <label class="col-12 col-sm-4 col-md-4" for="gender">Gender</label>
                            <div class="col-12 col-sm-8 col-md-8">
                                <select class="form-select" wire:model.defer="upd_gender" id="gender">
                                    <option value="">Please Choose</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 mb-3">
                            <label class="col-12 col-sm-4 col-md-4" for="birthdate">Date Of Birth</label>
                            <div class="col-12 col-sm-8 col-md-8">
                                <input type="text" class="form-control disabled" wire:model.defer="upd_birthdate" id="birthdate" >
                            </div>
                        </div>
                        <div class="col-12 col-md-12 mb-3">
                            <label class="col-12 col-sm-4 col-md-4" for="relationship">Relationship</label>
                            <div class="col-12 col-sm-8 col-md-8">
                                <select class="form-select" wire:model.defer="upd_relationship" id="relationship">
                                    <option value="">Please Choose</option>
                                    <option value="spouse">Spouse</option>
                                    <option value="child">Child</option>
                                    <option value="sibling">Sibling</option>
                                    <option value="parent">parent</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 mb-3">
                            <label class="col-12 col-sm-4 col-md-4" for="relationship">Relation To</label>
                            <div class="col-12 col-sm-8 col-md-8">
                                <select class="form-select" wire:model.defer="upd_relationto" id="relationto">
                                    <option value="">Please Choose</option>
                                    @forelse($family_rs as $member)
                                        <option value="{{$member->id}}">{{$member->name}}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                        </div>
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
    <script>
        window.addEventListener('show-modal', event => {
            $('#showMemberModal').modal('show');
        })
    </script>
 
</div>