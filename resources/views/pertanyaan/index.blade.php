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
              <div class="card-deck">
                @forelse($pertanyaan as $p)
                  <div class="card card-info">
                    <div class="card-header">
                      <h3 class="card-title">
                        Judul : {{ $p->judul }}<br>
                        <small>Oleh : {{ $p->author->name}}</small><br>
                        <small>Tanggal posting : {{ \Carbon\Carbon::parse($p->created_at)->format('d F Y') }}</small>
                      </h3>
                    </div>
                    <div class="card-body">
                      <p>{!! $p->isi !!}</p>
                    </div>
                    <div class="card-footer">
                      <div class="row">
                        <div class="col-md-12">
                          Tags :
                          @forelse($p->tags as $tag)
                            <span class="badge badge-secondary">{{ $tag->nama_tag }}</span>
                          @empty
                            <p> No Tags</p>
                          @endforelse
                        </div>
                      </div>
                      <div class="row mt-1">
                        <div class="col-md-6 d-flex justify-content-start">
                          <a href="/pertanyaan/{{ $p->id }}" class="btn btn-primary mr-1">Jawaban
                            <span class="badge badge-light ml-1">{{ count($p->jawabans) }}</span>
                          </a>
                        </div>
                        <div class="col-md-6 d-flex justify-content-end">
                          <a href="/pertanyaan/{{ $p->id }}" class="btn btn-info mr-1">Lihat</a>
                          <a href="/pertanyaan/{{ $p->id }}/edit" class="btn btn-warning mr-1">Edit</a>
                          <form action="/pertanyaan/{{ $p->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                @empty
                  <div class="row">
                    <div class="col-md-12">
                      <h3 class="text-center"> Data masih kosong :( </h3>
                    </div>
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
