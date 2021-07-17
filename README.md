## About Project
JustApply allows users to take and keep track of jobs being applied to. As well as the aplication status. 
This aplication is built with laravel using blade templates for rendering the front end. And uses the Elequent ORM to handle user data. 


## Specific features added to project
- User is able to create account
- User will then be able to add specific job listings to there account to be refrecnced.
- User can then take and update the status of each job based on the aplication process.

## How I worked on this project
My goal was to simulate a agile work envirment as cloase as posible.
To do this I completed the following.
- I built this app based on Figma designs shown below: 

## First project design ideas

![App Screenshot](https://raw.githubusercontent.com/gwartney21/JustApply/main/DesignRedone.PNG)
![App Screenshot](https://raw.githubusercontent.com/gwartney21/JustApply/main/Designr2Redone.PNG)

## Curent project design
![App Screenshot](https://raw.githubusercontent.com/gwartney21/JustApply/main/CurrentDesignImageOne.PNG)

![App Screenshot](https://raw.githubusercontent.com/gwartney21/JustApply/main/CurrentDesignTwo.PNG)

![App Screenshot](https://raw.githubusercontent.com/gwartney21/JustApply/main/CurrentDesignThree.PNG)

- I then laid out the intial project requirements that I kept track of using a trello board.

- As tasks were added and completed I would then go through and test each feature that was added.
- I would then make sure to commit each new completed feature through version control.
- Once Completed I would then take continue to follow the cycle until all designs and tasks were complete.


## If I had more time I would change the following.
- I would first reset the project to be based on a rest api. To help seperate front end and back end logic. I would also re implment the design using vue js to be able to utalize vue compoents.
- I would also implment larvel jet stream  interta to help render vue templates.
- I also would like to do further design for the project to make it mobile freindly to support specific mobile devices. 
I would also have liked to add additinal features from the orignal mock up. 
  - Such as live notifcations for users to set reminders for interviews
  - Allow users to take and upload resumes to each job posting to keep track or to reuse one if needed
  - As well as allow users to add favirote job listigs.
- Lastly if I had more time I would aslo implment Test driven development into the cycle. As to elimnate having to manualy test features.



## Deployment

To deploy this project run the folowing.

Intall composer dependeinces
```bash
  composer install
```
Install npm dependeinces
```bash
  npm install
```
Create new .env file
```bash
 cp .env.example .env
```
Generate the app key
```bash
php artisan key:generate
```

Create an empty database for the project using the database tools you prefer.
For this project I used table plus

```bash
Database Name created for project: "justApply"
```

In the .env file, add database information to allow Laravel to connect to the database

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
Next seed the database using the following comand
```bash
./vendor/bin/sail php artisan db:seed
```
Once the database is seeded you can then get a random user from teh database. 
And go to the following url.
```bash
User password is : "password"
http://0.0.0.0/login
```
From here you can now begin  viewing the  job list adding jobs to the list as well as updating jobs. All shown in the gif above.
You can also refer to the routes listed above to help navigate the aplication.
