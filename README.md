# A simple calendar server

This server contains the main endpoints for authentication and saving calendar events via tokens.

## Setup

First, clone the repo and  move into the project
```bash
git clone https://github.com/aluissp/calendar-server.git
cd calendar-server
```

### Install dependencies
You can install the dependencies with the following command:
 ```bash
 composer install
```
### Set environment variables
After that you need to setup  __.env__ file, so copy the env.template file.
```bash
cp .env.example .env
```
Then, edit database name, user and password.
```text
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user_name
DB_PASSWORD=your_database_password
```
### Generate encryption key
You must generate the encryption key into the project.
```bash
php artisan key:generate
```
### Run the migrations
When the environment variables have set up already, you need to run the migrations.
```bash
php artisan migrate
```
Or run the following command to create generic data and a test user.
```bash
 php artisan migrate:fresh --seed
```
### Run locally
Use the following command to run the server on __localhost:8000__.
```bash
php artisan serve
```
You can see the endpoints.
```bash
php artisan route:list
```
### Test the api from the client side.
You can use postman to test each endpoint. However, I've added a calendar events app done with react. You just visit [localhost:8000](http://localhost:8000 "Calendar app")

If you have run the migrations with a test user, use this credentials to authenticate.

```text
email: test@test.com
password: test1234
```
