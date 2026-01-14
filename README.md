<p align="center">
  <a href="https://polimarim.ac.id" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300" alt="Laravel Logo">
  </a>
</p>

<h1 align="center">🚢 Website Polimarim AMI Makassar</h1>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-12.x-red?style=for-the-badge&logo=laravel" alt="Laravel 12">
  <img src="https://img.shields.io/badge/Filament-3.x-yellow?style=for-the-badge&logo=laravel" alt="Filament">
  <img src="https://img.shields.io/badge/Vite-6.x-blueviolet?style=for-the-badge&logo=vite" alt="Vite">
  <img src="https://img.shields.io/badge/Sass-Enabled-ff69b4?style=for-the-badge&logo=sass" alt="Sass">
</p>

---

## 📝 Deskripsi Project
Project ini adalah platform digital untuk **Polimarim AMI Makassar**. Dibangun menggunakan Laravel 12 dengan fokus pada efisiensi manajemen backend menggunakan Filament dan performa frontend menggunakan Vite.

### ✨ Tech Stack & Tools
* **Framework:** Laravel 12
* **Admin Panel:** Filament v3
* **Asset Manager:** Vite 6
* **Styling:** Sass (SCSS)
* **Build Tools:** Vite Plugin Copy (for static assets)

---

## ⚙️ Cara Instalasi

Ikuti langkah-langkah berikut untuk menjalankan project di lingkungan lokal:

1.  **Clone repository ini**
    ```bash
    git clone [https://github.com/Azemux26/Polimarim-Hub.git](https://github.com/Azemux26/Polimarim-Hub.git)
    cd Polimarim-Hub
    ```

2.  **Install dependensi PHP**
    ```bash
    composer install
    ```

3.  **Install dependensi JavaScript & Plugins**
    Untuk mendukung fitur **Sass** dan **Vite Plugin Copy**, jalankan:
    ```bash
    npm install
    npm install -D sass vite-plugin-static-copy
    ```

4.  **Kompile Aset (Sass & JS)**
    ```bash
    npm run build
    ```

5.  **Konfigurasi Environment**
    ```bash
    cp .env.example .env
    ```

6.  **Setup Database & Key**
    ```bash
    php artisan key:generate
    php artisan migrate
    ```

7.  **Jalankan Project**
    ```bash
    php artisan serve
    ```

---

## 📊 LAPORAN PROGRESS

> [!IMPORTANT]
> **Status Saat Ini:** Optimalisasi Backend & Styling.

Fokus saat ini adalah penyelesaian fungsi-fungsi di balik layar dan integrasi tampilan:
* ✅ Inisialisasi Project Laravel 12 & Vite.
* ✅ Integrasi Filament Admin Panel.
* ✅ Konfigurasi **Sass** untuk styling kustom.
* ✅ Setup **Vite Plugin Copy** untuk manajemen aset statis.
* 🚧 **Current Task:** Menyelesaikan logika **Backend** menggunakan Filament agar manajemen data lebih maksimal.

---

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
