CARA PAKAI (FRTOON, tema NIM 5 Galeri Buku: tabel books)
1. Folder ini sudah berisi project Laravel lengkap (termasuk vendor),
   jadi tidak perlu composer install. Cukup buka di Laragon / VS Code.
2. Bootstrap tanpa CDN sudah ada di public/assets/bootstrap/
   (v4.3.1).
3. Buat database kosong bernama frtoon di MySQL (Laragon), lalu:
   php artisan migrate
   php artisan db:seed
   php artisan serve  ->  buka http://127.0.0.1:8000
   (pengaturan database sudah ada di file .env)

LETAK GAMBAR
Taruh sampul di:  public/assets/images/
Nama file harus:  buku1.jpg, buku2.jpg, ... buku8.jpg
Isi folder ini sudah berisi sampul sementara, tinggal timpa dengan sampul asli
dengan nama yang sama. Kalau mau ganti nama file, ubah juga kolom 'image'
di database/seeders/BookSeeder.php, lalu jalankan:
   php artisan migrate:fresh --seed

URUTAN SAMPUL
buku1 Solo Leveling | buku2 Tower of God | buku3 The Beginning After the End
buku4 Omniscient Reader's Viewpoint | buku5 Noblesse | buku6 True Beauty
buku7 Mo Dao Zu Shi | buku8 Heaven Official's Blessing
