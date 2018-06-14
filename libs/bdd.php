<?php

$bddOptions = [
    'host' => 'mysql:host=localhost;dbname=monsters;charset=utf8',
    'user' => 'root',
    'password' => ''
];

$data = [];

try {
    $bdd = new PDO($bddOptions['host'], $bddOptions['user'], $bddOptions['password']);
    
    $response = $bdd->query('SELECT * FROM monsters');
    $data = $response->fetchAll(PDO::FETCH_ASSOC);
    $response->closeCursor();
} catch(Exception $e) {
    die('Erreur : '.$e->getMessage());		  
}
  
?>