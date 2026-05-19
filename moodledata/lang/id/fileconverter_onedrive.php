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
 * Strings for component 'fileconverter_onedrive', language 'id', version '5.1'.
 *
 * @package     fileconverter_onedrive
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['chunkfileopenfail'] = 'Tidak dapat membuka berkas untuk mengaktifkan chunking.';
$string['conversionfailed'] = 'Uji konversi gagal: {$a}';
$string['conversionrequestfailed'] = 'Permintaan untuk mengonversi berkas di OneDrive gagal karena {$a}.';
$string['disabled'] = 'Dinonaktifkan';
$string['downloadfailed'] = 'Moodle tidak dapat mengunduh berkas yang dikonversi dari Microsoft.';
$string['issuer'] = 'Layanan OAuth 2';
$string['issuer_help'] = 'Layanan OAuth 2 yang digunakan untuk mengakses Microsoft OneDrive.';
$string['missingfileextension'] = 'Berkas yang akan dikonversi tampaknya tidak memiliki ekstensi di akhir namanya.';
$string['missinguploadid'] = 'Percobaan pengunggahan gagal. Tidak ada ID unggahan dalam respons panggilan REST unggahan.';
$string['nodownloadurl'] = 'API konversi Microsoft Graph tidak mengirimkan URL ke dokumen yang dikonversi';
$string['pluginname'] = 'Microsoft OneDrive';
$string['privacy:metadata:fileconverter_onedrive:externalpurpose'] = 'Informasi ini dikirim ke Microsoft OneDrive API agar berkas dapat dikonversi ke format alternatif. Berkas disimpan sementara di Microsoft OneDrive Drive dan akan dihapus setelah konversi selesai.';
$string['privacy:metadata:fileconverter_onedrive:filecontent'] = 'Konten berkas.';
$string['privacy:metadata:fileconverter_onedrive:params'] = 'Parameter kueri yang diteruskan ke Microsoft OneDrive API.';
$string['remotedeletefailed'] = 'Gagal menghapus berkas jarak jauh di OneDrive karena {$a}.';
$string['test_conversion'] = 'Uji konversi dokumen';
$string['test_conversionnotready'] = 'Konverter dokumen ini tidak dikonfigurasi dengan benar.';
$string['test_conversionready'] = 'Konverter dokumen ini dikonfigurasi dengan benar.';
$string['test_converter'] = 'Uji apakah konverter ini berfungsi dengan baik.';
$string['test_issuerinvalid'] = 'Layanan OAuth dalam pengaturan konverter dokumen diatur ke nilai yang tidak valid.';
$string['test_issuernotconnected'] = 'Layanan OAuth yang diatur dalam pengaturan konverter dokumen tidak memiliki akun sistem yang terhubung.';
$string['test_issuernotenabled'] = 'Layanan OAuth yang diatur dalam pengaturan konverter dokumen tidak diaktifkan.';
$string['test_issuernotset'] = 'Layanan OAuth perlu diatur dalam pengaturan konverter dokumen.';
$string['uploadfailed'] = 'Berkas tidak diunggah ke Microsoft OneDrive.';
$string['uploadprepfailed'] = 'Sesi unggah tidak dapat dibuat.';
