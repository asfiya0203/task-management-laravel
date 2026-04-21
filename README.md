# CRUD Management Task

Proyek ini adalah aplikasi web berbasis **Laravel** yang dibangun untuk menampilkan manajemen tugas. Aplikasi ini dirancang untuk menyelesaikan permasalah pencatatan tugas yang sering tidak termanagemen dengan baik, aplikasi ini akan menampilkan list tugas sesuai deadline.

Dibangun menggunakan Laravel versi terbaru dengan database MySQL/PostgreSQL, aplikasi ini menyediakan antarmuka yang intuitif dan performa tinggi untuk [use case utama].

## Fitur

- Create: Menambah list tugas
- Read: Menampilkan list tugas
- Update: Mengedit list tugas
- Delete: Menghapus list tugas

## Teknologi yang Digunakan

| Teknologi | Versi |
|-----------|-------|
| PHP | >= 8.3 |
| Laravel | >= 12.x |
| MySQL | >= 8.2 |
| Composer | >= 2.9 |
| Node.js | >= 22.2 |

## Cara Membuat Proyek Laravel

### 1. Install Laravel via composer

```bash
composer create-project laravel/laravel^12 nama-projec
```

### 2. Buat Database di MySQL

Masuk ke MySQL dan buat database baru:

```sql
mysql -u root -p

CREATE DATABASE jadwal;
EXIT;
```

### 3. Konfigurasi File `.env`

Buka file `.env` di root proyek dan sesuaikan pengaturan database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=jadwal
DB_USERNAME=root
DB_PASSWORD=password_anda
```

### 4. Jalankan Migrasi Database

Buat semua tabel yang diperlukan dengan perintah:

```bash
php artisan migrate
```

### 5. jalankan di terminal:

```bash
php artisan make:model jadwal -mc --resource
```

### 6. buka file `database\migrations\jadwals` tambahkan:

```bash
            $table->id();      
            $table->date('deadline');
            $table->string('mata_kuliah');
            $table->string('judul_tugas');
            $table->enum('tipe_tugas',['mandiri','kelompok']);
            $table->timestamps();
```

dan jalankan di terminal:

```bash
php artisan migrate
```

### 7. buka file `routes\web` tambahkan:

```bash
Route::resource ('jadwal',JadwalController::class);
```

lalu cek apakah berhasil dengan menjalankan di terminal:

```bash
php artisan migrate route:list
```

### 8. buka file `app\models\jadwal` tambahkan:

```bash
protected $guarded = [];
```


## Cara menjalankan projek Laravel

jalankan:

```bash
php artisan serve
```

Aplikasi akan berjalan di: *http://127.0.0.1:8000/jadwal*
