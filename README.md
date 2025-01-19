# Laravel Blog Project

A simple blog project built with Laravel, featuring blog posts with images, titles, descriptions, and pagination. It uses Faker to generate fake data for testing purposes.

## Features

- Display blog posts with a title, description, and image.
- Pagination to navigate through multiple pages of posts.
- Faker to generate random data for blog posts.
- Responsive layout for mobile and desktop devices.

## Requirements

- PHP >= 8.0
- Composer
- Laravel 8 or later
- Database (MySQL)

## Installation

Follow the steps below to set up the project:

### 1. Clone the Repository
```bash
git clone https://github.com/Choubi-Mohammed/blog-laravel-.git
cd blog-laravel-
```

### 2. Install Dependencies
Run the following command to install the required PHP dependencies via Composer:
```bash
composer install
```

### 3. Set Up Environment Variables
Copy the `.env.example` file to `.env` and update the database configuration:
```bash
cp .env.example .env
```
Then, open the `.env` file and configure the database connection:
```env
DB_DATABASE=blog_db
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 4. Create Database
Create a new database for your project:
```sql
CREATE DATABASE blog_db;
```

### 5. Run Migrations and Seeders
Run the migrations and seeders to set up the database and add fake data:
```bash
php artisan migrate --seed
```

### 6. Run the Application
Start the Laravel development server:
```bash
php artisan serve
```
You can now access the blog at `http://127.0.0.1:8000`.

## Folder Structure

- `app/Models/Post.php`: Model for the `Post` entity.
- `database/migrations/xxxx_xx_xx_create_posts_table.php`: Migration file for creating the posts table.
- `database/seeders/PostSeeder.php`: Seeder for generating fake posts.
- `resources/views/posts/index.blade.php`: View to display the posts with pagination.

## Preview

The blog will display a list of blog posts with the following information:

- **Title**: A randomly generated title.
- **Description**: A short description of the post (truncated to 100 characters).
- **Image**: A random image from `picsum.photos`.
- **Pagination**: Links for browsing through multiple pages of blog posts.
