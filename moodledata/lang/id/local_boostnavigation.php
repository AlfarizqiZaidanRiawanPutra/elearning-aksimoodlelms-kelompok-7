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
 * Strings for component 'local_boostnavigation', language 'id', version '5.1'.
 *
 * @package     local_boostnavigation
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['inc_bottomnodes'] = 'simpul bawah';
$string['inc_bottomnodeslocation'] = 'bawah bagian utama di laci navigasi (mirip dengan simpul "administrasi situs")';
$string['inc_coursenode'] = 'simpul kursus';
$string['inc_coursenodes'] = 'simpul kursus';
$string['inc_coursenodeslocation'] = 'ke bagian kursus di laci navigasi (tempat simpul untuk topik kursus berada)';
$string['inc_custombottomnodes'] = 'simpul bawah kustom';
$string['inc_customcoursenodes'] = 'simpul kursus kustom';
$string['inc_customrootnodes'] = 'simpul akar kustom';
$string['inc_customwhoadmins'] = 'admin';
$string['inc_customwhousers'] = 'semua pengguna';
$string['inc_mycoursesrootnode'] = 'simpul akar kursus saya';
$string['inc_notselectedhomenode'] = 'tidak dipilih Beranda / Dasbor';
$string['inc_rootnode'] = 'simpul akar';
$string['inc_rootnodes'] = 'simpul akar';
$string['inc_rootnodeslocation'] = 'ke bagian utama di laci navigasi (tempat simpul "Kursus saya" dan lainnya berada)';
$string['inc_selectedhomenode'] = 'dipilih Beranda / Dasbor';
$string['mycoursesrootnodefilterhintenabledcourselist'] = 'Daftar kursus difilter berdasarkan:';
$string['mycoursesrootnodefilterhintenabledcurrentfilter'] = 'Filter kursus saat ini:';
$string['mycoursesrootnodefilterlink'] = 'Ubah filter';
$string['pluginname'] = 'Peningkatan navigasi Boost';
$string['privacy:metadata:preference:collapse'] = 'Status penciutan simpul navigasi di laci navigasi.';
$string['privacy:request:preference:collapse'] = 'Status penciutan simpul navigasi "{$a->nodename}" di laci navigasi adalah {$a->collapse}';
$string['setting_collapsecustomnodes'] = 'Ciutkan {$a->what} untuk {$a->who}';
$string['setting_collapsecustomnodes_desc'] = 'Mengaktifkan pengaturan ini akan memungkinkan pengguna untuk menciutkan {$a->what} untuk {$a->who}.<br /><em>Pengaturan ini hanya diproses ketika pengaturan simpul kustom yang sesuai memiliki setidaknya satu simpul kustom dengan setidaknya satu simpul anak yang ditambahkan.</em>';
$string['setting_collapsecustomnodesaccordion'] = 'Ciutkan {$a->what} untuk {$a->who} sebagai akordeon';
$string['setting_collapsecustomnodesaccordion_desc'] = 'Mengaktifkan pengaturan ini akan menciutkan {$a->what} untuk {$a->who} seperti akordeon.';
$string['setting_collapsecustomnodesdefault'] = 'Ciutkan {$a->what} untuk {$a->who} secara bawaan';
$string['setting_collapsecustomnodesdefault_desc'] = 'Mengaktifkan pengaturan ini akan menciutkan {$a->what} untuk {$a->who} secara bawaan.';
$string['setting_collapsecustomnodesicon'] = 'Menampilkan ikon simpul induk di {$a->what} untuk {$a->who}';
$string['setting_collapsecustomnodesicon_desc'] = 'Dengan pengaturan ini, Anda mengontrol apakah ikon simpul induk akan ditampilkan di {$a->what} untuk {$a->who} dan / atau apakah simpul induk akan mengindentasikan.';
$string['setting_collapsecustomnodessession'] = 'Ingat status penciutan {$a->what} untuk {$a->who} hanya untuk sesi saat ini';
$string['setting_collapsecustomnodessession_desc'] = 'Mengaktifkan pengaturan ini akan mengingat status penciutan {$a->what} untuk {$a->who} hanya untuk sesi pengguna saat ini.';
$string['setting_collapsemycoursesnodeperformancehint'] = 'Harap dicatat: Fitur ini hanya akan berfungsi jika pengaturan <a href="{$a->url}">navshowmycoursecategories</a> tidak aktif. Jika Anda mengaktifkan navshowmycoursecategories, pengaturan ini akan diabaikan dan tidak akan berfungsi.';
$string['setting_collapsenode'] = 'Ciutkan {$a->what} "{$a->which}"';
$string['setting_collapsenode_desc'] = 'Mengaktifkan pengaturan ini akan memungkinkan pengguna untuk menciutkan {$a->what} "{$a->which}".';
$string['setting_collapsenodeaccordionexplanation'] = 'Artinya, hanya satu simpul induk yang dapat diluaskan pada satu waktu. Jika simpul induk kedua diluaskan, simpul induk yang sedang diluaskan akan otomatis diciutkan. Jika pengaturan ini dinonaktifkan, beberapa simpul induk dapat diluaskan sekaligus.';
$string['setting_collapsenodedefault'] = 'Ciutkan {$a->what} "{$a->which}" secara bawaan';
$string['setting_collapsenodedefault_desc'] = 'Mengaktifkan pengaturan ini akan menciutkan {$a->what} "{$a->which}" secara bawaan.';
$string['setting_collapsenodeicon'] = 'Tampilkan ikon simpul induk di {$a->what} "{$a->which}"';
$string['setting_collapsenodeicon_desc'] = 'Dengan pengaturan ini, Anda mengontrol apakah ikon simpul induk akan ditampilkan di {$a->what} "{$a->which}" dan / atau apakah simpul induk ini akan mengindentasikan.';
$string['setting_collapsenodeicon_justindent'] = 'Jangan tampilkan ikon, tetapi indentasikan pada simpul induk yang dapat diciutkan';
$string['setting_collapsenodeicon_none'] = 'Jangan tampilkan ikon dan jangan indentasikan pada simpul induk yang dapat diciutkan';
$string['setting_collapsenodeicon_yes'] = 'Tampilkan ikon dan indentasikan pada simpul induk yang dapat diciutkan';
$string['setting_collapsenodesdefaultexplanation'] = 'Jika tidak, simpul tersebut akan diluaskan secara bawaan. Pengaturan ini hanya mengontrol nilai bawaan untuk setiap pengguna saat simpul tersebut diberikan untuk pertama kalinya.';
$string['setting_collapsenodesession'] = 'Ingat status penciutan {$a->what} "{$a->which}" hanya untuk sesi saat ini';
$string['setting_collapsenodesession_desc'] = 'Mengaktifkan pengaturan ini akan mengingat status penciutan {$a->what} "{$a->which}" hanya untuk sesi pengguna saat ini.';
$string['setting_collapsenodesheading'] = 'Ciutkan {$a->what} di laci navigasi Boost';
$string['setting_collapsenodessessionexplanation'] = 'Setelah pengguna tertentu keluar dan masuk selanjutnya, status penciutan akan diatur ulang ke nilai yang didefinisikan sebagai nilai bawaan di atas. Jika pengaturan ini dinonaktifkan, status penciutan untuk simpul ini akan tetap diingat setelah sesi pengguna berakhir.';
$string['setting_collapsenodestechnicalhint'] = 'Latar belakang teknis: Hal ini dilakukan dengan menambahkan beberapa kode JavaScript dan CSS ke halaman yang akan menampilkan atau menyembunyikan simpul tingkat kedua segera setelah pengguna mengklik simpul tersebut. Status penciutan simpul akan diproses di setiap sesi pengguna dan disimpan di preferensi pengguna masing-masing. Dengan demikian, simpul hanya akan disembunyikan dari laci navigasi saat waktu berjalan, tetapi akan tetap berada di pohon navigasi dan masih dapat diakses oleh bagian lain Moodle.';
$string['setting_customnodesusageadminsexample'] = 'Situs web Moodle.org | http://www.moodle.org | en, de <br />
Daftar pengguna Moodle |/admin/user.php';
$string['setting_customnodesusageadminsintro'] = 'Setiap baris terdiri dari judul tautan, URL tautan, dan bahasa yang didukung (opsional) - dipisahkan dengan karakter pipa. Setiap simpul khusus perlu ditulis di baris baru.';
$string['setting_customnodesusageadminsparameternote'] = 'Simpul kustom untuk admin diproses oleh fungsi yang sama dengan simpul kustom untuk pengguna. Oleh karena itu, selain parameter yang diberikan di atas, daftar parameter yang sama yang didukung oleh simpul kustom untuk pengguna juga didukung di sini. Silakan gunakan di sini jika Anda benar-benar membutuhkannya untuk skenario spesial, meskipun tidak didokumentasikan di sini demi kesederhanaan.';
$string['setting_customnodesusagechildnodes'] = 'Simpul kustom dapat disarangkan dengan satu tingkat hierarki, yaitu sebuah simpul kustom dapat memiliki simpul anak. Untuk membuat simpul anak alih-alih simpul induk, cukup beri awalan tanda hubung pada judul simpul kustom.';
$string['setting_customnodesusagechildnodesexample'] = 'Administrasi|/admin/index.php<br />
-Daftar pengguna Moodle|/admin/user.php<br />
-Kelola kursus|/course/management.php';
$string['setting_customnodesusagechildnodespleasenoterecursive'] = 'Jika simpul induk tidak ditampilkan karena pembatasan (bahasa, kohor, peran...) berlaku, simpul anaknya juga tidak akan ditampilkan.';
$string['setting_customnodesusagechildnodespleasenoteurl'] = 'Karena alasan teknis, simpul induk selalu memerlukan URL yang valid, meskipun simpul tersebut akan dibuat dapat diciutkan setelahnya.';
$string['setting_customnodesusageexamples'] = 'Contoh:';
$string['setting_customnodesusageparameterbeforenodedd'] = 'Pengaturan ini dapat digunakan untuk menentukan kunci simpul di atas tempat simpul kustom harus ditempatkan. Anda dapat menemukan kunci simpul dalam atribut HTML \'data-key\' dari simpul yang ingin Anda rujuk di sini. Jika terdapat sekumpulan simpul yang terdiri dari satu induk dan satu atau beberapa anak, pengaturan ini harus diberikan ke setiap simpul dalam kumpulan tersebut.<br/>Harap perhatikan bahwa Anda hanya dapat menggunakan kunci simpul sebelum dari konteks simpul tempat Anda menambahkan simpul tersebut. Misalnya, Anda dapat menggunakan \'privatefiles\', \'calendar\', atau \'contentbank\' dalam konteks simpul akar, atau Anda dapat menggunakan \'participants\' atau \'grades\' dalam konteks simpul kursus. Jika kunci simpul sebelum tidak diketahui atau tidak dapat diproses karena alasan yang tidak diketahui, simpul tersebut akan ditambahkan di akhir konteks simpul.<br />Harap perhatikan juga bahwa pengaturan ini dianggap sebagian eksperimental karena mungkin masih belum memungkinkan untuk menggunakan beberapa simpul sebagai simpul sebelum dengan pengaturan ini.';
$string['setting_customnodesusageparameterbeforenodedt'] = 'Sebelum kunci simpul (opsional):';
$string['setting_customnodesusageparameterclassdd'] = 'Pengaturan ini dapat digunakan untuk mengatur kelas CSS tambahan atau beberapa kelas ke simpul kustom.';
$string['setting_customnodesusageparameterclassdt'] = 'Kelas CSS (opsional):';
$string['setting_customnodesusageparametercohortdd'] = 'Pengaturan ini dapat digunakan untuk menampilkan simpul kustom hanya kepada anggota kohor yang ditentukan. Gunakan ID kohor, bukan nama kohor, untuk pengaturan ini. Pisahkan lebih dari satu kohor yang didukung dengan koma. Jika simpul kustom ingin ditampilkan kepada pengguna terlepas dari keanggotaan kohor apa pun, biarkan kolom ini kosong.';
$string['setting_customnodesusageparametercohortdt'] = 'Kohor yang didukung (opsional):';
$string['setting_customnodesusageparametericondd'] = 'Ikon ini akan digunakan sebagai ikon untuk simpul kustom, misalnya fa-flag. Gunakan pengenal ikon Font Awesome (<a href="https://fontawesome.com/v4.7.0/icons/">Lihat daftar ikon di fontawesome.com</a>) untuk mengidentifikasi ikon mana yang harus digunakan. Font Awesome disertakan dalam Boost, ikon Moodle klasik tidak didukung di sini. Jika Anda hanya ingin menggunakan ikon bullet standar untuk simpul kustom, biarkan kolom ini kosong. Simpul kustom yang tidak mendapatkan ikon bullet standar secara otomatis juga tidak bisa mendapatkan ikon kustom saat ini.';
$string['setting_customnodesusageparametericondt'] = 'Ikon (opsional):';
$string['setting_customnodesusageparameteriddd'] = 'Pengaturan ini dapat digunakan untuk mengatur atribut kunci data dari simpul kustom ke nilai tetap yang diberikan. Nilai kunci data yang diberikan dibersihkan hanya untuk karakter alfanumerik dan diawali oleh area simpul kustom tertentu, misalnya mengatur kunci data dari simpul di simpul terbawah untuk area admin ke \'my_node\' akan menghasilkan atribut kunci data yang diisi dengan \'localboostnavigationcustombottomadminsmynode\'. Pengaturan ini memberi Anda kemampuan untuk mereferensikan simpul kustom dalam pemilih CSS atau bahkan dalam kode JavaScript kustom. Mengatur kunci data yang sama ke beberapa simpul tidak dilarang di sini, tetapi perlu diingat bahwa atribut kunci data yang duplikat dapat menimbulkan masalah dalam jangka panjang. Jika kolom ini kosong, simpul kustom akan mendapatkan kunci data yang dibuat secara otomatis yang sebenarnya tidak cocok untuk referensi.';
$string['setting_customnodesusageparameteriddt'] = 'Atribut kunci data (opsional):';
$string['setting_customnodesusageparameterlanguagedd'] = 'Pengaturan ini dapat digunakan untuk menampilkan simpul kustom hanya kepada pengguna bahasa yang ditentukan. Pisahkan lebih dari satu bahasa yang didukung dengan koma. Jika simpul kustom ingin ditampilkan dalam semua bahasa, biarkan kolom ini kosong.';
$string['setting_customnodesusageparameterlanguagedt'] = 'Bahasa yang didukung (opsional):';
$string['setting_customnodesusageparameterlinkdd'] = 'Target tautan dapat ditentukan melalui URL web lengkap (misalnya https://moodle.org) atau jalur relatif dalam instansi Moodle Anda (misalnya /login/logout.php).';
$string['setting_customnodesusageparameterlinkdt'] = 'Tautan:';
$string['setting_customnodesusageparameterlogicaldd'] = 'Pengaturan ini dapat digunakan untuk mengubah kombinasi logis parameter opsional untuk kohor, peran, dan peran sistem. Jika Anda mengatur pengaturan ini ke AND atau membiarkannya kosong, parameter opsional untuk kohor, peran, dan peran sistem akan digabungkan secara logis dengan AND, dan simpul kustom hanya akan ditampilkan jika SEMUA parameter berlaku. Jika Anda mengatur pengaturan ini ke OR, parameter opsional untuk kohor, peran, dan peran sistem akan digabungkan secara logis dengan OR, dan simpul kustom akan ditampilkan jika APA PUN parameter berlaku. Ini memberi Anda fleksibilitas untuk membuat, misalnya, simpul yang ditampilkan kepada pengguna dengan peran kursus tertentu serta kepada pengguna dengan peran sistem tertentu seperti yang ditunjukkan pada contoh kami di atas.';
$string['setting_customnodesusageparameterlogicaldt'] = 'Operator kombinasi logika (opsional):';
$string['setting_customnodesusageparameterroledd'] = 'Pengaturan ini dapat digunakan untuk menampilkan simpul kustom hanya kepada anggota dengan peran yang ditentukan di setiap konteks. Gunakan nama pendek peran untuk pengaturan ini. Pisahkan lebih dari satu peran yang didukung dengan koma. Jika simpul kustom harus ditampilkan untuk pengguna apa pun perannya, biarkan kolom ini kosong.';
$string['setting_customnodesusageparameterroledt'] = 'Peran yang didukung (opsional):';
$string['setting_customnodesusageparameters'] = 'Informasi lebih lanjut tentang parameter:';
$string['setting_customnodesusageparametersystemroledd'] = 'Pengaturan ini dapat digunakan untuk menampilkan simpul kustom hanya kepada pengguna dengan peran yang ditentukan dalam konteks sistem. Gunakan nama pendek peran untuk pengaturan ini. Nama pendek \'admin\' didukung untuk memeriksa apakah pengguna adalah admin situs. Pisahkan lebih dari satu peran yang didukung dengan koma. Jika simpul kustom harus ditampilkan untuk pengguna terlepas dari peran sistem apa pun, biarkan kolom ini kosong.';
$string['setting_customnodesusageparametersystemroledt'] = 'Peran sistem yang didukung (opsional):';
$string['setting_customnodesusageparametertitledd'] = 'Teks ini akan ditampilkan sebagai teks / label yang dapat diklik pada simpul kustom.';
$string['setting_customnodesusageparametertitledt'] = 'Judul:';
$string['setting_customnodesusagepleasenote'] = 'Harap dicatat:';
$string['setting_customnodesusagepleasenotecheck'] = 'Jika simpul kustom tidak muncul di laci navigasi Boost, harap periksa apakah semua parameter wajib telah diatur dengan benar, apakah pengaturan bahasa opsional sesuai dengan bahasa pengguna Moodle Anda saat ini, dan apakah parameter opsional lainnya berlaku untuk pengguna Anda.';
$string['setting_customnodesusagepleasenotecss'] = 'Karena cara laci navigasi Boost dibangun di inti Moodle, simpul kustom tidak dapat dibangun 100% bebas. Menambahkan ID elemen HTML kustom atau atribut target untuk membuka tautan di jendela baru tidak memungkinkan.';
$string['setting_customnodesusagepleasenotelink'] = 'Parameter tautan dapat berisi tempat penampung, misalnya /course/edit.php?id={courseid} untuk membuat simpul yang tertaut ke halaman pengaturan kursus saat ini.';
$string['setting_customnodesusagepleasenotemultilang'] = 'Parameter judul dapat berisi <a href="https://docs.moodle.org/en/Multi-language_content_filter">string multibahasa</a> untuk membuat simpul dengan label tergantung pada bahasa pengguna saat ini.';
$string['setting_customnodesusagepleasenotephavailable'] = 'Tempat penampung yang tersedia adalah:';
$string['setting_customnodesusagepleasenotephcoursefullnamedd'] = 'Nama lengkap kursus';
$string['setting_customnodesusagepleasenotephcoursefullnamedt'] = '{coursefullname}:';
$string['setting_customnodesusagepleasenotephcourseiddd'] = 'ID (internal) kursus';
$string['setting_customnodesusagepleasenotephcourseiddt'] = '{courseid}:';
$string['setting_customnodesusagepleasenotephcourseshortnamedd'] = 'Nama pendek kursus';
$string['setting_customnodesusagepleasenotephcourseshortnamedt'] = '{courseshortname}:';
$string['setting_customnodesusagepleasenotepheditinglinkdd'] = 'Nilai \'nyala\' atau \'mati\' yang diperlukan untuk mengalihkan mode sunting';
$string['setting_customnodesusagepleasenotepheditinglinkdt'] = '{editingtoggle}:';
$string['setting_customnodesusagepleasenotepheditingtitledd'] = 'Nilai \'Nyalakan penyuntingan\' atau \'Matikan penyuntingan\' dari paket bahasa yang sedang digunakan';
$string['setting_customnodesusagepleasenotepheditingtitledt'] = '{editingtoggle}:';
$string['setting_customnodesusagepleasenotephexplanation'] = 'Tempat penampung dienkapsulasi dalam tanda kurung kurawal dan akan diganti secara otomatis saat simpul kustom dibuat.';
$string['setting_customnodesusagepleasenotephpagecontextiddd'] = 'ID konteks halaman saat ini';
$string['setting_customnodesusagepleasenotephpagecontextiddt'] = '{pagecontextid}:';
$string['setting_customnodesusagepleasenotephpagepathdd'] = 'Jalur URL halaman saat ini';
$string['setting_customnodesusagepleasenotephpagepathdt'] = '{pagepath}:';
$string['setting_customnodesusagepleasenotephsesskeydd'] = 'Sesskey yang digunakan pada URL aman';
$string['setting_customnodesusagepleasenotephsesskeydt'] = '{sesskey}:';
$string['setting_customnodesusagepleasenotephuserfullnamedd'] = 'Nama lengkap pengguna yang masuk';
$string['setting_customnodesusagepleasenotephuserfullnamedt'] = '{userfullname}:';
$string['setting_customnodesusagepleasenotephuseriddd'] = 'ID pengguna yang masuk (internal)';
$string['setting_customnodesusagepleasenotephuseriddt'] = '{userid}:';
$string['setting_customnodesusagepleasenotephuserusernamedd'] = 'Nama pengguna pengguna yang masuk';
$string['setting_customnodesusagepleasenotephuserusernamedt'] = '{userusername}:';
$string['setting_customnodesusagepleasenotepipes'] = 'Pemisahan karakter pipa untuk parameter opsional selalu diperlukan jika parameter tersebut berada di antara opsi lain. Ini berarti Anda harus memisahkan parameter dengan karakter pipa meskipun kosong. Lihat juga contoh untuk simpul kustom Fakultas matematika di atas.';
$string['setting_customnodesusagepleasenotetitle'] = 'Parameter judul dapat berisi tempat penampung, misalnya {coursefullname} untuk membuat simpul yang diberi label dengan nama lengkap kursus saat ini.';
$string['setting_customnodesusageusersexample'] = 'Situs web Moodle.org|http://www.moodle.org|en,de<br />
Universitas kami|http://www.our-university.edu<br />
Fakultas matematika|http://www.our-university.edu/math||math<br />
Buku panduan guru|http://www.our-university.edu/teacher-handbook|||editingteacher,teacher<br />
Informasi kursus siswa|/course/view.php?id=1234||||||fa-graduation-cap<br />
{editingtoggle}|/course/view.php?id={courseid}&sesskey={sesskey}&edit={editingtoggle}|||editingteacher|admin,manager|OR|fa-pencil|editing|participants';
$string['setting_customnodesusageusersintro'] = 'Setiap baris terdiri dari judul tautan, URL tautan, bahasa yang didukung (opsional), kohor yang didukung (opsional), peran yang didukung (opsional), peran global yang didukung (opsional), operator kombinasi logika (opsional), ikon (opsional), atribut kunci data (opsional), dan \'kunci sebelum simpul\' (opsional) - dipisahkan dengan karakter pipa. Setiap simpul kustom perlu ditulis di baris baru.';
$string['setting_insertactivitiescoursenodeexplanation'] = 'Simpul ini akan menampung simpul yang terhubung ke halaman ikhtisar aktivitas. Pada dasarnya, simpul ini akan membawa fungsionalitas blok "Aktivitas" yang sudah ada ke laci navigasi Boost.';
$string['setting_insertactivitiescoursenoderealicons'] = 'Gunakan ikon aktivitas individual';
$string['setting_insertactivitiescoursenoderealicons_desc'] = 'Mengaktifkan pengaturan ini akan menggunakan ikon aktivitas inti Moodle individual untuk node kursus aktivitas. Ikon ini berwarna dan lebih rinci daripada ikon FontAwesome di laci navigasi Boost lainnya. Menonaktifkan pengaturan ini akan menggunakan ikon FontAwesome yang cocok untuk semua simpul kursus aktivitas.';
$string['setting_insertcoursesectionscoursenodecorehint'] = 'Harap dicatat: Fitur ini hanya akan berfungsi jika pengaturan <a href="{$a->url}">linkcoursesections</a> aktif. Jika Anda menonaktifkan linkcoursesections, pengaturan ini akan diabaikan dan tidak akan berfungsi.';
$string['setting_insertcoursesectionscoursenodeexplanation'] = 'Simpul ini akan ditempatkan di atas bagian pertama kursus saat ini.';
$string['setting_insertcustomnodes'] = 'Masukkan {$a->what} untuk {$a->who}';
$string['setting_insertcustomnodes_desc'] = 'Dengan pengaturan ini, Anda dapat memasukkan {$a->what} ke laci navigasi Boost yang akan ditambahkan {$a->where} dan yang akan ditampilkan ke {$a->who}.';
$string['setting_insertnode'] = 'Sisipkan {$a->what} "{$a->which}"';
$string['setting_insertnode_desc'] = 'Mengaktifkan pengaturan ini akan menyisipkan {$a->what} "{$a->which}" ke laci navigasi Boost.';
$string['setting_insertnodescollapsehint'] = 'Harap dicatat: Simpul yang disisipkan memiliki tautan tindakan yang mengarah ke halaman beranda kursus karena Boost tidak mendukung penambahan simpul tanpa tautan tindakan. Tautan tindakan akan ditimpa segera setelah Anda mengaktifkan pengaturan untuk menciutkan simpul secara bersamaan.';
$string['setting_insertnodesheading'] = 'Sisipkan {$a->what} ke laci navigasi Boost';
$string['setting_insertresourcescoursenodeexplanation'] = 'Simpul ini akan terhubung ke halaman ikhtisar sumber daya.<br /><em>Pengaturan ini terkait dengan pengaturan "Memasukkan simpul \'Aktivitas\'". Jika Anda mengaktifkan kedua pengaturan, Anda akan mendapatkan simpul "Aktivitas" dan "Sumber Daya" seperti yang diminta. Jika Anda hanya mengaktifkan pengaturan "Aktivitas", simpul "Aktivitas" juga akan berisi simpul yang terhubung ke halaman ikhtisar sumber daya.</em>';
$string['setting_modifymycoursesrootnodefilterhint'] = 'Tambahkan simpul petunjuk filter kursus';
$string['setting_modifymycoursesrootnodefilterhint_desc'] = 'Mengaktifkan pengaturan ini akan menambahkan simpul di akhir daftar Kursus saya di laci navigasi Boost yang memberi tahu pengguna mengapa daftar Kursus saya diisi sebagaimana adanya (misalnya filter kursus mana yang menghasilkan daftar Kursus Saya saat ini).';
$string['setting_modifymycoursesrootnodefilterlink'] = 'Tambahkan simpul tautan filter kursus';
$string['setting_modifymycoursesrootnodefilterlink_desc'] = 'Mengaktifkan pengaturan ini akan menambahkan simpul di akhir daftar Kursus saya di laci navigasi Boost yang memberi tahu pengguna di mana harus mengubah filter kursus saat ini (yaitu menampilkan tautan ke Dasbor).<br /><em>Pengaturan ini terkait dengan pengaturan "Tambahkan simpul petunjuk filter kursus". Jika Anda mengaktifkan kedua pengaturan, maka simpul gabungan akan ditambahkan, bukan dua.</em>';
$string['setting_modifymycoursesrootnodeshowfiltered'] = 'Tampilkan kursus yang difilter';
$string['setting_modifymycoursesrootnodeshowfiltered_desc'] = 'Mengaktifkan pengaturan ini akan mengubah daftar Kursus saya di laci navigasi Boost untuk menampilkan kursus yang saat ini difilter di blok ikhtisar Kursus. Jika pengaturan ini dinonaktifkan, daftar Kursus saya di laci navigasi Boost akan menampilkan semua kursus yang diklasifikasikan sebagai \'Sedang berlangsung\', yang merupakan perilaku bawaan Moodle.';
$string['setting_modifymycoursesrootnodeshowfilterednavcourselimit'] = 'Harap dicatat: Mengaktifkan pengaturan ini akan mengubah nilai pengaturan <a href="{$a->url}">navcourselimit</a> menjadi 100.000 setiap kali halaman dimuat. Mengatur nilai setinggi itu diperlukan untuk menghindari daftar kursus dipersingkat yang dapat merusak mekanisme pemfilteran.';
$string['setting_modifynodesheading'] = 'Modifikasikan {$a->what} di laci navigasi Boost';
$string['setting_movecontentbanknodeincoursecontext'] = 'Pindahkan {$a->rootnode} "{$a->contentbank}" dalam konteks kursus';
$string['setting_movecontentbanknodeincoursecontext_desc'] = 'Mengaktifkan pengaturan ini akan memindahkan {$a->rootnode} "{$a->contentbank}" ke bagian {$a->coursenode} dalam laci navigasi Boost saat melihat halaman Moodle yang terletak di dalam kursus.';
$string['setting_movecontentbanknodeincoursecontextbefore'] = 'Pindahkan {$a->rootnode} "{$a->contentbank}" sebelum {$a->coursenode} ini';
$string['setting_movecontentbanknodeincoursecontextbefore_desc'] = 'Dengan pengaturan ini, Anda dapat menentukan sebelum {$a->coursenode} mana {$a->rootnode} "{$a->contentbank}" akan dipindahkan. Harap dicatat bahwa Anda bertanggung jawab untuk memastikan bahwa {$a->coursenode} yang telah dikonfigurasi ditampilkan kepada grup pengguna yang sama dengan yang melihat {$a->contentbank}" {$a->rootnode}. Jika {$a->coursenode} yang telah dikonfigurasi tidak ditampilkan untuk pengguna tertentu, "{$a->contentbank}" {$a->rootnode} akan ditambahkan di akhir bagian {$a->coursenode} dan peringatan pengawakutu akan ditampilkan/ditambahkan ke log.';
$string['setting_movenodesheading'] = 'Pindahkan {$a->what} di laci navigasi Boost';
$string['setting_movenodestechnicalhint'] = 'Latar belakang teknis: Hal ini dilakukan dengan menghapus simpul di lokasi asli di laci navigasi Boost dan menambahkan simpul yang sama lagi di lokasi lain. Sebagai hasilnya, simpul tersebut hanya akan dipindahkan di dalam laci navigasi, tetapi pada dasarnya tetap tidak terhubung dan masih dapat diakses oleh bagian lain Moodle.';
$string['setting_removebadgescoursenodeexplanation'] = 'Simpul hanya dihapus jika tidak ada lencana dalam kursus. Guru tetap dapat mengakses halaman manajemen lencana di menu kursus (menu roda gigi).<br /><em>Pengaturan ini hanya diproses ketika subsistem lencana diaktifkan di Moodle.</em>';
$string['setting_removecompetenciescoursenodeexplanation'] = 'Simpul ini hanya dihapus jika tidak ada kompetensi dalam kursus. Untuk guru, simpul "Kompetensi" lain akan ditambahkan ke menu kursus (menu roda gigi).<br /><em>Pengaturan ini hanya diproses ketika subsistem kompetensi diaktifkan di Moodle.</em>';
$string['setting_removecoursenodestechnicalhint'] = 'Latar belakang teknis: Hal ini dilakukan dengan menghapus simpul dari pohon navigasi. Dengan demikian, simpul tersebut tidak dapat diakses lagi oleh bagian lain Moodle. Dalam pengaturan Moodle normal, diharapkan hal ini tidak akan menimbulkan masalah.';
$string['setting_removegradescoursenodeexplanation'] = 'Simpul dihapus untuk semua pengguna, terlepas dari kemampuan pengguna dan terlepas dari pengaturan \'Tampilkan buku nilai kepada siswa\' dalam pengaturan kursus.';
$string['setting_removemycoursesnodeperformancehint'] = 'Harap dicatat: Jika Anda mengaktifkan pengaturan ini dan juga telah mengaktifkan pengaturan <a href="{$a->url}">navshowmycoursecategories</a>, menghapus simpul "Kursus saya" memerlukan waktu lebih lama dan Anda harus mempertimbangkan untuk menonaktifkan pengaturan navshowmycoursecategories.';
$string['setting_removenode'] = 'Hapus {$a->what} "{$a->which}"';
$string['setting_removenode_desc'] = 'Mengaktifkan pengaturan ini akan menghapus {$a->what} "{$a->which}" dari laci navigasi Boost.';
$string['setting_removenodeincoursecontext'] = 'Hapus {$a->what} "{$a->which}" dalam konteks kursus';
$string['setting_removenodeincoursecontext_desc'] = 'Mengaktifkan pengaturan ini akan menghapus {$a->what} "{$a->which}" dari laci navigasi Boost saat melihat halaman Moodle yang berada dalam kursus.';
$string['setting_removenodeinnoncoursecontext'] = 'Hapus {$a->what} "{$a->which}" dalam konteks non-kursus';
$string['setting_removenodeinnoncoursecontext_desc'] = 'Mengaktifkan pengaturan ini akan menghapus {$a->what} "{$a->which}" dari laci navigasi Boost saat melihat halaman Moodle yang terletak di luar kursus.';
$string['setting_removenodesheading'] = 'Hapus {$a->what} dari laci navigasi Boost';
$string['setting_removenotselectedhomerootnodeexplanation'] = 'Simpul Beranda / Dasbor yang tidak dipilih ditentukan oleh apa yang dipilih pengguna untuk tidak dijadikan halaman berandanya.';
$string['setting_removeparticipantscoursenodeexplanation'] = 'Simpul dihapus untuk semua pengguna, terlepas dari kemampuan pengguna.';
$string['setting_removerootnodestechnicalhint'] = 'Latar belakang teknis: Hal ini dilakukan dengan mengatur atribut showinflatnavigation simpul ke false. Dengan demikian, simpul hanya akan disembunyikan dari laci navigasi, tetapi akan tetap berada di pohon navigasi dan masih dapat diakses oleh bagian lain Moodle.';
$string['setting_removeselectedhomerootnodeexplanation'] = 'Simpul Beranda / Dasbor yang dipilih ditentukan oleh apa yang dipilih pengguna sebagai halaman berandanya.';
$string['settingspage_bottomnodes'] = 'Simpul bawah';
$string['settingspage_coursenodes'] = 'Simpul kursus';
$string['settingspage_custombottomnodes'] = 'Simpul bawah kustom';
$string['settingspage_customcoursenodes'] = 'Simpul kursus kustom';
$string['settingspage_customrootnodes'] = 'Simpul akar kustom';
$string['settingspage_mycoursesrootnode'] = 'Simpul akar Kursus saya';
$string['settingspage_rootnodes'] = 'Simpul akar';
