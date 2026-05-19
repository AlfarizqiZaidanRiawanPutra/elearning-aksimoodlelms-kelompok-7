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
 * Strings for component 'aiprovider_bedrock', language 'id', version '5.1'.
 *
 * @package     aiprovider_bedrock
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accesskeyid'] = 'ID Kunci Akses AWS';
$string['accesskeyid_desc'] = 'ID Kunci Akses AWS yang digunakan untuk autentikasi dengan Amazon Bedrock.';
$string['action:generate_image:model'] = 'Model AI';
$string['action:generate_image:model_desc'] = 'Model yang digunakan untuk menghasilkan gambar dari perintah pengguna.';
$string['action:generate_text:model'] = 'Model AI';
$string['action:generate_text:model_desc'] = 'Model yang digunakan untuk menghasilkan respons teks. Model inferensi lintas wilayah memerlukan "us." atau "eu." di awal.';
$string['action:generate_text:systeminstruction'] = 'Instruksi sistem';
$string['action:generate_text:systeminstruction_desc'] = 'Instruksi ini dikirimkan ke model AI beserta perintah pengguna. Menyunting instruksi ini tidak disarankan kecuali benar-benar diperlukan.';
$string['action:summarise_text:model'] = 'Model AI';
$string['action:summarise_text:model_desc'] = 'Model yang digunakan untuk meringkas teks yang disediakan.';
$string['action:summarise_text:systeminstruction'] = 'Instruksi sistem';
$string['action:summarise_text:systeminstruction_desc'] = 'Instruksi ini dikirimkan ke model AI beserta perintah pengguna. Menyunting instruksi ini tidak disarankan kecuali benar-benar diperlukan.';
$string['enableglobalratelimit'] = 'Atur batas nilai di seluruh situs';
$string['enableglobalratelimit_desc'] = 'Batasi jumlah permintaan yang dapat diterima penyedia API Amazon Bedrock di seluruh situs setiap jam.';
$string['enableuserratelimit'] = 'Atur batas nilai pengguna';
$string['enableuserratelimit_desc'] = 'Batasi jumlah permintaan yang dapat dibuat setiap pengguna ke penyedia API Amazon Bedrock setiap jam.';
$string['error:failedprocessimage'] = 'Gagal memproses gambar: {$a}';
$string['error:globalratelimitexceeded'] = 'Batas nilai global terlampaui';
$string['error:noimagedata'] = 'Tidak ada data gambar yang ditemukan dalam respons';
$string['error:unknownerror'] = 'Galat yang tidak diketahui';
$string['error:userratelimitexceeded'] = 'Batas nilai pengguna terlampaui';
$string['globalratelimit'] = 'Jumlah maksimum permintaan di seluruh situs';
$string['globalratelimit_desc'] = 'Jumlah permintaan di seluruh situs yang diizinkan per jam.';
$string['pluginname'] = 'Penyedia API Amazon Bedrock';
$string['privacy:metadata'] = 'Pengaya penyedia API Amazon Bedrock tidak menyimpan data pribadi apa pun.';
$string['privacy:metadata:aiprovider_bedrock:externalpurpose'] = 'Informasi ini dikirim ke Amazon Bedrock API agar respons dapat dihasilkan. Pengaturan akun AWS Anda dapat mengubah cara Amazon menyimpan dan menyimpan data ini. Tidak ada data pengguna yang secara eksplisit dikirim ke Amazon atau disimpan di Moodle LMS oleh pengaya ini.';
$string['privacy:metadata:aiprovider_bedrock:model'] = 'Model yang digunakan untuk menghasilkan respons.';
$string['privacy:metadata:aiprovider_bedrock:numberimages'] = 'Saat membuat gambar jumlah gambar yang digunakan dalam respons.';
$string['privacy:metadata:aiprovider_bedrock:prompttext'] = 'Pengguna memasukkan perintah teks yang digunakan untuk menghasilkan respons.';
$string['privacy:metadata:aiprovider_bedrock:responseformat'] = 'Saat membuat gambar format responsnya.';
$string['region'] = 'Wilayah AWS';
$string['region_desc'] = 'Wilayah AWS tempat layanan Amazon Bedrock tersedia (misalnya, eu-west-1, us-east-1, us-west-2).';
$string['secretaccesskey'] = 'Kunci Akses Rahasia AWS';
$string['secretaccesskey_desc'] = 'Kunci Akses Rahasia AWS yang digunakan untuk autentikasi dengan Amazon Bedrock.';
$string['userratelimit'] = 'Jumlah maksimum permintaan per pengguna';
$string['userratelimit_desc'] = 'Jumlah permintaan yang diizinkan per jam, per pengguna.';
