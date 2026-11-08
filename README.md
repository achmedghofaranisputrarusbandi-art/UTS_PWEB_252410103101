# UTS PWEB GENAP 25/26 - Pengelolaan Menu Kantin

**Nama:** Achmed Ghofar Anis Putra Rusbandi
**NIM:** 252410103101
**Kelas:** E

## Tentang Web

Kantin Kampus adalah aplikasi web sederhana untuk mengelola menu kantin kampus. Web ini dibuat dengan **Laravel murni** (tanpa starter kit dan tanpa database) menggunakan arsitektur **MVC** dan sistem templating **Blade**.

Tema pengelolaan: **Pengelolaan Menu Kantin** (nama menu, harga, dan stok).

## Fitur

- **Login simulasi**: username dikirim lewat request parameter ke halaman lain.
- **Dashboard**: menyambut pengguna sesuai username yang login.
- **Pengelolaan**: menampilkan daftar menu (array dari Controller) memakai `@foreach`.
- **Profile**: menampilkan username dan informasi web.
- **Layout dan komponen Blade**: `@extends`, `@section`, `@yield`, `@include`, dan `<x-navbar>`.

## Struktur File Utama

```
routes/web.php
app/Http/Controllers/PageController.php
resources/views/layouts/app.blade.php
resources/views/login.blade.php
resources/views/dashboard.blade.php
resources/views/pengelolaan.blade.php
resources/views/profile.blade.php
resources/views/components/navbar.blade.php
resources/views/components/footer.blade.php
```

## Cara Menjalankan

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```

Buka `http://127.0.0.1:8000` di browser.

