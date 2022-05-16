@extends('layouts.master')

@section('content')
<div class="container mb-5">
    <div class="row justify-content-center">
        @if (Route::currentRouteName()=="home")
            <livewire:dashboard />
        @elseif(Route::currentRouteName()=="product")
            <livewire:products />
        @elseif(Route::currentRouteName()=="notification")
            <livewire:notification />
        @elseif(Route::currentRouteName()=="setting")
            <livewire:setting />
        @elseif(Route::currentRouteName()=="bootstrap")
            <livewire:bootstrap />
        @elseif(Route::currentRouteName()=="profile")
             
        @elseif(Route::currentRouteName()=="familytree")
            <livewire:familytree />
        @endif
    </div>
</div>

@endsection
@push('scripts')
    <script>
        window.addEventListener('name-updated', event => {
            // alert('hello world');
        })
    </script>
@endpush