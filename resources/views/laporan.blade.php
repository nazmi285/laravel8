@extends('layouts.master')

@section('content')
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <div class="card mb-3">
                <div class="card-header">
                    Borang
                </div>
                <div class="card-body">
                    <form method="post" action="{{url('laporan/store')}}">
                        @csrf
                        <div class="form-group mb-3">
                            <label>Nama Penuh</label>
                            <input type="text" class="form-control" name="nama_penuh" placeholder="Cth:- Muhammad Nazmi">
                        </div>
                        <div class="form-group mb-3">
                            <label>E-Mel</label>
                            <input type="email" class="form-control" name="emel" placeholder="Cth:- nazmi@email.com">
                        </div>
                        <div class="form-group mb-3">
                            <button type="reset" class="btn btn-secondary">Semula</button>
                            <button type="submit" class="btn btn-primary px-5">Daftar</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Laporan
                </div>
                <div class="card-body">
                    <div class="col-12 mb-3">
                        <a href="{{url('laporan/export')}}" class="btn btn-outline-success" target="_blank">Export To Excel</a>
                        {{-- <button type="button" class="btn btn-outline-success pull-right" name="btnExportToExcel">Export To Excel</button>
                        <button type="button" class="btn btn-outline-danger pull-right" name="btnExportToExcel">Export To PDF</button> --}}
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Penuh</th>
                                <th scope="col">e-mel</th>
                                <th scope="col">Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($trainings as $training)
                            <tr>
                                <th scope="row">{{$training->id}}</th>
                                <td>{{$training->nama_penuh}}</td>
                                <td>{{$training->emel}}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" name="btnEdit">Edit</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    this is footer
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')

@endpush