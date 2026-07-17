@extends('dashboard')

@section('content')

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4>Form Tambah KRS</h4>
        </div>
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('krs.store') }}" method="post">
                @csrf
                <table class="table table-light table-striped">
                    <tr>
                        <td>Mahasiswa</td>
                        <td>:</td>
                        <td><select name="kode_mahasiswa" class="form-control">
                            <option value="">-- Pilih Mahasiswa --</option>
                            @foreach ($mahasiswa as $m)
                                <option value="{{ $m->id }}">{{ $m->Fullname ?? $m->nama }}</option>
                            @endforeach
                        </select></td>
                    </tr>
                    <tr>
                        <td>Tahun Ajaran</td>
                        <td>:</td>
                        <td><input type="text" name="tahun_ajaran" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Semester</td>
                        <td>:</td>
                        <td><select name="semester" class="form-control">
                            <option value="">-- Pilih Semester --</option>
                            <option value="ganjil">Ganjil</option>
                            <option value="genap">Genap</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td><select name="status" class="form-control">
                            <option value="pending">Pending</option>
                            <option value="approved">Approved</option>
                            <option value="partial">Partial</option>
                            <option value="declined">Declined</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td>Total SKS</td>
                        <td>:</td>
                        <td><input type="number" name="total_sks" class="form-control" value="0"></td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <input type="submit" value="Add" class="form-control"><br>
                            <input type="reset" value="Clear" class="form-control">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
@endsection