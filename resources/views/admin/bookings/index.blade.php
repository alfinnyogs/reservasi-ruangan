@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
   

    <!-- Content Row -->
        <div class="card">
            <div class="card-header d-flex" style="background-color: #f7d217">
                <h6 class="m-0 font-weight-bold mb-2 my-2" style="color: black;">
                    {{ __('Halaman Reservasi') }}
                </h6>
                <div class="ml-auto">
                    @can('booking_create')
                    <a href="{{ route('admin.bookings.create') }}" class="btn btn-outline-dark" style="color: black">
                        <span class="icon text-dark-50">
                            <i class="fa fa-plus" style="color: black"></i>
                        </span>
                        <span class="text" style="color: black">{{ __('Tambah Reservasi') }}</span>
                    </a>
                    @endcan
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover datatable datatable-booking" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="10">

                                </th>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kode Ruangan</th>
                                <th>Nama Ruangan</th>
                                <th>Check-In</th>
                                <th>Check-Out</th>
                                <th>Keterangan</th>
                                <th>Dokumen</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($bookings as $booking)
                            <tr data-entry-id="{{ $booking->id }}">
                                <td>

                                </td>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $booking->user->name }}</td>
                                <td>{{ $booking->arena->number }}</td>
                                <td>{{ $booking->arena->nmruangan }}</td>
                                <td>{{  Carbon\Carbon::parse($booking->time_from)->format('M, d D H:i:s') }}</td>
                                <td>{{  Carbon\Carbon::parse($booking->time_to)->format('M, d D H:i:s') }}</td>
                                @php
                                        $hour = date('h', strtotime(Carbon\Carbon::parse($booking->time_to)->format('H:i:s'))) - date('h', strtotime(Carbon\Carbon::parse($booking->time_from)->format('H:i:s'))) 
                                @endphp
                                <td>{{ $booking->keterangan }}</td>
                                <td align="center">
                                    <div class="btn-group btn-group-sm m-1">
                                        <form>
                                            <a href="{{ asset('assets/berkas/' . $booking->dokumen) }}" class="btn btn-outline-warning">
                                                <i class="fa fa-download" aria-hidden="true"></i>
                                            </a>
                                        </form>
                                    </div>
                                </td>
                                <td>{{ $booking->status }}</td>
                                <td align="center">
                                    <div class="btn-group btn-group-sm m-1">
                                        <form>
                                            <a href="{{ route('admin.bookings.edit', $booking->id) }}" class="btn btn-info">
                                                <i class="fas fa-edit" aria-hidden="true"></i>
                                            </a>
                                        </form>
                                    </div>
                                    <div class="btn-group btn-group-sm">
                                        <form onclick="return confirm('are you sure ? ')" class="d-inline" action="{{ route('admin.bookings.destroy', $booking->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger">
                                             <i class="fa fa-trash" aria-hidden="true"></i>
                                        </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="1"></td>
                                <td colspan="11" class="text-center">{{ __('Data Empty') }}</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <!-- Content Row -->

</div>
@endsection

@push('script-alt')
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
  let deleteButtonTrans = 'Delete Selected'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.bookings.mass_destroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });
      if (ids.length === 0) {
        alert('zero selected')
        return
      }
      if (confirm('are you sure ?')) {
        $.ajax({
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'asc' ]],
    pageLength: 50,
  });
  $('.datatable-booking:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})
</script>
@endpush