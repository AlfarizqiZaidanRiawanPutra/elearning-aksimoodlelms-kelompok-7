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
 * Strings for component 'local_onenote', language 'id', version '5.1'.
 *
 * @package     local_onenote
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['connction_error'] = 'Tidak dapat terhubung ke OneNote. Harap tunggu beberapa saat dan coba lagi.';
$string['error_noapiavailable'] = 'API OneNote tidak tersedia. Koneksi ke OneNote hanya dapat digunakan oleh pengguna yang terhubung ke Microsoft 365.';
$string['errorfeedbackinstudentcontext'] = 'Mencoba membuat umpan balik dalam konteks pengiriman siswa.';
$string['errornopostdata'] = 'Tidak dapat membuat data halaman untuk dikirim ke OneNote.';
$string['errornosection'] = 'Tidak dapat memperoleh atau membuat bagian di Buku Catatan OneNote Anda';
$string['erroronenoteapibadcall'] = 'Galat dalam panggilan API.';
$string['erroronenoteapibadcall_message'] = 'Galat dalam panggilan API: {$a}';
$string['errorsubmissioninteachercontext'] = 'Mencoba membuat pengiriman dari konteks penilaian guru.';
$string['feedbacktitle'] = 'Umpan balik: {$a->assign_name} [{$a->student_firstname} {$a->student_lastname}]';
$string['notebookname'] = 'Buku Catatan Moodle';
$string['onenote_page_error'] = 'Tidak dapat membuka halaman OneNote untuk pengiriman atau umpan balik ini.';
$string['pluginname'] = 'Microsoft OneNote';
$string['privacy:metadata:local_onenote'] = 'Pengaya Lokal Microsoft OneNote';
$string['privacy:metadata:local_onenote_assign_pages'] = 'Halaman OneNote untuk pengiriman tugas dan umpan balik';
$string['privacy:metadata:local_onenote_assign_pages:assign_id'] = 'ID tugas';
$string['privacy:metadata:local_onenote_assign_pages:feedback_student_page_id'] = 'ID halaman untuk umpan balik siswa';
$string['privacy:metadata:local_onenote_assign_pages:feedback_teacher_page_id'] = 'ID halaman untuk umpan balik guru';
$string['privacy:metadata:local_onenote_assign_pages:student_lastmodified'] = 'Waktu terakhir kali siswa mengubah pengiriman';
$string['privacy:metadata:local_onenote_assign_pages:submission_student_page_id'] = 'ID halaman untuk pengiriman siswa';
$string['privacy:metadata:local_onenote_assign_pages:submission_teacher_page_id'] = 'ID halaman untuk pengiriman guru';
$string['privacy:metadata:local_onenote_assign_pages:teacher_lastviewed'] = 'Waktu terakhir guru melihat pengiriman';
$string['privacy:metadata:local_onenote_assign_pages:user_id'] = 'ID pengguna Moodle';
$string['privacy:metadata:local_onenote_user_sections'] = 'Bagian OneNote untuk kursus Moodle';
$string['privacy:metadata:local_onenote_user_sections:course_id'] = 'ID kursus Moodle';
$string['privacy:metadata:local_onenote_user_sections:section_id'] = 'ID bagian OneNote.';
$string['privacy:metadata:local_onenote_user_sections:user_id'] = 'ID pengguna Moodle';
$string['submissiontitle'] = 'Pengiriman: {$a->assign_name} [{$a->student_firstname} {$a->student_lastname}]';
