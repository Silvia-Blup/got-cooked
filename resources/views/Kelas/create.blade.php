<form action="{{ route('Kelas.save') }}" method="post">
@csrf
<table>
    <tr>
        <td>Kode Kelas</td>
        <td>:</td>
        <td><input type="text" name="kode_kelas"></td>
    </tr>
    <tr>
        <td>Kode Mata Kuliah</td>
        <td>:</td>
        <td><input type="text" name="kode_mata_kuliah"></td>
    </tr>
    <tr>
        <td>Kode Dosen</td>
        <td>:</td>
        <td><input type="text" name="kode_dosen"></td>
    </tr>
    <tr>
        <td>Hari</td>
        <td>:</td>
        <td><input type="text" name="hari"></td>
    </tr>
    <tr>
        <td>Jam</td>
        <td>:</td>
        <td><input type="text" name="jam"></td>   
    </tr>
    <tr>
        <td>Tahun Ajaran</td>
        <td>:</td>
        <td><input type="text" name="tahun_ajaran"></td>   
    </tr>
    <tr>
        <td>Ruang Kelas</td>
        <td>:</td>
        <td><input type="text" name="ruang_kelas"></td>   
    </tr>
    <tr>
        <td>Jumlah Max</td>
        <td>:</td>
        <td><input type="text" name="jumlah_max"></td>   
    </tr>
    <tr>
        <td>Jumlah Mahasiswa</td>
        <td>:</td>
        <td><input type="text" name="jumlah_mahasiswa"></td>   
    </tr>
    <tr>
        <td>Semester</td>
        <td>:</td>
        <td><input type="text" name="semester"></td>   
    </tr>
</table>

<button type="Submit"> Add </button>
<button type="reset"> Clear </button>
</form>
