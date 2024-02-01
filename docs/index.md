---
layout : default
slug: /index
order : 1
---

# Rapport


## Base de données
### .env
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=Prototype_Sarsri_Imrane
DB_USERNAME=root
DB_PASSWORD=solicoders
```
### Migrations

```bash
php artisan make:migration create_school_years_table
php artisan make:migration create_groups_table
```
### Running Migrations
```bash
php artisan migrate
```

## creation-app
### 1. Installation Laravel
```bash
composer create-project laravel/laravel app
```

### 2. Installing AdminLTE
#### 1.Installing AdminLTE por npm
```bash
npm install admin-lte@3.1.0
```

#### 2. Publishing AdminLTE assets
```bash
php artisan vendor:publish --provider="AdminLTE\AdminLTEServiceProvider"
```

#### 3. Importing AdminLTE CSS and JavaScript
- In resources/css/app.css, import the CSS from AdminLTE and Font Awesome:\
```bash
@import 'admin-lte/plugins/fontawesome-free/css/all.min.css';
@import 'admin-lte/dist/css/adminlte.min.css';
```
- In resources/js/app.js, import the AdminLTE JavaScript:
```bash
import 'admin-lte/dist/js/adminlte';
```
#### 4. Install dependencies and build assets
```bash
npm install
npm run dev
```
#### 5. Configuring Laravel to use Vite 
- Configuring Laravel to use Vite Open your Laravel layout file (for example, resources/views/layouts/app.blade.php) and include the Vite assets:

```bash
@vite(['resources/css/app.css', 'resources/js/app.js'])
```

### Installing FontAwesome Icons
```bash
npm install @fortawesome/fontawesome-free
```
- In resources/css/app.css, import the CSS from fontawesome
```bash
@import "@fortawesome/fontawesome-free/css/all.css";
```

## Front end
### Controller
```bash
php artisan make:controller GroupController -r
```

## Jeux test
### Create Models
```bash
php artisan make:model Group
php artisan make:model School_year
```

### Writing Seeders
```bash
php artisan make:seeder GroupSeeder
php artisan make:seeder School_yearSeeder
```

### Running Seeders
```bash
php artisan db:seed
```

## Jeux test
### Create Models
```bash
php artisan make:model Group
php artisan make:model School_year
```

### Writing Seeders
```bash
php artisan make:seeder GroupSeeder
php artisan make:seeder School_yearSeeder
```

### Running Seeders
```bash
php artisan db:seed
```

## Jeux test
### Create Models
```bash
php artisan make:model Group
php artisan make:model School_year
```

### Writing Seeders
```bash
php artisan make:seeder GroupSeeder
php artisan make:seeder School_yearSeeder
```

### Running Seeders
```bash
php artisan db:seed
```