<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Pizza Project

This is a simple pizza application built using Laravel. It allows users to manage pizza information, including creating, reading, updating, and deleting pizza records. The app features a clean and responsive design, using shades of red for a pizza-themed aesthetic.

### Features

- **CRUD Functionality**: Users can create, read, update, and delete pizza entries.
- **Responsive Design**: The application is mobile-friendly and looks good on different screen sizes.
- **User-Friendly Interface**: Forms and buttons are styled for better usability.

### Getting Started

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/yourusername/pizza-project.git

2. **nstall Dependencies:**:

Navigate to the project directory and run:

   - cd pizza-project
   -  composer install

3. **Set Up Environment**:

Copy the .env.example file to .env and update your database credentials:

  - cp .env.example .env

4. **Generate Application Key**:

Run the following command to generate a new application key:

  - php artisan key:generate

5. **Migrate Database**:

Run migrations to set up the database:

  - php artisan migrate

6. **Run the Application**:

Start the Laravel development server:

  - php artisan serve

7. **Visit the App**:

Open your browser and go to http://localhost:8000 to see the application in action.

### Additional Setup

**CSS File**:

 Ensure that your CSS file (e.g., styles.css) is placed in the public directory for proper linking in your views. Link it in your Blade files like this:

   - <link rel="stylesheet" href="{{ asset('styles.css') }}">

**Blade Files**:

Ensure that your views are located in the resources/views/pizzas directory.

## Contributing

Feel free to fork the repository and make a pull request if you want to contribute to this project.

