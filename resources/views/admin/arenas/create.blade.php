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
                    <h6 class="mb-0 font-weight-bold" style="color: black">{{ __('Tambah Ruangan') }}</h6>
                    <a href="{{ route('admin.arenas.index') }}" class="btn btn-outline-light font-weight-bold"><i class="fa fa-arrow-left"></i>{{ __('  Kembali') }}</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.arenas.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="number">{{ __('Kode Ruangan') }}</label>
                        <input type="text" class="form-control" id="number" placeholder="{{ __('Kode Ruangan') }}" name="number" value="{{ old('number') }}"/>
                    </div>
                    <div class="form-group">
                        <label for="nmruangan">{{ __('Nama Ruangan') }}</label>
                        <input type="text" class="form-control" id="number" placeholder="{{ __('Nama Ruangan') }}" name="nmruangan" value="{{ old('nmruangan') }}" />
                    </div>
                    <div class="form-group">
                        <label for="status">{{ __('Status') }}</label>
                        <select name="status" id="status" class="form-control">
                            <option value="1">Kosong</option>
                            <option value="0">Digunakan</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-outline-warning btn-block" style="font-weight:bold">{{ __('Simpan') }}</button>
                </form>
            </div>
        </div>
    

    <!-- Content Row -->

</div>
@endsection
