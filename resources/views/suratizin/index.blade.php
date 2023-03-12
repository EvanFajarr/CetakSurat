
@extends('template.extuser')
@section('konten')



<form action='{{ url('/suratizin') }}'  method='post'  enctype="multipart/form-data">
    @include('template.pesan')
    @csrf

        <div class="mb-3 row">
            <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name='tanggal' value="{{Session::get('tanggal')}}" id="tanggal">
            </div>
        </div>

     
        <div class="mb-3 row">
            <label for="nama_kantor" class="col-sm-2 col-form-label"> Nama Instansi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama_kantor' value="{{Session::get('nama_kantor')}}" id="nama_kantor">
            </div>
        </div>
    

        <div class="mb-3 row">
            <label for="alamat_kantor" class="col-sm-2 col-form-label">Alamat Instasi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='alamat_kantor' value="{{Session::get('alamat_kantor')}}" id="alamat_kantor">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Pemohon</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama' value="{{Session::get('nama')}}" id="nama">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='jabatan' value="{{Session::get('jabatan')}}" id="jabatan">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="alamat_pemohon" class="col-sm-2 col-form-label">Alamat Pemohon</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='alamat_pemohon' value="{{Session::get('alamat_pemohon')}}" id="alamat_pemohon">
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