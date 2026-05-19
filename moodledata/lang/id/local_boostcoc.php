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
 * Strings for component 'local_boostcoc', language 'id', version '5.1'.
 *
 * @package     local_boostcoc
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activefiltershiddencourses'] = 'Kursus tersembunyi';
$string['activefiltershintnotshowdisabled'] = 'Daftar kursus ini menampilkan semua kursus yang Anda ikuti. Filter dan kursus tersembunyi tidak diterapkan.';
$string['activefiltershintnotshowenabledactivefilters'] = 'Filter kursus aktif:';
$string['activefiltershintnotshowenabledchangelink'] = 'Ubah filter atau tampilkan kembali kursus tersembunyi';
$string['activefiltershintnotshowenablednoactivefilters'] = 'Tidak ada filter kursus aktif';
$string['pluginname'] = 'Ikhtisar kursus Boost di kampus';
$string['privacy:metadata'] = 'Ikhtisar kursus Boost di kampus menyediakan fungsionalitas yang diperluas bagi pengguna Moodle, tetapi tidak menyimpan data pribadi apa pun. Boost menggunakan data pribadi yang disimpan oleh pengaya Ikhtisar Kursus di Kampus (block_course_overview_campus).';
$string['setting_addactivefiltershint'] = 'Tambahkan petunjuk filter aktif';
$string['setting_addactivefiltershint_desc'] = 'Mengaktifkan pengaturan ini akan menambahkan simpul di akhir daftar kursus saya di laci navigasi Boost yang memberi tahu pengguna mengapa daftar kursus saya terlihat seperti itu (misalnya filter mana dan apakah kursus tersembunyi menghasilkan daftar kursus saya saat ini).';
$string['setting_addchangefilterslink'] = 'Tambahkan tautan filter perubahan';
$string['setting_addchangefilterslink_desc'] = 'Mengaktifkan pengaturan ini akan menambahkan simpul di akhir daftar kursus saya di laci navigasi Boost yang memberi tahu pengguna di mana harus mengubah filter saat ini dan kursus tersembunyi.';
$string['setting_changefilterslinktarget'] = 'Ubah tautan target filter';
$string['setting_changefilterslinktarget_desc'] = 'Dengan pengaturan ini, Anda mengontrol target tautan filter perubahan. Anda dapat mengaturnya ke halaman beranda situs atau dasbor pengguna. Ini cocok dengan dua lokasi tempat block_course_overview_campus dapat ditempatkan.<br />Harap diperhatikan: Untuk menghindari kebingungan pengguna, pastikan block_course_overview_campus selalu ditempatkan di halaman target dengan menempatkannya di sana sebagai blok tempel.<br /><em>Pengaturan ini hanya diproses ketika "Tambahkan tautan filter perubahan" diaktifkan.</em>';
$string['setting_disableinprogressfilter'] = 'Nonaktifkan filter proses bawaan Moodle';
$string['setting_disableinprogressfilter_desc'] = 'Perilaku standar Moodle adalah hanya menampilkan kursus yang sedang berlangsung di daftar kursus saya di laci navigasi Boost. Daftar kursus di block_course_overview_campus menampilkan semua kursus terlepas dari status sedang berlangsungnya. Hal ini dapat menyebabkan hasil yang membingungkan, misalnya kursus terlihat di block_course_overview_campus tetapi tidak di laci navigasi Boost. Mengaktifkan pengaturan ini akan menonaktifkan filter standar sedang berlangsung Moodle.';
$string['setting_disableinprogressfilterperformancehint'] = 'Harap diperhatikan: Jika Anda mengaktifkan pengaturan ini dan juga telah mengaktifkan pengaturan <a href="/admin/search.php?query=navshowmycoursecategories">navshowmycoursecategories</a>, menampilkan semua simpul kursus memerlukan waktu lebih lama dan Anda harus mempertimbangkan untuk menonaktifkan pengaturan navshowmycoursecategories.';
$string['setting_enablenotshown'] = 'Jangan tampilkan kursus yang difilter atau disembunyikan';
$string['setting_enablenotshown_desc'] = 'Mengaktifkan pengaturan ini akan mengubah daftar kursus saya di laci navigasi Boost agar hanya menampilkan kursus yang saat ini ditampilkan di block_course_overview_campus sesuai dengan pengaturan filter pengguna saat ini dan kursus yang telah ditandai pengguna sebagai tersembunyi.';
$string['setting_enablenotshownperformancehint'] = 'Harap diperhatikan: Jika Anda mengaktifkan pengaturan ini dan juga telah mengaktifkan pengaturan <a href="/admin/search.php?query=navshowmycoursecategories">navshowmycoursecategories</a>, menghapus simpul kursus memerlukan waktu lebih lama dan Anda harus mempertimbangkan untuk menonaktifkan pengaturan navshowmycoursecategories.';
$string['setting_enablenotshowntechnicalhint'] = 'Secara teknis, hal ini dilakukan dengan mengatur atribut showinflatnavigation pada simpul kursus ke false. Dengan demikian, simpul kursus hanya akan disembunyikan dari laci navigasi, tetapi akan tetap berada di pohon navigasi dan masih dapat diakses oleh bagian lain Moodle.';
$string['setting_filterstatusheading'] = 'Status filter';
$string['setting_generalfunctionalityheading'] = 'Fungsionalitas umum';
