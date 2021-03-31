<?php
define("DB_HOST", "192.168.56.1");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "registration");
$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE) or die($link);
