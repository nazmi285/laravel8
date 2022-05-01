<li>
    <div class="position-relative">
        
        {{-- <button class="btn btn-sm position-absolute top-0 start-100 translate-middle rounded-circle" name="btnAdd" data-bs-toggle="modal" data-bs-target="#addNewFamilyModal" wire:click="newRelatedMember({{$sub_family->partner? $sub_family->partner->id :$sub_family->id}})" style="z-index: 99;"><i class="fas fa-plus"></i></button> --}}
        <span class="{{$sub_family->gender}}">
            <i class="fas fa-3x fa-user-circle"></i>
            <p>{{$sub_family->name}}</p>
        </span>
        @if($sub_family->partner)
            <span class="{{$sub_family->partner->gender}}">
                <i class="fas fa-3x fa-user-circle"></i>
                <p>{{$sub_family->partner->name}}</p>
            </span>
        @endif
    </div>
    {{-- @if($sub_family->partner)
        @if(count($sub_family->partner->childParents) > 0)
            @php 
                $sub_childParents = $sub_family->partner->childParents
            @endphp
        @endif
    @endif
    @if($sub_family->childParents)
        @if(count($sub_family->childParents) > 0)
            @php 
                $sub_childParents = $sub_family->childParents;
            @endphp
        @endif
    @endif

    @if(isset($sub_childParents))
        <ul>
            @foreach ($sub_childParents as $childParents)
                @include('child_parents', ['sub_family' => $childParents])
            @endforeach
        </ul>
    @endif --}}

    @if($sub_family->partner)
        @if(count($sub_family->partner->childParents) > 0)
            <ul>
                @foreach ($sub_family->partner->childParents as $childParents)
                    @include('child_parents', ['sub_family' => $childParents])
                @endforeach
            </ul>
        @endif
    @endif
    @if(count($sub_family->childParents) > 0)
        <ul>
            @foreach ($sub_family->childParents as $childParents)
                @include('child_parents', ['sub_family' => $childParents])
            @endforeach
        </ul>
    @endif
</li>
