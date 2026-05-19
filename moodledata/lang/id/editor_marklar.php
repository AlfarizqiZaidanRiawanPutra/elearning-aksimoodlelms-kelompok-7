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
 * Strings for component 'editor_marklar', language 'id', version '5.1'.
 *
 * @package     editor_marklar
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['insertimage'] = 'Sisipkan gambar';
$string['insertlink'] = 'Sisipkan berkas';
$string['pluginname'] = 'Marklar';
$string['preferences'] = 'Preferensi penyunting Marklar';
$string['preferencesediting'] = 'Opsi penyuntingan';
$string['preferencesformat'] = 'Format teks tambahan juga dapat disunting dengan Marklar';
$string['preferencesformat_help'] = 'Marklar secara bawaan mendukung teks berformat Markdown. Ini juga dapat digunakan untuk menyunting teks dalam format lain. Pilih juga semua format teks tambahan yang ingin Anda sunting dengan Marklar.

Secara bawaan, Marklar digunakan untuk format otomatis Moodle dan kolom berformat teks biasa. Untuk menyunting HTML, penyunting teks kaya lainnya (seperti Atto atau TinyMCE) akan digunakan.';
$string['preferencesmonospace'] = 'Gunakan font monospace';
$string['previewloading'] = 'Memuat pratinjau...';
$string['previewoff'] = 'Sunting';
$string['previewon'] = 'Pratinjau';
$string['privacy:export:preferences:format'] = 'Apakah Anda lebih suka menggunakan Marklar untuk menyunting teks dengan sintaksis {$a->format}.';
$string['syntax-format0'] = '<p>Format otomatis Moodle memungkinkan Anda mengetik teks secara normal, seolah-olah Anda mengirim surel teks biasa. Jeda baris akan dipertahankan. Anda masih dapat menyematkan kode HTML jika diinginkan, dan kode tersebut akan diterapkan.</p>';
$string['syntax-format1'] = '<dl>
<dt>Tautan</dt>
<dd><code>&lt;a href="https://example.com"&gt;Teks tautan&lt;/a&gt;</code></dd>
<dt>Penekanan dan pentingnya</dt>
<dd><code>&lt;em&gt;Teks yang ditekankan&lt;/em&gt;</code></dd>
<dd><code>&lt;strong&gt;Teks yang sangat penting&lt;/strong&gt;</code></dd>
<dt>Judul</dt>
<dd><code>&lt;h2&gt;Level 2&lt;/h2&gt;</code></dd>
<dd><code>&lt;h3&gt;Level 3&lt;/h2&gt;</code></dd>
<dt>Paragraf dan jeda baris</dt>
<dd><code>&lt;p&gt;Teks paragraf&lt;/p&gt;</code></dd>
<dd><code>Jeda baris</code></dd>
</dl>';
$string['syntax-format2'] = '<p>Format ini berguna ketika Anda perlu memasukkan banyak kode atau HTML yang ingin ditampilkan persis seperti saat Anda menulisnya. Format ini tetap menerjemahkan spasi dan baris baru, tetapi selain itu, teks Anda tidak akan diubah.</p>';
$string['syntax-format4'] = '<dl>
<dt>Tautan</dt>
<dd><code>[teks tautan](https://example.com)</code></dd>
<dd><code>[teks tautan](https://example.com "Judul tautan")</code></dd>
<dt>Penekanan dan kepentingan</dt>
<dd><code>_Teks yang ditekankan_</code></dd>
<dd><code>*Teks yang ditekankan*</code></dd>
<dd><code>__Teks yang sangat penting__</code></dd>
<dd><code>**Teks yang sangat penting**</code></dd>
<dt>Judul</dt>
<dd><code>## Tingkat 2 ##</code></dd>
<dd><code>### Tingkat 3 ###</code></dd>
<dt>Paragraf dan jeda baris</dt>
<dd>Paragraf dipisahkan oleh baris kosong. Untuk jeda baris, akhiri baris dengan dua spasi atau lebih.</dd>
<dt>Kutipan Blok</dt>
<dd><code>&gt; Kutipan Blok Gaya Surel</code></dd>
<dt>Daftar</dt>
<dd><code>* Item Daftar Poin</code></dd>
<dd><code>1. Item daftar bernomor</code></dd>
<dt>Diformat sebelumnya</dt>
<dd><code>`function_name()`</code> (sebaris)</dd>
<dd><code>&nbsp;&nbsp;&nbsp;code_block()</code> (indentasi dengan empat spasi)</dd>
<dt>Aturan horizontal</dt>
<dd><code>---</code></dd>
<dd><code>***</code></dd>
<dt>HTML</dt>
<dd>Untuk markup apa pun yang tidak tercakup dalam sintaks Markdown, cukup gunakan HTML mentah.</dd>
<dd><code>&lt;span class="badge badge-info"&gt;Notifikasi&lt;/span&gt;</code></dd>
<dd><code>&lt;img class="img-responsive" src="…" alt="…" /&gt;</code></dd>
</dl>
<hr>
<p><a target="_blank" href="https://daringfireball.net/projects/markdown/syntax">Dokumentasi sintaks Markdown lengkap</a></p>';
$string['syntaxloading'] = 'Memuat bantuan sintaksis…';
$string['syntaxoff'] = 'Sembunyikan sintaksis';
$string['syntaxon'] = 'Tampilkan sintaksis';
