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
 * Strings for component 'aiprovider_deepseek', language 'id', version '5.1'.
 *
 * @package     aiprovider_deepseek
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:explain_text:endpoint'] = 'Titik akhir API';
$string['action:explain_text:model'] = 'Model penjelasan teks';
$string['action:explain_text:model_help'] = 'Model yang digunakan untuk menjelaskan teks yang disediakan.';
$string['action:explain_text:systeminstruction'] = 'Instruksi sistem';
$string['action:explain_text:systeminstruction_help'] = 'Instruksi ini dikirimkan ke model AI beserta perintah pengguna. Menyunting instruksi ini tidak disarankan kecuali benar-benar diperlukan.';
$string['action:generate_text:endpoint'] = 'Titik akhir API';
$string['action:generate_text:model'] = 'Model AI';
$string['action:generate_text:model_help'] = 'Model yang digunakan untuk menghasilkan respons teks.';
$string['action:generate_text:systeminstruction'] = 'Instruksi sistem';
$string['action:generate_text:systeminstruction_help'] = 'Instruksi ini dikirimkan ke model AI beserta perintah pengguna. Menyunting instruksi ini tidak disarankan kecuali benar-benar diperlukan.';
$string['action:summarise_text:endpoint'] = 'Titik akhir API';
$string['action:summarise_text:model'] = 'Model AI';
$string['action:summarise_text:model_help'] = 'Model yang digunakan untuk meringkas teks yang disediakan.';
$string['action:summarise_text:systeminstruction'] = 'Instruksi sistem';
$string['action:summarise_text:systeminstruction_help'] = 'Instruksi ini dikirimkan ke model AI beserta perintah pengguna. Menyunting instruksi ini tidak disarankan kecuali benar-benar diperlukan.';
$string['apikey'] = 'Kunci API DeepSeek';
$string['apikey_help'] = 'Dapatkan kunci dari <a href="https://platform.deepseek.com/api_keys" target="_blank">kunci API DeepSeek</a> Anda.';
$string['custom_model_name'] = 'Nama model kustom';
$string['extraparams'] = 'Parameter ekstra';
$string['extraparams_help'] = 'Parameter tambahan dapat dikonfigurasi di sini. Kami mendukung format JSON. Misalnya:
<pre>
{
    "temperature": 0.5,
    "max_tokens": 100
}
</pre>';
$string['invalidjson'] = 'String JSON tidak valid';
$string['pluginname'] = 'Penyedia API DeepSeek';
$string['privacy:metadata'] = 'Pengaya penyedia API DeepSeek tidak menyimpan data pribadi apa pun.';
$string['privacy:metadata:aiprovider_deepseek:externalpurpose'] = 'Informasi ini dikirim ke API DeepSeek agar respons dapat dihasilkan. Setelan akun DeepSeek Anda dapat mengubah cara DeepSeek menyimpan dan menyimpan data ini. Tidak ada data pengguna yang secara eksplisit dikirim ke DeepSeek atau disimpan di Moodle LMS oleh pengaya ini.';
$string['privacy:metadata:aiprovider_deepseek:model'] = 'Model yang digunakan untuk menghasilkan respons.';
$string['privacy:metadata:aiprovider_deepseek:prompttext'] = 'Pengguna memasukkan perintah teks yang digunakan untuk menghasilkan respons.';
$string['settings'] = 'Setelan';
$string['settings_frequency_penalty'] = 'frequency_penalty';
$string['settings_frequency_penalty_help'] = 'Angka antara -2,0 dan 2,0. Nilai positif memberikan penalti pada token baru berdasarkan frekuensinya yang sudah ada dalam teks sejauh ini, sehingga mengurangi kemungkinan model untuk mengulang baris yang sama kata demi kata.';
$string['settings_help'] = 'Sesuaikan setelan di bawah ini untuk menyesuaikan bagaimana permintaan dikirim ke DeepSeek.';
$string['settings_logprobs'] = 'logprobs';
$string['settings_logprobs_help'] = 'Apakah akan mengembalikan probabilitas logaritma dari token keluaran atau tidak. Jika benar, akan mengembalikan probabilitas logaritma dari setiap token keluaran yang dikembalikan dalam konten pesan.';
$string['settings_logprobs_label'] = 'Aktifkan';
$string['settings_max_tokens'] = 'max_tokens';
$string['settings_max_tokens_help'] = 'Bilangan bulat antara 1 dan 8192. Jumlah maksimum token yang dapat dihasilkan dalam penyelesaian obrolan. Panjang total token input dan token yang dihasilkan dibatasi oleh panjang konteks model. Jika max_tokens tidak ditentukan, nilai bawaan 4096 akan digunakan.';
$string['settings_presence_penalty'] = 'presence_penalty';
$string['settings_presence_penalty_help'] = 'Angka antara -2,0 dan 2,0. Nilai positif memberi penalti pada token baru berdasarkan kemunculannya dalam teks sejauh ini, sehingga meningkatkan kemungkinan model untuk membahas topik baru.';
$string['settings_temperature'] = 'temperature';
$string['settings_temperature_help'] = 'Suhu pengambilan sampel yang digunakan, antara 0 dan 2. Nilai yang lebih tinggi seperti 0,8 akan membuat keluaran lebih acak, sementara nilai yang lebih rendah seperti 0,2 akan membuatnya lebih terfokus dan deterministik. Kami umumnya menyarankan untuk mengubah nilai ini atau top_p, tetapi tidak keduanya.';
$string['settings_top_logprobs'] = 'top_logprobs';
$string['settings_top_logprobs_help'] = 'Bilangan bulat antara 0 dan 20 yang menentukan jumlah token yang paling mungkin dikembalikan pada setiap posisi token, masing-masing dengan probabilitas log terkait. logprobs harus diatur ke true jika parameter ini digunakan.';
$string['settings_top_p'] = 'top_p';
$string['settings_top_p_help'] = 'Alternatif untuk pengambilan sampel dengan suhu, disebut pengambilan sampel inti, di mana model mempertimbangkan hasil token dengan massa probabilitas top_p. Jadi, 0,1 berarti hanya token yang terdiri dari 10% massa probabilitas teratas yang dipertimbangkan. Kami umumnya merekomendasikan perubahan ini atau suhu, tetapi tidak keduanya.';
