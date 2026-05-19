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
 * Strings for component 'local_o365', language 'id', version '5.1'.
 *
 * @package     local_o365
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acp_coursesynccustom'] = 'Kustomisasi sinkron kursus';
$string['acp_coursesynccustom_bulk'] = 'Operasi Massal';
$string['acp_coursesynccustom_bulk_disable'] = 'Nonaktifkan sinkron kursus pada kursus di halaman ini';
$string['acp_coursesynccustom_bulk_enable'] = 'Aktifkan sinkron kursus pada kursus di halaman ini';
$string['acp_coursesynccustom_confirm_all_action'] = 'Apakah Anda yakin ingin mengubah status sinkron semua kursus? Tindakan ini tidak dapat dibatalkan.';
$string['acp_coursesynccustom_controlled_per_course'] = 'Izinkan konfigurasi sinkron kursus dalam kursus';
$string['acp_coursesynccustom_controlled_per_course_desc'] = 'Jika diaktifkan, pengguna terdaftar dalam kursus Moodle yang memenuhi syarat untuk bertindak sebagai pemilik Tim (memiliki kemampuan "Pemilik Tim" [local/o365:teamowner]) akan dapat mengontrol sinkron kursus dari blok Microsoft di dalam kursus.';
$string['acp_coursesynccustom_disable_all'] = 'Nonaktifkan sinkron kursus pada semua kursus';
$string['acp_coursesynccustom_enable_all'] = 'Aktifkan sinkron kursus pada semua kursus';
$string['acp_coursesynccustom_enabled'] = 'Diaktifkan';
$string['acp_coursesynccustom_new_course'] = 'Diaktifkan secara bawaan untuk kursus baru';
$string['acp_coursesynccustom_new_course_desc'] = 'Jika diaktifkan, semua kursus yang baru dibuat akan mengaktifkan sinkron secara bawaan.';
$string['acp_coursesynccustom_off'] = 'Dinonaktifkan<br />Nonaktifkan pembuatan Tim untuk semua kursus.';
$string['acp_coursesynccustom_onall'] = 'Semua Fitur Diaktifkan<br />Mengaktifkan pembuatan Tim untuk semua kursus.';
$string['acp_coursesynccustom_oncustom'] = 'Sesuaikan<br />Mengizinkan pengguna yang berwenang untuk memilih kursus mana yang akan dibuat Timnya.<br> <span id="adminsetting_coursesync" style="font-weight: bold"><a href="{$a}">Sesuaikan sinkron kursus</a></span>';
$string['acp_coursesynccustom_savemessage'] = 'Perubahan Anda telah disimpan.';
$string['acp_coursesynccustom_sds_course'] = 'Dikunci untuk kursus SDS';
$string['acp_coursesynccustom_searchwarning'] = 'Catatan: Pencarian akan menghapus semua kemajuan yang belum disimpan. Tekan simpan perubahan untuk memastikan perubahan Anda tersimpan.';
$string['acp_coursesynccustom_settings_header'] = 'Opsi sinkron';
$string['acp_healthcheck'] = 'Pemeriksaan Kesehatan';
$string['acp_maintenance'] = 'Alat Pemeliharaan';
$string['acp_maintenance_cleandeltatoken'] = 'Bersihkan Token Delta Sinkron Pengguna';
$string['acp_maintenance_cleandeltatoken_completed'] = 'Token delta sinkron pengguna dan token delta lewati telah dibersihkan.';
$string['acp_maintenance_cleandeltatoken_desc'] = 'Jika sinkronisasi pengguna tidak berfungsi sepenuhnya setelah memperbarui pengaturan sinkron pengguna, hal itu mungkin disebabkan oleh token sinkron delta yang lama. Membersihkan token akan memaksa sinkron ulang lengkap pada saat sinkron pengguna dijalankan berikutnya.';
$string['acp_maintenance_debugdata'] = 'Hasilkan paket data awakutu';
$string['acp_maintenance_debugdata_desc'] = 'Ini akan menghasilkan paket yang berisi berbagai informasi tentang lingkungan Moodle dan Microsoft 365 Anda untuk membantu pengembang dalam menyelesaikan masalah apa pun yang mungkin Anda alami. Jika diminta oleh pengembang, jalankan alat ini dan kirimkan unduhan berkas yang dihasilkan. Catatan: Meskipun paket ini tidak berisi data token sensitif, kami meminta Anda untuk tidak mempublikasikan berkas ini secara umum atau mengirimkannya ke pihak yang tidak terpercaya.';
$string['acp_maintenance_desc'] = 'Alat ini dapat membantu Anda menyelesaikan beberapa masalah umum.';
$string['acp_maintenance_recreatedeletedgroups'] = 'Buat ulang grup Microsoft 365 yang telah dihapus';
$string['acp_maintenance_recreatedeletedgroups_all_groups_exist'] = 'Semua grup yang terhubung dengan kursus Moodle dan grup kursus tersebut ada.';
$string['acp_maintenance_recreatedeletedgroups_course'] = 'Kursus';
$string['acp_maintenance_recreatedeletedgroups_course_group'] = 'Grup kursus';
$string['acp_maintenance_recreatedeletedgroups_desc'] = 'Ini akan memeriksa apakah ada akun Microsoft Teams yang telah dihapus secara manual dan membuatnya kembali.';
$string['acp_maintenance_recreatedeletedgroups_group_type'] = 'Jenis objek Moodle';
$string['acp_maintenance_recreatedeletedgroups_group_type_course'] = 'Kursus';
$string['acp_maintenance_recreatedeletedgroups_group_type_course_group'] = 'Grup kursus';
$string['acp_maintenance_recreatedeletedgroups_status'] = 'Status';
$string['acp_maintenance_recreatedeletedgroups_status_created_fail'] = 'Pembuatan ulang grup gagal';
$string['acp_maintenance_recreatedeletedgroups_status_created_success'] = 'Grup telah dibuat ulang';
$string['acp_maintenance_recreatedeletedgroups_status_sync_disabled'] = 'Sinkron kursus dinonaktifkan';
$string['acp_maintenance_resyncgroupusers'] = 'Sinkronkan pengguna di grup Microsoft 365 untuk kursus';
$string['acp_maintenance_resyncgroupusers_course_output'] = 'Sinkronkan ulang keluaran';
$string['acp_maintenance_resyncgroupusers_desc'] = 'Ini akan menyinkronkan ulang keanggotaan pengguna untuk semua grup Microsoft 365 yang dibuat untuk semua kursus Moodle. Ini akan memastikan bahwa semua, dan hanya, pengguna yang terdaftar dalam kursus Moodle berada dalam grup Microsoft 365. <br /><b>Catatan:</b> Jika Anda telah menambahkan pengguna tambahan ke Grup Microsoft 365 yang tidak terdaftar dalam kursus Moodle terkait, mereka akan dihapus.';
$string['acp_maintenance_resyncgroupusers_no_course'] = 'Tidak ada kursus terhubung ke Microsoft 365';
$string['acp_maintenance_warning'] = 'Peringatan: Ini adalah alat tingkat lanjut. Silakan gunakan hanya jika Anda memahami apa yang Anda lakukan.';
$string['acp_parentsite_desc'] = 'Situs untuk berbagi data kursus Moodle.';
$string['acp_parentsite_name'] = 'Moodle';
$string['acp_teamconnection'] = 'Kelola koneksi Tim';
$string['acp_teamconnections'] = 'Kelola koneksi Tim';
$string['acp_teamconnections_actions'] = 'Tindakan';
$string['acp_teamconnections_cache_last_updated'] = 'Simpanan Teams terakhir diperbarui pada {$a->lastupdated}. Klik <a href="{$a->updateurl}">di sini</a> untuk memperbarui simpanan.';
$string['acp_teamconnections_cache_never_updated'] = 'Simpanan Teams belum pernah diperbarui. Klik <a href="{$a->updateurl}">di sini</a> untuk memperbarui.';
$string['acp_teamconnections_connected_team'] = 'Tim yang Terhubung';
$string['acp_teamconnections_connection_completed'] = 'Kursus ini telah berhasil terhubung dengan Tim';
$string['acp_teamconnections_course_connected'] = 'Kursus ini telah berhasil terhubung dengan Tim.';
$string['acp_teamconnections_current_connection'] = 'KONEKSI SAAT INI';
$string['acp_teamconnections_exception_course_not_exist'] = 'Kursus yang seharusnya dihubungkan tidak ada.';
$string['acp_teamconnections_exception_invalid_team_id'] = 'ID Tim tidak valid';
$string['acp_teamconnections_exception_no_unified_token'] = 'Gagal mendapatkan token terpadu untuk melakukan panggilan API.';
$string['acp_teamconnections_exception_not_configured'] = 'Microsoft 365 belum dikonfigurasi sepenuhnya.';
$string['acp_teamconnections_exception_team_already_connected'] = 'Tim tersebut sudah terhubung ke kursus lain';
$string['acp_teamconnections_exception_team_creation'] = 'Terjadi galat saat mencoba membuat Tim. Rincian: {$a}';
$string['acp_teamconnections_exception_team_no_owner'] = 'Tidak dapat menemukan pemilik Tim yang sesuai.';
$string['acp_teamconnections_form_connect_course'] = 'Kelola koneksi Tim untuk kursus {$a}';
$string['acp_teamconnections_form_sds_warning'] = 'CATATAN: Menghubungkan kursus Moodle secara manual dengan Tim yang dibuat oleh Student Data Sync (SDS) dapat mengakibatkan perilaku yang tidak terduga baik dalam sinkronisasi kursus Moodle maupun sinkronisasi SDS, oleh karena itu hal ini harus dilarang.';
$string['acp_teamconnections_form_team'] = 'Pilih Tim';
$string['acp_teamconnections_group_only'] = '(Hanya grup)';
$string['acp_teamconnections_invalid_connection'] = 'Koneksi tidak valid';
$string['acp_teamconnections_no_owner'] = 'Tambahkan pemilik untuk terhubung ke Teams.';
$string['acp_teamconnections_not_connected'] = 'Tidak terhubung';
$string['acp_teamconnections_sync_disabled'] = 'Penyinkronan kursus perlu diaktifkan terlebih dahulu sebelum mengelola koneksi Teams.';
$string['acp_teamconnections_table_cannot_create_team_from_group'] = 'Tidak dapat membuat Tim dari grup - tidak ada pemilik';
$string['acp_teamconnections_table_connect'] = 'Hubungkan';
$string['acp_teamconnections_table_connect_to_different_team'] = 'Hubungkan ke Tim yang berbeda';
$string['acp_teamconnections_table_missing_team'] = 'Kursus ini terhubung ke tim yang tidak ada. Hal ini akan diperbaiki pada saat sinkron kursus terjadwal selanjutnya dijalankan.';
$string['acp_teamconnections_table_update'] = 'Perbarui';
$string['acp_teamconnections_team_already_connected'] = 'Kursus ini sudah terhubung dengan Tim.';
$string['acp_teamconnections_team_created'] = 'Tim berhasil dibuat untuk kursus tersebut.';
$string['acp_teamconnections_team_exists_but_not_connected'] = 'Kursus ini dikonfigurasi agar hanya terhubung ke Grup, namun Tim yang terhubung ke Grup tersebut memang ada.';
$string['acp_teamconnections_team_missing'] = '(Tim hilang)';
$string['acp_teamconnections_teams_cache_updated'] = 'Simpanan Tim berhasil diperbarui.';
$string['acp_tenants_actions'] = 'Tindakan';
$string['acp_tenants_add'] = 'Tambahkan Penyewa Baru';
$string['acp_tenants_additional_tenants'] = 'Penyewa tambahan';
$string['acp_tenants_delete'] = 'Hapus';
$string['acp_tenants_errornotsetup'] = 'Silakan selesaikan proses penyiapan pengaya sebelum menambahkan penyewa tambahan.';
$string['acp_tenants_hosttenant'] = 'Penyewa Host: {$a}';
$string['acp_tenants_intro'] = '<b>Cara Kerja Multipenyewa:</b><br />Multipenyewa mengizinkan beberapa penyewa Microsoft Entra untuk mengakses situs Moodle Anda. <br /><br />
    Berikut cara pengaturannya:
    <ol>
        <li>Masuk ke Moodle sebagai pengguna administrator situs yang tidak menggunakan pengaya autentikasi OpenID Connect.</li>
        <li>Pastikan pengaturan <b>Titik Akhir Otorisasi</b> dan <b>Titik Akhir Token</b> dari pengaya autentikasi OpenID Connect menggunakan pengaturan bawaan yang tidak spesifik untuk penyewa.</li>
        <li>Nonaktifkan pengaya autentikasi OpenID Connect di Moodle.</li> (Gunakan <a href="{$a}/admin/settings.php?section=manageauths">halaman administrasi pengaya autentikasi</a>.)</li>
        <li>Buka Microsoft Entra ID dan temukan aplikasi yang telah Anda konfigurasi untuk Moodle.</li>
        <li>Aktifkan multipenyewa di aplikasi Microsoft Entra ID dan simpan perubahannya.</li>
        <li>Berikan setidaknya salah satu izin Grafik yang Didelegasikan berikut ke aplikasi: <b>Directory.Read.All</b>, <b>Domain.Read.All</b>, atau <b>Domain.ReadWrite.All</b>. Persetujuan admin untuk organisasi Anda tidak diperlukan.</li>
        <li>Jika Anda sudah masuk menggunakan akun Microsoft Anda dari penyewa tambahan, keluar sepenuhnya dan masuk kembali.</li>
        <li>Untuk setiap penyewa yang ingin Anda aktifkan, klik "Tambahkan Penyewa Baru" dan masuk dengan akun administrator dari penyewa yang ingin Anda aktifkan.</li>
        <li>Setelah Anda menambahkan semua penyewa yang Anda inginkan, aktifkan kembali pengaya autentikasi OpenID Connect di Moodle.</li>
        <li>Selesai! Untuk menambahkan penyewa tambahan di masa mendatang, cukup klik tombol "Tambahkan Penyewa Baru" dan masuk dengan akun administrator dari penyewa tersebut.</li>
    </ol>
    <b>Catatan Penting:</b> Mengaktifkan multipenyewa di aplikasi Microsoft Entra ID mengizinkan semua penyewa Microsoft Entra untuk mengakses aplikasi Anda saat diaktifkan. Menambahkan penyewa di sini mengizinkan kami untuk membatasi akses Moodle ke penyewa yang Anda konfigurasikan. <b>Jika Anda menghapus semua penyewa dari daftar ini sebelum menonaktifkan multipenyewa di aplikasi Microsoft Entra ID, atau mengaktifkan autentikasi OpenID Connect di Moodle dengan daftar kosong, situs Moodle Anda akan terbuka untuk semua penyewa Microsoft Entra.</b>';
$string['acp_tenants_legacy_tenants'] = 'Penyewa lama (Tindakan diperlukan)';
$string['acp_tenants_legacy_tenants_help'] = 'Penyewa tambahan yang ditambahkan sebelumnya mungkin tidak berfungsi dalam alur kerja multipenyewa yang diperbarui, dan perlu diperbaiki.<br/>
Silakan gunakan tombol "Tambahkan Penyewa Baru" di atas untuk menambahkannya lagi.';
$string['acp_tenants_none'] = 'Anda belum mengkonfigurasi penyewa apa pun. Jika Anda telah mengaktifkan multipenyewa di aplikasi Microsoft Entra ID, situs Moodle Anda mungkin terbuka untuk semua pengguna Microsoft 365.';
$string['acp_tenants_revokeaccess'] = 'Cabut Akses';
$string['acp_tenants_tenant'] = 'Penyewa';
$string['acp_tenants_title'] = 'Multipenyewa';
$string['acp_tenants_title_desc'] = 'Halaman ini membantu Anda mengatur akses multipenyewa ke Moodle dari Microsoft 365.';
$string['acp_tenantsadd_desc'] = 'Untuk memberikan akses ke penyewa tambahan, klik tombol di bawah dan masuk ke Microsoft 365 menggunakan akun administrator penyewa baru. Anda akan kembali ke daftar penyewa tambahan di mana penyewa baru akan tercantum. Anda kemudian dapat menggunakan Moodle dengan penyewa baru tersebut.';
$string['acp_tenantsadd_linktext'] = 'Lanjutkan ke halaman masuk Microsoft 365';
$string['acp_userconnections'] = 'Kelola Koneksi Pengguna';
$string['acp_userconnections_column_actions'] = 'Tindakan';
$string['acp_userconnections_column_muser'] = 'Pengguna Moodle';
$string['acp_userconnections_column_o365user'] = 'Pengguna Microsoft 365';
$string['acp_userconnections_column_status'] = 'Status Koneksi';
$string['acp_userconnections_column_usinglogin'] = 'Menggunakan Masuk';
$string['acp_userconnections_filtering_muserfullname'] = 'Nama lengkap pengguna Moodle';
$string['acp_userconnections_filtering_musername'] = 'Nama pengguna Moodle';
$string['acp_userconnections_filtering_o365username'] = 'Nama pengguna Microsoft 365';
$string['acp_userconnections_manualmatch_details'] = 'Halaman ini mengizinkan Anda untuk mencocokkan satu pengguna Moodle dengan satu pengguna Microsoft 365.';
$string['acp_userconnections_manualmatch_error_muserconnected'] = 'Pengguna Moodle sudah terhubung ke pengguna Microsoft 365';
$string['acp_userconnections_manualmatch_error_muserconnected2'] = 'Pengguna Moodle sudah terhubung ke pengguna Microsoft 365 (2)';
$string['acp_userconnections_manualmatch_error_musermatched'] = 'Pengguna Moodle sudah terhubung ke pengguna Microsoft 365';
$string['acp_userconnections_manualmatch_error_o365userconnected'] = 'Pengguna Microsoft 365 sudah terhubung ke pengguna Moodle lain';
$string['acp_userconnections_manualmatch_error_o365usermatched'] = 'Pengguna Microsoft 365 sudah dicocokkan ke pengguna Moodle lainnya';
$string['acp_userconnections_manualmatch_musername'] = 'Pengguna Moodle';
$string['acp_userconnections_manualmatch_o365username'] = 'Nama pengguna Microsoft 365';
$string['acp_userconnections_manualmatch_title'] = 'Pencocokan pengguna manual';
$string['acp_userconnections_manualmatch_uselogin'] = 'Masuk dengan Microsoft 365';
$string['acp_userconnections_resync_nodata'] = 'Informasi Microsoft 365 yang tersimpan untuk pengguna ini tidak ditemukan.';
$string['acp_userconnections_resync_notconnected'] = 'Pengguna ini tidak terhubung ke Microsoft 365';
$string['acp_userconnections_table_connected'] = 'Terhubung';
$string['acp_userconnections_table_disconnect'] = 'Putuskan';
$string['acp_userconnections_table_disconnect_confirmmsg'] = 'Ini akan memutuskan koneksi pengguna Moodle "{$a}" dari Microsoft 365. Klik tautan di bawah untuk melanjutkan.';
$string['acp_userconnections_table_match'] = 'Cocokkan';
$string['acp_userconnections_table_matched'] = 'Cocok dengan pengguna yang sudah ada.<br />Menunggu penyelesaian.';
$string['acp_userconnections_table_noconnection'] = 'Tidak Ada Koneksi';
$string['acp_userconnections_table_resync'] = 'Sinkronkan ulang';
$string['acp_userconnections_table_synced'] = 'Disinkronkan dari Microsoft Entra ID.<br />Menunggu masuk awal.';
$string['acp_userconnections_table_unmatch'] = 'Batalkan pencocokan';
$string['acp_userconnections_table_unmatch_confirmmsg'] = 'Ini akan membatalkan pencocokan pengguna Moodle "{$a}" dari Microsoft 365. Klik tautan di bawah untuk melanjutkan.';
$string['acp_usermatch'] = 'Pencocokan Pengguna';
$string['acp_usermatch_desc'] = 'Alat ini mengizinkan Anda untuk mencocokkan pengguna Moodle ke pengguna Microsoft 365. Anda akan mengunggah berkas yang berisi pengguna Moodle dan pengguna Microsoft 365 yang terkait, dan tugas cron akan memverifikasi data dan mengatur pencocokan.';
$string['acp_usermatch_matchqueue'] = 'Langkah 2: Antrian Pencocokan';
$string['acp_usermatch_matchqueue_clearall'] = 'Hapus Semua';
$string['acp_usermatch_matchqueue_clearerrors'] = 'Hapus Galat';
$string['acp_usermatch_matchqueue_clearqueued'] = 'Hapus Diantri';
$string['acp_usermatch_matchqueue_clearsuccess'] = 'Hapus Berhasil';
$string['acp_usermatch_matchqueue_column_muser'] = 'Nama Pengguna Moodle';
$string['acp_usermatch_matchqueue_column_o365user'] = 'Nama Pengguna Microsoft 365';
$string['acp_usermatch_matchqueue_column_openidconnect'] = 'OpenID Connect';
$string['acp_usermatch_matchqueue_column_status'] = 'Status';
$string['acp_usermatch_matchqueue_desc'] = 'Tabel ini menunjukkan status terkini dari operasi pencocokan. Setiap kali tugas terjadwal <b>Proses Antrian Pencocokan</b> dijalankan, sejumlah pengguna berikut akan diproses.<br /><b>Catatan:</b> Halaman ini tidak akan diperbarui secara dinamis, segarkan halaman ini untuk melihat status saat ini.';
$string['acp_usermatch_matchqueue_empty'] = 'Antrian pencocokan saat ini kosong. Unggah berkas data menggunakan pemilih berkas di atas untuk menambahkan pengguna ke antrian.';
$string['acp_usermatch_matchqueue_status_error'] = 'Galat: {$a}';
$string['acp_usermatch_matchqueue_status_queued'] = 'Diantri';
$string['acp_usermatch_matchqueue_status_success'] = 'Berhasil';
$string['acp_usermatch_upload'] = 'Langkah 1: Unggah Pencocokan Baru';
$string['acp_usermatch_upload_desc'] = 'Unggah berkas data yang berisi nama pengguna Moodle dan Microsoft 365 untuk mencocokkan pengguna Moodle ke pengguna Microsoft 365.<br />
<br />
Berkas ini harus berupa berkas CSV teks biasa sederhana yang berisi tiga item per baris:
<ul>
<li>Nama pengguna Moodle,</li>
<li>Nama pengguna Microsoft 365,</li>
<li>1 atau 0, di mana 1 berarti mengubah metode autentikasi pengguna menjadi OpenID Connect, dan 0 berarti mempertahankan metode autentikasi yang ada dan menggunakannya sebagai akun tertaut.</li>
</ul>
Jangan sertakan header atau data tambahan apa pun.<br />
Contoh: <pre>moodleuser1,bob.smith@example.onmicrosoft.com,1<br />moodleuser2,john.doe@example.onmicrosoft.com,0</pre>';
$string['acp_usermatch_upload_err_badmime'] = 'Jenis {$a} tidak didukung. Harap unggah CSV teks biasa.';
$string['acp_usermatch_upload_err_data'] = 'Baris #{$a} berisi data yang tidak valid. Setiap baris dalam berkas CSV harus memiliki dua item: nama pengguna Moodle dan nama pengguna Microsoft 365.';
$string['acp_usermatch_upload_err_fileopen'] = 'Tidak dapat membuka berkas untuk diproses. Apakah izin di direktori Moodledata Anda sudah benar?';
$string['acp_usermatch_upload_err_nofile'] = 'Tidak ada berkas yang diterima untuk ditambahkan ke antrian.';
$string['acp_usermatch_upload_submit'] = 'Tambahkan Berkas Data Ke Antrian Pencocokan';
$string['cachedef_groups'] = 'Menyimpan data grup Microsoft 365';
$string['calendar_event'] = 'Lihat rincian';
$string['calendar_setting'] = 'Aktifkan Sinkron Kalender Outlook';
$string['calendar_site'] = 'Kalender Seluruh Situs';
$string['calendar_user'] = 'Kalender Pribadi (Pengguna)';
$string['cohortsync_addmapping'] = 'Tambahkan koneksi';
$string['cohortsync_connectionnotcohortsync'] = 'Permintaan tidak valid: jenis koneksi tidak cocok.';
$string['cohortsync_connectionnotfound'] = 'Permintaan tidak valid: koneksi tidak ditemukan.';
$string['cohortsync_deletemapping'] = 'Hapus koneksi';
$string['cohortsync_desc'] = 'Halaman ini mengizinkan sinkronisasi satu arah dari grup Microsoft ke cohort Moodle pada konteks tingkat sistem. Menambahkan koneksi baru akan memulai proses sinkronisasi - pengguna dari Grup Microsoft yang dipilih yang terhubung dengan Microsoft akan ditambahkan ke Cohort Moodle yang dipilih.';
$string['cohortsync_emptycohorts'] = 'Tidak ada Kohor Moodle yang tersedia';
$string['cohortsync_emptygroups'] = 'Tidak ada Grup Microsoft yang tersedia';
$string['cohortsync_emptymatchings'] = 'Tidak ada koneksi yang ditemukan';
$string['cohortsync_mappingadded'] = 'Koneksi baru berhasil ditambahkan';
$string['cohortsync_mappingdeleted'] = 'Koneksi berhasil dihapus';
$string['cohortsync_mappingfailed'] = 'Galat saat menambahkan kohor dan koneksi grup. Kemungkinan penyebabnya: grup atau kohor tidak ada, grup sudah terhubung ke kohor lain, grup sudah terhubung ke kohor ini.';
$string['cohortsync_select_cohort'] = 'Kohor Moodle';
$string['cohortsync_select_group'] = 'Grup Microsoft';
$string['cohortsync_tabledesc'] = 'Koneksi saat ini antara Grup Microsoft dan Kohor Moodle';
$string['cohortsync_tablehead_actions'] = 'Tindakan';
$string['cohortsync_tablehead_cohort'] = 'Kohor Moodle';
$string['cohortsync_tablehead_group'] = 'Grup Microsoft';
$string['cohortsync_taskname'] = 'Sinkron Cohort';
$string['cohortsync_title'] = 'Sinkron Cohort';
$string['cohortsync_unifiedapierror'] = 'Galat mendapatkan daftar grup dari Microsoft.';
$string['course_selector_label'] = 'Pilih kursus yang ada';
$string['courserequest_customrequestnote'] = '| Permintaan ini dibuat dari halaman permintaan kursus Microsoft Teams dan akan dihubungkan ke Tim: "{$a->name}" dengan URL {$a->url} setelah disetujui.';
$string['courserequest_duplicate'] = 'Permintaan kursus yang tertunda atau telah disetujui dari Tim yang sama sudah ada.';
$string['courserequest_emptyteams'] = 'Tidak ada Tim Microsoft yang tersedia.';
$string['courserequest_graphapi_disabled'] = 'Koneksi Microsoft Teams tidak tersedia. Silakan hubungi administrator situs Anda.';
$string['courserequest_invalid_team'] = 'Tim yang digunakan dalam permintaan kursus tidak valid.';
$string['courserequest_teams'] = 'Tim Microsoft';
$string['courserequest_teams_help'] = 'Pilih Tim Microsoft yang akan dihubungkan ke kursus. Pemilik dan anggota Tim yang sudah ada akan terdaftar dalam kursus yang dibuat setelah permintaan kursus disetujui.';
$string['courserequest_title'] = 'Minta kursus dari Tim';
$string['courserequest_updatecourserequeststatus_taskname'] = 'Perbarui status permintaan kursus';
$string['erroracpapcantgettenant'] = 'Tidak mendapatkan penyewa Microsoft Entra, silakan masukkan secara manual.';
$string['erroracpauthoidcnotconfig'] = 'Silakan atur kredensial aplikasi di auth_oidc terlebih dahulu.';
$string['erroracpcantgettenant'] = 'Tidak mendapatkan URL OneDrive, silakan masukkan secara manual.';
$string['erroracplocalo365notconfig'] = 'Silakan konfigurasikan local_o365 terlebih dahulu.';
$string['errorcannotgetapiclient'] = 'Tidak mendapatkan klien Graph API.';
$string['errorcannotgettoken'] = 'Tidak mendapatkan token aplikasi atau sistem.';
$string['errorcouldnotgettoken'] = 'Tidak mendapatkan token Pengguna API Aplikasi atau Sistem. Jika Anda belum memberikan persetujuan admin, harap lakukan terlebih dahulu.';
$string['errorcouldnotrefreshtoken'] = 'Tidak mendapatkan pemuatan ulang token';
$string['errorgetapplicationtoken'] = 'Tidak mendapatkan token aplikasi. Silakan verifikasikan konfigurasi integrasi Anda.';
$string['errorhttpclientbadtempfileloc'] = 'Tidak dapat membuka lokasi sementara untuk menyimpan berkas.';
$string['errorhttpclientnofileinput'] = 'Tidak ada parameter berkas di httpclient::put';
$string['errornoapifound'] = 'Tidak ditemukan API dengan pengidentifikasi {$a}.';
$string['errornodirectaccess'] = 'Akses langsung ke halaman dilarang';
$string['errornoresponsesavailable'] = 'Tidak ada respons yang tersedia.';
$string['errornotoken'] = 'Tidak ada token yang tersedia untuk pengguna #{$a}';
$string['errornotokenforsysmemuser'] = 'Tidak ada token yang tersedia untuk pengguna sistem. Silakan jalankan pemeriksaan kesehatan local_o365.';
$string['errornotokenforusersync'] = 'Tidak ada token yang tersedia untuk sinkron pengguna.';
$string['erroro365apibadcall'] = 'Galat dalam panggilan API.';
$string['erroro365apibadcall_message'] = 'Galat dalam panggilan API: {$a}';
$string['erroro365apibadpermission'] = 'Izin tidak ditemukan';
$string['erroro365apicouldnotcreatesite'] = 'Masalah membuat situs.';
$string['erroro365apicoursenotfound'] = 'Kursus tidak ditemukan.';
$string['erroro365apiinvalidmethod'] = 'httpmethod yang diteruskan ke apicall tidak valid';
$string['erroro365apiinvalidtoken'] = 'Token tidak valid atau kedaluwarsa.';
$string['erroro365apinoparentinfo'] = 'Tidak dapat menemukan informasi map induk';
$string['erroro365apinotimplemented'] = 'Ini harus ditimpa.';
$string['erroro365apinotoken'] = 'Tidak memiliki token untuk sumber daya dan pengguna yang diberikan, dan tidak dapat memperolehnya. Apakah token pemuatan ulang pengguna telah kedaluwarsa?';
$string['erroro365apisiteexistsnolocal'] = 'Situs sudah ada, tapi tidak menemukan rekaman lokal.';
$string['erroro365badphoto'] = 'Foto profil yang diterima tidak valid dari Microsoft 365.';
$string['erroro365nophoto'] = 'Pengguna ini tidak memiliki foto di Microsoft 365.';
$string['errorprovisioningapp'] = 'Aplikasi Moodle tidak dapat diaktifkan di Tim.';
$string['errortenantvaluenotstring'] = 'Nilai penyewa harus berupa string';
$string['errorunabletofindgraphapi'] = 'Tidak dapat menemukan api graph di aplikasi.';
$string['errorupnchangeisnotsupported'] = 'UPN akun Microsoft Anda telah berubah. Silakan hubungi administrator Anda untuk memperbarui akun Moodle Anda.';
$string['errorusermatched'] = 'Akun Microsoft 365 "{$a->entraidupn}" sudah cocok dengan pengguna Moodle "{$a->username}". Untuk menyelesaikan koneksi, silakan masuk sebagai pengguna Moodle tersebut terlebih dahulu dan ikuti petunjuk di blok Microsoft.';
$string['eventapifail'] = 'Kegagalan API';
$string['eventcalendarsubscribed'] = 'Pengguna berlangganan ke kalender';
$string['eventcalendarunsubscribed'] = 'Pengguna berhenti berlangganan dari kalender';
$string['healthcheck_fixlink'] = 'Klik di sini untuk memperbaikinya.';
$string['healthcheck_ratelimit_result_disabled'] = 'Fitur pembatasan akses telah dinonaktifkan.';
$string['healthcheck_ratelimit_result_notice'] = 'Pembatasan akses ringan telah diaktifkan untuk menangani peningkatan beban situs Moodle. <br /><br />Semua fitur Microsoft 365 berfungsi, ini hanya sedikit memberi jeda pada permintaan untuk mencegah gangguan pada layanan Microsoft 365. Setelah aktivitas Moodle menurun, semuanya akan kembali normal. <br />(Tingkat {$a->level} / dimulai {$a->timestart})';
$string['healthcheck_ratelimit_result_passed'] = 'Panggilan API Microsoft 365 berjalan dengan kecepatan penuh.';
$string['healthcheck_ratelimit_result_warning'] = 'Pembatasan akses (throttling) telah diaktifkan untuk menangani beban situs Moodle yang signifikan. <br /><br />Semua fitur Microsoft 365 masih berfungsi, tetapi permintaan Microsoft 365 mungkin membutuhkan waktu lebih lama untuk diselesaikan. Setelah aktivitas situs Moodle menurun, semuanya akan kembali normal. <br />(Tingkat {$a->level} / dimulai {$a->timestart})';
$string['healthcheck_ratelimit_title'] = 'Pembatasan API';
$string['help_user_appassign'] = 'Bantuan Tugaskan Pengguna ke Aplikasi';
$string['help_user_appassign_help'] = 'Ini akan menyebabkan semua akun Microsoft Entra ID dengan akun Moodle yang cocok ditugaskan ke aplikasi Microsoft Entra ID yang dibuat untuk pemasangan Moodle ini, jika belum ditugaskan.';
$string['help_user_create'] = 'Bantuan Buat Akun';
$string['help_user_create_help'] = 'Ini akan membuat pengguna di Moodle dari setiap pengguna di Microsoft Entra ID yang terhubung. Hanya pengguna yang saat ini tidak memiliki akun Moodle yang akan dibuatkan akun. Akun baru akan dibuat menggunakan metode autentikasi OpenID Connect menggunakan profil Microsoft Entra ID mereka, dan mereka akan dapat menggunakan semua fitur integrasi Microsoft 365/Moodle.';
$string['help_user_delete'] = 'Bantuan Hapus Akun';
$string['help_user_delete_help'] = 'Ini akan menghapus pengguna dari Moodle jika mereka ditandai sebagai telah dihapus di Microsoft Entra ID. Ini hanya akan berfungsi jika opsi penangguhan pengguna diaktifkan. Akun Moodle akan dihapus dan semua informasi pengguna terkait akan dihapus dari Moodle. Hati-hati! Catatan: Secara bawaan, penghapusan terjadi 30 hari setelah akun dihapus di Microsoft Entra ID karena periode retensi penghapusan sementara Entra ID (akun dapat dipulihkan selama waktu ini).';
$string['help_user_disabledsync'] = 'Bantuan status sinkronisasi dinonaktifkan';
$string['help_user_disabledsync_help'] = 'Ini akan menangguhkan/mengaktifkan kembali pengguna di Moodle jika akun terkait mereka di Microsoft Entra ID ditandai sebagai dicegah/diizinkan untuk masuk.';
$string['help_user_emailsync'] = 'Bantuan sinkronisasi nama pengguna Microsoft Entra ID ke email Moodle';
$string['help_user_emailsync_help'] = 'Mengaktifkan opsi ini akan mencocokkan nama pengguna Microsoft Entra ID dengan surel Moodle, bukan perilaku bawaan yang mencocokkan nama pengguna Microsoft Entra ID dengan nama pengguna Moodle.';
$string['help_user_guestsync'] = 'Bantuan sinkronisasi pengguna tamu';
$string['help_user_guestsync_help'] = 'Jika diaktifkan, pengguna tamu di Microsoft Entra ID akan disinkronkan ke Moodle dalam tugas sinkron pengguna.';
$string['help_user_match'] = 'Bantuan Cocokkan Akun';
$string['help_user_match_help'] = 'Ini akan memeriksa setiap pengguna di Microsoft Entra ID yang terhubung dan mencoba mencocokkannya dengan pengguna di Moodle. Pencocokan ini didasarkan pada UPN Microsoft Entra ID dan nama pengguna Moodle. Pencocokan tidak peka huruf besar/kecil dan mengabaikan bagian domain dari UPN Microsoft Entra ID. Misalnya, "BoB.SmiTh" di Moodle akan cocok dengan "bob.smith@example.onmicrosoft.com". Pengguna yang cocok akan memiliki akun Moodle dan Microsoft Entra ID yang terhubung dan dapat menggunakan semua fitur integrasi Microsoft 365 dan Moodle. Metode autentikasi pengguna tidak akan berubah kecuali pengaturan di bawah ini diaktifkan.';
$string['help_user_matchswitchauth'] = 'Bantuan Alihkan Akun yang Cocok';
$string['help_user_matchswitchauth_help'] = 'Ini memerlukan pengaturan "Cocokkan pengguna Moodle yang sudah ada" di atas untuk diaktifkan. Saat pengguna dicocokkan, mengaktifkan pengaturan ini akan mengubah metode autentikasi mereka menjadi OpenID Connect. Mereka kemudian dapat masuk ke Moodle dengan kredensial Microsoft 365 mereka. Catatan: Pastikan pengaya autentikasi OpenID Connect diaktifkan jika Anda ingin menggunakan pengaturan ini.';
$string['help_user_nodelta'] = 'Bantuan melakukan sinkronisasi penuh';
$string['help_user_nodelta_help'] = 'Secara bawaan, sinkron pengguna hanya akan menyinkronkan perubahan dari Microsoft Entra ID dari saat sinkron terakhir dijalankan. Dengan mencentang opsi ini, sinkron pengguna penuh akan dilakukan setiap kali.';
$string['help_user_photosync'] = 'Bantuan sinkronisasi Foto Profil Microsoft 365 (Cron)';
$string['help_user_photosync_help'] = 'Ini akan menyebabkan semua foto profil Moodle pengguna disinkronkan dengan foto profil Microsoft 365 mereka.';
$string['help_user_photosynconlogin'] = 'Bantuan sinkronisasi Foto Profil Microsoft 365 (Masuk)';
$string['help_user_photosynconlogin_help'] = 'Ini akan menyebabkan foto profil Moodle pengguna disinkronkan dengan foto profil Microsoft 365 mereka saat pengguna tersebut masuk. Perhatikan bahwa ini memerlukan pengguna untuk mengunjungi halaman yang berisi blok Microsoft di Moodle.';
$string['help_user_reenable'] = 'Bantuan Aktifkan Kembali Akun';
$string['help_user_reenable_help'] = 'Ini akan mengaktifkan kembali akun Moodle yang ditangguhkan jika mereka kembali dari Microsoft Entra ID.';
$string['help_user_suspend'] = 'Bantuan Tangguhkan Akun';
$string['help_user_suspend_help'] = 'Ini akan menangguhkan pengguna dari Moodle jika mereka ditandai sebagai dihapus di Microsoft Entra ID.';
$string['help_user_tzsync'] = 'Bantuan sinkronisasi zona waktu Outlook (Cron)';
$string['help_user_tzsync_help'] = 'Ini akan menyebabkan zona waktu Moodle semua pengguna disinkronkan dengan preferensi zona waktu Outlook mereka.';
$string['help_user_tzsynconlogin'] = 'Bantuan sinkronisasi zona waktu Outlook (Masuk)';
$string['help_user_tzsynconlogin_help'] = 'Ini akan menyebabkan zona waktu Moodle pengguna disinkronkan dengan preferensi zona waktu Outlook mereka. Perhatikan bahwa ini memerlukan pengguna untuk mengunjungi halaman yang berisi blok Microsoft di Moodle.';
$string['help_user_update'] = 'Bantuan Perbarui Semua Akun';
$string['help_user_update_help'] = 'ini akan memperbarui semua pengguna di Moodle dari setiap pengguna di Microsoft Entra ID yang terhubung.';
$string['multi_tenants_settings_needs_update'] = 'Pengaturan multi penyewa perlu diperbarui. Silakan buka <a href="{$a}">halaman konfigurasi multi penyewa</a>.';
$string['notification_content_invalid_secret'] = 'Kepada administrator situs,

Rahasia aplikasi Microsoft Entra ID yang digunakan dalam integrasi Moodle dan Microsoft 365 Anda tampaknya tidak valid. Hal ini dapat disebabkan oleh rahasia yang telah kedaluwarsa, atau telah dihapus.
Silakan tinjau rahasia tersebut untuk memastikan integrasi berfungsi sebagaimana mestinya.';
$string['notification_content_secret_almost_expired'] = 'Kepada administrator situs,

Rahasia aplikasi Microsoft Entra ID yang digunakan dalam integrasi Moodle dan Microsoft 365 Anda akan kedaluwarsa pada {$a}.
Silakan buat rahasia baru di Microsoft Entra ID dan perbarui di konfigurasi integrasi untuk menghindari gangguan integrasi.';
$string['notification_content_secret_expired'] = 'Kepada administrator situs,

Rahasia aplikasi Microsoft Entra ID yang digunakan dalam integrasi Moodle dan Microsoft 365 Anda telah kedaluwarsa.
Silakan buat rahasia baru di Microsoft Entra ID dan perbarui di konfigurasi integrasi untuk memulihkan integrasi.';
$string['notification_days_days'] = '{$a} hari';
$string['notification_days_less_than_one_day'] = 'kurang dari 1 hari';
$string['notification_days_one_day'] = '1 hari';
$string['notification_subject_invalid_secret'] = 'Tindakan diperlukan: ditemukan rahasia aplikasi Microsoft Entra ID tidak valid';
$string['notification_subject_secret_almost_expired'] = 'Tindakan diperlukan: rahasia aplikasi Microsoft Entra ID segera kedaluwarsa';
$string['notification_subject_secret_expired'] = 'Tindakan diperlukan: rahasia aplikasi Microsoft Entra ID kedaluwarsa';
$string['o365:manageconnectionlink'] = 'Kelola Tautan Koneksi';
$string['o365:manageconnectionunlink'] = 'Kelola Pembatalan Tautan Koneksi';
$string['o365:managegroups'] = 'Lihat tautan ke layanan Microsoft 365 dan opsi manajemen di blok Microsoft pada kursus dengan sinkron yang diaktifkan.';
$string['o365:teammember'] = 'Anggota Tim';
$string['o365:teamowner'] = 'Pemilik Tim';
$string['o365:viewgroups'] = 'Lihat tautan ke layanan Microsoft 365 di blok Microsoft pada kursus dengan sinkron yang diaktifkan.';
$string['other_login'] = 'Masuk secara manual';
$string['personal_calendar'] = 'Pribadi';
$string['pluginname'] = 'Integrasi Microsoft 365';
$string['privacy:metadata:local_o365'] = 'Pengaya Lokal Microsoft 365';
$string['privacy:metadata:local_o365_appassign'] = 'Informasi tentang penugasan peran aplikasi Microsoft 365';
$string['privacy:metadata:local_o365_appassign:assigned'] = 'Apakah pengguna telah ditugaskan ke aplikasi';
$string['privacy:metadata:local_o365_appassign:muserid'] = 'ID dari pengguna Moodle';
$string['privacy:metadata:local_o365_appassign:photoid'] = 'ID dari foto pengguna di Microsoft 365';
$string['privacy:metadata:local_o365_appassign:photoupdated'] = 'Ketika foto pengguna terakhir diperbarui dari Microsoft 365';
$string['privacy:metadata:local_o365_calidmap'] = 'Informasi tentang tautan antara acara kalender Microsoft 365 dan acara kalender Moodle.';
$string['privacy:metadata:local_o365_calidmap:eventid'] = 'ID dari acara di Moodle.';
$string['privacy:metadata:local_o365_calidmap:origin'] = 'Dari mana acara berasal. Baik Moodle atau Microsoft 365.';
$string['privacy:metadata:local_o365_calidmap:outlookeventid'] = 'ID dari acara di Outlook.';
$string['privacy:metadata:local_o365_calidmap:userid'] = 'ID dari pengguna yang memiliki acara.';
$string['privacy:metadata:local_o365_calsettings'] = 'Informasi tentang pengaturan sinkron kalender';
$string['privacy:metadata:local_o365_calsettings:o365calid'] = 'ID dari kalender di Microsoft 365';
$string['privacy:metadata:local_o365_calsettings:timecreated'] = 'Waktu rekaman dibuat.';
$string['privacy:metadata:local_o365_calsettings:user_id'] = 'ID dari pengguna Moodle';
$string['privacy:metadata:local_o365_calsub'] = 'Informasi tentang langganan sinkron antara kalender Moodle dan Outlook';
$string['privacy:metadata:local_o365_calsub:caltype'] = 'Jenis kalender Moodle (situs, kursus, pengguna)';
$string['privacy:metadata:local_o365_calsub:caltypeid'] = 'ID yang diasosiasikan dari kalender Moodle';
$string['privacy:metadata:local_o365_calsub:isprimary'] = 'Apakah ini adalah kalender utama';
$string['privacy:metadata:local_o365_calsub:o365calid'] = 'ID dari kalender Microsoft 365';
$string['privacy:metadata:local_o365_calsub:syncbehav'] = 'Perilaku sinkron (yaitu Moodle ke Outlook atau Outlook ke Moodle)';
$string['privacy:metadata:local_o365_calsub:timecreated'] = 'Waktu langganan dibuat.';
$string['privacy:metadata:local_o365_calsub:user_id'] = 'ID dari pengguna Moodle yang langganan';
$string['privacy:metadata:local_o365_connections'] = 'Informasi tentang koneksi antara pengguna Moodle dan Microsoft 365 yang belum dikonfirmasikan';
$string['privacy:metadata:local_o365_connections:entraidupn'] = 'UPN dari pengguna Microsoft Entra ID.';
$string['privacy:metadata:local_o365_connections:muserid'] = 'ID dari pengguna Moodle';
$string['privacy:metadata:local_o365_connections:uselogin'] = 'Apakah untuk mengalihkan metode autentikasi pengguna ketika selesai.';
$string['privacy:metadata:local_o365_matchqueue'] = 'Informasi tentang pencocokan pengguna Moodle ke pengguna Microsoft 365';
$string['privacy:metadata:local_o365_matchqueue:completed'] = 'Apakah rekaman telah diproses';
$string['privacy:metadata:local_o365_matchqueue:errormessage'] = 'Pesan galat (jika ada)';
$string['privacy:metadata:local_o365_matchqueue:musername'] = 'Nama pengguna dari pengguna Moodle.';
$string['privacy:metadata:local_o365_matchqueue:o365username'] = 'Nama pengguna dari pengguna Microsoft 365.';
$string['privacy:metadata:local_o365_matchqueue:openidconnect'] = 'Apakah akan mengalihkan pengguna ke autentikasi OpenID Connect ketika pencocokan dibuat';
$string['privacy:metadata:local_o365_objects'] = 'Informasi tentang hubungan antara objek Moodle dan Microsoft 365';
$string['privacy:metadata:local_o365_objects:metadata'] = 'Metadata yang diasosiasikan apa pun';
$string['privacy:metadata:local_o365_objects:moodleid'] = 'ID dari objek di Moodle';
$string['privacy:metadata:local_o365_objects:o365name'] = 'Nama objek yang mudah dibaca manusia di Microsoft 365';
$string['privacy:metadata:local_o365_objects:objectid'] = 'Id objek Microsoft 365';
$string['privacy:metadata:local_o365_objects:subtype'] = 'Subjenis objek.';
$string['privacy:metadata:local_o365_objects:tenant'] = 'Penyewa objek berada (di lingkungan multi-penyewa)';
$string['privacy:metadata:local_o365_objects:timecreated'] = 'Waktu rekaman dibuat.';
$string['privacy:metadata:local_o365_objects:timemodified'] = 'Waktu rekaman dimodifikasikan.';
$string['privacy:metadata:local_o365_objects:type'] = 'Jenis objek (grup, pengguna, kursus, dll.)';
$string['privacy:metadata:local_o365_token'] = 'Informasi tentang token Microsoft 365 untuk pengguna';
$string['privacy:metadata:local_o365_token:expiry'] = 'Waktu masa laku token.';
$string['privacy:metadata:local_o365_token:refreshtoken'] = 'Pemuatan ulang token.';
$string['privacy:metadata:local_o365_token:scope'] = 'Cakupan token.';
$string['privacy:metadata:local_o365_token:token'] = 'Token.';
$string['privacy:metadata:local_o365_token:tokenresource'] = 'Sumber daya token.';
$string['privacy:metadata:local_o365_token:user_id'] = 'ID dari pengguna Moodle';
$string['settings_addsync_tzsync'] = 'Sinkronkan zona waktu Outlook ke Moodle melalui cronjob';
$string['settings_addsync_tzsynconlogin'] = 'Sinkronkan zona waktu Outlook ke Moodle saat masuk';
$string['settings_adminconsent'] = 'Persetujuan Admin';
$string['settings_adminconsent_btn'] = 'Berikan Persetujuan Admin';
$string['settings_adminconsent_details'] = 'Untuk memberikan akses ke beberapa izin yang dibutuhkan, administrator perlu memberikan persetujuan admin. Klik tombol ini, lalu masuk dengan akun administrator Microsoft Entra ID untuk memberikan persetujuan. Ini perlu dilakukan setiap kali Anda mengubah izin "Admin" di Entra ID.';
$string['settings_adminconsent_error_53003'] = 'Terdapat masalah yang diketahui saat memberikan persetujuan admin, yang hanya berlaku untuk jenis IdP platform identitas Microsoft (v2.0). Akibatnya, integrasi tidak dapat mendeteksi penyewa Microsoft Entra dan pengaturan URL OneDrive for Business di bawah ini secara otomatis. Harap atur nilai ini secara manual.';
$string['settings_check_moodle_settings'] = 'Periksa pengaturan Moodle';
$string['settings_cohortsync'] = 'Sinkronisasi Cohort';
$string['settings_cohortsync_details'] = 'Tinjau dan kelola sinkronisasi antara Cohort Moodle dan Grup Microsoft.';
$string['settings_cohortsync_linktext'] = 'Kelola sinkron Cohort';
$string['settings_cohortsync_title'] = 'Sinkron Cohort';
$string['settings_course_request_enrolment_member_role'] = 'Peran anggota Tim';
$string['settings_course_request_enrolment_member_role_desc'] = 'Peran yang akan diberikan kepada anggota Tim ketika permintaan kursus disetujui.';
$string['settings_course_request_enrolment_owner_role'] = 'Peran pemilik Tim';
$string['settings_course_request_enrolment_owner_role_desc'] = 'Peran yang akan diberikan kepada pemilik Tim ketika permintaan kursus disetujui.';
$string['settings_course_reset_teams'] = 'Pengaturan ulang kursus Tindakan tim/grup';
$string['settings_course_reset_teams_details'] = 'Tindakan yang harus dilakukan pada Tim atau grup yang terhubung ke kursus ketika kursus tersebut diatur ulang.';
$string['settings_course_reset_teams_option_archive_only'] = 'Putuskan koneksi kursus hanya dengan Tim atau grup<br />Tim atau grup yang ada yang terhubung ke kursus akan diganti namanya sesuai konfigurasi. Jika sebuah Tim terhubung, Tim tersebut akan diarsipkan. Tidak ada Tim atau grup baru yang akan dibuat.';
$string['settings_course_reset_teams_option_do_nothing'] = 'Jangan lakukan apa pun<br/>Tim atau grup masih terhubung ke kursus. Pembatalan pendaftaran pengguna akan mengakibatkan penghapusan keanggotaan Tim atau grup pengguna.';
$string['settings_course_reset_teams_option_force_archive'] = 'Putuskan koneksi kursus dengan Tim atau grup dan buat yang baru.<br/>Tim atau grup yang ada yang terhubung ke kursus akan diganti namanya sesuai konfigurasi. Jika sebuah Tim terhubung, Tim tersebut akan diarsipkan. Tim atau grup baru akan dibuat dan dihubungkan ke kursus.';
$string['settings_course_reset_teams_option_per_course'] = 'Izinkan pengaturan per kursus<br/>Ini memerlukan penambahan blok Microsoft ke kursus. Pengguna yang memiliki kemampuan untuk mengatur ulang kursus dapat memilih apa yang akan dilakukan selama pengaturan ulang kursus di dalam blok tersebut.';
$string['settings_coursesync'] = 'Sinkron kursus';
$string['settings_coursesync_courses_per_task'] = 'Kursus yang akan disinkronisasikan per eksekusi tugas';
$string['settings_coursesync_courses_per_task_details'] = 'Jumlah kursus yang status sinkron Tim/grupnya akan diproses pada setiap eksekusi tugas.';
$string['settings_coursesync_delete_group_on_course_deletion'] = 'Hapus grup Microsoft 365 saat kursus Moodle yang terhubung dihapus.';
$string['settings_coursesync_delete_group_on_course_deletion_details'] = 'Jika diaktifkan, Moodle akan mencoba menghapus Grup Microsoft 365 (dan Tim terkait) saat kursus yang terhubung dihapus dari Moodle. Perlu dicatat bahwa ini tidak berlaku untuk kursus yang dibuat dari sinkronisasi SDS.';
$string['settings_coursesync_delete_group_on_course_sync_disabled'] = 'Hapus Grup Microsoft 365 saat sinkron kursus dinonaktifkan';
$string['settings_coursesync_delete_group_on_course_sync_disabled_details'] = 'Jika diaktifkan, Moodle akan mencoba menghapus Grup Microsoft 365 yang terhubung (dan Tim terkait) ketika sinkron kursus dimatikan untuk kursus Moodle.';
$string['settings_coursesync_details'] = 'Jika diaktifkan, ini akan membuat dan memelihara Tim untuk kursus di situs Moodle (Bawaan: Dinonaktifkan). Ini akan membuat Tim yang dibutuhkan setiap kali cron dijalankan, dan menambahkan semua pengguna yang terdaftar saat ini sebagai pemilik atau anggota Tim, tergantung pada pemeriksaan kemampuan. Setelah itu, keanggotaan Tim akan dipertahankan saat pengguna mendaftar atau berhenti mendaftar dari kursus Moodle.';
$string['settings_coursesync_enrolment_member_role'] = 'Peran anggota Tim';
$string['settings_coursesync_enrolment_member_role_desc'] = 'Peran yang akan diberikan kepada anggota Tim selama sinkron.';
$string['settings_coursesync_enrolment_owner_role'] = 'Peran pemilik Tim';
$string['settings_coursesync_enrolment_owner_role_desc'] = 'Peran yang akan diberikan kepada pemilik Tim selama sinkron.';
$string['settings_coursesync_sync_both'] = 'Perbarui Teams dan Moodle';
$string['settings_coursesync_sync_direction'] = 'Perilaku sinkron pengguna kursus';
$string['settings_coursesync_sync_direction_details'] = 'Pilih arah sinkronisasi yang Anda inginkan antara pengguna di Moodle dan Microsoft Teams.';
$string['settings_coursesync_sync_moodle_to_teams'] = 'Dari Moodle ke Teams';
$string['settings_coursesync_sync_teams_to_moodle'] = 'Dari Teams ke Moodle';
$string['settings_customtheme'] = 'Tema kustom (Lanjutan)';
$string['settings_customtheme_desc'] = 'Tema yang direkomendasikan adalah "boost_o365teams". Namun, Anda dapat memilih tema yang berbeda jika Anda memiliki tema khusus yang diadaptasi untuk digunakan di tab Tim.<br/>
Harap dicatat bahwa tema khusus yang ditetapkan di tingkat kursus atau kategori akan lebih diutamakan daripada pengaturan di sini, yaitu kursus akan menggunakan tema kursus atau kategori di aplikasi Moodle di Teams secara bawaan. Ini dapat diperbaiki dengan memperbarui $CFG->themeorder di config.php menjadi "array(\'session\', \'course\', \'category\', \'user\', \'cohort\', \'site\');".';
$string['settings_debugmode'] = 'Rekam pesan awakutu';
$string['settings_debugmode_details'] = 'Jika diaktifkan, informasi akan dicatat ke dalam log Moodle yang dapat membantu mengidentifikasi masalah. <a href="{$a}">Lihat pesan log yang direkam.</a>';
$string['settings_detectoidc'] = 'Kredensial Aplikasi';
$string['settings_detectoidc_credsinvalid'] = 'Kredensial belum diatur atau belum lengkap.';
$string['settings_detectoidc_credsinvalid_link'] = 'Atur Kredensial';
$string['settings_detectoidc_credsvalid'] = 'Kredensial telah diatur.';
$string['settings_detectoidc_credsvalid_link'] = 'Ubah';
$string['settings_detectoidc_details'] = 'Untuk berkomunikasi dengan Microsoft 365, Moodle memerlukan kredensial untuk mengidentifikasi dirinya. Kredensial ini diatur dalam pengaya autentikasi "OpenID Connect".';
$string['settings_detectperms'] = 'Izin Aplikasi';
$string['settings_detectperms_details'] = 'Untuk menggunakan fitur pengaya, izin yang benar harus diatur di aplikasi Microsoft Entra ID.';
$string['settings_detectperms_errorfix'] = 'Terjadi galat saat mencoba memperbaiki izin. Silakan perbaiki secara manual di Microsoft Entra ID.';
$string['settings_detectperms_fixperms'] = 'Perbaiki izin';
$string['settings_detectperms_invalid'] = 'Periksa izin di Microsoft Entra ID';
$string['settings_detectperms_missing'] = 'Hilang:';
$string['settings_detectperms_nocreds'] = 'Kredensial aplikasi perlu diatur terlebih dahulu. Lihat pengaturan di atas.';
$string['settings_detectperms_nounified'] = 'API Microsoft Graph tidak tersedia, beberapa fitur baru mungkin tidak berfungsi.';
$string['settings_detectperms_unifiednomissing'] = 'Semua izin terpadu tersedia.';
$string['settings_detectperms_update'] = 'Perbarui';
$string['settings_detectperms_valid'] = 'Izin telah diatur.';
$string['settings_download_teams_tab_app_manifest'] = 'Unduh berkas manifes';
$string['settings_download_teams_tab_app_manifest_reminder'] = 'Silakan simpan semua perubahan Anda sebelum mengunduh manifes.';
$string['settings_entratenant'] = 'Penyewa Microsoft Entra';
$string['settings_entratenant_details'] = 'Digunakan untuk mengidentifikasi organisasi Anda di dalam Microsoft. Misalnya: "contoso.onmicrosoft.com".<br/>
Untuk menemukan nilai ini secara manual:
<ul>
<li>Buka <a href="http://portal.azure.com" target="_blank">Portal Azure</a>.</li>
<li>Masuk dengan akun admin Anda.</li>
<li>Di bilah pencarian, ketik "ID Microsoft Entra", dan buka halaman "ID Microsoft Entra".</li>
<li>Gunakan nilai di kolom <b>Domain utama</b> di bagian "Informasi dasar".</li>
</ul>';
$string['settings_fieldmap'] = 'Pemetaan kolom pengguna';
$string['settings_fieldmap_details'] = 'Tersedia di <a href="{$a}">pengaya autentikasi Open ID Connect</a>.';
$string['settings_group_mail_alias_course'] = 'Bagian kursus dari alias surat grup';
$string['settings_group_mail_alias_prefix'] = 'Prefiks alias surat grup';
$string['settings_group_mail_alias_suffix'] = 'Sufiks alias surat grup';
$string['settings_header_advanced'] = 'Lanjutan';
$string['settings_header_moodle_app'] = 'Aplikasi Moodle Tim';
$string['settings_header_sds'] = 'Sinkron SDS';
$string['settings_header_setup'] = 'Atur';
$string['settings_header_syncsettings'] = 'Pengaturan Sinkron';
$string['settings_header_teams'] = 'Pengaturan Tim';
$string['settings_header_tools'] = 'Alat';
$string['settings_healthcheck'] = 'Pemeriksaan Kesehatan';
$string['settings_healthcheck_details'] = 'Jika ada sesuatu yang tidak berfungsi dengan benar, melakukan pemeriksaan kesehatan biasanya dapat mengidentifikasi masalah dan menawarkan solusi';
$string['settings_healthcheck_linktext'] = 'Lakukan pemeriksaan kesehatan';
$string['settings_main_name_option_full_name'] = 'Nama lengkap';
$string['settings_main_name_option_id'] = 'ID yang dibuat Moodle';
$string['settings_main_name_option_id_number'] = 'Nomor ID';
$string['settings_main_name_option_short_name'] = 'Nama pendek';
$string['settings_maintenance'] = 'Pemeliharaan';
$string['settings_maintenance_details'] = 'Berbagai tugas pemeliharaan tersedia untuk menyelesaikan beberapa isu umum.';
$string['settings_maintenance_linktext'] = 'Lihat alat pemeliharaan';
$string['settings_moodle_app_id'] = 'ID aplikasi Moodle';
$string['settings_moodle_app_id_desc'] = 'ID aplikasi Moodle yang diunggah di katalog aplikasi Teams.<br/>
Jika dikonfigurasi, Moodle akan mencoba membuat tab Moodle yang terhubung ke kursus Moodle di saluran "Umum" dari Tim yang dibuat/terhubung.';
$string['settings_moodle_app_id_desc_auto_id'] = '<br/>
Nilai yang terdeteksi secara otomatis adalah "<span class="local_o365_settings_moodle_app_id">{$a}</span>".';
$string['settings_moodlesettingssetup'] = 'Konfigurasikan Moodle';
$string['settings_moodlesettingssetup_details'] = 'Ini akan memastikan bahwa:
<ul class="local_o365_settings_teams_horizontal_spacer">
<li>Hanya kuki aman yang diaktifkan.</li>
<li>Open ID diaktifkan.</li>
<li>Penyematan Bingkai diaktifkan.</li>
<li>Layanan Web diaktifkan.</li>
<li>Protokol REST diaktifkan.</li>
<li>Layanan Web Microsoft 365 diaktifkan.</li>
<li>Pengguna terautentikasi memiliki izin untuk membuat token layanan web.</li>
<li>Pengguna terautentikasi memiliki izin untuk menggunakan Protokol REST.</li>
</ul>';
$string['settings_moodlesetup_checking'] = 'Memeriksa...';
$string['settings_notice_cookiesecurealreadyenabled'] = 'Hanya kuki aman sudah diaktifkan';
$string['settings_notice_cookiesecureenabled'] = 'Hanya kuki aman berhasil diaktifkan';
$string['settings_notice_createtokenallowed'] = 'Izin untuk membuat token layanan web diberikan';
$string['settings_notice_createtokenalreadyallowed'] = 'Izin untuk membuat token layanan web sudah diberikan';
$string['settings_notice_createtokennotallowed'] = 'Ada isu dalam memberikan izin untuk membuat token layanan web';
$string['settings_notice_o365servicealreadyenabled'] = 'Layanan Web O365 sudah diaktifkan';
$string['settings_notice_o365serviceenabled'] = 'Layanan Web O365 berhasil diaktifkan';
$string['settings_notice_oidcalreadyenabled'] = 'Open ID Connect sudah diaktifkan';
$string['settings_notice_oidcenabled'] = 'Open ID Connect berhasil diaktifkan';
$string['settings_notice_oidcnotenabled'] = 'Open ID Connect tidak dapat diaktifkan';
$string['settings_notice_restalreadyenabled'] = 'Protokol REST sudah diaktifkan';
$string['settings_notice_restenabled'] = 'Protokol REST berhasil diaktifkan';
$string['settings_notice_restnotenabled'] = 'Protokol REST tidak dapat diaktifkan';
$string['settings_notice_restusageallowed'] = 'Izin untuk menggunakan Protokol REST diberikan';
$string['settings_notice_restusagealreadyallowed'] = 'Izin untuk menggunakan Protokol REST sudah diberikan';
$string['settings_notice_restusagenotallowed'] = 'Ada isu dalam memberikan izin untuk menggunakan Protokol REST';
$string['settings_notice_webservicesframealreadyenabled'] = 'Layanan web sudah diaktifkan dan penyematan bingkai juga diizinkan';
$string['settings_notice_webservicesframeenabled'] = 'Layanan web berhasil diaktifkan dan penyematan bingkai juga sekarang diizinkan';
$string['settings_o365china'] = 'Microsoft 365 for China';
$string['settings_o365china_details'] = 'Centang ini jika Anda menggunakan Microsoft 365 for China.';
$string['settings_odburl'] = 'URL OneDrive for Business';
$string['settings_odburl_details'] = 'URL yang digunakan untuk mengakses OneDrive for Business. Ini biasanya dapat ditentukan oleh penyewa Microsoft Entra Anda. Misalnya, jika penyewa Microsoft Entra Anda adalah "contoso.onmicrosoft.com", maka kemungkinan besar adalah "contoso-my.sharepoint.com". Masukkan hanya nama domain, jangan sertakan http:// atau https://';
$string['settings_odburl_error'] = 'Kami tidak dapat menentukan URL OneDrive for Business Anda.';
$string['settings_odburl_error_graph'] = 'Kami tidak dapat menemukan URL OneDrive for Business Anda, harap masukkan secara manual. Biasanya, URL ini dapat ditemukan dengan menggunakan URL yang Anda gunakan untuk mengakses OneDrive.';
$string['settings_options_usersync'] = 'Sinkron Pengguna';
$string['settings_options_usersync_desc'] = 'Pengaturan berikut mengontrol sinkronisasi pengguna antara Microsoft 365 dan Moodle.';
$string['settings_photoexpire'] = 'Waktu pemuatan ulang foto profil';
$string['settings_photoexpire_details'] = 'Jumlah jam yang harus ditunggu sebelum memperbarui foto profil. Waktu yang lebih lama dapat meningkatkan kinerja.';
$string['settings_publish_manifest_instruction'] = '<a href="https://docs.microsoft.com/en-us/microsoftteams/platform/concepts/apps/apps-upload" target="_blank">Klik di sini</a> untuk mempelajari cara mempublikasikan berkas manifes aplikasi Moodle yang telah Anda unduh ke semua pengguna di Teams.';
$string['settings_reset_group_name_prefix'] = 'Atur ulang prefiks nama grup';
$string['settings_reset_group_name_prefix_details'] = 'Saat mengatur ulang kursus yang terhubung ke suatu grup, nama grup yang ada akan diprefiks dengan ini.';
$string['settings_reset_team_name_prefix'] = 'Atur ulang prefiks nama Tim';
$string['settings_reset_team_name_prefix_details'] = 'Saat mengatur ulang kursus yang terhubung ke Tim, nama Tim yang terhubung sebelumnya akan diberi awalan ini.';
$string['settings_sds_coursecreation'] = 'Sinkron Kursus';
$string['settings_sds_coursecreation_desc'] = 'Opsi ini mengontrol pembuatan kursus Moodle berdasarkan kelas sekolah SDS.';
$string['settings_sds_coursecreation_enabled'] = 'Sekolah yang disinkron';
$string['settings_sds_coursecreation_enabled_desc'] = 'Buat kursus untuk sekolah ini.';
$string['settings_sds_courseenrolsync'] = 'Sinkron Pendaftaran Kursus';
$string['settings_sds_courseenrolsync_desc'] = 'Opsi ini mengontrol sinkronisasi pendaftaran kursus dari kelas sekolah SDS.';
$string['settings_sds_enrolment_enabled'] = 'Sinkronkan pendaftaran dari kelas SDS ke kursus Moodle saat pembuatan kursus';
$string['settings_sds_enrolment_enabled_desc'] = 'Daftarkan guru dan siswa kelas SDS ke dalam kursus Moodle yang dibuat dari kelas SDS saat melakukan sinkronisasi kelas SDS untuk pertama kalinya.<br />
Perhatikan bahwa ini adalah sinkron satu kali saat membuat kursus Moodle dari kelas SDS untuk pertama kalinya. Untuk terus menyinkronkan perubahan peran guru/anggota kelas SDS ke kursus Moodle, opsi <b>Sinkron pendaftaran lanjutan dengan kelas SDS</b> harus diaktifkan, dan pengaturan <b>Peran guru</b> dan <b>Peran anggota</b> harus dikonfigurasi.';
$string['settings_sds_enrolment_student_role'] = 'Peran anggota';
$string['settings_sds_enrolment_student_role_desc'] = 'Jika opsi "Daftarkan pengguna" diaktifkan, siswa di kelas SDS akan didaftarkan ke kursus Moodle terkait dengan peran ini.';
$string['settings_sds_enrolment_teacher_role'] = 'Peran guru';
$string['settings_sds_enrolment_teacher_role_desc'] = 'Jika opsi "Daftarkan pengguna" diaktifkan, guru di kelas SDS akan didaftarkan ke kursus Moodle terkait dengan peran ini.';
$string['settings_sds_get_schools_error'] = '<div class="alert alert-info error">Gagal mendapatkan sekolah SDS. Periksa apakah Microsoft Entra ID memiliki izin yang diperlukan.</div>';
$string['settings_sds_intro_desc'] = 'Microsoft School Data Sync ("SDS") menyederhanakan pengelolaan kelas di Microsoft 365, dengan membaca daftar nama dari SIS eksternal dan membuat kelas serta grup di Microsoft 365. <a href="https://sds.microsoft.com/" target="_blank">Pelajari Lebih Lanjut</a><br/>
<br/>
Fitur sinkronisasi SDS mampu menyinkronkan data daftar nama dari SDS ke Moodle, termasuk kursus, guru, dan siswa.<br/>
<br/>
Untuk menggunakan fitur sinkron SDS, pastikan aplikasi Microsoft Entra ID yang digunakan untuk integrasi memiliki izin aplikasi Microsoft Graph <b>EduRoster.Read.All</b> dan <b>Member.Read.Hidden</b>, yang tidak ditambahkan secara otomatis oleh pengaturan bawaan. Persetujuan admin juga perlu diberikan untuk izin tersebut.<br/>
<br/>
Secara bawaan, proses sinkron SDS terjadi setiap hari di cron Moodle, pada jam 3 pagi waktu server. Untuk mengubah jadwal ini, silakan kunjungi halaman pengelolaan tugas terjadwal.</a><br/><br/>';
$string['settings_sds_intro_previewwarning'] = '<div class="alert"><b>Ini adalah fitur pratinjau</b><br />Fitur pratinjau mungkin tidak berfungsi sebagaimana mestinya atau mungkin rusak tanpa peringatan. Harap lanjutkan dengan hati-hati.</div>';
$string['settings_sds_noschools'] = '<div class="alert alert-info">Anda tidak memiliki sekolah apa pun yang tersedia di SDS.</div>';
$string['settings_sds_profilesync'] = 'Sinkronkan data profil dari sekolah';
$string['settings_sds_profilesync_desc'] = 'Pilih sekolah SDS tempat Moodle menyinkronkan data profil spesifik SDS.';
$string['settings_sds_profilesync_disabled'] = 'Dinonaktifkan';
$string['settings_sds_profilesync_header'] = 'Sinkron Profil Pengguna';
$string['settings_sds_profilesync_header_desc'] = 'Setiap sekolah SDS dapat menyimpan profil pengguna untuk guru dan anggota sekolah. Kolom ini spesifik untuk sekolah, artinya sekolah yang berbeda mungkin memiliki nilai yang berbeda di kolom yang sama untuk pengguna yang sama.<br/>
Jika sekolah dipilih di bagian ini, kolom profil pengguna SDS dapat dikonfigurasi dalam pemetaan kolom pengguna.
<ul>
<li>Perhatikan bahwa sinkron kolom SDS hanya akan terjadi saat menjalankan tugas terjadwal "Sinkron dengan SDS", dan tidak akan terjadi saat menjalankan tugas terjadwal "Sinkron pengguna dengan Microsoft Entra ID", maupun saat pengguna masuk.</li>
<li>Perhatikan bahwa ada masalah yang diketahui di Microsoft Graph API yang digunakan oleh fitur ini, yaitu kolom profil sekolah siswa dan guru tertentu tidak dikembalikan, sehingga tidak tersedia untuk disinkronkan meskipun telah dikonfigurasi.</li>
</ul>';
$string['settings_sds_school_disabled_action'] = 'Tindakan sinkron sekolah yang dinonaktifkan';
$string['settings_sds_school_disabled_action_desc'] = 'Tindakan terhadap kursus Moodle yang sudah terhubung ketika sinkron dinonaktifkan di sekolah SDS.';
$string['settings_sds_school_disabled_action_disconnect'] = 'Putuskan koneksi kursus Moodle dengan Tim';
$string['settings_sds_school_disabled_action_keep_connected'] = 'Jaga agar kursus Moodle tetap terhubung dengan Tim';
$string['settings_sds_sync_enrolment_to_sds'] = 'Pendaftaran lanjutan disinkronkan dengan kelas SDS';
$string['settings_sds_sync_enrolment_to_sds_desc'] = 'Opsi ini memerlukan opsi <b>Daftarkan pengguna</b> untuk diaktifkan agar berfungsi.<br />
Jika pengaturan ini diaktifkan, sinkronisasi kelas SDS akan melakukan hal berikut:
<ul>
<li>Perubahan kepemilikan/status keanggotaan kelas SDS akan disinkronkan ke kursus Moodle dan tercermin dalam perubahan peran pengguna Moodle.</li>
<li>Perubahan pendaftaran pengguna, seperti pendaftaran dan pembatalan pendaftaran, yang dilakukan di kursus Moodle yang terhubung ke kelas SDS akan disinkronkan kembali ke kelas SDS. Status kepemilikan/keanggotaan pengguna akan bergantung pada kemampuan "local/o365:teamowner" dan "local/o365:teammember" dalam konteks kursus.</li>
</ul>';
$string['settings_sds_teams_enabled'] = 'Apakah kelas SDS sudah memiliki Teams?';
$string['settings_sds_teams_enabled_desc'] = 'Centang opsi ini jika kelas SDS sudah memiliki Teams yang dibuat oleh konfigurasi SDS. Jika dicentang, Moodle tidak akan mencoba membuat Teams dari kursus Moodle yang dibuat dari kelas SDS untuk menghindari konflik.';
$string['settings_secthead_advanced'] = 'Pengaturan Lanjutan';
$string['settings_secthead_advanced_desc'] = 'Pengaturan ini mengontrol fitur lain dari rangkaian pengaya. Hati-hati! Ini dapat menyebabkan efek yang tidak diinginkan.';
$string['settings_secthead_cohortsync'] = 'Sinkron kohor';
$string['settings_secthead_cohortsync_desc'] = 'Fitur ini memungkinkan sinkronisasi antara Grup Microsoft dan Kohor Moodle.';
$string['settings_secthead_course_request'] = 'Permintaan kursus';
$string['settings_secthead_course_request_desc'] = 'Pengaturan untuk pemetaan peran dalam fitur permintaan kursus dari Teams.';
$string['settings_secthead_coursesync'] = 'Sinkron kursus';
$string['settings_secthead_coursesync_desc'] = 'Pengaturan berikut mengontrol sinkronisasi kursus antara Moodle dan Microsoft Teams.';
$string['settings_secthead_team_group_name'] = 'Nama tim / grup';
$string['settings_secthead_team_group_name_desc'] = 'Jika kursus dikonfigurasi untuk disinkronkan, nama Tim dan grup akan dibuat sebagai berikut.<br/>
<ul>
<li>Alias surat grup dan nama tampilan tim dapat ditentukan.</li>
<li>Grup Microsoft 365 akan dibuat terlebih dahulu menggunakan nama panggilan surat grup dan nama tampilan tim yang dikonfigurasi terlebih dahulu, dan Tim akan dibuat dari grup tersebut.</li>
<li>Jika kebijakan penamaan ID Microsoft Entra untuk Grup Microsoft 365 digunakan, grup tidak akan dibuat jika nama tampilan yang dibuat sesuai dengan konfigurasi tidak sesuai dengan kebijakan.</li>
<li>Perubahan yang dilakukan di sini hanya akan memengaruhi pembuatan Tim di masa mendatang, dan bukan yang sudah ada.</li>
<li>Semua spasi akan dihapus dari alias surat grup.</li>
<li>Hanya huruf besar dan kecil, angka, - dan _ yang diizinkan dalam alias surat grup.</li>
<li>Alias surat grup, termasuk awalan dan akhiran, tidak boleh melebihi 64 karakter.</li>
<li>Alias surat grup harus unik, jika tidak, angka 4 digit acak akan ditambahkan untuk memastikan keunikan.</li>
</ul>';
$string['settings_serviceresourceabstract_detect'] = 'Deteksi';
$string['settings_serviceresourceabstract_detecting'] = 'Mendeteksi...';
$string['settings_serviceresourceabstract_empty'] = 'Silakan masukkan nilai atau klik "Deteksi" untuk mencoba mendeteksi nilai yang benar.';
$string['settings_serviceresourceabstract_error'] = 'Terjadi galat saat mendeteksi pengaturan. Silakan atur secara manual.';
$string['settings_serviceresourceabstract_invalid'] = 'Nilai ini sepertinya tidak dapat digunakan.';
$string['settings_serviceresourceabstract_nocreds'] = 'Silakan atur kredensial aplikasi terlebih dahulu.';
$string['settings_serviceresourceabstract_valid'] = '{$a} dapat digunakan.';
$string['settings_set_moodle_app_id_instruction'] = 'Untuk menemukan ID aplikasi Moodle secara manual, ikuti langkah berikut:
<ol>
<li>Unggah berkas manifes yang telah diunduh ke katalog aplikasi Teams di penyewa Anda.</li>
<li>Di katalog aplikasi Teams, temukan aplikasi tersebut.</li>
<li>Klik ikon opsi aplikasi, yang terletak di pojok kanan atas gambar aplikasi.</li>
<li>Klik "Salin tautan".</li>
<li>Di penyunting teks, tempel konten yang disalin.</li> URL tersebut harus berisi contoh seperti https://teams.microsoft.com/l/app/00112233-4455-6677-8899-aabbccddeeff.</li>
</ol>
Bagian terakhir dari URL, yaitu <span class="local_o365_settings_moodle_app_id">00112233-4455-6677-8899-aabbccddeeff</span>, adalah ID aplikasi.';
$string['settings_setup_step1'] = 'Langkah 1/2: Daftarkan Moodle dengan Microsoft Entra ID';
$string['settings_setup_step1_continue'] = '<b>Setelah Anda telah memasukkan ID Aplikasi dan Kunci Anda, klik "Simpan perubahan" di bagian bawah halaman untuk melanjutkan.</b><br /><br /><br /><br /><br />';
$string['settings_setup_step1_credentials_end'] = 'Jika Anda tidak dapat menyiapkan aplikasi Microsoft Entra ID melalui Powershell, <a href="{$a}" target="_blank">klik di sini</a> untuk petunjuk penyiapan manual.';
$string['settings_setup_step1_desc'] = 'Daftarkan Aplikasi Microsoft Entra ID baru untuk integrasi Moodle menggunakan PowerShell:

<a href="{$a}/local/o365/scripts/Moodle-EntraID-PowerShell.zip" class="btn btn-primary" target="_blank">Unduh Skrip PowerShell</a>

<p style="margin-top:10px"><a href="{$a}/local/o365/scripts/README.md" target="_blank">Klik di sini</a> untuk membaca petunjuk menjalankan skrip.</p>
<p>Saat diminta, gunakan tautan berikut sebagai URL Moodle:</p><h5><b>{$a}</b></h5>';
$string['settings_setup_step1_existing_settings'] = '<h5>Pengaturan yang ada</h5';
$string['settings_setup_step1clientcreds'] = '<br />Setelah skrip berhasil dieksekusi, salin ID Aplikasi dan Rahasia yang dikembalikan oleh skrip ke <a href="{$a}">halaman konfigurasi pengaya autentikasi OpenID Connect</a>.';
$string['settings_setup_step2'] = 'Langkah 2/2: Persetujuan admin &amp; informasi tambahan';
$string['settings_setup_step2_desc'] = 'Langkah terakhir ini mengizinkan Anda untuk memberikan persetujuan administrator untuk menggunakan beberapa izin Microsoft Entra ID, dan mengumpulkan beberapa informasi tambahan tentang lingkungan Microsoft 365 Anda.<br /><br />';
$string['settings_setup_step3'] = 'Verifikasikan pengaturan';
$string['settings_setup_step3_desc'] = 'Pengaturan selesai. Klik tombol "Perbarui" di bawah untuk memverifikasikan pengaturan Anda.';
$string['settings_support_user_identifier_change'] = 'Dukung perubahan nilai klaim nama pengguna yang terikat pada akun Microsoft';
$string['settings_support_user_identifier_change_desc'] = 'Jika diaktifkan, Moodle akan mencoba bereaksi ketika nilai klaim nama pengguna yang terikat, yang biasanya UPN, dari akun Microsoft yang terhubung ke akun Moodle diubah.</br>
<table class="flexible table table-striped table-hover generaltable generalbox table-sm">
    <tr>
        <th>ID Kasus</th>
        <th>Pengguna dengan nama pengguna lama sudah masuk? (token dibuat)<br/>
        <span class="support_user_identifier_change_case_detail">Apakah token disimpan dalam tabel auth_oidc_token</span>
        </th>
        <th>Tindakan pertama setelah penggantian nama UPN<br/>
        <span class="support_user_identifier_change_case_detail">Baik Masuk atau Tugas sinkron pengguna dijalankan</span>
        </th>
        <th>Memiliki potensi nama pengguna duplikat<br/>
        <span class="support_user_identifier_change_case_detail">Apakah penggantian nama akan menyebabkan konflik nama pengguna di Moodle</span>
        </th>
        <th>Perilaku yang diharapkan</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Ya</td>
        <td>Masuk</td>
        <td>Tidak</td>
        <td>
            <ol>
                <li>Ganti nama pengguna Moodle.</li>
                <li>auth_oidc_token diperbarui dengan nilai baru untuk kolom "username" dan "oidcusername".</li>
                <li>Kolom "o365name" pada rekaman koneksi pengguna local_o365_objects diperbarui ke nilai baru.</li>
            </ol>
        </td>
    </tr>
    <tr>
        <td>2</td>
        <td>Ya</td>
        <td>Sinkron pengguna</td>
        <td>Tidak</td>
        <td>
            <ol>
                <li>Ganti nama pengguna Moodle.</li>
                <li>Rekaman koneksi pengguna local_o365_objects diperbarui.</li>
                <li>auth_oidc_token diperbarui.</li>
            </ol>
        </td>
    </tr>
    <tr>
        <td>3</td>
        <td>Tidak</td>
        <td>Masuk</td>
        <td>Tidak</td>
        <td>
            <ol>
                <li>Ganti nama pengguna Moodle.</li>
                <li>Rekaman koneksi pengguna local_o365_objects diperbarui.</li>
                <li>auth_oidc_token telah diperbarui.</li>
            </ol>
        </td>
    </tr>
    <tr>
        <td>4</td>
        <td>Tidak</td>
        <td>Sinkron pengguna</td>
        <td>Tidak</td>
        <td>
            <ol>
                <li>Ganti nama pengguna Moodle.</li>
                <li>Rekaman koneksi pengguna local_o365_objects diperbarui.</li>
            </ol>
        </td>
    </tr>
    <tr>
        <td>5</td>
        <td>Ya</td>
        <td>Masuk</td>
        <td>Ya</td>
        <td>
            <ol>
                <li>Lempar pengecualian dan jangan ganti nama pengguna Moodle.</li>
            </ol>
        </td>
    </tr>
    <tr>
        <td>6</td>
        <td>Ya</td>
        <td>Sinkron pengguna</td>
        <td>Ya</td>
        <td>
            <ol>
                <li>Tampilkan pesan galat yang menyatakan percobaan penggantian nama gagal dalam menjalankan tugas sinkron pengguna.</li>
            </ol>
        </td>
    </tr>
    <tr>
        <td>7</td>
        <td>Tidak</td>
        <td>Masuk</td>
        <td>Ya</td>
        <td>
            <ol>
                <li>Lempar pengecualian dan jangan ganti nama pengguna Moodle.</li>
            </ol>
        </td>
    </tr>
    <tr>
        <td>8</td>
        <td>Tidak</td>
        <td>Sinkron pengguna</td>
        <td>Ya</td>
        <td>
            <ol>
                <li>Tampilkan pesan galat yang menyatakan percobaan penggantian nama gagal dalam menjalankan tugas sinkron pengguna.</li>
            </ol>
        </td>
    </tr>
</table>
Perhatikan bahwa ada masalah yang diketahui bahwa jika
<ol>
<li>Moodle dan Microsoft 365 terhubung menggunakan metode koneksi "Microsoft Identity Platform (v2.0)", dan
<li>Microsoft Entra dikonfigurasi untuk mengizinkan penggunaan "Surel sebagai ID masuk alternatif", dan</li>
<li>opsi ini diaktifkan, dan</li>
<li>nama pengguna dan alamat surel akun Microsoft berbeda, dan</li>
<li>pengguna Microsoft masuk menggunakan alamat surel daripada nama pengguna</li>
</ol>
maka pengaya auth_oidc akan memperlakukan alamat surel sebagai nama pengguna akun Microsoft dan memperbarui nama pengguna Moodle.';
$string['settings_suspend_delete_running_time'] = 'Waktu berjalan penangguhan/penghapusan pengguna';
$string['settings_suspend_delete_running_time_desc'] = 'Jika opsi ini diaktifkan, fitur penangguhan/penghapusan fungsi sinkron pengguna akan berjalan sekali sehari, pada waktu yang dikonfigurasi di zona waktu bawaan instansi Moodle.';
$string['settings_switchauthminupnsplit0'] = 'Panjang nama pengguna minimal yang tidak tepat untuk beralih ke Microsoft 365';
$string['settings_switchauthminupnsplit0_details'] = 'Jika Anda mengaktifkan pengaturan "Alihkan pengguna yang cocok ke autentikasi Microsoft 365", ini mengatur panjang minimum untuk nama pengguna tanpa penyewa (bagian @example.onmicrosoft.com) yang akan dialihkan. Ini membantu menghindari pengalihan akun dengan nama generik, seperti "admin", yang belum tentu sama di Moodle dan Microsoft Entra ID.';
$string['settings_team_name_course'] = 'Bagian kursus dari nama Tim';
$string['settings_team_name_prefix'] = 'Prefiks nama Tim';
$string['settings_team_name_sample'] = 'Asumsikan kursus memiliki:
<ul>
<li>Nama lengkap: <b>Contoh kursus</b></li>
<li>Nama singkat: <b>contoh 15</b></li>
<li>ID yang dibuat Moodle: <b>2</b></li>
<li>Nomor ID: <b>ID contoh 15</b></li>
</ul>
Pengaturan Anda saat ini akan membuat grup menggunakan alias surat "<b>{$a->mailalias}</b>" dan Tim menggunakan nama "<b>{$a->teamname}</b>".<br/>
Klik tombol "Simpan perubahan" di bawah untuk melihat bagaimana pengaturan Anda akan mengubah ini.';
$string['settings_team_name_suffix'] = 'Sufiks nama Tim';
$string['settings_team_name_sync'] = 'Perbarui nama Tim pada pembaruan kursus';
$string['settings_team_name_sync_desc'] = 'Jika diaktifkan, saat kursus Moodle diperbarui, nama Tim akan diperbarui sesuai dengan pengaturan nama Tim terbaru.';
$string['settings_teamconnections'] = 'Koneksi Tim';
$string['settings_teamconnections_details'] = 'Tinjau dan kelola koneksi antara kursus Moodle dan Microsoft Teams.';
$string['settings_teamconnections_linktext'] = 'Kelola Koneksi Tim';
$string['settings_teams_banner'] = 'Aplikasi Moodle untuk <a href="https://aka.ms/MoodleLearnTeams" target="_blank">Microsoft Teams</a> mengizinkan Anda untuk dengan mudah mengakses dan berkolaborasi seputar kursus Moodle Anda di Teams.';
$string['settings_teams_moodle_app_external_id'] = 'ID aplikasi Microsoft untuk aplikasi Moodle Teams';
$string['settings_teams_moodle_app_external_id_desc'] = 'Ini harus diatur ke nilai bawaan, kecuali jika diperlukan beberapa aplikasi Moodle Teams di penyewa Anda untuk terhubung ke situs Moodle yang berbeda.';
$string['settings_teams_moodle_app_short_name'] = 'Nama aplikasi Teams';
$string['settings_teams_moodle_app_short_name_desc'] = 'Ini dapat diatur sebagai bawaan, kecuali jika diperlukan beberapa aplikasi Moodle Teams di penyewa Anda untuk terhubung ke situs Moodle yang berbeda.';
$string['settings_teams_moodle_setup_heading'] = '<h4 class="local_o365_settings_teams_h4_spacer">Siapkan aplikasi Moodle Anda untuk Microsoft Teams</h4>';
$string['settings_teams_moodle_tab_name'] = 'Nama tab Moodle di Teams';
$string['settings_teams_moodle_tab_name_desc'] = 'Ini adalah nama tab Moodle di Teams.';
$string['settings_tools_tenants'] = 'Penyewa';
$string['settings_tools_tenants_details'] = 'Kelola akses ke penyewa Microsoft Entra tambahan.';
$string['settings_tools_tenants_linktext'] = 'Konfigurasikan penyewa tambahan';
$string['settings_userconnections'] = 'Koneksi pengguna';
$string['settings_userconnections_details'] = 'Tinjau dan kelola koneksi antara pengguna Moodle dan Microsoft 365.';
$string['settings_userconnections_linktext'] = 'Kelola Koneksi Pengguna';
$string['settings_usermatch'] = 'Pencocokan Pengguna';
$string['settings_usermatch_details'] = 'Alat ini mengizinkan Anda untuk mencocokkan pengguna Moodle dengan pengguna Microsoft 365 berdasarkan berkas data khusus yang diunggah.';
$string['settings_usersync'] = 'Sinkronkan pengguna dari Microsoft Entra ID';
$string['settings_usersync_appassign'] = 'Tugaskan pengguna ke aplikasi selama sinkron';
$string['settings_usersync_create'] = 'Buat akun di Moodle untuk pengguna di Microsoft Entra ID';
$string['settings_usersync_delete'] = 'Hapus akun yang sebelumnya disinkronkan di Moodle saat mereka dihapus dari Microsoft Entra ID';
$string['settings_usersync_details'] = 'Saat diaktifkan, Moodle akan menyinkronkan pengguna dari Microsoft Entra ID sesuai dengan opsi di atas.<br /><br /><b>Catatan:</b>Tugas sinkronisasi berjalan di cron Moodle, dan menyinkronkan 1000 pengguna sekaligus. Secara bawaan, ini berjalan sekali sehari pada pukul 1:00 pagi di zona waktu lokal server Anda. Untuk menyinkronkan sejumlah besar pengguna dengan lebih cepat, Anda dapat meningkatkan frekuensi tugas <b>Sinkronkan pengguna dari Microsoft Entra ID</b> menggunakan halaman <a href="{$a}">Pengelolaan tugas terjadwal.</a><br /><br />';
$string['settings_usersync_disabledsync'] = 'Status sinkron dinonaktifkan';
$string['settings_usersync_emailsync'] = 'Cocokkan nama pengguna Microsoft Entra ID dengan surel Moodle, bukan nama pengguna Moodle, selama sinkron';
$string['settings_usersync_general'] = 'Sinkronisasi pengguna umum';
$string['settings_usersync_guestsync'] = 'Sinkronkan pengguna tamu';
$string['settings_usersync_match'] = 'Cocokkan pengguna Moodle yang sudah ada dengan akun bernama sama di Microsoft Entra ID';
$string['settings_usersync_matching'] = 'Pencocokan pengguna';
$string['settings_usersync_matchswitchauth'] = 'Alihkan pengguna yang cocok dengan autentikasi Microsoft 365 (OpenID Connect)';
$string['settings_usersync_nodelta'] = 'Lakukan sinkron penuh setiap kali eksekusi';
$string['settings_usersync_photos'] = 'Sinkronkan foto profil Microsoft 365 ke Moodle';
$string['settings_usersync_photosync'] = 'Sinkronkan foto profil Microsoft 365 ke Moodle melalui cron job.';
$string['settings_usersync_photosynconlogin'] = 'Sinkronkan foto profil Microsoft 365 ke Moodle saat masuk';
$string['settings_usersync_reenable'] = 'Aktifkan kembali akun yang ditangguhkan untuk pengguna di Microsoft Entra ID';
$string['settings_usersync_suspend'] = 'Hentikan akun yang sudah disinkronkan sebelumnya di Moodle saat akun tersebut dihapus dari Microsoft Entra ID';
$string['settings_usersync_suspension'] = 'Penangguhan akun Moodle';
$string['settings_usersync_timezone'] = 'Sinkronkan zona waktu Outlook ke Moodle';
$string['settings_usersync_update'] = 'Perbarui akun di Moodle untuk pengguna di Microsoft Entra ID';
$string['settings_usersynccreationrestriction'] = 'Pembatasan pembuatan pengguna';
$string['settings_usersynccreationrestriction_details'] = 'Jika diaktifkan, hanya pengguna Microsoft Entra ID yang sesuai dengan kondisi tersebut yang akan dibuat selama sinkron pengguna.';
$string['settings_usersynccreationrestriction_fieldval'] = 'Nilai kolom';
$string['settings_usersynccreationrestriction_o365group'] = 'Keanggotaan Grup Microsoft 365 (nama grup)';
$string['settings_usersynccreationrestriction_o365groupid'] = 'Keanggotaan Grup Microsoft 365 (ID objek grup)';
$string['settings_usersynccreationrestriction_regex'] = 'Nilai adalah ekspresi reguler';
$string['settings_verifysetup'] = 'Verifikasikan pengaturan';
$string['settings_verifysetup_appdatadesc'] = 'Memverifikasikan bahwa parameter yang benar diatur di aplikasi Entra ID.';
$string['settings_verifysetup_appdataheader'] = 'Pendaftaran Aplikasi Microsoft Entra ID';
$string['settings_verifysetup_appdatareplyurlcorrect'] = 'URL Balasan Benar';
$string['settings_verifysetup_appdatareplyurlgeneralerror'] = 'Tidak dapat memeriksa url balasan.';
$string['settings_verifysetup_appdatareplyurlincorrect'] = 'URL Balasan Salah';
$string['settings_verifysetup_appdatasignonurlcorrect'] = 'URL Masuk Benar.';
$string['settings_verifysetup_appdatasignonurlgeneralerror'] = 'Tidak dapat memeriksa url masuk.';
$string['settings_verifysetup_appdatasignonurlincorrect'] = 'URL Masuk Salah';
$string['settings_verifysetup_apppermscorrect'] = 'Izin Aplikasi benar.';
$string['settings_verifysetup_checking'] = 'Memeriksa...';
$string['settings_verifysetup_correctval'] = 'Nilai yang Benar:';
$string['settings_verifysetup_details'] = 'Alat ini memeriksa dengan Microsoft Entra ID untuk memastikan semuanya telah diatur dengan benar. <br /><b>Catatan:</b> Perubahan pada aplikasi Microsoft Entra ID mungkin membutuhkan waktu beberapa saat untuk muncul di sini. Jika Anda telah melakukan perubahan pada aplikasi Microsoft Entra ID dan belum melihatnya tercermin di sini, tunggu sebentar dan coba lagi.';
$string['settings_verifysetup_detectedval'] = 'Nilai yang Terdeteksi:';
$string['settings_verifysetup_errorcheck'] = 'Terjadi galat saat mencoba memeriksa pengaturan.';
$string['settings_verifysetup_missingappperms'] = 'Izin Aplikasi Hilang:';
$string['settings_verifysetup_missingperms'] = 'Izin Delegasi Hilang:';
$string['settings_verifysetup_noinfo'] = 'Kami belum memiliki informasi apa pun tentang pengaturan aplikasi Microsoft Entra ID. Silakan klik tombol Perbarui untuk memeriksa.';
$string['settings_verifysetup_permscorrect'] = 'Izin yang didelegasikan benar.';
$string['settings_verifysetup_strtenanterror'] = 'Silakan gunakan tombol deteksi untuk mengatur penyewa Microsoft Entra Anda sebelum memperbarui pengaturan aplikasi Microsoft Entra ID.';
$string['settings_verifysetup_strunifiedpermerror'] = 'Ada galat saat memeriksa izin API Microsoft Graph.';
$string['settings_verifysetup_unifiedactive'] = 'API Microsoft Graph aktif.';
$string['settings_verifysetup_unifieddesc'] = 'Microsoft Graph API mengizinkan komunikasi antara Moodle dan Microsoft 365.';
$string['settings_verifysetup_unifiederror'] = 'Ada galat saat memeriksa dukungan API Microsoft Graph.';
$string['settings_verifysetup_unifiedheader'] = 'API Microsoft Graph';
$string['settings_verifysetup_unifiedmissing'] = 'API Microsoft Graph tidak ditemukan di aplikasi ini.';
$string['settings_verifysetup_update'] = 'Perbarui';
$string['spsite_group_contributors_desc'] = 'Semua pengguna yang memiliki akses untuk mengelola berkas untuk kursus {$a}';
$string['sso_login'] = 'Masuk ke Microsoft 365';
$string['tab_name'] = 'Nama tab';
$string['task_calendarsyncin'] = 'Sinkronkan acara Microsoft 365 ke Moodle';
$string['task_checkinvalidconfiglog'] = 'Periksa dan bersihkan rekaman catatan konfigurasi yang tidak valid';
$string['task_coursemembershipsync'] = 'Sinkronkan pemilik Microsoft Teams dan anggota ke kursus Moodle';
$string['task_coursesync'] = 'Sinkronkan kursus Moodle ke Microsoft Teams';
$string['task_notifysecretexpiry'] = 'Beritahukan admin situs tentang masa laku rahasia aplikasi Microsoft Entra ID';
$string['task_processmatchqueue'] = 'Antrian Pencocokan Proses';
$string['task_processmatchqueue_err_museralreadymatched'] = 'Pengguna Moodle sudah dicocokkan dengan pengguna Microsoft 365.';
$string['task_processmatchqueue_err_museralreadyo365'] = 'Pengguna Moodle sudah dihubungkan dengan pengguna Microsoft 365.';
$string['task_processmatchqueue_err_nomuser'] = 'Tidak ditemukan pengguna Moodle dengan nama pengguna ini.';
$string['task_processmatchqueue_err_noo365user'] = 'Tidak ditemukan pengguna Microsoft 365 dengan nama pengguna ini.';
$string['task_processmatchqueue_err_o365useralreadyconnected'] = 'Pengguna Microsoft 365 sudah dihubungkan dengan pengguna Moodle.';
$string['task_processmatchqueue_err_o365useralreadymatched'] = 'Pengguna Microsoft 365 sudah dicocokkan dengan pengguna Moodle.';
$string['task_sds_sync'] = 'Sinkronkan dengan SDS';
$string['task_syncusers'] = 'Sinkronkan pengguna dari Microsoft Entra ID';
$string['teams_no_course'] = 'Anda tidak memiliki kursus untuk ditambahkan.';
$string['ucp_calsync_availcal'] = 'Kalender Moodle yang Tersedia';
$string['ucp_calsync_desc'] = 'Kalender yang dicentang akan disinkronkan dari Moodle ke kalender Outlook Anda.';
$string['ucp_calsync_title'] = 'Pengaturan sinkron Kalender Outlook';
$string['ucp_connection_desc'] = 'Di sini Anda dapat mengkonfigurasikan cara Anda terhubung ke Microsoft 365. Untuk menggunakan fitur Microsoft 365, Anda harus terhubung ke akun Microsoft 365. Ini dapat dilakukan seperti yang dijelaskan di bawah.';
$string['ucp_connection_disconnected'] = 'Anda tidak terhubung ke Microsoft 365.';
$string['ucp_connection_entraidlogin'] = 'Gunakan kredensial Microsoft 365 untuk masuk ke Moodle<br />';
$string['ucp_connection_entraidlogin_active'] = 'Anda menggunakan akun Microsoft 365 "{$a}" untuk masuk ke Moodle.';
$string['ucp_connection_entraidlogin_desc_authcode'] = 'Alih-alih memasukkan nama pengguna dan kata sandi di halaman masuk Moodle, Anda akan melihat bagian yang bertuliskan "Masuk menggunakan akun Anda di {$a}" di halaman masuk. Anda akan mengeklik tautan tersebut dan dialihkan ke Microsoft 365 untuk masuk. Setelah Anda berhasil masuk ke Microsoft 365, Anda akan dikembalikan ke Moodle dan masuk ke akun Anda.';
$string['ucp_connection_entraidlogin_desc_rocreds'] = 'Alih-alih nama pengguna dan kata sandi Moodle Anda, Anda akan memasukkan nama pengguna dan kata sandi Microsoft 365 Anda di halaman masuk Moodle.';
$string['ucp_connection_entraidlogin_start'] = 'Mulai menggunakan Microsoft 365 untuk masuk ke Moodle.';
$string['ucp_connection_entraidlogin_stop'] = 'Hentikan menggunakan Microsoft 365 untuk masuk ke Moodle.';
$string['ucp_connection_linked'] = 'Hubungkan akun Moodle dan Microsoft 365 Anda';
$string['ucp_connection_linked_active'] = 'Anda terhubung ke akun Microsoft 365 "{$a}".';
$string['ucp_connection_linked_desc'] = 'Menautkan akun Moodle dan Microsoft 365 Anda mengizinkan Anda menggunakan fitur Microsoft 365 Moodle tanpa mengubah cara Anda masuk ke Moodle. <br />Mengklik tautan di bawah ini akan mengarahkan Anda ke Microsoft 365 untuk melakukan masuk satu kali, setelah itu Anda akan dikembalikan ke sini. Anda akan dapat menggunakan semua fitur Microsoft 365 tanpa melakukan perubahan lain pada akun Moodle Anda - Anda akan masuk ke Moodle seperti biasa.';
$string['ucp_connection_linked_migrate'] = 'Alihkan ke akun terhubung.';
$string['ucp_connection_linked_start'] = 'Hubungkan akun Moodle Anda ke akun Microsoft 365.';
$string['ucp_connection_linked_stop'] = 'Putuskan akun Moodle Anda dari akun Microsoft 365.';
$string['ucp_connection_options'] = 'Opsi Koneksi:';
$string['ucp_connection_start'] = 'Hubungkan ke Microsoft 365';
$string['ucp_connection_status'] = 'Koneksi Microsoft 365 adalah:';
$string['ucp_connection_stop'] = 'Putuskan dari Microsoft 365';
$string['ucp_connectionstatus'] = 'Status Koneksi';
$string['ucp_features'] = 'Fitur Microsoft 365';
$string['ucp_features_intro'] = 'Berikut adalah daftar fitur yang dapat Anda gunakan untuk meningkatkan Moodle dengan Microsoft 365.';
$string['ucp_features_intro_notconnected'] = 'Beberapa di antaranya mungkin tidak tersedia sampai Anda terhubung ke Microsoft 365.';
$string['ucp_general_intro'] = 'Di sini Anda dapat mengelola koneksi Anda ke Microsoft 365.';
$string['ucp_general_intro_notconnected_nopermissions'] = 'Untuk menghubungkan ke Microsoft 365, Anda perlu menghubungi administrator situs Anda.';
$string['ucp_index_calendar_desc'] = 'Di sini Anda dapat mengatur sinkron antara kalender Moodle dan Outlook Anda. Anda dapat mengekspor acara kalender Moodle ke Outlook, dan memasukkan acara Outlook ke Moodle.';
$string['ucp_index_calendar_title'] = 'Pengaturan sinkron Kalender Outlook';
$string['ucp_index_connection_desc'] = 'Konfigurasikan bagaimana Anda hubungkan ke Microsoft 365.';
$string['ucp_index_connection_title'] = 'Pengaturan koneksi Microsoft 365';
$string['ucp_index_connectionstatus_connect'] = 'Klik di sini untuk menghubungkan.';
$string['ucp_index_connectionstatus_connected'] = 'Anda saat ini terhubung ke Microsoft 365';
$string['ucp_index_connectionstatus_disconnect'] = 'Putuskan';
$string['ucp_index_connectionstatus_login'] = 'Klik di sini untuk masuk.';
$string['ucp_index_connectionstatus_manage'] = 'Kelola Koneksi';
$string['ucp_index_connectionstatus_matched'] = 'Anda telah dicocok dengan pengguna Microsoft 365 <small>"{$a}"</small>. Untuk menyelesaikan koneksi ini, silakan klik tautan di bawah dan masuk ke Microsoft 365.';
$string['ucp_index_connectionstatus_notconnected'] = 'Anda saat ini belum terhubung ke Microsoft 365';
$string['ucp_index_connectionstatus_reconnect'] = 'Segarkan Koneksi';
$string['ucp_index_connectionstatus_title'] = 'Status Koneksi';
$string['ucp_index_connectionstatus_usinglinked'] = 'Anda terhubung ke akun Microsoft 365.';
$string['ucp_index_connectionstatus_usinglogin'] = 'Anda saat ini menggunakan Microsoft 365 untuk masuk ke Moodle.';
$string['ucp_index_entraidlogin_active'] = 'Anda saat ini menggunakan Microsoft 365 untuk masuk ke Moodle';
$string['ucp_index_entraidlogin_desc'] = 'Anda dapat menggunakan kredensial Microsoft 365 Anda untuk masuk ke Moodle.';
$string['ucp_index_entraidlogin_inactive'] = 'Anda saat ini tidak menggunakan Microsoft 365 untuk masuk ke Moodle.';
$string['ucp_index_entraidlogin_title'] = 'Masuk Microsoft 365';
$string['ucp_index_onenote_desc'] = 'Integrasi OneNote mengizinkan Anda menggunakan Microsoft 365 OneNote dengan Moodle. Anda dapat menyelesaikan tugas menggunakan OneNote dan dengan mudah membuat catatan untuk kursus Anda.';
$string['ucp_index_onenote_title'] = 'OneNote';
$string['ucp_notconnected'] = 'Silakan hubungkan ke Microsoft 365 sebelum mengunjungi ke sini.';
$string['ucp_o365accountconnected'] = 'Akun Microsoft 365 ini sudah terhubung dengan akun Moodle lain.';
$string['ucp_options'] = 'Opsi';
$string['ucp_status_disabled'] = 'Belum Terhubung';
$string['ucp_status_enabled'] = 'Aktif';
$string['ucp_syncdir_both'] = 'Perbarui Outlook dan Moodle';
$string['ucp_syncdir_in'] = 'Dari Outlook Ke Moodle';
$string['ucp_syncdir_out'] = 'Dari Moodle ke Outlook';
$string['ucp_syncdir_title'] = 'Perilaku Sinkron:';
$string['ucp_syncwith_title'] = 'Nama kalender Outlook yang akan disinkronkan:';
$string['ucp_title'] = 'Panel Kontrol Microsft 365 / Moodle';
$string['webservices_error_assignnotfound'] = 'Rekaman penugasan modul yang diterima tidak dapat ditemukan.';
$string['webservices_error_couldnotsavegrade'] = 'Nilai tidak dapat disimpan.';
$string['webservices_error_invalidassignment'] = 'ID penugasan yang diterima tidak dapat digunakan dengan fungsi layanan web ini.';
$string['webservices_error_modulenotfound'] = 'ID modul yang diterima tidak dapat ditemukan.';
$string['webservices_error_sectionnotfound'] = 'Bagian kursus tidak dapat ditemukan.';
