<?php
// Update the details below with your MySQL details
$DATABASE_HOST = 'lazeeza.flamingfrisbee.com';
$DATABASE_USER = 'Laeeza';
$DATABASE_PASS = '2N,fX3n?v.eHGDp%#x@t';
$DATABASE_NAME = 'Lazeeza-Newsletter';
try {
    $pdo = new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    // Output all connection errors. We want to know what went wrong...
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
    // If there is an error with the connection, stop the script and display the error.
    exit('Failed to connect to database!');
}
?>