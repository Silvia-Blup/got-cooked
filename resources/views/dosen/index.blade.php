@extends('dashboard')

@section('content')

<div class="container mt-4">
    <a href="{{ route('dosen.create') }}" class="btn btn-primary mb-3">Create</a>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>NIP</th>
                    <th>NIDN</th>
                    <th>Pendidikan Terakhir</th>
                    <th>Jurusan</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Tanggal Dibuat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($dosen as $d)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $d->Fullname }}</td>
                    <td>{{ $d->NIP }}</td>
                    <td>{{ $d->NIDN }}</td>
                    <td>{{ $d->Pendidikan_Terakhir }}</td>
                    <td>{{ $d->jurusan->nama ?? '-' }}</td>
                    <td>{{ $d->Tempat_Lahir }}</td>
                    <td>{{ $d->Tanggal_Lahir }}</td>
                    <td>{{ $d->Alamat }}</td>
                    <td>{{ $d->created_at->format('Y-m-d H:i:s') }}</td>
                    <td>
                        <a href="{{ route('dosen.edit', $d->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('dosen.delete', $d->id) }}" method="post" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-secondary btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="11" class="text-center">No data available.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection