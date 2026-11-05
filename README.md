# Laravel Task List App

![Laravel Version](https://img.shields.io/badge/Laravel-13.x-FF2D20?style=flat-square&logo=laravel&logoColor=white)
![PHP Version](https://img.shields.io/badge/PHP-8.3%2B-777BB4?style=flat-square&logo=php&logoColor=white)
![Composer Version](https://img.shields.io/badge/Composer-2.x-885630?style=flat-square&logo=composer&logoColor=white)
![MySQL Version](https://img.shields.io/badge/MySQL-9.x-4479A1?style=flat-square&logo=mysql&logoColor=white)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg?style=flat-square)](LICENSE)

<a href="https://github.com/mdinehin/laravel-task-list-app/actions/workflows/tests.yml"><img src="https://github.com/mdinehin/laravel-task-list-app/workflows/Tests/badge.svg" alt="Tests"></a>
<a href="https://github.com/mdinehin/laravel-task-list-app/actions/workflows/coding-standards.yml"><img src="https://github.com/mdinehin/laravel-task-list-app/actions/workflows/coding-standards.yml/badge.svg" alt="Coding Standards"></a>

A clean task management application built with Laravel 13, Tailwind CSS, and Alpine.js.

## Preview

![Application demo walkthrough](https://github.com/user-attachments/assets/0a696487-3d80-4b6f-b876-89b8dc52e013)

## Features

- Task Management: Create, update, complete, and delete daily tasks.
- Interactive UI: Smooth, responsive interface with dismissible flash notifications.
- Robust Validation: Unified, clear error feedback on form inputs.

## Prerequisites

The following software dependencies are required:

- PHP 8.3+
- [Composer](https://getcomposer.org/download/)
- [MySQL](https://www.mysql.com/downloads/)

## Installation

1. Clone the repository `git clone https://github.com/mdinehin/laravel-task-list-app.git`
2. Install PHP dependencies with `composer install`
3. Copy the `.env.example` file to `.env` and fill in the database credentials
4. Generate the application key with `php artisan key:generate`
5. Run database migrations with `php artisan migrate`
6. Run database seeds with `php artisan db:seed`
7. Start the local server by running `php artisan serve`

Open [http://127.0.0.1:8000](http://127.0.0.1:8000) in your browser to access the application.

## Commands

| Command | Description |
| --- | --- |
| `php artisan test` | Run the tests |
| `php artisan migrate:fresh --seed` | Reset the database |
| `composer types:check` | Perform static code analysis |
