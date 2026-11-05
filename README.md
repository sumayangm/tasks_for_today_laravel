# Tasks for Today Management System

A Laravel task-management website that displays tasks for today, a complete task list, a developer profile, and an about page.

## Developer

Kyle Christian Sumayang

## Features

- Welcome page showing only today's tasks
- Complete task list ordered by task date
- Developer profile page
- About page
- Laravel migrations and seeders
- Eloquent models for tasks and users
- MySQL database integration

## Database Setup

1. Create a MySQL database named `tasks_for_today_laravel`.
2. Configure the `.env` file:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tasks_for_today_laravel
DB_USERNAME=root
DB_PASSWORD=
SESSION_DRIVER=file