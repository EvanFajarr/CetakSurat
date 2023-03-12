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
            position: absolute; 
            border: 1px solid; 
            padding-top: 30px; 
            padding-left: 30px; 
            padding-right: 30px; 
            padding-bottom: 80px;
            width:100%;
        }

       .isi{
        width:20%;
        height:20%;
        display: block;
       }

    </style>

</head>

<body>
    @extends('template.template')

@section('konten')


    @foreach ($suratizin as $item)
        
   
    <div id=halaman>
    
        <h3 id=judul>{{ $item->tujuan_surat }}</h3>

        <p>Saya yang bertanda tangan di bawah ini :</p>
      
        <table>
            <tr>
                <td style="width: 30%;">Nama</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $item->nama_siswa }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Kelas</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $item->kelas }}</td>
            </tr>
            <tr>
                <td style="width: 30%; vertical-align: top;">Alamat</td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;">{{ $item->alamat_siswa }}</td>
            </tr>
            {{-- <tr>
                <td style="width: 30%;">Pekerjaan</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">Guru</td>
            </tr> --}}
        </table>


            {{-- <p class="isi text-center">{!! $item->isi !!}</p> --}}

 

                {!! $item->isi !!}
        



        <div style="width: 50%; text-align: left; float: right;">{{ $item->tanggal }}</div><br>
        <div style="width: 50%; text-align: left; float: right;">Yang bertanda tangan,</div><br><br><br><br><br>
        <div style="width: 50%; text-align: left; float: right;">{{ $item->pemulis_surat }}</div>

    </div>
  
     @endforeach
    
    <script>
        window.print();
      </script>

      @endsection
</body>
{{$suratizin->links()}}  

</html>
