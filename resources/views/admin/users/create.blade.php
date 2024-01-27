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
                    <h6 class="mb-0 font-weight-bold" style="color: black">{{ __('Halaman Tambah User') }}</h6>
                    <a href="{{ route('admin.users.index') }}" class="btn btn-outline-light font-weight-bold"><i class="fa fa-arrow-left"></i>{{ __('  Kembali') }}</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.users.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">{{ __('Nama') }}</label>
                        <input type="text" class="form-control" id="name" placeholder="{{ __('Nama') }}" name="name" value="{{ old('name') }}" />
                    </div>
                    <div class="form-group">
                        <label for="email">{{ __('Alamat Email') }}</label>
                        <input type="email" class="form-control" id="email" placeholder="{{ __('Alamat Email') }}" name="email" value="{{ old('email') }}" />
                    </div>
                    <div class="form-group">
                        <label for="password">{{ __('Kata Sandi') }}</label>
                        <input type="text" class="form-control" id="password" placeholder="{{ __('Kata Sandi') }}" name="password" value="{{ old('password') }}" required />
                    </div>
                    <div class="form-group">
                        <label for="roles">{{ __('Role') }}</label>
                        <select name="roles[]" id="roles" class="form-control select2" multiple="multiple" required>
                            @foreach($roles as $id => $roles)
                                <option value="{{ $id }}" {{ (in_array($id, old('roles', [])) || isset($role) && $role->roles->contains($id)) ? 'selected' : '' }}>{{ $roles }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-outline-warning btn-block" style="font-weight:bold">{{ __('Simpan') }}</button>
                </form>
            </div>
        </div>
    

    <!-- Content Row -->

</div>
@endsection