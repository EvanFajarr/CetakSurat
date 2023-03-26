@extends('template.template')

@section('konten')

@include('template.pesan')


<div class="container-xxl py-5 bg-primary hero-header mb-5">
  <div class="container my-5 py-5 px-lg-5">
      <div class="row g-5 py-5">
          <div class="col-lg-6 text-center text-lg-start">
              <h1 class="text-white mb-4 animated zoomIn">Tulis Suratmu</h1>
              <p class="text-white pb-3 animated zoomIn"> Buat surat izin dengan cepat dan mudah Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, culpa!</p>
              <a href="/create" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Sekolah</a>
              <a href="/suratizin" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Instansi Perkantoran</a>
          </div>
          <div class="col-lg-6 text-center text-lg-start">
              <img class="img-fluid" src="img/hero.png" alt="">
          </div>
      </div>
  </div>
</div>
</div>


  
 
@endsection