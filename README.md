# TP4DPBO2023C2
TP4 2100506

## Janji
Saya Destira Lestari Saraswati dengan NIM 2100506 mengerjakan LP 12 Praktikum DPBO dalam mata kuliah Desain Pemrograman Berorientasi Objek untuk keberkahan-Nya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

## Deskripsi Program
Program pengelola data anggota dan asal negaranya melalui antarmuka pengguna grafis (GUI). Program ini menggunakan arsitektur MVC (Model-View-Controller) untuk memisahkan logika aplikasi, tampilan, dan pengelolaan data. Struktur direktori program sebagai berikut:

- `asset` berisi berkas-berkas gambar, seperti `logo.png`.
- `controllers` berisi pengontrol aplikasi, seperti `MemberController.php` dan `NegaraController.php`.
- `models` berisi kelas-kelas model yang mengakses dan memanipulasi data, seperti `DBClass.php`, `MemberClass.php`, `NegaraClass.php`, dan `TemplateClass.php`.
- `templates` berisi berkas-berkas template HTML untuk tampilan aplikasi, seperti `index.html`, `indexAdd.html`, `IndexUpdate.html`, `negara.html`, `negaraAdd.html`, dan `negaraUpdate.html`.
- `views` berisi kelas-kelas tampilan yang mengatur tampilan aplikasi, seperti `MembersView.php` dan `NegaraView.php`.
- `conf.php` berisi konfigurasi database.
- `index.php` berfungsi sebagai file utama yang menginisialisasi aplikasi dan list members.
- `negara.php` berfungsi sebagai file untuk mengelola data negara.

## Video preview program


## Alur Menjalankan Program

1. Pastikan Anda telah mengatur konfigurasi database di file `conf.php` sesuai dengan pengaturan lokal Anda.
2. Buka file `index.php` di browser web Anda.
3. Anda akan melihat tampilan antarmuka pengguna untuk list data anggota.
4. Anda dapat menambahkan, mengedit, atau menghapus anggota menggunakan formulir yang tersedia.
5. Untuk mengelola data negara, buka file `negara.php` di browser web Anda.
6. Anda akan melihat antarmuka pengguna untuk mengelola data negara.
7. Anda dapat menambahkan, mengedit, atau menghapus negara menggunakan formulir yang tersedia.

## Isi Program
Program ini memungkinkan Anda untuk:
- Menambahkan, mengedit, dan menghapus anggota.
- Menambahkan, mengedit, dan menghapus negara.
- Mengelola keterkaitan antara anggota dan negara.

## Batasan Program
Program ini memiliki beberapa batasan sebagai berikut:
- Program ini menggunakan PHP sebagai bahasa pemrograman utama.
- Program ini mengharuskan konfigurasi database yang benar sebelum dapat berfungsi dengan baik.
- Program ini tidak memiliki fitur otentikasi pengguna, sehingga siapa pun yang mengaksesnya dapat mengelola data anggota dan negara.
- Program ini tidak memiliki validasi input secara lengkap (hanya validasi sederhana), sehingga perlu diperhatikan saat mengisi formulir.

## Design Database dan Penjelasan Singkat

Database program ini terdiri dari dua tabel utama: `members` dan `negara`. Berikut adalah penjelasan singkat tentang kedua tabel tersebut:
![dbtp4](https://github.com/desttari/TP4DPBO2023C2/assets/100773981/850cd87b-c33f-4fb5-a088-f9fe33ef00af)

1. Tabel `members`:
   - Kolom `id` adalah kolom unik yang digunakan sebagai ID anggota.
   - Kolom `name` menyimpan nama anggota.
   - Kolom `email` menyimpan alamat email anggota.
   - Kolom `phone` menyimpan nomor telepon anggota.
   - Kolom `id_negara` adalah kunci asing yang menghubungkan anggota dengan negara asalnya.
   - Kolom `join_date` menyimpan tanggal bergabungnya anggota (opsional).

2. Tabel `negara`:
   - Kolom `id` adalah kolom unik yang digunakan sebagai ID negara.
   - Kolom `name` menyimpan nama negara.

Perlu diperhatikan bahwa jika ada negara yang dihapus tetapi masih terdapat data anggota yang terhubung ke negara tersebut, negara tersebut tidak dapat dihapus. Ini membantu menjaga agar data anggota tidak hilang.

## Screenshot program
