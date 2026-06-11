<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Krs</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4>Form Tambah Krs</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('Krs.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Kode Mahasiswa</label>
                    <input type="number" name="kode_mahasiswa" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tahun Ajaran</label>
                    <input type="text" name="tahun_ajaran" class="form-control" placeholder="Contoh: 2025/2026" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Semester</label>
                    <select name="semester" class="form-select" required>
                        <option value="ganjil">Ganjil</option>
                        <option value="genap">Genap</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-select" required>
                        <option value="pending">Pending</option>
                        <option value="approved">Approved</option>
                        <option value="partial">Partial</option>
                        <option value="declined">Declined</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Total SKS</label>
                    <input type="number" name="total_sks" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-success">Simpan Data</button>
                <a href="{{ route('Krs.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>

</body>
</html>