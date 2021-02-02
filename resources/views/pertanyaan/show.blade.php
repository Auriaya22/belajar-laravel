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
              <div class="row">
                <div class="col-md-6">
                  <h3 class="card-title">Judul : {{ $pertanyaan->judul }}<br></h3><br>
                  <h5 class="card-title"><small>Oleh : {{ $pertanyaan->author->name}}</small></h5>
                </div>
                <div class="col-md-6">
                  <div class="float-right">
                    Tanggal posting : {{ $pertanyaan->created_at }}
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
              {!! $pertanyaan->isi !!}
            </div>
            <div class="card-footer">
              <div class="row">
                <div class="col-md-12">
                  Tags :
                  @forelse($pertanyaan->tags as $tag)
                    <span class="badge badge-secondary">{{ $tag->nama_tag }}</span>
                  @empty
                    <p> No Tags</p>
                  @endforelse
                </div>
              </div>
              <div class="row mt-1">
                <div class="col-md-12 d-flex justify-content-start">
                  <a href="/pertanyaan" class="btn btn-secondary mr-1">Kembali</a>
                  <a href="/pertanyaan/{{ $pertanyaan->id }}/edit" class="btn btn-warning mr-1">Edit</a>
                  <form action="/pertanyaan/{{ $pertanyaan->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                  </form>
                </div>
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
