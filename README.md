# Event Booking App

This is a simple full stack application that provides end users with the ability to book tickets for various events. The core functionality includes viewing events and booking tickets.

The booking system ensures some basic business logic (checking if tickets are available, as well as how many tickets each user can buy) and a confimration screen on successful purchase.

## Architecture and Technologies

The tech stack used for this project is as follows:

-   Laravel
-   Inertia
-   Vue
-   PHPUnit
-   Tailwind

In terms of architecture, the application features the commonly used Controller-Service-Repository pattern. This model of layer decoupling supports separation of concers and allows for better unit testing. It also makes the code cleaner and easier to debug and maintain.

## Features:

-   view all events
-   filter events by country
-   book tickets to event (this also creates a new user)

## Endpoints:

-   GET /events: returns all existing events
-   GET /event/{id}/tickets: returns an individual event based on ID
-   POST /event/{id}/tickets: cretes a new user in DB and books the tickets for that user based on ID

## To spin up the project locally:

1. Make sure to install dependencies run:
   `composer install`
   `npm install`

2. Run: `php artisan key:generate`

3. Rename `.env.example` to `.env`

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
