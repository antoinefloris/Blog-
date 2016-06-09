<?php
function bdd(){
    try {
        $bdd = new PDO("mysql:dbname=blog;host=localhost", "root", "root", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    } catch (PDOException $e) {
        echo 'Connection echouée : ' . $e->getMessage();
    }
    return $bdd;
}