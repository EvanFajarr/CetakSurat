<!DOCTYPE html>
<head>
    <title>Surat Izin</title>
    <meta charset="utf-8">
    <style>
        #judul{
            text-align:center;
        }

        #halaman{
            width: auto; 
            height: 100%; 
            position: center; 
            border: 1px solid; 
            padding-top: 30px; 
            padding-left: 30px; 
            padding-right: 30px; 
            padding-bottom: 80px;
            width:100%;
        }
        P {
            width:50%;
        }

    </style>

</head>

<body>
    @extends('template.template')

@section('konten')


    @foreach ($izinkantor as $item)
        
   
    <div id=halaman>
    
        <h3 id=judul>Surat Izin Tidak Masuk Kerja</h3>

        <p>Saya yang bertanda tangan di bawah ini :</p>
      
        <table>
            <tr>
                <td style="width: 30%;">Nama</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $item->nama }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Jabatan</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $item->jabatan }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Nama Kantor</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $item->nama_kantor }}</td>
            </tr>
            <tr>
                <td style="width: 30%; vertical-align: top;">Alamat kantor</td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;">{{ $item->alamat_kantor }}</td>
            </tr>
            {{-- <tr>
                <td style="width: 30%;">Pekerjaan</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">Guru</td>
            </tr> --}}
        </table>

        <p style="width:50%;">{!! $item->isi !!}</p>

        <div style="width: 50%; text-align: left; float: right;">{{ $item->tanggal }}</div><br>
        <div style="width: 50%; text-align: left; float: right;">Yang bertanda tangan,</div><br><br><br><br><br>
        <div style="width: 50%; text-align: left; float: right;">{{ $item->nama }}</div>

    </div>
  
     @endforeach
    
    <script>
        window.print();
      </script>

      @endsection
</body>
{{$izinkantor->links()}}  

</html>
