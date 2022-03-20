# Prerequisities
1. [XAMPP](https://www.apachefriends.org/index.html)
2. [Composer](https://getcomposer.org/)
3. [Node.js](https://nodejs.org/)

# Setting Up
1. Run `composer install`
2. Run `npm install && npm run watch`
3. Setup .env file, Refer .env.example
4. Run #Launch steps.
5. Run `php artisan key:generate`
6. Run `php artisan migrate --seed`

# Launch
1. Launch XAMPP
2. Create Database - employeez
3. Run `php artisan serve`

# Note
- Due to security purpose the submission will not include most of the env values.
- Please run Setting Up and Launch steps