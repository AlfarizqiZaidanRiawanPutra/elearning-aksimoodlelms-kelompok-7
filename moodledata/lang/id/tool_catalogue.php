<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_catalogue', language 'id', version '5.1'.
 *
 * @package     tool_catalogue
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aboutthiscourse'] = 'Tentang kursus ini';
$string['aboutthisprogram'] = 'Tentang program ini';
$string['addrange'] = 'Tambahkan rentang';
$string['all'] = 'Semua';
$string['allavailablecourses'] = 'Semua kursus yang tersedia';
$string['allowhtmltags'] = 'Izinkan tag HTML';
$string['aria:courseactions'] = 'Aksi kursus';
$string['cachedef_filters'] = 'Hasil pencarian dan filter katalog pembelajaran';
$string['catalogue'] = 'Katalog';
$string['catalogue:config'] = 'Konfigurasikan katalog pembelajaran';
$string['catalogueisdisabled'] = 'Katalog pembelajaran dinonaktifkan';
$string['cataloguesettings'] = 'Pengaturan katalog program dan kursus saya';
$string['cataloguesettingsforplugin'] = 'Pengaturan katalog untuk {$a}';
$string['cataloguesfilters'] = 'Filter katalog';
$string['categories'] = 'Kategori';
$string['categoriesdepthlimit'] = 'Jumlah maksimum tingkat kategori bersarang';
$string['categoriesdepthlimit_desc'] = 'Jumlah maksimum tingkat kategori yang disarangkan dalam pemilih kategori. Kursus yang berada di tingkat yang lebih tinggi akan tetap muncul dalam hasil pencarian.';
$string['categorieslimit'] = 'Jumlah maksimum kategori tingkat yang sama';
$string['categorieslimit_desc'] = 'Jumlah maksimum kategori dengan tingkat yang sama dalam pemilih kategori. Kategori akan ditampilkan dalam urutan yang sama seperti yang ditetapkan di halaman Manajemen kursus. Jika ada lebih banyak kategori pada satu tingkat, kategori tidak akan ditampilkan dalam pemilih tetapi semua kursus akan terlihat dalam hasil pencarian.';
$string['certifications'] = 'Sertifikasi';
$string['certificationstatuscertified'] = 'Sertifikasi \'<strong>{$a->name}</strong>\' telah selesai';
$string['certificationstatuscertifiedwithdate'] = 'Sertifikasi \'<strong>{$a->name}</strong>\' telah selesai. Sertifikasi akan kedaluwarsa pada \'<strong>{$a->date}</strong>\'';
$string['certificationstatusexpired'] = 'Sertifikasi \'<strong>{$a->name}</strong>\' kedaluwarsa pada {$a->date}';
$string['certificationstatusopen'] = 'Sertifikasi \'<strong>{$a->name}</strong>\' tidak memiliki tanggal jatuh tempo';
$string['certificationstatusopenwithdate'] = 'Selesaikan program ini sebelum \'<strong>{$a->date}</strong>\' untuk mendapatkan sertifikasi \'<strong>{$a->name}</strong>\'';
$string['certificationstatusoverdue'] = 'Sertifikasi \'<strong>{$a->name}</strong>\' jatuh tempo pada \'<strong>{$a->date}</strong>\'';
$string['clearall'] = 'Hapus semua';
$string['complete'] = 'Selesai';
$string['completeatleast'] = 'Selesaikan setidaknya {$a}';
$string['coursecoverhelp'] = 'Kursus ini adalah bagian dari program \'{$a}\'';
$string['coursecoverhelpmultiprogram'] = 'Kursus ini merupakan bagian dari beberapa program';
$string['coursecoverhelptext'] = '<ul><li>Ini hanyalah salah satu kursus dalam program yang lebih besar</li><li>Kursus baru dapat tersedia setelah menyelesaikan kursus ini</li></ul>';
$string['coursedisplayduelimit'] = 'Tampilkan hari tersisa untuk kursus';
$string['coursedisplayduelimit_desc'] = 'Jumlah hari yang akan digunakan pengguna untuk melihat pengingat kecil (sisa X hari) di samping nama kursus. Misalnya, jika ditetapkan ke 14, pengingat akan terlihat selama 14 hari sebelum kursus mencapai tanggal penyelesaiannya. Jika ada banyak tanggal penyelesaian yang berbeda, sistem akan mengevaluasi tanggal yang paling dekat berikutnya. Tetapkan ke 0 untuk menonaktifkan fungsi ini.';
$string['coursefiles'] = 'Berkas kursus';
$string['courseimage'] = 'Gambar kursus';
$string['courseimage_help'] = 'Gambar kursus.';
$string['coursenotavailable'] = 'Kursus tidak tersedia';
$string['courses'] = 'Kursus';
$string['coursesearch'] = 'Pencarian kursus';
$string['coursesperpage_frontpage'] = 'Jumlah kursus per halaman, halaman beranda situs';
$string['coursesperpage_frontpage_desc'] = 'Jumlah kursus yang akan ditampilkan pada beranda situs apabila "Daftar kursus" disertakan dalam pengaturan item beranda situs.';
$string['coursesperpage_main'] = 'Jumlah kursus per halaman, halaman katalog utama';
$string['coursesperpage_main_desc'] = 'Jumlah kursus yang akan ditampilkan pada halaman katalog utama sebelum kategori dipilih atau permintaan pencarian diberikan dan sebelum filter apa pun diterapkan.';
$string['coursesperpage_search'] = 'Jumlah kursus per halaman, hasil pencarian';
$string['coursesperpage_search_desc'] = 'Jumlah kursus yang akan ditampilkan dalam hasil pencarian kursus atau saat kategori dipilih.';
$string['dates'] = 'Tanggal';
$string['daysleft'] = 'Tersisa {$a} hari';
$string['defaultsortorder'] = 'Urutan sortir bawaan';
$string['deleterange'] = 'Hapus rentang';
$string['display'] = 'Tampilkan';
$string['displaycourseinfomodal'] = 'Tampilkan modal info kursus';
$string['displayfieldlabel'] = 'Tampilkan nama kolom';
$string['displayfields_desc'] = 'Harap pilih semua kolom yang perlu ditampilkan sebagai filter dan susun dalam urutan yang sesuai. Tidak semua jenis kolom kustom dapat digunakan dalam filter.<br>Perubahan pada tabel di atas disimpan secara otomatis.';
$string['displayfields_list'] = 'Kolom yang akan ditampilkan dalam tampilan \'daftar\' (terperinci) dari katalog pembelajaran';
$string['displayfields_tiles'] = 'Kolom yang akan ditampilkan dalam tampilan \'ubin\' (padat) katalog pembelajaran';
$string['displayfieldscard_desc'] = 'Silakan pilih semua kolom yang akan ditampilkan di kartu kursus dan atur dalam urutan yang sesuai.<br>Perubahan pada tabel di atas disimpan secara otomatis.';
$string['displayfieldssettingsheader'] = 'Kolom yang ditampilkan dalam tampilan \'{$a->view}\' ({$a->type}) dari katalog pembelajaran';
$string['displayfieldview_list'] = 'daftar';
$string['displayfieldview_tiles'] = 'ubin';
$string['displayfieldviewtype_list'] = 'terperinci';
$string['displayfieldviewtype_tiles'] = 'kompak';
$string['displayforeverybody'] = 'Tampilkan untuk semua orang';
$string['displayfornotadmin'] = 'Hanya ditampilkan untuk pengguna non admin';
$string['displayforstudentsandguests'] = 'Hanya ditampilkan selama akses tamu dan untuk siswa';
$string['displaynever'] = 'Jangan pernah tampilkan';
$string['displayprogramcoverpage'] = 'Tampilkan halaman sampul program';
$string['displaysummaryasis'] = 'Tampilkan apa adanya';
$string['displaysummarynohtml'] = 'Tampilkan tanpa HTML';
$string['displaysummarynone'] = 'Jangan tampilkan';
$string['displaywhenzeroprice'] = 'Tampilkan saat nol';
$string['displaywhenzeroprice_help'] = 'Cara menampilkan harga saat ada pengaya pendaftaran mandiri yang tersedia tanpa pembayaran.

Jika dibiarkan kosong, kolom harga tidak akan ditampilkan untuk kursus gratis.';
$string['dontshowagain'] = 'Jangan tampilkan pesan ini lagi';
$string['duedate'] = 'Urutkan berdasarkan tanggal kesimpulan';
$string['duedateinfo'] = 'Jatuh tempo dalam 1 hari';
$string['duedateinfodays'] = 'Jatuh tempo dalam {$a} hari';
$string['duedatex'] = '<strong>Tanggal jatuh tempo:</strong> {$a}';
$string['editfilterranges'] = 'Sunting rentang filter';
$string['editlabel'] = 'Sunting label';
$string['enablelearningcatalogue'] = 'Aktifkan katalog pembelajaran';
$string['enablelearningcatalogue_desc'] = 'Aktifkan pengaturan ini untuk memberikan akses ke \'Katalog\' di navigasi utama kepada semua pengguna. Ini memungkinkan mereka menemukan, memfilter, dan mendaftar di kursus dengan mudah. Katalog Moodle Workplace akan menggantikan halaman kursus standar untuk semua pengguna.
<br><br>Untuk detail selengkapnya, lihat <a href="{$a}">halaman dokumentasi</a>.';
$string['enddate'] = 'Tanggal akhir';
$string['enddatex'] = '<strong>Tanggal akhir:</strong> {$a}';
$string['enrolmentplugin'] = 'Pengaya pendaftaran';
$string['errornopermissionviewcoursecover'] = 'Tidak ada izin untuk melihat halaman sampul kursus';
$string['errornopermissionviewprogram'] = 'Tidak ada izin untuk melihat program';
$string['featuredcustomfield'] = 'Kolom kustom unggulan';
$string['featuredcustomfield_desc'] = 'Jika kolom khusus yang dipilih ditandai sebagai \'dicentang\' dalam suatu kursus, kursus tersebut akan ditampilkan pada halaman utama katalog.';
$string['featuredlearning'] = 'Pembelajaran unggulan';
$string['featuredlearningdisabled'] = 'Bagian pembelajaran unggulan dinonaktifkan';
$string['featuredlearningsectionsummary'] = 'Deskripsi bagian unggulan';
$string['featuredlearningsectionsummary_desc'] = 'Teks ini akan ditampilkan di samping kursus unggulan di bagian \'Unggulan\' pada halaman utama katalog.';
$string['featuredlearningsectiontitle'] = 'Judul bagian unggulan';
$string['featuredlearningsectiontitle_default'] = 'Unggulan';
$string['featuredlearningsectiontitle_desc'] = 'Ganti judul bagian \'Unggulan\' dalam katalog. Jika dibiarkan kosong, judul default \'Unggulan\' akan ditampilkan.';
$string['fieldlabel'] = 'Nama kolom';
$string['fieldonlyvisibleincatalogue'] = 'Kolom ini memiliki visibilitas terbatas pada halaman informasi kursus dan pendaftaran, namun masih dapat tersedia dalam katalog pembelajaran. Jika diaktifkan di sini, kolom ini akan terlihat oleh semua orang.';
$string['filterfields'] = 'Kolom yang akan ditampilkan dalam filter katalog pembelajaran';
$string['formerror_maximumminimumempty'] = 'Berikan nilai minimum atau maksimum atau aktifkan \'Sertakan nilai kosong\'';
$string['formerror_minimumgreaterthanmaximum'] = 'Nilai minimum tidak boleh lebih besar dari nilai maksimum';
$string['formerror_rangeempty'] = 'Filter harus memiliki setidaknya satu rentang';
$string['free'] = 'Bebas';
$string['headerdisplaysettings'] = 'Format tampilan';
$string['hiddencustomfield'] = 'Kolom kustom tersembunyi';
$string['hiddencustomfield_desc'] = 'Jika kolom khusus yang dipilih ditandai sebagai \'dicentang\' dalam suatu item, item tersebut akan disembunyikan dalam katalog.';
$string['hiddenfromlearners'] = 'Tersembunyi dari pelajar';
$string['hidefieldname'] = 'Sembunyikan nama kolom';
$string['htmltagsall'] = 'Izinkan semua tag HTML';
$string['htmltagsnone'] = 'Hapus semua tag HTML';
$string['htmltagssafe'] = 'Hanya tag HTML yang aman';
$string['image'] = 'Gambar';
$string['includeemptyvalues'] = 'Sertakan nilai kosong';
$string['incomplete'] = 'Tidak selesai';
$string['information'] = 'Informasi';
$string['items'] = 'Item';
$string['itemsperpage_frontpage'] = 'Jumlah item per halaman, halaman beranda situs';
$string['itemsperpage_frontpage_desc'] = 'Jumlah item yang akan ditampilkan di halaman beranda situs ketika "Daftar kursus" disertakan dalam pengaturan Item beranda situs.';
$string['itemsperpage_main'] = 'Jumlah item per halaman, halaman katalog utama';
$string['itemsperpage_main_desc'] = 'Jumlah item yang akan ditampilkan di halaman katalog utama sebelum kategori dipilih atau kueri pencarian diberikan dan sebelum filter apa pun diterapkan.';
$string['itemsperpage_search'] = 'Jumlah item per halaman, hasil pencarian';
$string['itemsperpage_search_desc'] = 'Jumlah item yang akan ditampilkan dalam hasil pencarian atau saat kategori dipilih.';
$string['iunderstand'] = 'saya mengerti';
$string['lastaccess'] = 'Urutkan berdasarkan akses terakhir';
$string['learningcataloguesettings'] = 'Pengaturan katalog pembelajaran';
$string['maximumvalue'] = 'Nilai maksimum';
$string['maximumvalue_help'] = 'Tentukan nilai tertinggi untuk rentang ini atau biarkan kosong agar tidak ada batas.';
$string['minimumvalue'] = 'Nilai minimum';
$string['minimumvalue_help'] = 'Tentukan nilai terendah untuk rentang ini atau biarkan kosong agar tidak ada batas.';
$string['moreinfo'] = 'Informasi lebih lanjut';
$string['mycourses'] = 'Kursus saya';
$string['name'] = 'Urutkan berdasarkan nama';
$string['noavailablecourses'] = 'Anda tidak memiliki kursus yang tersedia.<br>Silakan hubungi administrator situs Anda untuk bantuan.';
$string['noresultsfor'] = 'Tidak ada hasil untuk \'{$a}\'';
$string['notavailableunless'] = 'Tidak tersedia kecuali \'{$a}\' tersedia';
$string['notavailableuntil'] = 'Tidak tersedia sampai \'{$a}\' selesai';
$string['notnow'] = 'Tidak sekarang';
$string['notset'] = 'Belum diatur';
$string['notspecified'] = 'Tidak ditentukan';
$string['numberequalorgreaterthan'] = 'Lebih besar dari atau sama';
$string['numberequalorlessthan'] = 'Kurang dari atau sama dengan';
$string['numbergreaterthan'] = 'Lebih besar dari';
$string['numberlessthan'] = 'Kurang dari';
$string['overdue'] = 'Terlambat';
$string['overvalue'] = 'Di atas {$a}';
$string['pagealastpage'] = 'Halaman {$a}, halaman terakhir';
$string['pageamorepagesahead'] = 'Halaman {$a}, lebih banyak halaman ke depan';
$string['pagination'] = 'Paginasi';
$string['pluginname'] = 'Katalog pembelajaran';
$string['price'] = 'Harga dari pengaya pendaftaran';
$string['price_currency'] = 'Mata uang';
$string['price_currency_help'] = 'Masukkan kode mata uang 3 huruf. Pastikan kode ini cocok dengan kode mata uang yang digunakan dalam metode pendaftaran yang tersedia untuk kursus tersebut.';
$string['price_enrolplugins'] = 'Pengaya pendaftaran';
$string['price_enrolplugins_help'] = '<p>Pilih metode pendaftaran untuk memeriksa dari metode yang memungkinkan siswa mendaftarkan diri mereka dalam kursus. Jika terdapat contoh yang cocok dengan mata uang yang ditentukan, harga akan diekstraksi secara otomatis. Contoh tanpa mata uang (misalnya, \'Pendaftaran mandiri\') akan dianggap memiliki harga \'0\'.</p>
<p>Jika terdapat beberapa contoh metode yang memungkinkan siswa mendaftarkan diri mereka dalam kursus, harga terendah akan ditampilkan.</p>
<p>Catatan: Uji pengaya pendaftaran add-on secara menyeluruh sebelum mengaktifkannya, karena pengaya tersebut dapat menyimpan data secara berbeda, yang memengaruhi ekstraksi harga.</p>';
$string['pricecustomfield'] = 'Kolom kustom harga';
$string['pricecustomfield_desc'] = 'Kolom kustom yang digunakan untuk harga di katalog.';
$string['privacy:metadata:preference:tool_catalogue_collapse_recently_accessed_courses'] = 'Apakah akan menciutkan bagian "Kursus yang baru diakses"';
$string['privacy:metadata:preference:tool_catalogue_hide_program_cover_help'] = 'Apakah akan menampilkan bantuan sampul program';
$string['privacy:metadata:preference:tool_catalogue_my_courses_filter'] = 'Apakah akan memfilter program/kursus berdasarkan semua/kursus/program/lengkap/tidak lengkap';
$string['privacy:metadata:preference:tool_catalogue_my_courses_sort'] = 'Apakah akan mengurutkan program/kursus berdasarkan nama/tanggal jatuh tempo/akses terakhir';
$string['privacy:metadata:showprogramcoverhelp'] = 'Apakah akan menampilkan bantuan sampul program';
$string['privacy:request:preference:set'] = 'Nilai dari pengaturan \'{$a->name}\' adalah \'{$a->value}\'';
$string['proceedtocourse'] = 'Lanjut ke konten kursus';
$string['proceedtoprogram'] = 'Lanjut ke konten program';
$string['program'] = 'Program';
$string['programdisplayduelimit'] = 'Tampilkan hari tersisa hingga program tersebut jatuh tempo';
$string['programdisplayduelimit_desc'] = 'Jumlah hari yang akan digunakan pengguna untuk melihat pengingat kecil (Jatuh tempo dalam X hari) di samping nama program. Misalnya, jika ditetapkan ke 14, pengingat akan terlihat selama 14 hari sebelum program mencapai tanggal jatuh tempo. Tetapkan ke 0 untuk menonaktifkan fungsi ini.';
$string['programempty'] = 'Tidak ada kursus dalam program ini';
$string['programhelptext'] = '<ul><li>Program dapat berisi berbagai kursus</li><li>Selesaikan kursus untuk menyelesaikan program</li></ul>';
$string['programhelptitle'] = 'Apa itu program?';
$string['programimage_help'] = 'Gambar program.';
$string['programlink'] = 'Lihat detail "{$a}".';
$string['programlinksingle'] = 'Lihat detail program';
$string['programs'] = 'Program';
$string['programsectionhelp'] = '<p>Program adalah jalur pembelajaran terstruktur yang mencakup satu atau beberapa kursus. Untuk menyelesaikan suatu program, Anda harus menyelesaikan semua kursus yang diwajibkan.</p><p>Beberapa program mungkin memiliki urutan tertentu untuk menyelesaikan kursus, sementara yang lain memungkinkan Anda memilih urutannya. Periksa detail program Anda untuk mengetahui apa saja yang diwajibkan.</p>';
$string['programstructure'] = 'Struktur program';
$string['progress'] = '{$a}% selesai';
$string['progresscompleted'] = '{$a->completed} dari {$a->total} yang telah selesai';
$string['rangename'] = 'Nama rentang';
$string['rangename_help'] = 'Nama ini akan ditampilkan kepada pengguna di panel filter. Jika dibiarkan kosong, nama rentang akan dibuat secara otomatis dari batas rentang.';
$string['rangevalue'] = '{$a->min} - {$a->max}';
$string['recentlyaccessedcourses'] = 'Kursus yang baru diakses';
$string['reg_wpcatalogueashome'] = 'Katalog diaktifkan dan ditambahkan ke beranda situs ({$a})';
$string['reg_wpcatalogueenabled'] = 'Katalog diaktifkan ({$a})';
$string['reg_wpcataloguefeatured'] = 'Jika bagian kursus unggulan dalam katalog diaktifkan ({$a})';
$string['reg_wpcataloguehiddencourses'] = 'Apakah katalog memiliki pengaturan hiddencustomfield yang dikonfigurasi dengan beberapa kolom kustom ({$a})';
$string['reg_wpcataloguehighlighted'] = 'Jika penyorotan kursus unggulan diaktifkan ({$a})';
$string['reg_wpcataloguenumberofpricecustomfields'] = 'Jumlah bidang kustom dengan jenis bidang \'Harga dari pengaya pendaftaran\' ({$a})';
$string['reg_wpcataloguepublic'] = 'Katalog diaktifkan dan tersedia untuk tamu ({$a})';
$string['reindextaskname'] = 'Pengindeksan ulang item secara berkala untuk katalog';
$string['resultsfor'] = '{$a->count} hasil untuk \'{$a->keywords}\'';
$string['safehtmltags'] = 'Tag HTML aman di kolom ringkasan dan teks';
$string['safehtmltags_desc'] = 'Daftar tag HTML yang harus disimpan saat menampilkan ringkasan kursus atau bidang khusus kursus dalam katalog pembelajaran. Semua tag lainnya akan dihapus untuk memastikan bahwa ringkasan kursus tidak merusak tata letak katalog.<br>Perlu diketahui bahwa untuk ringkasan kursus, tag HTML mungkin tidak berfungsi dengan baik jika dipadukan dengan pengaturan \'Truncate\'.';
$string['searchfields'] = 'Kolom untuk mencari kata kunci';
$string['searchfields_desc'] = 'Silakan pilih semua bidang kursus tempat kata kunci harus dicari dan atur berdasarkan prioritas.<br>Perubahan pada tabel di atas disimpan secara otomatis.';
$string['searchmethod'] = 'Metode pencarian kursus';
$string['searchmethod_desc'] = 'Pilih metode yang akan digunakan untuk pencarian kursus. Beberapa metode mungkin memerlukan pengindeksan ulang secara berkala dan/atau konfigurasi tambahan.';
$string['searchmethod_extended'] = 'Pencarian lanjutan';
$string['searchmethod_simple'] = 'Pencarian sederhana';
$string['searchplaceholder'] = 'Cari kursus atau program';
$string['selectenrolmentmethod'] = 'Pilih metode pendaftaran';
$string['showcataloguecoursecategory'] = 'Tampilkan kategori kursus di kartu kursus';
$string['showcataloguecoursecategory_desc'] = 'Kategori kursus akan terlihat di setiap kartu kursus yang ditemukan di ‘Dasbor’, ‘Kursus saya’, dan beberapa blok.';
$string['showcoursedates'] = 'Tampilkan tanggal kursus dalam modal kursus';
$string['showcoursedates_desc'] = 'Tanggal kursus akan terlihat di modal kursus dan di tab informasi kursus.';
$string['showfeaturedsection'] = 'Tampilkan bagian unggulan dalam katalog';
$string['showfeaturedsection_desc'] = 'Jika diaktifkan, kursus unggulan akan ditampilkan di bagian mandiri di bagian atas halaman utama katalog.';
$string['showfieldname'] = 'Tampilkan nama kolom';
$string['showmore'] = 'Tampilkan {$a} lebih lanjut...';
$string['startdate'] = 'Tanggal mulai';
$string['startdatex'] = '<strong>Tanggal mulai:</strong> {$a}';
$string['todo'] = 'Agenda:';
$string['trainers'] = 'Pelatih';
$string['truncatesummary'] = 'Potong ringkasan kursus';
$string['truncatesummary_desc'] = 'Jumlah karakter maksimum yang akan ditampilkan dalam ringkasan kursus saat ditampilkan. Atur ke 0 agar tidak terpotong di sisi server. Ringkasan masih dapat dipersingkat dengan gaya CSS yang ditampilkan.<br>Pengaturan ini mengontrol teks yang dikirim dari server ke browser. Anda juga dapat memilih untuk memotong kolom individual secara langsung di browser menggunakan CSS khusus.';
$string['trydifferentskeyword'] = 'Coba gunakan kata kunci atau konfigurasi filter yang berbeda';
$string['undervalue'] = 'Di bawah {$a}';
$string['xcourses'] = '{$a} kursus';
