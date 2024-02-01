# creation-app
## 1. Installation Laravel
```bash
composer create-project laravel/laravel app
```

## 2. Installing AdminLTE
### 1.Installing AdminLTE por npm
```bash
npm install admin-lte@3.1.0
```

### 2. Publishing AdminLTE assets
```bash
php artisan vendor:publish --provider="AdminLTE\AdminLTEServiceProvider"
```

### 3. Importing AdminLTE CSS and JavaScript
- In resources/css/app.css, import the CSS from AdminLTE and Font Awesome:\
```bash
@import 'admin-lte/plugins/fontawesome-free/css/all.min.css';
@import 'admin-lte/dist/css/adminlte.min.css';
```
- In resources/js/app.js, import the AdminLTE JavaScript:
```bash
import 'admin-lte/dist/js/adminlte';
```
### 4. Install dependencies and build assets
```bash
npm install
npm run dev
```
### 5. Configuring Laravel to use Vite 
- Configuring Laravel to use Vite Open your Laravel layout file (for example, resources/views/layouts/app.blade.php) and include the Vite assets:

```bash
@vite(['resources/css/app.css', 'resources/js/app.js'])
```

## Installing FontAwesome Icons
```bash
npm install @fortawesome/fontawesome-free
```
- In resources/css/app.css, import the CSS from fontawesome
```bash
@import "@fortawesome/fontawesome-free/css/all.css";
```