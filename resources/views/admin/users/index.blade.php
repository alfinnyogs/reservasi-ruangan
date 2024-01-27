@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <!-- Content Row -->
        <div class="card">
            <div class="card-header py-3 d-flex" style="background-color: #f7d217">
                <h6 class="m-1 font-weight-bold mb-2 my-1" style="color: black">
                {{ __('Data User') }}
                </h6>
                <div class="ml-auto">
                    @can('user_create')
                    <a href="{{ route('admin.users.create') }}" class="btn btn-outline-dark" style="color: black">
                        <span class="icon text-dark-50">
                            <i class="fa fa-plus" style="color: black"></i>
                        </span>
                        <span class="text" style="color: black">{{ __('Tambah User') }}</span>
                    </a>
                    @endcan
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover datatable datatable-User" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="10">

                                </th>
                                <th>No</th>
                                <th>{{ __('Nama') }}</th>
                                <th>{{ __('Alamat Email') }}</th>
                                <th>{{ __('Role') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($users as $user)
                            <tr data-entry-id="{{ $user->id }}">
                                <td></td>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @foreach($user->roles as $key => $role)
                                        <span class="badge badge-info">{{ $role->title }}</span>
                                    @endforeach
                                </td>
                                <td>
                                <div class="btn-group btn-group-sm">
                                        <form>
                                            <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-info">
                                                <i class="fas fa-edit" aria-hidden="true"></i>
                                            </a>
                                        </form>
                                    </div>
                                    
                                    <div class="btn-group btn-group-sm">
                                        <form onclick="return confirm('are you sure ? ')" class="d-inline" action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
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
    url: "{{ route('admin.users.mass_destroy') }}",
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
  $('.datatable-User:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})
</script>
@endpush