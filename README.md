# EstateConsult - Real Estate Consulting & Client Portal

A Laravel and Livewire web application for **real-estate consulting workflows**, client communication, consultation requests and content publishing.

## Core Features

- Public real-estate consulting website
- User authentication and profile management
- Dedicated admin authentication and dashboard
- Client consultation request workflow
- Personal consultation history and detail pages
- Admin consultation review and status management
- Direct messaging between users and the platform
- Article/content publishing
- Country, state and city data models
- Real-estate branch and property-type domain models
- Arabic / English language switching
- Livewire-enabled Laravel application architecture

## Business Workflow

1. A visitor discovers the consulting service and content.
2. An authenticated user submits a consultation request.
3. The request becomes available in the user's consultation area.
4. Admin users review consultation requests from a dedicated dashboard.
5. The admin can update the consultation and communicate with the client.
6. Articles and informational content support lead generation and customer education.

## Tech Stack

- PHP
- Laravel
- Laravel Livewire
- Eloquent ORM
- MySQL / MariaDB
- Blade
- Authentication with separate user/admin flows
- Vite / frontend asset pipeline

## Main Domain Models

- Consultations
- Admin
- User
- Countries
- States
- Cities
- RealEstateBranch
- RealEstateType
- Articles
- Messages / Responses

## Local Setup

```bash
git clone https://github.com/achrafnouisser63/Real-Estate-Consulting-with-Livewire.git
cd Real-Estate-Consulting-with-Livewire

composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm run dev
php artisan serve
```

## Portfolio Focus

This project demonstrates a service-oriented Laravel application with separate admin/user workflows, relational data modeling, consultation lifecycle management, multilingual interfaces and real business communication flows.

## Author

**Achraf Nouisser**  
Web Developer - Laravel / PHP / JavaScript / Node.js / Python

- GitHub: https://github.com/achrafnouisser63
- Portfolio: https://www.canva.com/d/Xu6tPZ9s5Zu60wK
