@extends('dashboard')

@section('content')

<div class="container mt-4">
    <a href="{{ route('jurusan.create') }}" class="btn btn-primary mb-3">Create</a>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>No</th>
                    <th>Kode Jurusan</th>
                    <th>Nama Jurusan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($jurusan as $j)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $j->Kode_Jurusan }}</td>
                    <td>{{ $j->Nama_Jurusan }}</td>
                    <td>
                        <a href="{{ route('jurusan.edit', $j->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('jurusan.delete', $j->id) }}" method="post" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-secondary btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center">No data available.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection