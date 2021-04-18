@extends('users.layout')

@section('content')
<body>
    <style type="text/css">
        table tr td,
        table tr th{
            font-size: 9pt;
        }
    </style>
      <h5 align='center'>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG </h3>
      <h6 align='center'>KARTU HASIL STUDI (KHS)</h6>

    <table class="table" style="border: none;">
            <tr><td><b>NAMA:</b>&nbsp;{{$mahasiswa->nama}}</td></tr>
            <tr><td><b>NIM:</b>&nbsp;{{$mahasiswa->nim}}</td></tr>
            <tr><td><b>KELAS:</b>&nbsp;{{$mahasiswa->kelas->nama_kelas}}</td></tr>
    </table>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Mata Kuliah</th>
                <th>SKS</th>
                <th>Semester</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($mahasiswa->matakuliah as $nl)
                <tr>
                    <td>{{$nl->nama_matkul}}</td>
                    <td>{{$nl->sks}}</td>
                    <td>{{$nl->semester}}</td>
                    <td>{{$nl->pivot->nilai}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
@endsection
