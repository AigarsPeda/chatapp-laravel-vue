# CHATAPP-LARAVEL-VUE

### Setup Database

Copy .env.example file in to the same directory
and rename it to .env add this configs

Configure DB

```bash
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=chatapp
DB_USERNAME=
DB_PASSWORD=
```

Change BROADCAST_DRIVER to pusher

```bash
BROADCAST_DRIVER=pusher
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=database
SESSION_LIFETIME=120
```

Make a account in https://pusher.com/ and make app and get
id, key, secret and clusters

```bash
PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=
```

### Run seeder

```bash
php artisan make:seeder ChatRoomSeeder
```

### Install dependencies

```bash
npm install
```

### Run App

```bash
php artisan serve
```

And in deferent terminal tab run

```bash
npm run hot
```

Runs the app in the development mode.<br />
Open [http://localhost:8000/](http://localhost:8000/) to view it in the browser.

The page will reload if you make edits.<br />
You will also see any lint errors in the console.
