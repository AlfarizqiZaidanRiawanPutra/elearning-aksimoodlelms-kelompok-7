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
 * Strings for component 'auth_oidc', language 'id', version '5.1'.
 *
 * @package     auth_oidc
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['application_not_changed'] = 'Pengaturan aplikasi OpenID Connect tidak diubah.';
$string['application_updated'] = 'Pengaturan aplikasi OpenID Connect telah diperbarui.';
$string['application_updated_microsoft'] = 'Pengaturan aplikasi OpenID Connect telah diperbarui.<br/>
<span class="warning" style="color: red;">Administrator Azure perlu <b>Memberikan persetujuan admin</b> dan <b>Memverifikasi pengaturan</b> lagi di halaman konfigurasi integrasi Microsoft 365 jika pengaturan "Jenis Penyedia Identitas (IdP)" atau "Metode autentikasi klien" diperbarui.</span>';
$string['auth_method_certificate'] = 'Sertifikat';
$string['auth_method_secret'] = 'Rahasia';
$string['auth_oidcdescription'] = 'Pengaya autentikasi OpenID Connect menyediakan fungsionalitas masuk tunggal menggunakan IdP yang dapat dikonfigurasi.';
$string['authendpoint'] = 'Titik Akhir Otorisasi';
$string['authendpoint_help'] = 'URI titik akhir Otorisasi dari IdP Anda yang akan digunakan.<br/>
Perhatikan bahwa jika situs dikonfigurasi untuk mengizinkan akses pengguna dari penyewa lain, titik akhir otorisasi khusus penyewa tidak dapat digunakan.';
$string['authentication_and_endpoints_saved'] = 'Pengaturan autentikasi dan titik akhir diperbarui.';
$string['binding_username_auto'] = 'Pilih secara otomatis';
$string['binding_username_claim_description'] = '<p class="warning_header">Ini adalah fitur lanjutan!</p>
<p>Halaman ini memungkinkan administrator situs untuk memilih klaim token yang akan digunakan untuk pengikatan dengan nama pengguna Moodle.</p>
<p class="warning">Berhati-hatilah saat mengubah pengaturan ini. Ikuti langkah-langkah di bawah ini untuk mengubah pengaturan ini di situs Moodle dengan pengguna yang sudah ada menggunakan metode autentikasi OpenID Connect. Kegagalan untuk melakukannya dapat mengakibatkan pengguna keluar dan/atau akun duplikat dibuat.</p>
<ol>
<li>Pastikan Anda memiliki akun administrator situs manual, yaitu tidak menggunakan metode autentikasi OpenID Connect.</li>
<li>Jadwalkan waktu henti yang cukup dan alihkan situs Moodle ke mode pemeliharaan.</li>
<li>Cadangkan basis data Moodle, khususnya tabel <span class="code">user</span> dan <span class="code">auth_oidc_tokens</span>. Jika pengaya local_o365 terpasang, cadangkan juga tabel <span class="code">local_o365_objects</span>.</li>
<li>Gunakan <a href="{$a}" target="_blank">alat pembaruan nama pengguna pengikat</a> untuk memperbarui nama pengguna Moodle, token auth_oidc, dan rekaman koneksi lainnya dari pengguna yang ada agar sesuai dengan nilai klaim yang akan diubah.</li>
<li>Perbarui pengaturan token nama pengguna pengikat di halaman ini.</li>
<li>Bersihkan simpanan.</li>
<li>Pindahkan situs Moodle dari mode pemeliharaan.</li>
</ol>
<p>Dalam kebanyakan kasus, pengaturan ini harus diatur ke opsi bawaan "Pilih secara otomatis", yang berarti pengaya akan mencoba menentukan token yang akan digunakan tergantung pada jenis IdP. Kesalahan konfigurasi atau perubahan tak terduga pada pengaturan ini akan mengakibatkan kegagalan SSO.</p>';
$string['binding_username_claim_description_existing_claims'] = 'Klaim berikut terdapat pada token ID pengguna yang ada. Memilih klaim yang tidak ada dalam daftar dapat mengakibatkan kegagalan SSO.<br/>
<div class="existing_claims">{$a}</div>';
$string['binding_username_claim_heading'] = 'Klaim Nama Pengguna yang Mengikat';
$string['binding_username_claim_help_ms_no_user_sync'] = 'Opsi untuk IdP non Microsoft meliputi:
<ul>
<li><b>Pilih otomatis</b>: Menggunakan logika saat ini, menentukan token berdasarkan jenis IdP dan beralih kembali ke <b>sub</b> jika tidak ada klaim yang ditemukan.</li>
<li><b>preferred_username</b>: Bawaan untuk jenis IdP Microsoft Identity Platform (v2.0). <span class="not_support_user_sync">Tidak mendukung sinkronisasi pengguna.</span></li>
<li><b>email</b>: Bawaan untuk Microsoft Identity Platform (v2.0).</li>
<li><b>upn</b>: Bawaan untuk Microsoft Entra ID (v1.0) dan jenis IdP lainnya.</li>
<li><b>unique_name</b>: Bawaan untuk Microsoft Entra ID (v1.0) dan jenis IdP lainnya. <span class="not_support_user_sync">Tidak mendukung sinkronisasi pengguna.</span></li>
<li><b>oid</b>: Cadangan jika tidak ada klaim lain. Hanya ada di Microsoft IdP.</li>
<li><b>sub</b>: Cadangan jika tidak ada klaim lain. <span class="not_support_user_sync">Tidak mendukung sinkronisasi pengguna.</span></li>
<li><b>samaccountname</b>: Klaim kustom.</li>
<li><b>Kustom</b>: Mengizinkan admin situs memasukkan nilai kustom. <span class="not_support_user_sync">Tidak mendukung sinkronisasi pengguna.</span></li>
</ul>
Perhatikan beberapa opsi tidak mendukung sinkronisasi pengguna.';
$string['binding_username_claim_help_ms_with_user_sync'] = 'Opsi untuk Microsoft IdP dengan fitur sinkronisasi pengguna diaktifkan meliputi:
<ul>
<li><b>Pilih otomatis</b>: Menggunakan logika saat ini, menentukan token berdasarkan jenis IdP dan beralih kembali ke <b>sub</b> jika tidak ada klaim yang ditemukan.</li>
<li><b>email</b>: Alternatif untuk Microsoft Identity Platform (v2.0).</li>
<li><b>upn</b>: Bawaan untuk Microsoft Entra ID (v1.0) dan jenis IdP lainnya.</li>
<li><b>oid</b>: Alternatif jika tidak ada klaim lain. Hanya ada di Microsoft IdP.</li>
<li><b>samaccountname</b>: Klaim kustom.</li>
</ul>';
$string['binding_username_claim_help_non_ms'] = 'Opsi untuk Microsoft IdP tanpa mengaktifkan fitur sinkronisasi pengguna meliputi:
<ul>
<li><b>Pilih otomatis</b>: Menggunakan logika saat ini, menentukan token berdasarkan jenis IdP dan kembali ke <b>sub</b> jika tidak ada klaim yang ditemukan.</li>
<li><b>preferred_username</b></li>
<li><b>email</b></li>
<li><b>unique_name</b></li>
<li><b>sub</b></li>
<li><b>samaccountname</b></li>
<li><b>custom</b>: Klaim kustom.</li>
</ul>';
$string['binding_username_claim_updated'] = 'Klaim Nama Pengguna yang Mengikat berhasil diperbarui.';
$string['binding_username_custom'] = 'Kustom';
$string['bindingusernameclaim'] = 'Klaim nama pengguna yang mengikat';
$string['cert_source_path'] = 'Nama berkas';
$string['cert_source_text'] = 'Teks biasa';
$string['cfg_authenticationlink_desc'] = '<a href="{$a}" target="_blank">Tautan ke IdP dan konfigurasi autentikasi</a>';
$string['cfg_autoappend_desc'] = 'Tambahkan string ini secara otomatis saat pengguna masuk menggunakan metode autentikasi "Kredensial Kata Sandi Pemilik Sumber Daya". Ini berguna ketika IdP Anda memerlukan domain umum, tetapi tidak ingin mengharuskan pengguna mengetiknya saat masuk. Misalnya, jika pengguna OpenID Connect lengkap adalah "james@example.com" dan Anda memasukkan "@example.com" di sini, pengguna hanya perlu memasukkan "james" sebagai nama penggunanya. <br /><b>Catatan:</b> Jika terdapat nama pengguna yang bertentangan - misalnya, terdapat pengguna Moodle dengan nama yang sama, prioritas pengaya autentikasi digunakan untuk menentukan pengguna mana yang menang.';
$string['cfg_autoappend_key'] = 'Tambahkan Otomatis';
$string['cfg_cleanupoidctokens_desc'] = 'Jika pengguna Anda mengalami masalah saat masuk menggunakan akun Microsoft 365 mereka, coba bersihkan token OpenID Connect. Tindakan ini akan menghapus token yang tidak valid dan tidak lengkap yang dapat menyebabkan galat. PERINGATAN: Tindakan ini dapat mengganggu proses masuk yang sedang berlangsung, jadi sebaiknya lakukan ini saat tidak aktif.';
$string['cfg_cleanupoidctokens_key'] = 'Bersihkan Token OpenID Connect';
$string['cfg_customicon_desc'] = 'Jika Anda ingin menggunakan ikon Anda sendiri, unggah di sini. Ini akan menggantikan ikon yang dipilih di atas. <br /><br /><b>Catatan tentang penggunaan ikon kustom:</b><ul><li>Gambar ini <b>tidak</b> akan diubah ukurannya di halaman masuk, jadi sebaiknya unggah gambar dengan ukuran tidak lebih dari 35x35 piksel.</li><li>Jika Anda telah mengunggah ikon kustom dan ingin kembali ke salah satu ikon standar, klik ikon kustom pada kotak di atas, lalu klik "Hapus", lalu klik "OK", lalu klik "Simpan Perubahan" di bagian bawah formulir ini. Ikon standar yang dipilih sekarang akan muncul di halaman masuk Moodle.</li></ul>';
$string['cfg_customicon_key'] = 'Ikon Kustom';
$string['cfg_debugmode_desc'] = 'Jika diaktifkan, informasi akan dicatat ke log Moodle yang dapat membantu mengidentifikasi masalah.';
$string['cfg_debugmode_key'] = 'Rekam pesan debug';
$string['cfg_domainhint_desc'] = 'Saat menggunakan alur masuk <b>Kode Otorisasi</b>, berikan nilai ini sebagai parameter "domain_hint". "domain_hint" digunakan oleh beberapa IdP OpenID Connect untuk memudahkan proses masuk bagi pengguna. Hubungi penyedia Anda untuk mengetahui apakah mereka mendukung parameter ini.';
$string['cfg_domainhint_key'] = 'Petunjuk Domain';
$string['cfg_err_invalidauthendpoint'] = 'Titik Akhir Otorisasi Tidak Valid';
$string['cfg_err_invalidclientid'] = 'ID klien tidak valid';
$string['cfg_err_invalidclientsecret'] = 'Rahasia klien tidak valid';
$string['cfg_err_invalidtokenendpoint'] = 'Titik Akhir Token Tidak Valid';
$string['cfg_field_mapping_desc'] = 'Data profil pengguna dapat dipetakan dari Open ID Connect IdP ke Moodle. Kolom jarak jauh yang tersedia untuk dipetakan sangat bergantung pada jenis IdP.<br/>
<ul>
<li>Beberapa kolom profil dasar tersedia dari token akses dan klaim token ID dari semua jenis IdP.</li>
<li>Jika jenis IdP Microsoft dikonfigurasi (v1.0 atau v2.0), data profil tambahan dapat disediakan melalui panggilan Graph API dengan menginstal dan mengonfigurasi <a href="https://moodle.org/plugins/local_o365">pengaya integrasi Microsoft 365 (local_o365)</a>.</li>
<li>Jika fitur sinkronisasi profil SDS diaktifkan di pengaya local_o365, kolom profil tertentu dapat disinkronkan dari SDS ke Moodle. saat menjalankan tugas terjadwal "Sinkronisasi dengan SDS", dan tidak akan terjadi saat menjalankan tugas terjadwal "Sinkronisasi pengguna dengan Microsoft Entra ID", maupun saat pengguna masuk.</li>
</ul>

Klaim yang tersedia dari ID dan token akses bervariasi tergantung pada jenis IdP, tetapi sebagian besar IdP memungkinkan beberapa tingkat kustomisasi klaim. Dokumentasi tentang IdP Microsoft tertaut di bawah ini:
<ul>
<li><a target="_blank" href="https://learn.microsoft.com/en-us/entra/identity-platform/access-token-claims-reference">Klaim token akses</a></li>
<li><a target="_blank" href="https://learn.microsoft.com/en-us/entra/identity-platform/id-token-claims-reference">Klaim token ID</a></li>
<li><a target="_blank" href="https://learn.microsoft.com/en-us/entra/identity-platform/optional-claims-reference">Konfigurasi klaim opsional</a>: Catatan: "Surel" adalah klaim opsional dalam jenis IdP Microsoft Entra ID (v1.0).</li>
</ul>';
$string['cfg_forceredirect_desc'] = 'Jika diaktifkan, akan melewati halaman indeks login dan dialihkan ke halaman OpenID Connect. Dapat dilewati dengan? Noredirect = 1 parameter URL';
$string['cfg_forceredirect_key'] = 'Paksa pengalihan';
$string['cfg_frontchannellogouturl_desc'] = 'Ini adalah URL yang perlu dipicu oleh IdP Anda ketika mencoba mengeluarkan pengguna dari Moodle.<br/>
Untuk Microsoft Entra ID/platform identitas Microsoft, pengaturan ini disebut "URL keluar saluran depan" dan dapat dikonfigurasi di aplikasi Azure.';
$string['cfg_frontchannellogouturl_key'] = 'URL Keluar Saluran Depan';
$string['cfg_icon_desc'] = 'Ikon untuk ditampilkan di sebelah nama penyedia di halaman login.';
$string['cfg_icon_key'] = 'Ikon';
$string['cfg_iconalt_check'] = 'Ikon tanda centang';
$string['cfg_iconalt_go'] = 'Lingkaran hijau';
$string['cfg_iconalt_group'] = 'Ikon grup';
$string['cfg_iconalt_group2'] = 'Ikon grup bergantian';
$string['cfg_iconalt_key'] = 'Ikon kunci';
$string['cfg_iconalt_lock'] = 'Ikon gembok';
$string['cfg_iconalt_locked'] = 'Ikon terkunci';
$string['cfg_iconalt_mnet'] = 'Ikon MNET';
$string['cfg_iconalt_o365'] = 'Ikon Microsoft 365';
$string['cfg_iconalt_plus'] = 'Ikon tanda tambah';
$string['cfg_iconalt_rightarrow'] = 'Ikon panah hadap kanan';
$string['cfg_iconalt_stop'] = 'lingkaran merah';
$string['cfg_iconalt_user'] = 'Ikon pengguna';
$string['cfg_iconalt_user2'] = 'Ikon pengguna bergantian';
$string['cfg_iconalt_userlock'] = 'Pengguna dengan ikon kunci';
$string['cfg_loginflow_authcode'] = 'Alur Kode Otorisasi <b>(disarankan)</b>';
$string['cfg_loginflow_authcode_desc'] = 'Dengan alur ini, pengguna mengklik nama IdP (Lihat "Nama Tampilan Penyedia" di atas) pada halaman masuk Moodle dan akan diarahkan ke penyedia tersebut untuk masuk. Setelah berhasil masuk, pengguna akan diarahkan kembali ke Moodle di mana proses masuk Moodle berlangsung secara transparan. Ini adalah cara masuk pengguna yang paling standar dan aman.';
$string['cfg_loginflow_key'] = 'Alur Masuk';
$string['cfg_loginflow_rocreds'] = 'Pemberian Kredensial Kata Sandi Pemilik Sumber Daya <b>(tidak berlaku lagi)</b>';
$string['cfg_loginflow_rocreds_desc'] = 'Alur masuk ini sudah tidak berlaku lagi dan akan segera dihapus dari pengaya. Dengan menggunakan alur ini, pengguna memasukkan nama pengguna dan kata sandi mereka ke dalam formulir masuk Moodle seperti yang mereka lakukan dengan masuk manual. Ini akan mengotorisasi pengguna dengan IdP, tetapi tidak akan membuat sesi di situs IdP. Misalnya, jika menggunakan Microsoft 365 dengan OpenID Connect, pengguna akan masuk ke Moodle tetapi tidak ke aplikasi web Microsoft 365. Disarankan untuk menggunakan permintaan otorisasi jika Anda ingin pengguna masuk ke Moodle dan IdP. Perlu diketahui bahwa tidak semua IdP mendukung alur ini. Opsi ini hanya boleh digunakan ketika jenis pemberian otorisasi lain tidak tersedia.';
$string['cfg_logoutendpoint_desc'] = 'URI titik akhir keluar dari IdP Anda yang akan digunakan.';
$string['cfg_logoutendpoint_key'] = 'Titik Akhir Keluar IdP';
$string['cfg_opname_desc'] = 'Ini adalah label yang ditujukan kepada pengguna akhir yang mengidentifikasi jenis kredensial yang harus digunakan pengguna untuk masuk. Label ini digunakan di seluruh bagian pengaya ini yang ditujukan kepada pengguna untuk mengidentifikasi penyedia Anda.';
$string['cfg_opname_key'] = 'Nama Tampilan Penyedia';
$string['cfg_redirecturi_desc'] = 'Ini adalah URI untuk mendaftar sebagai "Redirect URI". IdP OpenID Connect Anda akan meminta ini saat mendaftarkan Moodle sebagai klien. <br /><b>CATATAN:</b> Anda harus memasukkan ini di IdP OpenID Connect Anda *persis* seperti yang muncul di sini. Perbedaan apa pun akan mencegah login menggunakan OpenID Connect.';
$string['cfg_redirecturi_key'] = 'Alihkan URI';
$string['cfg_signoffintegration_desc'] = 'Jika opsi ini diaktifkan, ketika pengguna Moodle yang terhubung ke IdP yang dikonfigurasi keluar dari Moodle, integrasi akan memicu permintaan di titik akhir keluar di bawahnya, yang juga mencoba mengeluarkan pengguna dari IdP.<br/>
Catatan: Untuk integrasi dengan Microsoft Entra ID, URL situs Moodle ({$a}) perlu ditambahkan sebagai URI pengalihan di aplikasi Azure yang dibuat untuk integrasi Moodle dan Microsoft 365.';
$string['cfg_signoffintegration_key'] = 'Single Sign Out (dari Moodle ke IdP)';
$string['cfg_silentloginmode_desc'] = 'Jika diaktifkan, Moodle akan mencoba menggunakan sesi aktif pengguna yang diautentikasi ke titik akhir otorisasi yang dikonfigurasi untuk memasukkan pengguna.<br/>
Untuk menggunakan fitur ini, konfigurasi berikut diperlukan:
<ul>
<li><b>Paksa pengguna untuk masuk</b> (forcelogin) di <a href="{$a}" target="_blank">bagian Kebijakan situs</a> diaktifkan.</li>
<li><b>Pengaturan paksa pengalihan</b> (auth_oidc/forceredirect) di atas diaktifkan.</li>
</ul>
Untuk menghindari Moodle mencoba menggunakan akun pribadi atau akun dari penyewa lain untuk masuk, disarankan juga untuk menggunakan titik akhir khusus penyewa, daripada titik akhir generik yang menggunakan jalur "umum" atau "organisasi", dll.<br/>
<br/>
Untuk IdP Microsoft, pengalaman pengguna adalah sebagai berikut:
<ul>
<li>Jika tidak ada sesi pengguna aktif yang ditemukan, halaman masuk Moodle akan ditampilkan.</li>
<li>Jika hanya Jika ditemukan satu sesi pengguna aktif, dan pengguna memiliki akses ke aplikasi Entra ID (misalnya, pengguna berasal dari penyewa yang sama, atau merupakan pengguna tamu dari penyewa tersebut), pengguna akan masuk ke Moodle secara otomatis menggunakan SSO.
<li>Jika hanya ditemukan satu sesi pengguna aktif, tetapi pengguna tidak memiliki akses ke aplikasi Entra ID (misalnya, pengguna berasal dari penyewa yang berbeda, atau aplikasi memerlukan penugasan pengguna dan pengguna tidak ditetapkan), halaman masuk Moodle akan ditampilkan.
<li>Jika terdapat beberapa sesi pengguna aktif yang memiliki akses ke aplikasi Entra ID, sebuah halaman akan ditampilkan untuk memungkinkan pengguna memilih akun yang akan digunakan untuk masuk.
</ul>';
$string['cfg_silentloginmode_key'] = 'Mode Masuk Senyap';
$string['cfg_userrestrictions_desc'] = 'Hanya izinkan pengguna yang memenuhi batasan tertentu untuk masuk. <br /><b>Cara menggunakan batasan pengguna: </b> <ul><li>Masukkan pola <a href="https://en.wikipedia.org/wiki/Regular_expression">ekspresi reguler</a> yang sesuai dengan nama pengguna pengguna yang ingin Anda izinkan.</li><li>Masukkan satu pola per baris</li><li>Jika Anda memasukkan beberapa pola, pengguna akan diizinkan jika pola tersebut cocok dengan salah satu pola.</li><li>Karakter "/" harus diawali dengan "\\".</li><li>Jika Anda tidak memasukkan batasan apa pun di atas, semua pengguna yang dapat masuk ke OpenID Connect IdP akan diterima oleh Moodle.</li><li>Setiap pengguna yang tidak cocok dengan pola yang dimasukkan akan dicegah masuk menggunakan OpenID Connect.</li></ul>';
$string['cfg_userrestrictions_key'] = 'Batasan Pengguna';
$string['cfg_userrestrictionscasesensitive_desc'] = 'Ini mengontrol apakah opsi "/i" dalam ekspresi reguler digunakan dalam pencocokan pembatasan pengguna.<br/>Jika diaktifkan, semua pemeriksaan pembatasan pengguna akan dilakukan dengan peka huruf besar/kecil. Perhatikan bahwa jika ini dinonaktifkan, pola apa pun pada huruf besar/kecil akan diabaikan.';
$string['cfg_userrestrictionscasesensitive_key'] = 'Pembatasan Pengguna Peka Huruf Besar-Kecil';
$string['change_binding_username_claim_tool'] = 'Alat klaim nama pengguna yang mengikat perubahan';
$string['change_binding_username_claim_tool_description'] = '<p class="warning_header">Ini adalah fitur lanjutan!</p>
<p>Alat ini memungkinkan administrator situs untuk memperbarui secara massal data berikut:</p>
<ul>
<li>Nama pengguna akun Moodle,</li>
<li>Nama pengguna yang Mengikat dalam token ID OpenID Connect yang tersimpan,</li>
<li>Data koneksi akun Moodle dan Microsoft.</li>
</ul>
<p>Ini hanya boleh digunakan saat mengubah pengaturan <b>Klaim nama pengguna yang Mengikat</b>.</p>
<p class="warning">Berhati-hatilah saat menggunakan fitur ini, dan ikuti langkah-langkah di <a href="{$a}" target="_blank">Halaman konfigurasi klaim nama pengguna yang Mengikat</a>. Penyalahgunaan alat ini akan mengakibatkan kerusakan data pengguna Moodle dan/atau kegagalan SSO.</p>
<p>Alat ini menerima berkas CSV sederhana dengan dua kolom:</p>
<ul>
<li><b><span class="code">nama pengguna</span></b>: Nama pengguna akun Moodle saat ini yang akan diperbarui, atau jika pengguna saat ini dicocokkan secara manual, ini harus berupa nilai klaim pengikatan saat ini.</li>
<li><b><span class="code">nama_pengguna_baru</span></b>: Nilai peka huruf besar-kecil dari klaim token baru yang akan digunakan sebagai klaim nama pengguna pengikatan. Jika pengguna dicocokkan secara otomatis dan menggunakan jenis autentikasi OpenID Connect, huruf kecil dari nilai ini akan digunakan sebagai nama pengguna Moodle.</li>
</ul>
<p>Saat berkas diunggah, alat akan melakukan tindakan berikut:</p>
<ol>
<li>Temukan pengguna Moodle yang sudah ada dengan <span class="code">nama pengguna</span> yang diberikan sebagai nama pengguna atau alamat surel, dan gunakan metode autentikasi OpenID Connect. Jika ditemukan, perbarui nama pengguna pengguna menjadi huruf kecil dari <span class="code">nama_pengguna_baru</span>.</li>
<li>Perbarui rekaman token OpenID Connect.
<ul>
<li>Jika pengguna ditemukan pada langkah 1 di atas, maka cari rekaman token di tabel <span class="code">auth_oidc_token</span> untuk pengguna tersebut, dan perbarui kolom <span class="code">nama_pengguna</span> menjadi huruf kecil dari <span class="code">nama_pengguna_baru</span>, dan kolom <span class="code">nama_pengguna_oid</span> menjadi sama dengan <span class="code">nama_pengguna_baru</span>.</li>
<li>Jika tidak ada rekaman yang ditemukan di atas, sistem akan mencoba mencari rekaman di <span class="code">auth_oidc_token</span> dengan kolom <span class="code">nama_pengguna_oid</span> yang cocok dengan <span class="code">nama_pengguna_lama</span>, dan perbarui menjadi <span class="code">nama_pengguna_baru</span>.</li>
</ul>
<li>Menyediakan pengaya <span class="code">local_365</span> telah terinstal, perbarui rekaman koneksi pengguna.
<ul>
<li>Jika pengguna ditemukan pada langkah 1 di atas, maka cari rekaman koneksi pengguna tersebut di tabel <span class="code">local_o365_objects</span>, dan perbarui kolom <span class="code">o365name</span> agar sama dengan <span class="code">new_username</span>.</li>
<li>Jika tidak ada pengguna yang ditemukan pada langkah 1, maka program akan mencoba mencari rekaman untuk pengguna di tabel <span class="code">local_o365_objects</span> dengan nilai <span class="code">o365name</span> yang cocok dengan nilai <span class="code">username</span>, dan memperbaruinya menjadi nilai <span class="code">newusername</span>.</li>
</ul>
</ol>
<p>Contoh berkas di bawah ini akan mengubah klaim nama pengguna pengikatan dari <span class="code">upn</span> atau <span class="code">kirim surel</span> ke <span class="code">oid</span>.</p>';
$string['change_binding_username_claim_tool_result'] = 'Perbarui hasil';
$string['cleanup_oidc_tokens'] = 'Bersihkan token OpenID Connect';
$string['clientauthmethod'] = 'Metode autentikasi klien';
$string['clientauthmethod_help'] = '<ul>
<li>IdP di semua jenis dapat menggunakan metode autentikasi "<b>Rahasia</b>".</li>
<li>IdP di jenis <b>Microsoft Identity Platform (v2.0)</b> juga dapat menggunakan metode autentikasi <b>Sertifikat</b>.</li>
</ul>';
$string['clientcert'] = 'Kunci publik sertifikat klien';
$string['clientcert_help'] = 'Saat menggunakan metode autentikasi <b>sertifikat</b> dan sumber sertifikat <b>Teks biasa</b>, ini adalah kunci publik, atau sertifikat, yang digunakan untuk mengautentikasi dengan IdP.';
$string['clientcertfile'] = 'Nama berkas kunci publik sertifikat klien';
$string['clientcertfile_help'] = 'Saat menggunakan metode autentikasi <b>sertifikat</b> dan sumber sertifikat <b>Nama berkas</b>, ini adalah nama berkas kunci publik, atau sertifikat, yang digunakan untuk autentikasi dengan IdP. Berkas tersebut harus ada dalam map <b>microsoft_certs</b> di map data Moodle.';
$string['clientcertpassphrase'] = 'Frasa sandi sertifikat klien';
$string['clientcertpassphrase_help'] = 'Jika kunci pribadi sertifikat klien dienkripsi, ini adalah frasa sandi untuk mendekripsinya.';
$string['clientcertsource'] = 'Sumber sertifikat';
$string['clientcertsource_help'] = 'Saat menggunakan metode autentikasi <b>sertifikat</b>, ini digunakan untuk menentukan lokasi pengambilan sertifikat.
<ul>
Sumber <li><b>Teks biasa</b> mengharuskan konten berkas sertifikat/kunci pribadi dikonfigurasi dalam pengaturan area teks berikutnya.</li>
Sumber <li><b>Nama berkas</b> mengharuskan berkas sertifikat/kunci pribadi berada dalam map <b>microsoft_certs</b> di map data Moodle.</li>
</ul>';
$string['clientid'] = 'ID Aplikasi';
$string['clientid_help'] = 'ID Aplikasi / Klien yang terdaftar pada IdP.';
$string['clientprivatekey'] = 'Kunci pribadi sertifikat klien';
$string['clientprivatekey_help'] = 'Saat menggunakan metode autentikasi <b>sertifikat</b> dan sumber sertifikat <b>Teks biasa</b>, ini adalah kunci pribadi sertifikat yang digunakan untuk mengautentikasi dengan IdP.';
$string['clientprivatekeyfile'] = 'Nama file kunci pribadi sertifikat klien';
$string['clientprivatekeyfile_help'] = 'Saat menggunakan metode autentikasi <b>sertifikat</b> dan sumber sertifikat <b>Nama berkas</b>, ini adalah nama berkas kunci pribadi yang digunakan untuk autentikasi dengan IdP. Berkas tersebut harus ada di map <b>microsoft_certs</b> dalam map data Moodle.';
$string['clientsecret'] = 'Rahasia Klien';
$string['clientsecret_help'] = 'Saat menggunakan metode autentikasi <b>rahasia</b>, ini adalah rahasia klien pada IdP. Pada beberapa penyedia, ini juga disebut sebagai kunci.';
$string['csvdelimiter'] = 'Pemisah CSV';
$string['csvline'] = 'Baris CSV';
$string['customclaimname'] = 'Nama klaim kustom';
$string['customclaimname_description'] = 'Kolom ini hanya digunakan saat pengaturan <b>Klaim Nama Pengguna yang Mengikat</b> diatur ke <b>Kustom</b>.';
$string['delete_token'] = 'Hapus token';
$string['delete_token_and_reference'] = 'Hapus token dan referensi';
$string['encoding'] = 'Pengkodean';
$string['error_empty_client_cert'] = 'Kunci publik sertifikat klien tidak boleh kosong saat menggunakan metode autentikasi "sertifikat"';
$string['error_empty_client_cert_file'] = 'Berkas kunci publik sertifikat klien tidak boleh kosong saat menggunakan metode autentikasi "sertifikat"';
$string['error_empty_client_private_key'] = 'Kunci pribadi sertifikat klien tidak boleh kosong saat menggunakan metode autentikasi "sertifikat"';
$string['error_empty_client_private_key_file'] = 'Berkas kunci pribadi sertifikat klien tidak boleh kosong saat menggunakan metode autentikasi "sertifikat"';
$string['error_empty_client_secret'] = 'Rahasia klien tidak boleh kosong saat menggunakan metode autentikasi "rahasia"';
$string['error_empty_oidcresource'] = 'Sumber daya tidak boleh kosong saat menggunakan Microsoft Entra ID (v1.0) atau jenis IdP lainnya.';
$string['error_empty_tenantname_or_guid'] = 'Nama penyewa atau GUID tidak boleh kosong saat menggunakan metode autentikasi "sertifikat"';
$string['error_empty_tenantnameorguid'] = 'Nama penyewa atau GUID tidak boleh kosong saat menggunakan Microsoft Entra ID (v1.0) atau Microsoft Identity Platform (v2.0).';
$string['error_endpoint_mismatch_auth_endpoint'] = 'Titik akhir otorisasi yang dikonfigurasi tidak sesuai dengan jenis IdP yang dikonfigurasi.<br/>
<ul>
<li>Saat menggunakan jenis IdP "Microsoft Entra ID (v1.0)", gunakan titik akhir v1.0, misalnya https://login.microsoftonline.com/organizations/oauth2/authorize</li>
<li>Saat menggunakan jenis IdP "Microsoft Identity Platform (v2.0)", gunakan titik akhir v2.0, misalnya https://login.microsoftonline.com/organizations/oauth2/v2.0/authorize</li>
</ul>';
$string['error_endpoint_mismatch_token_endpoint'] = 'Titik akhir token yang dikonfigurasi tidak sesuai dengan jenis IdP yang dikonfigurasi.<br/>
<ul>
<li>Saat menggunakan jenis IdP "Microsoft Identity ID (v1.0)", gunakan titik akhir v1.0, misalnya https://login.microsoftonline.com/organizations/oauth2/token</li>
<li>Saat menggunakan jenis IdP "Microsoft Identity Platform (v2.0)", gunakan titik akhir v2.0, misalnya https://login.microsoftonline.com/organizations/oauth2/v2.0/token</li>
</ul>';
$string['error_invalid_client_authentication_method'] = 'Metode autentikasi klien tidak valid';
$string['error_invalid_upload_file'] = 'Berkas unggahan tidak valid.';
$string['error_no_response_available'] = 'Tidak ada tanggapan tersedia.';
$string['error_tenant_specific_endpoint_required'] = 'Saat menggunakan jenis IdP "Microsoft Identity Platform (v2.0)" dan metode autentikasi "Sertifikat", titik akhir spesifik penyewa (yaitu bukan umum/organisasi/konsumen) diperlukan.';
$string['errorauthdisconnectemptypassword'] = 'Kata sandi tidak boleh kosong';
$string['errorauthdisconnectemptyusername'] = 'Nama pengguna tidak boleh kosong';
$string['errorauthdisconnectifmanual'] = 'Jika menggunakan metode login manual, masukkan kredensial di bawah ini.';
$string['errorauthdisconnectinvalidmethod'] = 'Metode masuk yang tidak valid diterima.';
$string['errorauthdisconnectnewmethod'] = 'Gunakan Metode Login';
$string['errorauthdisconnectusernameexists'] = 'Nama pengguna itu telah terpakai. Pilih yang lain.';
$string['errorauthgeneral'] = 'Terjadi masalah saat Anda masuk. Harap hubungi administrator Anda untuk mendapatkan bantuan.';
$string['errorauthinvalididtoken'] = 'ID_token diterima tidak valid.';
$string['errorauthloginfaileddupemail'] = 'Masuk tidak valid: Akun yang ada di Moodle ini memiliki alamat surel yang sama dengan akun yang Anda coba buat, dan pengaturan "Izinkan akun dengan surel yang sama" (allowaccountssameemail) dinonaktifkan.';
$string['errorauthloginfailednouser'] = 'Masuk tidak valid: Pengguna tidak ditemukan di Moodle. Jika situs ini mengaktifkan pengaturan "authpreventaccountcreation", Anda mungkin memerlukan administrator untuk membuat akun terlebih dahulu.';
$string['errorauthnoaccesstoken'] = 'Token akses tidak diterima.';
$string['errorauthnoauthcode'] = 'Tidak ada kode otorisasi yang diterima dari server identitas. Log kesalahan mungkin memiliki lebih banyak informasi.';
$string['errorauthnocredsandendpoints'] = 'Harap konfigurasikan kredensial klien dan titik akhir OpenID Connect.';
$string['errorauthnohttpclient'] = 'Harap setel klien HTTP.';
$string['errorauthnoidtoken'] = 'OpenID Connect id_token tidak diterima.';
$string['errorauthunknownstate'] = 'Negara bagian tidak diketahui.';
$string['errorauthuseralreadyconnected'] = 'Anda sudah terhubung ke pengguna OpenID Connect yang berbeda.';
$string['errorauthuserconnectedtodifferent'] = 'Pengguna OpenID Connect yang diautentikasi sudah terhubung ke pengguna Moodle.';
$string['errorbadloginflow'] = 'Jenis autentikasi yang ditentukan tidak valid. Catatan: Jika Anda menerima pesan ini setelah instalasi atau peningkatan terbaru, harap bersihkan simpanan Moodle Anda.';
$string['errorinvalidcertificatesource'] = 'Sumber sertifikat tidak valid';
$string['errorinvalidredirect_message'] = 'URL yang anda coba alihkan tidak ada.';
$string['errorjwtbadpayload'] = 'Tidak dapat membaca payload JWT.';
$string['errorjwtcouldnotreadheader'] = 'Tidak dapat membaca header JWT';
$string['errorjwtempty'] = 'JWT kosong atau non-string diterima.';
$string['errorjwtinvalidheader'] = 'Header JWT tidak valid';
$string['errorjwtmalformed'] = 'JWT rusak diterima.';
$string['errorjwtunsupportedalg'] = 'JWS Alg atau JWE tidak didukung';
$string['errorlogintoconnectedaccount'] = 'Pengguna Microsoft 365 ini terhubung ke akun Moodle, tetapi login OpenID Connect tidak diaktifkan untuk akun Moodle ini. Silakan masuk ke akun Moodle menggunakan metode autentikasi akun yang ditentukan untuk menggunakan fitur Microsoft 365';
$string['errornodisconnectionauthmethod'] = 'Tidak dapat memutuskan sambungan karena tidak ada pengaya autentikasi yang diaktifkan untuk digunakan kembali. (baik metode log masuk pengguna sebelumnya atau metode log masuk manual).';
$string['erroroidccall'] = 'Kesalahan di OpenID Connect. Silakan periksa log untuk informasi lebih lanjut.';
$string['erroroidccall_message'] = 'Kesalahan dalam OpenID Connect: {$a}';
$string['erroroidcclientinsecuretokenendpoint'] = 'Titik akhir token harus menggunakan SSL / TLS untuk ini.';
$string['erroroidcclientinvalidendpoint'] = 'URI Endpoint yang diterima tidak valid.';
$string['erroroidcclientnoauthendpoint'] = 'Tidak ada titik akhir otorisasi yang diatur. Silakan atur dengan $this->setendpoints';
$string['erroroidcclientnocreds'] = 'Harap setel kredensial klien dengan setcreds';
$string['erroroidcclientnotokenendpoint'] = 'Titik akhir token belum diatur. Silakan atur dengan $this->setendpoints';
$string['erroroidcnotenabled'] = 'Plugin otentikasi OpenID Connect tidak diaktifkan.';
$string['errorrestricted'] = 'Situs ini memiliki batasan pada pengguna yang dapat masuk dengan OpenID Connect. Pembatasan ini saat ini mencegah Anda menyelesaikan upaya log masuk ini.';
$string['errorucpinvalidaction'] = 'Tindakan tidak valid diterima.';
$string['errorusermatched'] = 'Akun Microsoft 365 "{$a->entraidupn}" sudah cocok dengan pengguna Moodle "{$a->username}". Untuk menyelesaikan koneksi, silakan masuk sebagai pengguna Moodle tersebut terlebih dahulu dan ikuti petunjuk di blok Microsoft.';
$string['erroruserwithusernamealreadyexists'] = 'Terjadi galat saat mencoba mengganti nama akun Moodle Anda. Pengguna Moodle dengan nama pengguna baru sudah ada. Mintalah administrator situs Anda untuk menyelesaikan masalah ini terlebih dahulu.';
$string['event_debug'] = 'Pesan debug';
$string['eventuserauthed'] = 'Pengguna Resmi dengan OpenID Connect';
$string['eventuserconnected'] = 'Pengguna terhubung ke OpenID Connect';
$string['eventusercreated'] = 'Pengguna dibuat dengan OpenID Connect';
$string['eventuserdisconnected'] = 'Pengguna terputus dari OpenID Connect';
$string['eventuserloggedin'] = 'Pengguna Masuk dengan OpenID Connect';
$string['eventuserrenameattempt'] = 'Pengaya auth_oidc mencoba mengganti nama pengguna';
$string['examplecsv'] = 'Contoh berkas unggahan';
$string['heading_additional_options'] = 'Opsi tambahan';
$string['heading_basic'] = 'Pengaturan dasar';
$string['heading_debugging'] = 'Mengawakutu';
$string['heading_display'] = 'Tampilan';
$string['heading_sign_out'] = 'Integrasi keluar';
$string['heading_user_restrictions'] = 'Pembatasan pengguna';
$string['idp_type_microsoft_entra_id'] = 'Microsoft Entra ID (v1.0)';
$string['idp_type_microsoft_identity_platform'] = 'Microsoft identity platform (v2.0)';
$string['idp_type_other'] = 'Lainnya';
$string['idptype'] = 'Jenis Penyedia Identitas (IdP)';
$string['idptype_help'] = 'Tiga jenis IdP saat ini didukung:
<ul>
<li><b>Microsoft Entra ID (v1.0)</b>: Microsoft Entra ID dengan titik akhir oauth2 v1.0, misalnya https://login.microsoftonline.com/organizations/oauth2/authorize.</li>
<li><b>Microsoft Identity Platform (v2.0)</b>: Microsoft Entra ID dengan titik akhir oath2 v2.0, misalnya https://login.microsoftonline.com/organizations/oauth2/v2.0/authorize.</li>
<li><b>Lainnya</b>: semua IdP non-Microsoft.</li>
</ul>
Perbedaan antara opsi <b>Microsoft Entra ID (v1.0)</b> dan <b>Microsoft Identity Platform (v2.0)</b> dapat ditemukan di <a href="https://docs.microsoft.com/en-us/azure/active-directory/azuread-dev/azure-ad-endpoint-comparison">https://docs.microsoft.com/en-us/azure/active-directory/azuread-dev/azure-ad-endpoint-comparison</a>.<br/>
Perlu diketahui, aplikasi yang dikonfigurasi dapat menggunakan <b>sertifikat</b> selain <b>rahasia</b> untuk autentikasi saat menggunakan <b>Microsoft Identity Platform (v2.0)</b> IdP.<br/>
Titik akhir otorisasi dan token perlu dikonfigurasi sesuai dengan jenis IdP yang dikonfigurasi.';
$string['mismatched'] = 'Tidak cocok';
$string['mismatched_details'] = 'Rekaman token berisi nama pengguna "{$a->tokenusername}"; pengguna Moodle yang cocok memiliki nama pengguna "{$a->moodleusername}".';
$string['missing_idp_type'] = 'Konfigurasi ini hanya tersedia jika jenis IdP dikonfigurasi.';
$string['na'] = 'n/a';
$string['new_username'] = 'Nama pengguna baru';
$string['no_token_to_cleanup'] = 'Tidak ada token OIDC yang perlu dibersihkan.';
$string['oidc:manageconnection'] = 'Izinkan Sambungan dan Pemutusan OpenID';
$string['oidc:manageconnectionconnect'] = 'Izinkan Koneksi OpenID';
$string['oidc:manageconnectiondisconnect'] = 'Izinkan Pemutusan OpenID';
$string['oidcresource'] = 'Sumber Daya';
$string['oidcresource_help'] = 'Sumber daya OpenID Connect yang akan dikirimi permintaan.<br/>
<b>Perhatikan</b> bahwa parameter ini tidak didukung dalam jenis IdP <b>Microsoft Identity Platform (v2.0)</b>.';
$string['oidcscope'] = 'Cakupan';
$string['oidcscope_help'] = 'Cakupan OIDC yang akan digunakan.';
$string['pluginname'] = 'Menghubungkan OpenID';
$string['privacy:metadata:auth_oidc'] = 'Autentikasi OpenID Connect';
$string['privacy:metadata:auth_oidc_prevlogin'] = 'Metode login sebelumnya untuk membatalkan koneksi Microsoft 365';
$string['privacy:metadata:auth_oidc_prevlogin:method'] = 'Metode login sebelumnya';
$string['privacy:metadata:auth_oidc_prevlogin:password'] = 'Kolom kata sandi pengguna sebelumnya (terenkripsi).';
$string['privacy:metadata:auth_oidc_prevlogin:userid'] = 'ID pengguna Moodle';
$string['privacy:metadata:auth_oidc_sid'] = 'Pengidentifikasi sesi IdP (sid) digunakan untuk menemukan pengguna Moodle yang terhubung ketika SLO dipicu dari IdP';
$string['privacy:metadata:auth_oidc_sid:sid'] = 'Pengidentifikasi sesi IdP (sid)';
$string['privacy:metadata:auth_oidc_sid:timecreated'] = 'Waktu ketika pemetaan dibuat';
$string['privacy:metadata:auth_oidc_sid:userid'] = 'ID pengguna Moodle';
$string['privacy:metadata:auth_oidc_token'] = 'Token OpenID Connect';
$string['privacy:metadata:auth_oidc_token:authcode'] = 'Kode autentikasi untuk token';
$string['privacy:metadata:auth_oidc_token:expiry'] = 'Token kadaluwarsa';
$string['privacy:metadata:auth_oidc_token:idtoken'] = 'Token ID';
$string['privacy:metadata:auth_oidc_token:oidcuniqid'] = 'Pengenal pengguna unik OIDC.';
$string['privacy:metadata:auth_oidc_token:oidcusername'] = 'Nama pengguna dari pengguna OIDC';
$string['privacy:metadata:auth_oidc_token:refreshtoken'] = 'Token penyegaran';
$string['privacy:metadata:auth_oidc_token:scope'] = 'Cakupan token';
$string['privacy:metadata:auth_oidc_token:token'] = 'Token';
$string['privacy:metadata:auth_oidc_token:tokenresource'] = 'Sumber daya token';
$string['privacy:metadata:auth_oidc_token:userid'] = 'ID pengguna dari pengguna Moodle';
$string['privacy:metadata:auth_oidc_token:useridentifier'] = 'Pengidentifikasi pengguna dari pengguna OIDC';
$string['privacy:metadata:auth_oidc_token:username'] = 'Nama pengguna Moodle';
$string['rowpreviewnum'] = 'Pratinjau baris';
$string['secretexpiryrecipients'] = 'Penerima Pemberitahuan Kedaluwarsa Rahasia';
$string['secretexpiryrecipients_help'] = 'Daftar alamat surel yang dipisahkan koma untuk mengirimkan pemberitahuan kedaluwarsa rahasia.<br/>
Jika tidak ada alamat surel yang dimasukkan, administrator situs utama akan diberi tahu.';
$string['settings_fieldmap_feild_not_mapped'] = '(tidak dipetakan)';
$string['settings_fieldmap_field_bindingusernameclaim'] = 'Klaim Nama Pengguna yang Mengikat (hanya dapat dipetakan selama masuk)';
$string['settings_fieldmap_field_businessPhones'] = 'Telepon kantor';
$string['settings_fieldmap_field_city'] = 'Kota';
$string['settings_fieldmap_field_companyName'] = 'Nama Perusahaan';
$string['settings_fieldmap_field_country'] = 'Negara';
$string['settings_fieldmap_field_department'] = 'Departemen';
$string['settings_fieldmap_field_displayName'] = 'Nama Tampilan';
$string['settings_fieldmap_field_employeeId'] = 'ID Karyawan';
$string['settings_fieldmap_field_extensionattribute'] = 'Atribut ekstensi {$a}';
$string['settings_fieldmap_field_faxNumber'] = 'Nomor Faks';
$string['settings_fieldmap_field_givenName'] = 'Nama Pemberian';
$string['settings_fieldmap_field_groups'] = 'Grup';
$string['settings_fieldmap_field_jobTitle'] = 'Jabatan';
$string['settings_fieldmap_field_mail'] = 'Surel';
$string['settings_fieldmap_field_manager'] = 'Nama manajer';
$string['settings_fieldmap_field_manager_email'] = 'Surel manajer';
$string['settings_fieldmap_field_mobile'] = 'Seluler';
$string['settings_fieldmap_field_mobilePhone'] = 'Telepon seluler';
$string['settings_fieldmap_field_objectId'] = 'ID Objek';
$string['settings_fieldmap_field_officeLocation'] = 'Kantor';
$string['settings_fieldmap_field_onPremisesSamAccountName'] = 'Nama akun SAM lokal';
$string['settings_fieldmap_field_postalCode'] = 'Kode Pos';
$string['settings_fieldmap_field_preferredLanguage'] = 'Bahasa';
$string['settings_fieldmap_field_preferredName'] = 'Nama Pilihan';
$string['settings_fieldmap_field_roles'] = 'Peran';
$string['settings_fieldmap_field_sds_school_id'] = 'ID sekolah SDS ({$a})';
$string['settings_fieldmap_field_sds_school_name'] = 'Nama sekolah SDS ({$a})';
$string['settings_fieldmap_field_sds_school_role'] = 'Peran sekolah SDS ("Siswa" atau "Guru")';
$string['settings_fieldmap_field_sds_student_birthDate'] = 'Tanggal lahir siswa SDS';
$string['settings_fieldmap_field_sds_student_externalId'] = 'ID eksternal siswa SDS';
$string['settings_fieldmap_field_sds_student_grade'] = 'Nilai siswa SDS';
$string['settings_fieldmap_field_sds_student_graduationYear'] = 'Tahun kelulusan siswa SDS';
$string['settings_fieldmap_field_sds_student_studentNumber'] = 'Nomor siswa SDS';
$string['settings_fieldmap_field_sds_teacher_externalId'] = 'ID eksternal guru SDS';
$string['settings_fieldmap_field_sds_teacher_teacherNumber'] = 'Nomor guru SDS';
$string['settings_fieldmap_field_state'] = 'Negara Bagian';
$string['settings_fieldmap_field_streetAddress'] = 'Alamat Jalan';
$string['settings_fieldmap_field_surname'] = 'Nama Belakang';
$string['settings_fieldmap_field_teams'] = 'Tim';
$string['settings_fieldmap_field_telephoneNumber'] = 'Nomor Telepon';
$string['settings_fieldmap_field_userPrincipalName'] = 'Nama Prinsipal Pengguna';
$string['settings_page_application'] = 'IdP dan autentikasi';
$string['settings_page_binding_username_claim'] = 'Klaim Nama Pengguna yang Mengikat';
$string['settings_page_change_binding_username_claim_tool'] = 'Alat klaim nama pengguna yang mengikat perubahan';
$string['settings_page_cleanup_oidc_tokens'] = 'Bersihkan token OpenID Connect';
$string['settings_page_field_mapping'] = 'Pemetaan kolom';
$string['settings_page_other_settings'] = 'Opsi lainnya';
$string['settings_section_authentication'] = 'Autentikasi';
$string['settings_section_basic'] = 'Pengaturan dasar';
$string['settings_section_binding_username_claim'] = 'Klaim Nama Pengguna yang Mengikat';
$string['settings_section_endpoints'] = 'Titik Akhir';
$string['settings_section_other_params'] = 'Parameter lainnya';
$string['settings_section_secret_expiry_notification'] = 'Pemberitahuan kedaluwarsa rahasia';
$string['table_action'] = 'Tindakan';
$string['table_matching_details'] = 'Rincian';
$string['table_matching_status'] = 'Status pencocokan';
$string['table_oidc_unique_identifier'] = 'Pengidentifikasi unik OIDC';
$string['table_oidc_username'] = 'Nama pengguna OIDC';
$string['table_token_id'] = 'ID rekaman token';
$string['table_token_unique_id'] = 'ID unik OIDC';
$string['task_cleanup_oidc_sid'] = 'Bersihkan catatan SID OIDC';
$string['task_cleanup_oidc_state_and_token'] = 'Bersihkan status OIDC dan token yang tidak valid';
$string['token_deleted'] = 'Token berhasil dihapus';
$string['tokenendpoint'] = 'Titik Akhir Token';
$string['tokenendpoint_help'] = 'URI titik akhir token dari IdP Anda yang akan digunakan.<br/>
Perhatikan bahwa jika situs dikonfigurasi untuk mengizinkan akses pengguna dari penyewa lain, titik akhir token khusus penyewa tidak dapat digunakan.';
$string['ucp_disconnect_details'] = 'Ini akan memutuskan akun Moodle Anda dari {$a}. Anda perlu membuat nama pengguna dan kata sandi untuk masuk ke Moodle.';
$string['ucp_disconnect_title'] = 'Pemutusan {$a}';
$string['ucp_general_intro'] = 'Di sini Anda dapat mengelola koneksi Anda ke {$a}. Jika diaktifkan, Anda dapat menggunakan akun {$a} untuk masuk ke Moodle, alih-alih nama pengguna dan kata sandi terpisah. Setelah terhubung, Anda tidak perlu lagi mengingat nama pengguna dan kata sandi untuk Moodle, semua proses masuk akan ditangani oleh {$a}.';
$string['ucp_login_start'] = 'Mulai gunakan {$a} untuk masuk ke Moodle';
$string['ucp_login_start_desc'] = 'Ini akan mengubah akun Anda agar menggunakan {$a} untuk masuk ke Moodle. Setelah diaktifkan, Anda akan masuk menggunakan kredensial {$a} Anda - nama pengguna dan kata sandi Moodle Anda saat ini tidak akan berfungsi. Anda dapat memutuskan sambungan akun kapan saja dan kembali masuk seperti biasa.';
$string['ucp_login_status'] = 'masuk {$a} adalah:';
$string['ucp_login_stop'] = 'Setop menggunakan {$a} untuk masuk ke Moodle';
$string['ucp_login_stop_desc'] = 'Anda saat ini menggunakan {$a} untuk masuk ke Moodle. Mengklik "Berhenti menggunakan masuk {$a}" akan memutuskan akun Moodle Anda dari {$a}. Anda tidak akan bisa lagi masuk ke Moodle dengan akun {$a} Anda. Anda akan diminta untuk membuat nama pengguna dan kata sandi, dan selanjutnya Anda dapat langsung masuk ke Moodle.';
$string['ucp_o365accountconnected'] = 'Akun Microsoft 365 ini sudah terhubung dengan akun Moodle lain.';
$string['ucp_status_disabled'] = 'Dinonaktifkan';
$string['ucp_status_enabled'] = 'Diaktifkan';
$string['ucp_title'] = 'Manajemen {$a}';
$string['unmatched'] = 'Tidak cocok';
$string['update_error_incomplete_line'] = 'Baris ini tidak berisi kolom yang diperlukan.';
$string['update_error_invalid_new_username'] = 'Nama pengguna baru tidak valid.';
$string['update_error_nothing_updated'] = 'Tidak ada yang diperbarui.';
$string['update_error_user_not_found'] = 'Tidak ditemukan pengguna yang cocok dengan nama pengguna. Akan mencoba memperbarui pengguna yang cocok secara manual.';
$string['update_error_user_not_oidc'] = 'Pengguna tidak menggunakan metode autentikasi OpenID Connect. Akan mencoba memperbarui pengguna yang dicocokkan secara manual.';
$string['update_error_user_update_failed'] = 'Gagal memperbarui pengguna.';
$string['update_oncreate_and_onlogin'] = 'Pada pembuatan dan setiap masuk';
$string['update_oncreate_and_onlogin_and_usersync'] = 'Saat pembuatan, setiap masuk, dan setiap tugas sinkronisasi pengguna dijalankan';
$string['update_onlogin_and_usersync'] = 'Pada setiap masuk dan setiap tugas sinkronisasi pengguna dijalankan';
$string['update_stats_users_errors'] = 'Pengguna {$a} mengalami galat';
$string['update_stats_users_updated'] = 'Pengguna {$a} telah diperbarui';
$string['update_success_o365'] = 'Catatan koneksi Microsoft 365 berhasil diperbarui.';
$string['update_success_token'] = 'Token berhasil diperbarui.';
$string['update_success_username'] = 'Nama pengguna berhasil diperbarui.';
$string['update_username_results'] = 'Perbarui hasil nama pengguna';
$string['update_warning_email_match'] = 'Surel cocok dengan pengguna yang ada.';
$string['upload_usernames'] = 'Perbarui nama pengguna yang mengikat';
$string['usernamefile'] = 'Berkas';
