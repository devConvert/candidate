<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

date_default_timezone_set('UTC');

PHPWSConfig::$admin_username = "candidate";
PHPWSConfig::$admin_password = "123456";

PHPWSConfig::$routing = array(
  "log" => array("1", "main", "log"),
  "mail" => array("1", "main", "mail"),
  "ping" => array("1", "main", "ping")
);

PHPWSConfig::$db_connections = array(
    "candidate" => array(
                "host" => "localhost",
                "user" => "root",
                "pass" => "PUT_PASSWORD_HERE",
                "db_name" => "candidate",
                "port" => 3306
    )
);
