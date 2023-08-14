# Sistem Perpustakaan

Sistem Perpustakaan adalah sebuah proyek yang bertujuan untuk mengelola informasi terkait koleksi buku, anggota perpustakaan, peminjaman, dan lainnya dalam sebuah perpustakaan. Proyek ini menggunakan basis data my sql untuk menyimpan dan mengelola data-data tersebut.

## Fitur

- Manajemen buku: Menambah koleksi perpustakaan.
- Manajemen anggota: Pendaftaran,  dan penghapusan anggota perpustakaan.
- Peminjaman dan pengembalian: Proses peminjaman dan pengembalian buku oleh anggota.
- Laporan: Menampilkan laporan peminjaman, buku yang sedang dipinjam, dan sebagainya.

## Cara Menggunakan

1. Persiapan Lingkungan:
-Pastikan mysql telah terpasang di sistem Anda.
-Pastikan web server apache dan PHP telah terpasang.
2. Unduh Proyek:
- Clone repositori ini: git clone [URL repositori]
- Atau unduh sebagai ZIP dan ekstrak.
3. Konfigurasi Basis Data:
- Buat basis data baru dengan nama yang Anda inginkan.
- Salin file .env.example menjadi .env dan konfigurasikan pengaturan basis data Anda (host, nama basis data, pengguna, kata sandi, dll.).
4. Impor Skema:
- Jalankan migrasi untuk membuat tabel dalam basis data: php artisan migrate
5. Jalankan Aplikasi:
- Gunakan web server Anda untuk menjalankan proyek ini (misalnya, php artisan serve).







