<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('news')->delete();
        
        \DB::table('news')->insert(array (
            0 => 
            array (
                'id' => 1,
                'author_id' => 1,
                'slug' => '2021-05-04-presdir-yakin-membawa-mark-menembus-rekor-rp-1-triliun-di-2021',
                'news_date' => '2021-05-04',
                'status' => 1,
                'cover' => 'img/grapsaham.JPG',
                'title_id' => 'Presdir Yakin Membawa MARK Menembus Rekor Rp 1 Triliun di 2021',
                'title_en' => 'President Director is Sure to Bring MARK to a Record of IDR 1 Trillion in 2021',
                'brief_description_id' => 'Memasuki tahun 2021, prospek bisnis produsen cetakan sarung tangan kesehatan berbasis porselen sangat besar dan menjanjikan untuk terus tumbuh. Meningkatnya kesadaran masyarakat akan pemakaian sarung tangan, perlengkapan wajib para dokter dan perawat di garda depan penanganan Covid-19, serta penerapan protokol kesehatan di masa pandemi ini masih menjadi faktor penting permintaan produksi sarung tangan. Hal ini akan menjadi gaya hidup baru yang tidak akan terlepas dari kehidupan sehari-hari.',
                'brief_description_en' => 'Memasuki tahun 2021, prospek bisnis produsen cetakan sarung tangan kesehatan berbasis porselen sangat besar dan menjanjikan untuk terus tumbuh. Meningkatnya kesadaran masyarakat akan pemakaian sarung tangan, perlengkapan wajib para dokter dan perawat di garda depan penanganan Covid-19, serta penerapan protokol kesehatan di masa pandemi ini masih menjadi faktor penting permintaan produksi sarung tangan. Hal ini akan menjadi gaya hidup baru yang tidak akan terlepas dari kehidupan sehari-hari.',
                'content_id' => '<div>
<p style="text-align: justify;">Memasuki tahun 2021, prospek bisnis produsen cetakan sarung tangan kesehatan berbasis porselen sangat besar dan menjanjikan untuk terus tumbuh. Meningkatnya kesadaran masyarakat akan pemakaian sarung tangan, perlengkapan wajib para dokter dan perawat di garda depan penanganan Covid-19, serta penerapan protokol kesehatan di masa pandemi ini masih menjadi faktor penting permintaan produksi sarung tangan. Hal ini akan menjadi gaya hidup baru yang tidak akan terlepas dari kehidupan sehari-hari.</p>
<p style="text-align: justify;">Di 2020, perseroan telah meningkatkan kapasitas produksi hingga mampu mencetak 800.000 pcs/bulan. Tidak membutuhkan waktu yang lama, utilisasi kapasitas baru tersebut mencapai titik maksimum hanya dalam 2 bulan. Ini disebabkan oleh kurangnya pasokan cetakan sarung tangan di pasar global disaat permintaan sedang berada di puncak tertingginya. Alhasil, perseroan telah mengalokasikan capex lebih kurang Rp 150 Milyar untuk pembangunan pabrik baru yang ditotalkan akan mampu mencetak 1,4 juta pcs/bulan dimulai dari Kuartal II 2021.</p>
<p style="text-align: justify;">Pesanan MARK sudah dikantongi sekitar 98 % dari total permintaan terdaftar di tahun 2021. Beberapa dari pelanggan tersebut merupakan pelanggan setia yang merupakan pemain utama produsen sarung tangan di panggung internasional, yakni Hartalega, Top Gloves, Kossan, Sri Tang, Intco, Zhong Hong Pu Lin, dan BlueSail. Bahkan beberapa pelanggan baru ingin melakukan spot in dengan membeli produk MARK lebih mahal 50% dari harga normal. Dengan adanya penawaran bagus ini, Ridwan Goh memperkirakan kemungkinan akan ada kenaikan harga jual rata-rata di 2021. &ldquo;Melihat kondisi pasar yang cukup imbalance, average selling price (ASP) diperkirakan akan naik sekitar 15%. Ini tentunya katalis positif bagi kami untuk memacu kinerja di tahun recovery ini&rdquo;, ujar pemenang Rising Star CEO tersebut.</p>
<p style="text-align: justify;">Kondisi ini berdampak positif bagi MARK yang sudah mengantongi kontrak senilai US$66,8 juta untuk pengapalan pada 2021. Beliau juga yakin akan berhasil mencapai target yang telah ditetapkan untuk menyambut tahun baru ini. Tidak tanggung-tanggung, target penjualan akan naik sebesar dua kali lipat dari penjualan di 2020. &ldquo;Untuk penjualan 2020 mungkin akan dicapai sekitar Rp 548 Milyar, namun masih menunggu proses audit. Sedangkan di 2021, dengan adanya kenaikan ASP dan penambahan kapasitas hampir dua kali lipat, target penjualan konsolidasi akan mencapai angka Rp 1,061 Triliun dengan laba bersih sekitar Rp 300,6 Milyar.&rdquo;, kata Ridwan Goh. Menurutnya, target tersebut sangat realistis setelah mempertimbangkan kondisi pasar saat ini. &ldquo;Di 2022 nanti, penjualan konsolidasi akan naik 40% dari 2021 yaitu menjadi Rp 1,474 Triliun dan bottom line sekitar Rp 433,3 Milyar&rdquo;, tambah Ridwan.</p>
<p style="text-align: justify;">Berbanding lurus dengan permintaan yang masuk, persediaan bahan baku untuk cetakan sarung tangan sudah tersedia 90% dari total bahan baku yang akan dipakai di Semester Itahun 2021. Bahan baku yang diperlukan dalam pembuatan cetakan porselen sarung tangan ini seluruhnya diimpor dari Eropa, dan bebeapa negara lainnya. MARK memastikan seluruh bahan baku terjamin kualitasnya untuk menghasikan output yang baik kualitasnya dan sesuai dengan permintaan produsen sarung tangan. &ldquo;Melihat data tersebut, potensi bisnis MARK sangat besar dan terus menjanjikan&rdquo; ujar Ridwan Goh.</p>
<p style="text-align: justify;">Sebagai tambahan, MARK sendiri telah mengakuisisi dua anak perusahaan yang masing-masing bergerak di produk saniter dan agrikultur. Akuisisi dilakukan di semester pertama 2020 dengan kucuran dana sekitar Rp 70 Milyar. Produk saniter, seperti toilet duduk dan jongkok, akan menggunakan sisa bahan baku dari cetakan sarung tangan. Sedangkan produk pertanian yang dipasarkan oleh PT Agro Dynamics Indonesia adalah sprayer, herbisida, dan etephon (penyubur) yang dibutuhkan oleh industri pertanian. Kedua lini bisnis ini diproyeksikan dapat berkontribusi sebesar 10% &ndash; 15% total penjualan.</p>
<p style="text-align: justify;">Dengan mempertimbangkan semua aspek ini, bukan tidak mungkin MARK melipat gandakan kinerja mereka di 2021. Ditambah lagi kondisi ekonomi global yang mulai pulih secara perlahan karena telah tersedianya vaksin di seluruh dunia. Tingginya permintaan ini akan terus berlangsung dalam kurun waktu 2-3 tahun mendatang. Setelah kondisi kembali normal, permintaan sarung tangan secara global diperkirakan tetap akan bertumbuh sebesar 10% &ndash; 12% per tahun.</p>
</div>',
                'content_en' => '<div>
<p>Memasuki tahun 2021, prospek bisnis produsen cetakan sarung tangan kesehatan berbasis porselen sangat besar dan menjanjikan untuk terus tumbuh. Meningkatnya kesadaran masyarakat akan pemakaian sarung tangan, perlengkapan wajib para dokter dan perawat di garda depan penanganan Covid-19, serta penerapan protokol kesehatan di masa pandemi ini masih menjadi faktor penting permintaan produksi sarung tangan. Hal ini akan menjadi gaya hidup baru yang tidak akan terlepas dari kehidupan sehari-hari.</p>
<p>Di 2020, perseroan telah meningkatkan kapasitas produksi hingga mampu mencetak 800.000 pcs/bulan. Tidak membutuhkan waktu yang lama, utilisasi kapasitas baru tersebut mencapai titik maksimum hanya dalam 2 bulan. Ini disebabkan oleh kurangnya pasokan cetakan sarung tangan di pasar global disaat permintaan sedang berada di puncak tertingginya. Alhasil, perseroan telah mengalokasikan capex lebih kurang Rp 150 Milyar untuk pembangunan pabrik baru yang ditotalkan akan mampu mencetak 1,4 juta pcs/bulan dimulai dari Kuartal II 2021.</p>
<p>Pesanan MARK sudah dikantongi sekitar 98 % dari total permintaan terdaftar di tahun 2021. Beberapa dari pelanggan tersebut merupakan pelanggan setia yang merupakan pemain utama produsen sarung tangan di panggung internasional, yakni Hartalega, Top Gloves, Kossan, Sri Tang, Intco, Zhong Hong Pu Lin, dan BlueSail. Bahkan beberapa pelanggan baru ingin melakukan spot in dengan membeli produk MARK lebih mahal 50% dari harga normal. Dengan adanya penawaran bagus ini, Ridwan Goh memperkirakan kemungkinan akan ada kenaikan harga jual rata-rata di 2021. &ldquo;Melihat kondisi pasar yang cukup imbalance, average selling price (ASP) diperkirakan akan naik sekitar 15%. Ini tentunya katalis positif bagi kami untuk memacu kinerja di tahun recovery ini&rdquo;, ujar pemenang Rising Star CEO tersebut.</p>
<p>Kondisi ini berdampak positif bagi MARK yang sudah mengantongi kontrak senilai US$66,8 juta untuk pengapalan pada 2021. Beliau juga yakin akan berhasil mencapai target yang telah ditetapkan untuk menyambut tahun baru ini. Tidak tanggung-tanggung, target penjualan akan naik sebesar dua kali lipat dari penjualan di 2020. &ldquo;Untuk penjualan 2020 mungkin akan dicapai sekitar Rp 548 Milyar, namun masih menunggu proses audit. Sedangkan di 2021, dengan adanya kenaikan ASP dan penambahan kapasitas hampir dua kali lipat, target penjualan konsolidasi akan mencapai angka Rp 1,061 Triliun dengan laba bersih sekitar Rp 300,6 Milyar.&rdquo;, kata Ridwan Goh. Menurutnya, target tersebut sangat realistis setelah mempertimbangkan kondisi pasar saat ini. &ldquo;Di 2022 nanti, penjualan konsolidasi akan naik 40% dari 2021 yaitu menjadi Rp 1,474 Triliun dan bottom line sekitar Rp 433,3 Milyar&rdquo;, tambah Ridwan.</p>
<p>Berbanding lurus dengan permintaan yang masuk, persediaan bahan baku untuk cetakan sarung tangan sudah tersedia 90% dari total bahan baku yang akan dipakai di Semester Itahun 2021. Bahan baku yang diperlukan dalam pembuatan cetakan porselen sarung tangan ini seluruhnya diimpor dari Eropa, dan bebeapa negara lainnya. MARK memastikan seluruh bahan baku terjamin kualitasnya untuk menghasikan output yang baik kualitasnya dan sesuai dengan permintaan produsen sarung tangan. &ldquo;Melihat data tersebut, potensi bisnis MARK sangat besar dan terus menjanjikan&rdquo; ujar Ridwan Goh.</p>
<p>Sebagai tambahan, MARK sendiri telah mengakuisisi dua anak perusahaan yang masing-masing bergerak di produk saniter dan agrikultur. Akuisisi dilakukan di semester pertama 2020 dengan kucuran dana sekitar Rp 70 Milyar. Produk saniter, seperti toilet duduk dan jongkok, akan menggunakan sisa bahan baku dari cetakan sarung tangan. Sedangkan produk pertanian yang dipasarkan oleh PT Agro Dynamics Indonesia adalah sprayer, herbisida, dan etephon (penyubur) yang dibutuhkan oleh industri pertanian. Kedua lini bisnis ini diproyeksikan dapat berkontribusi sebesar 10% &ndash; 15% total penjualan.</p>
<p>Dengan mempertimbangkan semua aspek ini, bukan tidak mungkin MARK melipat gandakan kinerja mereka di 2021. Ditambah lagi kondisi ekonomi global yang mulai pulih secara perlahan karena telah tersedianya vaksin di seluruh dunia. Tingginya permintaan ini akan terus berlangsung dalam kurun waktu 2-3 tahun mendatang. Setelah kondisi kembali normal, permintaan sarung tangan secara global diperkirakan tetap akan bertumbuh sebesar 10% &ndash; 12% per tahun.</p>
</div>',
                'created_at' => '2021-05-04 14:07:08',
                'updated_at' => '2021-05-07 13:21:52',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'author_id' => 1,
                'slug' => '2021-05-04-harapan-ketua-aei-sumut-akan-penurunan-harga-gas-yang-belum-merata',
                'news_date' => '2021-05-04',
                'status' => 1,
                'cover' => 'img/ketuaaei.jpeg',
                'title_id' => 'Harapan Ketua AEI Sumut akan Penurunan Harga Gas yang Belum Merata',
                'title_en' => 'The hope of the Chairman of the North Sumatra AEI for an uneven decline in gas prices',
                'brief_description_id' => 'Dalam rangka mendongkrak pertumbuhan ekonomi Indonesia sebagai negara berkembang, Pemerintah telah melakukan banyak terobosan. Salah satunya adalah dengan cara menurunkan harga gas. Melalui Kementrian ESDM pada April 2020, harga gas industri resmi telah diturunkan dari $10.28/Mmtbu menjadi $6.52/Mmbtu untuk 7 sektor manufaktur berbasis gas. Dalam Keputusan Menteri ESDM No. 89 K/10/MEM/2020 tentang Tata Cara Penetapan Penggunaan dan Harga Gas Bumi Tertentu di Bidang Industri, terdapat 197 perusahaan yang menerima manfaat penurunan harga gas.',
                'brief_description_en' => 'Dalam rangka mendongkrak pertumbuhan ekonomi Indonesia sebagai negara berkembang, Pemerintah telah melakukan banyak terobosan. Salah satunya adalah dengan cara menurunkan harga gas. Melalui Kementrian ESDM pada April 2020, harga gas industri resmi telah diturunkan dari $10.28/Mmtbu menjadi $6.52/Mmbtu untuk 7 sektor manufaktur berbasis gas. Dalam Keputusan Menteri ESDM No. 89 K/10/MEM/2020 tentang Tata Cara Penetapan Penggunaan dan Harga Gas Bumi Tertentu di Bidang Industri, terdapat 197 perusahaan yang menerima manfaat penurunan harga gas.',
                'content_id' => '<div>
<p>Dalam rangka mendongkrak pertumbuhan ekonomi Indonesia sebagai negara berkembang, Pemerintah telah melakukan banyak terobosan. Salah satunya adalah dengan cara menurunkan harga gas. Melalui Kementrian ESDM pada April 2020, harga gas industri resmi telah diturunkan dari $10.28/Mmtbu menjadi $6.52/Mmbtu untuk 7 sektor manufaktur berbasis gas. Dalam Keputusan Menteri ESDM No. 89 K/10/MEM/2020 tentang Tata Cara Penetapan Penggunaan dan Harga Gas Bumi Tertentu di Bidang Industri, terdapat 197 perusahaan yang menerima manfaat penurunan harga gas.</p>
<p>Penurunan harga gas ini menjadi angin segar bagi perusahaan-perusahaan yang menggunakan gas dalam jumlah banyak. Pemotongan biaya produksi ini akan membuat perusahaan menjadi efisien dan dapat memberikan daya saing yang lebih kompetitif. Terlebih lagi jika produk yang dihasilkan akan di ekspor ke negara lain untuk bersaing.</p>
<p>Tidak hanya itu, harga gas yang murah membuat perusahaan dapat berjalan lebih efisien sehingga menambah pundi-pundi laba bagi perusahaan. Laba tersebut dapat digunakan untuk menutup biaya operasional lainnya, terutama membayar gaji karyawan. Sebagaimana diketahui, kondisi ekonomi seluruh dunia pasca Corona pun dihantam babak belur. Di Indonesia sendiri, menurut Menteri Ketenagakerjaan Ida Fauziyah, angka pengangguran yang sebelumnya 6,8 juta meningkat menjadi 10,3 juta, atau kenaikan sebesar 51,47%. Kenaikan signifikan tersebut tentunya sangat berdampak negatif terhadap ekonomi nasional. Oleh karena itu, melalui kebijakan penurunan harga gas yang sama rata dan adil, Pemerintah seharusnya bisa membantu perusahaan-perusahaan untuk menjadi lebih efisien dalam menjalankan bisnis sehingga Pemutusan Hubungan Kerja (PHK) pun tidak akan meningkat lagi kedepannya.</p>
<p>Tetapi, fakta di lapangan memiliki cerita berbeda. Masih banyak perusahaan yang belum mendapatkan manfaat penurunan harga gas ini. Alasan yang paling lumrah ditemukan adalah karena distributor gas belum menyelesaikan perjanjian dengan seluruh industri hulu gas, sehingga penetapan tarif gas senilai $6/Mmbtu harus tertunda. Artinya, beberapa perusahaan yang berbasis gas masih saja harus membayar di tarif sebelumya yakni sekitar $9-$11/Mmbtu.</p>
<p>Ketua Asosiasi Emiten Indonesia (AEI) Sumatera Utara, Ridwan Goh, mengatakan bahwa dirinya juga mendapat laporan yang sama dari beberapa perusahaan yang menggunakan gas dalam jumlah banyak. &ldquo;Kami mengapresiasi langkah pemerintah untuk menurunkan harga gas ini, walaupun masih belum benar-benar sepenuhnya menjadi $6/Mmbtu. Pengajuan dari beberapa perusahaan kepada Pemerintah masih belum mendapatkan approval hingga saat ini&rdquo;, katanya.Ketika ditanya akan perusahaan yang dipimpinnya, PT Mark Dynamics, Tbk, Ridwan juga menuturkan hal yang serupa. Ekspansi pabrik baru Mark belum mendapatkan persetujuan untuk mencicipi harga gas industri yang ekonomis ini. &ldquo;Kalau untuk pabrik pertama sudah kami rasakan manfaatnya, kami juga berterima kasih untuk itu. Tapi untuk pabrik baru ini tariff yang dibebankan masih $10,28/Mmbtu&rdquo;, kata Ridwan.</p>
<p>Ridwan mengatakan Mark bukan satu-satunya perusahaan yang masih belum mendapatkan manfaat ini sepenuhnya. Ridwan berharap Pemerintah dapat merampungkan eksekusi ini secara cepat dan merata. &ldquo;Saya disini berbicara sebagai medium, mewakilkan beberapa perusahaan, tidak hanya Mark Dynamics, untuk menyampaikan dengan etikad baik kepada Pemerintah bahwa pemerataan harga gas ini pasti akan memberikan dampak baik terhadap ekonomi Indonesia secara keseluruhan.&rdquo;, imbuhnya. Penurunan biaya gas ini tentunya akan mempertebal marjin perusahaan-perusahaan, sehingga pembayaran pajak kepada negara juga semakin bertambah. &ldquo;Kami berharap adanya respon positif dari Pemerintah untuk saling membantu dan melengkapi, apalagi dalam keadaan ekonomi seperti ini dimana banyak perusahaan yang menggencarkan efisiensi untuk bertahan hidup&rdquo;, tambahnya.</p>
<p>Untuk mendapatkan gambaran lebih jelas, dengan harga gas industri di Indonesia sebesar $9-11/Mmbtu tergolong sangat mahal jika dibandingkan dengan negara-negara tetangga. Sebagai contoh, harga gas di Malaysia tahun 2021 hanya sebesar $5.48/Mmbtu. Langkah pemerintah untuk menurunkan harga gas secara merata menjadi $6/Mmbtu ini akan membuat pabrik-pabrik Indonesia menjadi lebih kompetitif untuk head-to-head dengan pabrik-pabrik di negara lain.</p>
</div>',
                'content_en' => '<div>
<p>Dalam rangka mendongkrak pertumbuhan ekonomi Indonesia sebagai negara berkembang, Pemerintah telah melakukan banyak terobosan. Salah satunya adalah dengan cara menurunkan harga gas. Melalui Kementrian ESDM pada April 2020, harga gas industri resmi telah diturunkan dari $10.28/Mmtbu menjadi $6.52/Mmbtu untuk 7 sektor manufaktur berbasis gas. Dalam Keputusan Menteri ESDM No. 89 K/10/MEM/2020 tentang Tata Cara Penetapan Penggunaan dan Harga Gas Bumi Tertentu di Bidang Industri, terdapat 197 perusahaan yang menerima manfaat penurunan harga gas.</p>
<p>Penurunan harga gas ini menjadi angin segar bagi perusahaan-perusahaan yang menggunakan gas dalam jumlah banyak. Pemotongan biaya produksi ini akan membuat perusahaan menjadi efisien dan dapat memberikan daya saing yang lebih kompetitif. Terlebih lagi jika produk yang dihasilkan akan di ekspor ke negara lain untuk bersaing.</p>
<p>Tidak hanya itu, harga gas yang murah membuat perusahaan dapat berjalan lebih efisien sehingga menambah pundi-pundi laba bagi perusahaan. Laba tersebut dapat digunakan untuk menutup biaya operasional lainnya, terutama membayar gaji karyawan. Sebagaimana diketahui, kondisi ekonomi seluruh dunia pasca Corona pun dihantam babak belur. Di Indonesia sendiri, menurut Menteri Ketenagakerjaan Ida Fauziyah, angka pengangguran yang sebelumnya 6,8 juta meningkat menjadi 10,3 juta, atau kenaikan sebesar 51,47%. Kenaikan signifikan tersebut tentunya sangat berdampak negatif terhadap ekonomi nasional. Oleh karena itu, melalui kebijakan penurunan harga gas yang sama rata dan adil, Pemerintah seharusnya bisa membantu perusahaan-perusahaan untuk menjadi lebih efisien dalam menjalankan bisnis sehingga Pemutusan Hubungan Kerja (PHK) pun tidak akan meningkat lagi kedepannya.</p>
<p>Tetapi, fakta di lapangan memiliki cerita berbeda. Masih banyak perusahaan yang belum mendapatkan manfaat penurunan harga gas ini. Alasan yang paling lumrah ditemukan adalah karena distributor gas belum menyelesaikan perjanjian dengan seluruh industri hulu gas, sehingga penetapan tarif gas senilai $6/Mmbtu harus tertunda. Artinya, beberapa perusahaan yang berbasis gas masih saja harus membayar di tarif sebelumya yakni sekitar $9-$11/Mmbtu.</p>
<p>Ketua Asosiasi Emiten Indonesia (AEI) Sumatera Utara, Ridwan Goh, mengatakan bahwa dirinya juga mendapat laporan yang sama dari beberapa perusahaan yang menggunakan gas dalam jumlah banyak. &ldquo;Kami mengapresiasi langkah pemerintah untuk menurunkan harga gas ini, walaupun masih belum benar-benar sepenuhnya menjadi $6/Mmbtu. Pengajuan dari beberapa perusahaan kepada Pemerintah masih belum mendapatkan approval hingga saat ini&rdquo;, katanya.Ketika ditanya akan perusahaan yang dipimpinnya, PT Mark Dynamics, Tbk, Ridwan juga menuturkan hal yang serupa. Ekspansi pabrik baru Mark belum mendapatkan persetujuan untuk mencicipi harga gas industri yang ekonomis ini. &ldquo;Kalau untuk pabrik pertama sudah kami rasakan manfaatnya, kami juga berterima kasih untuk itu. Tapi untuk pabrik baru ini tariff yang dibebankan masih $10,28/Mmbtu&rdquo;, kata Ridwan.</p>
<p>Ridwan mengatakan Mark bukan satu-satunya perusahaan yang masih belum mendapatkan manfaat ini sepenuhnya. Ridwan berharap Pemerintah dapat merampungkan eksekusi ini secara cepat dan merata. &ldquo;Saya disini berbicara sebagai medium, mewakilkan beberapa perusahaan, tidak hanya Mark Dynamics, untuk menyampaikan dengan etikad baik kepada Pemerintah bahwa pemerataan harga gas ini pasti akan memberikan dampak baik terhadap ekonomi Indonesia secara keseluruhan.&rdquo;, imbuhnya. Penurunan biaya gas ini tentunya akan mempertebal marjin perusahaan-perusahaan, sehingga pembayaran pajak kepada negara juga semakin bertambah. &ldquo;Kami berharap adanya respon positif dari Pemerintah untuk saling membantu dan melengkapi, apalagi dalam keadaan ekonomi seperti ini dimana banyak perusahaan yang menggencarkan efisiensi untuk bertahan hidup&rdquo;, tambahnya.</p>
<p>Untuk mendapatkan gambaran lebih jelas, dengan harga gas industri di Indonesia sebesar $9-11/Mmbtu tergolong sangat mahal jika dibandingkan dengan negara-negara tetangga. Sebagai contoh, harga gas di Malaysia tahun 2021 hanya sebesar $5.48/Mmbtu. Langkah pemerintah untuk menurunkan harga gas secara merata menjadi $6/Mmbtu ini akan membuat pabrik-pabrik Indonesia menjadi lebih kompetitif untuk head-to-head dengan pabrik-pabrik di negara lain.</p>
</div>',
                'created_at' => '2021-05-04 14:58:00',
                'updated_at' => '2021-05-07 13:07:27',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'author_id' => 1,
                'slug' => '2021-05-07-oase-di-tengah-pandemi-mark-menutup-tahun-buku-2020-dengan-capaian-gemilang-laba-bersih-naik-64',
                'news_date' => '2021-05-07',
                'status' => 1,
                'cover' => 'img/oasemark.jpg',
                'title_id' => 'Oase di tengah pandemi MARK menutup tahun buku 2020 dengan capaian gemilang, laba bersih naik 64%',
                'title_en' => 'Oasis in the midst of the pandemic MARK closes the 2020 financial year with brilliant achievements, net profit increases by 64%',
                'brief_description_id' => 'Produsen cetakan sarung tangan kesehatan berbasis porselen, PT Mark Dynamics Indonesia Tbk mendapatkan laba sebesar Rp 144,19 miliar yang meningkat sebesar 63,85 % jika dibandingkan dengan tahun 2019 sebesar Rp 88,00 miliar.',
                'brief_description_en' => 'The porcelain-based health glove mold manufacturer, PT Mark Dynamics Indonesia Tbk, received a profit of Rp 144.19 billion, an increase of 63.85% compared to 2019, which amounted to Rp 88.00 billion.

',
                'content_id' => '<div>
<p>Produsen cetakan sarung tangan kesehatan berbasis porselen, PT Mark Dynamics Indonesia Tbk mendapatkan laba sebesar Rp 144,19 miliar yang meningkat sebesar 63,85 % jika dibandingkan dengan tahun 2019 sebesar Rp 88,00 miliar.</p>
<p>&ldquo;Gaya&nbsp; hidup&nbsp; baru&nbsp; akan&nbsp; pentingnya&nbsp; kesehatan&nbsp; mendongkrak&nbsp; penjualan&nbsp; sarung&nbsp; tangan, sehingga cetakan sarung tangan menjadi peranan penting dalam produksi sarung tangan.&rdquo;,sebut Presiden Direktur MARK, Ridwan Goh.</p>
<p>Peningkatan laba bersih ini dicapai karena keberhasilan perseroan dalam penetrasi pasar baru serta strategi produksi untuk mencapai efisiensi dan peningkatan kualitas produk.&nbsp; Pada tahun 2020 ini MARK mencetak penjualan tertinggi sepanjang masa dengan membukukan Rp 565.44 miliar, naik 56,39% dari tahun 2019 sebesar&nbsp; Rp 361,54&nbsp; miliar. Hal ini terlihat dari keberhasilan Perseroan menjaga margin laba kotor sebesar 42% dengan nilai sebesar Rp 236.79 miliar.</p>
<p>Volume produksi Perseroan meningkat sebesar 22% menjadi 8,8 juta pieces di tahun 2020 dibandingkan dengan 7,2 pieces di tahun 2019. Kenaikan permintaan cetakan sarung tangan ini otomatis akan mendorong kinerja Perseroan lebih positif MARK sendiri adalah penguasa pasar global untuk cetakan sarung tangan. Per tahun 2020, MARK telah mencakup market shares sebesar 35% dengan kapasitas produksi sebanyak 800rb pieces/bulan. Pelanggan setia MARK sampai saat ini adalah beberapa pemain utama produsen sarung tangan di pasar internasional, yakni Hartalega, Top Gloves, Kossan, dan Sri Tang. Berkat pandemi, MARK berhasil melebarkan sayapnya sampai Tiongkok, mendapatkan kepercayaan dari pemain-pemain besar seperti Intco, Zhong Hong Pu Lin, dan BlueSail.</p>
<p>Malaysian&nbsp; Rubber&nbsp; Glove&nbsp; Manufacturers&nbsp; Association&nbsp; (MARGMA)&nbsp; meyakini&nbsp; permintaan sarung tangan di tingkat global tumbuh menapai 50%&nbsp;&nbsp; di tahun 2020 dibanding prediksi<br />sebelumnya. Sebelumnya diprediksikan bahwa permintaan sarung tangan secara global di tahun 2020 sekitar 300 milyar pieces, akan tetapi permintaan di masa covid-19 menjadi<br />sekitar&nbsp; 420&nbsp; milyar&nbsp; pieces. Hal&nbsp; ini&nbsp; dikarenakan&nbsp; pandemi&nbsp; covid-19&nbsp; serta&nbsp; meningkatnya kesadaran yang lebih tinggi pemakaian sarung tangan serta diterapkannya protokol kesehatan yang lebih ketat dibandingkan sebelumnya.&nbsp; Malaysia tetap memegang pangsa pasar global terbesar yaitu dengan pangsa 67%. Negara Malaysia telah menjadi tujuan ekspor terbesar buat&nbsp; perseroan menyusul Thailand,&nbsp; China&nbsp; dan&nbsp; Vietnam.&nbsp; Peningkatan permintaan&nbsp; sarung tangan global ini, akan secara langsung mendorong peluang pertumbuhan MARK di tahun- tahun berikutnya.</p>
<p>Selama&nbsp; 2020,&nbsp; MARK&nbsp; menjadi&nbsp; tujuan&nbsp; utama&nbsp; produsen&nbsp; sarung&nbsp; tangan&nbsp; dunia,&nbsp;&nbsp;&nbsp; hal&nbsp; ini&nbsp; menjadi pendorong&nbsp;&nbsp;&nbsp; bagi&nbsp; meningkatnya&nbsp; average&nbsp; selling&nbsp; price&nbsp; (ASP)&nbsp; sekitar&nbsp; 15&nbsp; %. Sebagai&nbsp; informasi, permintaan cetakan sarung tangan&nbsp; global di tahun ini melonjak lebih dari 100% dimana supply seluruh dunia hanya naik lebih kurang 30% dan MARK terus berusaha memenuhi supply side. MARK bahkan telah&nbsp;&nbsp; mengantongi kontrak penjualan sebesar sekitar US$ 70 juta untuk pengapalan pada 2021. Produk perseroan laku keras seiring dengan permintaan sarung tangan secara global. Pada kontrak mendatang selain Malaysia, produsen sarung tangan juga berasal dari&nbsp; beberapa&nbsp; negara&nbsp; seperti&nbsp; China,&nbsp; Thailand,&nbsp; Vietnam,&nbsp; Afrika&nbsp; Selatan,&nbsp; dan&nbsp; Amerika Serikat,&rdquo; ujar Ridwan.</p>
<p>Penjualan MARK selama ini berorientasi pada pasar ekspor dengan komposisi sekitar 77% dan pasar domestik sekitar 33%. Porsi penjualan lokal meningkat menjadi 33% , dikarenakan hasil konsolidasi dengan perusahaan anak yang baru di akuisisi di bulan Juli 2020. Penjualan ekspor dari MARK sendiri terus stabil dengan komposisi ekspor 95% dan domestik sebesar 5% mengingat negara yang menjadi tujuan ekspor utama MARK adalah Malaysia yang merupakan produsen sarung tangan yang memiliki 65% pangsa pasar sarung tangan di dunia.</p>
<blockquote>
<p>Total Aset Meningkat 63,11 %</p>
</blockquote>
<p>Pertumbuhan kinerja operasional yang dicapai Perseroan pada tahun 2020 berjalan seiring dengan peningkatan kinerja keuangan dimana Total Aset Perseroan meningkat sebesar 63,11% menjadi Rp 719,72 miliar per 31 Desember 2020 dibandingkan dengan Rp 441,25 miliar Per 31 Desember 2019. Aset Lancar mengalami peningkatan sebesar 61,96% dengan nilai sebesar Rp 356,87 miliar per 31 Desember&nbsp; 2020&nbsp; dibandingkan dengan&nbsp; Rp&nbsp; 220,34&nbsp; miliar&nbsp; per&nbsp; 31&nbsp; Desember&nbsp; 2019.&nbsp; Sementara peningkatan Aset Tidak Lancar sebesar 64,24% dengan nilai Rp 362,84 miliar per 31 Desember 2020 jika dibandingkan dengan Rp 220,91 miliar per 31 Desember 2019.</p>
<p>Peningkatan juga terjadi pada posisi Ekuitas Perseroan sebesar Rp 409.47&nbsp; miliar per 31 Desember 2020 dibandingkan dengan Rp 299,02 miliar per 31 Desember 2019. Peningkatan Ekuitas terjadi menyusul tercapainya peningkatan Saldo Laba Ditahan sebesar Rp 315,5&nbsp;&nbsp; miliar per 31 Desember 2020 dibandingkan dengan posisi Rp 200,39 miliar per 31 Desember 2019. &ldquo;Pertumbuhan berkualitas dan berkelanjutan akan tetap dijaga Perseroan&rdquo;,ungkap Ridwan.</p>
<p>Tabel Ringkasan Kinerja Operasional<br />Kinerja Operasional (dalam Rupiah)</p>
<table>
<tbody>
<tr>
<td width="215">&nbsp;</td>
<td width="142"><strong>2020 (Rp)</strong></td>
<td width="142"><strong>2019 (Rp)</strong></td>
<td width="118"><strong>% naik</strong></td>
</tr>
<tr>
<td width="215">Penjualan</td>
<td width="142">565.439.688.892</td>
<td width="142">361.544.998.431</td>
<td width="118">56,4%</td>
</tr>
<tr>
<td width="215">Beban Pokok Penjualan</td>
<td width="142">328.644.769.596</td>
<td width="142">205.122.192.818</td>
<td width="118">60,3%</td>
</tr>
<tr>
<td width="215">Laba Bruto</td>
<td width="142">236.794.919.296</td>
<td width="142">156.422.805.613</td>
<td width="118">51,3%</td>
</tr>
<tr>
<td width="215">Laba Operasional</td>
<td width="142">186.691.686.387</td>
<td width="142">118.687.394.019</td>
<td width="118">57,6%</td>
</tr>
<tr>
<td width="215">Laba Bersih</td>
<td width="142">144.194.690.952</td>
<td width="142">88.002.544.534</td>
<td width="118">63,6%</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
</div>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;',
                'content_en' => '<div>
<p>Produsen cetakan sarung tangan kesehatan berbasis porselen, PT Mark Dynamics Indonesia Tbk mendapatkan laba sebesar Rp 144,19 miliar yang meningkat sebesar 63,85 % jika dibandingkan dengan tahun 2019 sebesar Rp 88,00 miliar.</p>
<p>&ldquo;Gaya&nbsp; hidup&nbsp; baru&nbsp; akan&nbsp; pentingnya&nbsp; kesehatan&nbsp; mendongkrak&nbsp; penjualan&nbsp; sarung&nbsp; tangan, sehingga cetakan sarung tangan menjadi peranan penting dalam produksi sarung tangan.&rdquo;,sebut Presiden Direktur MARK, Ridwan Goh.</p>
<p>Peningkatan laba bersih ini dicapai karena keberhasilan perseroan dalam penetrasi pasar baru serta strategi produksi untuk mencapai efisiensi dan peningkatan kualitas produk.&nbsp; Pada tahun 2020 ini MARK mencetak penjualan tertinggi sepanjang masa dengan membukukan Rp 565.44 miliar, naik 56,39% dari tahun 2019 sebesar&nbsp; Rp 361,54&nbsp; miliar. Hal ini terlihat dari keberhasilan Perseroan menjaga margin laba kotor sebesar 42% dengan nilai sebesar Rp 236.79 miliar.</p>
<p>Volume produksi Perseroan meningkat sebesar 22% menjadi 8,8 juta pieces di tahun 2020 dibandingkan dengan 7,2 pieces di tahun 2019. Kenaikan permintaan cetakan sarung tangan ini otomatis akan mendorong kinerja Perseroan lebih positif MARK sendiri adalah penguasa pasar global untuk cetakan sarung tangan. Per tahun 2020, MARK telah mencakup market shares sebesar 35% dengan kapasitas produksi sebanyak 800rb pieces/bulan. Pelanggan setia MARK sampai saat ini adalah beberapa pemain utama produsen sarung tangan di pasar internasional, yakni Hartalega, Top Gloves, Kossan, dan Sri Tang. Berkat pandemi, MARK berhasil melebarkan sayapnya sampai Tiongkok, mendapatkan kepercayaan dari pemain-pemain besar seperti Intco, Zhong Hong Pu Lin, dan BlueSail.</p>
<p>Malaysian&nbsp; Rubber&nbsp; Glove&nbsp; Manufacturers&nbsp; Association&nbsp; (MARGMA)&nbsp; meyakini&nbsp; permintaan sarung tangan di tingkat global tumbuh menapai 50%&nbsp;&nbsp; di tahun 2020 dibanding prediksi<br />sebelumnya. Sebelumnya diprediksikan bahwa permintaan sarung tangan secara global di tahun 2020 sekitar 300 milyar pieces, akan tetapi permintaan di masa covid-19 menjadi<br />sekitar&nbsp; 420&nbsp; milyar&nbsp; pieces. Hal&nbsp; ini&nbsp; dikarenakan&nbsp; pandemi&nbsp; covid-19&nbsp; serta&nbsp; meningkatnya kesadaran yang lebih tinggi pemakaian sarung tangan serta diterapkannya protokol kesehatan yang lebih ketat dibandingkan sebelumnya.&nbsp; Malaysia tetap memegang pangsa pasar global terbesar yaitu dengan pangsa 67%. Negara Malaysia telah menjadi tujuan ekspor terbesar buat&nbsp; perseroan menyusul Thailand,&nbsp; China&nbsp; dan&nbsp; Vietnam.&nbsp; Peningkatan permintaan&nbsp; sarung tangan global ini, akan secara langsung mendorong peluang pertumbuhan MARK di tahun- tahun berikutnya.</p>
<p>Selama&nbsp; 2020,&nbsp; MARK&nbsp; menjadi&nbsp; tujuan&nbsp; utama&nbsp; produsen&nbsp; sarung&nbsp; tangan&nbsp; dunia,&nbsp;&nbsp;&nbsp; hal&nbsp; ini&nbsp; menjadi pendorong&nbsp;&nbsp;&nbsp; bagi&nbsp; meningkatnya&nbsp; average&nbsp; selling&nbsp; price&nbsp; (ASP)&nbsp; sekitar&nbsp; 15&nbsp; %. Sebagai&nbsp; informasi, permintaan cetakan sarung tangan&nbsp; global di tahun ini melonjak lebih dari 100% dimana supply seluruh dunia hanya naik lebih kurang 30% dan MARK terus berusaha memenuhi supply side. MARK bahkan telah&nbsp;&nbsp; mengantongi kontrak penjualan sebesar sekitar US$ 70 juta untuk pengapalan pada 2021. Produk perseroan laku keras seiring dengan permintaan sarung tangan secara global. Pada kontrak mendatang selain Malaysia, produsen sarung tangan juga berasal dari&nbsp; beberapa&nbsp; negara&nbsp; seperti&nbsp; China,&nbsp; Thailand,&nbsp; Vietnam,&nbsp; Afrika&nbsp; Selatan,&nbsp; dan&nbsp; Amerika Serikat,&rdquo; ujar Ridwan.</p>
<p>Penjualan MARK selama ini berorientasi pada pasar ekspor dengan komposisi sekitar 77% dan pasar domestik sekitar 33%. Porsi penjualan lokal meningkat menjadi 33% , dikarenakan hasil konsolidasi dengan perusahaan anak yang baru di akuisisi di bulan Juli 2020. Penjualan ekspor dari MARK sendiri terus stabil dengan komposisi ekspor 95% dan domestik sebesar 5% mengingat negara yang menjadi tujuan ekspor utama MARK adalah Malaysia yang merupakan produsen sarung tangan yang memiliki 65% pangsa pasar sarung tangan di dunia.</p>
<blockquote>
<p>Total Aset Meningkat 63,11 %</p>
</blockquote>
<p>Pertumbuhan kinerja operasional yang dicapai Perseroan pada tahun 2020 berjalan seiring dengan peningkatan kinerja keuangan dimana Total Aset Perseroan meningkat sebesar 63,11% menjadi Rp 719,72 miliar per 31 Desember 2020 dibandingkan dengan Rp 441,25 miliar Per 31 Desember 2019. Aset Lancar mengalami peningkatan sebesar 61,96% dengan nilai sebesar Rp 356,87 miliar per 31 Desember&nbsp; 2020&nbsp; dibandingkan dengan&nbsp; Rp&nbsp; 220,34&nbsp; miliar&nbsp; per&nbsp; 31&nbsp; Desember&nbsp; 2019.&nbsp; Sementara peningkatan Aset Tidak Lancar sebesar 64,24% dengan nilai Rp 362,84 miliar per 31 Desember 2020 jika dibandingkan dengan Rp 220,91 miliar per 31 Desember 2019.</p>
<p>Peningkatan juga terjadi pada posisi Ekuitas Perseroan sebesar Rp 409.47&nbsp; miliar per 31 Desember 2020 dibandingkan dengan Rp 299,02 miliar per 31 Desember 2019. Peningkatan Ekuitas terjadi menyusul tercapainya peningkatan Saldo Laba Ditahan sebesar Rp 315,5&nbsp;&nbsp; miliar per 31 Desember 2020 dibandingkan dengan posisi Rp 200,39 miliar per 31 Desember 2019. &ldquo;Pertumbuhan berkualitas dan berkelanjutan akan tetap dijaga Perseroan&rdquo;,ungkap Ridwan.</p>
<p>Tabel Ringkasan Kinerja Operasional<br />Kinerja Operasional (dalam Rupiah)</p>
<table>
<tbody>
<tr>
<td width="215">&nbsp;</td>
<td width="142"><strong>2020 (Rp)</strong></td>
<td width="142"><strong>2019 (Rp)</strong></td>
<td width="118"><strong>% naik</strong></td>
</tr>
<tr>
<td width="215">Penjualan</td>
<td width="142">565.439.688.892</td>
<td width="142">361.544.998.431</td>
<td width="118">56,4%</td>
</tr>
<tr>
<td width="215">Beban Pokok Penjualan</td>
<td width="142">328.644.769.596</td>
<td width="142">205.122.192.818</td>
<td width="118">60,3%</td>
</tr>
<tr>
<td width="215">Laba Bruto</td>
<td width="142">236.794.919.296</td>
<td width="142">156.422.805.613</td>
<td width="118">51,3%</td>
</tr>
<tr>
<td width="215">Laba Operasional</td>
<td width="142">186.691.686.387</td>
<td width="142">118.687.394.019</td>
<td width="118">57,6%</td>
</tr>
<tr>
<td width="215">Laba Bersih</td>
<td width="142">144.194.690.952</td>
<td width="142">88.002.544.534</td>
<td width="118">63,6%</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
</div>',
                'created_at' => '2021-05-07 15:51:58',
                'updated_at' => '2021-05-07 15:51:58',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}