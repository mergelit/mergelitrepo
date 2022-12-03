<!DOCTYPE HTML>
<html lang="en">
<body>
<?php


$type = 'mysql';
$servername = "localhost";
$dbname = "ourDatabase";
$port = 3306; //default port for laragon, might need to share that info
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;port=3306", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $statement = $conn->query("CREATE DATABASE IF NOT EXISTS $dbname");
    $statement->execute();

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $statement = $conn->query(
            "CREATE TABLE IF NOT EXISTS accounts (
                        ssnum int primary key,
                        admin bool not null,
                        fname varchar(25) not null,
                        lname varchar(25) not null,
                        password varchar(25) not null,
                        email varchar(25) not null,
                        subtype int check (subtype >= 1 and subtype <= 3))"
    );
    $statement->execute();
    echo "Connected successfully";
} catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
}
?>
</body>
</html>