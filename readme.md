## User-Tasklist Web Application
----------
This is a user-based tasklist application made with:
- **Laravel Framework** *Version*: 5.8 (https://laravel.com).
- **Zurb's Foundation CSS Framework** (https://foundation.zurb.com/)
- The application takes advantage of laravel frontend presets found on (https://github.com/laravel-frontend-presets). 

It has implemented:
-  **Zurb's Foundation** motion UI library and also some of its robust, user-friendly plugins and features such as:
    - [Motion UI](https://foundation.zurb.com/sites/docs/motion-ui.html)
    - [Abide (_form validation_)](https://foundation.zurb.com/sites/docs/abide.html)
    - [Reveal (_modal_)](https://foundation.zurb.com/sites/docs/reveal.html)
    - [XY Grid](https://foundation.zurb.com/sites/docs/xy-grid.html)
    - [prototype utilities](https://foundation.zurb.com/sites/docs/prototyping-utilities.html)  
    - among [others](https://foundation.zurb.com/sites/docs").
- **Laravel's** robust features such as:
    - [Eloquent](https://laravel.com/docs/5.8/eloquent)
    - [Blade Templates](https://laravel.com/docs/5.8/blade)
    - [Route Model Binding](https://laravel.com/docs/5.8/routing#route-model-binding)
    - [Migrations](https://laravel.com/docs/5.8/migrations)
    - among [others](https://laravel.com/docs/5.8).

## About
----------
This application allows a registered user to:
- Create a task(s).
- View a task(s).
- Delete a task(s).
- Create a sub-task under a particular task.
- Mark a sub-task as complete/incomplete.

## Requirements
---------- 
- PHP 7.2 and above installed
- MySQL or sqlite or postgres installed
- Internet connection
- For linux/OSX machines, please be sure to check permissions on this project

## Use
---------- 
- Clone this repo or download the zip file
- Extract from zip file 
- Open the contents in your favourite text editor
- At the root of the folder, create a .env file
- Copy contents of .env.example to the newly created .env file
- Configure your favorite database (mysql, sqlite etc.) and other preferred settings.
- Open terminal
- `npm install`
- `npm run dev`
- `php artisan migrate` to create tables
- `php artisan serve` (or equivalent) to run server and test.
- `127.0.0.1:8000` on your local machine.

**NOTE**: _You must have access to the internet for motion UI to work since its imported through a CDN._
