<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah list tugas</title>
</head>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<body>
    <h3>Tambahkan list tugas anda di bawah ini; </h3>
 
    <div class="form">
    <form action="{{ route('jadwal.update', $jadwal) }}" method="POST">
    @csrf
    @method('PUT')
        <p>
            Deadline; 
            <input name="deadline" type="date" value="{{$jadwal->deadline}}"required>
        </p>
        <p>
            Mata Kuliah;
            <input name="mata_kuliah" type="text"  value="{{$jadwal->mata_kuliah}}" required>
        </p>
        <p>
            Judul Tugas;
            <input name="judul_tugas" type="text" value="{{$jadwal->judul_tugas}}" required>
        </p>
        <p>
            Tipe Tugas;
            <input type="radio" name="tipe_tugas" value="mandiri"
                {{ $jadwal->tipe_tugas == 'mandiri' ? 'checked' : '' }}>
            <label>Mandiri</label>

            <input type="radio" name="tipe_tugas" value="kelompok"
                {{ $jadwal->tipe_tugas == 'kelompok' ? 'checked' : '' }}>
            <label>Kelompok</label>
        </p>

        <input type="submit" value="simpan" class="tombol">
        <input type="reset" value="hapus" class="tombol">
    </form>
</body>
</html>