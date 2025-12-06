# TechNews

A modern tech news platform featuring a subscriber community, dynamic blog engine, and admin dashboard. Built with Laravel and Tailwind CSS for speed, simplicity, and scale.

![Laravel](https://img.shields.io/badge/Laravel-11.x-FF2D20?style=flat-square&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=flat-square&logo=php)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-3.x-38B2AC?style=flat-square&logo=tailwind-css)

## Features

**Public Site**
- Landing page with hero, testimonials, and call-to-action
- Dynamic blog with SEO-friendly detail pages
- Subscriber management system
- Contact form with support ticketing
- Newsletter signup integration

**Admin Dashboard**
- Modern, analytics-focused dashboard with KPI cards
- Manage blog posts (create, edit, publish)
- Subscriber list and status tracking
- Contact/support ticket queue
- Admin profile management

## Quick Start

### Requirements
- PHP 8.2+
- Node.js 18+
- MySQL 8.0+
- Composer

### Installation (Step by Step)

**Step 1: Clone & Navigate**
```bash
git clone <repo-url>
cd newsletter-project
```

**Step 2: Install Dependencies**
```bash
composer install
npm install
```

**Step 3: Setup Environment**
```bash
cp .env.example .env
php artisan key:generate
```

**Step 4: Create Database**
```bash
mysql -u root -p
CREATE DATABASE newsletter_db;
EXIT;
```

**Step 5: Run Migrations**
```bash
php artisan migrate
```

**Step 6: Start Development Server**
```bash
npm run dev
```

In another terminal:
```bash
php artisan serve
```

Visit: **http://localhost:8000**

## Routes

| `/` | Home with hero, features, latest blogs |
| `/blog` | Blog listing (paginated) |
| `/blog/{slug}` | Blog detail with related posts |
| `/contact` | Contact form & support tickets |
| `/admin` | Admin dashboard (protected) |

## Stack

- **Laravel 11** – Backend framework
- **Blade** – Template engine
- **Tailwind CSS** – Utility-first styling
- **Vite** – Asset bundling
- **MySQL** – Database
- **Pest** – Testing framework

## Development

```bash
# Watch & compile assets
npm run dev

# Build for production
npm run build

# Run tests
php artisan test

# Clear all caches
php artisan optimize:clear
```

## Deployment

```bash
# Build assets
npm run build

# Cache config & routes
php artisan config:cache
php artisan route:cache

# Optimize
composer install --no-dev --optimize-autoloader

# Set permissions
chmod -R 755 storage bootstrap/cache
```

Point your web server root to `public/`.

## Project Structure

```
app/Http/Controllers/       # Page & API controllers
app/Models/                 # Blog, Subscriber, Contact models
database/migrations/        # Schema definitions
resources/views/            # Blade templates
  admin/                    # Admin dashboard pages
  layouts/                  # App layout
  partials/                 # Reusable components
routes/web.php              # Public & admin routes
```

## License

MIT
