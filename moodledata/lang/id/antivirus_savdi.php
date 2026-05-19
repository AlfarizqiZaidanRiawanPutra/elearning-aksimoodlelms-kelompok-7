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
 * Strings for component 'antivirus_savdi', language 'id', version '5.1'.
 *
 * @package     antivirus_savdi
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkconnectivity'] = 'Konektivitas SAVDI';
$string['checkconnectivityfalsepositive'] = 'Hasil positif palsu dari pemindaian uji.';
$string['checkconnectivitynoconfig'] = 'Tidak ada daemon SAVDI yang dikonfigurasi.';
$string['checkconnectivitynomethods'] = 'Komunikasi pemindai berhasil, tetapi tidak ada metode pemindaian yang diaktifkan.';
$string['checkconnectivityok'] = 'Uji pemindai berhasil.';
$string['checkconnectivityscandataerror'] = 'Galat pengujian SCANDATA: {$a}.';
$string['checkconnectivityscanfileerror'] = 'Galat pengujian SCANFILE: {$a}.';
$string['checkconnectivitytmpfileerror'] = 'Komunikasi pemindai berhasil, tetapi berkas pengujian tidak dapat dibuat.';
$string['chmodscanfile'] = 'Ubah izin berkas pemindaian';
$string['chmodscanfiledescr'] = 'Aktifkan opsi ini untuk mengubah sementara izin berkas yang sedang dipindai menjadi dapat dibaca oleh semua orang. Berguna ketika daemon pemindai bersifat lokal di server web, tetapi berkas yang sedang dipindai tidak dapat dibaca oleh proses pemindai. Tidak diperlukan jika daemon pemindai bersifat jarak jauh.';
$string['clientresult0'] = 'OK';
$string['clientresult1'] = 'Virus ditemukan';
$string['clientresult2'] = 'Galat';
$string['clientresult3'] = 'Permintaan tidak didukung';
$string['clientresult4'] = 'Data terlalu besar';
$string['connretry'] = 'Coba ulang koneksi';
$string['connretrydesc'] = 'Jika koneksi ke SAVDI gagal, percobaan koneksi akan dicoba ulang sebanyak ini.';
$string['conntcp'] = 'Host:port TCP/IP';
$string['conntype'] = 'Hubungkan ke daemon SAVDI dengan';
$string['conntypedescr'] = 'Jika daemon SAVDI bersifat lokal terhadap server web dan dapat membaca berkas yang dibuat oleh server web, pastikan daemon tersebut mendukung jenis permintaan \'SCANFILE\' dan nonaktifkan opsi *SAVDI daemon is remote*.

Jika daemon SAVDI bersifat remote terhadap server web, atau bersifat lokal tetapi tidak dapat membaca berkas yang dibuat oleh server web, pastikan daemon tersebut mendukung jenis permintaan \'SCANDATA\' dan aktifkan opsi *SAVDI daemon is remote*.';
$string['conntypetcp'] = 'Koneksi TCP/IP';
$string['conntypeunix'] = 'Soket domain Unix';
$string['connunix'] = 'Jalur ke soket domain Unix';
$string['daemonerroractlikevirus'] = 'Perlakukan berkas sebagai terinfeksi';
$string['daemonerrordonothing'] = 'Perlakukan file sebagai OK';
$string['errorcantopentcpsocket'] = 'Menghubungkan ke soket TCP menghasilkan galat {$a}';
$string['errorcantopenunixsocket'] = 'Menghubungkan ke soket domain Unix menghasilkan galat {$a}';
$string['errorfileopen'] = 'Galat saat membuka berkas {$a}';
$string['errorgeneral'] = 'Pemindai SAVDI mengatakan: {$a}';
$string['errorprotocol'] = 'Galat protokol SAVDI: {$a}';
$string['errorrejected'] = 'Server SAVDI menolak permintaan: {$a}';
$string['errorsenddatashort'] = 'Data yang dikirim lebih pendek dari yang diharapkan';
$string['errorsenddatatoobig'] = 'Ukuran data melebihi batas server SAVDI sebesar {$a} byte';
$string['errorservernotsupported'] = 'Server SAVDI tidak mendukung jenis permintaan {$a}';
$string['ondaemonerror'] = 'Pada galat daemon pemindai';
$string['ondaemonerrordescr'] = 'Tindakan yang harus diambil saat galat koneksi atau pemindai.';
$string['pluginname'] = 'Antivirus Sophos SAVDI';
$string['privacy:metadata'] = 'Pengaya antivirus Sophos SAVDI tidak menyimpan data pribadi apa pun.';
$string['scannerisremote'] = 'Daemon SAVDI bersifat jarak jauh';
$string['scannerisremotedescr'] = 'Mengaktifkan opsi ini akan mencegah pembacaan berkas secara langsung oleh daemon SAVDI, melainkan menyalin data yang akan dipindai ke daemon melalui koneksi jaringan. Daemon SAVDI harus mendukung jenis permintaan \'SCANDATA\' dan pengaturan \'maxscandata\'-nya harus diatur cukup besar untuk konten yang diharapkan.';
$string['testclient'] = 'Uji koneksi Sophos SAVDI';
$string['testclient_info'] = '<a href="{$a}">Pastikan komunikasi dengan daemon SAVDI yang dikonfigurasi berfungsi menggunakan alat uji koneksi ini</a>. Untuk menguji apakah SAVDI dapat memindai virus dengan benar, unggah berkas ke kursus atau repositori \'Berkas Pribadi\' Anda. Untuk uji respons virus positif yang aman, silakan periksa <a href="https://en.wikipedia.org/wiki/EICAR_test_file">berkas uji EICAR</a>.';
$string['testclienthasscandata'] = 'Mendukung permintaan SCANDATA';
$string['testclienthasscandir'] = 'Mendukung permintaan SCANDIR';
$string['testclienthasscandirr'] = 'Mendukung permintaan SCANDIRR';
$string['testclienthasscanfile'] = 'Mendukung permintaan SCANFILE';
$string['testclientmaxscandata'] = 'Ukuran permintaan SCANDATA maksimum';
$string['testclientresult'] = 'Hasil koneksi';
$string['testclientscandataresult'] = 'Hasil permintaan SCANDATA';
$string['testclientscanfileresult'] = 'Hasil permintaan SCANFILE';
$string['testclientscantest'] = 'Unggah berkas di bawah ini untuk menguji jenis permintaan SCANFILE dan SCANDATA. Jika pemindai jarak jauh, hanya SCANDATA yang digunakan.';
$string['testclientscantestpath'] = 'Berkas sementara yang diunggah';
$string['testclientscanuploaderror'] = 'Galat pengunggahan berkas: {$a}.';
$string['testclientscanuploaderrornotrecognised'] = 'Galat pengunggahan berkas PHP: {$a} tidak dikenali sebagai berkas yang diunggah.';
$string['testclientuploadandscan'] = 'Unggah dan pindai berkas';
$string['testclientversion'] = 'Versi pemindai';
$string['warngeneral'] = 'Pemindai SAVDI mengatakan: {$a}';
$string['warnprotocol'] = 'Peringatan protokol SAVDI: {$a}';
