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
                    <h6 class="mb-0 font-weight-bold" style="color: black">{{ __('Reservasi Ruangan') }}</h6>
                    <a href="{{ route('admin.bookings.index') }}" class="btn btn-outline-light font-weight-bold"><i class="fa fa-arrow-left"></i>{{ __('  Kembali') }}</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.bookings.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="arena_id">{{ __('Nama Ruangan') }}</label>
                        <select name="arena_id" id="arena_id" class="form-control">
                            @foreach($arenas as $arena)
                                <option {{ $arenaNumber == $arena->number ? 'selected' : null }} value="{{ $arena->id }}">{{ $arena->nmruangan }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="time_from">{{ __('Check-in') }}</label>
                        <input type="text" class="form-control datetimepicker" id="time_from" name="time_from" value="{{ old('time_from') }}" />
                    </div>
                    <div class="form-group">
                        <label for="time_to">{{ __('Check-out') }}</label>
                        <input type="text" class="form-control datetimepicker" id="time_to" name="time_to" value="{{ old('time_to') }}" />
                    </div>
                    <div class="form-group">
                        <label for="nmruangan">{{ __('Keterangan Peminjaman') }}</label>
                        <input type="text" class="form-control" id="number" placeholder="{{ __('Keterangan') }}" name="keterangan" value="{{ old('keterangan') }}" />
                    </div>
                    <div class="form-group">
                        <label for="status">{{ __('Status') }}</label>
                        <select name="status" id="status" class="form-control">
                            <option value="0">Sukses</option>
                            <option value="1">Selesai</option>
                            <option value="2">Batal</option>
                            <option value="3">Pending</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="dokumen">{{ __('Upload Surat Bukti Peminjaman') }}</label>
                            <input type="file" class="form-control" id="dokumen" name="dokumen" value="{{ old('dokumen') }}"/>
                    </div>
                    <button type="submit" class="btn btn-outline-warning btn-block" style="font-weight:bold">{{ __('Simpan') }}</button>
                </form>
            </div>
        </div>
    

    <!-- Content Row -->

</div>
@endsection


@push('style-alt')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
@endpush

@push('script-alt')
<script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script>
        $('.datetimepicker').datetimepicker({
            format: 'YYYY-MM-DD HH:mm',
            locale: 'en',
            sideBySide: true,
            icons: {
            up: 'fas fa-chevron-up',
            down: 'fas fa-chevron-down',
            previous: 'fas fa-chevron-left',
            next: 'fas fa-chevron-right'
            },
            stepping: 10
        });
    </script>
@endpush