1. Make sure to install dependencies run:
   `composer install`
   `npm install`

2. Rename `.env.example` to `.env`

3. Run: `php artisan key:generate`

4. Set up your database in `.env`

```

DB_HOST=localhost
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

```

5. Get the tables with:
   `php artisan migrate`

6. Generate table initial values with:
   `php artisan db:seed`

7. Start the back end with:
   `php artisan serve`

8. Start the front end with:
   `npm run dev`
