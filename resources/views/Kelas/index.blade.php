@extends('dashboard')

@section('content')

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
<body>
<a href="{{ route('Kelas.create') }}">
    <input type="button" value="Create">
</a>
<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Kelas</th>
            <th>Kode Mata Kuliah</th>
            <th>Kode Dosen</th>
            <th>Hari</th>
            <th>Jam</th>
            <th>Tahun Ajaran</th>
            <th>Ruang Kelas</th>
            <th>Jumlah Max</th>
            <th>Jumlah Mahasiswa</th>
            <th>Semester</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($kelas as $ks)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $ks->kode_kelas }}</td>
        <td>{{ $ks->kode_mata_kuliah }}</td>
        <td>{{ $ks->kode_dosen }}</td>
        <td>{{ $ks->hari }}</td>
        <td>{{ $ks->jam }}</td>
        <td>{{ $ks->tahun_ajaran }}</td>
        <td>{{ $ks->ruang_kelas }}</td>
        <td>{{ $ks->jumlah_max }}</td>
        <td>{{ $ks->jumlah_mahasiswa }}</td>
        <td>{{ $ks->semester }}</td>
        <td>
            <form action="{{ route('Kelas.destroy', $ks->id) }}" method="post" style="display:inline;">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete" onclick="return confirm('Are you sure?')">
            </form>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
@endsection