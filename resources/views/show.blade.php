@extends('adminLayout')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Lihat Pertanyaan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Lihat Pertanyaan</li>
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
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Judul : {{ $pertanyaan->judul }}</h3>
            </div>
            <div class="card-body">
              {!! $pertanyaan->isi !!}
            </div>
            <div class="card-footer">
              <p>
                Oleh : {{ $pertanyaan->profil_id }}
                <small>Tanggal {{ $pertanyaan->tanggal_dibuat }}</small>
              </p>
              <a href="/pertanyaan" class="btn btn-secondary">Kembali</a>
            </div>
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
