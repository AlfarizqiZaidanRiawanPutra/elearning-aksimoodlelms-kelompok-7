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
 * Strings for component 'enrol_staffmgrallocation', language 'id', version '5.1'.
 *
 * @package     enrol_staffmgrallocation
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:disable'] = 'Nonaktifkan pendaftaran kursus dan hapus peran';
$string['action:keep'] = 'Tetap daftarkan pengguna';
$string['action:unenrol'] = 'Batalkan pendaftaran pengguna dari kursus';
$string['anongroup'] = 'Mantan manajer staf';
$string['config:autogroup'] = 'Pendaftaran grup otomatis';
$string['config:autogroup_help'] = 'Apakah pengguna harus ditambahkan ke grup: &lt;Nama penyewa&gt; + &lt;Nama lengkap manajer staf&gt;';
$string['config:enrolperiod'] = 'Durasi pendaftaran';
$string['config:enrolperiod_help'] = 'Durasi pendaftaran bawaan berlaku. Jika diatur ke nol, durasi pendaftaran tidak akan terbatas.';
$string['config:expiredaction'] = 'Tindakan kedaluwarsa pendaftaran';
$string['config:expiredaction_help'] = 'Ini adalah tindakan yang harus dilakukan ketika pendaftaran pengguna berakhir menggunakan pendaftaran alokasi manajer Staf';
$string['config:expirynotify'] = 'Beritahu sebelum pendaftaran berakhir';
$string['config:expirynotify_help'] = 'Menentukan apakah pesan pemberitahuan berakhirnya pendaftaran dikirim';
$string['config:expirythreshold'] = 'Ambang batas notifikasi';
$string['config:expirythreshold_help'] = 'Berapa lama sebelum pendaftaran berakhir pengguna harus diberitahu?';
$string['config:newenrols'] = 'Izinkan pendaftaran staf baru';
$string['config:newenrols_desc'] = 'Izinkan pengguna mendaftarkan staf ke kursus baru secara bawaan.';
$string['config:newenrols_help'] = 'Pengaturan ini menentukan apakah pengguna dapat mendaftarkan staf ke kursus ini.';
$string['config:roleid'] = 'Peran bawaan';
$string['config:roleid_help'] = 'Menunjukkan peran mana yang ditetapkan pada pengguna saat mendaftar menggunakan metode pendaftaran ini';
$string['config:status'] = 'Aktifkan pendaftaran alokasi manajer staf';
$string['config:status_help'] = 'Haruskah metode pendaftaran diaktifkan atau dinonaktifkan secara bawaan di tingkat kursus';
$string['config:welcome'] = 'Kirim pesan selamat datang kursus';
$string['config:welcome_help'] = 'Saat pengguna mendaftar sendiri dalam kursus, mereka mungkin dikirimi surel pesan selamat datang jika ini diaktifkan';
$string['enrolstaff'] = 'Daftarkan staf ke kursus';
$string['enrolusers'] = 'Daftarkan pengguna';
$string['expirymessageenrolledbody'] = '{$a->user} yang terhormat, Ini adalah pemberitahuan bahwa pendaftaran Anda dalam kursus \'{$a->course}\' akan berakhir pada {$a->timeend}. Jika Anda memerlukan bantuan, silakan hubungi {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Pemberitahuan berakhirnya pendaftaran';
$string['expirymessageenrollerbody'] = '{$a->user} yang terhormat, Ini adalah pemberitahuan bahwa pendaftaran anggota staf Anda {$a->staffmember} pada kursus \'{$a->course}\' akan berakhir pada {$a->timeend}.';
$string['expirymessageenrollersubject'] = 'Pemberitahuan berakhirnya pendaftaran';
$string['expirynotificationsent'] = 'Acara pemberitahuan berakhirnya pendaftaran telah terkirim';
$string['expirynotify:both'] = 'Manajer staf dan pengguna terdaftar';
$string['expirynotify:manager'] = 'Hanya untuk manajer staf';
$string['expirynotify:no'] = 'Tidak';
$string['expirynotify:user'] = 'Hanya pengguna terdaftar';
$string['messageprovider:expiry_notification'] = 'Kedaluwarsa pendaftaran';
$string['mystaff'] = 'Pendaftaran staf saya';
$string['pluginname'] = 'Alokasi manajer staf';
$string['privacy:metadata:enrol_staffmgrallocation_groups'] = 'Daftar manajer staf yang grupnya dibuat secara otomatis';
$string['privacy:metadata:enrol_staffmgrallocation_groups:groupid'] = 'ID grup';
$string['privacy:metadata:enrol_staffmgrallocation_groups:tenantid'] = 'ID penyewa';
$string['privacy:metadata:enrol_staffmgrallocation_groups:userid'] = 'Manajer staf yang menjadi tujuan dibuatkannya grup ini';
$string['reg_wpstaffmgrallocationenrolledusers'] = 'Jumlah pengguna yang terdaftar dalam kursus melalui pengaya enrol_wpstaffmgrallocation ({$a})';
$string['reg_wpstaffmgrallocationinstances'] = 'Jumlah instans pengaya enrol_wpstaffmgrallocation ({$a})';
$string['sendexpirynotificationstask'] = 'Tugas alokasi pendaftaran manajer staf kirim pemberitahuan kedaluwarsa';
$string['staffmgrallocation:config'] = 'Konfigurasikan alokasi manajer staf untuk mendaftarkan instans';
$string['staffmgrallocation:manage'] = 'Kelola instans pendaftaran siswa di tingkat kursus';
$string['staffmgrallocation:unenrol'] = 'Batalkan pendaftaran pengguna dari kursus';
$string['staffmgrallocation:unenrolself'] = 'Batalkan pendaftaran diri dari kursus';
$string['staffmgrtab'] = 'Pendaftaran manajer staf';
$string['syncenrolmentstask'] = 'Sinkronkan tugas pendaftaran alokasi manajer staf';
$string['unenrolselfconfirm'] = 'Apakah Anda benar-benar ingin membatalkan pendaftaran kursus "{$a}"?';
$string['welcome:body'] = 'Kepada <i>{$a->firstname}</i>,

<i>Anda telah didaftarkan oleh manajer staf Anda {$a->staffmgr} ke {$a->coursename}.</i><br/>

Anda dapat mengakses kursus menggunakan URL berikut <i><a href="{$a->courseurl}">{$a->courseurl}</a>.</i><br/>

<i>Jika Anda belum melakukannya, Anda harus mengedit halaman profil Anda sehingga kami dapat mempelajari lebih lanjut tentang Anda: <a href="{$a->profileurl}">{$a->profileurl}</a></i>';
$string['welcome:no'] = 'Tidak';
$string['welcome:subject'] = 'Selamat datang di {$a}';
$string['welcome:yes'] = 'Dari alamat tanpa balasan (dikonfigurasi di bawah Konfigurasi surat keluar)';
$string['welcomemessagesent'] = 'Pesan selamat datang telah dikirim ke acara';
