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
 * Strings for component 'local_slow_queries', language 'id', version '5.1'.
 *
 * @package     local_slow_queries
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkperformance_slowqueries_action'] = 'Lihat kueri lambat';
$string['checkperformance_slowqueries_details_found'] = 'Ditemukan <strong>{$a->count}</strong> kueri yang memakan lebih dari <strong>{$a->seconds}s</strong> - lihat <a href="{$a->url}">Laporan kueri lambat</a>';
$string['checkperformance_slowqueries_details_morethan'] = 'Ada <strong>{$a->count}</strong> kueri lebih dari <strong>{$a->seconds}s</strong> - lihat <a href="{$a->url}">Laporan kueri lambat</a>';
$string['checkperformance_slowqueries_name'] = 'Kueri lambat yang memengaruhi kinerja Moodle Anda';
$string['checkperformance_slowqueries_none'] = 'Tidak ada kueri yang memakan waktu lebih dari 5 detik.';
$string['checkperformance_slowqueries_notconfigured'] = 'Belum dikonfigurasi';
$string['checkperformance_slowqueries_summary_found'] = 'Ditemukan <strong>{$a->count}</strong> kueri yang memakan waktu lebih dari {$a->seconds} detik';
$string['col_avgtime'] = 'Waktu rata-rata (d)';
$string['col_count'] = 'Jumlah';
$string['col_cron'] = 'CRON';
$string['col_origin'] = 'Jejak balik';
$string['col_parameters'] = 'Parameter';
$string['col_sqlpreview'] = 'SQL';
$string['comments_title'] = 'Komentar';
$string['detail_indexes'] = 'Kemungkinan indeks yang hilang';
$string['detail_indexes_none'] = 'Tidak ada saran indeks yang terdeteksi untuk kueri ini.';
$string['detail_indexes_notice'] = 'Saran bersifat heuristik. Uji dengan hati-hati di lingkungan staging dan validasi dengan EXPLAIN/ANALYZE.';
$string['detail_sql'] = 'SQL dan parameter';
$string['detail_sql_expanded'] = 'SQL dengan parameter';
$string['detail_sql_expanded_desc'] = 'Perluasan upaya terbaik untuk analisis (hanya tampilan)';
$string['detail_title'] = 'Rincian kueri';
$string['duration_days'] = '{$a} hari';
$string['duration_hours'] = '{$a} jam';
$string['duration_minutes'] = '{$a} menit';
$string['duration_seconds'] = '{$a} detik';
$string['filter_apply'] = 'Terapkan';
$string['filter_minexec'] = 'Waktu eksekusi min. (d)';
$string['filter_search'] = 'Cari SQL';
$string['filter_search_ph'] = 'Ketik sebagian SQL untuk mencari...';
$string['filter_title'] = 'Filter';
$string['index_title'] = 'Kueri lambat';
$string['logslow_warning_body'] = 'Halaman ini membaca dari <code>mdl_log_queries</code>, tetapi situs Anda tidak dikonfigurasi untuk mencatat kueri SQL yang lambat. Aktifkan <code>logslow</code> di <code>config.php</code> (atur ke <code>true</code> atau angka dalam detik). Contoh:';
$string['logslow_warning_current'] = 'Nilai saat ini';
$string['logslow_warning_hint'] = 'Setelah menyimpan <code>config.php</code>, ulangi halaman/tugas cron yang lambat lalu segarkan halaman ini untuk melihat entri baru.';
$string['logslow_warning_title'] = 'Pencatatan kueri lambat dinonaktifkan';
$string['nav_index'] = 'Kueri lambat';
$string['pluginname'] = 'Kueri lambat';
$string['privacy:metadata'] = 'Plugin Kueri lambat tidak menyimpan data pribadi apa pun. Plugin ini hanya menampilkan catatan log kueri basis data yang sudah ada kepada administrator.';
$string['timeline_calendar'] = 'Linimasa kalender';
$string['timeline_last_7'] = '<strong>{$a}</strong> eksekusi dalam 7 hari terakhir';
$string['timeline_scale'] = 'Skala sesuai dengan 1 detik untuk setiap {$a} piksel';
$string['timeline_title'] = 'Linimasa kueri';
$string['timeline_totaltime'] = 'Secara total, basis data menghabiskan <strong>{$a}</strong> untuk mengeksekusi pernyataan SQL ini';
