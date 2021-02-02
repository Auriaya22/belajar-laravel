@extends('adminLayout')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah Pertanyaan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Tambah Pertanyaan</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card card-info">
            <div class="card-header">
              <h3>Form Tambah Pertanyaan</h3>
            </div>
            <form role="form" action="/pertanyaan" method="post">
              <div class="card-body">
                  @csrf
                  <!-- text input -->
                  <div class="form-group">
                    <label>Judul Pertanyaan</label>
                    <input type="text" class="form-control" name="judul" placeholder="judul pertanyaan">
                    @error('judul')
                      <div class="alert alert-danger">
                        {{ $message }}
                      </div>
                  @enderror
                  </div>
                  <div class="form-group mb-3">
                    <label>Isi Pertanyaan</label>
                    <textarea class="textarea" placeholder="Place some text here" name="isi"
                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    @error('isi')
                      <div class="alert alert-danger">
                          {{ $message }}
                      </div>
                    @enderror
                  </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
@push('custom-script')
<!-- Summernote -->
<script src="{!! asset('assets/plugins/summernote/summernote-bs4.min.js') !!}"></script>
<script>
  $(function () {
    // Summernote
    $('textarea').summernote()
  })
</script>
@endpush
