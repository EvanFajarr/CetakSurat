@extends('template.template')

@section('konten')

@include('template.pesan')
<section class="py-5 text-center container">
  <div style="margin-top:5rem;"class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">
      <h1 class="fw-light">Tulis Suratmu</h1>
      <p class="lead text-dark "> Buat surat izin dengan cepat dan mudah </p>
      <a href='/create' class="btn btn-outline-primary btn-lg">sekolah</a>
      <a href='/suratizin' class="btn btn-outline-primary btn-lg">kantor</a>
     </p>
    </div>
  </div>
</section>


{{-- <div class="row">
  @foreach ($suratizin as $p)
  <div class="col-sm-4">
      <div class="card shadow-lg p-3 mb-5 bg-body rounded">
        <p class="text-muted"> {{ $p->tanggal }}</p>
        <div class="card-body">
         <p class="card-text">  {!! $p->isi !!}</p>

        <a href="cetak/{{ $p['id'] }}" class="btn btn-outline-primary">Selengkapnya</a>
     <a href="/cetak/{{ $p['id'] }}" class="btn btn-outline-primary btn-sm"><i class="bi bi-chat-right-text">   print</i></a>
        <a href="/{{ $p['id'] }}/cetak" class="btn btn-outline-primary btn-sm"><i class="bi bi-chat-right-text">   Tanggapan</i></a>
    
      </div> 

        <div class="card-footer">
       <small class="text-muted"> {{ $p->lokasi }} ,{{ $p->detail_lokasi }}</small>
        </div>
      </div>

    </div>
    @endforeach --}}

  
 
@endsection