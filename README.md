# TechNews

A modern tech news platform featuring a subscriber community, dynamic blog engine, and admin dashboard. Built with Laravel and Tailwind CSS for speed, simplicity, and scale.

![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=flat-square&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.4+-777BB4?style=flat-square&logo=php)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-4.x-38B2AC?style=flat-square&logo=tailwind-css)

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
- PHP 8.4+
- Node.js 18+
- MySQL 8.0+ (via Lampp or native installation)
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

**Step 4: Configure Database (Local)**

For **Lampp (XAMPP)** - recommended for local development:
```bash
# Start Lampp MySQL
sudo /opt/lampp/lampp startmysql

# Create database using Lampp MySQL
/opt/lampp/bin/mysql -u root -e "CREATE DATABASE IF NOT EXISTS newsletter_project CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"

# Update .env file
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8000
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=newsletter_project
DB_USERNAME=root
DB_PASSWORD=
```

For **native MySQL**:
```bash
mysql -u root -p
CREATE DATABASE newsletter_project CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
EXIT;

# Update .env accordingly with your MySQL credentials
```

**Step 5: Run Migrations**
```bash
php artisan migrate
```

**Step 6: Create Storage Symlink**
```bash
php artisan storage:link
```

**Step 7: Start Development Server**

All-in-one command (recommended):
```bash
composer run dev
```

Or manually in separate terminals:
```bash
# Terminal 1 - Vite asset bundler
npm run dev

# Terminal 2 - Laravel server
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

### Local Development (Fast Setup)
```bash
# Single command to start everything:
# - Laravel server on http://127.0.0.1:8000
# - Vite on http://localhost:5173
# - Queue listener
# - Application logs (pail)
composer run dev
```

Press `Ctrl+C` to stop all processes.

### Individual Commands
```bash
# Watch & compile assets (in terminal 1)
npm run dev

# Laravel development server (in terminal 2)
php artisan serve

# Queue listener for background jobs (in terminal 3)
php artisan queue:listen

# Tail application logs (in terminal 4)
php artisan pail
```

### Other Useful Commands
```bash
# Run tests
php artisan test

# Clear all caches
php artisan optimize:clear

# Generate cache tables (if needed)
php artisan cache:table
php artisan queue:table
```

## Deployment (Production)

### Pre-Deployment Setup

**Step 1: Environment Configuration**
```bash
# Create .env for production
cp .env.example .env

# Set production values
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com

# Database (use your production database)
DB_CONNECTION=mysql
DB_HOST=your-db-host
DB_PORT=3306
DB_DATABASE=newsletter_project
DB_USERNAME=db_user
DB_PASSWORD=secure_password

# Mail configuration (update with your SMTP details)
MAIL_MAILER=smtp
MAIL_HOST=your-smtp-host
MAIL_PORT=587
MAIL_USERNAME=your-email
MAIL_PASSWORD=your-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@yourdomain.com

# Cache and Queue (for production stability)
CACHE_STORE=database
QUEUE_CONNECTION=database
```

**Step 2: Generate Application Key**
```bash
php artisan key:generate
```

**Step 3: Install & Optimize Dependencies**
```bash
composer install --no-dev --optimize-autoloader
npm install --production
```

**Step 4: Build Frontend Assets**
```bash
npm run build
```

**Step 5: Run Migrations**
```bash
php artisan migrate --force
```

**Step 6: Create Storage Symlink**
```bash
php artisan storage:link
```

**Step 7: Cache Configuration & Routes (Performance)**
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

**Step 8: Set Permissions**
```bash
# For Linux/Unix servers
sudo chown -R www-data:www-data storage bootstrap/cache
chmod -R 755 storage bootstrap/cache
```

### Web Server Configuration

**Nginx**
```nginx
server {
    listen 80;
    server_name yourdomain.com;
    root /path/to/newsletter-project/public;
    
    index index.php;
    
    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }
    
    location ~ \.php$ {
        fastcgi_pass unix:/run/php/php8.4-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }
    
    location ~ /\.ht {
        deny all;
    }
}
```

**Apache** (with `.htaccess` in `public/`)
- Point document root to `public/`
- Enable mod_rewrite
- Verify `.htaccess` exists in `public/` directory

### Running Queue Workers (Background Jobs)

For sending newsletters and processing jobs in production:
```bash
# Daemon worker (recommended)
php artisan queue:work --timeout=60

# Or with supervisor for auto-restart:
# Create /etc/supervisor/conf.d/newsletter-queue.conf
[program:newsletter-queue]
process_name=%(program_name)s_%(process_num)02d
command=php /path/to/newsletter-project/artisan queue:work --timeout=60
numprocs=2
directory=/path/to/newsletter-project
redirect_stderr=true
stdout_logfile=/var/log/newsletter-queue.log
```

### Monitoring & Maintenance

```bash
# Check for failed jobs
php artisan queue:failed

# Retry failed jobs
php artisan queue:retry all

# Prune old database entries
php artisan tinker
>>> DB::table('jobs')->delete();
>>> exit
```

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
