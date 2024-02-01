# Base de données
## .env
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=Prototype_Sarsri_Imrane
DB_USERNAME=root
DB_PASSWORD=solicoders
```
## Migrations

```bash
php artisan make:migration create_school_years_table
php artisan make:migration create_groups_table
```
## Running Migrations
```bash
php artisan migrate
```