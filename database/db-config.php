<?php
    $DB_DNS='mysql:host=localhost;dbname=website';
    $DB_USER='MARIUS';
    $DB_PASS='marius';
    $option=[
        PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8',
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES=>false
    ];