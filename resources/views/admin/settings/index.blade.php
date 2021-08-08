@extends('admin.layouts.admin')

@section('title', 'Thông tin setting')


@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('admins/main.js') }}"></script>

@endsection
@section('content')

<div class="main-content-container container-fluid px-4">

@include('admin.partials.title-content', ['name'=>'Setting'])
@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
<div class="row">
    <div class="col">
      <div class="card card-small mb-4">
        <div class="card-header border-bottom">
          <h6 class="m-0">Setting</h6>
          @can('view settings')
            <a class="nav-link " href="{{ route('setting.add') }}">
              <i class="material-icons">note_add</i>
              <span>Add Setting</span>
            </a>
          @endcan
        </div>
        <div class="card-body p-0 pb-3 text-center">
          <table class="table mb-0">
            <thead class="bg-light">
              <tr>
                <th scope="col" class="border-0">#</th>
                <th scope="col" class="border-0">Config Key</th>
                <th scope="col" class="border-0">Config value</th> 
                <th scope="col" class="border-0">Action</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($settings as  $setting)
              <tr>
                  <td>{{ $setting->id }}</td>
                  <td>{{ $setting->config_key }}</td>
                  <td>{{ $setting->config_value }}</td>
                  <td>
                    @can('edit settings')
                      <a href="{{ route('setting.edit', ['id' =>$setting->id]) }}" class="mb-2 btn btn-info mr-2 ">Sửa</a>
                    @endcan
                    @can('delete settings')
                      <a href="" data-url="{{ route('setting.delete', ['id' =>$setting->id]) }}" class="mb-2 btn btn-danger mr-2 action_delete">Xóa</a>
                    @endcan
                  </td>
              </tr>
              @endforeach

             
     
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
 @endsection

