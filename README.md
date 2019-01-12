# Photo Gallery

This website was inspired by the [pixabay] and [unsplash] were people can share their picture which any user can use for their projects (open source), they can also like and share it with their friends. The website is really simple no frontend framework has been used. Maybe in the future, I will implement it in a Vue.js framework.This website is from users who are beginners and want to know how to apply  CRUD operations and how to upload an image to a database and how to display it in a card view.

# Features

  - User can upload images along side with their title and categorie 
  - User can search for a picture from a specific type of categorie
  - User can also perform CRUD operations (Create Read Update Delete)
  - User can also download the images 
  - User can also like someone elses post 
  - User also has a simple dashboard

### Tech

Photo Gallery uses a number of open source projects to work properly:

* [Laravel] - PHP based framework!
* [Twitter Bootstrap] - great UI boilerplate for modern web apps
* [javascript](www.javascript.com) - makes the website lightweight and great from animations
* [jQuery] - duh

And of course Photo Gallery itself is open source .

### Installation

Photo Gallery requires [Laravel] v5.7.6+ to run.

Download the project from the repo and then run these commands.

```sh
$ composer update 
$ php artisan serve
```
Once the server is running got to your .env file and change the database name and password to your database name and password.

### Screen Shots

#### Main Page
<p align="center">
  <img width="100%" height="300" src="https://user-images.githubusercontent.com/32094006/51079018-76514100-16e1-11e9-8b36-4e4cdbb6e6c9.PNG">
</p>

#### Dashboard
<p align="center">
  <img width="100%" height="300" src="https://user-images.githubusercontent.com/32094006/51079048-48b8c780-16e2-11e9-9bf2-387301410acf.PNG">
</p>

### Todos

 - Make the UI alot more intresting 
 - Add new features like a comment section to each post

**Free Software, Hell Yeah!**

[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does its job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)


   [dill]: <https://github.com/joemccann/dillinger>
   [Laravel]:<http://laravel.com>
   [unsplash]:<http://unsplash.com>
   [pixabay]:<http://pixabay.com>
   [git-repo-url]: <https://github.com/joemccann/dillinger.git>
   [Twitter Bootstrap]: <http://twitter.github.com/bootstrap/>
   [jQuery]: <http://jquery.com>
