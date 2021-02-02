@extends('adminLayout')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Home</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
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
              <h3 class="card-title">Daftar Pertanyaan</h3>
              <div class="card-tools">
                <a href="/pertanyaan/create" class="btn btn-tool"><i class="fas fa-plus"></i> Tambah Pertanyaan</a>
              </div>
            </div>
            <div class="card-body">
              @if(session('success'))
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  {{ session('success') }}
                </div>
              @endif
              <div class="row">
                @forelse($pertanyaan as $p)
                  <div class="col-md-3">
                    <div class="card card-info" style="height: 300px;">
                      <div class="card-header">
                        <h3 class="card-title">{{ $p->judul }}</h3>
                      </div>
                      <div class="card-body">
                        <p>{!! $p->isi !!}</p>
                      </div>
                      <div class="card-footer">
                        <div class="row">
                          <div class="col-md-12">
                            <p>
                              Oleh : {{ $p->profil_id }}
                              <small>Tanggal {{ $p->tanggal_dibuat }}</small>
                            </p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12 d-flex justify-content-around">
                            <a href="/pertanyaan/{{ $p->id }}" class="btn btn-info">Lihat</a>
                            <a href="/pertanyaan/{{ $p->id }}/edit" class="btn btn-secondary">Edit</a>
                            <form action="/pertanyaan/{{ $p->id }}" method="post">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                @empty
                  <div class="col-md-12">
                    <h3 class="text-center"> Data masih kosong :( </h3>
                  </div>
                @endforelse
              </div>
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
