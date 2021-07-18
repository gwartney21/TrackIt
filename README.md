## About Project
JustApply is an MVP job tracking application that allows users to take and keep track of all their job applications. As well as update their application status. 
This application is built with Laravel/Blade, BootstrapVue, while utilizing Laravel/Breeze for user authentication and the Eloquent ORM to handle user data.

## Specific features added to the project
- Users can create an account
- Users can add specific job listings to their accounts to be referenced.
- Users can take and update the status of each job based on the application process.

## Project demo
![Project Demo](https://github.com/gwartney21/JustApply/blob/main/Screen%20Recording%202021-07-17%20at%201.29.27%20PM.gif)


## First project design ideas

![App Screenshot](https://raw.githubusercontent.com/gwartney21/JustApply/main/DesignRedone.PNG)
![App Screenshot](https://raw.githubusercontent.com/gwartney21/JustApply/main/Designr2Redone.PNG)

## Curent project design
![App Screenshot](https://raw.githubusercontent.com/gwartney21/JustApply/main/Screen%20Shot%202021-07-17%20at%201.28.41%20PM.png)

![App Screenshot](https://raw.githubusercontent.com/gwartney21/JustApply/main/Screen%20Shot%202021-07-17%20at%201.28.53%20PM.png)

![App Screenshot](https://raw.githubusercontent.com/gwartney21/JustApply/main/Screen%20Shot%202021-07-17%20at%201.29.00%20PM.png)


## Future updates.
- Re update the project to utilize Laravel/Vue and bootstrap 5

- Update authentication to use Laravel/Jetstream instead of Breeze.

- I also would like to do further design for the project to make it mobile-friendly to support specific mobile devices. 

I would also have liked to add additional features from the original mock-up. 
  - Such as live notifications for users to set reminders for interviews
  - Allow users to take and upload resumes to each job posting to keep track or to reuse one if needed
  - As well as allow users to add favorite job listings.
 
## Deployment

To deploy this project run the following.

Install composer dependencies.
```bash
  composer install
```
Install npm dependencies.
```bash
  npm install
```
Create new .env file.
```bash
 cp .env.example .env
```
Generate the app key.
```bash
php artisan key:generate
```

Create an empty database for the project using the database tools you prefer.
For this project, I used TablePlus.

```bash
Database Name created for project: "justApply"
```

In the .env file, add database information to allow Laravel to connect to the database.

```bash
Eaample env info to connect to databasse:
  DB_CONNECTION=mysql
  DB_HOST=mysql
  DB_PORT=3306
  DB_DATABASE=justApply
  DB_USERNAME=root
  DB_PASSWORD=password
```

To start the server up I am using laravel Sail. Before we can migrate the datbase you will need to run the following to start the server. 
```bash
./vendor/bin/sail up
```
Once the server is started open a new comand line and enter the following.

```bash
./vendor/bin/sail php artisan migrate
```
Next seed the database using the following comand.
```bash
./vendor/bin/sail php artisan db:seed
```
Once the database is seeded you can then get a random user from the database. 
And go to the following URL.
```bash
User password is : "password"
http://0.0.0.0/login
```
