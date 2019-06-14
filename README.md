<img src="https://colorlib.com/wp/wp-content/uploads/sites/2/Login_v1.jpg" width="100%"/>

# PHP Based Login API with Example
This is a php based login api that can be used with website or application. It takes the email and password as input and processes the data and gives the corresponding data as json output.

## Installation
Use Git or checkout with SVN using the web URL.
```sh
https://github.com/rafathossain96/PHP-Based-Login-API-with-Example.git
```

## Create the database and table
Create a database on your cPanel or in localhost. Remeber the credentials that we will need later. Create the database table with the query:
```sql
CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1
```

## Connecting the database with the API
Follow the directory and open the file "Constants.php"
```sh
API/Script Home >> /api/lib/Constants.php
```
You will find something like this:
```sh
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'YOUR_USERNAME_HERE');
define('DB_PASSWORD', 'YOUR_PASSWORD_HERE');
define('DB_NAME', 'YOUR_DATABASE_NAME_HERE');
```
Edit the file and replace as following:
```text
YOUR_USERNAME_HERE >> Username that was set while creating the database
YOUR_PASSWORD_HERE >> Password that was set while creating the database
YOUR_DATABASE_NAME_HERE >> Your Database Name
```
Save the file and close it.

## Configuring the API
Open the file name DbOperation.php
```sh
API/Script Home >> /api/lib/DbOperation.php
```
You will find the keyword "table_name_here" on line 17 and line 31. Replace this line with your table name that was set earlier while creating the table.
```sh
table_name_here >> login
```
Save the file and close it.

## Testing
Before testing, please add some data on the database from phpmyAdmin using the INSERT SQL Query.

### Test by browser:
Now on your browser, open the index.php file and test the login with email and password. After successful login, you will see json output on screen according to your input.

### Test using POSTMAN:
Open postman and create a request as below. Change the URL to login.php file's URL. and click SEND. You will see the corresponding json output.
<img src="https://camo.githubusercontent.com/0a35c86291e10c1e9f79994c7da70c24bf51a84a/68747470733a2f2f692e6962622e636f2f424e7146625a432f53637265656e73686f742d322e706e67" width="100%"/>

## License
### Template
The template [Login Form v1 by Colorlib](https://colorlib.com/wp/template/login-form-v1/) is licensed under CC BY 3.0 by Colorlib

Meaning you are not allowed to remove footer credits.

### Code
The code in this repository, including all code samples in the notebooks listed above, is released under the MIT license. Read more at the [Open Source Initiative](https://opensource.org/licenses/MIT).
