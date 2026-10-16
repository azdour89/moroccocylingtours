# moroccocyclingtours.com: Laravel starter

Drop these files into a fresh Laravel 11 or 12 project (`composer create-project laravel/laravel moroccocyclingtours`).
No Node build step is needed: styles are plain CSS in `public/css/site.css`.

1. Copy the folders in this package over your project (routes/web.php replaces the default).
2. In `database/seeders/DatabaseSeeder.php`, inside `run()`, add: `$this->call(TourSeeder::class);`
3. Set your database in `.env`, then run:
   php artisan migrate --seed
   php artisan serve
4. Replace the placeholder tours in `TourSeeder.php` with your real itineraries and prices.

Inquiries from the contact form are saved in the `inquiries` table. To also receive them by email,
create a Mailable and uncomment the Mail line in `InquiryController@store`.
