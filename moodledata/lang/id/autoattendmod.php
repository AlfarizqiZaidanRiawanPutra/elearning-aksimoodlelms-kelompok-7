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
 * Strings for component 'autoattendmod', language 'id', version '5.1'.
 *
 * @package     autoattendmod
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autoattendmod:addinstance'] = 'Tambahkan modul kehadiran otomatis baru';
$string['autoattendmod:receivemail'] = 'Terima pemberitahuan surel';
$string['autoattendmod:view'] = 'Lihat modul';
$string['autoattendmod:viewreports'] = 'Lihat laporan';
$string['autoattendmod_options'] = 'Opsi modul Kehadiran Otomatis';
$string['backup_block'] = 'Ketika kursus ini dicadangkan, data kehadiran dicadangkan yang dikelola blok Kehadiran Otomatis.';
$string['backup_block_help'] = 'Dalam versi ini, blok Autoattendance mengelola data kehadiran. Bahkan jika Anda menghapus autoattendmod, data kehadiran kursus tetap ada di database.';
$string['backup_block_title'] = 'Dalam versi ini, blok Kehadiran Otomatis mengelola data kehadiran. Bahkan jika Anda menghapus kehadiran otomatis, data kehadiran kursus tetap ada di basis data.';
$string['description'] = 'Deskripsi';
$string['disp_info'] = 'Tampilkan informasi mengenai kelas yang akan datang atau sedang berlangsung di blok tersebut.';
$string['disp_info_help'] = 'Tampilkan kunci (kasus semi-otomatis) dan jumlah peserta untuk kelas yang paling dekat atau sedang berlangsung di blok';
$string['disp_info_title'] = 'Informasi Kehadiran di blok';
$string['disp_localhostname'] = 'Tampilkan nama host alih-alih alamat IP lokal';
$string['disp_localhostname_help'] = 'Jika alamat IP lokal, tampilkan nama host lokal, bukan alamat IP';
$string['disp_localhostname_title'] = 'Tampilkan Nama Host Lokal';
$string['email_allrep'] = 'Kirim semua laporan ke pengajar melalui surel';
$string['email_allrep_help'] = 'Jika surel diaktifkan dan Anda mencentang ini, semua laporan kehadiran hari itu akan dikirim melalui surel. Dan Anda mencentang ini, hanya satu laporan kehadiran yang dikirim';
$string['email_allrep_title'] = 'Kirim semua Laporan';
$string['email_enable'] = 'Aktifkan notifikasi surel data kehadiran ke Pengajar';
$string['email_enable_help'] = 'Jika Anda memeriksa ini, saat sesi berakhir, data kehadiran dikirim ke guru menggunakan surel. Namun, Anda harus menambahkan "Pengajar" ke kapabilitas autoattendmod:receivemail.';
$string['email_enable_title'] = 'Hasil Pemberitahuan kepada Pengajar';
$string['email_key'] = 'Aktifkan notifikasi surel kata kunci kehadiran ke Pengajar';
$string['email_key_help'] = 'Jika Anda memeriksa ini, saat sesi dimulai, kata kunci kehadiran dikirim ke guru menggunakan surel. Namun, Anda harus menambahkan "Pengajar" ke kapabilitas autoattendmod:receivemail.';
$string['email_key_title'] = 'Kata Kunci Pemberitahuan kepada Pengajar';
$string['email_user'] = 'Aktifkan notifikasi kehadiran melalui surel kepada Siswa';
$string['email_user_help'] = 'Jika Anda memeriksa ini, saat kehadiran siswa berubah, pemberitahuan akan dikirim ke siswa melalui surel. Namun, Anda harus menambahkan "Siswa" ke kapabilitas autoattendmod:receivemail.';
$string['email_user_title'] = 'Pemberitahuan kepada Siswa';
$string['excelver_disp'] = 'Gunakan format Excel lama (Excel2007) saat mengunduh';
$string['excelver_disp_help'] = 'Jika Anda gagal mengunduh Laporan Excel, silakan periksa ini.';
$string['excelver_title'] = 'Gunakan Excel2007 lama';
$string['feedback_disp'] = 'Tampilkan tautan Umpan Balik';
$string['feedback_disp_help'] = 'Jika Anda mencentang ini, tautan ke Umpan Balik tidak akan ditampilkan';
$string['feedback_title'] = 'Tautan Umpan Balik';
$string['firstinstallblock'] = 'Silakan pasang Blok Kehadiran Otomatis terlebih dahulu.';
$string['firstinstanceblock'] = 'Harap buat contoh Blok Kehadiran Otomatis terlebih dahulu dalam kursus ini.';
$string['misconfigured'] = 'Kursus salah dikonfigurasi';
$string['modidincorrect'] = 'ID Modul Kursus salah';
$string['modincorrect'] = 'Modul kursus salah<br />Mungkin Blok Kehadiran Otomatis tidak terpasang';
$string['modulename'] = 'Kehadiran Otomatis';
$string['modulename_help'] = 'Anda hanya dapat menambahkan satu modul Kehadiran Otomatis per kursus. Jika Anda menghapus modul ini, hal itu tidak akan memengaruhi kehadiran! <br />
Anda dapat menggunakan modul ini hanya bersama dengan blok Kehadiran Otomatis. Harap tambahkan blok autoattendand sebelum menambahkan modul ini.<br />
Modul ini diperlukan untuk kehadiran semi-otomatis dan menyertakan nilai kehadiran ke nilai kursus utama.';
$string['modulenameplural'] = 'Hadir secara otomatis';
$string['modulenamesimple'] = 'Hadir secara otomatis';
$string['name'] = 'Nama';
$string['onlyonemodule'] = 'Hanya satu contoh Modul Kehadiran Otomatis yang dapat dibuat per satu kursus.';
$string['permit_homeroom'] = 'Izinkan akses dari Modul Homeroom';
$string['permit_homeroom_help'] = 'Jika Anda mencentang ini, modul Homeroom tidak mengakses modul/blok autoattend ini';
$string['permit_homeroom_title'] = 'Untuk Modul Homeroom';
$string['pluginadministration'] = 'Modul Kehadiran Otomatis Admin';
$string['pluginname'] = 'Modul Kehadiran Otomatis';
$string['pre_disptime'] = 'Tampilan informasi kelas paling cepat';
$string['pre_disptime_help'] = 'Jika blok menampilkan informasi mengenai kelas yang paling dekat atau sedang berlangsung, tentukan berapa menit sebelum kelas dimulai.';
$string['pre_disptime_title'] = 'Waktu tenggang sebelum kelas dimulai (m)';
$string['session_num'] = 'Jumlah sesi';
$string['summertime_disp'] = 'Waktu Musim Panas dapat diatur pada sesi.';
$string['summertime_disp_help'] = 'Anda dapat mengatur Waktu Musim Panas pada beberapa sesi.';
$string['summertime_title'] = 'Gunakan Waktu Musim Panas';
$string['use_item'] = 'gunakan {$a}';
$string['username_manage'] = 'Manajemen Nama Pengguna';
$string['username_manage_help'] = 'Anda dapat memilih pola nama yang ditampilkan dalam modul ini.';
