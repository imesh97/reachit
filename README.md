# ReachIt

Your one-stop shop for all your hardware needs.  
A full stack web application for listing and selling local hardware products.

By: Imesh N., Virain B., Jeevan N., Meeraj H., Buddima D., and Amit S.

## Tech Stack

- PHP
- JavaScript
- Apache
- MySQL
- HTML/CSS
- Bootstrap

## Run Locally

First, clone the repository. Then, ensure that you have Apache and MySQL installed as they are dependencies for the tech stack.

Create a MySQL user and a database for administrative usage. Then, create the appropriate `products` and `users` tables.

Next, update the database login details in the `php/db.php` file:

```
$servername = "localhost";
$username = "USERNAME";
$password = "PASSWORD";
$dbname = "DB_NAME";
```

Finally, run the Apache server and view the site locally at `localhost`
