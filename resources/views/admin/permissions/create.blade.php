@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<!-- Content Row -->
        <div class="card shadow">
            <div class="card-header" style="background-color: #f7d217">
                <div class="d-sm-flex align-items-center justify-content-between mb-2 my-1">
                    <h6 class="mb-0 font-weight-bold" style="color: black">{{ __('Tambah Title') }}</h6>
                    <a href="{{ route('admin.permissions.index') }}" class="btn btn-outline-light font-weight-bold"><i class="fa fa-arrow-left"></i>{{ __('  Kembali') }}</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.permissions.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">{{ __('Title') }}</label>
                        <input type="text" class="form-control" id="title" placeholder="{{ __('Title') }}" name="title" value="{{ old('title') }}" />
                    </div>
                    <button type="submit" class="btn btn-outline-warning btn-block" style="font-weight:bold">{{ __('Simpan') }}</button>
                </form>
            </div>
        </div>
    

    <!-- Content Row -->

</div>
@endsection