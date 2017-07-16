<?php
   define('DB_SERVER', 'qrveyapp1.c9uwmj34uojp.us-west-2.rds.amazonaws.com:1433');
   define('DB_USERNAME', 'shabbirbata');
   define('DB_PASSWORD', 'Sb636027');
   define('DB_DATABASE', 'admin');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>