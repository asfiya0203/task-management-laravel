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
    <form action="{{ route('jadwal.store') }}" method="POST">
        @csrf
        <p>
            Deadline; 
            <input name="deadline" type="date" required>
        </p>
        <p>
            Mata Kuliah;
            <input name="mata_kuliah" type="text" required>
        </p>
        <p>
            Judul Tugas;
            <input name="judul_tugas" type="text" required>
        </p>
        <p>
            Tipe Tugas;
            <input name="tipe_tugas" type="radio" value="mandiri">
            <label for="mandiri">Mandiri</label>
            <input name="tipe_tugas" type="radio" value="kelompok">
            <label for="kelompok">Kelompok</label>
        </p>

        <input type="submit" value="simpan" class="tombol">
        <input type="reset" value="hapus" class="tombol">
    </form>
</body>
</html>