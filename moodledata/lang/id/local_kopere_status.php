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
 * Strings for component 'local_kopere_status', language 'id', version '5.1'.
 *
 * @package     local_kopere_status
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['day'] = '1 hari';
$string['days'] = '{$a} hari';
$string['down'] = 'Tidak beroperasi';
$string['intervalminutes'] = 'Interval pemeriksaan (menit)';
$string['intervalminutes_desc'] = 'Waktu minimum antara siklus pemeriksaan. Tugas terjadwal akan membatasi dirinya berdasarkan nilai ini.';
$string['lastcheck'] = 'Pemeriksaan terakhir';
$string['minute'] = '1 menit';
$string['minutes'] = '{$a} menit';
$string['modules'] = 'Modul';
$string['modules_desc'] = 'Masukkan satu modul per baris. Setiap baris akan direplikasi untuk status yang berbeda. Misalnya, jika Anda memasukkan "Pendaftaran" dan "Dukungan" (masing-masing satu per baris), status akan ditampilkan hanya untuk "Pendaftaran" dan untuk "Dukungan".';
$string['nodata'] = 'Belum ada data';
$string['overall_down'] = 'Sistem tidak tersedia';
$string['overall_operational'] = 'Semua sistem beroperasi';
$string['pluginname'] = 'Status Sistem';
$string['privacy:metadata'] = 'Plugin Kopere Status tidak menyimpan data pribadi apa pun.';
$string['publiclink'] = 'Halaman status publik';
$string['publictitle'] = 'Judul publik';
$string['publictitle_desc'] = 'Judul yang ditampilkan pada halaman status publik.';
$string['retentiondays'] = 'Retensi (hari)';
$string['retentiondays_desc'] = 'Hapus baris rekap per jam yang lebih lama dari jumlah hari ini. Log mentah juga dibersihkan setelah setiap rekap (hanya menyimpan jam berjalan untuk agregasi berikutnya).';
$string['statuspagedays'] = 'Hari halaman status';
$string['statuspagedays_desc'] = 'Jumlah hari yang ditampilkan pada halaman status (pilih dari 1 hingga 7).';
$string['task_hourly_rollup'] = 'Rekap per jam &amp; pembersihan StatusBoard';
$string['up'] = 'Beroperasi';
