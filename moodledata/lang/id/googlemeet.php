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
 * Strings for component 'googlemeet', language 'id', version '5.1'.
 *
 * @package     googlemeet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['at'] = 'pada';
$string['calendareventname'] = '{$a} dijadwalkan untuk';
$string['checkweekdays'] = 'Pilih hari dalam seminggu yang termasuk dalam rentang tanggal yang dipilih.';
$string['creatoremail'] = 'Surel penyelenggara';
$string['creatoremail_error'] = 'Masukkan alamat surel yang valid';
$string['creatoremail_help'] = 'Surel penyelenggara acara';
$string['date'] = 'Tanggal';
$string['duration'] = 'Durasi';
$string['earlierto'] = 'Tanggal acara tidak boleh lebih awal dari tanggal mulai kursus ({$a}).';
$string['emailcontent'] = 'Konten surel';
$string['emailcontent_default'] = '<p>Hai %userfirstname%,</p>
<p>Pengingat ini untuk mengingatkan Anda bahwa akan ada acara Google Meet di %coursename%</p>
<p><b>%googlemeetname%</b></p>
<p>Kapan: %eventdate% %duration% %timezone%</p>
<p>Tautan akses: %url%</p>';
$string['emailcontent_help'] = 'Saat notifikasi dikirimkan kepada mahasiswa, notifikasi tersebut mengambil isi surel dari kolom ini. Karakter pengganti berikut dapat digunakan:
<ul>
<li>%userfirstname%</li>
<li>%userlastname%</li>
<li>%coursename%</li>
<li>%googlemeetname%</li>
<li>%eventdate%</li>
<li>%duration%</li>
<li>%timezone%</li>
<li>%url%</li>
<li>%cmid%</li>
</ul>';
$string['entertheroom'] = 'Masuk ke ruang';
$string['eventdate'] = 'Tanggal acara';
$string['eventdetails'] = 'Rincian acara';
$string['from'] = 'dari';
$string['googlemeet:addinstance'] = 'Tambahkan Google Meet™ baru untuk Moodle';
$string['googlemeet:editrecording'] = 'Sunting rekaman';
$string['googlemeet:removerecording'] = 'Hapus rekaman';
$string['googlemeet:syncgoogledrive'] = 'Sinkronkan dengan Google Drive';
$string['googlemeet:view'] = 'Lihat Google Meet™ untuk konten Moodle';
$string['hide'] = 'Sembunyikan';
$string['invalideventenddate'] = 'Tanggal ini tidak boleh lebih awal dari "Tanggal acara"';
$string['invalideventendtime'] = 'Waktu berakhir harus lebih besar dari waktu mulai';
$string['invalidissuerid'] = 'Layanan OAuth yang dipilih dalam pengaturan "Google Meet™ untuk Moodle" tidak didukung oleh Google';
$string['invalidstoredurl'] = 'Tidak dapat menampilkan sumber daya ini, URL Google Meet tidak valid.';
$string['isnotcreatoremail'] = 'Masuk dengan akun penyelenggara atau ubah surel penyelenggara di pengaturan untuk menyinkronkan rekaman.';
$string['issuerid'] = 'Layanan OAuth';
$string['issuerid_desc'] = '<a href="https://github.com/ronefel/moodle-mod_googlemeet/wiki/How-to-create-Client-ID-and-Client-Secret" target="_blank">Cara menyiapkan Layanan OAuth</a>';
$string['jstableinfo'] = 'Menampilkan {start} hingga {end} dari {rows} rekaman';
$string['jstableinfofiltered'] = 'Menampilkan {start} hingga {end} dari {rows} rekaman (difilter dari {rowsTotal} rekaman)';
$string['jstableloading'] = 'Memuat...';
$string['jstablenorows'] = 'Tidak ada rekaman yang ditemukan';
$string['jstableperpage'] = '{select} rekaman per halaman';
$string['jstablesearch'] = 'Cari...';
$string['lastsync'] = 'Sinkronisasi terakhir:';
$string['loading'] = 'Memuat';
$string['loggedinaccount'] = 'Akun Google yang terhubung';
$string['logintoaccount'] = 'Masuk ke akun Google Anda';
$string['logintoyourgoogleaccount'] = 'Masuk ke akun Google Anda sehingga URL Google Meet dapat dibuat secara otomatis';
$string['logout'] = 'Keluar';
$string['manage'] = 'Kelola';
$string['messageprovider:notification'] = 'Pengingat mulai acara Google Meet';
$string['minutesbefore'] = 'Menit sebelumnya';
$string['minutesbefore_help'] = 'Jumlah menit sebelum dimulainya acara saat notifikasi harus dikirim.';
$string['modulename'] = 'Google Meet™ untuk Moodle';
$string['modulename_help'] = 'Modul Google Meet™ untuk Moodle memungkinkan pengajar membuat ruang Google Meet sebagai sumber daya pembelajaran dan setelah rapat selesai, rekamannya akan tersedia bagi siswa, yang disimpan di Google Drive.
<p>©2018 Google LLC. Seluruh hak cipta dilindungi undang-undang.<br/>
Google Meet dan logo Google Meet adalah merek dagang terdaftar dari Google LLC.</p>';
$string['modulenameplural'] = 'Google Meet™ untuk instansi Moodle';
$string['multieventdateexpanded'] = 'Pengulangan tanggal acara diperluas';
$string['multieventdateexpanded_desc'] = 'Tampilkan pengaturan "Pengulangan tanggal acara" sebagaimana diperluas secara bawaan saat membuat Ruang baru.';
$string['name'] = 'Nama';
$string['never'] = 'Tidak Pernah';
$string['notification'] = 'Notifikasi';
$string['notificationexpanded'] = 'Notifikasi diperluas';
$string['notify'] = 'Kirim notifikasi ke siswa';
$string['notify_help'] = 'Jika dicentang, notifikasi akan dikirimkan kepada siswa tentang tanggal mulai acara.';
$string['notifycationexpanded_desc'] = 'Tampilkan pengaturan "Notifikasi" sebagaimana diperluas secara bawaan saat membuat Ruang baru.';
$string['notifytask'] = 'Tugas notifikasi Google Meet™ untuk Moodle';
$string['or'] = 'atau';
$string['play'] = 'Mainkan';
$string['pluginadministration'] = 'Google Meet™ untuk administrasi Moodle';
$string['pluginname'] = 'Google Meet™ untuk Moodle';
$string['privacy:metadata:googlemeet_notify_done'] = 'Mencatat notifikasi yang dikirimkan kepada pengguna tentang dimulainya acara. Data ini bersifat sementara dan akan dihapus setelah tanggal dimulainya acara.';
$string['privacy:metadata:googlemeet_notify_done:eventid'] = 'ID acara';
$string['privacy:metadata:googlemeet_notify_done:timesent'] = 'Stempel waktu yang menunjukkan saat pengguna menerima notifikasi';
$string['privacy:metadata:googlemeet_notify_done:userid'] = 'ID pengguna';
$string['recording'] = 'Rekaman';
$string['recordings'] = 'Rekaman';
$string['recordingswiththename'] = 'Rekaman dengan nama:';
$string['recurrenceeventdate'] = 'Pengulangan tanggal acara';
$string['recurrenceeventdate_help'] = 'Fungsi ini memungkinkan Anda membuat beberapa pengulangan dari tanggal acara.
<br>* <strong>Ulangi pada</strong>: Pilih hari dalam seminggu di mana kelas Anda akan bertemu (misalnya, Senin / Rabu / Jumat).
<br>* <strong>Ulangi setiap</strong>: Ini memungkinkan pengaturan frekuensi. Jika kelas Anda akan bertemu setiap minggu, pilih 1; akan bertemu setiap dua minggu, pilih 2; setiap 3 minggu, pilih 3, dst.
<br>* <strong>Ulangi hingga</strong>: Pilih hari terakhir pertemuan (hari terakhir Anda ingin mengambil tanggal berulang acara).';
$string['repeatasfollows'] = 'Ulangi tanggal acara di atas sebagai berikut';
$string['repeatevery'] = 'Ulangi setiap';
$string['repeaton'] = 'Ulangi pada';
$string['repeatuntil'] = 'Ulangi hingga';
$string['roomcreator'] = 'Penyelenggara:';
$string['roomname'] = 'Nama Ruang';
$string['roomurl'] = 'Url Ruang';
$string['roomurl_caution'] = '<strong>Perhatian!</strong> Jika URL ruang atau surel penyelenggara diubah, rekaman yang disinkronkan dapat dihapus pada sinkronisasi berikutnya.';
$string['roomurl_desc'] = 'URL ruang akan dibuat secara otomatis.';
$string['roomurlexpanded'] = 'Url Ruang diperluas';
$string['roomurlexpanded_desc'] = 'Tampilkan pengaturan "URL Ruang" sebagaimana diperluas secara bawaan saat membuat Ruang baru.';
$string['servicenotenabled'] = 'Akses belum dikonfigurasi. Pastikan layanan \'Google Drive API\' dan \'Google Calendar API\' diaktifkan.';
$string['sessionexpired'] = 'Sesi akun Google Anda kedaluwarsa di tengah proses, silakan masuk lagi.';
$string['show'] = 'Tampilkan';
$string['strftimedm'] = '%a. %d %b.';
$string['strftimedmy'] = '%a. %d %b. %Y';
$string['strftimedmyhm'] = '%a. %d %b. %Y %H:%M';
$string['strftimehm'] = '%H:%M';
$string['sync_info'] = 'Tunggu setidaknya 10 menit hingga berkas rekaman dibuat dan disimpan di "Drive Saya > Rekaman Rapat" penyelenggara.
<p></p>
Untuk menghapus rekaman, hapus berkas rekaman dari Google Drive terlebih dahulu, lalu klik tombol sinkronisasi di atas.
<p></p>
Untuk merekam rapat, pastikan:
<ul>
    <li>Anda belum memenuhi kuota Drive pribadi Anda.</li>
    <li>Organisasi Anda belum memenuhi kuota Drive-nya.</li>
</ul>
Jika Anda memiliki ruang di Drive, tetapi organisasi Anda tidak memilikinya, Anda tidak dapat merekam rapat.
<p></p>
Untuk informasi selengkapnya, lihat artikel Pusat Bantuan ini:
<br>
<a href="https://notifications.google.com/g/p/APNL1TjJltVk6EcLPyFTJ8V_9ty1FeTAD0XSSJVLiaWPezIaQKfIPd1kGURFUMVV3I5yHgVZoOgxkl4gySV-4SCf2pZ27Vk8Iy9DnHSQBqtK51uG3Gyz" target="_blank" rel="nofollow noopener">https://support.google.com/meet/answer/9308681</a>';
$string['sync_notloggedin'] = 'Masuk ke akun Google Anda untuk menyinkronkan rekaman Google Meet dengan Moodle';
$string['syncwithgoogledrive'] = 'Sinkronkan dengan Google Drive';
$string['thereisnorecordingtoshow'] = 'Tidak ada rekaman yang dapat ditampilkan.';
$string['timeahead'] = 'Tidak mungkin membuat beberapa pengulangan tanggal peristiwa yang melebihi satu tahun, menyesuaikan tanggal mulai dan berakhir.';
$string['timedate'] = '%d/%m/%Y %H:%M';
$string['to'] = 'sampai';
$string['today'] = 'Hari Ini';
$string['upcomingevents'] = 'Acara mendatang';
$string['url_failed'] = 'URL Google Meet yang valid diperlukan';
$string['url_help'] = 'Misalnya. https://meet.google.com/aaa-aaaa-aaa';
$string['visible'] = 'Terlihat';
$string['week'] = 'Minggu';
