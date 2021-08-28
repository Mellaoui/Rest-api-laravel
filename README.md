
## Steps for setup

- Setup your Mysql DB 
- `php artisan migrate --seed` this will generate seeder data
- Boot up the serve
- `php artisan serve` 
## Api end Points
- `http://127.0.0.1:8000/api/websites/1/posts` this will post in a website with ID of 1
- `http://127.0.0.1:8000/api/websites/2/subscribe` this will subscribe a new user to a web site with ID of 2

