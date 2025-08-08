# Project

A clean MVC layout with separated backend and frontend.

## Structure
- backend: Laravel MVC application (routes, controllers, models, views)
- frontend: Vite/Tailwind assets (build outputs to backend/public/build)
- shared: placeholder for cross-cutting code/assets
- infra: placeholder for deployment/scripts

## Backend
1) cd backend
2) cp .env.example .env
3) composer install
4) php artisan key:generate
5) php artisan migrate
6) php artisan serve

## Frontend
1) cd frontend
2) npm ci
3) npm run dev

Build assets with  (outputs to backend/public/build).
