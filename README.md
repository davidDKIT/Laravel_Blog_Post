### Hi there 👋, this laravel gaming blog is made by David and Terence.
![](https://img.freepik.com/free-vector/simple-unique-gaming-banner-template_92741-92.jpg?w=2000)

Why Gaming blog? Gaming blog is a fantastic way for a gamers, individual or group to communicate with their readers quickly and easily. It also offers an opportunity for readers to provide instant feedback in a virtual venue — creating a two-way conversation.
Blogs were originally called “web logs,” and they’ve redefined how we communicate online. Blogs have also altered the very fabric of the marketing model, moving us away from a selling philosophy and into an era of building relationships.

Skills: MySql, Php, Laravel, Tailwind Css


Terence's Github
[<img src='https://cdn.jsdelivr.net/npm/simple-icons@3.0.1/icons/github.svg' alt='github' height='40'>](https://github.com/davidDkit )  
David's Github
[<img src='https://cdn.jsdelivr.net/npm/simple-icons@3.0.1/icons/github.svg' alt='github' height='40'>](https://github.com/terenceyong)  

### Link to a youtube video about our the demo of our gaming blog
[![Watch the video](https://miro.medium.com/max/1400/1*gkc2iPNeEX_h1V4YmXbV1g.jpeg)](https://www.youtube.com/watch?v=gumL5fXVwAU)

## Requirements
•	PHP 7.3 or higher <br>
•	Node 12.13.0 or higher <br>

## Usage <br>
Setting up your development environment on your local machine: <br>
```
git clone git@github.com:codewithdary/laravel-8-complete-blog.git
cd laravel-8-complete-blog
cp .env.example .env
composer install
php artisan key:generate
php artisan cache:clear && php artisan config:clear
php artisan serve
```

## Before starting <br>
Create a database <br>
```
mysql
create database laravelblog;
exit;
```

Setup your database credentials in the .env file <br>
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelblog
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}
```

Migrate the tables
```
php artisan migrate
```

## Contributing
Do not hesitate to contribute to the project by adapting or adding features ! Bug reports or pull requests are welcome.
hello
