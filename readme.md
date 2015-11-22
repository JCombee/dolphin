## Dolphin

Dolphin is a task manager for assigning employees to tasks.

## Installation

The commands to fully install and start working with Dolphin.

We expect that php is installed correctly and assigned to the path's and a database is up and running.

```
git clone https://github.com/JCombee/dolphin.git
composer install
npm install
bower install
```

Now you need to edit .env and setup the correct variables for your database.
After you saved .env you can run this command:

```
php artisan migrate
```

Now all tables are created and you can run on your server in the appropriate environment.

### Environment

Now you can choose to run Dolphin in a development or in a live environment.

#### Development

Run this command:

```
php artisan serve
```

#### Live

T.B.C.