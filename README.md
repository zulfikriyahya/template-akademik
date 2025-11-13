# MADRASAH SUPER APP

## Dependensi

### Blueprint

-   `composer require -W --dev laravel-shift/blueprint`
-   `echo '/draft.yaml' >> .gitignore`
-   `echo '/.blueprint' >> .gitignore`
-   `php artisan blueprint:new`
-   `php artisan blueprint:erase`
-   `php artisan blueprint:build`

### Filament

-   `composer require -W filament/filament`
-   `php artisan filament:install --panels`
-   `php artisan make:filament-user`

### Filament Shield

-   `composer require bezhansalleh/filament-shield`
-   `php artisan shield:setup`

## STEPS

### Install Laravel, Blueprint, Filament

```bash
composer create-project laravel/laravel madrasah-super-app
composer require laravel-shift/blueprint -W --dev
composer require filament/filament -W
php artisan filament:install --panels
php artisan blueprint:new
```

### Periksa dan perbaiki file .env, Models, Migrations, dan Factory Setelah menjalankan `php artisan blueprint:build` terutama Models dan Migrations User, Provinsi, Kabupaten, Kecamatan, Kelurahan dan relasi parent_id.

### Setelah semuanya diperbaiki:

-   Jalankan `php artisan migrate`, dan jalankan `php artisan make:resource [Models] --generate --view --soft-deletes`.
-   Sesuaikan Resource, dan tambahkan fitur-fitur aplikasi seperti: importer, exporter, print, widgets statistik untuk dashboard, dan lainnya.
-   Buatkan Seeder, dan jalankan `php artisan db:seed`
-   Install Plugin Laravel, dan Filament yang diperlukan.

### Buatkan API setiap Models untuk integrasi dengan aplikasi Android, Windows, dan Website lainnya.

### Konfigurasikan dengan Fitur Notifikasi [WebPush, Email, Whatsapp, SMS dan Lainnya]

---

## ALL MODULES

```bash
# TODO : MODUL PRIMER [MASTER DATA]
# [x] : Provinsi
# [x] : Kabupaten
# [x] : Kecamatan
# [x] : Kelurahan
# [x] : Instansi
# [x] : Departemen
# [x] : Jabatan
# [x] : Tahun Pelajaran
# [x] : Semester
# [x] : Mata Pelajaran
# [x] : Ekstrakurikuler
# [x] : Poin Pelanggaran Siswa
# [x] : Poin Prestasi Siswa
# [x] : Tahun Ekstrakurikuler
# [x] : Jurusan
# [x] : Kelas
# [x] : Rombongan Belajar
# [x] : Ruangan/Kelas Fisik
# [x] : Jenjang Pendidikan (RA/MI/MTs/MA/MAK)
# [x] : Tingkat Kelas (1-6 MI, 7-9 MTs, 10-12 MA)
# [x] : Kurikulum (K13, Merdeka, dll)
# [x] : User
# [x] : Siswa
# [x] : Pegawai
# [x] : Guru Kelas/Wali Kelas
# [x] : Guru Mata Pelajaran
# [x] : Guru Pembimbing Ekstrakurikuler
# [x] : Jadwal Pelajaran
# [x] : Jadwal Presensi
# [x] : Jadwal Pendaftaran
# [x] : Kalender Akademik
# [x] : Hari Libur/Hari Efektif
# [x] : Jam Pelajaran
# [x] : Waktu Pembelajaran
# [x] : Informasi/Pengumuman
# [x] : Kategori Informasi
# [x] : Status Siswa (Aktif/Alumni/DO/Pindah/Lulus)
# [x] : Status Kepegawaian (PNS/PPPK/GTY/PTY/Honor)
# [x] : Golongan Kepegawaian
# [x] : Agama
# [x] : Jenis Kelamin
# [x] : Status Pernikahan
# [x] : Pendidikan Terakhir
# [x] : Jenis Penilaian (UH/UTS/UAS/Praktik/Proyek)
# [x] : Bobot Penilaian
# [x] : KKM (Kriteria Ketuntasan Minimal)
# [x] : Kompetensi Dasar (KD)
# [x] : Capaian Pembelajaran (CP)
# [x] : Fase Pembelajaran
# XXX ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ #
# TODO : MODUL WEBSITE [BACKEND API & CMS]
# [x] : Blog/Artikel
# [x] : Kategori Blog
# [x] : Tagar/Tag
# [x] : Komentar
# [x] : Layanan
# [x] : Program Madrasah
# [x] : Galeri Foto
# [x] : Galeri Video
# [x] : Halaman Statis (About, Visi Misi, Sejarah, dll)
# [x] : Menu Management
# [x] : Banner/Slider
# [x] : Testimonial
# [x] : Penghargaan/Prestasi Madrasah
# [x] : Fasilitas
# [x] : Struktur Organisasi
# [x] : Kontak/Alamat
# [x] : FAQ
# [x] : Download Center (Formulir, Dokumen)
# [x] : Alumni
# [x] : Kalender Event
# XXX ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ #
# TODO : MODUL PTSP [HELPDESK, TICKETING, LAYANAN DAN PENGADUAN]
# [x] : Kategori Layanan/Pengaduan
# [x] : Prioritas Ticket (Low/Medium/High/Critical)
# [x] : Status Ticket (Open/Progress/Resolved/Closed)
# [x] : Ticket/Pengaduan
# [x] : Assignment Petugas
# [x] : Komentar/Balasan Ticket
# [x] : Rating/Review Layanan
# [x] : SLA (Service Level Agreement)
# [x] : Notifikasi Ticket
# [x] : Riwayat Ticket
# [x] : Dashboard Monitoring Ticket
# [x] : Laporan Statistik Pengaduan
# [x] : Knowledge Base/FAQ Layanan
# [x] : Jenis Layanan (Administrasi, IT, Akademik, dll)
# XXX ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ #
# TODO : MODUL KEUANGAN
# [x] : Jenis Pembayaran (SPP, Pendaftaran, Ujian, dll)
# [x] : Tahun Keuangan
# [x] : Periode Pembayaran
# [x] : Tarif/Biaya
# [x] : Tagihan Siswa
# [x] : Pembayaran/Transaksi
# [x] : Cicilan/Angsuran
# [x] : Diskon/Potongan
# [x] : Beasiswa
# [x] : Tunggakan
# [x] : Kwitansi/Bukti Bayar
# [x] : Rekening Bank
# [x] : Metode Pembayaran (Cash/Transfer/QRIS/VA)
# [x] : Kas Masuk
# [x] : Kas Keluar
# [x] : Kategori Pengeluaran
# [x] : Anggaran (RKAS/RKAM)
# [x] : Realisasi Anggaran
# [x] : Jurnal Keuangan
# [x] : Buku Besar
# [x] : Laporan Keuangan
# [x] : Rekap Pembayaran
# [x] : Notifikasi Tagihan
# [x] : Reminder Tunggakan
# XXX ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ #
# TODO : MODUL RAPOR
# [x] : Template Rapor
# [x] : Penilaian Pengetahuan
# [x] : Penilaian Keterampilan
# [x] : Penilaian Sikap (Spiritual & Sosial)
# [x] : Nilai Ekstrakurikuler
# [x] : Ketidakhadiran (Sakit/Izin/Alpa)
# [x] : Catatan Wali Kelas
# [x] : Prestasi Siswa dalam Rapor
# [x] : Deskripsi Kompetensi
# [x] : Cetak Rapor
# [x] : Leger Nilai
# [x] : Kenaikan Kelas
# [x] : Kelulusan
# [x] : E-Rapor
# [x] : Pengaturan Bobot Nilai
# [x] : Validasi Nilai
# [x] : Distribusi Nilai
# [x] : Laporan Capaian Pembelajaran
# [x] : Proyek Penguatan Profil Pelajar Pancasila (P5)
# XXX ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ #
# TODO : MODUL PERPUSTAKAAN
# [x] : Kategori Buku
# [x] : Rak Buku
# [x] : Master Buku/Koleksi
# [x] : Nomor Klasifikasi (DDC/Lokal)
# [x] : ISBN/ISSN
# [x] : Penerbit
# [x] : Pengarang
# [x] : Stok Buku
# [x] : Kondisi Buku (Baik/Rusak/Hilang)
# [x] : Anggota Perpustakaan
# [x] : Kartu Anggota
# [x] : Peminjaman
# [x] : Pengembalian
# [x] : Perpanjangan
# [x] : Denda Keterlambatan
# [x] : Reservasi Buku
# [x] : Riwayat Peminjaman
# [x] : Buku Tamu
# [x] : Daftar Kunjungan
# [x] : Katalog Digital
# [x] : Barcode/QR Code Buku
# [x] : Scanner Buku
# [x] : Laporan Statistik Peminjaman
# [x] : Buku Terpopuler
# [x] : Pengadaan Buku
# [x] : Inventarisasi Buku
# [x] : Opac (Online Public Access Catalog)
# XXX ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ #
# TODO : MODUL KONSELING (BK)
# [x] : Data Konseli (Siswa)
# [x] : Jenis Layanan BK (Individu/Kelompok/Klasikal)
# [x] : Bidang Layanan (Pribadi/Sosial/Belajar/Karir)
# [x] : Jadwal Konseling
# [x] : Sesi Konseling
# [x] : Catatan Kasus
# [x] : Diagnosis Masalah
# [x] : Rencana Tindakan
# [x] : Follow Up
# [x] : Asesmen Siswa (Tes Psikologi, Sosiometri, dll)
# [x] : Angket/Kuesioner
# [x] : Home Visit
# [x] : Panggilan Orang Tua
# [x] : Rujukan (Internal/Eksternal)
# [x] : Laporan Konseling
# [x] : Statistik Kasus
# [x] : Bimbingan Karir
# [x] : Bimbingan Studi Lanjut
# [x] : Kolaborasi dengan Guru/Wali Kelas
# [x] : Dokumentasi Kegiatan BK
# [x] : Evaluasi Layanan BK
# XXX ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ #
# TODO : MODUL PRESENSI
# [x] : Jenis Presensi (Manual/Fingerprint/Face Recognition/QR Code/RFID)
# [x] : Presensi Siswa Harian
# [x] : Presensi Guru/Pegawai
# [x] : Presensi Per Mata Pelajaran
# [x] : Status Kehadiran (Hadir/Sakit/Izin/Alpa/Terlambat)
# [x] : Jam Masuk/Keluar
# [x] : Toleransi Keterlambatan
# [x] : Izin/Dispensasi
# [x] : Surat Izin
# [x] : Notifikasi Ketidakhadiran ke Ortu
# [x] : Rekap Presensi Harian
# [x] : Rekap Presensi Bulanan
# [x] : Rekap Presensi Per Semester
# [x] : Persentase Kehadiran
# [x] : Peringatan Ketidakhadiran
# [x] : Integrase dengan Finger Print Device
# [x] : Dashboard Real-time Kehadiran
# [x] : Laporan Keterlambatan
# [x] : Presensi Event/Kegiatan
# XXX ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ #
# TODO : MODUL MONITORING KEHADIRAN
# [x] : Dashboard Kehadiran Real-time
# [x] : Monitoring Kehadiran Per Kelas
# [x] : Monitoring Kehadiran Per Siswa
# [x] : Monitoring Kehadiran Guru
# [x] : Grafik/Chart Kehadiran
# [x] : Trend Kehadiran
# [x] : Alert Siswa Sering Absen
# [x] : Siswa Tidak Hadir Hari Ini
# [x] : Laporan Kehadiran ke Kepala Madrasah
# [x] : Notifikasi ke Wali Kelas
# [x] : Export Data Kehadiran
# [x] : Perbandingan Kehadiran Antar Kelas
# [x] : Ranking Kehadiran
# [x] : Filter Kehadiran (Per Tanggal/Periode/Kelas)
# XXX ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ #
# TODO : MODUL ASESMEN SISWA
# [x] : Bank Soal
# [x] : Kategori Soal
# [x] : Tingkat Kesulitan Soal
# [x] : Jenis Soal (Pilihan Ganda/Essay/Uraian/Benar-Salah)
# [x] : Paket Soal
# [x] : Ujian/Ulangan
# [x] : Jadwal Ujian
# [x] : Ujian Online (CBT)
# [x] : Token Ujian
# [x] : Waktu Pengerjaan
# [x] : Pengawas Ujian
# [x] : Ruang Ujian
# [x] : Peserta Ujian
# [x] : Lembar Jawaban
# [x] : Penilaian Otomatis
# [x] : Penilaian Manual (Essay)
# [x] : Remedial
# [x] : Pengayaan
# [x] : Analisis Butir Soal
# [x] : Hasil Ujian
# [x] : Rekap Nilai Ujian
# [x] : Ranking Nilai
# [x] : Cetak Kartu Ujian
# [x] : Berita Acara Ujian
# [x] : Laporan Hasil Ujian
# XXX ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ #
# TODO : MODUL BUKU INDUK
# [x] : Buku Induk Siswa
# [x] : Nomor Induk
# [x] : Data Pribadi Lengkap
# [x] : Data Orang Tua/Wali
# [x] : Data Kesehatan
# [x] : Riwayat Pendidikan
# [x] : Prestasi dan Penghargaan
# [x] : Pelanggaran dan Sanksi
# [x] : Mutasi Siswa (Masuk/Keluar/Pindah)
# [x] : Riwayat Kelas
# [x] : Dokumen Pendukung (KK/Akta/Ijazah/dll)
# [x] : Foto Siswa
# [x] : Cetak Buku Induk
# [x] : Export/Import Data
# [x] : Arsip Digital
# [x] : Nomor Peserta Ujian
# [x] : Nomor Ijazah
# [x] : Nomor SKHUN
# [x] : Data Alumni
# XXX ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ #
# TODO : MODUL PENDAFTARAN SISWA (PPDB)
# [x] : Gelombang Pendaftaran
# [x] : Jalur Pendaftaran (Reguler/Prestasi/Tahfidz/dll)
# [x] : Kuota Pendaftaran
# [x] : Persyaratan Pendaftaran
# [x] : Formulir Pendaftaran Online
# [x] : Upload Dokumen
# [x] : Pembayaran Pendaftaran
# [x] : Verifikasi Berkas
# [x] : Tes Seleksi
# [x] : Wawancara
# [x] : Penilaian/Scoring
# [x] : Pengumuman Hasil Seleksi
# [x] : Daftar Ulang
# [x] : Cetak Formulir
# [x] : Cetak Kartu Tes
# [x] : Notifikasi Email/SMS
# [x] : Dashboard Pendaftaran
# [x] : Laporan Pendaftar
# [x] : Statistik Pendaftar
# [x] : Export Data Pendaftar
# [x] : Tracking Status Pendaftaran
# XXX ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ #
# TODO : MODUL SURAT MENYURAT
# [x] : Jenis Surat (Masuk/Keluar/Internal)
# [x] : Kategori Surat
# [x] : Nomor Surat Otomatis
# [x] : Agenda Surat Masuk
# [x] : Agenda Surat Keluar
# [x] : Disposisi Surat
# [x] : Template Surat
# [x] : Surat Tugas
# [x] : Surat Izin
# [x] : Surat Keterangan
# [x] : Surat Panggilan
# [x] : Surat Undangan
# [x] : Surat Rekomendasi
# [x] : Surat Pernyataan
# [x] : Surat Keputusan (SK)
# [x] : Surat Edaran
# [x] : Legalisir
# [x] : Tanda Tangan Digital
# [x] : Arsip Surat
# [x] : Pencarian Surat
# [x] : Tracking Surat
# [x] : Notifikasi Surat Masuk
# [x] : Cetak Surat
# [x] : QR Code Verifikasi
# [x] : Laporan Surat
# XXX ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ #
# TODO : MODUL JURNAL [LAPORAN KINERJA]
# [x] : Jurnal Mengajar Guru
# [x] : Materi Pembelajaran
# [x] : Metode Pembelajaran
# [x] : Media Pembelajaran
# [x] : Siswa Tidak Hadir
# [x] : Catatan Khusus
# [x] : Hambatan Pembelajaran
# [x] : Jurnal Kegiatan Harian Pegawai
# [x] : Target dan Realisasi
# [x] : Dokumentasi Kegiatan
# [x] : Approval/Validasi Jurnal
# [x] : Komentar/Feedback dari Atasan
# [x] : Rekap Jurnal Per Guru
# [x] : Rekap Jurnal Per Mata Pelajaran
# [x] : Laporan Kinerja Bulanan
# [x] : Laporan Kinerja Semester
# [x] : Laporan Kinerja Tahunan
# [x] : Penilaian Kinerja Guru (PKG)
# [x] : Beban Kerja Guru
# [x] : Dashboard Monitoring Jurnal
# [x] : Notifikasi Pengisian Jurnal
# [x] : Export Laporan
# XXX ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ #
# TODO : MODUL INVENTORY/ASET
# [x] : Kategori Aset
# [x] : Data Aset/Barang
# [x] : Kode Aset/Inventaris
# [x] : Lokasi/Ruangan Aset
# [x] : Kondisi Aset (Baik/Rusak/Hilang)
# [x] : Peminjaman Aset
# [x] : Pengembalian Aset
# [x] : Maintenance/Pemeliharaan
# [x] : Mutasi Aset
# [x] : Penghapusan Aset
# [x] : Penyusutan Aset
# [x] : Pengadaan Barang
# [x] : Stock Opname
# [x] : Barcode/QR Code/RFID Aset
# [x] : Laporan Inventaris
# [x] : Histori Aset
# XXX ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ #
# TODO : MODUL KEPEGAWAIAN/SDM
# [x] : Data Kepegawaian Lengkap
# [x] : Riwayat Pendidikan Pegawai
# [x] : Riwayat Jabatan
# [x] : Riwayat Golongan
# [x] : Riwayat Pelatihan/Diklat
# [x] : Sertifikasi
# [x] : Kinerja Pegawai
# [x] : Penilaian SKP
# [x] : Cuti Pegawai
# [x] : Izin/Sakit Pegawai
# [x] : Lembur
# [x] : Penggajian
# [x] : Tunjangan
# [x] : Potongan Gaji
# [x] : Slip Gaji
# [x] : BPJS/Asuransi
# [x] : Kontrak Kerja
# [x] : Perpanjangan Kontrak
# [x] : Promosi/Mutasi
# [x] : Pensiun
# [x] : Resign
# [x] : Arsip Kepegawaian Digital
# XXX ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ #
# TODO : MODUL MANAJEMEN SARANA PRASARANA
# [x] : Data Gedung/Bangunan
# [x] : Data Ruang Kelas
# [x] : Data Laboratorium
# [x] : Data Fasilitas Olahraga
# [x] : Data Sarana Ibadah
# [x] : Peminjaman Ruang/Fasilitas
# [x] : Jadwal Penggunaan Ruang
# [x] : Pemeliharaan Rutin
# [x] : Perbaikan/Renovasi
# [x] : Kondisi Sarana Prasarana
# [x] : Laporan Kerusakan
# [x] : Monitoring Kondisi
# [x] : Dokumentasi Foto
# XXX ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ #
# TODO : MODUL ALUMNI
# [x] : Database Alumni
# [x] : Data Tracer Study
# [x] : Pekerjaan Alumni
# [x] : Studi Lanjut Alumni
# [x] : Kartu Alumni
# [x] : Organisasi Alumni
# [x] : Kegiatan Alumni
# [x] : Donasi Alumni
# [x] : Testimoni Alumni
# [x] : Alumni Berprestasi
# [x] : Networking Alumni
# [x] : Job Portal untuk Alumni
# XXX ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ #
# TODO : MODUL LAPORAN & ANALYTICS
# [x] : Dashboard Kepala Madrasah
# [x] : Dashboard Wakil Kepala
# [x] : Dashboard Guru
# [x] : Dashboard Wali Kelas
# [x] : Dashboard Siswa
# [x] : Dashboard Orang Tua
# [x] : Laporan Bulanan
# [x] : Laporan Semester
# [x] : Laporan Tahunan
# [x] : Laporan Emis
# [x] : Laporan Dapodik
# [x] : Analytics Akademik
# [x] : Analytics Keuangan
# [x] : Analytics Kehadiran
# [x] : Export Data (Excel/PDF)
# [x] : Print Reports
# XXX ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ #
# TODO : MODUL INTEGRASI & API
# [x] : Integrasi Dapodik
# [x] : Integrasi Emis
# [x] : Integrasi Payment Gateway
# [x] : Integrasi WhatsApp API
# [x] : Integrasi SMS Gateway
# [x] : Integrasi Email
# [x] : Integrasi Fingerprint/Absen
# [x] : API untuk Mobile Apps
# [x] : API untuk Website
# [x] : Webhook
# [x] : Single Sign-On (SSO)
# XXX ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ #
# TODO : MODUL MOBILE APPS
# [x] : Versi Mobile untuk Guru
# [x] : Versi Mobile untuk Siswa
# [x] : Versi Mobile untuk Orang Tua
# [x] : Push Notification
# [x] : Absensi via Mobile
# [x] : Akses Jadwal
# [x] : Akses Nilai
# [x] : Chat/Komunikasi
# [x] : Pembayaran via Mobile
# XXX ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ #
# TODO : MODUL KEAMANAN & SETTING
# [x] : Role & Permission
# [x] : User Management
# [x] : Activity Log
# [x] : Backup Database
# [x] : Restore Database
# [x] : Setting Aplikasi
# [x] : Setting Email
# [x] : Setting SMS
# [x] : Setting Payment Gateway
# [x] : Setting Notifikasi
# [x] : Maintenance Mode
# [x] : Two Factor Authentication
# [x] : Security Audit Log
```

---

## SOFT DELETES MODULES

### MODUL PRIMER (MASTER DATA)

1. InstansiPendidikan
2. Departemen
3. Jabatan
4. TahunPelajaran
5. Semester
6. Kurikulum
7. MataPelajaran
8. KompetensiDasar
9. Ekstrakurikuler
10. TahunEkstrakurikuler
11. PoinPelanggaran
12. PoinPrestasi
13. Jurusan
14. TingkatKelas
15. Kelas
16. RombonganBelajar
17. Ruangan
18. JamPelajaran
19. HariLibur
20. KalenderAkademik
21. Agama
22. StatusKepegawaian
23. GolonganKepegawaian
24. PendidikanTerakhir
25. KategoriInformasi
26. Informasi

### MODUL USER, SISWA & PEGAWAI

27. User
28. Siswa
29. OrangTua
30. DataKesehatan
31. AnggotaRombel
32. Pegawai
33. RiwayatPendidikan
34. RiwayatJabatan
35. RiwayatGolongan
36. RiwayatPelatihan
37. Sertifikasi
38. GuruKelas
39. GuruMataPelajaran
40. JadwalPelajaran
41. JadwalPresensi
42. JadwalPendaftaran

### MODUL WEBSITE & CMS

43. KategoriBlog
44. Tag
45. Blog
46. GaleriBlog
47. Komentar
48. Layanan
49. Program
50. GaleriProgram
51. GaleriFoto
52. Album
53. GaleriVideo
54. Halaman
55. Menu
56. Banner
57. Testimonial
58. PenghargaanMadrasah
59. Fasilitas
60. StrukturOrganisasi
61. Faq
62. KategoriFaq
63. Download
64. KategoriDownload
65. Alumni
66. KegiatanAlumni
67. PesertaKegiatanAlumni
68. DonasiAlumni
69. KalenderEvent

### MODUL PTSP (HELPDESK & TICKETING)

70. KategoriLayananPtsp
71. JenisLayanan
72. Ticket
73. TicketBalasan
74. TicketAttachment
75. Sla
76. KnowledgeBase
77. KategoriKnowledgeBase
78. TemplateBalasan
79. RatingLayanan

### MODUL KEUANGAN

80. JenisPembayaran
81. TahunKeuangan
82. PeriodePembayaran
83. Tarif
84. TagihanSiswa
85. Pembayaran
86. Cicilan
87. Diskon
88. Beasiswa
89. PenerimaBeasiswa
90. Kwitansi
91. RekeningBank
92. MetodePembayaran
93. KasMasuk
94. KasKeluar
95. KategoriPengeluaran
96. Anggaran
97. RealisasiAnggaran
98. JurnalKeuangan
99. BukuBesar

### MODUL RAPOR & PENILAIAN

100. JenisPenilaian
101. BobotPenilaian
102. Nilai
103. NilaiSikap
104. NilaiEkstrakurikuler
105. PesertaEkstrakurikuler
106. Rapor
107. NilaiRapor
108. PrestasiRapor
109. Leger
110. KenaikanKelas
111. Kelulusan
112. TemplateRapor
113. DistribusiNilai
114. ValidasiNilai
115. CapaianPembelajaran
116. ProyekP5
117. NilaiP5

### MODUL PERPUSTAKAAN

118. KategoriBuku
119. RakBuku
120. Penerbit
121. Pengarang
122. Buku
123. EksemplarBuku
124. AnggotaPerpustakaan
125. Peminjaman
126. PerpanjanganPeminjaman
127. DendaPerpustakaan
128. ReservesiBuku
129. KunjunganPerpustakaan
130. PengadaanBuku
131. ItemPengadaanBuku
132. InventarisasiBuku
133. ItemInventarisasiBuku

### MODUL KONSELING (BK)

134. JenisLayananBk
135. BidangLayananBk
136. KategoriMasalah
137. GuruBk
138. JadwalKonseling
139. Konseli
140. SesiKonseling
141. CatatanKasus
142. TindakLanjutKonseling
143. Asesmen
144. JenisAsesmen
145. Angket
146. PertanyaanAngket
147. HomeVisit
148. PanggilanOrangTua
149. RujukanKonseling
150. BimbinganKarir
151. KolaborasiGuru
152. DokumentasiKonseling
153. LaporanKonseling
154. EvaluasiLayananBk

### MODUL PRESENSI & MONITORING

155. PresensiSiswa
156. PresensiPegawai
157. PresensiEkstrakurikuler
158. IzinSiswa
159. IzinPegawai
160. CutiPegawai
161. PelanggaranSiswa
162. PrestasiSiswa
163. AlertKehadiran
164. DevicePresensi
165. SettingToleransi

### MODUL ASESMEN & UJIAN (CBT)

166. KategoriSoal
167. BankSoal
168. PaketSoal
169. PaketSoalDetail
170. Ujian
171. JadwalUjian
172. RuangUjian
173. PesertaUjian
174. HasilUjian
175. PengawasUjian
176. Remedial
177. Pengayaan
178. KartuUjian
179. BeritaAcaraUjian
180. SettingUjian

### MODUL BUKU INDUK & PPDB

181. BukuInduk
182. RiwayatPendidikanSiswa
183. RiwayatKesehatanSiswa
184. RiwayatPrestasiSiswa
185. RiwayatBeasiswaSiswa
186. DokumenSiswa
187. MutasiSiswa
188. NomorPesertaUjian
189. NomorIjazah
190. Pendaftaran
191. DokumenPendaftaran
192. PembayaranPendaftaran
193. TesSeleksi
194. NilaiSeleksi
195. PengumumanPpdb
196. HasilSeleksi
197. DaftarUlang

### MODUL SURAT, JURNAL & INVENTORY

198. KategoriSurat
199. Surat
200. DisposisiSurat
201. LampiranSurat
202. TemplateSurat
203. NomorSurat
204. SuratTugas
205. PesertaSuratTugas
206. SuratKeterangan
207. Legalisir
208. JurnalMengajar
209. JurnalKegiatanPegawai
210. LaporanKinerja
211. KategoriAset
212. Aset
213. PeminjamanAset
214. MaintenanceAset
215. MutasiAset
216. PenghapusanAset
217. StockOpnameAset
218. ItemStockOpnameAset

### MODUL KEPEGAWAIAN & LAPORAN

219. KomponenGaji
220. Penggajian
221. DetailPenggajian
222. KontrakPegawai
223. PenilaianKinerjaPegawai
224. LemburPegawai
225. PromosiMutasiPegawai
226. PensiunPegawai
227. ResignPegawai
228. SaranaPrasarana
229. PeminjamanSarpras
230. MaintenanceSarpras
231. LaporanBulanan
232. LaporanEmis
233. PaymentGatewayConfig
234. MessagingGatewayConfig

**TOTAL: 234 Model dengan Softdeletes**

---

## NAVIGASI MADRASAH SUPER APP

```bash
📊 DASHBOARD
├─ Dashboard Kepala Madrasah
├─ Dashboard Wakil Kepala
├─ Dashboard Guru
├─ Dashboard Wali Kelas
├─ Dashboard Siswa
└─ Dashboard Orang Tua

👥 MANAJEMEN PENGGUNA
├─ User Management
├─ Role & Permission
├─ Activity Log
└─ Security Audit Log

🎓 DATA KESISWAAN
├─ Data Siswa
│  ├─ Daftar Siswa
│  ├─ Tambah Siswa
│  ├─ Import Siswa
│  ├─ Export Siswa
│  └─ Cetak Kartu Siswa
├─ Data Orang Tua/Wali
├─ Data Kesehatan Siswa
├─ Rombongan Belajar
│  ├─ Daftar Rombel
│  ├─ Anggota Rombel
│  └─ Wali Kelas
├─ Kenaikan Kelas
├─ Kelulusan
├─ Status Siswa
│  ├─ Siswa Aktif
│  ├─ Siswa Lulus
│  ├─ Siswa Pindah
│  ├─ Siswa DO
│  └─ Siswa Alumni
└─ Mutasi Siswa

👨‍🏫 DATA KEPEGAWAIAN
├─ Data Pegawai
│  ├─ Daftar Pegawai
│  ├─ Tambah Pegawai
│  ├─ Import Pegawai
│  └─ Export Pegawai
├─ Departemen
├─ Jabatan
├─ Status Kepegawaian
├─ Golongan Kepegawaian
├─ Guru Mata Pelajaran
├─ Guru Kelas/Wali Kelas
├─ Guru BK
├─ Riwayat Kepegawaian
│  ├─ Riwayat Pendidikan
│  ├─ Riwayat Jabatan
│  ├─ Riwayat Golongan
│  ├─ Riwayat Pelatihan
│  └─ Sertifikasi
├─ Kontrak Pegawai
├─ Promosi & Mutasi
├─ Pensiun
└─ Resign

📚 AKADEMIK
├─ Kurikulum
├─ Tahun Pelajaran
├─ Semester
├─ Mata Pelajaran
│  ├─ Daftar Mata Pelajaran
│  ├─ Kompetensi Dasar
│  ├─ Capaian Pembelajaran
│  └─ KKM
├─ Tingkat Kelas
├─ Kelas
├─ Jurusan
├─ Kalender Akademik
├─ Hari Libur
└─ Jam Pelajaran

📅 JADWAL
├─ Jadwal Pelajaran
│  ├─ Buat Jadwal
│  ├─ Lihat Jadwal
│  ├─ Cetak Jadwal
│  └─ Jadwal Per Guru
├─ Jadwal Presensi
├─ Jadwal Ujian
└─ Jadwal Pendaftaran (PPDB)

✅ PRESENSI
├─ Presensi Siswa
│  ├─ Presensi Harian
│  ├─ Presensi Per Mapel
│  ├─ Rekap Harian
│  ├─ Rekap Bulanan
│  └─ Rekap Semester
├─ Presensi Pegawai
│  ├─ Presensi Harian
│  ├─ Rekap Harian
│  ├─ Rekap Bulanan
│  └─ Rekap Tahunan
├─ Presensi Ekstrakurikuler
├─ Izin & Dispensasi
│  ├─ Izin Siswa
│  └─ Izin Pegawai
├─ Cuti Pegawai
├─ Monitoring Kehadiran
│  ├─ Dashboard Real-time
│  ├─ Alert Kehadiran
│  └─ Laporan Kehadiran
└─ Setting Presensi
   ├─ Device Presensi
   ├─ Toleransi
   └─ Log Presensi

📝 PENILAIAN & RAPOR
├─ Input Nilai
│  ├─ Nilai Pengetahuan
│  ├─ Nilai Keterampilan
│  └─ Nilai Sikap
├─ Jenis Penilaian
├─ Bobot Penilaian
├─ Validasi Nilai
├─ Distribusi Nilai
├─ Rapor
│  ├─ Generate Rapor
│  ├─ Cetak Rapor
│  ├─ E-Rapor
│  └─ Template Rapor
├─ Leger Nilai
├─ Proyek P5
│  ├─ Data Proyek
│  └─ Nilai P5
└─ Laporan Capaian Pembelajaran

📋 UJIAN & ASESMEN (CBT)
├─ Bank Soal
│  ├─ Daftar Soal
│  ├─ Tambah Soal
│  ├─ Import Soal
│  ├─ Kategori Soal
│  └─ Tingkat Kesulitan
├─ Paket Soal
│  ├─ Buat Paket
│  └─ Kelola Paket
├─ Ujian
│  ├─ Daftar Ujian
│  ├─ Buat Ujian
│  ├─ Jadwal Ujian
│  ├─ Ruang Ujian
│  └─ Token Ujian
├─ Peserta Ujian
│  ├─ Daftar Peserta
│  └─ Kartu Ujian
├─ Pengawas Ujian
├─ Monitoring Ujian
├─ Hasil Ujian
│  ├─ Rekap Nilai
│  ├─ Ranking
│  └─ Analisis Butir Soal
├─ Remedial & Pengayaan
├─ Berita Acara Ujian
└─ Setting Ujian

🏆 EKSTRAKURIKULER
├─ Data Ekstrakurikuler
├─ Tahun Ekstrakurikuler
├─ Pembimbing Ekstrakurikuler
├─ Peserta Ekstrakurikuler
├─ Presensi Ekstrakurikuler
└─ Nilai Ekstrakurikuler

⚠️ PELANGGARAN & PRESTASI
├─ Poin Pelanggaran
├─ Data Pelanggaran Siswa
├─ Sanksi Pelanggaran
├─ Poin Prestasi
└─ Data Prestasi Siswa

🧠 BIMBINGAN KONSELING (BK)
├─ Data Konseli
├─ Jenis Layanan BK
├─ Bidang Layanan BK
├─ Kategori Masalah
├─ Guru BK/Konselor
├─ Jadwal Konseling
├─ Sesi Konseling
├─ Catatan Kasus
├─ Tindak Lanjut
├─ Asesmen Siswa
│  ├─ Jenis Asesmen
│  ├─ Angket/Kuesioner
│  └─ Hasil Asesmen
├─ Home Visit
├─ Panggilan Orang Tua
├─ Rujukan
├─ Bimbingan Karir
├─ Kolaborasi dengan Guru
├─ Dokumentasi
├─ Laporan BK
└─ Evaluasi Layanan

💰 KEUANGAN
├─ Master Keuangan
│  ├─ Jenis Pembayaran
│  ├─ Tahun Keuangan
│  ├─ Periode Pembayaran
│  ├─ Tarif/Biaya
│  ├─ Rekening Bank
│  └─ Metode Pembayaran
├─ Tagihan Siswa
│  ├─ Generate Tagihan
│  ├─ Daftar Tagihan
│  └─ Notifikasi Tagihan
├─ Pembayaran
│  ├─ Input Pembayaran
│  ├─ Verifikasi Pembayaran
│  ├─ Riwayat Pembayaran
│  └─ Kwitansi
├─ Cicilan/Angsuran
├─ Tunggakan
├─ Diskon/Potongan
├─ Beasiswa
│  ├─ Data Beasiswa
│  └─ Penerima Beasiswa
├─ Kas & Bank
│  ├─ Kas Masuk
│  ├─ Kas Keluar
│  └─ Saldo
├─ Kategori Pengeluaran
├─ Anggaran (RKAS/RKAM)
│  ├─ Perencanaan Anggaran
│  ├─ Realisasi Anggaran
│  └─ Monitoring Anggaran
├─ Jurnal Keuangan
├─ Buku Besar
├─ Laporan Keuangan
│  ├─ Laporan Pemasukan
│  ├─ Laporan Pengeluaran
│  ├─ Laporan Laba Rugi
│  ├─ Neraca
│  └─ Arus Kas
└─ Rekap Pembayaran

📖 PERPUSTAKAAN
├─ Master Perpustakaan
│  ├─ Kategori Buku
│  ├─ Rak Buku
│  ├─ Penerbit
│  └─ Pengarang
├─ Koleksi Buku
│  ├─ Daftar Buku
│  ├─ Tambah Buku
│  ├─ Eksemplar Buku
│  ├─ Barcode/QR Code
│  └─ Stok Buku
├─ Anggota Perpustakaan
│  ├─ Daftar Anggota
│  └─ Kartu Anggota
├─ Sirkulasi
│  ├─ Peminjaman
│  ├─ Pengembalian
│  ├─ Perpanjangan
│  └─ Reservasi
├─ Denda
├─ Kunjungan Perpustakaan
├─ Pengadaan Buku
├─ Inventarisasi Buku
├─ Katalog Digital (OPAC)
├─ Statistik
│  ├─ Buku Terpopuler
│  └─ Peminjam Teraktif
└─ Laporan Perpustakaan

📄 BUKU INDUK
├─ Data Buku Induk
├─ Riwayat Pendidikan Siswa
├─ Riwayat Kesehatan
├─ Riwayat Prestasi
├─ Riwayat Beasiswa
├─ Dokumen Siswa
├─ Nomor Peserta Ujian
├─ Nomor Ijazah & SKHUN
├─ Cetak Buku Induk
└─ Arsip Digital

📝 PPDB (PENERIMAAN SISWA BARU)
├─ Jadwal PPDB
│  ├─ Gelombang Pendaftaran
│  ├─ Jalur Pendaftaran
│  └─ Kuota
├─ Pendaftaran
│  ├─ Form Pendaftaran Online
│  ├─ Daftar Pendaftar
│  └─ Tracking Status
├─ Verifikasi Berkas
├─ Dokumen Pendaftaran
├─ Pembayaran Pendaftaran
├─ Tes Seleksi
│  ├─ Jadwal Tes
│  └─ Nilai Seleksi
├─ Pengumuman
│  ├─ Hasil Seleksi
│  └─ Cetak Pengumuman
├─ Daftar Ulang
├─ Statistik PPDB
└─ Laporan PPDB

📧 SURAT MENYURAT
├─ Kategori Surat
├─ Surat Masuk
│  ├─ Agenda Surat Masuk
│  ├─ Input Surat Masuk
│  └─ Disposisi
├─ Surat Keluar
│  ├─ Agenda Surat Keluar
│  ├─ Buat Surat Keluar
│  └─ Nomor Surat
├─ Surat Internal
├─ Jenis Surat
│  ├─ Surat Tugas
│  ├─ Surat Keterangan
│  ├─ Surat Izin
│  ├─ Surat Undangan
│  ├─ Surat Keputusan (SK)
│  └─ Surat Edaran
├─ Template Surat
├─ Legalisir
├─ Arsip Surat
├─ Pencarian Surat
├─ Tracking Surat
└─ Laporan Surat

📊 JURNAL & LAPORAN KINERJA
├─ Jurnal Mengajar
│  ├─ Input Jurnal
│  ├─ Validasi Jurnal
│  └─ Rekap Jurnal
├─ Jurnal Kegiatan Pegawai
├─ Laporan Kinerja
│  ├─ Harian
│  ├─ Mingguan
│  ├─ Bulanan
│  ├─ Semester
│  └─ Tahunan
├─ Penilaian Kinerja (PKG)
├─ Beban Kerja Guru
└─ Dashboard Monitoring

💼 KEPEGAWAIAN
├─ Penggajian
│  ├─ Komponen Gaji
│  ├─ Generate Gaji
│  ├─ Slip Gaji
│  └─ Rekap Gaji
├─ Tunjangan & Potongan
├─ Lembur
├─ BPJS
├─ Pajak (PPh 21)
├─ Kontrak Kerja
├─ Penilaian Kinerja
├─ Cuti
├─ Izin & Sakit
└─ Laporan Kepegawaian

🏢 INVENTARIS & ASET
├─ Kategori Aset
├─ Data Aset
│  ├─ Daftar Aset
│  ├─ Tambah Aset
│  ├─ Barcode/QR Aset/RFID
│  └─ Lokasi Aset
├─ Kondisi Aset
├─ Peminjaman Aset
├─ Maintenance Aset
├─ Mutasi Aset
├─ Penghapusan Aset
├─ Penyusutan Aset
├─ Stock Opname
└─ Laporan Inventaris

🏗️ SARANA PRASARANA
├─ Data Sarana Prasarana
│  ├─ Gedung
│  ├─ Ruang Kelas
│  ├─ Laboratorium
│  ├─ Perpustakaan
│  ├─ Masjid/Musholla
│  ├─ Lapangan
│  └─ Fasilitas Lainnya
├─ Peminjaman Sarpras
├─ Jadwal Penggunaan
├─ Maintenance
├─ Kondisi Sarpras
├─ Laporan Kerusakan
└─ Monitoring Kondisi

🎓 DATA ALUMNI
├─ Database Alumni
├─ Tracer Study
├─ Organisasi Alumni
├─ Kegiatan Alumni
├─ Peserta Kegiatan
├─ Donasi Alumni
├─ Alumni Berprestasi
└─ Job Portal

🎫 PTSP (HELPDESK & TICKETING)
├─ Kategori Layanan
├─ Jenis Layanan
├─ Ticket/Pengaduan
│  ├─ Buat Ticket
│  ├─ Daftar Ticket
│  ├─ Ticket Saya
│  └─ Assignment
├─ Prioritas & Status
├─ SLA
├─ Balasan & Komentar
├─ Attachment
├─ Rating Layanan
├─ Knowledge Base
│  ├─ Artikel
│  └─ FAQ
├─ Template Balasan
├─ Dashboard Ticket
└─ Laporan PTSP

🌐 WEBSITE & CMS
├─ Blog/Artikel
│  ├─ Daftar Artikel
│  ├─ Tambah Artikel
│  ├─ Kategori Blog
│  ├─ Tag
│  └─ Komentar
├─ Halaman Statis
├─ Menu Management
├─ Banner/Slider
├─ Galeri
│  ├─ Album Foto
│  ├─ Galeri Foto
│  └─ Galeri Video
├─ Layanan
├─ Program
├─ Testimonial
├─ Penghargaan
├─ Fasilitas
├─ Struktur Organisasi
├─ FAQ
├─ Download Center
└─ Kalender Event

📊 LAPORAN & ANALYTICS
├─ Dashboard Analytics
├─ Laporan Bulanan
├─ Laporan Semester
├─ Laporan Tahunan
├─ Laporan Emis
├─ Laporan Dapodik
├─ Laporan Akademik
├─ Laporan Keuangan
├─ Laporan Kehadiran
├─ Laporan Kepegawaian
├─ Laporan Kesiswaan
├─ Export Data
│  ├─ Excel
│  ├─ PDF
│  └─ CSV
└─ Print Reports

📱 INTEGRASI
├─ Integrasi Dapodik
├─ Integrasi Emis
├─ Payment Gateway
│  ├─ Midtrans
│  ├─ Xendit
│  └─ Lainnya
├─ SMS Gateway
├─ WhatsApp API
├─ Email Service
├─ Fingerprint/Absen Device
├─ API Management
└─ Webhook

📢 NOTIFIKASI & KOMUNIKASI
├─ Notifikasi Sistem
├─ Push Notification
├─ Email Notifikasi
├─ SMS Notifikasi
├─ WhatsApp Notifikasi
├─ Pengumuman
└─ Broadcast Message

📋 INFORMASI & PENGUMUMAN
├─ Kategori Informasi
├─ Daftar Informasi
├─ Tambah Informasi
├─ Prioritas Informasi
├─ Published/Unpublished
└─ Pinned Information

⚙️ PENGATURAN
├─ Setting Aplikasi
│  ├─ Profil Madrasah
│  ├─ Logo & Identitas
│  ├─ Kontak
│  └─ Visi Misi
├─ Setting Email
├─ Setting SMS/WhatsApp
├─ Setting Payment Gateway
├─ Setting Notifikasi
├─ Setting Backup
│  ├─ Auto Backup
│  ├─ Backup Manual
│  ├─ Restore
│  └─ Log Backup
├─ Maintenance Mode
├─ Security
│  ├─ Two Factor Authentication
│  ├─ Password Policy
│  └─ Session Management
└─ Log Aktivitas

👤 PROFIL & AKUN
├─ Profil Saya
├─ Edit Profil
├─ Ganti Password
├─ Ganti Foto
├─ Notifikasi Saya
└─ Logout
```

---

## NAVIGASI DETAIL BERDASARKAN ROLE

```bash
👑 ROLE: KEPALA MADRASAH
├─ Dashboard Eksekutif
│  ├─ Ringkasan Kesiswaan
│  ├─ Ringkasan Kepegawaian
│  ├─ Ringkasan Keuangan
│  ├─ Ringkasan Akademik
│  ├─ Grafik Kehadiran
│  ├─ Grafik Prestasi
│  └─ Alert & Notifikasi
├─ Approval Center
│  ├─ Approval Anggaran
│  ├─ Approval Pengeluaran
│  ├─ Approval Cuti
│  ├─ Approval Surat
│  ├─ Approval Mutasi
│  └─ Approval Lainnya
├─ Monitoring
│  ├─ Monitoring Pembelajaran
│  ├─ Monitoring Keuangan
│  ├─ Monitoring Kepegawaian
│  ├─ Monitoring Kehadiran
│  └─ Monitoring Sarana
├─ Laporan Strategis
│  ├─ Laporan ke Yayasan
│  ├─ Laporan ke Kemenag
│  ├─ Laporan EMIS
│  ├─ Laporan Dapodik
│  └─ Laporan Akreditasi
└─ E-Signature
   ├─ Dokumen Perlu TTD
   ├─ Riwayat TTD
   └─ Setting TTD Digital

📚 ROLE: WAKIL KEPALA KURIKULUM
├─ Dashboard Kurikulum
│  ├─ Capaian Pembelajaran
│  ├─ Keterlaksanaan Jadwal
│  ├─ Rekap Jurnal Mengajar
│  └─ Monitoring Penilaian
├─ Manajemen Kurikulum
│  ├─ Struktur Kurikulum
│  ├─ Kalender Pendidikan
│  ├─ Pembagian Tugas Mengajar
│  └─ Beban Mengajar
├─ Jadwal Pembelajaran
│  ├─ Penyusunan Jadwal
│  ├─ Perubahan Jadwal
│  └─ Jadwal Pengganti
├─ Monitoring Pembelajaran
│  ├─ Jurnal Mengajar
│  ├─ RPP/Modul Ajar
│  ├─ Penilaian
│  └─ Rapor
├─ Ujian & Asesmen
│  ├─ Jadwal Ujian
│  ├─ Kisi-kisi Soal
│  ├─ Pengawas Ujian
│  └─ Analisis Hasil
└─ Pengembangan Guru
   ├─ Pelatihan
   ├─ Workshop
   └─ Lesson Study

👥 ROLE: WAKIL KEPALA KESISWAAN
├─ Dashboard Kesiswaan
│  ├─ Data Siswa Aktif
│  ├─ Grafik Kehadiran
│  ├─ Pelanggaran & Prestasi
│  └─ Ekstrakurikuler
├─ Pembinaan Siswa
│  ├─ Tata Tertib
│  ├─ Poin Pelanggaran
│  ├─ Sanksi & Pembinaan
│  └─ Reward Prestasi
├─ OSIS & Ekstrakurikuler
│  ├─ Kepengurusan OSIS
│  ├─ Program Kerja
│  ├─ Kegiatan OSIS
│  └─ Manajemen Ekskul
├─ Kegiatan Siswa
│  ├─ Event/Lomba
│  ├─ Karya Wisata
│  ├─ Outbound
│  └─ Pesantren Kilat
└─ Monitoring Kesiswaan
   ├─ Absensi Siswa
   ├─ Pelanggaran
   ├─ Prestasi
   └─ Laporan Berkala

🏢 ROLE: WAKIL KEPALA SARANA PRASARANA
├─ Dashboard Sarpras
│  ├─ Kondisi Fasilitas
│  ├─ Jadwal Maintenance
│  ├─ Peminjaman Ruang
│  └─ Pengadaan
├─ Inventaris
│  ├─ Aset Tanah & Bangunan
│  ├─ Aset Peralatan
│  ├─ Aset Elektronik
│  └─ Aset Furniture
├─ Maintenance
│  ├─ Jadwal Pemeliharaan
│  ├─ Laporan Kerusakan
│  ├─ Perbaikan
│  └─ Riwayat Maintenance
├─ Peminjaman Fasilitas
│  ├─ Pengajuan Pinjam
│  ├─ Approval
│  └─ Jadwal Penggunaan
├─ Pengadaan
│  ├─ Usulan Pengadaan
│  ├─ Proses Pengadaan
│  └─ Penerimaan Barang
└─ Stock Opname
   ├─ Jadwal Stock Opname
   ├─ Proses Opname
   └─ Laporan

💼 ROLE: WAKIL KEPALA HUMAS
├─ Dashboard Humas
│  ├─ Website Traffic
│  ├─ Social Media Analytics
│  ├─ Publikasi Terbaru
│  └─ Feedback Masyarakat
├─ Website Management
│  ├─ Konten Website
│  ├─ Berita & Artikel
│  ├─ Galeri
│  └─ Pengumuman
├─ Publikasi
│  ├─ Press Release
│  ├─ Brosur & Pamflet
│  ├─ Video Profil
│  └─ Social Media Content
├─ Hubungan Masyarakat
│  ├─ Kerjasama
│  ├─ MOU
│  ├─ Sponsorship
│  └─ Alumni Network
├─ PPDB
│  ├─ Promosi PPDB
│  ├─ Open House
│  ├─ Pendaftaran
│  └─ Monitoring
└─ Pengaduan Masyarakat
   ├─ Kotak Saran
   ├─ Complaint Handling
   └─ Laporan

👨‍🏫 ROLE: GURU MATA PELAJARAN
├─ Dashboard Guru
│  ├─ Jadwal Mengajar Hari Ini
│  ├─ Kelas Diampu
│  ├─ Tugas Pending
│  └─ Notifikasi
├─ Perangkat Pembelajaran
│  ├─ Silabus
│  ├─ RPP/Modul Ajar
│  ├─ Prota/Promes
│  ├─ Alur Tujuan Pembelajaran
│  └─ Media Pembelajaran
├─ Jurnal Mengajar
│  ├─ Input Jurnal Harian
│  ├─ Materi Pembelajaran
│  ├─ Metode & Media
│  └─ Refleksi
├─ Presensi Kelas
│  ├─ Absen Siswa
│  ├─ Rekap Kehadiran
│  └─ Siswa Tidak Hadir
├─ Penilaian
│  ├─ Input Nilai Harian
│  ├─ Input Nilai UTS/UAS
│  ├─ Nilai Praktik
│  ├─ Nilai Projek
│  └─ Rekap Nilai
├─ Bank Soal
│  ├─ Koleksi Soal
│  ├─ Tambah Soal
│  └─ Paket Soal
├─ Ujian Online
│  ├─ Buat Ujian
│  ├─ Monitoring Ujian
│  └─ Koreksi & Penilaian
├─ Tugas & Materi
│  ├─ Upload Materi
│  ├─ Buat Tugas
│  ├─ Koreksi Tugas
│  └─ Feedback
└─ Rapor
   ├─ Input Deskripsi
   ├─ Validasi Nilai
   └─ Cetak Rapor

👨‍🏫 ROLE: WALI KELAS
├─ Dashboard Wali Kelas
│  ├─ Profil Kelas
│  ├─ Kehadiran Kelas
│  ├─ Prestasi Kelas
│  └─ Pelanggaran Kelas
├─ Data Siswa
│  ├─ Biodata Lengkap
│  ├─ Data Orang Tua
│  ├─ Riwayat Kesehatan
│  └─ Kontak Darurat
├─ Monitoring Akademik
│  ├─ Nilai Siswa
│  ├─ Kehadiran
│  ├─ Catatan Guru Mapel
│  └─ Progress Belajar
├─ Monitoring Sikap
│  ├─ Penilaian Sikap
│  ├─ Pelanggaran
│  ├─ Prestasi
│  └─ Pembinaan
├─ Rapor
│  ├─ Catatan Wali Kelas
│  ├─ Rekomendasi
│  ├─ Kenaikan Kelas
│  └─ Cetak Rapor
├─ Komunikasi
│  ├─ Chat Orang Tua
│  ├─ Panggilan Orang Tua
│  ├─ Broadcast Info
│  └─ Laporan ke Ortu
└─ Administrasi Kelas
   ├─ Denah Duduk
   ├─ Jadwal Piket
   ├─ Kas Kelas
   └─ Inventaris Kelas

🧠 ROLE: GURU BK/KONSELOR
├─ Dashboard BK
│  ├─ Konseli Aktif
│  ├─ Jadwal Konseling
│  ├─ Kasus Pending
│  └─ Statistik Layanan
├─ Data Konseli
│  ├─ Profil Siswa
│  ├─ Riwayat Konseling
│  ├─ Status Konseli
│  └─ Assessment
├─ Layanan Konseling
│  ├─ Jadwal Saya
│  ├─ Sesi Konseling
│  ├─ Konseling Individu
│  ├─ Konseling Kelompok
│  └─ Konseling Klasikal
├─ Manajemen Kasus
│  ├─ Data Kasus
│  ├─ Kategori Masalah
│  ├─ Diagnosis
│  └─ Tindak Lanjut
├─ Asesmen
│  ├─ Tes Psikologi
│  ├─ Sosiometri
│  ├─ Angket
│  └─ Observasi
├─ Home Visit
│  ├─ Jadwal Home Visit
│  ├─ Laporan Kunjungan
│  └─ Dokumentasi
├─ Bimbingan Karir
│  ├─ Tes Minat Bakat
│  ├─ Informasi Karir
│  ├─ Studi Lanjut
│  └─ Rekomendasi
├─ Kolaborasi
│  ├─ Kolaborasi Guru
│  ├─ Kolaborasi Ortu
│  └─ Rujukan
└─ Laporan BK
   ├─ Laporan Layanan
   ├─ Statistik
   └─ Evaluasi

👨‍💼 ROLE: TATA USAHA (TU)
├─ Dashboard TU
│  ├─ Surat Masuk/Keluar
│  ├─ Pengajuan Pending
│  ├─ Tugas Hari Ini
│  └─ Notifikasi
├─ Administrasi Siswa
│  ├─ Pendaftaran
│  ├─ Data Siswa
│  ├─ Mutasi
│  ├─ Legalisir
│  └─ Surat Keterangan
├─ Administrasi Pegawai
│  ├─ Data Pegawai
│  ├─ Absensi
│  ├─ Cuti & Izin
│  └─ Surat Tugas
├─ Surat Menyurat
│  ├─ Surat Masuk
│  ├─ Surat Keluar
│  ├─ Disposisi
│  ├─ Arsip
│  └─ Nomor Surat
├─ Persuratan Siswa
│  ├─ Surat Keterangan
│  ├─ Surat Rekomendasi
│  ├─ Legalisir Dokumen
│  └─ Cetak Kartu
├─ Kepegawaian
│  ├─ SK Pegawai
│  ├─ Kontrak
│  ├─ BPJS
│  └─ Arsip Kepegawaian
└─ Inventaris
   ├─ Pencatatan Aset
   ├─ Peminjaman
   └─ Laporan

💰 ROLE: BENDAHARA
├─ Dashboard Keuangan
│  ├─ Saldo Kas
│  ├─ Kas Masuk Hari Ini
│  ├─ Kas Keluar Hari Ini
│  ├─ Tunggakan
│  └─ Grafik Keuangan
├─ Penerimaan
│  ├─ Input Pembayaran SPP
│  ├─ Pembayaran Lainnya
│  ├─ Verifikasi Transfer
│  └─ Cetak Kwitansi
├─ Pengeluaran
│  ├─ Input Pengeluaran
│  ├─ Approval Pengeluaran
│  ├─ Kategori Pengeluaran
│  └─ Bukti Pengeluaran
├─ Kas & Bank
│  ├─ Kas Tunai
│  ├─ Kas Bank
│  ├─ Transfer Antar Kas
│  └─ Rekonsiliasi
├─ Tagihan
│  ├─ Generate Tagihan
│  ├─ Kirim Notifikasi
│  ├─ Monitor Tunggakan
│  └─ Reminder Otomatis
├─ Laporan Keuangan
│  ├─ Buku Kas
│  ├─ Jurnal
│  ├─ Neraca
│  ├─ Laba Rugi
│  └─ Arus Kas
├─ Anggaran
│  ├─ RKAS
│  ├─ Realisasi
│  └─ Monitoring
└─ Penggajian
   ├─ Generate Slip Gaji
   ├─ Transfer Gaji
   └─ Rekap Gaji

📚 ROLE: PUSTAKAWAN
├─ Dashboard Perpustakaan
│  ├─ Statistik Hari Ini
│  ├─ Buku Dipinjam
│  ├─ Buku Terlambat
│  └─ Kunjungan
├─ Katalog
│  ├─ Daftar Buku
│  ├─ Tambah Buku
│  ├─ Edit Buku
│  ├─ Cetak Barcode
│  └─ Stok Buku
├─ Sirkulasi
│  ├─ Peminjaman Buku
│  ├─ Pengembalian Buku
│  ├─ Perpanjangan
│  ├─ Reservasi
│  └─ Scan Barcode
├─ Anggota
│  ├─ Daftar Anggota
│  ├─ Pendaftaran
│  ├─ Cetak Kartu
│  └─ Status Anggota
├─ Denda
│  ├─ Hitung Denda
│  ├─ Pembayaran Denda
│  └─ Rekap Denda
├─ Kunjungan
│  ├─ Input Kunjungan
│  └─ Rekap Kunjungan
├─ Pengadaan
│  ├─ Usulan Buku
│  ├─ Pembelian
│  └─ Penerimaan
└─ Laporan
   ├─ Statistik Peminjaman
   ├─ Buku Populer
   └─ Laporan Berkala

🎓 ROLE: SISWA
├─ Dashboard Siswa
│  ├─ Profil Saya
│  ├─ Jadwal Hari Ini
│  ├─ Pengumuman
│  └─ Notifikasi
├─ Akademik
│  ├─ Jadwal Pelajaran
│  ├─ Materi Pembelajaran
│  ├─ Tugas
│  ├─ Nilai Saya
│  └─ Rapor
├─ Presensi
│  ├─ Absen Mandiri
│  ├─ Riwayat Kehadiran
│  ├─ Rekap Absensi
│  └─ Izin/Sakit
├─ Ujian
│  ├─ Jadwal Ujian
│  ├─ Ujian Online (CBT)
│  ├─ Hasil Ujian
│  └─ Kartu Ujian
├─ Ekstrakurikuler
│  ├─ Ekskul Saya
│  ├─ Jadwal Ekskul
│  └─ Nilai Ekskul
├─ Perpustakaan
│  ├─ Katalog Buku
│  ├─ Pinjaman Saya
│  ├─ Reservasi
│  └─ Riwayat
├─ Keuangan
│  ├─ Tagihan Saya
│  ├─ Riwayat Pembayaran
│  ├─ Pembayaran Online
│  └─ Cetak Kwitansi
├─ Konseling
│  ├─ Jadwal Konseling
│  ├─ Buat Janji
│  └─ Riwayat Konseling
├─ Layanan
│  ├─ Pengajuan Surat
│  ├─ Legalisir
│  ├─ Pengaduan
│  └─ Status Pengajuan
└─ Profil & Akun
   ├─ Edit Profil
   ├─ Ganti Password
   ├─ Ganti Foto
   └─ Kontak Darurat

👨‍👩‍👧 ROLE: ORANG TUA/WALI
├─ Dashboard Orang Tua
│  ├─ Info Anak
│  ├─ Pengumuman Sekolah
│  ├─ Jadwal Anak
│  └─ Notifikasi
├─ Data Anak
│  ├─ Biodata
│  ├─ Riwayat Kesehatan
│  └─ Data Orang Tua
├─ Akademik Anak
│  ├─ Jadwal Pelajaran
│  ├─ Nilai Anak
│  ├─ Rapor
│  ├─ Tugas
│  └─ Materi
├─ Kehadiran Anak
│  ├─ Absensi Harian
│  ├─ Rekap Kehadiran
│  ├─ Notifikasi Absen
│  └─ Izin Sakit
├─ Prestasi & Pelanggaran
│  ├─ Prestasi Anak
│  ├─ Pelanggaran
│  └─ Pembinaan
├─ Keuangan
│  ├─ Tagihan
│  ├─ Pembayaran Online
│  ├─ Riwayat Bayar
│  └─ Download Kwitansi
├─ Konseling
│  ├─ Konsultasi dengan BK
│  ├─ Jadwal Pertemuan
│  └─ Riwayat Konseling
├─ Komunikasi
│  ├─ Chat Wali Kelas
│  ├─ Chat Guru BK
│  ├─ Pesan ke Sekolah
│  └─ Panggilan Orang Tua
└─ Layanan
   ├─ Pengaduan
   ├─ Saran
   └─ Tracking Status

🔐 ROLE: SUPER ADMIN/IT
├─ Dashboard System
│  ├─ Server Status
│  ├─ Database Status
│  ├─ User Online
│  └─ System Health
├─ User Management
│  ├─ Daftar User
│  ├─ Tambah User
│  ├─ Edit User
│  ├─ Suspend User
│  └─ Bulk Import
├─ Role & Permission
│  ├─ Manage Roles
│  ├─ Manage Permissions
│  ├─ Assign Permissions
│  └─ Role Hierarchy
├─ Institusi Management
│  ├─ Daftar Instansi
│  ├─ Setting Instansi
│  └─ Multi-Tenant Config
├─ System Configuration
│  ├─ General Settings
│  ├─ Email Settings
│  ├─ SMS Settings
│  ├─ Payment Gateway
│  └─ API Configuration
├─ Security
│  ├─ Firewall Rules
│  ├─ IP Whitelist/Blacklist
│  ├─ 2FA Management
│  ├─ Password Policy
│  └─ Session Management
├─ Database
│  ├─ Backup Database
│  ├─ Restore Database
│  ├─ Migration
│  ├─ Seeder
│  └─ Query Monitor
├─ Logs & Monitoring
│  ├─ Activity Log
│  ├─ Error Log
│  ├─ Access Log
│  ├─ API Log
│  └─ Performance Monitor
├─ Maintenance
│  ├─ Clear Cache
│  ├─ Optimize Database
│  ├─ Clear Sessions
│  ├─ Maintenance Mode
│  └─ System Update
└─ Developer Tools
   ├─ API Documentation
   ├─ Webhook Testing
   ├─ Queue Monitor
   ├─ Job Scheduler
   └─ Debug Tools

📱 MOBILE APP MENU
├─ Home
├─ Jadwal
├─ Presensi
│  ├─ Check-in
│  ├─ Check-out
│  └─ Riwayat
├─ Nilai
├─ Tugas
├─ Materi
├─ Ujian
├─ Tagihan & Pembayaran
├─ Perpustakaan
├─ Notifikasi
└─ Profil

🔔 NOTIFIKASI CENTER (SEMUA ROLE)
├─ Semua Notifikasi
├─ Belum Dibaca
├─ Telah Dibaca
├─ Notifikasi Penting
├─ Filter Notifikasi
│  ├─ Akademik
│  ├─ Keuangan
│  ├─ Kepegawaian
│  ├─ Kesiswaan
│  └─ Sistem
└─ Setting Notifikasi
   ├─ Email Notification
   ├─ Push Notification
   ├─ SMS Notification
   └─ WhatsApp Notification

🔍 PENCARIAN GLOBAL (SEMUA ROLE)
├─ Pencarian Cepat
├─ Filter Lanjutan
├─ Recent Search
└─ Bookmark/Favorit

📊 WIDGET DASHBOARD (CUSTOMIZABLE)
├─ Statistik Card
├─ Grafik/Chart
│  ├─ Line Chart
│  ├─ Bar Chart
│  ├─ Pie Chart
│  └─ Area Chart
├─ Tabel Data
├─ Kalender
├─ To-Do List
├─ Quick Action
├─ Recent Activity
└─ Custom Widget

🎨 TAMPILAN & TEMA
├─ Light Mode
├─ Dark Mode
├─ Custom Theme
├─ Font Size
├─ Layout Settings
│  ├─ Sidebar Position
│  ├─ Navbar Style
│  └─ Content Width
└─ Language
   ├─ Indonesia
   ├─ English
   └─ Arab

❓ BANTUAN & SUPPORT
├─ User Guide
├─ Video Tutorial
├─ FAQ
├─ Knowledge Base
├─ Live Chat Support
├─ Ticket Support
├─ Feedback
└─ What's New
   ├─ Update Log
   └─ Release Notes
```

## DAFTAR RESOURCE, WIDGET, PAGES, CLUSTERS & RELATION MANAGER

### CLUSTERS

```bash
php artisan make:filament-cluster MasterData
php artisan make:filament-cluster Kesiswaan
php artisan make:filament-cluster Kepegawaian
php artisan make:filament-cluster Akademik
php artisan make:filament-cluster Penilaian
php artisan make:filament-cluster Ujian
php artisan make:filament-cluster Presensi
php artisan make:filament-cluster Keuangan
php artisan make:filament-cluster Perpustakaan
php artisan make:filament-cluster Konseling
php artisan make:filament-cluster BukuInduk
php artisan make:filament-cluster PPDB
php artisan make:filament-cluster Surat
php artisan make:filament-cluster Inventaris
php artisan make:filament-cluster Sarpras
php artisan make:filament-cluster Website
php artisan make:filament-cluster PTSP
php artisan make:filament-cluster Laporan
php artisan make:filament-cluster Settings
```

### FULL RESOURCE (Generate Resource + Pages)

```bash
# ========================================================== #
# CLUSTER: MASTER DATA
# ========================================================== #
php artisan make:filament-resource Provinsi --cluster=MasterData --generate --view
php artisan make:filament-resource Kabupaten --cluster=MasterData --generate --view
php artisan make:filament-resource Kecamatan --cluster=MasterData --generate --view
php artisan make:filament-resource Kelurahan --cluster=MasterData --generate --view
php artisan make:filament-resource InstansiPendidikan --cluster=MasterData --generate --view
php artisan make:filament-resource Departemen --cluster=MasterData --generate --view
php artisan make:filament-resource Jabatan --cluster=MasterData --generate --view
php artisan make:filament-resource TahunPelajaran --cluster=MasterData --generate --view
php artisan make:filament-resource Semester --cluster=MasterData --generate --view
php artisan make:filament-resource Kurikulum --cluster=MasterData --generate --view
php artisan make:filament-resource MataPelajaran --cluster=MasterData --generate --view
php artisan make:filament-resource KompetensiDasar --cluster=MasterData --generate --view
php artisan make:filament-resource Ekstrakurikuler --cluster=MasterData --generate --view
php artisan make:filament-resource TahunEkstrakurikuler --cluster=MasterData --generate --view
php artisan make:filament-resource PoinPelanggaran --cluster=MasterData --generate --view
php artisan make:filament-resource PoinPrestasi --cluster=MasterData --generate --view
php artisan make:filament-resource Jurusan --cluster=MasterData --generate --view
php artisan make:filament-resource TingkatKelas --cluster=MasterData --generate --view
php artisan make:filament-resource Kelas --cluster=MasterData --generate --view
php artisan make:filament-resource RombonganBelajar --cluster=MasterData --generate --view
php artisan make:filament-resource Ruangan --cluster=MasterData --generate --view
php artisan make:filament-resource JamPelajaran --cluster=MasterData --generate --view
php artisan make:filament-resource HariLibur --cluster=MasterData --generate --view
php artisan make:filament-resource KalenderAkademik --cluster=MasterData --generate --view
php artisan make:filament-resource Agama --cluster=MasterData --generate --view
php artisan make:filament-resource StatusKepegawaian --cluster=MasterData --generate --view
php artisan make:filament-resource GolonganKepegawaian --cluster=MasterData --generate --view
php artisan make:filament-resource PendidikanTerakhir --cluster=MasterData --generate --view
php artisan make:filament-resource KategoriInformasi --cluster=MasterData --generate --view
php artisan make:filament-resource Informasi --cluster=MasterData --generate --view

# ========================================================== #
# CLUSTER: KESISWAAN
# ========================================================== #
php artisan make:filament-resource Siswa --cluster=Kesiswaan --generate --view
php artisan make:filament-resource OrangTua --cluster=Kesiswaan --generate --view
php artisan make:filament-resource DataKesehatan --cluster=Kesiswaan --generate --view
php artisan make:filament-resource AnggotaRombel --cluster=Kesiswaan --generate --view
php artisan make:filament-resource MutasiSiswa --cluster=Kesiswaan --generate --view
php artisan make:filament-resource KenaikanKelas --cluster=Kesiswaan --generate --view
php artisan make:filament-resource Kelulusan --cluster=Kesiswaan --generate --view
php artisan make:filament-resource PelanggaranSiswa --cluster=Kesiswaan --generate --view
php artisan make:filament-resource PrestasiSiswa --cluster=Kesiswaan --generate --view

# ========================================================== #
# CLUSTER: KEPEGAWAIAN
# ========================================================== #
php artisan make:filament-resource Pegawai --cluster=Kepegawaian --generate --view
php artisan make:filament-resource RiwayatPendidikan --cluster=Kepegawaian --generate --view
php artisan make:filament-resource RiwayatJabatan --cluster=Kepegawaian --generate --view
php artisan make:filament-resource RiwayatGolongan --cluster=Kepegawaian --generate --view
php artisan make:filament-resource RiwayatPelatihan --cluster=Kepegawaian --generate --view
php artisan make:filament-resource Sertifikasi --cluster=Kepegawaian --generate --view
php artisan make:filament-resource GuruKelas --cluster=Kepegawaian --generate --view
php artisan make:filament-resource GuruMataPelajaran --cluster=Kepegawaian --generate --view
php artisan make:filament-resource KontrakPegawai --cluster=Kepegawaian --generate --view
php artisan make:filament-resource PromosiMutasiPegawai --cluster=Kepegawaian --generate --view
php artisan make:filament-resource PensiunPegawai --cluster=Kepegawaian --generate --view
php artisan make:filament-resource ResignPegawai --cluster=Kepegawaian --generate --view
php artisan make:filament-resource KomponenGaji --cluster=Kepegawaian --generate --view
php artisan make:filament-resource Penggajian --cluster=Kepegawaian --generate --view
php artisan make:filament-resource LemburPegawai --cluster=Kepegawaian --generate --view
php artisan make:filament-resource PenilaianKinerjaPegawai --cluster=Kepegawaian --generate --view

# ========================================================== #
# CLUSTER: AKADEMIK
# ========================================================== #
php artisan make:filament-resource JadwalPelajaran --cluster=Akademik --generate --view
php artisan make:filament-resource JurnalMengajar --cluster=Akademik --generate --view
php artisan make:filament-resource JurnalKegiatanPegawai --cluster=Akademik --generate --view
php artisan make:filament-resource LaporanKinerja --cluster=Akademik --generate --view
php artisan make:filament-resource CapaianPembelajaran --cluster=Akademik --generate --view

# ========================================================== #
# CLUSTER: PENILAIAN
# ========================================================== #
php artisan make:filament-resource JenisPenilaian --cluster=Penilaian --generate --view
php artisan make:filament-resource BobotPenilaian --cluster=Penilaian --generate --view
php artisan make:filament-resource Nilai --cluster=Penilaian --generate --view
php artisan make:filament-resource NilaiSikap --cluster=Penilaian --generate --view
php artisan make:filament-resource NilaiEkstrakurikuler --cluster=Penilaian --generate --view
php artisan make:filament-resource PesertaEkstrakurikuler --cluster=Penilaian --generate --view
php artisan make:filament-resource Rapor --cluster=Penilaian --generate --view
php artisan make:filament-resource NilaiRapor --cluster=Penilaian --generate --view
php artisan make:filament-resource PrestasiRapor --cluster=Penilaian --generate --view
php artisan make:filament-resource Leger --cluster=Penilaian --generate --view
php artisan make:filament-resource TemplateRapor --cluster=Penilaian --generate --view
php artisan make:filament-resource DistribusiNilai --cluster=Penilaian --generate --view
php artisan make:filament-resource ValidasiNilai --cluster=Penilaian --generate --view
php artisan make:filament-resource ProyekP5 --cluster=Penilaian --generate --view
php artisan make:filament-resource NilaiP5 --cluster=Penilaian --generate --view

# ========================================================== #
# CLUSTER: UJIAN & ASESMEN
# ========================================================== #
php artisan make:filament-resource KategoriSoal --cluster=Ujian --generate --view
php artisan make:filament-resource BankSoal --cluster=Ujian --generate --view
php artisan make:filament-resource PaketSoal --cluster=Ujian --generate --view
php artisan make:filament-resource Ujian --cluster=Ujian --generate --view
php artisan make:filament-resource JadwalUjian --cluster=Ujian --generate --view
php artisan make:filament-resource RuangUjian --cluster=Ujian --generate --view
php artisan make:filament-resource PesertaUjian --cluster=Ujian --generate --view
php artisan make:filament-resource HasilUjian --cluster=Ujian --generate --view
php artisan make:filament-resource PengawasUjian --cluster=Ujian --generate --view
php artisan make:filament-resource Remedial --cluster=Ujian --generate --view
php artisan make:filament-resource Pengayaan --cluster=Ujian --generate --view
php artisan make:filament-resource AnalisisButirSoal --cluster=Ujian --generate --view
php artisan make:filament-resource KartuUjian --cluster=Ujian --generate --view
php artisan make:filament-resource BeritaAcaraUjian --cluster=Ujian --generate --view
php artisan make:filament-resource SettingUjian --cluster=Ujian --generate --view

# ========================================================== #
# CLUSTER: PRESENSI
# ========================================================== #
php artisan make:filament-resource JadwalPresensi --cluster=Presensi --generate --view
php artisan make:filament-resource PresensiSiswa --cluster=Presensi --generate --view
php artisan make:filament-resource PresensiPegawai --cluster=Presensi --generate --view
php artisan make:filament-resource PresensiEkstrakurikuler --cluster=Presensi --generate --view
php artisan make:filament-resource IzinSiswa --cluster=Presensi --generate --view
php artisan make:filament-resource IzinPegawai --cluster=Presensi --generate --view
php artisan make:filament-resource CutiPegawai --cluster=Presensi --generate --view
php artisan make:filament-resource RekapPresensiSiswa --cluster=Presensi --generate --view
php artisan make:filament-resource RekapPresensiPegawai --cluster=Presensi --generate --view
php artisan make:filament-resource MonitoringKehadiran --cluster=Presensi --generate --view
php artisan make:filament-resource AlertKehadiran --cluster=Presensi --generate --view
php artisan make:filament-resource DevicePresensi --cluster=Presensi --generate --view
php artisan make:filament-resource SettingToleransi --cluster=Presensi --generate --view

# ========================================================== #
# CLUSTER: KEUANGAN
# ========================================================== #
php artisan make:filament-resource JenisPembayaran --cluster=Keuangan --generate --view
php artisan make:filament-resource TahunKeuangan --cluster=Keuangan --generate --view
php artisan make:filament-resource PeriodePembayaran --cluster=Keuangan --generate --view
php artisan make:filament-resource Tarif --cluster=Keuangan --generate --view
php artisan make:filament-resource TagihanSiswa --cluster=Keuangan --generate --view
php artisan make:filament-resource Pembayaran --cluster=Keuangan --generate --view
php artisan make:filament-resource Cicilan --cluster=Keuangan --generate --view
php artisan make:filament-resource Diskon --cluster=Keuangan --generate --view
php artisan make:filament-resource Beasiswa --cluster=Keuangan --generate --view
php artisan make:filament-resource PenerimaBeasiswa --cluster=Keuangan --generate --view
php artisan make:filament-resource Kwitansi --cluster=Keuangan --generate --view
php artisan make:filament-resource RekeningBank --cluster=Keuangan --generate --view
php artisan make:filament-resource MetodePembayaran --cluster=Keuangan --generate --view
php artisan make:filament-resource KasMasuk --cluster=Keuangan --generate --view
php artisan make:filament-resource KasKeluar --cluster=Keuangan --generate --view
php artisan make:filament-resource KategoriPengeluaran --cluster=Keuangan --generate --view
php artisan make:filament-resource Anggaran --cluster=Keuangan --generate --view
php artisan make:filament-resource RealisasiAnggaran --cluster=Keuangan --generate --view
php artisan make:filament-resource JurnalKeuangan --cluster=Keuangan --generate --view
php artisan make:filament-resource BukuBesar --cluster=Keuangan --generate --view

# ========================================================== #
# CLUSTER: PERPUSTAKAAN
# ========================================================== #
php artisan make:filament-resource KategoriBuku --cluster=Perpustakaan --generate --view
php artisan make:filament-resource RakBuku --cluster=Perpustakaan --generate --view
php artisan make:filament-resource Penerbit --cluster=Perpustakaan --generate --view
php artisan make:filament-resource Pengarang --cluster=Perpustakaan --generate --view
php artisan make:filament-resource Buku --cluster=Perpustakaan --generate --view
php artisan make:filament-resource EksemplarBuku --cluster=Perpustakaan --generate --view
php artisan make:filament-resource AnggotaPerpustakaan --cluster=Perpustakaan --generate --view
php artisan make:filament-resource Peminjaman --cluster=Perpustakaan --generate --view
php artisan make:filament-resource PerpanjanganPeminjaman --cluster=Perpustakaan --generate --view
php artisan make:filament-resource DendaPerpustakaan --cluster=Perpustakaan --generate --view
php artisan make:filament-resource ReservesiBuku --cluster=Perpustakaan --generate --view
php artisan make:filament-resource KunjunganPerpustakaan --cluster=Perpustakaan --generate --view
php artisan make:filament-resource PengadaanBuku --cluster=Perpustakaan --generate --view
php artisan make:filament-resource InventarisasiBuku --cluster=Perpustakaan --generate --view

# ========================================================== #
# CLUSTER: KONSELING (BK)
# ========================================================== #
php artisan make:filament-resource JenisLayananBk --cluster=Konseling --generate --view
php artisan make:filament-resource BidangLayananBk --cluster=Konseling --generate --view
php artisan make:filament-resource KategoriMasalah --cluster=Konseling --generate --view
php artisan make:filament-resource GuruBk --cluster=Konseling --generate --view
php artisan make:filament-resource JadwalKonseling --cluster=Konseling --generate --view
php artisan make:filament-resource Konseli --cluster=Konseling --generate --view
php artisan make:filament-resource SesiKonseling --cluster=Konseling --generate --view
php artisan make:filament-resource CatatanKasus --cluster=Konseling --generate --view
php artisan make:filament-resource TindakLanjutKonseling --cluster=Konseling --generate --view
php artisan make:filament-resource Asesmen --cluster=Konseling --generate --view
php artisan make:filament-resource JenisAsesmen --cluster=Konseling --generate --view
php artisan make:filament-resource Angket --cluster=Konseling --generate --view
php artisan make:filament-resource PertanyaanAngket --cluster=Konseling --generate --view
php artisan make:filament-resource JawabanAngket --cluster=Konseling --generate --view
php artisan make:filament-resource HomeVisit --cluster=Konseling --generate --view
php artisan make:filament-resource PanggilanOrangTua --cluster=Konseling --generate --view
php artisan make:filament-resource RujukanKonseling --cluster=Konseling --generate --view
php artisan make:filament-resource BimbinganKarir --cluster=Konseling --generate --view
php artisan make:filament-resource KolaborasiGuru --cluster=Konseling --generate --view
php artisan make:filament-resource LaporanKonseling --cluster=Konseling --generate --view
php artisan make:filament-resource EvaluasiLayananBk --cluster=Konseling --generate --view

# ========================================================== #
# CLUSTER: BUKU INDUK & PPDB
# ========================================================== #
php artisan make:filament-resource BukuInduk --cluster=BukuInduk --generate --view
php artisan make:filament-resource RiwayatPendidikanSiswa --cluster=BukuInduk --generate --view
php artisan make:filament-resource RiwayatKesehatanSiswa --cluster=BukuInduk --generate --view
php artisan make:filament-resource RiwayatPrestasiSiswa --cluster=BukuInduk --generate --view
php artisan make:filament-resource RiwayatBeasiswaSiswa --cluster=BukuInduk --generate --view
php artisan make:filament-resource DokumenSiswa --cluster=BukuInduk --generate --view
php artisan make:filament-resource NomorPesertaUjian --cluster=BukuInduk --generate --view
php artisan make:filament-resource NomorIjazah --cluster=BukuInduk --generate --view

php artisan make:filament-resource JadwalPendaftaran --cluster=PPDB --generate --view
php artisan make:filament-resource Pendaftaran --cluster=PPDB --generate --view
php artisan make:filament-resource DokumenPendaftaran --cluster=PPDB --generate --view
php artisan make:filament-resource PembayaranPendaftaran --cluster=PPDB --generate --view
php artisan make:filament-resource TesSeleksi --cluster=PPDB --generate --view
php artisan make:filament-resource NilaiSeleksi --cluster=PPDB --generate --view
php artisan make:filament-resource PengumumanPpdb --cluster=PPDB --generate --view
php artisan make:filament-resource HasilSeleksi --cluster=PPDB --generate --view
php artisan make:filament-resource DaftarUlang --cluster=PPDB --generate --view

# ========================================================== #
# CLUSTER: SURAT MENYURAT
# ========================================================== #
php artisan make:filament-resource KategoriSurat --cluster=Surat --generate --view
php artisan make:filament-resource Surat --cluster=Surat --generate --view
php artisan make:filament-resource DisposisiSurat --cluster=Surat --generate --view
php artisan make:filament-resource LampiranSurat --cluster=Surat --generate --view
php artisan make:filament-resource TemplateSurat --cluster=Surat --generate --view
php artisan make:filament-resource NomorSurat --cluster=Surat --generate --view
php artisan make:filament-resource SuratTugas --cluster=Surat --generate --view
php artisan make:filament-resource SuratKeterangan --cluster=Surat --generate --view
php artisan make:filament-resource Legalisir --cluster=Surat --generate --view

# ========================================================== #
# CLUSTER: INVENTARIS
# ========================================================== #
php artisan make:filament-resource KategoriAset --cluster=Inventaris --generate --view
php artisan make:filament-resource Aset --cluster=Inventaris --generate --view
php artisan make:filament-resource PeminjamanAset --cluster=Inventaris --generate --view
php artisan make:filament-resource MaintenanceAset --cluster=Inventaris --generate --view
php artisan make:filament-resource MutasiAset --cluster=Inventaris --generate --view
php artisan make:filament-resource PenghapusanAset --cluster=Inventaris --generate --view
php artisan make:filament-resource StockOpnameAset --cluster=Inventaris --generate --view

# ========================================================== #
# CLUSTER: SARANA PRASARANA
# ========================================================== #
php artisan make:filament-resource SaranaPrasarana --cluster=Sarpras --generate --view
php artisan make:filament-resource PeminjamanSarpras --cluster=Sarpras --generate --view
php artisan make:filament-resource MaintenanceSarpras --cluster=Sarpras --generate --view

# ========================================================== #
# CLUSTER: WEBSITE & CMS
# ========================================================== #
php artisan make:filament-resource KategoriBlog --cluster=Website --generate --view
php artisan make:filament-resource Tag --cluster=Website --generate --view
php artisan make:filament-resource Blog --cluster=Website --generate --view
php artisan make:filament-resource Komentar --cluster=Website --generate --view
php artisan make:filament-resource Layanan --cluster=Website --generate --view
php artisan make:filament-resource Program --cluster=Website --generate --view
php artisan make:filament-resource Album --cluster=Website --generate --view
php artisan make:filament-resource GaleriFoto --cluster=Website --generate --view
php artisan make:filament-resource GaleriVideo --cluster=Website --generate --view
php artisan make:filament-resource Halaman --cluster=Website --generate --view
php artisan make:filament-resource Menu --cluster=Website --generate --view
php artisan make:filament-resource Banner --cluster=Website --generate --view
php artisan make:filament-resource Testimonial --cluster=Website --generate --view
php artisan make:filament-resource PenghargaanMadrasah --cluster=Website --generate --view
php artisan make:filament-resource Fasilitas --cluster=Website --generate --view
php artisan make:filament-resource StrukturOrganisasi --cluster=Website --generate --view
php artisan make:filament-resource KategoriFaq --cluster=Website --generate --view
php artisan make:filament-resource Faq --cluster=Website --generate --view
php artisan make:filament-resource KategoriDownload --cluster=Website --generate --view
php artisan make:filament-resource Download --cluster=Website --generate --view
php artisan make:filament-resource Alumni --cluster=Website --generate --view
php artisan make:filament-resource KegiatanAlumni --cluster=Website --generate --view
php artisan make:filament-resource DonasiAlumni --cluster=Website --generate --view
php artisan make:filament-resource KalenderEvent --cluster=Website --generate --view

# ========================================================== #
# CLUSTER: PTSP (HELPDESK)
# ========================================================== #
php artisan make:filament-resource KategoriLayananPtsp --cluster=PTSP --generate --view
php artisan make:filament-resource JenisLayanan --cluster=PTSP --generate --view
php artisan make:filament-resource Ticket --cluster=PTSP --generate --view
php artisan make:filament-resource TicketBalasan --cluster=PTSP --generate --view
php artisan make:filament-resource Sla --cluster=PTSP --generate --view
php artisan make:filament-resource KategoriKnowledgeBase --cluster=PTSP --generate --view
php artisan make:filament-resource KnowledgeBase --cluster=PTSP --generate --view
php artisan make:filament-resource TemplateBalasan --cluster=PTSP --generate --view
php artisan make:filament-resource RatingLayanan --cluster=PTSP --generate --view

# ========================================================== #
# CLUSTER: LAPORAN
# ========================================================== #
php artisan make:filament-resource LaporanBulanan --cluster=Laporan --generate --view
php artisan make:filament-resource LaporanEmis --cluster=Laporan --generate --view
php artisan make:filament-resource DashboardKepala --cluster=Laporan --generate --view

# ========================================================== #
# CLUSTER: PENGATURAN
# ========================================================== #
php artisan make:filament-resource SettingAplikasi --cluster=Settings --generate --view
php artisan make:filament-resource PaymentGatewayConfig --cluster=Settings --generate --view
php artisan make:filament-resource MessagingGatewayConfig --cluster=Settings --generate --view
php artisan make:filament-resource BackupLog --cluster=Settings --generate --view

# ========================================================== #
# NO CLUSTER (STANDALONE)
# ========================================================== #
php artisan make:filament-resource User --generate --view
php artisan make:filament-resource Role --generate --view
php artisan make:filament-resource Permission --generate --view
php artisan make:filament-resource ActivityLog --generate --view
php artisan make:filament-resource NotifikasiSistem --generate --view
```

### RELATION MANAGERS

```bash
# Siswa Relations
php artisan make:filament-relation-manager SiswaResource orangTua OrangTua
php artisan make:filament-relation-manager SiswaResource dataKesehatan DataKesehatan
php artisan make:filament-relation-manager SiswaResource anggotaRombel AnggotaRombel
php artisan make:filament-relation-manager SiswaResource tagihan TagihanSiswa
php artisan make:filament-relation-manager SiswaResource pembayaran Pembayaran
php artisan make:filament-relation-manager SiswaResource pelanggaran PelanggaranSiswa
php artisan make:filament-relation-manager SiswaResource prestasi PrestasiSiswa
php artisan make:filament-relation-manager SiswaResource nilai Nilai
php artisan make:filament-relation-manager SiswaResource rapor Rapor

# Pegawai Relations
php artisan make:filament-relation-manager PegawaiResource riwayatPendidikan RiwayatPendidikan
php artisan make:filament-relation-manager PegawaiResource riwayatJabatan RiwayatJabatan
php artisan make:filament-relation-manager PegawaiResource riwayatGolongan RiwayatGolongan
php artisan make:filament-relation-manager PegawaiResource riwayatPelatihan RiwayatPelatihan
php artisan make:filament-relation-manager PegawaiResource sertifikasi Sertifikasi
php artisan make:filament-relation-manager PegawaiResource penggajian Penggajian
php artisan make:filament-relation-manager PegawaiResource presensi PresensiPegawai
php artisan make:filament-relation-manager PegawaiResource cuti CutiPegawai

# RombonganBelajar Relations
php artisan make:filament-relation-manager RombonganBelajarResource anggota AnggotaRombel
php artisan make:filament-relation-manager RombonganBelajarResource jadwalPelajaran JadwalPelajaran

# MataPelajaran Relations
php artisan make:filament-relation-manager MataPelajaranResource kompetensiDasar KompetensiDasar
php artisan make:filament-relation-manager MataPelajaranResource guruMataPelajaran GuruMataPelajaran

# Buku Relations
php artisan make:filament-relation-manager BukuResource eksemplar EksemplarBuku
php artisan make:filament-relation-manager BukuResource peminjaman Peminjaman

# Ujian Relations
php artisan make:filament-relation-manager UjianResource jadwalUjian JadwalUjian
php artisan make:filament-relation-manager UjianResource peserta PesertaUjian
php artisan make:filament-relation-manager UjianResource pengawas PengawasUjian

# PaketSoal Relations
php artisan make:filament-relation-manager PaketSoalResource detail PaketSoalDetail

# Ticket Relations
php artisan make:filament-relation-manager TicketResource balasan TicketBalasan
php artisan make:filament-relation-manager TicketResource attachment TicketAttachment
php artisan make:filament-relation-manager TicketResource riwayat TicketRiwayat

# Surat Relations
php artisan make:filament-relation-manager SuratResource disposisi DisposisiSurat
php artisan make:filament-relation-manager SuratResource lampiran LampiranSurat

# SuratTugas Relations
php artisan make:filament-relation-manager SuratTugasResource peserta PesertaSuratTugas

# Aset Relations
php artisan make:filament-relation-manager AsetResource peminjaman PeminjamanAset
php artisan make:filament-relation-manager AsetResource maintenance MaintenanceAset
php artisan make:filament-relation-manager AsetResource mutasi MutasiAset

# Pendaftaran Relations
php artisan make:filament-relation-manager PendaftaranResource dokumen DokumenPendaftaran
php artisan make:filament-relation-manager PendaftaranResource nilaiSeleksi NilaiSeleksi

# Blog Relations
php artisan make:filament-relation-manager BlogResource komentar Komentar
php artisan make:filament-relation-manager BlogResource galeri GaleriBlog

# Angket Relations
php artisan make:filament-relation-manager AngketResource pertanyaan PertanyaanAngket

# PengadaanBuku Relations
php artisan make:filament-relation-manager PengadaanBukuResource item ItemPengadaanBuku

# StockOpnameAset Relations
php artisan make:filament-relation-manager StockOpnameAsetResource item ItemStockOpnameAset

# InventarisasiBuku Relations
php artisan make:filament-relation-manager InventarisasiBukuResource item ItemInventarisasiBuku

# Penggajian Relations
php artisan make:filament-relation-manager PenggajianResource detail DetailPenggajian

# Anggaran Relations
php artisan make:filament-relation-manager AnggaranResource realisasi RealisasiAnggaran
```

### WIDGETS

```bash
# Dashboard Widgets
php artisan make:filament-widget StatsOverview --type=stats-overview
php artisan make:filament-widget KehadiranChart --type=chart
php artisan make:filament-widget PrestasiChart --type=chart
php artisan make:filament-widget KeuanganChart --type=chart
php artisan make:filament-widget SiswaAktifStats --type=stats-overview
php artisan make:filament-widget PegawaiStats --type=stats-overview
php artisan make:filament-widget TunggakanStats --type=stats-overview
php artisan make:filament-widget PelanggaranChart --type=chart
php artisan make:filament-widget LatestActivity
php artisan make:filament-widget CalendarWidget
php artisan make:filament-widget TodaySchedule
php artisan make:filament-widget PendingApprovals
php artisan make:filament-widget QuickActions
php artisan make:filament-widget NotificationWidget
php artisan make:filament-widget AnnouncementWidget

# Kesiswaan Widgets
php artisan make:filament-widget SiswaPerKelasChart --type=chart
php artisan make:filament-widget GenderDistributionChart --type=chart
php artisan make:filament-widget MutasiSiswaChart --type=chart
php artisan make:filament-widget KehadiranSiswaStats --type=stats-overview

# Kepegawaian Widgets
php artisan make:filament-widget PegawaiPerDepartemenChart --type=chart
php artisan make:filament-widget StatusKepegawaianChart --type=chart
php artisan make:filament-widget KehadiranPegawaiStats --type=stats-overview

# Keuangan Widgets
php artisan make:filament-widget KasMasukChart --type=chart
php artisan make:filament-widget KasKeluarChart --type=chart
php artisan make:filament-widget PembayaranBulananChart --type=chart
php artisan make:filament-widget AnggaranRealisasiChart --type=chart
php artisan make:filament-widget TunggakanPerKelasChart --type=chart

# Akademik Widgets
php artisan make:filament-widget NilaiRataRataChart --type=chart
php artisan make:filament-widget DistribusiNilaiChart --type=chart
php artisan make:filament-widget JurnalMengajarStats --type=stats-overview

# Perpustakaan Widgets
php artisan make:filament-widget BukuTerpopulerWidget
php artisan make:filament-widget PeminjamanHariIni
php artisan make:filament-widget BukuTerlambat
php artisan make:filament-widget StatistikPerpustakaan --type=stats-overview

# PTSP Widgets
php artisan make:filament-widget TicketStatusChart --type=chart
php artisan make:filament-widget TicketPriorityChart --type=chart
php artisan make:filament-widget ResponseTimeStats --type=stats-overview
php artisan make:filament-widget PendingTickets

# Ujian Widgets
php artisan make:filament-widget JadwalUjianWidget
php artisan make:filament-widget HasilUjianChart --type=chart
php artisan make:filament-widget PersentaseKelulusanChart --type=chart
```

### CUSTOM PAGES

```bash
# Dashboard Pages
php artisan make:filament-page DashboardKepalaMadrasah
php artisan make:filament-page DashboardWakilKepala
php artisan make:filament-page DashboardGuru
php artisan make:filament-page DashboardWaliKelas
php artisan make:filament-page DashboardSiswa
php artisan make:filament-page DashboardOrangTua

# Akademik Pages
php artisan make:filament-page InputNilai
php artisan make:filament-page GenerateRapor
php artisan make:filament-page CetakRapor
php artisan make:filament-page ValidasiNilai
php artisan make:filament-page DistribusiNilaiPage

# Keuangan Pages
php artisan make:filament-page GenerateTagihan
php artisan make:filament-page VerifikasiPembayaran
php artisan make:filament-page LaporanKeuanganPage
php artisan make:filament-page RekapPembayaran

# Presensi Pages
php artisan make:filament-page PresensiHarian
php artisan make:filament-page RekapPresensi
php artisan make:filament-page MonitoringKehadiranPage

# Ujian Pages
php artisan make:filament-page BuatUjian
php artisan make:filament-page MonitoringUjian
php artisan make:filament-page HasilUjianPage
php artisan make:filament-page AnalisisUjian

# PPDB Pages
php artisan make:filament-page PendaftaranOnline
php artisan make:filament-page VerifikasiPendaftaran
php artisan make:filament-page PengumumanPPDB
php artisan make:filament-page DashboardPPDB

# Perpustakaan Pages
php artisan make:filament-page PeminjamanBuku
php artisan make:filament-page PengembalianBuku
php artisan make:filament-page OpacPage

# Laporan Pages
php artisan make:filament-page LaporanAkademik
php artisan make:filament-page LaporanKesiswaan
php artisan make:filament-page LaporanKepegawaian
php artisan make:filament-page LaporanKeuangan
php artisan make:filament-page LaporanEmisPage
php artisan make:filament-page LaporanDapodik

# Setting Pages
php artisan make:filament-page SettingUmum
php artisan make:filament-page SettingEmail
php artisan make:filament-page SettingSMS
php artisan make:filament-page SettingPaymentGateway
php artisan make:filament-page BackupRestore
php artisan make:filament-page MaintenanceMode

# Approval Pages
php artisan make:filament-page ApprovalCenter
php artisan make:filament-page ApprovalAnggaran
php artisan make:filament-page ApprovalCuti
php artisan make:filament-page ApprovalSurat
```

### RINGKASAN GENERATE

| Komponen          | Jumlah        | Cluster      |
| ----------------- | ------------- | ------------ |
| Master Data       | 30 resources  | MasterData   |
| Kesiswaan         | 9 resources   | Kesiswaan    |
| Kepegawaian       | 16 resources  | Kepegawaian  |
| Akademik          | 5 resources   | Akademik     |
| Penilaian         | 15 resources  | Penilaian    |
| Ujian             | 15 resources  | Ujian        |
| Presensi          | 13 resources  | Presensi     |
| Keuangan          | 20 resources  | Keuangan     |
| Perpustakaan      | 14 resources  | Perpustakaan |
| Konseling         | 21 resources  | Konseling    |
| Buku Induk        | 8 resources   | BukuInduk    |
| PPDB              | 9 resources   | PPDB         |
| Surat             | 9 resources   | Surat        |
| Inventaris        | 7 resources   | Inventaris   |
| Sarpras           | 3 resources   | Sarpras      |
| Website           | 24 resources  | Website      |
| PTSP              | 9 resources   | PTSP         |
| Laporan           | 3 resources   | Laporan      |
| Settings          | 4 resources   | Settings     |
| Standalone        | 5 resources   | -            |
| Widgets           | 40+ widgets   | -            |
| Pages             | 30+ pages     | -            |
| Relation Managers | 40+ relations | -            |

**TOTAL:** 234+ Resources | 19 Clusters | 40+ Widgets | 30+ Pages | 40+ Relations

### KONFIGURASI FILAMENT PANEL

```php
use Filament\Panel;

public function panel(Panel $panel): Panel
{
    return $panel
        ->default()
        ->id('admin')
        ->path('admin')
        ->login()
        ->colors([
            'primary' => Color::Blue,
        ])
        ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
        ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
        ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
        ->discoverClusters(in: app_path('Filament/Clusters'), for: 'App\\Filament\\Clusters')
        ->widgets([
            Widgets\AccountWidget::class,
            Widgets\StatsOverview::class,
        ])
        ->middleware([
            EncryptCookies::class,
            AddQueuedCookiesToResponse::class,
            StartSession::class,
            AuthenticateSession::class,
            ShareErrorsFromSession::class,
            VerifyCsrfToken::class,
            SubstituteBindings::class,
            DisableBladeIconComponents::class,
            DispatchServingFilamentEvent::class,
        ])
        ->authMiddleware([
            Authenticate::class,
        ])
        ->navigationGroups([
            'Master Data',
            'Kesiswaan',
            'Kepegawaian',
            'Akademik',
            'Penilaian',
            'Ujian',
            'Presensi',
            'Keuangan',
            'Perpustakaan',
            'Konseling',
            'Buku Induk',
            'PPDB',
            'Surat',
            'Inventaris',
            'Sarpras',
            'Website',
            'PTSP',
            'Laporan',
            'Settings',
        ])
        ->plugins([
            \BezhanSalleh\FilamentShield\FilamentShieldPlugin::make(),
        ]);
}
```
