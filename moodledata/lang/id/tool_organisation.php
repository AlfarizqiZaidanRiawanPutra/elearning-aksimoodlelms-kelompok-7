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
 * Strings for component 'tool_organisation', language 'id', version '5.1'.
 *
 * @package     tool_organisation
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Tindakan';
$string['addajob'] = 'Tambahkan pekerjaan';
$string['addchilddepartment'] = 'Subdepartemen baru untuk departemen \'{$a}\'';
$string['addchildposition'] = 'Subposisi baru untuk posisi \'{$a}\'';
$string['adddepartment'] = 'Departemen baru untuk kerangka kerja \'{$a}\'';
$string['adddepartmentframework'] = 'Kerangka kerja departemen baru';
$string['addjob'] = 'Pekerjaan baru';
$string['addjobforuser'] = 'Pekerjaan baru untuk \'{$a}\'';
$string['addjobselectedusers'] = 'Pekerjaan baru untuk pengguna terpilih';
$string['addmanagedusers'] = 'Tambahkan pengguna yang akan melapor ke orang ini';
$string['addmanagerusers'] = 'Tambahkan pengguna yang akan mengelola orang ini';
$string['addmanuallyassignedmanager'] = 'Manajer baru yang ditugaskan secara manual';
$string['addnewdepartment'] = 'Departemen baru';
$string['addnewposition'] = 'Posisi baru';
$string['addposition'] = 'Posisi baru untuk kerangka kerja \'{$a}\'';
$string['addpositionframework'] = 'Kerangka kerja posis baru';
$string['allframeworks'] = 'Kerangka kerja departemen dan posisi';
$string['alljobsreport'] = 'Semua laporan pekerjaan';
$string['anydepartment'] = 'Apa pun';
$string['anymanager'] = 'Manajer atau pimpinan departemen';
$string['anyposition'] = 'Apa pun';
$string['assfirstchildof'] = 'Sebagai keturunan pertama dari \'{$a}\'';
$string['assignjob'] = 'Tetapkan pekerjaan';
$string['assignmanager'] = 'Tetapkan manajer';
$string['assignmanagermanually'] = 'Tetapkan manajer secara manual';
$string['assignnewjob'] = 'Tetapkan pekerjaan lainnya untuk pengguna ini';
$string['assignstaff'] = 'Tetapkan staf';
$string['audienceand'] = 'Dan';
$string['audiencecustomise'] = 'Sesuaikan...';
$string['audiencejobdescription'] = 'Pengguna di departemen: {$a->department}<br />
Dengan posisi: {$a->position}';
$string['audiencemanager'] = 'Manajer';
$string['audiencemanagerdescription'] = 'Izin: {$a->permissions}';
$string['audiencemanagertypedescription'] = 'Tipe manajer: {$a->type}';
$string['audienceor'] = 'Atau';
$string['audienceselect'] = 'Hubungan dengan penampil laporan';
$string['audienceselectinitial'] = 'Pilih audiens';
$string['audienceself'] = 'Mereka sendiri';
$string['audienceusersall'] = 'Semua pengguna';
$string['audienceusersdept'] = 'Di departemen yang sama dengan penampil laporan';
$string['audienceusersreporting'] = 'Melaporkan ke penampil laporan';
$string['audienceusersreporting_help'] = 'Sertakan pengguna yang melapor ke penampil laporan (yang seharusnya memiliki posisi manajer sendiri)

Laporan langsung adalah pengguna terkelola dalam posisi yang merupakan turunan langsung dari posisi manajer';
$string['audienceusersreportingdirect'] = 'Hanya laporan langsung';
$string['cachedef_myjob'] = 'Pekerjaan pengguna saat ini dan tim mereka';
$string['conditioncanallocateprograms'] = 'Dapat dialokasikan ke program';
$string['conditioncanreceivenotifications'] = 'Dapat menerima pemberitahuan';
$string['conditionuserdepartment'] = 'Pengguna ada di departemen';
$string['conditionuserdepartmentdescription'] = 'Pengguna yang memiliki pekerjaan di departemen \'{$a->deptname}\'<br />
Sub-departemen: {$a->subdeptsinclude}';
$string['conditionuserdepartmentdescriptionnegated'] = 'Pengguna yang tidak memiliki pekerjaan di departemen \'{$a->deptname}\'<br />
Sub-departemen: {$a->subdeptsinclude}';
$string['conditionuserdepartmentdescriptionwithdate'] = 'Pengguna yang memiliki pekerjaan di departemen \'{$a->deptname}\'<br />
Sub-departemen: {$a->subdeptsinclude}<br />
Pada atau setelah: {$a->conditiondate}';
$string['conditionuserdepartmentsallcriteria'] = 'Pengguna memiliki pekerjaan di semua departemen yang dipilih';
$string['conditionuserdepartmentsalldescription'] = 'Pengguna yang memiliki pekerjaan di semua departemen berikut pada waktu yang sama: \'{$a->deptname}\'<br />
Sub-departemen: {$a->subdeptsinclude}';
$string['conditionuserdepartmentsalldescriptionnegated'] = 'Pengguna yang tidak memiliki pekerjaan di semua departemen berikut pada waktu yang sama: \'{$a->deptname}\'<br />
Sub-departemen: {$a->subdeptsinclude}';
$string['conditionuserdepartmentsalldescriptionwithdate'] = 'Pengguna yang memiliki pekerjaan di semua departemen berikut pada waktu yang sama: \'{$a->deptname}\'<br />
Sub-departemen: {$a->subdeptsinclude}<br />
Pada atau setelah: {$a->conditiondate}';
$string['conditionuserdepartmentsanycriteria'] = 'Pengguna memiliki pekerjaan di salah satu departemen yang dipilih';
$string['conditionuserdepartmentsanycriteria_help'] = 'Ketika pengguna sudah memiliki pekerjaan di satu departemen yang dipilih, mendapatkan pekerjaan baru di departemen kedua tidak akan memicu tindakan lagi';
$string['conditionuserdepartmentsanydescription'] = 'Pengguna yang memiliki pekerjaan di salah satu departemen berikut: \'{$a->deptname}\'<br />
Sub-departemen: {$a->subdeptsinclude}';
$string['conditionuserdepartmentsanydescriptionnegated'] = 'Pengguna yang tidak memiliki pekerjaan di salah satu departemen berikut: \'{$a->deptname}\'<br />
Sub-departemen: {$a->subdeptsinclude}';
$string['conditionuserdepartmentsanydescriptionwithdate'] = 'Pengguna yang memiliki pekerjaan di salah satu departemen berikut: \'{$a->deptname}\'<br />
Sub-departemen: {$a->subdeptsinclude}<br />
Pada atau setelah: {$a->conditiondate}';
$string['conditionuserdepartmentseachcriteria'] = 'Setiap kali pengguna mendapatkan pekerjaan di salah satu departemen yang dipilih';
$string['conditionuserdepartmentseachcriteria_help'] = 'Setara dengan membuat beberapa aturan, satu untuk setiap departemen yang dipilih';
$string['conditionusermanager'] = 'Pengguna manajer';
$string['conditionusermanagerdescription'] = 'Pengguna yang merupakan manajer dengan tipe: {$a->type}';
$string['conditionusernotindepartment'] = 'Pengguna tidak berada di departemen';
$string['conditionuserposition'] = 'Pengguna memiliki posisi';
$string['conditionuserpositiondescription'] = 'Pengguna yang memiliki posisi \'{$a->posname}\'<br />
Sub-posisi: {$a->subposinclude}';
$string['conditionuserpositiondescriptionnegated'] = 'Pengguna yang tidak memiliki posisi \'{$a->posname}\'<br />
Sub-posisi: {$a->subposinclude}';
$string['conditionuserpositiondescriptionwithdate'] = 'Pengguna yang memiliki posisi \'{$a->posname}\'<br />
Sub-posisi: {$a->subposinclude}<be />
Pada atau setelah: {$a->tanggal kondisi}';
$string['conditionuserpositionsallcriteria'] = 'Pengguna memiliki pekerjaan di semua posisi yang dipilih';
$string['conditionuserpositionsalldescription'] = 'Pengguna yang memiliki pekerjaan di semua posisi berikut pada saat yang sama: \'{$a->posname}\'<br />
Sub-posisi: {$a->subposinclude}';
$string['conditionuserpositionsalldescriptionnegated'] = 'Pengguna yang tidak memiliki pekerjaan di semua posisi pada saat yang sama: \'{$a->posname}\'<br />
Sub-posisi: {$a->subposinclude}';
$string['conditionuserpositionsalldescriptionwithdate'] = 'Pengguna yang memiliki pekerjaan di semua posisi berikut pada saat yang sama: \'{$a->posname}\'<br />
Sub-posisi: {$a->subposinclude}<br />
Pada atau setelah: {$a->conditiondate}';
$string['conditionuserpositionsanycriteria'] = 'Pengguna memiliki pekerjaan di salah satu posisi yang dipilih';
$string['conditionuserpositionsanycriteria_help'] = 'Ketika pengguna sudah memiliki pekerjaan di satu posisi yang dipilih, mendapatkan pekerjaan baru di posisi kedua tidak akan memicu tindakan lagi';
$string['conditionuserpositionsanydescription'] = 'Pengguna yang memiliki pekerjaan di salah satu posisi berikut: \'{$a->posname}\'<br />
Sub-posisi: {$a->subposinclude}';
$string['conditionuserpositionsanydescriptionnegated'] = 'Pengguna yang tidak memiliki pekerjaan di salah satu posisi berikut: \'{$a->posname}\'<br />
Sub-posisi: {$a->subposinclude}';
$string['conditionuserpositionsanydescriptionwithdate'] = 'Pengguna yang memiliki pekerjaan di salah satu posisi berikut: \'{$a->posname}\'<br />
Sub-posisi: {$a->subposinclude}<br />
Pada atau setelah: {$a->conditiondate}';
$string['conditionuserpositionseachcriteria'] = 'Setiap kali pengguna mendapatkan pekerjaan di salah satu posisi yang dipilih';
$string['conditionuserpositionseachcriteria_help'] = 'Setara dengan membuat beberapa aturan, satu untuk setiap posisi yang dipilih';
$string['conditionuserwithoutposition'] = 'Pengguna tidak memiliki posisi';
$string['confirmunassignmanagers'] = 'Apakah Anda yakin ingin membatalkan penetapan semua pengelola yang ditetapkan secara manual dari pengguna yang dipilih? Tindakan ini tidak dapat dibatalkan.';
$string['creategenericframework'] = 'Buat kerangka kerja generik';
$string['current'] = 'Saat ini: {$a}';
$string['delete'] = 'Hapus';
$string['deletedepartment'] = 'Hapus departemen \'{$a}\'';
$string['deletedepartmentconfirm'] = 'Apakah Anda yakin ingin menghapus departemen \'{$a}\'?';
$string['deletedepartmentframework'] = 'Hapus kerangka departemen \'{$a}\'';
$string['deletedepartmentframeworkconfirm'] = 'Apakah Anda yakin ingin menghapus kerangka kerja departemen \'{$a}\'?';
$string['deletejob'] = 'Hapus pekerjaan sepenuhnya';
$string['deleteposition'] = 'Hapus posisi \'{$a}\'';
$string['deletepositionconfirm'] = 'Apakah Anda yakin ingin menghapus posisi \'{$a}\'?';
$string['deletepositionframework'] = 'Hapus kerangka kerja posisi \'{$a}\'';
$string['deletepositionframeworkconfirm'] = 'Apakah Anda yakin ingin menghapus kerangka kerja posisi \'{$a}\'?';
$string['department'] = 'Departemen';
$string['department_help'] = 'Pilih departemen';
$string['departmentandpositionrequiredforjobcreate'] = 'Departemen dan posisi perlu dibuat untuk melanjutkan penugasan pekerjaan';
$string['departmentdeleted'] = 'Departemen telah berhasil dihapus';
$string['departmentdescription'] = 'Deskripsi';
$string['departmentframework'] = 'Kerangka kerja departemen';
$string['departmentframeworkidnumber'] = 'Nomor ID kerangka departemen';
$string['departmentframeworkpostfix'] = '{$a} (Kerangka kerja departemen)';
$string['departmentframeworks'] = 'Kerangka kerja departemen';
$string['departmentfrmidnumberconflict'] = 'Nomor ID kerangka kerja departemen sudah ada';
$string['departmenthasjobs'] = 'Departemen tidak dapat dihapus karena ada pekerjaan yang terkait dengannya.';
$string['departmentidentifier'] = 'Pengidentifikasi departemen';
$string['departmentidentifier_help'] = 'Ini adalah kolom yang mengidentifikasi baris dalam CSV, ini akan digunakan untuk menemukan induknya';
$string['departmentidnumber'] = 'Nomor ID';
$string['departmentidnumberconflict'] = 'Nomor ID departemen sudah ada';
$string['departmentleadpermissions'] = 'Izin pimpinan departemen';
$string['departmentmanagementicons'] = 'Ikon manajemen departemen';
$string['departmentmanager'] = 'Kepala departemen';
$string['departmentmanager_help'] = 'Seseorang dengan jabatan kepala departemen akan dianggap sebagai manajer siapa pun di departemen yang sama atau subdepartemen, apa pun jabatannya.';
$string['departmentname'] = 'Nama';
$string['departmentnotfound'] = 'Departemen tidak ditemukan';
$string['departmentparent'] = 'Induk';
$string['departmentrequiredforjobcreate'] = 'Departemen perlu dibentuk untuk melanjutkan penugasan pekerjaan';
$string['departments'] = 'Departemen';
$string['departmentwithicons'] = 'Departemen dengan izin';
$string['directreports'] = '<a href="{$a->url}">{$a->count} laporan langsung</a>';
$string['directreports_plural'] = '<a href="{$a->url}">{$a->count} laporan langsung</a>';
$string['editdates'] = 'Sunting tanggal';
$string['editdepartment'] = 'Sunting departemen \'{$a}\'';
$string['editdepartmentframework'] = 'Sunting kerangka kerja departemen \'{$a}\'';
$string['editdepartmentname'] = 'Sunting nama';
$string['editjobdatesforuser'] = 'Sunting tanggal pekerjaan untuk \'{$a}\'';
$string['editmanuallyassignedmanager'] = 'Sunting tugas';
$string['editposition'] = 'Sunting posisi \'{$a}\'';
$string['editpositionframework'] = 'Sunting kerangka kerja posisi \'{$a}\'';
$string['editpositionname'] = 'Sunting nama';
$string['enddate'] = 'Tanggal akhir';
$string['enddate_help'] = 'Tanggal akhir pekerjaan';
$string['enddaterelativetostart'] = 'Relatif terhadap tanggal mulai';
$string['entitydepartment'] = 'Departemen';
$string['entityjob'] = 'Pekerjaan';
$string['entityposition'] = 'Posisi';
$string['errorcreatingdepartment'] = 'Terjadi galat saat membuat departemen. Silakan coba lagi';
$string['errorcreatingjob'] = 'Terjadi galat saat membuat pekerjaan. Silakan coba lagi.';
$string['errorcreatingposition'] = 'Terjadi galat saat membuat posisi. Silakan coba lagi.';
$string['errorcsvcantuseframeworkidnumber'] = 'ID kerangka kerja dan nomor ID tidak dapat digunakan pada saat yang bersamaan';
$string['errorcsvinvalidframeworkidnumber'] = 'Kerangka kerja dengan nomor ID ini tidak ada atau tidak tersedia';
$string['errorcsvinvalidparentmapping'] = 'Pemetaan untuk bidang \'Induk\' tidak boleh sama dengan pengenal';
$string['errorcsvnohierarchy'] = 'Ketika hierarki tidak dipilih, kolom \'Induk\' tidak dapat dipetakan';
$string['errorcsvnoparent'] = 'Saat hierarki dipilih, kolom \'Induk\' harus memiliki pemetaan';
$string['erroridnumberdepartment'] = 'Departemen dengan nomor ID \'{$a}\' sudah ada';
$string['erroridnumberposition'] = 'Posisi dengan nomor ID \'{$a}\' sudah ada';
$string['errorinvaliddepartment'] = 'Departemen tidak valid';
$string['errorinvalidenddate'] = 'Tanggal tidak valid, tanggal akhir harus lebih besar dari tanggal mulai';
$string['errorinvalidjobenddate'] = 'Format tanggal akhir tidak valid';
$string['errorinvalidjobstartdate'] = 'Format tanggal mulai tidak valid';
$string['errorinvalidposition'] = 'Posisi tidak valid';
$string['errorjobscannotbeimported'] = 'Pekerjaan tidak dapat diimpor ke ruang Bersama';
$string['errormovehierarchy'] = 'Terjadi galat saat memindahkan posisi atau departemen ke lokasi hierarki lain.';
$string['errorparentnotfound'] = 'Induk tidak ditemukan';
$string['errorparentnotfounddepartment'] = 'Induk tidak ditemukan untuk departemen dengan nomor ID \'{$a}\'';
$string['errorparentnotfoundposition'] = 'Induk tidak ditemukan untuk posisi dengan nomor ID \'{$a}\'';
$string['errorparentsameascurrent'] = 'Induk tidak boleh sama dengan entitas hierarki saat ini';
$string['errorsameidnumberdepartment'] = 'Departemen dengan nomor ID yang sama sudah ada';
$string['errorsameidnumberposition'] = 'Posisi dengan nomor ID yang sama sudah ada';
$string['eventdepartmentcreated'] = 'Departemen dibuat';
$string['eventdepartmentdeleted'] = 'Departemen dihapus';
$string['eventdepartmentupdated'] = 'Departemen diperbarui';
$string['eventjobcreated'] = 'Pekerjaan dibuat';
$string['eventjobdeleted'] = 'Pekerjaan dihapus';
$string['eventjobupdated'] = 'Pekerjaan diperbarui';
$string['eventpositioncreated'] = 'Posisi dibuat';
$string['eventpositiondeleted'] = 'Posisi dihapus';
$string['eventpositionupdated'] = 'Posisi diperbarui';
$string['eventusermgrcreated'] = 'Manajer yang ditetapkan secara manual dibuat';
$string['eventusermgrdeleted'] = 'Manajer yang ditetapkan secara manual dihapus';
$string['eventusermgrupdated'] = 'Manajer yang ditetapkan secara manual diperbarui';
$string['existingmanagers'] = 'Manajer yang ada';
$string['existingmanagers_help'] = '<b>Pertahankan pengelola yang ada</b><br />
Jika Anda memilih opsi ini, pengelola pengguna yang ada akan dipertahankan, dan pengelola baru yang Anda tentukan akan ditambahkan di sampingnya. Gunakan opsi ini jika Anda ingin mempertahankan penugasan pengelola saat ini dan menambahkan pengelola tambahan.<br />
<br />
<b>Ganti pengelola yang ada</b><br />
Dengan memilih opsi ini, semua pengelola yang ada yang ditugaskan kepada pengguna akan sepenuhnya digantikan oleh pengelola baru yang Anda tentukan. Gunakan opsi ini jika Anda ingin sepenuhnya mengganti penugasan pengelola yang ada dengan yang baru.';
$string['expanddepartmentframework'] = 'Luaskan kerangka kerja departemen \'{$a}\'';
$string['expandpositionframework'] = 'Luaskan kerangka posisi \'{$a}\'';
$string['exporterdepartments'] = 'Departemen struktur organisasi';
$string['exporterdepartmentscsv'] = 'Departemen struktur organisasi (CSV)';
$string['exporterdepartmentsdesc'] = 'Kerangka kerja departemen dengan seluruh hierarki';
$string['exporterjobs'] = 'Pekerjaan struktur organisasi';
$string['exporterjobscsv'] = 'Pekerjaan struktur organisasi (CSV)';
$string['exporterjobsdesc'] = 'Pekerjaan dengan departemen dan kerangka posisi terasosiasi';
$string['exporterorgstructure'] = 'Kerangka kerja struktur organisasi';
$string['exporterorgstructuredesc'] = 'Kerangka kerja dengan seluruh hierarki untuk departemen dan/atau posisi';
$string['exporterpositions'] = 'Posisi struktur organisasi';
$string['exporterpositionscsv'] = 'Posisi struktur organisasi (CSV)';
$string['exporterpositionsdesc'] = 'Kerangka kerja posisi dengan seluruh hierarki';
$string['exportframeworkssettings'] = 'Deskripsi, hierarki, dan izin';
$string['exportframeworkssettingsdescriptionshierarchy'] = 'Deskripsi dan hierarki';
$string['frameworks'] = 'Kerangka kerja';
$string['globalmanagementicons'] = 'Ikon manajer';
$string['globalmanager'] = 'Manajer';
$string['globalmanager_help'] = 'Seseorang dengan pekerjaan manajer akan dianggap sebagai manajer siapa pun yang jabatannya lebih rendah, apa pun departemennya.';
$string['gotouserprofile'] = 'Buka halaman profil pengguna';
$string['hascurrentjobs'] = 'Memiliki pekerjaan saat ini';
$string['hasjobdepartment'] = 'Memiliki pekerjaan di departemen';
$string['hasjobposition'] = 'Memiliki pekerjaan di posisi';
$string['hierarchy'] = 'Hierarki';
$string['hierarchydepartments'] = 'Hierarki departemen...';
$string['hierarchypositions'] = 'Hierarki posisi...';
$string['importerdepartmentscsv'] = 'Importir Departemen (CSV)';
$string['importerdepartmentscsvdesc'] = 'Departemen dengan atau tanpa hierarki yang akan diimpor ke dalam kerangka kerja';
$string['importerpositionscsv'] = 'Importir posisi (CSV)';
$string['importerpositionscsvdesc'] = 'Posisi dengan atau tanpa hierarki yang akan diimpor ke dalam kerangka kerja';
$string['importlogdeptfailed'] = 'Tidak dapat mengimpor departemen \'{$a->name}\'';
$string['importlogdeptfrmfailed'] = 'Tidak dapat mengimpor kerangka kerja departemen \'{$a->name}\'';
$string['importlogdeptfrmsuccess'] = 'Membuat kerangka kerja departemen baru \'<a href="{$a->url}">{$a->name}</a>\'';
$string['importlogdeptsuccess'] = 'Membuat departemen baru \'{$a->name}\'';
$string['importlogidnumberexistsdepartment'] = 'Departemen dengan nomor ID \'{$a->originalidnumber}\' sudah ada';
$string['importlogidnumberexistsposition'] = 'Posisi dengan nomor ID \'{$a->originalidnumber}\' sudah ada';
$string['importlogjobfailed'] = 'Tidak dapat mengimpor pekerjaan untuk \'{$a->userfullname}\' - {$a->position} ({$a->department})';
$string['importlogjobsuccess'] = 'Telah membuat pekerjaan baru untuk \'<a href="{$a->url}">{$a->userfullname}</a>\' - {$a->position} ({$a->department})';
$string['importlogposfailed'] = 'Tidak dapat mengimpor posisi \'{$a->name}\'';
$string['importlogposfrmfailed'] = 'Tidak dapat mengimpor kerangka posisi \'{$a->name}\'';
$string['importlogposfrmsuccess'] = 'Telah membuat kerangka kerja posisi baru \'<a href="{$a->url}">{$a->name}</a>\'';
$string['importlogpossuccess'] = 'Telah membuat posisi baru \'{$a->name}\'';
$string['include_shared_entities'] = 'Sertakan entitas bersama';
$string['include_shared_entities_help'] = 'Dengan mengaktifkan opsi ini, berkas yang diekspor juga akan berisi semua kerangka kerja bersama yang tersedia di penyewa saat ini';
$string['ismanager'] = 'Adalah manajer';
$string['jobcreated'] = 'Pekerjaan dibuat';
$string['jobdeleteconfirm'] = 'Apakah Anda yakin ingin menghapus pekerjaan ini dan semua data terkait?<br />
Jika Anda ingin menyimpan data pekerjaan ini untuk konsultasi di masa mendatang, sebaiknya Anda mempertimbangkan untuk menetapkan pekerjaan ini sebagai selesai.<br />
<br />Tindakan ini tidak dapat dibatalkan.';
$string['jobdeleted'] = 'Pekerjaan dihapus';
$string['jobfrom'] = 'Dari {$a}';
$string['jobfromto'] = 'Dari {$a->from} ke {$a->to}';
$string['jobnotfound'] = 'Pekerjaan tidak ditemukan';
$string['jobpositiondepartment'] = 'Posisi dan departemen';
$string['jobs'] = 'Penugasan pekerjaan';
$string['jobsassigned'] = 'Pekerjaan ditugaskan';
$string['jobscreated'] = 'Pekerjaan dibuat';
$string['jobsnumber'] = 'Pekerjaan';
$string['jobsnumber_help'] = 'Menunjukkan pekerjaan yang aktif dan pekerjaan yang lalu.<br /> Misalnya \'10 (2)\' berarti ada 10 pekerjaan yang aktif dan 2 pekerjaan yang lalu.';
$string['jobstartdateafter'] = 'Tanggal mulai pekerjaan pada atau setelah';
$string['jobstransfered'] = 'Pengguna ditransfer ke pekerjaan baru';
$string['jobsupdated'] = 'Pekerjaan diperbarui';
$string['jobtenantdoesnotmatch'] = 'Penyewa pekerjaan tidak cocok dengan penyewa pengguna';
$string['jobtransfered'] = 'Pengguna ditransfer ke pekerjaan baru';
$string['jobupdated'] = 'Pekerjaan diperbarui';
$string['keepexistingmanagers'] = 'Tetapkan manajer yang ada dan tambahkan yang baru';
$string['listdeptsnohierarchy'] = 'Daftar departemen tanpa hierarki';
$string['listposnohierarchy'] = 'Daftar posisi tanpa hierarki';
$string['locked'] = 'Terkunci';
$string['locked_help'] = 'Hanya pengguna dengan kemampuan untuk menetapkan pekerjaan di posisi/departemen terkunci yang dapat melakukannya';
$string['managerpermissions'] = 'Izin manajer';
$string['managersdropdown'] = 'Pilih pengguna';
$string['managersdropdown_help'] = 'Pemilihan manajer langsung menentukan kepada siapa pengguna saat ini akan melapor dalam organisasi. Pengguna saat ini akan menjadi bagian dari portofolio manajemen mereka.<br>
<br>
Pengguna saat ini dapat memiliki manajer yang berbeda tergantung pada posisinya dalam struktur organisasi. Namun, hanya satu manajer yang dapat ditetapkan secara manual.';
$string['managersunassigned'] = 'Manajer yang ditugaskan secara manual tidak ditugaskan';
$string['managertype'] = 'Tipe manajer';
$string['manuallyassigned'] = 'Manajer (ditugaskan secara manual)';
$string['manuallyassignedbadge'] = 'Ditugaskan secara manual';
$string['manuallyassignedcreated'] = 'Berhasil ditugaskan';
$string['manuallyassigneddeleted'] = 'Berhasil dibatalkan penugasan';
$string['manuallyassigneddeletedconfirm'] = 'Apakah Anda yakin ingin menghapus tugas ini?<br />
<br />Tindakan ini tidak dapat dibatalkan.';
$string['manuallyassignedupdated'] = 'Berhasil diperbarui';
$string['mappingerrordeptnotfound'] = 'Departemen {$a} tidak ditemukan';
$string['mappingerrorposnotfound'] = 'Posisi {$a} tidak ditemukan';
$string['mappingnoticenodeptidnumber'] = 'Departemen tersebut ditemukan berdasarkan nama karena nomor ID kosong. Sebaiknya berikan nomor ID ke departemen';
$string['mappingnoticenoposidnumber'] = 'Posisi tersebut ditemukan berdasarkan nama karena nomor ID kosong. Sebaiknya berikan nomor ID pada posisi tersebut';
$string['missingdepartment'] = 'Departemen hilang';
$string['missingposition'] = 'Posisi hilang';
$string['missingusers'] = 'Pengguna hilang';
$string['movedepartmentframework'] = 'Pindahkan kerangka kerja departemen \'{$a}\'';
$string['movepositionframework'] = 'Pindahkan kerangka posisi \'{$a}\'';
$string['newframework'] = 'Kerangka kerja baru';
$string['newnamefor'] = 'Nama baru untuk \'{$a}\'';
$string['newuseradded'] = 'Pengguna baru telah ditambahkan. <a href="{$a}">Lihat pekerjaan dan baris pelaporan untuk pengguna ini</a>';
$string['noavailabledepartments'] = 'Tidak ada departemen yang tersedia';
$string['noavailablepositions'] = 'Tidak ada posisi yang tersedia';
$string['notactivejob'] = 'Tidak aktif';
$string['notification'] = 'Pemberitahuan';
$string['notificationcannotcreatejobs'] = 'Sebelum menugaskan pekerjaan kepada pengguna, buatlah beberapa departemen dan posisi.';
$string['notinsametenant'] = 'Pengguna dan manajer tidak berada di penyewa yang sama';
$string['onlycurrent'] = 'Hanya saat ini';
$string['onlyfuture'] = 'Hanya masa mendatang';
$string['onlypast'] = 'Hanya masa lampau';
$string['organisation:allocateteammemberstolearning'] = 'Menetapkan anggota tim untuk belajar';
$string['organisation:allocateteammemberstolearning_help'] = 'Seseorang dengan izin ini dapat mengalokasikan anggota tim ke entitas pembelajaran, seperti kursus, program, atau sertifikasi.';
$string['organisation:allocateuserstoprogramcertificationsdept'] = 'Alokasikan pengguna ke program/sertifikasi';
$string['organisation:allocateuserstoprogramcertificationsdept_help'] = 'Pimpinan departemen: Alokasikan pengguna ke program/sertifikasi';
$string['organisation:allocateuserstoprogramcertificationsglob'] = 'Alokasikan pengguna ke program/sertifikasi';
$string['organisation:allocateuserstoprogramcertificationsglob_help'] = 'Manajer: Alokasikan pengguna ke program/sertifikasi';
$string['organisation:allocateuserstoprogramcertificationsmam'] = 'Alokasikan pengguna ke program/sertifikasi';
$string['organisation:allocateuserstoprogramcertificationsmam_help'] = 'Manajer yang ditugaskan secara manual: Alokasikan pengguna ke program/sertifikasi';
$string['organisation:assigninlocked'] = 'Tugaskan pekerjaan di departemen dan posisi yang terkunci';
$string['organisation:assignjobs'] = 'Tugaskan pekerjaan';
$string['organisation:assignmanuallymgr'] = 'Tambahkan manajer yang ditugaskan secara manual';
$string['organisation:managedepartments'] = 'Kelola departemen';
$string['organisation:managepositions'] = 'Kelola posisi';
$string['organisation:receivenotifications'] = 'Terima pemberitahuan';
$string['organisation:receivenotifications_help'] = 'Seseorang dengan izin ini menerima pemberitahuan yang telah dikonfigurasikan secara khusus untuk dikirimkan kepada mereka (misalnya, melalui Aturan Dinamis).';
$string['organisation:receivenotificationsdept'] = 'Terima pemberitahuan';
$string['organisation:receivenotificationsdept_help'] = 'Pimpinan departemen: Terima pemberitahuan';
$string['organisation:receivenotificationsglob'] = 'Terima pemberitahuan';
$string['organisation:receivenotificationsglob_help'] = 'Manajer: Terima pemberitahuan';
$string['organisation:receivenotificationsmam'] = 'Terima pemberitahuan';
$string['organisation:receivenotificationsmam_help'] = 'Manajer yang ditugaskan secara manual: Terima pemberitahuan';
$string['organisation:viewextendedteamreports'] = 'Lihat laporan tim yang diperluas';
$string['organisation:viewextendedteamreports_help'] = 'Seseorang dengan izin ini dapat melihat laporan terperinci tentang kemajuan pembelajaran siapa pun yang melapor kepadanya.';
$string['organisation:viewusersreportdept'] = 'Lihat laporan pengguna';
$string['organisation:viewusersreportdept_help'] = 'Pimpinan departemen: Lihat laporan pengguna';
$string['organisation:viewusersreportglob'] = 'Lihat laporan pengguna';
$string['organisation:viewusersreportglob_help'] = 'Manajer: Lihat laporan pengguna';
$string['organisation:viewusersreportmam'] = 'Lihat laporan pengguna';
$string['organisation:viewusersreportmam_help'] = 'Manajer yang ditugaskan secara manual: Lihat laporan pengguna';
$string['organisationadmintab'] = 'Organisasi';
$string['orgfiltercustomise'] = 'Sesuaikan';
$string['orgfilterdirectreports'] = 'Tampilkan laporan langsung saya sendiri saja';
$string['orgfiltereverybody'] = 'Tampilkan kepada semua orang yang melapor kepada saya';
$string['orgstructure'] = 'Struktur organisasi';
$string['parent'] = 'Induk';
$string['parentidchanged'] = 'Departemen induk yang ditentukan \'{$a}\' tidak dapat ditemukan. Departemen tersebut dibuat langsung di bawah kerangka kerja.';
$string['parentidchangedposition'] = 'Posisi induk yang ditentukan \'{$a}\' tidak dapat ditemukan. Posisi tersebut dibuat langsung di bawah kerangka kerja.';
$string['parentsameiderror'] = 'Elemen induk tidak bisa menjadi dirinya sendiri';
$string['people'] = 'Orang';
$string['peoplereportingto'] = 'Orang yang melapor ke {$a}';
$string['pluginname'] = 'Struktur organisasi';
$string['position'] = 'Posisi';
$string['position_help'] = 'Pilih posisi';
$string['positionanddepartmentdisplay'] = '{$a->position} ({$a->department})';
$string['positiondeleted'] = 'Posisi telah berhasil dihapus.';
$string['positiondescription'] = 'Deskripsi';
$string['positionframework'] = 'Kerangka kerja posisi';
$string['positionframeworkidnumber'] = 'Nomor ID kerangka kerja posisi';
$string['positionframeworkpostfix'] = '{$a} (Kerangka kerja posisi)';
$string['positionframeworks'] = 'Kerangka kerja posisi';
$string['positionfrmidnumberconflict'] = 'Nomor ID kerangka kerja posisi sudah ada';
$string['positionhasjobs'] = 'Posisi tidak dapat dihapus karena ada pekerjaan yang terkait dengannya.';
$string['positionidentifier'] = 'Pengidentifikasi posisi';
$string['positionidentifier_help'] = 'Ini adalah kolom yang mengidentifikasi baris dalam CSV, ini akan digunakan untuk menemukan induknya';
$string['positionidnumber'] = 'Nomor ID';
$string['positionidnumberconflict'] = 'Nomor ID posisi sudah ada';
$string['positionname'] = 'Nama';
$string['positionnotfound'] = 'Posisi tidak ditemukan';
$string['positionparent'] = 'Induk';
$string['positionpermissions'] = 'Izin';
$string['positionrequiredforjobcreate'] = 'Posisi perlu dibuat untuk melanjutkan penugasan pekerjaan.';
$string['positions'] = 'Posisi';
$string['positionwithicons'] = 'Posisi dengan izin';
$string['present'] = 'Hadir';
$string['previousjobdatenote'] = 'Pekerjaan sebelumnya akan ditetapkan sebagai selesai satu hari sebelum pekerjaan baru dimulai.';
$string['previousjobsdatenote'] = 'Semua pekerjaan untuk semua pengguna yang dipilih akan ditetapkan sebagai selesai satu hari sebelum pekerjaan baru dimulai.';
$string['privacy:metadata:department'] = 'Departemen pekerjaan';
$string['privacy:metadata:depth'] = 'Kolom pelaporan untuk pengindeksan ulang';
$string['privacy:metadata:enddate'] = 'Ketika pekerjaan ini berakhir';
$string['privacy:metadata:isdirect'] = 'Tunjukkan jika pengguna adalah bawahan langsung';
$string['privacy:metadata:jobssummary'] = 'Ringkasan pekerjaan';
$string['privacy:metadata:managerid'] = 'ID manajer struktur organisasi';
$string['privacy:metadata:path'] = 'Jalur hubungan garis pelaporan';
$string['privacy:metadata:permissions'] = 'Izin yang dimiliki manajer ini atas karyawan ini';
$string['privacy:metadata:position'] = 'Posisi pekerjaan';
$string['privacy:metadata:reportingsummary'] = 'Hubungan garis pelaporan';
$string['privacy:metadata:startdate'] = 'Ketika pekerjaan ini dimulai';
$string['privacy:metadata:timecreated'] = 'Saat pekerjaan ini dibuat';
$string['privacy:metadata:timemodified'] = 'Kapan pekerjaan ini terakhir dimodifikasi';
$string['privacy:metadata:ummanagerid'] = 'ID manajer pengguna';
$string['privacy:metadata:umpath'] = 'Jalur manajer pengguna';
$string['privacy:metadata:umpathlevel'] = 'Tingkat jalur manajer pengguna';
$string['privacy:metadata:umpermissions'] = 'Izin manajer pengguna';
$string['privacy:metadata:umsummary'] = 'Ringkasan manajer pengguna';
$string['privacy:metadata:umtimecreated'] = 'Saat manajer pengguna ini dibuat';
$string['privacy:metadata:umtimemodified'] = 'Kapan manajer pengguna ini terakhir kali dimodifikasi';
$string['privacy:metadata:umuserid'] = 'ID pengguna';
$string['privacy:metadata:userid'] = 'ID pengguna';
$string['reg_wpdepartmentframeworks'] = 'Jumlah kerangka kerja departemen ({$a})';
$string['reg_wpdepartments'] = 'Jumlah departemen ({$a})';
$string['reg_wpjobs'] = 'Jumlah pekerjaan ({$a})';
$string['reg_wpmanualmanagerassignments'] = 'Jumlah penugasan manajer manual ({$a})';
$string['reg_wppositionframeworks'] = 'Jumlah kerangka kerja posisi ({$a})';
$string['reg_wppositions'] = 'Jumlah posisi ({$a})';
$string['relevantjobs'] = 'Pekerjaan yang relevan';
$string['replaceexistingmanagers'] = 'Ganti manajer yang ada';
$string['reportingline'] = 'Garis pelaporan';
$string['reportsto'] = 'Melaporkan ke';
$string['rolemanager'] = 'Manajer struktur organisasi';
$string['rolemanagerdescription'] = 'Memungkinkan untuk membuat dan mengelola pekerjaan, posisi, dan departemen dalam penyewa saat ini';
$string['ruleoutcomeactive'] = 'Hanya pekerjaan aktif';
$string['ruleoutcomeall'] = 'Semua pekerjaan';
$string['ruleoutcomeassignjob'] = 'Tugaskan pekerjaan';
$string['ruleoutcomeassignjobdescwithdates'] = 'Tugaskan pekerjaan di departemen \'{$a->department}\' dengan posisi \'{$a->position}\'<br />
Tanggal mulai: {$a->startdate}<br />
Tanggal berakhir: {$a->enddate}';
$string['ruleoutcomeassignjobstartruledate'] = 'Tanggal eksekusi aturan';
$string['ruleoutcomeassignjobstartuserdate'] = 'Tanggal pembuatan pengguna';
$string['ruleoutcomedaybeforeruledate'] = 'Sehari sebelum eksekusi aturan';
$string['ruleoutcomeendjobs'] = 'Akhiri semua pekerjaan';
$string['ruleoutcomeendjobsdesc'] = 'Akhiri semua pekerjaan di departemen \'{$a->department}\' dan posisi \'{$a->position}\'<br />
Sertakan subdepartemen: \'{$a->includesubdepartments}\'<br />
Sertakan subposisi: \'{$a->includesubpositions}\'<br />
Tanggal akhir: \'{$a->enddate}\'<br />
Target: \'{$a->target}\'';
$string['ruleoutcomeruledate'] = 'Tanggal eksekusi aturan';
$string['ruleoutcometarget'] = 'Target';
$string['ruleoutcometarget_help'] = 'Akhiri semua pekerjaan atau hanya yang aktif';
$string['selectallactivejobs'] = 'Pilih semua pekerjaan aktif';
$string['selectalldepartmentframeworks'] = 'Pilih semua kerangka kerja departemen';
$string['selectallframeworks'] = 'Pilih semua kerangka kerja departemen dan posisi';
$string['selectalljobs'] = 'Pilih semua pekerjaan yang aktif dan sebelumnya';
$string['selectalljobsinfile'] = 'Pilih semua pekerjaan dalam berkas ini';
$string['selectalljobsinframeworks'] = 'Pilih semua pekerjaan di salah satu kerangka kerja yang dipilih...';
$string['selectallpositionframeworks'] = 'Pilih semua kerangka kerja posisi';
$string['selectdate'] = 'Pilih tanggal...';
$string['selectdepartmentframework'] = 'Pilih kerangka kerja departemen';
$string['selectexistingframework'] = 'Pilih kerangka kerja yang ada';
$string['selectjobsinframeworks'] = 'Pilih semua pekerjaan dari kerangka kerja tertentu...';
$string['selectpositionframework'] = 'Pilih kerangka kerja posisi';
$string['setjobfinished'] = 'Atur pekerjaan sebagai selesai';
$string['setjobsfinished'] = 'Atur pekerjaan sebagai selesai';
$string['showjobs'] = 'Tampilkan pekerjaan';
$string['showpastjobs'] = 'Tampilkan pekerjaan sebelumnya';
$string['showpeoplewithjobs'] = 'Tampilkan orang dengan pekerjaan';
$string['showpeoplewithmanagers'] = 'Tampilkan orang dengan manajer';
$string['somedepartmentsdonotexist'] = 'Beberapa departemen tidak ada';
$string['somepositionsdonotexist'] = 'Beberapa posisi tidak ada';
$string['startdate'] = 'Tanggal mulai';
$string['startdate_help'] = 'Tanggal mulai pekerjaan';
$string['taskbuildreportingline'] = 'Bangun garis pelaporan struktur organisasi';
$string['timecreated'] = 'Waktu dibuat';
$string['toomanydepartmentstoshow'] = 'Terlalu banyak departemen untuk ditampilkan.';
$string['toomanyparentstoshow'] = 'Terlalu banyak induk untuk ditampilkan.';
$string['toomanypositionstoshow'] = 'Terlalu banyak posisi untuk ditampilkan.';
$string['transferjob'] = 'Transfer pekerjaan ini ke yang baru';
$string['transfertoanewjob'] = 'Transfer ke pekerjaan baru';
$string['transfertojob'] = 'Transfer \'{$a}\' ke pekerjaan baru';
$string['transfertonewjob'] = 'Transfer pengguna ini ke pekerjaan baru';
$string['unassignmanager'] = 'Batalkan penugasan manajer';
$string['unassignmanagers'] = 'Batalkan penugasan manajer';
$string['unassignperson'] = 'Batalkan penugasan orang';
$string['usermanagednotallowed'] = 'Pembuatan tugas pengelolaan bersama tidak diizinkan. Pastikan bahwa pengguna tidak mengelola satu sama lain secara bersamaan.';
$string['usermanagednotallowedrelation'] = 'Pengguna tidak diperbolehkan memiliki relasi ini dengan manajer';
$string['usermanagednotexist'] = 'Catatan manajer pengguna tidak ada';
$string['usernotfound'] = 'Pengguna tidak ditemukan';
$string['users'] = 'Pilih pengguna';
$string['users_help'] = 'Cari dan pilih pengguna untuk penugasan pekerjaan';
$string['validationmsgdeptposchangejob'] = 'Departemennya atau posisinya harus berbeda dari yang sekarang.';
$string['validationmsgedateonenddatechange'] = '{$a} memiliki pekerjaan dengan tanggal mulai setelah tanggal akhir yang ditentukan.';
$string['validationmsgedateonsdate'] = 'Tanggal akhir harus setelah tanggal mulai.';
$string['validationmsgedateonsdatechangejob'] = 'Tanggal mulai pekerjaan baru harus setelah tanggal mulai pekerjaan lama.';
$string['viewjobsandreporting'] = 'Lihat pekerjaan dan baris pelaporan';
$string['withoutpermission'] = 'Tanpa izin \'{$a}\'';
$string['withpermission'] = 'Dengan izin \'{$a}\'';
$string['withsubdepartments'] = 'Sertakan subdepartemen';
$string['withsubpositions'] = 'Sertakan subposisi';
