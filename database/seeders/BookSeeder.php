<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        // Harga hanya contoh, silakan sesuaikan
        $data = [
            ['Solo Leveling', 'Chugong & DUBU', 'Action', 95000,
             'Sung Jinwoo adalah pemburu peringkat E yang dikenal paling lemah. Setelah terpilih sebagai "pemain" oleh sebuah sistem misterius, ia bisa menaikkan levelnya tanpa batas dan menjadi pemburu terkuat. Komik ini diadaptasi dari novel Korea dan sudah terbit dalam edisi cetak berwarna di Indonesia.', 'buku1'],
            ['Tower of God', 'SIU', 'Fantasy', 180000,
             'Bam menghabiskan hidupnya di bawah sebuah menara raksasa bersama sahabatnya, Rachel. Ketika Rachel masuk ke menara itu, Bam menyusul dan harus melewati ujian berbahaya di setiap lantai demi bertemu dengannya lagi. Edisi cetaknya diterbitkan oleh WEBTOON Unscrolled.', 'buku2'],
            ['The Beginning After the End', 'TurtleMe & Fuyuki23', 'Fantasy', 210000,
             'Seorang raja yang sangat kuat namun kesepian terlahir kembali di dunia lain yang penuh sihir dan monster. Dengan ingatan kehidupan lamanya, ia ingin menjalani hidup baru yang lebih bermakna. Edisi cetaknya diterbitkan oleh Yen Press.', 'buku3'],
            ['Omniscient Reader\'s Viewpoint', 'Sing Shong', 'Fantasy', 150000,
             'Kim Dokja adalah satu-satunya pembaca sebuah novel web yang nyaris tidak dikenal. Saat novel itu tamat, dunia nyata ikut berubah menjadi isi cerita, dan hanya ia yang tahu jalan cerita sampai akhir. Tersedia dalam edisi cetak novel maupun komik dari Ize Press.', 'buku4'],
            ['Noblesse', 'Son Jeho & Lee Kwangsu', 'Action', 160000,
             'Rai, seorang bangsawan vampir, terbangun setelah tertidur selama 820 tahun dan mendapati dunia sudah sangat berubah. Ia mencoba hidup biasa sebagai murid SMA bersama pelayannya yang setia, sambil menghadapi ancaman dari masa lalu.', 'buku5'],
            ['True Beauty', 'Yaongyi', 'Romance', 170000,
             'Lim Jugyeong dulu dirundung karena wajahnya. Setelah belajar merias wajah lewat video di internet, penampilannya berubah drastis dan ia menjadi populer di sekolah baru, sambil terus menyembunyikan wajah aslinya. Edisi cetaknya diterbitkan oleh WEBTOON Unscrolled.', 'buku6'],
            ['Grandmaster of Demonic Cultivation (Mo Dao Zu Shi)', 'Mo Xiang Tong Xiu & Luo Di Cheng Qiu', 'Xianxia', 200000,
             'Wei Wuxian, pendekar jalur iblis yang ditakuti, tewas dikeroyok oleh para klan besar. Ia lalu hidup kembali bertahun-tahun kemudian dan bertemu lagi dengan Lan Wangji, sambil mengungkap kebenaran di balik masa lalunya. Ini adaptasi manhua berwarna dari novel populer asal Tiongkok, dan sudah terbit cetak dari Seven Seas.', 'buku7'],
            ['Heaven Official\'s Blessing', 'Mo Xiang Tong Xiu & STARember', 'Xianxia', 330000,
             'Xie Lian, mantan putra mahkota yang tiga kali naik menjadi dewa lalu jatuh kembali ke dunia fana, bertemu seorang pria misterius bernama Hua Cheng. Hubungan mereka membawanya menyelami rahasia langit dan dunia hantu. Edisi cetak manhuanya diterbitkan oleh Inklore.', 'buku8'],
        ];

        foreach ($data as [$title, $author, $genre, $price, $summary, $image]) {
            Book::create([
                'title'   => $title,
                'author'  => $author,
                'genre'   => $genre,
                'price'   => $price,
                'image'   => "assets/images/$image.jpg",
                'summary' => $summary,
            ]);
        }
    }
}
