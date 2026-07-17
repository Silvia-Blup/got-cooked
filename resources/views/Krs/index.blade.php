@extends('dashboard')

@section('content')

<div class="container mt-4">
    <a href="{{ action([App\Http\Controllers\KRSController::class, 'create']) }}" class="btn btn-primary mb-3">Create</a>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Tahun Ajaran</th>
                    <th>Semester</th>
                    <th>Total SKS</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($krs as $k)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $k->mahasiswa->NIM }}</td>
                    <td>{{ $k->mahasiswa->Fullname }}</td>
                    <td>{{ $k->tahun_ajaran }}</td>
                    <td>{{ $k->semester }}</td>
                    <td>{{ $k->total_sks }}</td>
                    <td>
                        <a href="{{ action([App\Http\Controllers\KRSController::class, 'show'], $k->id) }}" target="_blank" class="btn btn-primary btn-sm">View</a>
                        
                        <form action="{{ action([App\Http\Controllers\KRSController::class, 'destroy'], $k->id) }}" method="post" style="display:inline;">
                            @csrf
                            <input type="hidden" name="id" value="{{ $k->id }}">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-outline-secondary btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center">No data available.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection