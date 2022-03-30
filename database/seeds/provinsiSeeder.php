<?php

use Illuminate\Database\Seeder;

class provinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinsi')->insert(['nama_provinsi' => 'Aceh',
                                        'namaButton_provinsi' => 'aceh',
                                        'deskripsi_provinsi' => 'Aceh adalah sebuah provinsi di Indonesia yang ibu kotanya berada di Banda Aceh. Aceh merupakan salah satu provinsi di Indonesia yang diberi status sebagai daerah istimewa dan juga diberi kewenangan otonomi khusus. Aceh terletak di ujung utara pulau Sumatra dan merupakan provinsi paling barat di Indonesia. Menurut hasil sensus Badan Pusat Statistik tahun 2019, jumlah penduduk provinsi ini sekitar 5.281.891Jiwa.[10] Letaknya dekat dengan Kepulauan Andaman dan Nikobar di India dan terpisahkan oleh Laut Andaman. Aceh berbatasan dengan Teluk Benggala di sebelah utara, Samudra Hindia di sebelah barat, Selat Malaka di sebelah timur, dan Sumatra Utara di sebelah tenggara dan selatan.',
                                        'gambar_provinsi' => 'aceh-01.png']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Sumatra Utara',
                                        'namaButton_provinsi' => 'sumatraUtara',
                                        'deskripsi_provinsi' => 'Sumatra Utara atau Sumatera Utara (disingkat Sumut) adalah sebuah provinsi di Indonesia yang terletak di bagian Utara pulau Sumatra. Provinsi ini beribu kota di Kota Medan, dengan luas wilayah 72.981,23 km2. Sumatra Utara merupakan provinsi dengan jumlah penduduk terbesar keempat di Indonesia, setelah provinsi Jawa Barat, Jawa Timur, dan Jawa Tengah, dan terbanyak di pulau Sumatra. Pada tahun 2021 penduduk Sumatra Utara berjumlah 15.136.522 jiwa, dengan kepadatan penduduk 207,40 jiwa/km2.',
                                        'gambar_provinsi' => 'Sumut-01.png']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Sumatra Barat',
                                        'namaButton_provinsi' => 'sumatraBarat',
                                        'deskripsi_provinsi' => 'Sumatra Barat (disingkat Sumbar) adalah sebuah provinsi di Indonesia yang terletak di Pulau Sumatra dengan ibu kota Padang. Provinsi Sumatra Barat terletak sepanjang pesisir barat Sumatra bagian tengah, dataran tinggi Bukit Barisan di sebelah timur, dan sejumlah pulau di lepas pantainya seperti Kepulauan Mentawai. Dari utara ke selatan, provinsi dengan wilayah seluas 42.012,89 km² ini berbatasan dengan empat provinsi, yakni Sumatra Utara, Riau, Jambi, dan Bengkulu.',
                                        'gambar_provinsi' => 'Sumbar-01.png']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Riau',
                                        'namaButton_provinsi' => 'riau',
                                        'deskripsi_provinsi' => 'Riau (Jawi: رياو) adalah sebuah provinsi di Indonesia yang terletak di bagian tengah pantai timur pulau Sumatra. Wilayah pesisirnya berbatasan dengan Selat Malaka. Hingga tahun 2004, provinsi ini juga meliputi Kepulauan Riau, sekelompok besar pulau-pulau kecil (pulau-pulau utamanya antara lain Pulau Batam dan Pulau Bintan) yang terletak di sebelah Timur Sumatra dan sebelah Selatan Singapura. Kepulauan ini dimekarkan menjadi provinsi tersendiri pada Juli 2004. Ibu kota dan kota terbesar Riau adalah Pekanbaru, dan kota besar lainnya adalah kota Dumai. Berdasarkan hasil Badan Pusat Statistik Riau tahun 2022, penduduk provinsi Riau berjumlah 6.493.603 jiwa, dengan kepadatan penduduk 75 jiwa/km².',
                                        'gambar_provinsi' => 'Riau-01.png']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Kepulauan Riau',
                                        'namaButton_provinsi' => 'kepRiau',
                                        'deskripsi_provinsi' => 'Kepulauan Riau (disingkat Kepri) adalah sebuah provinsi yang ada di Indonesia. Provinsi Kepulauan Riau berbatasan dengan Vietnam dan Kamboja di sebelah Utara; Malaysia dan provinsi Kalimantan Barat di sebelah Timur; provinsi Kepulauan Bangka Belitung dan Jambi di Selatan; negara Singapura, Malaysia dan provinsi Riau di sebelah Barat. Provinsi ini termasuk provinsi kepulauan di Indonesia. Tahun 2020, penduduk Kepulauan Riau berjumlah 2.064.564 jiwa, dengan kepadatan 252 jiwa/km2, dan 58% penduduknya berada di kota Batam.',
                                        'gambar_provinsi' => 'Kep Riau-01.png']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Bangka Belitung',
                                        'namaButton_provinsi' => 'bangkablitung',
                                        'deskripsi_provinsi' => 'Kepulauan Bangka Belitung adalah sebuah provinsi di Indonesia yang terdiri dari dua pulau utama yaitu Pulau Bangka dan Pulau Belitung serta ratusan pulau-pulau kecil, total pulau yang telah bernama berjumlah 470 buah dan yang berpenghuni hanya 50 pulau. Bangka Belitung terletak di bagian timur Pulau Sumatra, dekat dengan Provinsi Sumatra Selatan. Bangka Belitung dikenal sebagai daerah penghasil timah, memiliki pantai yang indah dan kerukunan antar etnis. Ibu kota provinsi ini ialah Pangkalpinang. Pemerintahan provinsi ini disahkan pada tanggal 9 Februari 2001. Setelah dilantiknya Pj. Gubernur yakni H. Amur Muchasim, SH (mantan Sekjen Depdagri) yang menandai dimulainya aktivitas roda pemerintahan provinsi.',
                                        'gambar_provinsi' => 'Bangka Blitung-01.png']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Jambi',
                                        'namaButton_provinsi' => 'jambi',
                                        'deskripsi_provinsi' => 'Jambi (Jawi: جامبي) adalah sebuah provinsi di Indonesia yang terletak di pesisir timur di bagian tengah pulau Sumatra, ibu kotanya berada di kota Jambi. Provinsi Jambi adalah nama provinsi di Indonesia yang ibu kotanya memiliki nama sama dengan provinsi selain Bengkulu, Daerah Khusus Ibukota Jakarta, Daerah Istimewa Yogyakarta, dan Gorontalo.',
                                        'gambar_provinsi' => 'Jambi-01.png']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Bengkulu',
                                        'namaButton_provinsi' => 'bengkulu',
                                        'deskripsi_provinsi' => 'Bengkulu (bahasa Inggris: Bencoolen, Aksara Ulu: ꥏꤷꥍꤰꥈꤾꥈ adalah sebuah provinsi yang berada di pulau Sumatera, Indonesia. Ibu kota provinsi Bengkulu ada di kota Bengkulu. Provinsi ini terletak di bagian Barat Daya Pulau Sumatera, yang berbatasan dengan provinsi Sumatera Barat, Jambi, Sumatera Selatan dan Lampung di wilayah sekitarnya. Pada tahun 2020, jumlah penduduk provinsi ini sebanyak 2.091.314 jiwa, dengan kepadatan 105 jiwa/km².',
                                        'gambar_provinsi' => 'Bengkulu-01.png']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Sumatra Selatan',
                                        'namaButton_provinsi' => 'sumatraSelatan',
                                        'deskripsi_provinsi' => 'Sumatra Selatan (Jawi: سومترا سلاتن) adalah provinsi di Indonesia yang terletak di bagian Selatan pulau Sumatra. Ibu kota Sumatra Selatan berada di kota Palembang, dan pada tahun 2021 penduduk provinsi ini berjumlah 8.550.849 jiwa.[2] Secara geografis, Sumatra Selatan berbatasan dengan provinsi Jambi di utara, provinsi Kepulauan Bangka-Belitung di timur, provinsi Lampung di selatan dan Provinsi Bengkulu di barat. Provinsi ini kaya akan sumber daya alam, seperti minyak bumi, gas alam dan batu bara. Selain itu, ibu kota provinsi Sumatra Selatan, Palembang, telah terkenal sejak dahulu karena menjadi pusat Kerajaan Sriwijaya.',
                                        'gambar_provinsi' => 'Sumsel-01.png']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Lampung',
                                        'namaButton_provinsi' => 'lampung',
                                        'deskripsi_provinsi' => 'Lampung (aksara Lampung: ) adalah sebuah provinsi paling selatan di pulau Sumatra, Indonesia, dengan ibu kota atau pusat pemerintahan berada di kota Bandar Lampung [8]. Provinsi ini memiliki dua kota yaitu kota Bandar Lampung dan kota Metro serta 13 kabupaten. Posisi provinsi Lampung secara geografis di sebelah Barat berbatasan dengan Samudra Hindia, di sebelah Timur dengan Laut Jawa, di sebelah Utara berbatasan dengan provinsi Sumatra Selatan, dan di sebelah Selatan berbatasan dengan Selat Sunda.',
                                        'gambar_provinsi' => 'Lampung-01.png']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Banten',
                                        'namaButton_provinsi' => 'banten',
                                        'deskripsi_provinsi' => 'Banten (bahasa Sunda: aksara Sunda: ᮘᮔ᮪ᮒᮨᮔ᮪, Cacarakan: ꦧꦤ꧀ꦠꦼꦤ꧀, Pegon: بانتٓن) adalah sebuah provinsi di Pulau Jawa, Indonesia. Provinsi ini merupakan provinsi yang paling barat di Pulau Jawa. Provinsi ini pernah menjadi bagian dari provinsi Jawa Barat, tetapi provinsi ini menjadi wilayah pemekaran sejak tahun 2000, dengan keputusan Undang-Undang Nomor 23 Tahun 2000. Ibukota dan pusat pemerintahannya berada di Kota Serang. Suku aslinya adalah suku Sunda Banten yang berada di wilayah Kabupaten Serang bagian selatan, Kabupaten Pandeglang,',
                                        'gambar_provinsi' => 'Banten-01.png']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'DKI Jakarta',
                                        'namaButton_provinsi' => 'jakarta',
                                        'deskripsi_provinsi' => 'Jakarta (pengucapan bahasa Indonesia: [dʒaˈkarta] ( simak)), atau secara resmi bernama Daerah Khusus Ibukota Jakarta (disingkat DKI Jakarta) atau Jakarta Raya adalah ibu kota negara dan kota terbesar di Indonesia. Jakarta merupakan satu-satunya kota di Indonesia yang memiliki status setingkat provinsi. Jakarta terletak di pesisir bagian barat laut Pulau Jawa. Dahulu pernah dikenal dengan beberapa nama di antaranya Sunda Kelapa, Jayakarta, dan Batavia. Jakarta juga mempunyai julukan The Big Durian karena dianggap kota yang sebanding New York City (Big Apple) di Indonesia',
                                        'gambar_provinsi' => 'DKI Jakarta-01.png']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Jawa Barat',
                                        'namaButton_provinsi' => 'jawaBarat',
                                        'deskripsi_provinsi' => 'Jawa Barat (disingkat Jabar, bahasa Sunda: ᮏᮝ ᮊᮥᮜᮧᮔ᮪, Pegon: ڤرَوفينسي جاوا كولَون, Cacarakan: ꦗꦮ​ꦏꦸꦭꦺꦴꦤ꧀, translit. Jawa Kulon) adalah sebuah provinsi di Indonesia, ibu kotanya berada di kota Bandung. Pada tahun 2020 penduduk provinsi Jawa Barat berjumlah 48.274.162 jiwa, dengan kepadatan 1.365 jiwa/km2',
                                        'gambar_provinsi' => 'Jabar-01.png']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Jawa Tengah',
                                        'namaButton_provinsi' => 'jawaTengah',
                                        'deskripsi_provinsi' => 'Jawa Tengah (disingkat Jateng, bahasa Jawa: ꦗꦮꦶ​ꦠꦼꦔꦃ, translit. Jawi Tengah) adalah sebuah provinsi Indonesia yang terletak di bagian tengah Pulau Jawa. Ibu kotanya adalah Semarang. Provinsi ini berbatasan dengan Provinsi Jawa Barat di sebelah barat, Samudra Hindia dan Daerah Istimewa Yogyakarta di sebelah selatan, Jawa Timur di sebelah timur, dan Laut Jawa di sebelah utara. Luas wilayahnya 32.800,69 km², atau sekitar 28,94% dari luas pulau Jawa. Provinsi Jawa Tengah juga meliputi Pulau Nusakambangan di sebelah selatan (dekat dengan perbatasan Jawa Barat), serta Kepulauan Karimun Jawa di Laut Jawa. Penduduk Jawa Tengah berdasarkan Badan Pusat Statistik tahun 2021 berjumlah 36.516.035 jiwa dengan kepadatan 1.113,00 jiwa/km².',
                                        'gambar_provinsi' => 'JATENG-01.png']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Jogjakarta',
                                        'namaButton_provinsi' => 'yogyakarta',
                                        'deskripsi_provinsi' => 'Daerah Istimewa Yogyakarta (disingkat DIY, bahasa Jawa: ꦝꦲꦺꦫꦃ​ꦆꦱ꧀ꦠꦶꦩꦺꦮ​ꦔꦪꦺꦴꦒꦾꦏꦂꦠ, translit. Dhaérah Istiméwa Ngayogyakarta, pengucapan bahasa Jawa: [ŋajogjɔˈkart̪ɔ]) adalah Daerah Istimewa setingkat provinsi di Indonesia yang merupakan peleburan Negara Kesultanan Yogyakarta dan Negara Kadipaten Paku Alaman. Daerah Istimewa Yogyakarta terletak di bagian selatan Pulau Jawa, dan berbatasan dengan Provinsi Jawa Tengah dan Samudera Hindia. Daerah Istimewa yang memiliki luas 3.185,80 km2 ini terdiri atas satu kota, dan empat kabupaten, yang terbagi lagi menjadi 78 kapanewon/kemantren, dan 438 kalurahan/kelurahan. Menurut sensus penduduk 2010 memiliki populasi 3.452.390 jiwa dengan proporsi 1.705.404 laki-laki, dan 1.746.986 perempuan, serta memiliki kepadatan penduduk sebesar 1.084 jiwa per km2',
                                        'gambar_provinsi' => 'Jogja-01.png']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Jawa Timur',
                                        'namaButton_provinsi' => 'jawaTimur',
                                        'deskripsi_provinsi' => 'Jawa Timur (disingkat Jatim, bahasa Jawa: Hanacaraka: ꧋ꦗꦮꦮꦺꦠꦤ꧀, Pegon: جاوا وَيتان, translit. Jawa Wétan, bahasa Madura: Jhâbâ Tèmor, Pegon: جْاْباْ تَيمَور) adalah sebuah provinsi di bagian timur Pulau Jawa, Indonesia. Ibu kota Jawa Timur ialah kota Surabaya. Luas wilayahnya yakni 47.803,49 km², dengan jumlah penduduk sebanyak 40.665.696 jiwa (2020) dan kepadatan penduduk 851 jiwa/km2',
                                        'gambar_provinsi' => 'Jawa Timur-01.png']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Bali',
                                        'namaButton_provinsi' => 'bali',
                                        'deskripsi_provinsi' => 'Bali (bahasa Bali: aksara Bali: ᬩᬮᬶ) adalah sebuah provinsi di Indonesia yang ibu kotanya bernama Denpasar. Bali juga merupakan salah satu pulau di Kepulauan Nusa Tenggara. Di awal kemerdekaan Indonesia, pulau ini termasuk dalam Provinsi Sunda Kecil yang beribu kota di Singaraja, dan kini terbagi menjadi 3 provinsi, yakni Bali, Nusa Tenggara Barat, dan Nusa Tenggara Timur.[9][10] Pada tahun 2020, penduduk provinsi Bali berjumlah 4.317.404 jiwa, dengan kepadatan 747 jiwa/km2.',
                                        'gambar_provinsi' => 'Bali-01.png']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'NTB',
                                        'namaButton_provinsi' => 'NTB',
                                        'deskripsi_provinsi' => 'Nusa Tenggara Barat (disingkat NTB) ialah sebuah provinsi di Indonesia yang berada di bagian Barat Kepulauan Nusa Tenggara. Ibu kota provinsi ini berada di kota Mataram. Nusa Tenggara Barat memiliki 8 Kabupaten dan 2 Kota, termasuk kota Mataram. Pada tahun 2020, penduduk Nusa Tenggara Barat berjumlah 5.320.092 jiwa, dengan kepadatan 264 jiwa/km2',
                                        'gambar_provinsi' => 'NTB-01.png']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'NTT',
                                        'namaButton_provinsi' => 'NTT',
                                        'deskripsi_provinsi' => 'Nusa Tenggara Timur (disingkat NTT) adalah sebuah provinsi di Indonesia yang meliputi bagian timur Kepulauan Nusa Tenggara. Provinsi ini memiliki ibu kota di Kota Kupang dan memiliki 22 kabupaten/kota. Provinsi ini berada di Sunda Kecil.[7][8] Tahun 2020, penduduk provinsi ini berjumlah 5.325.566 jiwa, dengan kepadatan 111 jiwa/km2.',
                                        'gambar_provinsi' => 'NTT-01.png']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Kalimantan Barat',
                                        'namaButton_provinsi' => 'kalimantanBarat',
                                        'deskripsi_provinsi' => 'Kalimantan Barat (disingkat Kalbar) adalah sebuah provinsi di Indonesia, yang berada di pulau Kalimantan, dengan ibu kota atau pusat pemerintahan berada di kota Pontianak.[6] Luas wilayah provinsi Kalimantan Barat adalah 147.307,00 km² (7,53% luas Indonesia).[7] Kalimantan Barat merupakan provinsi terluas keempat di Indonesia setelah Papua, Kalimantan Timur dan Kalimantan Tengah.[8] Pada tahun 2020, penduduk Kalimantan Barat berjumlah 5.414.390 jiwa, dengan kepadatan 37 jiwa/km2.',
                                        'gambar_provinsi' => 'Kalbar-01.png']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Kalimantan Tengah',
                                        'namaButton_provinsi' => 'kalimantanTengah',
                                        'deskripsi_provinsi' => 'Kalimantan Tengah (disingkat Kalteng) adalah salah satu provinsi di Indonesia yang terletak di Pulau Kalimantan. Ibu kotanya adalah Kota Palangka Raya. Berdasarkan sensus tahun 2010, provinsi ini memiliki populasi 2.202.599 jiwa, yang terdiri atas 1.147.878 laki-laki dan 1.054.721 perempuan. Data BPS Kalimantan Tengah tahun 2021 menunjukkan penduduk provinsi ini tahun 2020 bertambah menjadi 2.670.00 (Laki-laki 1.385.700 jiwa dan perempuan 1.284.300 jiwa).[2] Kalimantan Tengah mempunyai 13 kabupaten dan 1 kota.',
                                        'gambar_provinsi' => 'KalTeng-01.png']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Kalimantan Timur',
                                        'namaButton_provinsi' => 'kalimantanTimur',
                                        'deskripsi_provinsi' => 'Kalimantan Timur (disingkat Kaltim) adalah sebuah provinsi Indonesia di Pulau Kalimantan bagian ujung timur yang berbatasan dengan Malaysia, Kalimantan Utara, Kalimantan Tengah, Kalimantan Selatan, Kalimantan Barat, dan Sulawesi. Luas total Kaltim adalah 127.346,92 km² dan populasi sebesar 3.793.152 jiwa (2020).[1] Kalimantan Timur merupakan wilayah dengan kepadatan penduduk terendah keempat di nusantara. Ibu kota provinsi ini adalah kota Samarinda.',
                                        'gambar_provinsi' => 'KalTim-01.png']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Sulawesi Barat',
                                        'namaButton_provinsi' => 'sulawesiBarat',
                                        'deskripsi_provinsi' => "Sulawesi Barat (disingkat Sulbar) adalah provinsi ke-33 dalam negara Indonesia yang dibentuk pada tahun 2004. Letak Sulawesi Barat di Pulau Sulawesi dengan garis lintang 00045'59'' - 03034'00'' Lintang Selatan dan 118048'59'' - 119055'06'' Bujur Timur. Perbatasan wilayah Sulawesi Barat yaitu Sulawesi Tengah di bagian utara, Sulawesi Selatan di bagian Timur dan Selatan dan Selat Makassar di bagian Barat. Pada tahun 2021, penduduk Sulawesi Barat berjumlah 1.436.842 jiwa dengan kepadatan 85,59 jiwa/km2.",
                                        'gambar_provinsi' => 'SulBar-01.png']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Sulawesi Selatan',
                                        'namaButton_provinsi' => 'sulawesiSelatan',
                                        'deskripsi_provinsi' => "Sulawesi Selatan (disingkat Sulsel, Lontara: ᨔᨘᨒᨓᨙᨔᨗ ᨔᨛᨒᨈ ) adalah sebuah provinsi di Indonesia yang terletak di bagian selatan pulau Sulawesi. Pusat pemerintahan atau ibu kota provinsi berada di kota Makassar. Pada tahun 2021, penduduk Sulawesi Selatan berjumlah 9.139.531 jiwa, dengan kepadatan 195,63 jiwa/km². Indeks Pembangunan Manusia (IPM) Sulawesi selatan pada tahun 2020 yakni 71,93 (Urutan ke-12 di Indonesia), urutan kedua di Sulawesi setelah provinsi Sulawesi Utara, yakni 72,93 (Urutan ke-6 di Indonesia).",
                                        'gambar_provinsi' => 'SulSel-01.png']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Sulawesi Tenggara',
                                        'namaButton_provinsi' => 'sulawesiTenggara',
                                        'deskripsi_provinsi' => "Sulawesi Tenggara (disingkat Sultra) adalah sebuah provinsi di Indonesia yang terletak bagian tenggara pulau Sulawesi dengan ibu kota Kendari. Provinsi Sulawesi Tenggara terletak di Jazirah Tenggara Pulau Sulawesi, secara geografis terletak di bagian selatan garis khatulistiwa di antara 02°45' – 06°15' Lintang Selatan dan 120°45' – 124°30' Bujur Timur serta mempunyai wilayah daratan seluas 38.140 km² (3.814.000 ha) dan perairan (laut) seluas 110.000 km² (11.000.000 ha).",
                                        'gambar_provinsi' => 'SulTeng-01.png']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Gorontaloa',
                                        'namaButton_provinsi' => 'gorontalo',
                                        'deskripsi_provinsi' => "Gorontalo (Jawi: غارانتالي) adalah sebuah provinsi di Indonesia yang terletak di bagian utara Pulau Sulawesi. Provinsi ini lahir pada tanggal 5 Desember 2000[7]. Kota Gorontalo kemudian ditetapkan sebagai ibukota Provinsi Gorontalo, sekaligus menjadi pusat pemerintahan, pusat ekonomi dan perdagangan terbesar di Kawasan Teluk Tomini.",
                                        'gambar_provinsi' => 'Gorontalo-01.png']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Sulawesi Utara',
                                        'namaButton_provinsi' => 'sulawesiUtara',
                                        'deskripsi_provinsi' => "Sulawesi Utara (disingkat Sulut) adalah salah satu provinsi yang terletak di ujung utara Pulau Sulawesi, Indonesia, dengan ibu kota terletak di kota Manado. Sulawesi Utara atau Sulut berbatasan dengan Laut Maluku dan Samudera Pasifik di sebelah timur, Laut Maluku dan Teluk Tomini di sebelah selatan, Laut Sulawesi dan provinsi Gorontalo di sebelah barat, dan provinsi Davao del Sur (Filipina) di sebelah utara. Penduduk Sulawesi Utara pada tahun 2021 berjumlah 2.655.970 jiwa, dan luas wilayahnya adalah 13.892,47 km2.",
                                        'gambar_provinsi' => 'SulUt-01.png']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Maluku Utara',
                                        'namaButton_provinsi' => 'malukuUtara',
                                        'deskripsi_provinsi' => "Maluku Utara (disingkat Malut) merupakan provinsi bagian Timur Indonesia yang resmi terbentuk pada 4 Oktober 1999 yang sebelumnya menjadi kabupaten dari provinsi Maluku bersama dengan Halmahera Tengah, berdasarkan UU RI Nomor 46 Tahun 1999 dan UU RI Nomor Tahun 2003. Jumlah penduduk Maluku Utara pada tahun 2021 mencapai 1.316.973 jiwa, dengan kepadatan penduduk sebanyak 41 jiwa/km2.",
                                        'gambar_provinsi' => 'Maluku Utara-01.png']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Maluku',
                                        'namaButton_provinsi' => 'maluku',
                                        'deskripsi_provinsi' => "Maluku adalah sebuah provinsi yang meliputi bagian selatan Kepulauan Maluku, Indonesia. Provinsi ini berbatasan dengan Laut Seram di Utara, Samudra Hindia dan Laut Arafura di Selatan, Papua di Timur, dan Sulawesi di Barat.[6] Ibu kota dan kota terbesarnya ialah kota Ambon. Provinsi Maluku berada di urutan ke-28 provinsi menurut jumlah penduduk di Indonesia, di mana pada tahun 2020, populasi provinsi Maluku berjumlah 1.848.923 jiwa.",
                                        'gambar_provinsi' => 'Maluku-01.png']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Papua',
                                        'namaButton_provinsi' => 'papua',
                                        'deskripsi_provinsi' => "Papua adalah provinsi yang terletak di bagian tengah Pulau Papua atau bagian paling timur wilayah Papua milik Indonesia. Belahan timurnya merupakan negara Papua Nugini. Provinsi Papua sebelumnya bernama Irian Jaya yang mencakup seluruh wilayah Pulau Papua. Sejak tahun 2003 dibagi menjadi dua provinsi, dengan bagian timur tetap memakai nama Papua sedangkan bagian baratnya memakai nama Papua Barat (Pabar). Provinsi Papua memiliki luas 312.224,37 km2 dan merupakan provinsi terbesar dan terluas pertama di Indonesia.",
                                        'gambar_provinsi' => 'Papua Timur-01.png']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Papua Barat',
                                        'namaButton_provinsi' => 'papuaBarat',
                                        'deskripsi_provinsi' => "Papua Barat (disingkat Pabar atau PB; dahulu Irian Jaya Barat) adalah sebuah provinsi Indonesia yang terletak di ujung barat Pulau Papua. Wilayah Papua Barat mencakup Semenanjung Domberai, Bomberai, Wandamen, serta Kepulauan Raja Ampat. Ibukota provinsi ini terletak di Manokwari dengan kota terbesarnya di Sorong. Provinsi ini dimekarkan dari Provinsi Papua melalui Undang-Undang Nomor 45 Tahun 1999.",
                                        'gambar_provinsi' => 'Papua Barat-01.png']);




        
        
        
        
        
        
        
        
        
        
        
        
    }
}
