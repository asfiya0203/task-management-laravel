<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List Tugas</title>
</head>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<body>
    <div class="judul">
        <h1>Campus Task Manager</h1> 
   </div>
   
   <p id="text1">Apa tugas anda hari ini?</p>

   <button class="tombol">
        <a href="{{route('jadwal.create')}}">Tambah List</a>
   </button>

   <div class="isi">
   <table border="1" withd="5">
    <thead>
        <tr>
            <th>Deadline</th>
            <th>Mata Kuliah</th>
            <th>Judul Tugas</th>
            <th>Tipe Tugas</th>
            <th>Edit/Hapus</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($alldata as $key => $r)
        <tr>
            <td>{{ $r->deadline }}</td>
            <td>{{ $r->mata_kuliah }}</td>
            <td>{{ $r->judul_tugas }}</td>
            <td>{{ $r->tipe_tugas }}</td>
            <td>
                <form action="{{ route('jadwal.destroy', $r->id) }}" method="POST">
                    <a href="{{ route('jadwal.edit', $r->id) }}" class="tombol">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="tombol">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
   </table>
   </div>
</body>
</html>