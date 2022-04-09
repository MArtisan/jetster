# SETUP

laravel new jetster

git remote add origin git@github.com:MArtisan/jetster.git

git push origin main

git branch -M dev

composer require laravel/jetstream

php artisan jetstream:install livewire

npm install && npm run dev

php artisan migrate

php artisan vendor:publish --tag=jetstream-views

php artisan make:livewire counter

This will generate the following two files:
- app\Http\Livewire\Counter.php
- resources\views\livewirecounter.blade.php

