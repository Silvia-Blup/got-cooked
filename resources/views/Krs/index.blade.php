@extends('dashboard')

@section('content')
    <a href="{{ action([App\Http\Controllers\KRSController::class, 'create']) }}">
        <input type="button" value="Create">
    </a>
    <table class="table table-striped">
        <thead>
            <th>No</th>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Tahun Ajaran</th>
            <th>Semester</th>
            <th>Total SKS</th>
            <th>Aksi</th>
        </thead>
        @foreach ($krs as $k)
        <tr>
            <td>{{$k->id}}</td>
            <td>{{$k->mahasiswa->NIM}}</td>
            <td>{{$k->mahasiswa->Fullname}}</td>
            <td>{{$k->tahun_ajaran}}</td>
            <td>{{$k->semester}}</td>
            <td>{{$k->total_sks}}</td>
            <td>
                <a href="{{ action([App\Http\Controllers\KRSController::class, 'show'], $k->id)}}" target="_blank" clas="button">
                  <input type="button" value="View">
                </a>
                <form action="{{ action([App\Http\Controllers\KRSController::class, 'destroy'], $k->id)}}"  method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$k->id}}">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
@endsection