# Laravel 3 Vlog

Laravel 3 Vlog is a Laravel content application for vlog/blog-style publishing workflows.

## Features

- Content posting and management foundation
- Laravel backend for routes, controllers, and models
- Database-backed posts or media records
- Admin-ready extension path

## Modules

- Content module: posts, categories, media, and page content
- Admin module: protected management screens when enabled
- User module: authentication or author profiles when implemented
- Media module: uploads, storage, and display assets
- Data module: migrations, models, and seeders

## System Architecture

The project follows Laravel MVC structure. Public routes display content, admin routes manage records, controllers coordinate content workflows, and models persist posts/media in the database. Storage can hold uploaded files and Vite/npm assets support the UI.

## Getting Started

```bash
git clone https://github.com/NahinAhmed28/laravel3_vlog.git
cd laravel3_vlog
composer install
cp .env.example .env
php artisan key:generate
npm install
npm run dev
php artisan serve
```
