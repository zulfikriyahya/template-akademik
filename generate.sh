#!/bin/bash

echo "=========================================="
echo "GENERATING MADRASAH SUPER APP RESOURCES"
echo "=========================================="

# ========================================================== #
# GENERATE CLUSTERS
# ========================================================== #
echo "Generating Clusters..."
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

echo "✓ Clusters generated successfully!"

# ========================================================== #
# GENERATE MASTER DATA RESOURCES
# ========================================================== #
echo "Generating Master Data Resources..."
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

echo "✓ Master Data Resources generated!"

# ========================================================== #
# GENERATE KESISWAAN RESOURCES
# ========================================================== #
echo "Generating Kesiswaan Resources..."
php artisan make:filament-resource Siswa --cluster=Kesiswaan --generate --view
php artisan make:filament-resource OrangTua --cluster=Kesiswaan --generate --view
php artisan make:filament-resource DataKesehatan --cluster=Kesiswaan --generate --view
php artisan make:filament-resource AnggotaRombel --cluster=Kesiswaan --generate --view
php artisan make:filament-resource MutasiSiswa --cluster=Kesiswaan --generate --view
php artisan make:filament-resource KenaikanKelas --cluster=Kesiswaan --generate --view
php artisan make:filament-resource Kelulusan --cluster=Kesiswaan --generate --view
php artisan make:filament-resource PelanggaranSiswa --cluster=Kesiswaan --generate --view
php artisan make:filament-resource PrestasiSiswa --cluster=Kesiswaan --generate --view

echo "✓ Kesiswaan Resources generated!"

# ========================================================== #
# GENERATE KEPEGAWAIAN RESOURCES
# ========================================================== #
echo "Generating Kepegawaian Resources..."
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

echo "✓ Kepegawaian Resources generated!"

# ========================================================== #
# GENERATE AKADEMIK RESOURCES
# ========================================================== #
echo "Generating Akademik Resources..."
php artisan make:filament-resource JadwalPelajaran --cluster=Akademik --generate --view
php artisan make:filament-resource JurnalMengajar --cluster=Akademik --generate --view
php artisan make:filament-resource JurnalKegiatanPegawai --cluster=Akademik --generate --view
php artisan make:filament-resource LaporanKinerja --cluster=Akademik --generate --view
php artisan make:filament-resource CapaianPembelajaran --cluster=Akademik --generate --view

echo "✓ Akademik Resources generated!"

# ========================================================== #
# GENERATE PENILAIAN RESOURCES
# ========================================================== #
echo "Generating Penilaian Resources..."
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

echo "✓ Penilaian Resources generated!"

# ========================================================== #
# GENERATE UJIAN RESOURCES
# ========================================================== #
echo "Generating Ujian Resources..."
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

echo "✓ Ujian Resources generated!"

# ========================================================== #
# GENERATE PRESENSI RESOURCES
# ========================================================== #
echo "Generating Presensi Resources..."
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

echo "✓ Presensi Resources generated!"

# ========================================================== #
# GENERATE KEUANGAN RESOURCES
# ========================================================== #
echo "Generating Keuangan Resources..."
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

echo "✓ Keuangan Resources generated!"

# ========================================================== #
# GENERATE PERPUSTAKAAN RESOURCES
# ========================================================== #
echo "Generating Perpustakaan Resources..."
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

echo "✓ Perpustakaan Resources generated!"

# ========================================================== #
# GENERATE KONSELING RESOURCES
# ========================================================== #
echo "Generating Konseling Resources..."
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

echo "✓ Konseling Resources generated!"

# ========================================================== #
# GENERATE BUKU INDUK RESOURCES
# ========================================================== #
echo "Generating Buku Induk Resources..."
php artisan make:filament-resource BukuInduk --cluster=BukuInduk --generate --view
php artisan make:filament-resource RiwayatPendidikanSiswa --cluster=BukuInduk --generate --view
php artisan make:filament-resource RiwayatKesehatanSiswa --cluster=BukuInduk --generate --view
php artisan make:filament-resource RiwayatPrestasiSiswa --cluster=BukuInduk --generate --view
php artisan make:filament-resource RiwayatBeasiswaSiswa --cluster=BukuInduk --generate --view
php artisan make:filament-resource DokumenSiswa --cluster=BukuInduk --generate --view
php artisan make:filament-resource NomorPesertaUjian --cluster=BukuInduk --generate --view
php artisan make:filament-resource NomorIjazah --cluster=BukuInduk --generate --view

echo "✓ Buku Induk Resources generated!"

# ========================================================== #
# GENERATE PPDB RESOURCES
# ========================================================== #
echo "Generating PPDB Resources..."
php artisan make:filament-resource JadwalPendaftaran --cluster=PPDB --generate --view
php artisan make:filament-resource Pendaftaran --cluster=PPDB --generate --view
php artisan make:filament-resource DokumenPendaftaran --cluster=PPDB --generate --view
php artisan make:filament-resource PembayaranPendaftaran --cluster=PPDB --generate --view
php artisan make:filament-resource TesSeleksi --cluster=PPDB --generate --view
php artisan make:filament-resource NilaiSeleksi --cluster=PPDB --generate --view
php artisan make:filament-resource PengumumanPpdb --cluster=PPDB --generate --view
php artisan make:filament-resource HasilSeleksi --cluster=PPDB --generate --view
php artisan make:filament-resource DaftarUlang --cluster=PPDB --generate --view

echo "✓ PPDB Resources generated!"

# ========================================================== #
# GENERATE SURAT RESOURCES
# ========================================================== #
echo "Generating Surat Resources..."
php artisan make:filament-resource KategoriSurat --cluster=Surat --generate --view
php artisan make:filament-resource Surat --cluster=Surat --generate --view
php artisan make:filament-resource DisposisiSurat --cluster=Surat --generate --view
php artisan make:filament-resource LampiranSurat --cluster=Surat --generate --view
php artisan make:filament-resource TemplateSurat --cluster=Surat --generate --view
php artisan make:filament-resource NomorSurat --cluster=Surat --generate --view
php artisan make:filament-resource SuratTugas --cluster=Surat --generate --view
php artisan make:filament-resource SuratKeterangan --cluster=Surat --generate --view
php artisan make:filament-resource Legalisir --cluster=Surat --generate --view

echo "✓ Surat Resources generated!"

# ========================================================== #
# GENERATE INVENTARIS RESOURCES
# ========================================================== #
echo "Generating Inventaris Resources..."
php artisan make:filament-resource KategoriAset --cluster=Inventaris --generate --view
php artisan make:filament-resource Aset --cluster=Inventaris --generate --view
php artisan make:filament-resource PeminjamanAset --cluster=Inventaris --generate --view
php artisan make:filament-resource MaintenanceAset --cluster=Inventaris --generate --view
php artisan make:filament-resource MutasiAset --cluster=Inventaris --generate --view
php artisan make:filament-resource PenghapusanAset --cluster=Inventaris --generate --view
php artisan make:filament-resource StockOpnameAset --cluster=Inventaris --generate --view

echo "✓ Inventaris Resources generated!"

# ========================================================== #
# GENERATE SARPRAS RESOURCES
# ========================================================== #
echo "Generating Sarpras Resources..."
php artisan make:filament-resource SaranaPrasarana --cluster=Sarpras --generate --view
php artisan make:filament-resource PeminjamanSarpras --cluster=Sarpras --generate --view
php artisan make:filament-resource MaintenanceSarpras --cluster=Sarpras --generate --view

echo "✓ Sarpras Resources generated!"

# ========================================================== #
# GENERATE WEBSITE RESOURCES
# ========================================================== #
echo "Generating Website Resources..."
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

echo "✓ Website Resources generated!"

# ========================================================== #
# GENERATE PTSP RESOURCES
# ========================================================== #
echo "Generating PTSP Resources..."
php artisan make:filament-resource KategoriLayananPtsp --cluster=PTSP --generate --view
php artisan make:filament-resource JenisLayanan --cluster=PTSP --generate --view
php artisan make:filament-resource Ticket --cluster=PTSP --generate --view
php artisan make:filament-resource TicketBalasan --cluster=PTSP --generate --view
php artisan make:filament-resource Sla --cluster=PTSP --generate --view
php artisan make:filament-resource KategoriKnowledgeBase --cluster=PTSP --generate --view
php artisan make:filament-resource KnowledgeBase --cluster=PTSP --generate --view
php artisan make:filament-resource TemplateBalasan --cluster=PTSP --generate --view
php artisan make:filament-resource RatingLayanan --cluster=PTSP --generate --view

echo "✓ PTSP Resources generated!"

# ========================================================== #
# GENERATE LAPORAN RESOURCES
# ========================================================== #
echo "Generating Laporan Resources..."
php artisan make:filament-resource LaporanBulanan --cluster=Laporan --generate --view
php artisan make:filament-resource LaporanEmis --cluster=Laporan --generate --view
php artisan make:filament-resource DashboardKepala --cluster=Laporan --generate --view

echo "✓ Laporan Resources generated!"

# ========================================================== #
# GENERATE SETTINGS RESOURCES
# ========================================================== #
echo "Generating Settings Resources..."
php artisan make:filament-resource SettingAplikasi --cluster=Settings --generate --view
php artisan make:filament-resource PaymentGatewayConfig --cluster=Settings --generate --view
php artisan make:filament-resource MessagingGatewayConfig --cluster=Settings --generate --view
php artisan make:filament-resource BackupLog --cluster=Settings --generate --view

echo "✓ Settings Resources generated!"

# ========================================================== #
# GENERATE STANDALONE RESOURCES
# ========================================================== #
echo "Generating Standalone Resources..."
php artisan make:filament-resource User --generate --view
php artisan make:filament-resource Role --generate --view
php artisan make:filament-resource Permission --generate --view
php artisan make:filament-resource ActivityLog --generate --view
php artisan make:filament-resource NotifikasiSistem --generate --view

echo "✓ Standalone Resources generated!"

# ========================================================== #
# GENERATE WIDGETS
# ========================================================== #
echo "Generating Widgets..."

# Dashboard Widgets
php artisan make:filament-widget StatsOverview --stats-overview
php artisan make:filament-widget KehadiranChart --chart
php artisan make:filament-widget PrestasiChart --chart
php artisan make:filament-widget KeuanganChart --chart
php artisan make:filament-widget SiswaAktifStats --stats-overview
php artisan make:filament-widget PegawaiStats --stats-overview
php artisan make:filament-widget TunggakanStats --stats-overview
php artisan make:filament-widget PelanggaranChart --chart
php artisan make:filament-widget LatestActivity
php artisan make:filament-widget CalendarWidget
php artisan make:filament-widget TodaySchedule
php artisan make:filament-widget PendingApprovals
php artisan make:filament-widget QuickActions
php artisan make:filament-widget NotificationWidget
php artisan make:filament-widget AnnouncementWidget

# Kesiswaan Widgets
php artisan make:filament-widget SiswaPerKelasChart --chart
php artisan make:filament-widget GenderDistributionChart --chart
php artisan make:filament-widget MutasiSiswaChart --chart
php artisan make:filament-widget KehadiranSiswaStats --stats-overview

# Kepegawaian Widgets
php artisan make:filament-widget PegawaiPerDepartemenChart --chart
php artisan make:filament-widget StatusKepegawaianChart --chart
php artisan make:filament-widget KehadiranPegawaiStats --stats-overview

# Keuangan Widgets
php artisan make:filament-widget KasMasukChart --chart
php artisan make:filament-widget KasKeluarChart --chart
php artisan make:filament-widget PembayaranBulananChart --chart
php artisan make:filament-widget AnggaranRealisasiChart --chart
php artisan make:filament-widget TunggakanPerKelasChart --chart

# Akademik Widgets
php artisan make:filament-widget NilaiRataRataChart --chart
php artisan make:filament-widget DistribusiNilaiChart --chart
php artisan make:filament-widget JurnalMengajarStats --stats-overview

# Perpustakaan Widgets
php artisan make:filament-widget BukuTerpopulerWidget
php artisan make:filament-widget PeminjamanHariIni
php artisan make:filament-widget BukuTerlambat
php artisan make:filament-widget StatistikPerpustakaan --stats-overview

# PTSP Widgets
php artisan make:filament-widget TicketStatusChart --chart
php artisan make:filament-widget TicketPriorityChart --chart
php artisan make:filament-widget ResponseTimeStats --stats-overview
php artisan make:filament-widget PendingTickets

# Ujian Widgets
php artisan make:filament-widget JadwalUjianWidget
php artisan make:filament-widget HasilUjianChart --chart
php artisan make:filament-widget PersentaseKelulusanChart --chart

echo "✓ Widgets generated!"

# ========================================================== #
# GENERATE CUSTOM PAGES
# ========================================================== #
echo "Generating Custom Pages..."

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

echo "✓ Custom Pages generated!"

# ========================================================== #
# GENERATE RELATION MANAGERS
# ========================================================== #
echo "Generating Relation Managers..."

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

echo "✓ Relation Managers generated!"

echo ""
echo "=========================================="
echo "✓ ALL RESOURCES GENERATED SUCCESSFULLY!"
echo "=========================================="
echo ""
echo "Total Generated:"
echo "- Clusters: 19"
echo "- Resources: 234+"
echo "- Widgets: 40+"
echo "- Pages: 30+"
echo "- Relation Managers: 40+"
echo ""
echo "Next Steps:"
echo "1. Run: php artisan migrate"
echo "2. Run: php artisan db:seed"
echo "3. Configure Filament Panel"
echo "4. Setup Roles & Permissions"
echo "5. Customize Resources as needed"
echo ""
