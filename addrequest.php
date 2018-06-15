<?php

require 'libs/functions.php';

debug($_POST);

if(isset($_POST) and
    isset($_POST['server']) and 
    isset($_POST['element']) and
    isset($_POST['monster']) and
    isset($_POST['timer']) and $_POST['timer'] <= 60 and $_POST['timer'] >= 5 and
    isset($_POST['pseudo'])) {

    
    echo 'Test'; 
}
?>

