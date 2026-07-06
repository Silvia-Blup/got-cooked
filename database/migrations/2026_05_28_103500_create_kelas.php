<form action="{{ route('Kelas.store') }}" method="post">
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
        <td>
            <select name="hari">
                <option value="senin">Senin</option>
                <option value="selasa">Selasa</option>
                <option value="rabu">Rabu</option>
                <option value="kamis">Kamis</option>
                <option value="jumat">Jumat</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Jam</td>
        <td>:</td>
        <td>
            <select name="jam">
                <option value="08:00 - 09:40">08:00 - 09:40</option>
                <option value="09:50 - 11:30">09:50 - 11:30</option>
                <option value="12:30 - 14:10">12:30 - 14:10</option>
                <option value="17:00 - 18:40">17:00 - 18:40</option>
                <option value="19:00 - 20:40">19:00 - 20:40</option>
            </select>
        </td>
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
        <td><input type="number" name="jumlah_max"></td>
    </tr>
    <tr>
        <td>Jumlah Mahasiswa</td>
        <td>:</td>
        <td><input type="number" name="jumlah_mahasiswa" value="0"></td>
    </tr>
    <tr>
        <td>Semester</td>
        <td>:</td>
        <td>
            <select name="semester">
                <option value="ganjil">Ganjil</option>
                <option value="genap">Genap</option>
            </select>
        </td>
    </tr>
</table>

<button type="submit">Add</button>
<button type="reset">Clear</button>
</form>