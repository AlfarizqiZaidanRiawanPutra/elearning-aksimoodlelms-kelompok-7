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
 * Strings for component 'message_kopereemail', language 'id', version '5.1'.
 *
 * @package     message_kopereemail
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action_create'] = 'Buat pesan khusus';
$string['action_delete'] = 'Hapus pesan khusus';
$string['action_edit'] = 'Edit pesan khusus';
$string['action_export'] = 'Ekspor JSON';
$string['action_import'] = 'Impor JSON';
$string['action_preview'] = 'Templat';
$string['action_preview_click'] = 'Klik di sini untuk menerima email dengan pengujian templat ini';
$string['action_preview_success'] = 'Email berhasil dikirim. Silakan periksa kotak masuk atau folder spam Anda.';
$string['export_filename_prefix'] = 'kopereemail-templates';
$string['export_title'] = 'Ekspor templat';
$string['import_file'] = 'Berkas JSON';
$string['import_file_help'] = 'Pilih JSON yang diekspor dari lingkungan lain.';
$string['import_invalid_json'] = 'Berkas tidak valid: JSON tidak sesuai format.';
$string['import_invalid_payload'] = 'Berkas tidak valid: struktur ekspor tidak cocok.';
$string['import_overwrite'] = 'Timpa templat yang ada';
$string['import_overwrite_help'] = 'Jika dicentang, templat yang ada akan diperbarui. Jika tidak dicentang, templat yang ada akan diabaikan.';
$string['import_success'] = 'Impor selesai.<br>&amp;nbsp;&amp;gt; <strong>Diimpor:</strong> {$a->imported}<br>&amp;nbsp;&amp;gt; <strong>Dilewati:</strong> {$a->skipped}<br>&amp;nbsp;&amp;gt; <strong>Wrapper diperbarui:</strong> {$a->wrapper}.';
$string['import_title'] = 'Impor templat';
$string['import_wrapper'] = 'Impor wrapper HTML (templat dasar)';
$string['import_wrapper_help'] = 'Jika dicentang, wrapper HTML JSON akan menggantikan wrapper yang dikonfigurasi di lingkungan ini.';
$string['messages'] = 'pesan';
$string['placeholders_course_data_desc'] = 'Data kursus (jika dapat dideteksi).';
$string['placeholders_course_url_desc'] = 'URL kursus (jika dapat dideteksi).';
$string['placeholders_dates_now_desc'] = 'Tanggal/waktu saat ini (userdate).';
$string['placeholders_desc'] = 'Anda dapat menggunakan placeholder Mustache dalam pesan.';
$string['placeholders_fullmessage_desc'] = 'Pesan teks biasa.';
$string['placeholders_fullmessagehtml_desc'] = 'Pesan HTML (gunakan kurung kurawal tiga).';
$string['placeholders_site_fullname_desc'] = 'Nama lengkap situs (<code>{$SITE->fullname}</code>).';
$string['placeholders_site_logourl_desc'] = 'Logo situs (<img src="{$a->logo_url}" style="max-width:70px;max-height:70px;">).';
$string['placeholders_site_shortname_desc'] = 'Nama singkat situs (<code>{$SITE->shortname}</code>).';
$string['placeholders_site_url_desc'] = 'URL situs (<code>{$CFG->wwwroot}</code>).';
$string['placeholders_subject_desc'] = 'Subjek notifikasi saat ini.';
$string['placeholders_title'] = 'Placeholder yang tersedia';
$string['placeholders_userfrom_data_desc'] = 'Data pengirim.';
$string['placeholders_userto_data_desc'] = 'Data penerima.';
$string['pluginname'] = 'Kopere Email';
$string['privacy:metadata:attachment'] = 'Berkas terlampir di sistem berkas.';
$string['privacy:metadata:attachname'] = 'Nama lampiran.';
$string['privacy:metadata:externalpurpose'] = 'Tujuan eksternal';
$string['privacy:metadata:fullmessage'] = 'Pesan teks biasa.';
$string['privacy:metadata:fullmessagehtml'] = 'Pesan HTML.';
$string['privacy:metadata:recipient'] = 'Penerima email.';
$string['privacy:metadata:replyto'] = 'Email balasan (Reply-to).';
$string['privacy:metadata:replytoname'] = 'Nama balasan (Reply-to).';
$string['privacy:metadata:subject'] = 'Subjek email.';
$string['privacy:metadata:userfrom'] = 'Pengirim email.';
$string['settings_customtemplates'] = 'Pesan khusus per penyedia';
$string['settings_customtemplates_desc'] = 'Buat/edit pesan khusus untuk setiap penyedia notifikasi.';
$string['settings_wrapper'] = 'Templat dasar email (wrapper)';
$string['settings_wrapper_desc'] = 'HTML ini diformat dalam Mustache dan akan diterapkan sebagai templat pesan yang akan dikirim ke mahasiswa. Konten HTML harus disisipkan di tempat {{{fullmessagehtml}}} berada.';
$string['table_actions'] = 'Tindakan';
$string['table_component'] = 'Komponen';
$string['table_name'] = 'Nama';
$string['table_provider'] = 'Penyedia';
$string['template'] = 'Templat';
$string['template_changue'] = 'Saya ingin menggunakan templat ini sebagai default untuk Kopere Mail';
$string['template_changued'] = 'Templat berhasil diperbarui';
$string['template_delete_confirm'] = 'Apakah Anda yakin ingin menghapus pesan khusus untuk penyedia ini?';
$string['template_delete_title'] = 'Hapus pesan khusus';
$string['template_deleted'] = 'Pesan khusus dihapus.';
$string['template_edit_bodyhtml'] = 'HTML pesan';
$string['template_edit_provider'] = 'Penyedia';
$string['template_edit_save'] = 'Simpan';
$string['template_edit_subject'] = 'Subjek (opsional)';
$string['template_edit_title'] = 'Pesan khusus';
$string['template_preview'] = 'Pratinjau templat';
$string['template_saved'] = 'Pesan khusus disimpan.';
$string['templates_other'] = 'Templat lain';
$string['templates_transfer_desc'] = 'Gunakan layanan ini untuk memigrasikan pengaturan antar lingkungan (mis., staging -> production).';
$string['templates_transfer_title'] = 'Ekspor / Impor pengaturan';
