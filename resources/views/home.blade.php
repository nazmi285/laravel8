@extends('layouts.master')

@section('content')

<div class="container mb-5">
    <div class="row justify-content-center">
        @if (Route::currentRouteName()=="home")
            <livewire:dashboard />
        @elseif(Route::currentRouteName()=="product")
            <livewire:product />
        @elseif(Route::currentRouteName()=="product.new")
            <livewire:product-new />
        @elseif(Route::currentRouteName()=="product.view")
            <livewire:product-view />
        @elseif(Route::currentRouteName()=="explore")
            <livewire:explore />
        @elseif(Route::currentRouteName()=="notification")
            <livewire:notification />
        @elseif(Route::currentRouteName()=="setting")
            <livewire:setting />
        @elseif(Route::currentRouteName()=="familytree")
            <livewire:familytree />
        @elseif(Route::currentRouteName()=="firebase")
            <livewire:firebase />
        @elseif(Route::currentRouteName()=="bootstrap")
            <livewire:bootstrap />
        @elseif(Route::currentRouteName()=="profile")
            <livewire:profile />
        @endif
    </div>
</div>

@endsection
@push('scripts')
    <script>
        window.addEventListener('name-updated', event => {
            alert('hello world');
        })
    </script>
@endpush