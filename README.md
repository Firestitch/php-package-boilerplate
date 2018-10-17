# Creating a New Package

Create a new GitHub Project with the following pattern https://github.com/Firestitch/php-[name]

Copy the contents of the repo https://github.com/Firestitch/php-package-boilerplate into the newly created repo

Open the composer.json and rename the name property to the name of the package



# Installing Existing Package

First clone the codebase into a local directory. Besure to update all submodules recursively.

```
server {
    listen       80;
    server_name  [package-name].local.firestitch.com;
    root         [local-directory]\demo;
    include      c:/nginx/default.d/*.conf;

    location / {
      try_files $uri /index.php?$query_string;
    }
}
```

In the root of the codebase run the following command

```
php composer.phar update
```


# Publishing 

Once the code is developed and tested use the submit form to publish the package. https://packagist.org/packages/submit