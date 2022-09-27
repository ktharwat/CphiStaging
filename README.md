# how to run the project

Please before you start make sure you have PHP, Composer and Xamp.

These are the steps to clone the repo and run it locally.

1. Clone your project
2. Go to the folder application using cdcommand on your cmd or terminal
3. Run composer install on your cmd or terminal
4. Copy .env.example file to .env on the root folder. You can type copy .env.example .env if using command prompt Windows or cp .env.example .env if using terminal, Ubuntu
5. Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.
6. Run php artisan key:generate
7. Run php artisan migrate
8. Run php artisan serve
9. Go to http://localhost:8000/
