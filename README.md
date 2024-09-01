This file is responsible for establishing a connection to the MySQL database. It contains the necessary credentials and connection logic to ensure that your PHP application can interact with your MySQL database.

## Instructions

The `connector.php` file contains the following code:

```php
<?php

$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "newsdb";

$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Connection Failed" . $conn->connect_error);
}
```
Replace the variables `$dbServerName` , `dbUserName`, `dbPassword`, and `dbName` with the relavent values for you machine. 
