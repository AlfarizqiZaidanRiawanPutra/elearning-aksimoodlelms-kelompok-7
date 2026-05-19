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
 * Strings for component 'local_copilot', language 'id', version '5.1'.
 *
 * @package     local_copilot
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accent_color'] = 'Warna aksen aplikasi agen';
$string['accent_color_help'] = 'Warna yang digunakan sebagai warna aksen untuk aplikasi di Microsoft 365. Gunakan kode warna heksadesimal.';
$string['agent_config_saved'] = 'Konfigurasi agen berhasil disimpan.';
$string['agent_description'] = 'Deskripsi agen';
$string['agent_description_help'] = 'Deskripsi yang ditampilkan kepada pengguna saat mereka mengakses agen dari Microsoft 365 Copilot.';
$string['agent_display_name'] = 'Nama tampilan agen';
$string['agent_display_name_help'] = 'Nama yang ditampilkan kepada pengguna saat mereka mengakses agen dari Microsoft 365 Copilot.';
$string['agent_instructions'] = 'Instruksi agen';
$string['agent_instructions_help'] = 'Instruksi ini sangat penting untuk membantu Microsoft 365 Copilot memahami fungsionalitas agen. Nilai bawaan harus dipertahankan kecuali Anda memiliki persyaratan khusus.';
$string['agent_oauth_client_registration_id'] = 'ID pendaftaran klien OAuth portal pengembang Teams';
$string['agent_oauth_client_registration_id_help'] = 'Server OAuth Moodle harus terdaftar di <a href="https://dev.teams.microsoft.com/oauth-configuration" target="_blank">portal pengembang Teams</a> dengan rincian berikut:
<ul>
<li>Nama pendaftaran: <b>{$a->site_name} local_oauth2 OAuth {$a->role}</b></li>
<li>URL Dasar: <b>{$a->wwwroot}</b></li>
<li>Batasi penggunaan berdasarkan organisasi: <b>Hanya organisasi saya</b></li>
<li>Batasi penggunaan berdasarkan aplikasi: <b>Semua aplikasi Teams</b></li>
<li>ID Klien: <b>{$a->client_id}</b></li>
<li>Rahasia klien: <b>{$a->client_secret}</b></li>
<li>Titik akhir otorisasi: <b>{$a->authorization_endpoint}</b></li>
<li>Titik akhir token: <b>{$a->token_endpoint}</b></li>
<li>Titik akhir penyegaran: <b>{$a->refresh_endpoint}</b></li>
<li>Cakupan: <b>{$a->scope}</b></li>
<li>Aktifkan Kunci Bukti untuk Pertukaran Kode (PKCE): <b>tidak dicentang</b></li>
</ul>';
$string['agent_oauth_client_registration_id_steps'] = 'Langkah-langkah pendaftaran klien OAuth portal pengembang Teams';
$string['agent_plugin_description'] = 'Deskripsi pengaya agen deklaratif';
$string['agent_plugin_description_help'] = 'Deskripsi yang ditampilkan kepada pengguna saat mereka mengakses agen dari Microsoft 365 Copilot.';
$string['agent_plugin_name'] = 'Nama pengaya agen deklaratif';
$string['agent_plugin_name_help'] = 'Nama yang ditampilkan kepada pengguna saat mereka mengakses agen dari Microsoft 365 Copilot.';
$string['app_external_id'] = 'ID eksternal aplikasi agen';
$string['app_external_id_help'] = 'Pertahankan nilai bawaan <b>{$a->id}</b> kecuali Anda memiliki beberapa aplikasi {$a->role} dalam satu penyewa.';
$string['app_full_description'] = 'Deskripsi lengkap aplikasi Agen';
$string['app_full_description_help'] = 'Deskripsi lengkap aplikasi yang ditampilkan kepada admin Microsoft 365 saat mengelola aplikasi.';
$string['app_full_name'] = 'Nama lengkap aplikasi agen';
$string['app_full_name_help'] = 'Nama lengkap aplikasi yang ditampilkan kepada admin Microsoft 365 saat mengelola aplikasi.';
$string['app_short_description'] = 'Deskripsi pendek aplikasi agen';
$string['app_short_description_help'] = 'Deskripsi pendek aplikasi yang ditampilkan kepada admin Microsoft 365 saat mengelola aplikasi.';
$string['app_short_name'] = 'Nama pendek aplikasi agen';
$string['app_short_name_help'] = 'Nama pendek aplikasi yang ditampilkan kepada admin Microsoft 365 saat mengelola aplikasi.';
$string['app_version'] = 'Versi aplikasi agen';
$string['app_version_help'] = 'Versi aplikasi yang ditampilkan kepada admin Microsoft 365 saat mengelola aplikasi.</br>
Versi harus dalam format <b>major.minor.patch</b> (misalnya 1.0.0).</br>
Versi hanya dapat ditingkatkan.</br>
Bagian "patch" akan ditingkatkan secara otomatis saat pengaturan aplikasi diperbarui.</br>
Aplikasi guru dan aplikasi siswa memiliki nilai versi yang sama.';
$string['color_icon'] = 'Ikon warna agen';
$string['color_icon_help'] = 'Ikon berwarna penuh berukuran 192 piksel X 192 piksel dalam format .png. Ikon ini ditampilkan kepada pengguna saat mereka mengakses agen dari Microsoft 365 Copilot.';
$string['copilot:download_agent'] = 'Konfigurasikan dan unduh agen deklaratif';
$string['copilot_connectors_connection_ids'] = 'Konektor kopilot';
$string['copilot_connectors_connection_ids_help'] = 'Opsional.<br/>
Pengaturan ini berisi daftar objek yang mengidentifikasi konektor Copilot yang tersedia untuk agen deklaratif.<br/>
Jika pengaturan ini dihilangkan, semua konektor Copilot dalam organisasi akan tersedia untuk agen deklaratif.<br/>
Setiap item berisi properti berikut:
<ul>
<li><b>connection_id</b>: String, perlu diisi. Pengidentifikasi unik konektor Copilot.</li>
<li><b>additional_search_terms</b>: String, opsional. Kueri Bahasa Kueri Kata Kunci (KQL) untuk memfilter item berdasarkan kolom dalam skema koneksi.</li>
<li><b>items_by_external_id</b>: Array objek identifikasi Item, opsional. Menentukan item tertentu berdasarkan ID di konektor Copilot yang tersedia untuk agen. Setiap item dalam larik berisi properti berikut:
<ul>
<li><b>item_id</b>: String, perlu diisi. Pengidentifikasi unik item eksternal.</li>
</ul>
</li>
<li><b>items_by_path</b>: Array objek Path, opsional. Memfilter item yang tersedia untuk agen berdasarkan jalur item (label semantik itemPath pada item). Setiap item dalam larik berisi properti berikut:
<ul>
<li><b>path</b>: String, perlu diisi. Jalur (nilai label semantik itemPath) item eksternal.</li>
</ul>
</li>
<li><b>items_by_container_name</b>: Array objek nama Container, opsional. Memfilter item yang tersedia untuk agen berdasarkan nama container (label semantik containerName pada item). Setiap item dalam larik berisi properti berikut:
<ul>
<li><b>container_name</b>: String, perlu diisi. Nama kontainer (nilai label semantik containerName) dari item eksternal.</li>
</ul>
</li>
<li><b>items_by_container_url</b>: Array objek URL Kontainer, opsional. Memfilter item yang tersedia untuk agen berdasarkan URL kontainer (label semantik containerUrl pada item). Setiap item dalam larik berisi properti berikut:
<ul>
<li><b>container_url</b>: String perlu diisi. URL kontainer (nilai label semantik containerUrl) dari item eksternal.</li>
</ul>
</li>
</ul>
Setiap item harus diberikan dalam format JSON, satu item per baris. Misalnya:
<pre>
{"connection_id": "00000000-0000-0000-0000-0000000000000", "additional_search_terms": "field1:value1 AND field2:value2"}
{"connection_id": "11111111-1111-1111-1111-1111-11111111111", "items_by_external_id": [{"item_id": "22222222-2222-2222-2222-2222-222222222222"}]}
{"connection_id": "33333333-3333-3333-3333-3333-33333333333", "items_by_path": [{"path": "/path/to/item"}]}
{"connection_id": "44444444-4444-4444-4444-44444444444", "items_by_container_name": [{"container_name": "Container Name"}]}
{"connection_id": "55555555-5555-5555-5555-55555555555", "items_by_container_url": [{"container_url": "https://example.com/container"}]}
{"connection_id": "66666666-6666-6666-6666-6666-6666666666", "items_by_external_id": [{"item_id": "7777777-7777-7777-7777-77777777777"}], "items_by_path": [{"path": "/another/path/to/item"}]}
{"connection_id": "88888888-8888-8888-8888-88888888888", "items_by_container_name": [{"container_name": "Another Container Name"}], "items_by_container_url": [{"container_url": "https://example.com/another/container"}]}
{"connection_id": "99999999-9999-9999-9999-9999-9999-999999999999"}
</pre>';
$string['download_manifest'] = 'Unduh manifes';
$string['enable_code_interpreter'] = 'Aktifkan <a href="https://learn.microsoft.com/en-us/microsoft-365-copilot/extensibility/code-interpreter" target="_blank">kemampuan penerjemah kode</a>';
$string['enable_copilot_connectors'] = 'Aktifkan <a href="https://learn.microsoft.com/en-us/microsoft-365-copilot/extensibility/knowledge-sources#copilot-connectors" target="_blank">kemampuan konektor copilot</a>';
$string['enable_image_generator'] = 'Aktifkan <a href="https://learn.microsoft.com/en-us/microsoft-365-copilot/extensibility/image-generator" target=_blank">kemampuan penghasil gambar</a>';
$string['enable_sharepoint_onedrive'] = 'Aktifkan <a href="https://learn.microsoft.com/en-us/microsoft-365-copilot/extensibility/knowledge-sources#sharepoint-and-onedrive" target="_blank">kemampuan SharePoint dan OneDrive</a>';
$string['enable_sharepoint_onedrive_help'] = 'Akses ke data SharePoint dan OneDrive dapat dibatasi secara opsional berdasarkan ID dan/atau URL SharePoint menggunakan dua pengaturan berikut. Jika kedua pengaturan dihilangkan, semua sumber OneDrive dan SharePoint di organisasi akan tersedia untuk agen deklaratif.';
$string['enable_web_search'] = 'Aktifkan <a href="https://learn.microsoft.com/en-us/microsoft-365-copilot/extensibility/knowledge-sources#web-and-scoped-web-search" target="_blank">kemampuan pencarian web dan web terbatas</a>';
$string['error_creating_manifest'] = 'Terjadi galat saat membuat manifes';
$string['error_decreased_app_version'] = 'Versi hanya dapat ditingkatkan.';
$string['error_instructions_too_long'] = 'Instruksi agen, termasuk instruksi untuk semua fungsi API, melebihi panjang maksimum 8.000 karakter. Harap persingkat instruksi.';
$string['error_invalid_accent_color'] = 'Warna aksen tidak valid';
$string['error_invalid_app_version'] = 'Versi aplikasi tidak valid. Versi harus dalam format major.minor.patch (misalnya 1.0.0).';
$string['error_invalid_color_icon_size'] = 'Ukuran ikon warna tidak valid. Ikon warna harus berukuran 192 piksel X 192 piksel.';
$string['error_invalid_copilot_connector_id_property'] = 'Baris {$a->line}: Properti ID konektor Copilot tidak valid {$a->name}.';
$string['error_invalid_copilot_connector_id_value'] = 'Baris {$a->line}: Nilai ID konektor Copilot tidak valid untuk kolom {$a->name}.';
$string['error_invalid_json_format'] = 'Baris {$a->line}: Nilai JSON tidak valid.';
$string['error_invalid_outline_icon_size'] = 'Ukuran ikon garis luar tidak valid. Ikon garis luar harus berukuran 32 piksel X 32 piksel.';
$string['error_invalid_role'] = 'Peran tidak valid';
$string['error_invalid_scoped_web_search_site'] = 'URL situs pencarian web yang cakupannya tidak valid.';
$string['error_invalid_sharepoint_id_property'] = 'Baris {$a->line}: Properti ID SharePoint {$a->name} tidak valid.';
$string['error_invalid_sharepoint_id_value'] = 'Baris {$a->line}: Nilai ID SharePoint tidak valid untuk kolom {$a->name}.';
$string['error_invalid_sharepoint_item_url'] = 'Baris {$a->line}: URL tidak valid.';
$string['error_not_sharepoint_onedrive_url'] = 'Baris {$a->line}: URL bukan URL SharePoint atau OneDrive yang valid.';
$string['error_scoped_web_search_site_path_segments'] = 'URL situs pencarian web dengan cakupan tidak valid. URL TIDAK BOLEH berisi lebih dari dua segmen jalur.';
$string['error_scoped_web_search_site_query_params'] = 'URL situs pencarian web dengan cakupan tidak valid. URL TIDAK BOLEH berisi parameter kueri apa pun.';
$string['error_too_many_scoped_web_search_sites'] = 'Terlalu banyak situs pencarian web yang dicakup. Harap berikan hingga 4 URL situs, satu per baris.';
$string['outline_icon'] = 'Ikon garis besar agen';
$string['outline_icon_help'] = 'Ikon garis luar berukuran 32px X 32px dalam format .png. Ini adalah ikon yang ditampilkan kepada pengguna saat mereka mengakses agen dari Microsoft 365 Copilot.';
$string['paginationlimit'] = 'Jumlah rekaman yang akan dikembalikan per permintaan';
$string['paginationlimit_desc'] = 'Jumlah rekaman layanan web yang akan dikembalikan per permintaan.';
$string['pluginname'] = 'Microsoft 365 Copilot';
$string['privacy:metadata'] = 'Pengaya ini tidak menyimpan informasi pribadi.';
$string['scoped_web_search_sites'] = 'Situs pencarian web bercakupan';
$string['scoped_web_search_sites_help'] = 'Opsional.<br/>
Berikan hingga 4 URL situs, satu per baris, untuk membatasi kemampuan pencarian web hanya pada situs ini.<br/>
Jika tidak diberikan, kemampuan pencarian web akan menggunakan data web apa pun.<br/>
Batasan berikut berlaku untuk URL yang diberikan:<ul>
<li>URL TIDAK BOLEH berisi lebih dari dua segmen jalur, meskipun hasil pencarian menyertakan data dari segmen jalur tambahan.</li>
<li>URL TIDAK BOLEH berisi parameter kueri apa pun.</li>
</ul>';
$string['settings_basic_settings'] = 'Pengaturan dasar';
$string['settings_capabilities_and_knowledge_sources'] = 'Kemampuan dan sumber pengetahuan';
$string['settings_capabilities_and_knowledge_sources_desc'] = '<ul>
<li>Beberapa kapabilitas dan sumber pengetahuan memerlukan lisensi M365 Copilot atau penggunaan terukur.</li>
<li>Untuk informasi selengkapnya, silakan periksa <a href="https://learn.microsoft.com/en-us/microsoft-365-copilot/extensibility/knowledge-sources" target="_blank">Menambahkan sumber pengetahuan ke agen deklaratif Anda | Microsoft Learn</a></li>
</ul>';
$string['settings_check_settings'] = 'Periksa pengaturan yang diperlukan';
$string['settings_check_settings_checking'] = 'Memeriksa...';
$string['settings_check_settings_desc'] = 'Ini akan memastikan bahwa:
<ul>
<li>Layanan Web diaktifkan.</li>
<li><a href="https://moodle.org/plugins/webservice_restful" target="_blank">Pengaya protokol RESTful</a> terinstal.</li>
<li>Pengaya protokol RESTful diaktifkan.</li>
<li>Pengaya protokol RESTful dikonfigurasi dengan benar.</li>
<li>Layanan Web Microsoft 365 Copilot diaktifkan.</li>
<li>Peran pengguna yang diautentikasi memiliki kemampuan untuk membuat token layanan web.</li>
<li>Peran pengguna yang diautentikasi memiliki kemampuan untuk menggunakan protokol RESTful.</li>
<li>Setidaknya ada satu <a href="{$a}" target="_blank">klien OAuth2</a> yang dikonfigurasi.</li>
</ul>';
$string['settings_configure_student_agent'] = 'Konfigurasikan aplikasi agen siswa';
$string['settings_configure_teacher_agent'] = 'Konfigurasikan aplikasi agen guru';
$string['settings_feature_description'] = 'Pengaya ini memungkinkan Moodle terintegrasi dengan Microsoft 365 Copilot dengan menyediakan agen deklaratif bagi guru dan siswa.<br/>
Integrasi ini memungkinkan pengguna untuk mengakses dan berinteraksi dengan data Moodle secara langsung melalui Microsoft 365 Copilot, meningkatkan produktivitas dan menyediakan akses cepat ke informasi kursus, tugas, dan sumber daya pendidikan lainnya.';
$string['settings_notice_authenticated_user_already_has_create_token_capability'] = 'Peran pengguna yang diautentikasi sudah memiliki kemampuan untuk membuat token layanan web.';
$string['settings_notice_authenticated_user_already_has_use_restful_capability'] = 'Peran pengguna yang diautentikasi sudah memiliki kemampuan untuk menggunakan protokol RESTful.';
$string['settings_notice_authenticated_user_assigned_create_token_capability'] = 'Peran pengguna yang diautentikasi telah diberi kemampuan untuk membuat token layanan web.';
$string['settings_notice_authenticated_user_assigned_use_restful_capability'] = 'Peran pengguna yang diautentikasi telah diberi kemampuan untuk menggunakan protokol RESTful.';
$string['settings_notice_copilot_webservice_already_enabled'] = 'Layanan Web Microsoft 365 Copilot sudah diaktifkan.';
$string['settings_notice_copilot_webservice_enabled'] = 'Layanan Web Microsoft 365 Copilot telah diaktifkan.';
$string['settings_notice_error_assigning_create_token_capability'] = 'Terjadi galat saat mencoba memberi peran pengguna terautentikasi kemampuan untuk membuat token layanan web.';
$string['settings_notice_error_assigning_use_restful_capability'] = 'Terjadi galat saat mencoba memberi peran pengguna terautentikasi kemampuan untuk menggunakan protokol RESTful.';
$string['settings_notice_error_capability_not_exist'] = 'Kemampuan webservice/restful:use tidak ada.';
$string['settings_notice_error_no_oauth_clients'] = 'Tidak ditemukan klien OAuth. Harap <a href="{$a}" target="_blank">tambahkan Microsoft 365 Copilot sebagai klien OAuth.</a>';
$string['settings_notice_error_restful_webservice_accept_header_support_not_enabled'] = 'Pengaya protokol RESTful belum dikonfigurasi untuk mendukung header Terima. Harap <a href="{$a}" target="_blank">aktifkan dukungan header Terima</a> di pengaturan pengaya protokol RESTful.';
$string['settings_notice_error_restful_webservice_default_accept_header_not_set'] = 'Pengaya protokol RESTful belum dikonfigurasi untuk menggunakan "json" sebagai header Accept bawaan. Harap <a href="{$a}" target="_blank">atur "json" sebagai header Accept bawaan</a> di pengaturan pengaya protokol RESTful.';
$string['settings_notice_error_restful_webservice_not_enabled'] = 'Galat saat mencoba mengaktifkan pengaya protokol RESTful.';
$string['settings_notice_error_restful_webservice_not_installed'] = 'Pengaya protokol RESTful tidak terinstal.';
$string['settings_notice_oauth_clients_exist'] = '<a href="{$a}" target="_blank">Setidaknya ada satu klien OAuth</a>. Pastikan klien tersebut untuk Microsoft 365 Copilot.';
$string['settings_notice_restful_webservice_accept_header_support_already_enabled'] = 'Pengaya protokol RESTful sudah mendukung header Accept.';
$string['settings_notice_restful_webservice_accept_header_support_enabled'] = 'Pengaya protokol RESTful telah dikonfigurasi untuk mendukung header Accept.';
$string['settings_notice_restful_webservice_already_enabled'] = 'Pengaya protokol RESTful sudah diaktifkan.';
$string['settings_notice_restful_webservice_default_accept_header_already_set'] = 'Plugin protokol RESTful sudah menggunakan "json" sebagai header Accept bawaan.';
$string['settings_notice_restful_webservice_default_accept_header_set'] = 'Pengaya protokol RESTful telah dikonfigurasi untuk menggunakan "json" sebagai header Accept bawaan.';
$string['settings_notice_restful_webservice_enabled'] = 'Pengaya protokol RESTful telah diaktifkan.';
$string['settings_notice_web_service_already_enabled'] = 'Layanan Web sudah diaktifkan.';
$string['settings_notice_web_service_enabled'] = 'Layanan Web telah diaktifkan.';
$string['settings_oauth_client_ids'] = 'Klien OAuth Copilot';
$string['settings_oauth_client_ids_desc'] = 'Pilih semua ID klien OAuth untuk Microsoft 365 Copilot sebagaimana dikonfigurasi di halaman <a href="{$a}" target="_blank">pengaturan penyedia OAuth</a>.<br/>
Jika Anda memiliki beberapa klien OAuth, baik untuk penyewa yang sama maupun penyewa yang berbeda, pilih semuanya.';
$string['settings_student_oauth_client_id'] = 'ID klien OAuth Siswa';
$string['settings_student_oauth_client_id_desc'] = 'Pilih ID klien OAuth untuk aplikasi siswa untuk Microsoft 365 Copilot seperti yang dikonfigurasi pada halaman <a href="{$a}" target="_blank">pengaturan penyedia OAuth</a>.';
$string['settings_teacher_oauth_client_id'] = 'ID klien OAuth Guru';
$string['settings_teacher_oauth_client_id_desc'] = 'Pilih ID klien OAuth untuk aplikasi guru untuk Microsoft 365 Copilot seperti yang dikonfigurasi di halaman <a href="{$a}" target="_blank">pengaturan penyedia OAuth</a>.';
$string['sharepoint_items_by_sharepoint_ids'] = 'Item SharePoint berdasarkan ID SharePoint';
$string['sharepoint_items_by_sharepoint_ids_help'] = 'Opsional.<br/>
Pengaturan ini berisi daftar objek yang mengidentifikasi sumber SharePoint atau OneDrive menggunakan ID.<br/>
Setiap item berisi properti berikut:
<ul>
<li><b>site_id</b>: String, opsional. Pengenal GUID unik untuk situs SharePoint atau OneDrive.</li>
<li><b>web_id</b>: String, opsional. Pengenal GUID unik untuk web tertentu dalam situs SharePoint atau OneDrive.</li>
<li><b>list_id</b>: String, opsional. Pengenal GUID unik untuk daftar dalam situs SharePoint atau OneDrive.</li>
<li><b>unique_id</b>: String, opsional. Pengenal GUID unik yang digunakan untuk mewakili entitas atau sumber daya tertentu.</li>
<li><b>search_associated_sites</b>: Boolean, opsional. Menunjukkan apakah akan mengaktifkan pencarian situs terkait. Nilai ini hanya berlaku jika nilai site_id merujuk ke SharePoint HubSite.</li>
<li><b>part_type</b>: String, opsional. Menunjukkan tipe bagian yang dirujuk oleh part_id. Nilai ini hanya berlaku jika nilai part_id ada. Nilai yang mungkin adalah: OneNotePart.</li>
<li><b>part_id</b>: String, opsional. Pengenal GUID unik yang digunakan untuk merepresentasikan bagian dari item SharePoint seperti halaman OneNote.</li>
</ul>
Setiap item harus disediakan dalam format JSON, satu item per baris. Contoh:
<pre>
{"site_id": "00000000-0000-0000-0000-000000000000", "web_id": "00000000-0000-0000-0000-0000-00000000001", "list_id": "00000000-0000-0000-0000-0000-00000000002", "unique_id": "00000000-0000-0000-0000-0000-00000000003"}
{"site_id": "11111111-1111-1111-1111-1111-11111111111"}
{"web_id": "22222222-2222-2222-2222-2222-22222222222", "list_id": "33333333-3333-3333-3333-33333333333"}
{"unique_id": "4444444-4444-4444-4444-4444-44444444444"}
</pre>';
$string['sharepoint_items_by_url'] = 'Item SharePoint berdasarkan URL';
$string['sharepoint_items_by_url_help'] = 'Opsional.<br/>
Pengaturan ini berisi daftar URL absolut ke sumber daya SharePoint atau OneDrive, satu per baris.';
