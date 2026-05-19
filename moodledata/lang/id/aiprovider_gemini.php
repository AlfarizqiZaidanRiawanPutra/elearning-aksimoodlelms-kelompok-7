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
 * Strings for component 'aiprovider_gemini', language 'id', version '5.1'.
 *
 * @package     aiprovider_gemini
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:explain_text:endpoint'] = 'Titik akhir API';
$string['action:explain_text:model'] = 'Model AI';
$string['action:explain_text:model_help'] = 'Model yang digunakan untuk menjelaskan teks yang disediakan.';
$string['action:explain_text:systeminstruction'] = 'Instruksi sistem';
$string['action:explain_text:systeminstruction_help'] = 'Instruksi ini dikirimkan ke model AI bersama dengan perintah pengguna. Menyunting instruksi ini tidak disarankan kecuali benar-benar diperlukan.';
$string['action:generate_image:endpoint'] = 'Titik akhir API';
$string['action:generate_image:model'] = 'Model AI';
$string['action:generate_image:model_desc'] = 'Model yang digunakan untuk menghasilkan gambar dari perintah pengguna.';
$string['action:generate_image:model_help'] = 'Model yang digunakan untuk menghasilkan gambar berdasarkan perintah pengguna.';
$string['action:generate_image:systeminstruction'] = 'Instruksi sistem';
$string['action:generate_image:systeminstruction_desc'] = 'Instruksi ini dikirimkan ke model AI beserta perintah pengguna. Menyunting instruksi ini tidak disarankan kecuali benar-benar diperlukan.';
$string['action:generate_text:endpoint'] = 'Titik akhir API';
$string['action:generate_text:model'] = 'Model AI';
$string['action:generate_text:model_desc'] = 'Model yang digunakan untuk menghasilkan respons teks.';
$string['action:generate_text:model_help'] = 'Model yang digunakan untuk menghasilkan tanggapan teks.';
$string['action:generate_text:systeminstruction'] = 'Instruksi sistem';
$string['action:generate_text:systeminstruction_desc'] = 'Instruksi ini dikirimkan ke model AI beserta perintah pengguna. Menyunting instruksi ini tidak disarankan kecuali benar-benar diperlukan.';
$string['action:generate_text:systeminstruction_help'] = 'Instruksi ini dikirimkan ke model AI bersama dengan perintah pengguna. Menyunting instruksi ini tidak disarankan kecuali benar-benar diperlukan.';
$string['action:summarise_text:endpoint'] = 'Titik akhir API';
$string['action:summarise_text:model'] = 'Model AI';
$string['action:summarise_text:model_desc'] = 'Model yang digunakan untuk meringkas teks yang disediakan.';
$string['action:summarise_text:model_help'] = 'Model yang digunakan untuk merangkum teks yang disediakan.';
$string['action:summarise_text:systeminstruction'] = 'Instruksi sistem';
$string['action:summarise_text:systeminstruction_desc'] = 'Instruksi ini dikirimkan ke model AI beserta perintah pengguna. Menyunting instruksi ini tidak disarankan kecuali benar-benar diperlukan.';
$string['action:summarise_text:systeminstruction_help'] = 'Instruksi ini dikirimkan ke model AI bersama dengan perintah pengguna. Menyunting instruksi ini tidak disarankan kecuali benar-benar diperlukan.';
$string['apikey'] = 'Kunci API Gemini';
$string['apikey_help'] = 'Dapatkan kunci dari <a href="https://aistudio.google.com/apikey">kunci API situs web Google AI Studio</a>.';
$string['custom_model_name'] = 'Nama model kustom';
$string['enableglobalratelimit'] = 'Atur batas nilai di seluruh situs';
$string['enableglobalratelimit_desc'] = 'Batasi jumlah permintaan yang dapat diterima penyedia API Gemini di seluruh situs setiap jam.';
$string['enableuserratelimit'] = 'Atur batas nilai pengguna';
$string['enableuserratelimit_desc'] = 'Batasi jumlah permintaan yang dapat dibuat setiap pengguna ke penyedia API Gemini setiap jam.';
$string['extraparams'] = 'Parameter ekstra';
$string['extraparams_help'] = 'Parameter ekstra dapat dikonfigurasi di sini. Kami mendukung format JSON. Contoh:
<pre>
{
    "temperature": 0.5,
    "max_completion_tokens": 100
}
</pre>';
$string['getallmodels_error'] = 'Anda perlu memasukkan kunci API sebelumnya.';
$string['globalratelimit'] = 'Jumlah maksimum permintaan di seluruh situs';
$string['globalratelimit_desc'] = 'Jumlah permintaan di seluruh situs yang diizinkan per jam.';
$string['invalidjson'] = 'String JSON tidak valid';
$string['pluginname'] = 'Penyedia API Gemini';
$string['privacy:metadata'] = 'Pengaya penyedia API Gemini tidak menyimpan data pribadi apa pun.';
$string['privacy:metadata:aiprovider_gemini:externalpurpose'] = 'Informasi ini dikirim ke API Gemini agar respons dapat dihasilkan. Pengaturan akun Gemini Anda dapat mengubah cara Gemini menyimpan dan menyimpan data ini. Tidak ada data pengguna yang secara eksplisit dikirim ke Gemini atau disimpan di Moodle LMS oleh pengaya ini.';
$string['privacy:metadata:aiprovider_gemini:model'] = 'Model yang digunakan untuk menghasilkan respons.';
$string['privacy:metadata:aiprovider_gemini:numberimages'] = 'Saat membuat gambar jumlah gambar yang digunakan dalam respons.';
$string['privacy:metadata:aiprovider_gemini:prompttext'] = 'Pengguna memasukkan perintah teks yang digunakan untuk menghasilkan respons.';
$string['privacy:metadata:aiprovider_gemini:responseformat'] = 'Saat membuat gambar format responsnya.';
$string['settings'] = 'Pengaturan';
$string['settings_frequency_penalty'] = 'frequency_penalty';
$string['settings_frequency_penalty_help'] = 'Penalti frekuensi mengatur seberapa sering kata diulang. Semakin tinggi penalti, semakin sedikit pengulangan dalam teks yang dihasilkan.';
$string['settings_help'] = 'Sesuaikan pengaturan di bawah ini untuk menyesuaikan cara permintaan dikirim ke Gemini.';
$string['settings_max_completion_tokens'] = 'max_completion_tokens';
$string['settings_max_completion_tokens_help'] = 'Jumlah token maksimum yang digunakan dalam teks yang dihasilkan.';
$string['settings_presence_penalty'] = 'presence_penalty';
$string['settings_presence_penalty_help'] = 'Penalti presensi mendorong model untuk menggunakan kata baru dengan meningkatkan kemungkinan pemilihan kata yang belum pernah digunakan sebelumnya. Nilai yang lebih tinggi membuat teks yang dihasilkan lebih beragam, sementara nilai yang lebih rendah memungkinkan lebih banyak pengulangan.';
$string['settings_top_p'] = 'top_p';
$string['settings_top_p_help'] = 'top_p (pengambilan sampel inti) menentukan berapa banyak kata yang akan dipertimbangkan. Nilai yang tinggi (misalnya 0.9) berarti model akan mempertimbangkan lebih banyak kata, yang membuat teks yang dihasilkan lebih beragam.';
$string['userratelimit'] = 'Jumlah maksimum permintaan per pengguna';
$string['userratelimit_desc'] = 'Jumlah permintaan yang diizinkan per jam, per pengguna.';
