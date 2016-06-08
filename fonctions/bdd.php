<?php
function bdd(){
    try {
        $bdd = new PDO("mysql:dbname=blog;host=localhost", "root", "root");
    } catch (PDOException $e) {
        echo 'Connection echouée : ' . $e->getMessage();
    }
    return $bdd;
}