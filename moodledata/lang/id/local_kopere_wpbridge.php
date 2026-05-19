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
 * Strings for component 'local_kopere_wpbridge', language 'id', version '5.1'.
 *
 * @package     local_kopere_wpbridge
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Tindakan';
$string['adminnotification_body'] = 'Sebuah masalah terdeteksi pada jembatan WooCommerce.

{$a}';
$string['adminnotification_subject'] = 'Masalah Jembatan WP';
$string['back'] = 'Kembali';
$string['dashboard_laststatus'] = 'Status koneksi';
$string['dashboard_mappingcount'] = 'Pemetaan';
$string['dashboard_openui'] = 'Pemetaan terbuka';
$string['dashboard_pendingcount'] = 'Item tertunda';
$string['dashboard_processedcount'] = 'Item yang diproses';
$string['dashboard_settings'] = 'Pengaturan';
$string['dashboard_subtitle'] = 'Sinkronkan penjualan yang telah selesai ke kursus Moodle dan kohort.';
$string['dashboard_title'] = 'Jembatan WooCommerce ke Moodle';
$string['error_configmissing'] = 'Pengaturan WooCommerce tidak lengkap.';
$string['error_invalidsignature'] = 'Tanda tangan webhook WooCommerce tidak valid.';
$string['error_invalidwebhooktoken'] = 'Token webhook tidak valid.';
$string['error_missingemail'] = 'Pesanan tidak menyertakan email pelanggan.';
$string['error_missingorderid'] = 'ID pesanan WooCommerce hilang.';
$string['error_nomanualenrol'] = 'Tidak ada instance pendaftaran manual yang aktif ditemukan dalam kursus.';
$string['error_nomapping'] = 'Tidak ada pemetaan aktif untuk produk ini.';
$string['manage'] = 'Kelola jembatan WooCommerce';
$string['mapping_add'] = 'Tambahkan pemetaan';
$string['mapping_cohort'] = 'Kohort';
$string['mapping_course'] = 'Kursus';
$string['mapping_delete'] = 'Hapus pemetaan';
$string['mapping_delete_confirm'] = 'Apakah Anda benar-benar ingin menghapus pemetaan ini?';
$string['mapping_deleted'] = 'Pemetaan berhasil dihapus.';
$string['mapping_edit'] = 'Sunting pemetaan';
$string['mapping_enabled'] = 'Aktif';
$string['mapping_itemtype'] = 'Jenis tujuan';
$string['mapping_itemtype_cohort'] = 'Kohort';
$string['mapping_itemtype_course'] = 'Kursus';
$string['mapping_missingcohort'] = 'Pilih kohort untuk pemetaan kohort.';
$string['mapping_missingcourse'] = 'Pilih kursus untuk pemetaan kursus.';
$string['mapping_productid'] = 'ID produk WooCommerce';
$string['mapping_role'] = 'papel untuk pendaftaran kursus';
$string['mapping_saved'] = 'Pemetaan berhasil disimpan.';
$string['mappings'] = 'Pemetaan';
$string['messageprovider_syncnotification'] = 'Notifikasi WP Bridge';
$string['ordernotification_body'] = 'Halo {$a->firstname},

Pesanan Anda {$a->orderid} telah diproses dengan sukses.

Akses yang diterapkan:
{$a->items}

Anda sekarang dapat mengakses Moodle di:
{$a->siteurl}

Salam,
{$a->sitename}';
$string['ordernotification_subject'] = 'Akses Moodle Anda sudah siap';
$string['pluginname'] = 'Kopere WP Bridge';
$string['privacy:metadata'] = 'Pengaya ini menyimpan data pesanan WooCommerce untuk pemrosesan pendaftaran Moodle.';
$string['savechanges'] = 'Simpan perubahan';
$string['settings_consumerkey'] = 'Kunci konsumen';
$string['settings_consumersecret'] = 'Rahasia konsumen';
$string['settings_debug'] = 'Mode debug';
$string['settings_notconfigured'] = 'Koneksi belum dikonfigurasi.';
$string['settings_section'] = 'Koneksi WooCommerce';
$string['settings_statusheading'] = 'Tes koneksi terakhir';
$string['settings_storeurl'] = 'URL WooCommerce';
$string['settings_storeurl_desc'] = 'Contoh: https://example.com';
$string['settings_testfailed'] = 'Pengujian koneksi gagal: {$a}';
$string['settings_testok'] = 'Koneksi berhasil diuji dan pemeriksaan webhook selesai.';
$string['settings_webhookheading'] = 'Endpoint webhook';
$string['settings_webhookheading_desc'] = 'Gunakan URL ini di WooCommerce. Token selalu diperlukan dalam query string.';
$string['settings_webhookurl'] = 'URL webhook';
$string['status_error'] = 'Kesalahan';
$string['status_failed'] = 'Gagal';
$string['status_ignored'] = 'Diabaikan';
$string['status_ok'] = 'OK';
$string['status_pending'] = 'Menunggu';
$string['status_processed'] = 'Diproses';
$string['task_syncorders'] = 'Sinkronisasi pesanan WooCommerce yang telah selesai.';
$string['wpbridge'] = 'WP Bridge';
