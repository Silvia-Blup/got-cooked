@extends('dashboard')

@section('content')

<div class="container">
  <div class="row align-items-start">
    <div class="col left">
      <b>{{ $krs->mahasiswa->Fullname }}</b><br/>
      {{ $krs->mahasiswa->NIM }}<br/>
      {{ $krs->mahasiswa->NIDN }}<br/>
    </div>
    <div class="col">
      Tahun Ajaran {{ $krs->tahun_ajaran }}<br/>
      Semester {{ $krs->semester }}<br/>
      Total SKS {{ $krs->total_sks }}<br/>
    </div>
  </div>
</div>

<table class="table table-striped">
    <thead>
        <th>No</th>
        <th>Kode Mata Kuliah</th>
        <th>Nama Mata Kuliah</th>
        <th>Nama Dosen</th>
        <th>Jadwal</th>
        <th>Ruangan</th>
        <th>Status</th>
    </thead>
    @foreach ($krs->detail as $k)
    <tr>
        <td>{{$k->id}}</td>
        <td>{{$k->kelas->matakuliah->Kode_Mata_Kuliah}}</td>
        <td>{{$k->kelas->matakuliah->Nama_Mata_Kuliah}}</td>
        <td>{{$k->kelas->dosen->Fullname}}</td>
        <td>{{$k->kelas->hari}}, {{ $k->kelas->jam }}</td>
        <td>{{$k->kelas->ruang_kelas}}</td>
        <td>{{$k->status}}</td>
    </tr>
    @endforeach
</table>

@endsection