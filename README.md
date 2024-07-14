<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="200" alt="Laravel Logo"></a></p>

## Project Overview
A simple book store management application built with Laravel. This app allows users to manage books, including adding, editing, and deleting book entries, with a user-friendly interface.

## Features
- Add new books to the store
- display of all available books 
- Edit existing book details
- Delete books from the inventory
- User-friendly interface 
  
## Installation Instructions

### Prerequisites
Make sure you have the following installed: PHP (>= 7.3), Composer, MySQL, and Laravel (install globally via Composer).

### Steps to Set Up
1. Clone the repository:  
   `git clone https://github.com/yourusername/BookStore-App.git`

2. Navigate to the project directory:  
   `cd BookStore-App`

3. Install dependencies:  
   `composer install`

4. Create a `.env` file:  
   Copy the example environment file:  
   `cp .env.example .env`

5. Generate application key:  
   `php artisan key:generate`

6. Set up the database:  
   - Create a new MySQL database for the application.  
   - Update your `.env` file with the database connection details.

7. Run migrations:  
   `php artisan migrate`

8. Start the development server:  
   `php artisan serve`

9. Access the application:  
   Open your web browser and go to `http://localhost:8000`.
  
  
