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
 * Strings for component 'childcourse', language 'id', version '5.1'.
 *
 * @package     childcourse
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autoenrol'] = 'Pendaftaran otomatis saat mengakses';
$string['autoenrol_help'] = 'Jika diaktifkan, pengaya akan secara otomatis mendaftarkan pengguna ke kursus anak ketika mereka membukanya melalui aktivitas ini. Pendaftaran dibuat menggunakan sebuah instance pendaftaran manual khusus sehingga dapat dilacak dan dikembalikan dengan aman nanti (tergantung pada kebijakan penghapusan). Jika dinonaktifkan, pengaya tidak akan mencoba mendaftarkan pengguna secara otomatis.';
$string['childcourse'] = 'Kursus anak';
$string['childcourse:addinstance'] = 'Tambahkan aktivitas kursus anak baru';
$string['childcourse:manage'] = 'Kelola pengaturan kursus anak';
$string['childcourse:sync'] = 'Sinkronkan nilai dan penyelesaian kursus anak';
$string['childcourse:view'] = 'Lihat aktivitas kursus anak';
$string['childcourse_help'] = 'Pilih kursus yang akan terhubung dengan aktivitas ini. Pilihan ini mengontrol semua pengaturan spesifik aturan (grup, aturan penyelesaian, pemilih aktivitas, sinkron nilai). Setelah aktivitas disimpan, kursus anak menjadi tidak dapat diubah untuk menjaga konsistensi pemetaan dan riwayat sinkron.';
$string['childcoursenotset'] = 'Kursus anak belum diatur.';
$string['completionmissing'] = 'Penyelesaian kursus anak tidak diaktifkan.';
$string['completionrule'] = 'Aturan penyelesaian berbasis kursus anak';
$string['completionrule_allactivities'] = 'Selesaikan ketika 100% dari aktivitas yang dilacak telah selesai';
$string['completionrule_coursecompleted'] = 'Selesaikan ketika kursus anak selesai';
$string['completionrule_help'] = 'Mendefinisikan bagaimana aktivitas ini secara otomatis ditandai selesai berdasarkan kemajuan pengguna pada kursus anak.

- **Tidak melakukan apa-apa:** penyelesaian aktivitas ini tidak ada hubungannya dengan penyelesaian kursus anak.
- **Saat kursus anak selesai:** segera setelah kursus anak selesai, aktivitas ini juga selesai.
- **Saat 100% aktivitas yang dilacak telah selesai:** semua aktivitas di kursus anak dengan pelacakan penyelesaian yang diaktifkan harus selesai agar aktivitas ini dianggap selesai.';
$string['completionrule_none'] = 'Tidak melakukan apa-apa';
$string['enrolinstancename'] = 'Tautan kursus anak #{$a}';
$string['error_manualenrolnotavailable'] = 'Pengaya pendaftaran manual tidak tersedia.';
$string['grade_approval'] = 'Kirim nilai dari';
$string['grade_approval_no'] = 'Jangan kirim nilai';
$string['grade_approval_yes'] = 'Gunakan nilai dari kursus anak';
$string['gradebookmissing'] = 'Buku nilai kursus anak belum dikonfigurasi (total kursus hilang).';
$string['hideinmycourses'] = 'Sembunyikan kursus anak di My courses';
$string['hideinmycourses_help'] = 'Jika diaktifkan, pengguna yang terdaftar melalui aktivitas ini akan menyembunyikan kursus anak di menu "My courses". Ini membantu menegakkan navigasi melalui kursus ini. Pengaturan ini hanya memengaruhi pengguna yang terdaftar melalui pengaya ini (dipantau oleh pengaya).';
$string['inheritgroups'] = 'Wariskan grup dari kursus induk';
$string['inheritgroups_help'] = 'Jika diaktifkan, pengaya akan mencoba meniru keanggotaan grup pengguna dari kursus induk ke kursus anak, dicocokkan berdasarkan nama grup. Jika nama grup tidak ada di kursus anak, maka dapat dibuat. Ini diterapkan selama auto-enrolment. Ini bukan sinkron kontinu kecuali Anda kemudian menerapkan rutinitas penyinkronan ulang khusus.';
$string['keeprole'] = 'Pertahankan peran (estudante/guru)';
$string['keeprole_help'] = 'Jika diaktifkan, pengaya akan mencoba menjaga kesetaraan peran yang disederhanakan: pengguna dengan kemampuan tingkat pengajar di kursus induk akan didaftarkan sebagai pengajar (editingteacher/teacher ketika tersedia); jika tidak, sebagai estudante. Ini tidak menyalin peran kustom atau penugasan peran yang kompleks.';
$string['label_childcourse'] = 'Kursus anak';
$string['label_lastsynccompletion'] = 'Sinkron penyelesaian terakhir';
$string['label_lastsyncgrade'] = 'Sinkron nilai terakhir';
$string['lastsync'] = 'Sinkron terakhir';
$string['lockedcoursewarning'] = 'Kursus anak tidak dapat diubah setelah disimpan.';
$string['manage_header_actions'] = 'Tindakan';
$string['manage_header_name'] = 'Nama';
$string['missingcourse'] = 'Kursus tidak ditemukan';
$string['modulename'] = 'Kursus anak';
$string['modulenameplural'] = 'Kursus anak-anak';
$string['never'] = 'Tidak pernah';
$string['nogroup'] = 'Tidak ada grup';
$string['openchildcourse'] = 'Buka kursus anak';
$string['opennewtab'] = 'Buka di tab baru';
$string['opennewtab_help'] = 'Jika diaktifkan, tombol akan membuka kursus anak di tab baru. Ini tidak mengubah perilaku pendaftaran atau sinkronisasi, hanya bagaimana kursus dibuka untuk pengguna.';
$string['pluginadministration'] = 'Administrasi kursus anak';
$string['pluginname'] = 'Kursus anak';
$string['privacy:metadata:childcourse_map'] = 'Menyimpan data pemetaan yang dibuat oleh aktivitas kursus terkait untuk memungkinkan penghapusan pendaftaran yang aman dan audit.';
$string['privacy:metadata:childcourse_map:childcourseid'] = 'ID kursus anak yang terhubung.';
$string['privacy:metadata:childcourse_map:childcourseinstanceid'] = 'ID instansi aktivitas kursus yang terkait.';
$string['privacy:metadata:childcourse_map:groupidsjson'] = 'Daftar ID grup kursus anak yang ditugaskan oleh pengaya (JSON).';
$string['privacy:metadata:childcourse_map:hiddenprefset'] = 'Menunjukkan apakah pengaya telah mengatur preferensi untuk menyembunyikan kursus anak di Kursus Saya.';
$string['privacy:metadata:childcourse_map:manualenrolid'] = 'ID instansi pendaftaran yang digunakan oleh pengaya untuk mendaftarkan pengguna.';
$string['privacy:metadata:childcourse_map:parentcourseid'] = 'ID kursus induk tempat aktivitas tersebut berada.';
$string['privacy:metadata:childcourse_map:roleid'] = 'ID papel yang ditugaskan oleh pengaya di kursus anak.';
$string['privacy:metadata:childcourse_map:timeenrolled'] = 'Waktu ketika pengguna terdaftar melalui tautan.';
$string['privacy:metadata:childcourse_map:timemodified'] = 'Waktu modifikasi terakhir rekaman pemetaan.';
$string['privacy:metadata:childcourse_map:userid'] = 'ID pengguna yang didaftarkan melalui tautan.';
$string['privacy:metadata:childcourse_state'] = 'Menyimpan status yang disimpan per pengguna untuk mendukung sinkron nilai dan penyelesaian secara bertahap.';
$string['privacy:metadata:childcourse_state:childcourseinstanceid'] = 'ID instansi aktivitas kursus yang terkait.';
$string['privacy:metadata:childcourse_state:coursecompleted'] = 'Indikator yang disimpan apakah aturan penyelesaian telah terpenuhi untuk pengguna.';
$string['privacy:metadata:childcourse_state:coursecompletiontimemodified'] = 'Stempel waktu modifikasi terakhir data penyelesaian sumber untuk sinkron bertahap.';
$string['privacy:metadata:childcourse_state:finalgrade'] = 'Nilai (persentase) yang disimpan disinkronkan dari total kursus anak.';
$string['privacy:metadata:childcourse_state:grade_source'] = 'Identifikator sumber nilai (mis. course_total).';
$string['privacy:metadata:childcourse_state:gradeitemtimemodified'] = 'Stempel waktu modifikasi terakhir item nilai sumber untuk sinkron bertahap.';
$string['privacy:metadata:childcourse_state:timemodified'] = 'Waktu modifikasi terakhir baris keadaan yang disimpan.';
$string['privacy:metadata:childcourse_state:userid'] = 'ID pengguna.';
$string['privacy:metadata:userpreference:block_myoverview_hidden_course'] = 'Preferensi pengguna yang digunakan untuk menyembunyikan kursus anak di Kursus Saya (nama preferensi bawaan: block_myoverview_hidden_course_{courseid}).';
$string['settings_heading'] = 'Pengaturan kursus anak.';
$string['syncdone'] = 'Sinkron selesai.';
$string['syncnow'] = 'Sinkronkan sekarang';
$string['targetgroup'] = 'Daftar ke grup';
$string['targetgroup_help'] = 'Jika dipilih, pengguna akan ditambahkan ke grup spesifik ini di kursus anak pada saat pendaftaran otomatis. Grup harus ada di kursus anak. Jika opsi "Mewarisi grup dari kursus induk" juga diaktifkan, kedua perilaku berlaku (grup yang dipilih dan grup yang diwariskan).';
$string['unenrolaction'] = 'Saat tautan dihapus';
$string['unenrolaction_help'] = 'Mengontrol apa yang terjadi pada pendaftaran yang dibuat oleh aktivitas ini saat aktivitas yang ditautkan dihapus. \'Batalkan pendaftaran\' akan menghapus hanya pendaftaran yang dibuat oleh aktivitas ini (ditelusuri dalam tabel pemetaan). \'Pertahankan pendaftaran\' akan membiarkan pengguna tetap terdaftar di kursus anak.';
$string['unenrolaction_keep'] = 'Pertahankan pendaftaran';
$string['unenrolaction_unenrol'] = 'Batalkan pendaftaran pengguna yang didaftarkan melalui tautan ini.';
