@extends('adminLayout')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>DataTables</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">DataTables</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">DataTable with default features</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <h3>One to one</h3>
        <table>
          <thead>
           <tr>
            <th>username</th>
            <th>email</th>
            <th>nama</th>
           </tr>
          <tbody>
           @foreach($user as $value)
           <tr>
            <td>{{$value->username}}</td>
            <td>{{$value->email}}</td>
            <td>{{$value->profile->name}}</td>
           </tr>
           @endforeach
          <tbody>
          </thead>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
  </section>
</div>
@endsection
@push('custom-script')
<!-- DataTables -->
<script src=" {!! asset('assets/plugins/datatables/jquery.dataTables.min.js') !!}"></script>
<script src=" {!! asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') !!}"></script>
<script src=" {!! asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') !!}"></script>
<script src=" {!! asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') !!}"></script>
<script type="text/javascript">
  $(function(){
    // initiate DataTable plugins
    $("#example1").DataTable();
  });
</script>
@endpush
