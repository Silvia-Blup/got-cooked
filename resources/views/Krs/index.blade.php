<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Krs</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Daftar Tabel Krs</h2>
        <a href="{{ route('Krs.create') }}" class="btn btn-primary">Tambah Krs Baru</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Kode Mahasiswa</th>
                <th>Tahun Ajaran</th>
                <th>Semester</th>
                <th>Status</th>
                <th>Total SKS</th>
            </tr>
        </thead>
        <tbody>
            @forelse($KrsData as $Krs)
                <tr>
                    <td>{{ $Krs->id }}</td>
                    <td>{{ $Krs->kode_mahasiswa }}</td>
                    <td>{{ $Krs->tahun_ajaran }}</td>
                    <td><span class="badge bg-secondary">{{ ucfirst($Krs->semester) }}</span></td>
                    <td>
                        <span class="badge 
                            {{ $Krs->status == 'approved' ? 'bg-success' : '' }}
                            {{ $Krs->status == 'pending' ? 'bg-warning text-dark' : '' }}
                            {{ $Krs->status == 'partial' ? 'bg-info text-dark' : '' }}
                            {{ $Krs->status == 'declined' ? 'bg-danger' : '' }}
                        ">
                            {{ ucfirst($Krs->status) }}
                        </span>
                    </td>
                    <td>{{ $Krs->total_sks }} SKS</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Belum ada data Krs.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>