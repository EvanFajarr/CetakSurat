
@extends('template.extuser')
@section('konten')



<form action='{{ url('/') }}'  method='post'  enctype="multipart/form-data">
    @include('template.pesan')
    @csrf

        <div class="mb-3 row">
            <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name='tanggal' value="{{Session::get('tanggal')}}" id="tanggal">
            </div>
        </div>

     
        <div class="mb-3 row">
            <label for="tujuan_surat" class="col-sm-2 col-form-label"> Tujuan surat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='tujuan_surat' value="{{Session::get('tujuan_surat')}}" id="tujuan_surat">
            </div>
        </div>
    

        <div class="mb-3 row">
            <label for="nama_siswa" class="col-sm-2 col-form-label">Nama siswa</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama_siswa' value="{{Session::get('nama_siswa')}}" id="nama_siswa">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='kelas' value="{{Session::get('kelas')}}" id="kelas">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="alamat_siswa" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='alamat_siswa' value="{{Session::get('alamat_siswa')}}" id="alamat_siswa">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="penulis_surat" class="col-sm-2 col-form-label">penulis_surat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='penulis_surat' value="{{Session::get('penulis_surat')}}" id="penulis_surat">
            </div>
        </div>

        <div class="mb-3 row">
          <label for="isi" class="form-label">Isi</label>
          <textarea class="form-control  summernote" name="isi"  value="{{Session::get('isi')}}" id="isi"></textarea>
      </div>

  
    <div class="mb-3 row">
        <label for="tahun" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
    </div>
</div>

</form>
@endsection