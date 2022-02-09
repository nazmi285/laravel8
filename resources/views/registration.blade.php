@extends('layouts.master')

@section('content')
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <div class="d-flex flex-fill border-bottom py-3">
                <div class="flex-shrink-0">
                    <i class="fas fa-lg fa-check-circle text-primary"></i>
                </div>
                <div class="flex-fill bd-highlight mx-3">
                    <div class="h4">User Informations</div>
                    Tell us about you, so we can know each other. 
                </div>
                <div class="bd-highlight align-self-center link-arrow">
                    <i class="fas fa-lg fa-chevron-right"></i>
                </div>
            </div>
            <div class="d-flex flex-fill border-bottom py-3">
                <div class="flex-shrink-0">
                    <i class="far fa-lg fa-check-circle"></i>
                </div>
                <div class="flex-fill bd-highlight mx-3">
                    <div class="h4">Merchant Informations</div>
                    Let the world know that you store is online.
                </div>
                <div class="bd-highlight align-self-center link-arrow">
                    <i class="fas fa-lg fa-chevron-right"></i>
                </div>
            </div>
            <div class="d-flex flex-fill border-bottom py-3">
                <div class="flex-shrink-0">
                    <i class="far fa-lg fa-check-circle"></i>
                </div>
                <div class="flex-fill bd-highlight mx-3">
                    <div class="h4">Subscibtion Plan</div>
                    Choose wisely before burning your money monthly.
                </div>
                <div class="bd-highlight align-self-center link-arrow">
                    <i class="fas fa-lg fa-chevron-right"></i>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')

@endpush