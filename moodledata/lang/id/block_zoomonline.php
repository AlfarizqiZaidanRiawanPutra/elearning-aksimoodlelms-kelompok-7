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
 * Strings for component 'block_zoomonline', language 'id', version '5.1'.
 *
 * @package     block_zoomonline
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountid'] = 'ID Akun Zoom';
$string['accountid_desc'] = 'Masukkan ID Akun Zoom Anda yang digunakan untuk OAuth.';
$string['attendance_module_warning'] = 'Peringatan - Modul kehadiran belum terinstal. Harap instal <a href="https://moodle.org/plugins/mod_attendance">mod_attendance</a>.';
$string['attendance_threshold'] = 'Ambang batas persentase kehadiran';
$string['attendance_threshold_desc'] = 'Persentase minimum durasi sesi yang harus dihadiri untuk menghindari status "Terlambat".';
$string['aws_bucket'] = 'Nama Bucket AWS S3';
$string['aws_bucket_desc'] = 'Masukkan nama bucket AWS S3 tempat video akan disimpan.';
$string['aws_key'] = 'Kunci Akses AWS S3';
$string['aws_key_desc'] = 'Masukkan ID Kunci Akses AWS S3 Anda.';
$string['aws_region'] = 'Wilayah AWS S3';
$string['aws_region_desc'] = 'Masukkan wilayah AWS tempat bucket S3 Anda berada.';
$string['aws_secret'] = 'Kunci Rahasia AWS S3';
$string['aws_secret_desc'] = 'Masukkan Kunci Akses Rahasia AWS S3 Anda.';
$string['clientid'] = 'ID Klien Zoom';
$string['clientid_desc'] = 'Masukkan ID Klien Zoom OAuth Anda.';
$string['clientsecret'] = 'Rahasia Klien Zoom';
$string['clientsecret_desc'] = 'Masukkan Rahasia Klien Zoom OAuth Anda.';
$string['course_end_warning_manage'] = 'Peringatan - Tanggal berakhirnya kursus ini sudah lewat, jadi ini tidak akan menghasilkan tautan.';
$string['course_end_warning_view'] = 'Tidak ada lagi kelas daring untuk modul ini.';
$string['descconfig'] = 'Konfigurasikan pengaturan untuk blok Zoom Online.';
$string['early_departure_threshold'] = 'Ambang batas keberangkatan awal (detik)';
$string['early_departure_threshold_desc'] = 'Jumlah detik sejak akhir sesi yang dapat ditinggalkan siswa sebelum ditandai "Terlambat".';
$string['embedbook'] = 'Buku';
$string['embedlabel'] = 'Label';
$string['embedtype'] = 'Jenis Sematan';
$string['embedtypedesc'] = 'Pilih apakah akan menanamkan video dalam Buku atau Label.';
$string['error'] = 'Galat';
$string['failed_update_visibility'] = 'Gagal memperbarui visibilitas:';
$string['force_groups'] = 'Terapkan keanggotaan grup';
$string['force_groups_desc'] = 'Jika diaktifkan, pengguna akan dibagi ke dalam tautan gabung yang berbeda per grup';
$string['headerconfig'] = 'Konfigurasi Zoom Online';
$string['latetime'] = 'Ambang batas terlambat (detik)';
$string['latetime_desc'] = 'Jumlah detik seorang siswa boleh terlambat sebelum ditandai sebagai "Terlambat".';
$string['localfolder'] = 'Map Penyimpanan Sementara (sistem tmp digunakan jika tidak ditentukan)';
$string['localfolder_desc'] = 'Tentukan jalur untuk menyimpan video sementara secara lokal di server Moodle sebelum diunggah ke penyimpanan aws atau moodle.';
$string['pluginname'] = 'Zoom Online';
$string['privacy:metadata'] = 'Blok tersebut hanya mengambil video dan kehadiran dari ZOOM yang terkait dengan kelas daring, tidak ada data pribadi pada pengguna tertentu yang disimpan.';
$string['privacy:metadata:block_zoomonline_links'] = 'Deskripsi data yang disimpan oleh block_zoomonline_links.';
$string['privacy:metadata:course_id'] = 'ID kursus Moodle yang dikaitkan dengan rapat.';
$string['privacy:metadata:groupid'] = 'ID grup Moodle tempat rapat dibuat.';
$string['privacy:metadata:lecturer_id'] = 'ID guru yang membuat rapat Zoom.';
$string['privacy:metadata:summary'] = 'Data terkait rapat Zoom yang dibuat dalam pengaya.';
$string['privacy:metadata:visible'] = 'Menunjukkan apakah rapat dapat dilihat oleh siswa (1=terlihat, 2=tersembunyi).';
$string['privacy:metadata:zoom_email'] = 'Surel pengguna dikirim ke Zoom untuk mengaitkan rapat dengan akun mereka.';
$string['privacy:metadata:zoom_firstname'] = 'Nama depan pengguna, dikirim ke Zoom untuk nama tampilan rapat.';
$string['privacy:metadata:zoom_lastname'] = 'Nama belakang pengguna, dikirim ke Zoom untuk nama tampilan rapat.';
$string['privacy:metadata:zoom_meeting_id'] = 'ID rapat Zoom yang dikaitkan dengan kursus/grup.';
$string['privacy:metadata:zoom_summary'] = 'Pengaya ini terintegrasi dengan Zoom API untuk membuat dan mengelola rapat.';
$string['process_zoom_meetings'] = 'Proses Rapat Zoom';
$string['storagetype'] = 'Jenis Penyimpanan';
$string['storagetype_aws'] = 'AWS S3';
$string['storagetype_desc'] = 'Pilih tempat menyimpan rekaman video: di AWS S3 atau secara lokal di server Moodle.';
$string['storagetype_local'] = 'Penyimpanan Lokal';
$string['timezone'] = 'Zona Waktu Bawaan';
$string['timezone_desc'] = 'Atur zona waktu bawaan untuk rapat Zoom.';
$string['useattendance'] = 'Aktifkan Pelacakan Kehadiran';
$string['useattendance_desc'] = 'Mengaktifkan atau menonaktifkan pelacakan kehadiran untuk rapat Zoom.';
$string['username_field'] = 'Kolom Nama Pengguna untuk Pencocokan Kehadiran';
$string['username_field_desc'] = 'Pilih apakah akan menggunakan alamat surel atau nama Zoom untuk mencocokkan siswa di Moodle. Nama Zoom akan cocok dengan nama tampilan Zoom dengan nama pengguna siswa Moodle, jadi pastikan mereka mengaturnya ke nomor siswa saat bergabung. Jika mereka memiliki akun Zoom sekolah, surel akan dikembalikan dan surel tersebut dapat dibandingkan dengan surel siswa. Perlu diketahui, jika siswa menggunakan akun Zoom non-sekolah dan menggunakan Zoom gratis, surel tidak akan dikembalikan ke payload. Satu-satunya cara untuk mencocokkan adalah dengan meminta siswa untuk menggunakan nomor siswa sebagai nama tampilan dan pastikan nama Zoom dipilih pada menu tarik-turun di atas.';
$string['username_field_email'] = 'Surel';
$string['username_field_zoomname'] = 'Nama Zoom';
$string['zoom_api_missing_warning'] = 'Peringatan - Client_id, Client_secret, atau Account_id Zoom API tidak ada. Silakan periksa konfigurasi pengaya.';
$string['zoom_play_with_transcript'] = 'Klik di sini untuk memutar video di Zoom dengan transkrip, Anda harus masuk ke Zoom';
$string['zoomonline:addinstance'] = 'Tambahkan blok Zoom Online baru';
$string['zoomonline:managevisibility'] = 'Kelola visibilitas Zoom Online';
$string['zoomonline:myaddinstance'] = 'Tambahkan blok Zoom Online baru ke Beranda saya';
$string['zoomonline:view'] = 'Lihat blok Zoom Online';
