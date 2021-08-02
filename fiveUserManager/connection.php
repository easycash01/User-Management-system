<?php
$accapo = '</br>';
$config = require 'configDB.php';

$connessioneDB = new mysqli($config['mysqlhost'],$config['mysqluser'],$config['mysqlpssw'],$config['mysqlDB'] );


if ($connessioneDB->connect_error) {
    die('errore di connessione al database');
} 
else {
    echo "connesso al database";
}


?>