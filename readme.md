## Follow the following documentation to install this project

Type the following command to clone the repository

-   git clone https://github.com/basanta123/laravel-aws.git

-   cd laravel-aws
-   copy .env.example to .env
-   add your configurations in .env file

Install the project dependencies

-   composer install

Generate the application key

-   php artisan key:generate

Manage permission of stroage folder

-   sudo chmod -R 777 storage/

If you have virtual host or server block configured then type your url to visit the application in the browser if you have not configured then type

-   php artisan:serve

and visit http://localhost:8000 in your browser

Deployment

-   github webhook is used for automated deployment.
