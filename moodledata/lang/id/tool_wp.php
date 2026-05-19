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
 * Strings for component 'tool_wp', language 'id', version '5.1'.
 *
 * @package     tool_wp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aboutexportfile'] = 'Tentang berkas ini';
$string['activitycompletion'] = 'Penyelesaian aktivitas';
$string['allcohorts'] = 'Semua kohor';
$string['allcohorts_help'] = 'Semua kohor yang dapat dikelola pengguna ini';
$string['alldata'] = 'Semua data';
$string['allsystemcohorts'] = 'Semua kohor sistem';
$string['cantlocatefileindraftarea'] = 'Tidak dapat menemukan berkas di area draf pengguna.';
$string['certificates'] = 'Sertifikat';
$string['certificatetemplates'] = 'Templat Sertifikat';
$string['certificatetemplates_help'] = 'Sertakan templat, halaman, dan elemen sertifikat. Harap dicatat bahwa sertifikat yang diterbitkan tidak disertakan';
$string['certificatetemplatesdetails'] = 'Rincian templat sertifikat';
$string['change'] = 'Ubah';
$string['cleanupexpiredimportsexports'] = 'Bersihkan ekspor dan impor yang kedaluwarsa';
$string['codechanged'] = 'Kode masalah diubah dari \'{$a->from}\' menjadi \'{$a->to}\'';
$string['cohortdetails'] = 'Rincian kohor';
$string['cohortdetails_help'] = 'Rincian kohor untuk setiap instans yang dipilih';
$string['cohortdetailswithmembers'] = 'Rincian kohor termasuk anggota';
$string['cohortdetailswithmembers_help'] = 'Rincian kohor termasuk informasi keanggotaan. Harap dicatat bahwa pengguna tidak disertakan';
$string['cohortmembers'] = 'Anggota kohor';
$string['cohortmembers_help'] = 'Hanya informasi keanggotaan kohor yang akan disertakan, tetapi pengguna sebenarnya tidak akan disertakan';
$string['confighideparentlang'] = 'Sembunyikan paket induk Workplace';
$string['confighideparentlangdesc'] = 'Jika diaktifkan, induk dari paket bahasa Workplace yang terinstal tidak akan ditampilkan di menu bahasa. Misalnya, \'English (en)\' tidak akan ditampilkan jika \'English for Workplace (en_wp)\' terinstal.';
$string['confirmdeleteexport'] = 'Apakah Anda yakin ingin menghapus ekspor ini?';
$string['confirmdeleteimport'] = 'Apakah Anda yakin ingin menghapus impor ini?';
$string['confirmprevbutton'] = 'Tinggalkan situs? Perubahan yang Anda buat mungkin tidak tersimpan.';
$string['confirmprocess'] = 'Dengan mengeklik "Lanjutkan", proses akan segera dimulai. Anda akan menerima pemberitahuan saat proses selesai.';
$string['conflictidnumber'] = 'Tambahkan sufiks numerik ke nomor ID kohor';
$string['conflicts'] = 'Konflik';
$string['conflictshortname'] = 'Tambahkan sufiks numerik ke nama pendek kursus';
$string['content'] = 'Konten';
$string['copiedtoclipboard'] = 'Teks disalin ke papan klip';
$string['copytoclipboard'] = 'Salin ke papan klip';
$string['coursecontentbackup'] = 'Izinkan pencadangan konten kursus';
$string['coursecontentbackupdesc'] = 'Pengaturan ini mengontrol apakah pengguna yang dapat mencadangkan kursus diizinkan untuk menyertakan konten kursus sebagai bagian dari ekspor. Jika tidak ditetapkan, hanya pengguna yang dapat mengedit konfigurasi situs yang dapat mengekspor konten kursus sebagai bagian dari migrasi. Membiarkan pengaturan ini dinonaktifkan akan membantu mengurangi ukuran file yang diekspor.';
$string['coursereset'] = 'Pengaturan ulang kursus untuk pengguna individu';
$string['coursesadmintab'] = 'Belajar';
$string['createdby'] = 'Dibuat oleh';
$string['csvcolumn'] = 'Kolom CSV';
$string['csvdefaultvalue'] = 'Nilai bawaan';
$string['csvfieldsmapping'] = 'Pemetaan kolom';
$string['csvmappingnotspecified'] = 'Tidak ditentukan';
$string['custompages'] = 'Halaman kustom';
$string['deletegradeshistory'] = 'Hapus riwayat nilai selama pengaturan ulang kursus';
$string['deletegradeshistory_desc'] = 'Disarankan untuk menghapus riwayat nilai selama pengaturan ulang kursus terutama saat pengaturan "Pulihkan nilai bawaan" aktif. Jika riwayat nilai tidak dihapus selama pengaturan ulang kursus, proses pemulihan nilai kursus saat pendaftaran ulang akan memulihkan nilai, namun semua informasi penyelesaian aktivitas tidak akan ada lagi.';
$string['descriptionformat'] = 'Format deskripsi';
$string['descriptionformatdefault'] = 'Format deskripsi bawaan';
$string['doexport'] = 'Ekspor';
$string['doimport'] = 'Impor';
$string['doyouagreelicense'] = 'Sudahkah Anda membaca ketentuan ini dan menandatangani Lisensi Moodle Workplace™?';
$string['entitiescountpostfix'] = '({$a})';
$string['entitycertificateissues'] = 'Penerbitan sertifikat';
$string['entitycertificateissueuser'] = 'Penerbitan sertifikat: {$a}';
$string['entitycoursereset'] = 'Data pengaturan ulang kursus';
$string['entityidentifier'] = '{$a->name} ({$a->idnumber})';
$string['errorcantdeleteexport'] = 'Tidak dapat menghapus ekspor';
$string['errorcantdeleteimport'] = 'Tidak dapat menghapus impor';
$string['errorcohortsameidnumber'] = 'Kelompok dengan nomor ID yang sama sudah ada';
$string['errorcouldnotallocatecohort'] = 'Tidak dapat mengalokasikan pengguna \'{$a->originaluserfullname}\' ke kohor \'{$a->name}\'';
$string['errorcouldnotimportissue'] = 'Tidak dapat mengimpor sertifikat yang diterbitkan untuk \'{$a}\'';
$string['errorcoursesdonotexist'] = 'Beberapa kursus tidak ada';
$string['errorcoursessameshortname'] = 'Kursus dengan nama pendek yang sama sudah ada';
$string['errorcustomfielddoesnotexist'] = 'Kolom kustom tidak ada, tidak dapat mengimpor data \'{$a}\'';
$string['errorcustomfieldnotfound'] = 'Instans kolom kustom tidak ditemukan';
$string['errorcustomfieldnotfounddetail'] = 'Kolom khusus \'{$a}\' tidak ditemukan';
$string['errornegativenumber'] = 'Anda harus memasukkan angka non-negatif di sini.';
$string['eventcoursemodulereset'] = 'Modul kursus diatur ulang untuk pengguna individu';
$string['eventcoursereset'] = 'Pengaturan ulang kursus untuk pengguna individu';
$string['eventexportcreated'] = 'Ekspor dibuat';
$string['eventexportdeleted'] = 'Ekspor dihapus';
$string['eventexportupdated'] = 'Ekspor diperbarui';
$string['eventimportcreated'] = 'Impor dibuat';
$string['eventimportdeleted'] = 'Impor dihapus';
$string['eventimportupdated'] = 'Impor diperbarui';
$string['export_content'] = 'Rincian templat sertifikat';
$string['export_content_help'] = 'Templat sertifikat, halaman dan elemen.';
$string['export_issued'] = 'Sertifikat yang diterbitkan';
$string['export_issued_help'] = 'Sertifikat yang diterbitkan untuk pengguna. Salinan milik pengguna sendiri tidak akan disertakan.';
$string['exportcoursecategoriescontent'] = 'Rincian kategori kursus';
$string['exportcoursecategoriescontent_help'] = 'Sertakan detail kategori kursus. Penetapan peran dan filter kategori tidak akan disertakan.';
$string['exportcoursecontent'] = 'Struktur kursus';
$string['exportcoursecontent_help'] = 'Ini mencakup semua hal dalam kursus kecuali kontennya.

Berkas yang diekspor akan berisi pengaturan yang sama seperti yang ditetapkan sebagai bawaan di situs ini saat membuat cadangan kursus standar. Tidak ada data pengguna yang akan disertakan.';
$string['exported'] = 'Diekspor';
$string['exporter'] = 'Eksportir';
$string['exportercreatefrom'] = 'Buat ekspor dari';
$string['exportercreatefrom_help'] = 'Opsi ini memungkinkan Anda untuk menentukan apakah Anda ingin mengekspor entitas dari seluruh situs, atau hanya yang terkait dengan penyewa saat ini';
$string['exportercreatefromcurrenttenant'] = 'Penyewa saat ini';
$string['exporterdesc'] = 'Sertifikat dan templat yang diterbitkan';
$string['exporterdescription'] = 'Kursus tanpa data pengguna, menggunakan konfigurasi cadangan kursus bawaan';
$string['exporterdescriptioncategories'] = 'Kategori dan subkategori kursus';
$string['exporterdescriptioncohorts'] = 'Kohor, termasuk anggota kohor tanpa data pengguna';
$string['exporterdescriptionreports'] = 'Laporan kustom, termasuk data audiens dan jadwal';
$string['exporternotavailable'] = 'Eksportir \'{$a}\' tidak tersedia di sini';
$string['exporternotfound'] = 'Tidak dapat menemukan eksportir \'{$a}\'';
$string['exporterrequirestenant'] = 'Eksportir \'{$a}\' memerlukan penyewa';
$string['exportersettingsinvalid'] = 'Pengaturan eksportir tidak dalam format JSON yang valid';
$string['exportersettingsvalidationfailed'] = 'Validasi pengaturan eksportir gagal: {$a}';
$string['exportersunavailable'] = 'Tidak ada eksportir yang tersedia untuk Anda gunakan';
$string['exportformatcsv'] = 'CSV';
$string['exportgeneralsettings'] = 'Pengaturan umum';
$string['exportgeneralsettingsdesc'] = 'Pilih eksportir yang ingin Anda gunakan. Pada langkah berikutnya Anda akan dapat mempersempit pilihan dan menentukan elemen mana yang ingin Anda ekspor.';
$string['exportimport'] = 'Migrasi';
$string['exportimportconflictsuffix'] = 'Tambahkan sufiks numerik ke kolom \'{$a}\'';
$string['exportimportentityunavailable'] = '{$a} (Tidak tersedia)';
$string['exportimporterrorentityexists'] = 'Instans dengan \'{$a}\' yang sama sudah ada';
$string['exportimportfieldchanged'] = 'Mengubah kolom \'{$a->field}\' dari \'{$a->from}\' menjadi \'{$a->to}\'';
$string['exportimportsettings'] = 'Pengaturan migrasi';
$string['exportimportsitecontent'] = 'Konten: kursus, kategori, program dan sertifikasi';
$string['exportimportsitedescription'] = 'Konten situs lengkap termasuk semua penyewa beserta semua entitas yang ada di dalamnya. Pencadangan kursus akan mencakup semua konten dan data pengguna kecuali log';
$string['exportimportsiteerror'] = 'Tidak dapat mengimpor situs';
$string['exportimportsitesame'] = 'Tidak dapat mengimpor ke situs yang sama tempat asal ekspor';
$string['exportimportsitesuccess'] = 'Situs yang diimpor';
$string['exportimportstatuscompleted'] = 'Berhasil';
$string['exportimportstatuscreated'] = 'Belum siap';
$string['exportimportstatuserror'] = 'Galat';
$string['exportimportstatusinprogress'] = 'Dalam kemajuan';
$string['exportimportstatusscheduled'] = 'Terjadwal';
$string['exportimportuserfieldserror'] = 'Tidak dapat mengimpor kolom profil pengguna \'{$a}\'';
$string['exportimportusersall'] = 'Pilih semua pengguna';
$string['exportimportusersdescription'] = 'Pengguna situs dan penyewa';
$string['exportimportuserserror'] = 'Tidak dapat membuat pengguna \'{$a}\'';
$string['exportimportuserslanguseselected'] = 'Gunakan bahasa yang dipilih';
$string['exportimportusersmanual'] = 'Pilih pengguna secara manual...';
$string['exportimportusersmissinglangerror'] = 'Bahasa pengguna tidak ada dalam sistem';
$string['exportimportusersmissinglangerrorlog'] = 'Bahasa pengguna \'{$a->lang}\' tidak ada dalam sistem';
$string['exportimportusersmnetconflict'] = 'Nilai host MNet berbeda';
$string['exportimportusersmnetmatchlocal'] = 'Perbarui nilai agar sesuai dengan situs';
$string['exportimportusersmnetuseexisting'] = 'Impor dengan nilai yang ada';
$string['exportimportuserspicture'] = 'Gambar pengguna';
$string['exportimportusersprofile'] = 'Profil pengguna';
$string['exportimportuserssuccess'] = 'Pengguna yang dibuat \'{$a}\'';
$string['exportimportuserssuspended'] = 'Sertakan pengguna yang ditangguhkan';
$string['exportimportuserstenant'] = 'Pilih semua pengguna dari \'{$a}\'';
$string['exportnotfound'] = 'Ekspor tidak ditemukan';
$string['exportnotfoundornotready'] = 'Ekspor tidak ditemukan atau belum siap untuk diimpor';
$string['exportnotready'] = 'Ekspor belum siap untuk diimpor';
$string['exportoptions'] = 'Opsi';
$string['exportoptionsdesc'] = 'Tentukan elemen yang ingin Anda ekspor dengan memilihnya.';
$string['exportreview'] = 'Tinjau';
$string['exportreviewdesc'] = 'Periksa apakah semuanya benar sebelum mengekspor berkas.';
$string['exports'] = 'Ekspor';
$string['exportselectallreports'] = 'Ekspor semua laporan kustom';
$string['exportselectlimitreports'] = 'Ekspor laporan kustom yang spesifik...';
$string['exportstatus'] = 'Status';
$string['filecontent'] = 'Konten berkas';
$string['filterworkplacepluginsonly'] = 'Tampilkan hanya pengaya Workplace';
$string['grade'] = 'Nilai';
$string['idnumberchanged'] = 'Nomor ID diubah dari \'{$a->from}\' menjadi \'{$a->to}\'';
$string['import_content'] = 'Rincian templat sertifikat';
$string['import_content_help'] = 'Templat sertifikat, halaman dan elemen.';
$string['import_issued'] = 'Sertifikat yang diterbitkan';
$string['import_issued_help'] = 'Masalah sertifikat ini kepada pengguna';
$string['importallselectedcategory'] = 'Impor semua dalam kategori yang dipilih';
$string['importallsystemcontext'] = 'Impor semua dalam konteks sistem';
$string['importaudiencelogerror'] = 'Tidak dapat mengimpor rekaman audiens';
$string['importaudiencelogsuccess'] = 'Rekaman audiens diimpor';
$string['importchoosetenant'] = 'Pilih penyewa';
$string['importconflictcreatecourse'] = 'Buat kursus kosong';
$string['importconflictcreatecourseincategory'] = 'Buat kursus kosong dalam kategori \'{$a}\'';
$string['importconflictincategory'] = 'dalam kategori';
$string['importconflictinstances'] = 'Instans ({$a}):';
$string['importconflicts'] = 'Konflik';
$string['importconflictsdesc'] = 'Selesaikan konflik, jika diperlukan.';
$string['importconflictskip'] = 'Jangan impor';
$string['importcoursecontent'] = 'Pencadangan kursus tidak termasuk data pengguna';
$string['importcoursecontent_help'] = 'Impor cadangan kursus untuk setiap contoh yang dipilih';
$string['importdestination'] = 'Tujuan';
$string['imported'] = 'Diimpor';
$string['importeitherexportidorfile'] = 'Baik ID ekspor atau berkas perlu ditentukan, tetapi tidak keduanya.';
$string['importer'] = 'Importir';
$string['importernotfound'] = 'Importir {$a} tidak ditemukan atau tidak tersedia';
$string['importerrequired'] = 'Lebih dari satu importir tersedia, importir harus ditentukan';
$string['importerrequirestenant'] = 'Importir \'{$a}\' memerlukan penyewa';
$string['importersettingsinvalid'] = 'Pengaturan importir tidak dalam format JSON yang valid';
$string['importersettingsvalidationfailed'] = 'Validasi pengaturan importir gagal: {$a}';
$string['importformat'] = 'Format berkas';
$string['importformatauto'] = 'Deteksi otomatis';
$string['importformatcsv'] = 'CSV';
$string['importformatworkplace'] = 'Format tempat kerja';
$string['importfromfile'] = 'Impor baru dari berkas ini';
$string['importgeneralsettings'] = 'Pengaturan umum';
$string['importgeneralsettingsalt'] = 'Pilih tujuan untuk data yang diimpor. Anda akan dapat menentukan elemen mana yang ingin diimpor pada langkah berikutnya.';
$string['importhasconflits'] = 'Impor memiliki konflik: {$a}';
$string['importincrementidnumber'] = 'Tambahkan sufiks numerik ke nomor ID';
$string['importintothecurrenttenant'] = 'Impor ke penyewa saat ini';
$string['importlogerror'] = 'Tidak dapat mengimpor templat sertifikat \'{$a->name}\'';
$string['importlogerrorinvalidaudience'] = 'Audiens tidak ada atau tidak valid';
$string['importlogerrorinvalidreportsource'] = 'Sumber laporan tidak ada atau tidak valid';
$string['importlogerrorinvalidreporttype'] = 'Tipe laporan tidak valid';
$string['importlogerrorinvalidscheduleformat'] = 'Format jadwal tidak ada atau tidak valid';
$string['importlogexception'] = 'Pengecualian: {$a}';
$string['importlogfailed'] = 'Tidak dapat mengimpor kursus \'{$a->fullname}\'';
$string['importlogfailedcohort'] = 'Tidak dapat mengimpor kohor \'{$a->name}\'';
$string['importlogfailedcoursecategory'] = 'Tidak dapat mengimpor kategori kursus \'{$a->name}\'';
$string['importlogsuccess'] = 'Membuat kursus baru \'<a href="{$a->url}">{$a->fullname}</a>\'';
$string['importlogsuccesscertificates'] = 'Membuat templat sertifikat baru \'<a href="{$a->url}">{$a->name}</a>\' dengan {$a->pagescount} halaman dan {$a->elementscount} elemen';
$string['importlogsuccesscohort'] = 'Membuat kohor baru \'<a href="{$a->url}">{$a->name}</a>\'';
$string['importlogsuccesscohortallocations'] = 'Pengguna yang dialokasikan \'{$a->userfullname}\' ke dalam kohor \'{$a->name}\'';
$string['importlogsuccesscoursecategory'] = 'Membuat kategori kursus baru \'<a href="{$a->url}">{$a->name}</a>\'';
$string['importlogsuccessissue'] = 'Membuat masalah sertifikat baru pada \'{$a->template}\' untuk pengguna: \'{$a->originaluserfullname}\'';
$string['importnotenant'] = 'Tersedia untuk semua penyewa';
$string['importnotfound'] = 'Impor tidak ditemukan';
$string['importoptions'] = 'Opsi';
$string['importoptionsdesc'] = 'Tentukan elemen yang ingin Anda impor dengan memilihnya.';
$string['importproblem'] = 'Masalah: {$a}';
$string['importproblemaffects'] = 'Pengaruh:';
$string['importreportlogerror'] = 'Tidak dapat mengimpor laporan \'{$a}\'';
$string['importreportlogsuccess'] = 'Membuat laporan baru \'<a href="{$a->url}">{$a->name}</a>\' dengan kolom {$a->columncount}, kondisi {$a->conditioncount}, dan filter {$a->filtercount}';
$string['importreview'] = 'Tinjau';
$string['importreviewdesc'] = 'Periksa apakah semuanya sudah benar sebelum mengimpor berkas.';
$string['imports'] = 'Impor';
$string['importschedulelogerror'] = 'Tidak dapat mengimpor rekaman jadwal';
$string['importschedulelogsuccess'] = 'Jadwalkan rekaman yang diimpor';
$string['importselectallreports'] = 'Impor semua laporan khusus';
$string['importselectlimitreports'] = 'Impor laporan kustom tertentu...';
$string['importselectsource'] = 'Pilih sumber';
$string['importselectsourcedesc'] = 'Unggah berkas CSV atau Moodle Workplace yang valid. Pada langkah berikutnya, Anda akan dapat menentukan elemen mana yang ingin diimpor dari berkas tersebut.';
$string['importselecttenant'] = 'Pilih penyewa...';
$string['importsetidnumbertoempty'] = 'Tetapkan nomor ID ke string kosong';
$string['importsolution'] = 'Solusi:';
$string['importstatus'] = 'Status';
$string['importunknownerror'] = 'Galat tidak diketahui {$a}';
$string['importunknownformat'] = 'Tidak dapat mendeteksi format berkas dari ekstensi, silakan pilih format';
$string['includecoursecontent'] = 'Sertakan konten kursus';
$string['includecoursecontent_help'] = 'Sertakan semua konten kursus seperti aktivitas, filter, acara kalender, dll.

Berkas yang diekspor akan berisi pengaturan yang sama seperti yang ditetapkan sebagai bawaan di situs ini saat membuat cadangan kursus standar. Tidak ada data pengguna yang akan disertakan.';
$string['instances'] = 'Instans';
$string['instancescount'] = 'Instans ({$a}):';
$string['invaliddevice'] = 'Anda mencoba mengakses situs Moodle Workplace menggunakan aplikasi Moodle. Silakan unduh aplikasi Moodle Workplace untuk melanjutkan';
$string['learningcatalogue'] = 'Katalog pembelajaran';
$string['loading'] = 'Memuat...';
$string['log'] = 'Log';
$string['managecoursecategories'] = 'Kelola kategori kursus';
$string['mappingerrorbadgeheader'] = 'Beberapa lencana tidak ada';
$string['mappingerrorbadgelog'] = 'Lencana {$a} tidak ditemukan';
$string['mappingerrorcertificateheader'] = 'Beberapa templat sertifikat tidak ada';
$string['mappingerrorcertificatelog'] = 'Sertifikat {$a} tidak ditemukan';
$string['mappingerrorcohortheader'] = 'Beberapa kohor tidak ada';
$string['mappingerrorcohortlog'] = 'Kohor {$a} tidak ditemukan';
$string['mappingerrorcompetencyheader'] = 'Beberapa kompetensi tidak ada';
$string['mappingerrorcompetencylog'] = 'Kompetensi {$a} tidak ditemukan';
$string['mappingerrorcontextnotfound'] = 'Konteks tidak ditemukan';
$string['mappingerrorcoursenotfound'] = 'Kursus {$a} tidak ditemukan';
$string['mappingerrorlpheader'] = 'Beberapa templat rencana pembelajaran tidak ada';
$string['mappingerrorlplog'] = 'Template rencana pembelajaran {$a} tidak ditemukan';
$string['mappingerroruserfieldheader'] = 'Beberapa kolom profil pengguna tidak ada';
$string['mappingerroruserfieldlog'] = 'Kolom profil pengguna {$a} tidak ditemukan';
$string['mappingerrorusernotfound'] = 'Tidak dapat menemukan pengguna {$a} di penyewa saat ini';
$string['mappingnoticecoursecreated'] = 'Kursus kosong <a href="{$a->courseurl}">{$a->fullname}</a> telah dibuat';
$string['mappingnoticecourseidnumber'] = 'Kursus dengan nama pendek \'{$a->shortname}\' tidak ditemukan. <a href="{$a->courseurl}">Kursus lain</a> dengan nomor ID \'{$a->idnumber}\' ditemukan, tetapi kursus ini memiliki nama pendek yang berbeda';
$string['mappingnoticeuseremail'] = 'Pengguna dengan nama pengguna \'{$a->username}\' tidak ditemukan. <a href="{$a->profileurl}">Pengguna lain</a> dengan surel {$a->email} ditemukan, tetapi pengguna ini memiliki nama pengguna yang berbeda';
$string['messagefullexportcomplete'] = 'Ekspor Anda selesai pada {$a->date}

Status: {$a->status}

Klik <a href="{$a->url}">di sini</a> untuk melihat rinciannya';
$string['messagefullimportcomplete'] = 'Impor Anda selesai pada {$a->date}

Status: {$a->status}

Klik <a href="{$a->url}">di sini</a> untuk melihat rinciannya';
$string['messageprovider:exportcomplete'] = 'Ekspor selesai';
$string['messageprovider:importcomplete'] = 'Impor selesai';
$string['migrationcannotswitchtenant'] = 'Penyewa dengan ID atau nomor ID {$a} tidak ditemukan atau Anda tidak diizinkan untuk beralih ke sana';
$string['migrationnotenanterror'] = 'Opsi penyewa dan bukan penyewa tidak dapat digunakan bersamaan';
$string['migrationreportaudiences'] = 'Audiens';
$string['migrationreportdefinition'] = 'Definisi laporan';
$string['migrationreportdefinition_help'] = 'Sertakan kolom laporan, kondisi, dan filter';
$string['migrationreportschedules'] = 'Jadwal';
$string['migrationschoosefrom'] = 'Pilih dari';
$string['noavailableimporter'] = 'Kami tidak dapat menemukan importir yang tersedia untuk berkas ini.';
$string['noavailableimporters'] = 'Tidak ada importir yang tersedia';
$string['nocategoriesavailable'] = 'Tidak ada kategori yang tersedia';
$string['noconflictsfound'] = 'Tidak ada konflik yang ditemukan';
$string['nodetails'] = 'Tidak ada rincian yang ditemukan';
$string['nonproductionsite'] = 'Situs non-produksi';
$string['nonproductionsitemessage'] = 'Ini adalah situs non-produksi';
$string['nopermissioncategoryimport'] = 'Anda tidak memiliki izin untuk mengimpor dalam kategori ini.';
$string['nopermissioncategoryrestore'] = 'Anda tidak memiliki izin untuk memulihkan dalam kategori ini.';
$string['nopermissionform'] = 'Anda tidak memiliki izin untuk mengakses formulir ini.';
$string['nopermissiontab'] = 'Anda tidak memiliki izin untuk mengakses halaman ini.';
$string['nothing'] = 'Tidak ada';
$string['nothingtoexport'] = 'Tidak ada yang ekspor';
$string['nothingtoimport'] = 'Tidak ada yang impor';
$string['notpossible'] = 'Tidak memungkinkan';
$string['numhour'] = '{$a} jam';
$string['outcomes'] = 'Hasil';
$string['performanceinfo'] = 'Informasi kinerja tab (BD membaca/menulis: {$a->reads}/{$a->writes})';
$string['pluginname'] = 'Tempat Kerja';
$string['pluginsourceworkplace'] = 'Tempat Kerja';
$string['pluginsoverviewworkplace'] = 'Pengaya Tempat Kerja';
$string['privacy:metadata:certificationid'] = 'ID sertifikasi tempat kursus ini berasal.';
$string['privacy:metadata:courseid'] = 'Kursus yang telah diatur ulang.';
$string['privacy:metadata:exportcreatedby'] = 'ID pengguna yang melakukan ekspor.';
$string['privacy:metadata:exportstatus'] = 'Status ekspor.';
$string['privacy:metadata:grade'] = 'Nilai yang dimiliki pengguna pada kursus sebelum diatur ulang.';
$string['privacy:metadata:importcreatedby'] = 'ID pengguna yang melakukan impor.';
$string['privacy:metadata:importstatus'] = 'Status impor.';
$string['privacy:metadata:programid'] = 'ID program tempat kursus ini berasal.';
$string['privacy:metadata:reason'] = 'Alasan mengapa kursus ini diatur ulang.';
$string['privacy:metadata:resetinfo'] = 'Informasi tentang apa yang telah diatur ulang dalam kursus.';
$string['privacy:metadata:resetstatus'] = 'Status pengaturan ulang.';
$string['privacy:metadata:tenantid'] = 'ID penyewa terkait.';
$string['privacy:metadata:timecreated'] = 'Waktu pembuatan.';
$string['privacy:metadata:timemodified'] = 'Waktu dimodifikasi.';
$string['privacy:metadata:timerequested'] = 'Waktu diminta untuk diatur ulang.';
$string['privacy:metadata:tool_wp_course_reset'] = 'Atur ulang kursus.';
$string['privacy:metadata:tool_wp_export'] = 'Informasi tentang ekspor yang dilakukan di situs.';
$string['privacy:metadata:tool_wp_import'] = 'Informasi tentang impor yang dilakukan di situs.';
$string['privacy:metadata:userid'] = 'Pengguna yang mengatur ulang kursus.';
$string['privacy:metadata:usermodified'] = 'Pengguna telah memodifikasi.';
$string['privacy:metadata:userrequested'] = 'User who requested the course reset.';
$string['privacy:metadata:wascompleted'] = 'Jika kursus telah diselesaikan oleh pengguna sebelum pengaturan ulang.';
$string['problem'] = 'Masalah';
$string['proceed'] = 'Lanjutkan';
$string['processing'] = 'Memproses';
$string['productionsite'] = 'Situs produksi';
$string['productionstate'] = 'Status produksi';
$string['productionstatedesc'] = 'Situs non-produksi akan menampilkan pernyataan penafian di sudut kanan bawah layar.';
$string['quotedentity'] = '\'{$a}\'';
$string['reason'] = 'Alasan untuk mengatur ulang';
$string['recovercoursegrades'] = 'Saat mengaktifkan pengaturan ini pastikan untuk juga mengaktifkan pengaturan \'Hapus riwayat nilai selama pengaturan ulang kursus\'.';
$string['refresh'] = 'Segarkan';
$string['reg_moodleproduct'] = 'Produk Moodle ({$a})';
$string['reg_wpactiveusersyear'] = 'Jumlah pengguna unik yang masuk dalam 12 bulan terakhir ({$a})';
$string['reg_wpcertificates'] = 'Jumlah sertifikat ({$a})';
$string['reg_wpcertificatesissues'] = 'Jumlah sertifikat yang diterbitkan ({$a})';
$string['reg_wpdefaulthomepagetype'] = 'Tipe beranda bawaan ({$a})';
$string['reg_wpplugins'] = 'Daftar pengaya yang terpasang dan diaktifkan, jumlah instance ({$a})';
$string['reg_wpproductionstate'] = 'Status produksi ({$a})';
$string['reg_wprelease'] = 'Nomor rilis Moodle Workplace ({$a})';
$string['reg_wpreports'] = 'Jumlah laporan kustom ({$a})';
$string['registrationwarning'] = 'Situs Anda belum terdaftar di Moodle. Anda harus segera memperbaikinya.

Jika Anda mengalami masalah saat mendaftarkan situs, Anda dapat menghubungi <a href="{$a}">perwakilan Mitra Moodle</a> dan mereka akan mendaftarkan situs untuk Anda.

Moodle berhak mencabut akses Anda ke Moodle Workplace™ yang dapat menyebabkan ketidaknyamanan bagi Anda.';
$string['registrationwarningcontactadmin'] = 'Situs ini tidak terdaftar. Untuk mematuhi lisensi perangkat lunak dan terus mengakses situs Moodle Workplace™ ini, Anda harus memastikan bahwa administrator Anda mendaftarkan situs tersebut.';
$string['resetinfo'] = 'Atur ulang informasi';
$string['resetstatus'] = 'Atur ulang status';
$string['safenavigation'] = 'Aman untuk melanjutkan penelusuran di situs ini.';
$string['selectallcategoriesinthisfile'] = 'Pilih semua kategori kursus dalam berkas ini';
$string['selectallcohortsinthisfile'] = 'Pilih semua kohor dalam berkas ini';
$string['selectallcoursesinthisfile'] = 'Pilih semua kursus dalam berkas ini';
$string['selectalltemplates'] = 'Pilih semua templat sertifikat';
$string['selectalltemplatesinfile'] = 'Pilih semua templat sertifikat dalam berkas ini';
$string['selectatleastonecategory'] = 'Pilih setidaknya satu kategori';
$string['selectatleastonecohort'] = 'Pilih setidaknya satu kohor';
$string['selectatleastonecourse'] = 'Pilih setidaknya satu kursus';
$string['selectatleastonetemplate'] = 'Pilih setidaknya satu templat';
$string['selectcoursecategory'] = 'Pilih kategori kursus';
$string['selectcoursesmanually'] = 'Pilih kursus secara manual...';
$string['selectedcoursecategory'] = 'Kategori kursus yang dipilih: {$a}';
$string['selectexporter'] = 'Pilih eksportir';
$string['selectimporter'] = 'Pilih importir';
$string['selectmanually'] = 'Pilih secara manual...';
$string['selectmanuallycategories'] = 'Pilih kategori dan subkategori secara manual';
$string['selectmanuallycertificates'] = 'Pilih templat sertifikat secara manual';
$string['shortnamechanged'] = 'Nama pendek diubah dari \'{$a->from}\' menjadi \'{$a->to}\'';
$string['showless'] = 'Tampilkan lebih sedikit';
$string['showxmore'] = 'Tampilkan {$a} lebih banyak...';
$string['solution'] = 'Solusi';
$string['stepx'] = 'Langkah {$a}.';
$string['tenant'] = 'Penyewa';
$string['tenantstyles'] = 'Gaya penyewa';
$string['thissite'] = '(Situs ini)';
$string['timerequested'] = 'Waktu yang diminta';
$string['timereseted'] = 'Waktu yang diatur ulang';
$string['uploadimportfile'] = 'Unggah berkas';
$string['userrequested'] = 'Pengguna yang meminta';
$string['viewexport'] = 'Lihat ekspor';
$string['viewimport'] = 'Lihat impor';
$string['viewlicense'] = 'Lihat lisensi';
$string['wascompleted'] = 'Telah selesai';
$string['willbeimported'] = 'Akan diimpor';
$string['workplace'] = 'Moodle Workplace';
$string['workplacelicensegeneric'] = 'Moodle Workplace - Hak Cipta © Moodle Pty Ltd
Moodle - Hak Cipta © 1999 dan seterusnya, Martin Dougiamas

Moodle Workplace™ adalah sistem manajemen pembelajaran dan pelatihan perusahaan yang disesuaikan dari Moodle yang hanya tersedia melalui Moodle Pty Ltd atau perusahaan grup Moodle ("Moodle") atau Mitra Premium Bersertifikat Moodle. Kode Moodle Workplace™ adalah kumpulan skrip perangkat lunak (pengaya dan modifikasi, dan setiap turunannya) yang secara eksklusif dimiliki dan dilisensikan oleh Moodle berdasarkan ketentuan Perjanjian Moodle Workplace dan/atau Ketentuan Pelanggan yang terpisah.
Moodle Workplace tersedia dengan perangkat lunak sumber terbuka Moodle ("Moodle LMS") yang dapat diunduh secara gratis di "download.moodle.org" dan yang disediakan oleh Moodle berdasarkan satu Lisensi Publik Umum GNU versi 3.0, tertanggal 29 Juni 2007 ("GPL"). Perangkat lunak Moodle LMS didistribusikan dengan harapan akan bermanfaat, tetapi tanpa jaminan apa pun; termasuk namun tidak terbatas pada jaminan tersirat tentang kelayakan untuk diperjualbelikan atau kesesuaian untuk tujuan tertentu.
Jika Anda mengakses Moodle Workplace™ tanpa izin tertulis, itu adalah akses yang tidak sah dan Anda harus segera menghapusnya dan semua dokumentasi yang menyertainya. Kegagalan untuk melakukannya akan membuat Anda terkena sanksi hukum. Dengan mengakses Moodle Workplace™ sesuai dengan Perjanjian Moodle Workplace dan/atau Ketentuan Pelanggan, Anda setuju bahwa Anda telah menandatangani Perjanjian Moodle Workplace dan/atau Ketentuan Pelanggan dengan Mitra Premium Bersertifikat Moodle atau Moodle yang memastikan (antara lain) bahwa Anda akan:
- hanya mengakses dan berbagi Moodle Workplace™ sesuai dengan ketentuan Perjanjian Moodle Workplace yang berlaku atau Ketentuan Pelanggan yang berlaku termasuk tanpa batasan semua ganti rugi dan janji kerahasiaan yang menguntungkan Moodle di dalamnya;
- memastikan setiap instans produksi Moodle Workplace™ terdaftar secara akurat di hub pendaftaran situs yang disediakan, seperti yang dijelaskan dalam https://docs.moodle.org/en/Site_registration; - mendaftarkan rincian Pelanggan yang akurat di Portal Mitra Moodle termasuk URL dan lokasi hosting dan untuk instans yang Dihosting Pelanggan, memastikan Ketentuan Pelanggan dilaksanakan dengan benar dan sah oleh Pelanggan dan dikembalikan ke Moodle bersama dengan memberikan salinan pertanggungan asuransi tanggung jawab umum komersial Pelanggan;
- memastikan bahwa semua lokasi produksi dimutakhirkan ke versi Kode Moodle Workplace yang dikonfirmasi oleh Moodle sebagaimana didukung saat ini oleh perbaikan bug untuk kerentanan keamanan sebagaimana dinyatakan oleh Moodle secara publik di situs webnya; dan
- berhenti menggunakan Moodle Workplace™ dan segera hapus semua salinan Kode Moodle Workplace™ dari server Anda dan komputer mana pun yang berada di bawah kendali Anda jika Anda bukan lagi Mitra Premium Bersertifikat Moodle atau pelanggan Mitra Premium Bersertifikat Moodle. Anda harus mengonfirmasi hal ini secara tertulis kepada Moodle dalam waktu 7 hari sejak kejadian tersebut.

Situs web Moodle Workplace™ dapat menyertakan piksel pelacakan untuk tujuan statistik dan pemantauan kepatuhan. Harap perhatikan bahwa tidak ada data pribadi yang dikumpulkan atau diproses.

Untuk memahami cakupan lengkap hak dan kewajiban Anda, silakan lihat Perjanjian Tempat Kerja Moodle atau Ketentuan Pelanggan yang telah Anda tandatangani.';
$string['workplacelicenseheader'] = 'Lisensi Moodle Workplace';
$string['workplacelicensenotagreed'] = 'Anda tidak dapat melihat konten ini sampai administrator situs menyetujui lisensi Moodle Workplace.';
$string['wp:manageexportimport'] = 'Kelola ekspor/impor Workplace';
$string['wp:useexportimport'] = 'Gunakan ekspor/impor Workplace';
