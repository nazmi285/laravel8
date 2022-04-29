<div>
    @section('title')
        <h4 class="fw-bold p-2 mb-0">Big Family Tree</h4>
    @endsection
    <div class="d-flex justify-content-center mb-2 ">
        <div class="col-12 col-sm-8 col-md-8 col-lg-8 d-flex justify-content-between">
            <div class="clearfix mt-3 mb-3">
                <a class="btn btn-link text-decoration-none" href="{{url('family/list')}}"><i class="fas fa-th-list"></i> Show List</a>
            </div>
            <div class="clearfix mt-3 mb-3">
                <button type="button" class="btn btn-link text-decoration-none" data-bs-toggle="modal" data-bs-target="#addNewFamilyModal"><i class="fa fa-plus" aria-hidden="true"></i> New Family</button>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center overflow-auto width-auto">
        <div class="tree" id="FamilyTreeDiv" style="width:auto;display:inline-block;">
            @forelse($families as $family)
                <ul style="display: inline-block;vertical-align: top;">
                    <li>
                        <div class="position-relative">
                            <button class="btn btn-sm position-absolute top-0 start-100 translate-middle rounded-circle" name="btnAdd" data-bs-toggle="modal" data-bs-target="#addNewFamilyModal" wire:click="newRelatedMember({{$family->partner? $family->partner->id :$family->id}})"><i class="fas fa-plus"></i></button>
                            <span class="{{$family->gender}}">
                                <i class="fas fa-3x fa-user-circle"></i>
                                <p>{{$family->name}}</p>
                            </span>
                            @if($family->partner)
                                <span class="{{$family->partner->gender}}">
                                    <i class="fas fa-3x fa-user-circle"></i>
                                    <p>{{$family->partner->name}}</p>
                                </span>
                            @endif
                           
                        </div>
                        
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
</div>