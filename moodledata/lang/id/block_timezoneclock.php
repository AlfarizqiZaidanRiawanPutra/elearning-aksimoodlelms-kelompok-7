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
 * Strings for component 'block_timezoneclock', language 'id', version '5.1'.
 *
 * @package     block_timezoneclock
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionaltimezones'] = 'Zona waktu';
$string['addtimezone'] = 'Tambahkan {no} zona waktu ke formulir';
$string['clocktype'] = 'Jenis jam';
$string['clocktype_desc'] = 'Jenis jam bawaan yaitu, digital atau analog';
$string['configtitle'] = 'Judul blok';
$string['configtitle_placeholder'] = 'Bawaan: Jam zona waktu';
$string['convert'] = 'Konversikan';
$string['convertedtimes'] = 'Waktu yang dikonversikan';
$string['datestamp'] = 'Pilih waktu';
$string['datetimeformat'] = 'Format';
$string['datetimeformat_help'] = '<table class="generaltable table-sm">
   <thead>
      <tr>
         <th>Token</th>
         <th>Arti</th>
         <th>Contoh</th>
      </tr>
   </thead>
   <tbody>
      <tr>
         <td><code>Y</code></td>
         <td>tahun 4 digit</td>
         <td><code>2025</code></td>
      </tr>
      <tr>
         <td><code>y</code></td>
         <td>tahun 2 digit</td>
         <td><code>25</code></td>
      </tr>
      <tr>
         <td><code>m</code></td>
         <td>bulan 2 digit</td>
         <td><code>04</code></td>
      </tr>
      <tr>
         <td><code>F</code></td>
         <td>Nama bulan lengkap</td>
         <td><code>April</code></td>
      </tr>
      <tr>
         <td><code>M</code></td>
         <td>Nama bulan pendek</td>
         <td><code>Apr</code></td>
      </tr>
      <tr>
         <td><code>d</code></td>
         <td>hari 2 digit</td>
         <td><code>05</code></td>
      </tr>
      <tr>
         <td><code>H</code></td>
         <td>24 jam</td>
         <td><code>13</code></td>
      </tr>
      <tr>
         <td><code>h</code></td>
         <td>12 jam (dengan padding)</td>
         <td><code>01</code></td>
      </tr>
      <tr>
         <td><code>g</code></td>
         <td>12 jam (tanpa padding)</td>
         <td><code>1</code></td>
      </tr>
      <tr>
         <td><code>i</code></td>
         <td>Menit</td>
         <td><code>45</code></td>
      </tr>
      <tr>
         <td><code>s</code></td>
         <td>Detik</td>
         <td><code>30</code></td>
      </tr>
      <tr>
         <td><code>A</code></td>
         <td>AM/PM (besar)</td>
         <td><code>PM</code></td>
      </tr>
      <tr>
         <td><code>a</code></td>
         <td>am/pm (kecil)</td>
         <td><code>pm</code></td>
      </tr>
      <tr>
         <td><code>D</code></td>
         <td>Hari kerja pendek</td>
         <td><code>Sab</code></td>
      </tr>
      <tr>
         <td><code>l</code></td>
         <td>Hari kerja penuh</td>
         <td><code>Sabtu</code></td>
      </tr>
   </tbody>
</table>';
$string['entervalidtimestamp'] = 'Masukkan stempel unix yang valid';
$string['fromtimezone'] = 'Dari zona waktu';
$string['invalid_datetimeformat'] = 'Format tanggal yang didefinisikan tidak valid. Lihat bantuan untuk token yang valid. Karakter tambahan ",", "/", ":", "-" atau spasi diizinkan sebagai pemisah.';
$string['pagetitle:converter'] = 'Konverter Zona Waktu';
$string['pluginname'] = 'Jam zona waktu';
$string['preferred_timezones'] = 'Zona Waktu Pilihan';
$string['privacy:metadata'] = 'Blok jam zona waktu hanya menampilkan data yang tersimpan di lokasi lain.';
$string['timestamp'] = 'Stempel unix';
$string['timestamp_placeholder'] = 'Masukkan stempel unix';
$string['timestampnotentered'] = 'Anda harus memasukkan Stempel unix atau memilih waktu';
$string['timezoneclock:addinstance'] = 'Tambahkan blok jam zona waktu';
$string['timezoneclock:myaddinstance'] = 'Tambahkan blok jam zona waktu ke dasbor';
$string['timezoneconveter'] = 'Konverter';
$string['timezones'] = 'Zona waktu';
$string['timezoneuser'] = 'Zona waktu Anda ({$a})';
$string['title'] = 'Jam zona waktu';
$string['toggletimeinput'] = 'Ubah stempel unix';
$string['toggletimeinput_checkicons'] = '<i class="fa-regular fa-square-check"></i><i class="fa-solid fa-square-check"></i>';
$string['totimezones'] = 'Ke Zona Waktu';
$string['typeanalog'] = 'Analog';
$string['typedigital'] = 'Digital';
$string['tzinformation:computerlabel'] = '💻 Komputer';
$string['tzinformation:serverlabel'] = 'Server';
$string['tzinformation:title'] = 'Jam';
