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

## How to navigate project files
- Blade Templates: [Link to example code on GitHub]
- Controler logic: [Link to example code on GitHub]
- Web Routes

## Why I built the project this way
- For this project specificly I chose to use blade server side rendering. The reason for this was to get exposure to using server side template rendering. With out having to set up a restapi. 
- Along with this I decided to use laravel Breeze for user Authentication due to its simplicity. As I was not needing the extra features that come with other libarys such as laravel jetstream.
- To help build the project designs. I also chose to use BootStrapVue to work with a 12 colum grid system.

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

To deploy this project run

```bash
  npm run deploy
```

  
