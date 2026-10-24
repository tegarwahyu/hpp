# HHP Land Arrangement

Website perkenalan berbasis Laravel 13 dan Blade. Frontend CSS/JavaScript mandiri, tidak memerlukan npm build.

## Jalankan
Klik MULAI-HHP.bat atau jalankan:

```powershell
cd C:\Users\KEN\Videos\hhp-land-arrangement
php artisan serve --host=127.0.0.1 --port=8013
```

Buka http://127.0.0.1:8013. PHP CLI harus tersedia.

## Konten dan kontak
- Halaman: resources/views/home.blade.php
- Desain: public/css/hhp.css
- Interaksi: public/js/hhp.js
- Logo/video: public/assets
- Nomor resmi: HHP_WHATSAPP di .env, format internasional tanpa tanda + atau spasi. Jalankan php artisan config:clear setelah menggantinya. Jangan isi nomor contoh.
- Tanpa nomor, formulir hanya membuat ringkasan lokal; tidak menyimpan atau mengirim data.

## Lingkup
Versi ini adalah company profile, bukan booking engine, inventori hotel, atau panel admin. Tidak ada pembayaran, akun pengguna, database lead, daftar harga, maupun testimoni buatan.

## Desain dan aset
Komposisi mengikuti referensi Shelby Sapp: latar charcoal/krem, serif italic, susunan visual editorial, ticker burgundy, dan CTA berulang. Bukan salinan pixel-identik. Josefin Sans sama dengan keluarga font referensi. Garamond sistem digunakan bila tersedia, dengan EB Garamond sebagai alternatif terbuka; font kustom Garamond referensi tidak disalin. Font Josefin Sans dan EB Garamond disimpan lokal di public/fonts, lengkap dengan lisensi OFL; tidak memerlukan CDN.
Kedua logo dan video berasal dari unggahan pengguna. Poster diambil dari video tersebut, bukan foto hotel terverifikasi. Ilustrasi Madinah bukan foto hotel. Periksa hak penggunaan video (termasuk watermark pihak ketiga) sebelum publikasi; watermark tidak dihapus.

## Sebelum publikasi
Lengkapi identitas perusahaan, kontak resmi, legalitas, hak aset, kebijakan privasi, hotel/fasilitas yang terverifikasi. Atur APP_DEBUG=false, APP_URL domain HTTPS dan document root ke public. Jangan publikasikan .env.
