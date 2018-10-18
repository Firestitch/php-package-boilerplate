# Creating a New Package

Create a new GitHub Project with the following pattern https://github.com/Firestitch/php-[name]

Copy the contents of the repo https://github.com/Firestitch/php-package-boilerplate into the newly created repo

Open the composer.json and rename the name property to the name of the package

To register the package goto https://packagist.org/packages/submit and enter the GitHub repo ie: https://github.com/Firestitch/php-[name] and submit the form.

# Installing Existing Package

First clone the codebase into a local directory. Besure to update all submodules recursively.

Nginx
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
Apache:
```
<VirtualHost *:80>
    ServerName [package-name].local.firestitch.com
    DocumentRoot [local-directory]\demo
    <Directory "[local-directory]\demo"> 
        AllowOverride All
        Require all granted
        DirectoryIndex index.php
    </Directory>
</VirtualHost>
```

In the root of the codebase run the following command

```
php composer.phar update
```


# Publishing 

Once the code is developed and tested goto the package in Packagist ie: https://packagist.org/packages/firestitch/pdf and click the update button to publish the latest changes.
