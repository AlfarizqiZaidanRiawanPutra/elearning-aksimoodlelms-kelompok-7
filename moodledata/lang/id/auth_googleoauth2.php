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
 * Strings for component 'auth_googleoauth2', language 'id', version '5.1'.
 *
 * @package     auth_googleoauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dropboxclientid'] = 'Kunci/Rahasia aplikasi Anda dibuat di <a href="https://www.dropbox.com/developers/apps" target="_blank">konsol aplikasi Dropbox</a>.
Masukkan pengaturan berikut saat membuat aplikasi (perhatikan bahwa Dropbox hanya mendukung URL https, jadi situs Moodle Anda harus mendukung https):
<br/>Situs web aplikasi: {$a->siteurl}
<br/>URI Pengalihan: {$a->callbackurl}';
$string['auth_dropboxclientid_key'] = 'Kunci Aplikasi Dropbox';
$string['auth_dropboxclientsecret_key'] = 'Rahasia Aplikasi Dropbox';
$string['auth_facebookclientid'] = 'ID/Rahasia Aplikasi Anda dapat dibuat di <a href="https://developers.facebook.com/apps/" target="_blank">Halaman pengembang Facebook</a> Anda:
<br/>Tambahkan aplikasi baru > Situs Web > Masukkan nama situs Anda sebagai nama aplikasi > Buat ID aplikasi Facebook baru > Masukkan URL Situs - tidak perlu memasukkan URL Seluler >
Di halaman konfirmasi, cari tautan "Lewati ke Dasbor Pengembang" > di dasbor aplikasi, Anda akan menemukan ID/rahasia > Pengaturan > Lanjutan > masukkan URI pengalihan OAuth yang Valid
<br/>URL Situs: {$a->siteurl}
<br/>Domain aplikasi: {$a->sitedomain}
<br/>URI pengalihan OAuth yang Valid: {$a->callbackurl}
<br/><strong>PERINGATAN: Facebook baru-baru ini mengubah API. API tersebut tidak berfungsi untuk kunci API yang baru dibuat. Misalnya, kami tahu API tersebut rusak sejak Facebook API 2.8
dan masih berfungsi hingga Facebook API 2.2. Kami tidak menguji Facebook API 2.3, 2.4, 2.5, 2.6, dan 2.7. Singkatnya, jika Anda belum memiliki kunci API Facebook lama, maka Facebook dijamin tidak akan berfungsi di masuk ini. Silakan lihat alternatif pengaya atau tunggu pembaruan besar pengaya berikutnya (belum direncanakan).';
$string['auth_facebookclientid_key'] = 'ID Aplikasi Facebook';
$string['auth_facebookclientsecret_key'] = 'Rahasia Aplikasi Facebook';
$string['auth_githubclientid'] = 'ID/Rahasia klien Anda dapat dibuat di <a href="https://github.com/settings/applications/new" target="_blank">halaman aplikasi pendaftaran GitHub</a> Anda:
<br/>URL Beranda: {$a->siteurl}
<br/>URL panggilan balik otorisasi: {$a->callbackurl}';
$string['auth_githubclientid_key'] = 'ID klien Github';
$string['auth_githubclientsecret_key'] = 'Rahasia klien Github';
$string['auth_googleclientid'] = 'ID Klien/Rahasia Anda dapat dibuat di <a href="https://code.google.com/apis/console" target="_blank">Google Console API</a>:
<br/>
Dasbor > Google Identity and Access Management (IAM) API > Aktifkan > Kredensial > Buat ID Klien Oauth baru > Konfigurasikan nama Produk di Layar Persetujuan > Simpan > Pilih Jenis Kredensial \'Aplikasi Web\'
<br/>
Asal JavaScript yang Diotorisasi: {$a->jsorigins}
<br/>
URI Pengalihan yang Diotorisasi: {$a->redirecturls}
<br/>';
$string['auth_googleclientid_key'] = 'ID Klien Google';
$string['auth_googleclientsecret_key'] = 'Rahasia Klien Google';
$string['auth_googleipinfodbkey'] = 'IPinfoDB adalah layanan yang memungkinkan Anda mengetahui negara dan kota pengunjung.
Pengaturan ini opsional. Anda dapat berlangganan <a href="http://www.ipinfodb.com/register.php">IPinfoDB</a> untuk mendapatkan kunci gratis.<br/>
Situs web: {$a->website}';
$string['auth_googleipinfodbkey_key'] = 'Kunci IPinfoDB';
$string['auth_googleoauth2description'] = 'Izinkan pengguna terhubung ke situs dengan penyedia autentikasi eksternal: Google/Facebook/Windows Live.
Saat pertama kali pengguna terhubung dengan penyedia autentikasi, akun baru akan dibuat.
Cegah pembuatan akun (pengaturan admin authpreventaccountcreation) saat autentikasi <b>harus</b> tidak diatur.';
$string['auth_googlesettings'] = 'Pengaturan Penyedia';
$string['auth_linkedinclientid'] = 'Kunci API/Rahasia Anda dapat dibuat di <a href="https://www.linkedin.com/secure/developer" target="_blank">halaman aplikasi pendaftaran LinkedIn</a> Anda:
<br/>URL Situs Web: {$a->siteurl}
<br/>URL Pengalihan Penerimaan OAuth 2.0: {$a->callbackurl}';
$string['auth_linkedinclientid_key'] = 'Kunci API Linkedin';
$string['auth_linkedinclientsecret_key'] = 'Kunci Rahasia Linkedin';
$string['auth_microsoftclientid'] = 'ID Klien/Rahasia Anda dapat dibuat di <a href="https://apps.dev.microsoft.com/" target="_blank">Portal Pendaftaran Aplikasi Microsoft</a>:
<br />URI Pengalihan: {$a->callbackurl}';
$string['auth_microsoftclientid_key'] = 'ID Aplikasi Microsoft v2';
$string['auth_microsoftclientsecret_key'] = 'Rahasia Aplikasi Microsoft v2';
$string['auth_sign-in_with'] = 'Masuk dengan {$a-> provider}';
$string['auth_userprefix'] = 'Awalan nama pengguna';
$string['auth_userprefixdesc'] = 'Nama pengguna yang dibuat akan dimulai dengan awalan ini. Di situs Moodle dasar, Anda tidak perlu mengubahnya.';
$string['auth_vkontakteclientid'] = 'ID/Rahasia aplikasi Anda dibuat di <a href="https://vk.com/apps?act=manage" target="_blank">konsol VK Aplikasi Saya</a>.
Masukkan pengaturan berikut saat membuat aplikasi:
<br/>Alamat situs: {$a->siteurl}
<br/>Domain Dasar: {$a->sitedomain}
<br/>URI Pengalihan Resmi: {$a->callbackurl}';
$string['auth_vkontakteclientid_key'] = 'ID Aplikasi VK.com';
$string['auth_vkontakteclientsecret_key'] = 'Kunci Aman VK.com';
$string['authdomains'] = 'Domain email yang diizinkan untuk penyedia oauth2';
$string['authdomainshelp'] = 'Dengan opsi ini, Anda dapat membatasi domain surel yang diizinkan masuk ke situs ini dengan penyedia oauth2.<br /> Ini adalah daftar dengan elemen yang dipisahkan koma (misalnya, example.com, mysite.net). Jika Anda ingin mengaktifkan subdomain juga, tentukan subdomain tersebut di depan domain dengan titik (misalnya, .example.com cocok dengan my.example.com atau new.example.com).<br />Kosongkan untuk mengelola setiap domain surel.';
$string['cantcreatenewuser'] = 'Pengguna tidak ada dan pembuatan pengguna otomatis dilarang.';
$string['couldnotauthenticate'] = 'Autentikasi gagal - Coba masuk lagi.';
$string['couldnotauthenticateuserlogin'] = 'Galat metode autentikasi: pengguna akun dengan alamat surel yang sama sudah ada!<br/>
Silakan pilih metode autentikasi lain atau hubungi administrator situs.<br/>
<br/>
<a href="{$a->loginpage}">Coba ulang</a>.<br/>
<a href="{$a->forgotpass}">Lupa kata sandi Anda</a>?';
$string['couldnotgetgoogleaccesstoken'] = 'Penyedia otentikasi mengirimi kami kesalahan komunikasi. Harap coba masuk lagi.';
$string['couldnotgetuseremail'] = 'Jejaring Sosial tidak memberi kami <b> email </b>. Moodle membutuhkan email yang valid untuk login dengan benar: harap periksa preferensi pengguna Anda di jejaring sosial dan aktifkan visibilitas email Anda.';
$string['displaybuttons'] = 'Tampilkan tombol di halaman login?';
$string['displaybuttonshelp'] = 'Tampilkan tombol logo penyedia di bagian atas halaman login.
Jika Anda ingin menempatkan tombol sendiri di halaman login, Anda dapat tetap menonaktifkan opsi ini dan menambahkan kode berikut: {$a}';
$string['donotcreatenewuser'] = 'Larang pembuatan pengguna otomatis.';
$string['donotcreatenewuserhelp'] = 'Dengan mengaktifkan opsi ini, meskipun "Cegah pembuatan akun" diaktifkan, plugin ini tidak otomatis membuat pengguna baru saat logon (biasanya opsi ini harus dibiarkan tidak dicentang).';
$string['dropbox'] = 'Dropbox';
$string['emailaddressmustbeverified'] = 'Alamat email Anda tidak diverifikasi dengan metode otentikasi yang Anda pilih. Anda mungkin lupa mengklik "verifikasi alamat email"
tautan yang seharusnya dikirimkan Google atau Facebook kepada Anda selama Anda berlangganan layanan mereka.';
$string['emailnotallowed'] = 'Email Anda tidak diizinkan untuk masuk ke situs ini.';
$string['facebook'] = 'Facebook';
$string['faileduserdetails'] = 'Situs berhasil terhubung ke penyedia yang dipilih tetapi gagal mengambil detail pengguna Anda.';
$string['github'] = 'GitHub';
$string['google'] = 'Google';
$string['horizontal'] = 'Disposisi horizontal';
$string['linkedin'] = 'LinkedIn';
$string['microsoft'] = 'Microsoft Live';
$string['microsoft_failure'] = 'Tidak menerima kode otorisasi dari server Microsoft.';
$string['moreproviderlink'] = 'Masuk dengan layanan lain.';
$string['noaccountyet'] = 'Anda belum memiliki izin untuk menggunakan situs ini. Silakan hubungi administrator Anda dan minta mereka untuk mengaktifkan akun Anda.';
$string['othermoodle'] = 'Autentikasi Moodle lainnya';
$string['othersettings'] = 'Pengaturan lainnya';
$string['pluginname'] = 'Oauth2';
$string['providerlinksstyle'] = 'Gaya Kotak Tautan Penyedia:';
$string['providerlinksstylehelp'] = 'Dengan opsi ini Anda dapat memilih antara gaya visualisasi vertikal atau horizontal untuk daftar penyedia link login. Tema tertentu tetap dapat membatasi pengaturan ini dengan menyematkan formulir login ke dalam ukuran lebar yang ketat.';
$string['providerlinkstext'] = 'Penyedia Log in lainnya:';
$string['saveaccesstoken'] = 'Simpan Token akses pengguna?';
$string['saveaccesstokenhelp'] = 'Setel untuk menyimpan token akses pengguna ke tabel internal plugin. Harap periksa apakah kebijakan API untuk penyedia oauth2 yang diaktifkan setuju untuk menyimpan token secara lokal (Kebanyakan dari mereka tidak setuju ...).';
$string['signinwithanaccount'] = 'Masuk dengan {$a}';
$string['stattitle'] = 'Statistik login untuk plugin ini';
$string['stattitlecaption'] = 'Statistik untuk {$a-> periodindays} hari terakhir.';
$string['supportmaintenance'] = 'Untuk mendukung pemeliharaan plugin ini, login ke <a target="_blank" href="https://moodle.org/plugins/view/auth_googleoauth2"> halaman plugin Moodle.org </a> dan klik \'Tambahkan ke favorit saya \'. Terima kasih!';
$string['unknownfirstname'] = 'Nama Depan Tidak Diketahui';
$string['unknownlastname'] = 'Nama Belakang Tidak Diketahui';
$string['vertical'] = 'Disposisi vertikal';
$string['vkontakte'] = 'VK.com';
