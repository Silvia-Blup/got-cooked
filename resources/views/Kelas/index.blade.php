@extends('dashboard')

@section('content')

<div class="container mt-4">
    <a href="{{ route('Kelas.create') }}" class="btn btn-primary mb-3">Create</a>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-light">
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
                @forelse ($kelas as $ks)
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
                            <button type="submit" class="btn btn-outline-secondary btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="12" class="text-center">No data available.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection