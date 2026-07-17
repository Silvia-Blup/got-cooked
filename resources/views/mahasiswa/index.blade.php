@extends('dashboard')

@section('content')

<div class="container mt-4">
    <a class="btn btn-primary mb-3" href="{{ route('mahasiswa.add') }}" role="button">Create</a>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>NIM</th>
                    <th>NISN</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Tanggal Dibuat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($mahasiswa as $m)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $m->Fullname }}</td>
                    <td>{{ $m->NIM }}</td>
                    <td>{{ $m->NIDN }}</td>
                    <td>{{ $m->Tempat_Lahir }}</td>
                    <td>{{ $m->Tanggal_Lahir }}</td>
                    <td>{{ $m->Alamat }}</td>
                    <td>{{ $m->created_at }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="{{ route('mahasiswa.edit', $m->id) }}" role="button">Edit</a>
                        
                        <form action="{{ route('mahasiswa.delete', $m->id) }}" method="post" style="display:inline;">
                            @csrf
                            @method('DELETE') 
                            <button type="submit" class="btn btn-outline-secondary btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="9" class="text-center">No data available.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection