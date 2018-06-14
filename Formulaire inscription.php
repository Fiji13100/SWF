<?php
/* Indique le bon format des entêtes (par défaut apache risque de les envoyer au standard ISO-8859-1)*/
header('Content-type: text/html; charset=UTF-8');

/* Initialisation de la variable du message de réponse*/
$message = null;

/* Récupération des variables issues du formulaire par la méthode post*/
$pseudo = filter_input(INPUT_POST, 'pseudo');
$pass = filter_input(INPUT_POST, 'pass');

/* Si le formulaire est envoyé */
if (isset($pseudo,$pass)) 
{   

    /* Teste que les valeurs ne sont pas vides ou composées uniquement d'espaces  */ 
    $pseudo = trim($pseudo) != '' ? $pseudo : null;
    $pass = trim($pass) != '' ? $pass : null;
   

    /* Si $pseudo et $pass différents de null */
    if(isset($pseudo,$pass)) 
    {
    /* Connexion au serveur : dans cet exemple, en local sur le serveur d'évaluation
    A MODIFIER avec vos valeurs */
    $hostname = "localhost";
    $database = "espace_membre";
    $username = "root";
    $password = "";
    
    /* Configuration des options de connexion */
    
    /* Désactive l'éumlateur de requêtes préparées (hautement recommandé)  */
    $pdo_options[PDO::ATTR_EMULATE_PREPARES] = false;
    
    /* Active le mode exception */
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    
    /* Indique le charset */
    $pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND] = "SET NAMES utf8";
    
    /* Connexion */
    try
    {
      $connect = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password, $pdo_options);
    }
    catch (PDOException $e)
    {
      exit('problème de connexion à la base');
    }
        
    
    /* Requête pour compter le nombre d'enregistrements répondant à la clause : champ du pseudo de la table = pseudo posté dans le formulaire */
    $requete = "SELECT count(*) FROM membres WHERE pseudo = ?";
    
    try
    {
      /* préparation de la requête*/
      $req_prep = $connect->prepare($requete);
      
      /* Exécution de la requête en passant la position du marqueur et sa variable associée dans un tableau*/
      $req_prep->execute(array(0=>$pseudo));
      
      /* Récupération du résultat */
      $resultat = $req_prep->fetchColumn();
      
      if ($resultat == 0) 
      /* Résultat du comptage = 0 pour ce pseudo, on peut donc l'enregistrer */
      {
        /* Pour enregistrer la date actuelle (date/heure/minutes/secondes) on peut utiliser directement la fonction mysql : NOW()*/
        $insertion = "INSERT INTO membres(pseudo,pass,date_enregistrement) VALUES(:nom, :password, NOW())";
        
        /* préparation de l'insertion */
        $insert_prep = $connect->prepare($insertion);
        
        /* Exécution de la requête en passant les marqueurs et leur variables associées dans un tableau*/
        $inser_exec = $insert_prep->execute(array(':nom'=>$pseudo,':password'=>$pass));
        
        /* Si l'insertion s'est faite correctement...*/
        if ($inser_exec === true) 
        {
          /* Démarre une session si aucune n'est déjà existante et enregistre le pseudo dans la variable de session $_SESSION['login'] qui donne au visiteur la possibilité de se connecter.  */
          if (!session_id()) session_start();
          $_SESSION['login'] = $pseudo;
          
          /* A MODIFIER Remplacer le '#' par l'adresse de votre page de destination, sinon ce lien indique la page actuelle.*/
          $message = 'Votre inscription est enregistrée.';
          /*ou redirection vers une page en cas de succès ex : menu.php*/
          /*header("Location: menu.php");
            exit();  */
        }   
      }
      else
      {   /* Le pseudo est déjà utilisé */
        $message = 'Ce pseudo est déjà utilisé, changez-le.';
      }
    }
    catch (PDOException $e)
    {
      $message = 'Problème dans la requête d\'insertion';
    }	
  }
  else 
  {    /* Au moins un des deux champs "pseudo" ou "mot de passe" n'a pas été rempli*/
    $message = 'Les champs Pseudo et Mot de passe doivent être remplis.';
  }
}
?>
<!doctype html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Formulaire d'inscription - tutoriel PHP France</title>

<style type="text/css">
<!--
body, p, h1,form, input, fieldset 
{
  margin:0;
  padding:0;
}

body 
{
  background-color: #F4F4F4;
}

#inscription 
{
  width:400px;
  background:#FFFFFF;
  margin:20px auto;
  font-family: Arial, Helvetica, sans-serif;
  font-size:1em;
  border:1px solid #ccc;
  border-radius:10px;
}

#inscription fieldset 
{
  text-align:center;
  font-size:1.2em;
  background:#333333;
  padding-bottom:5px;
  margin-bottom:15px;
  color:#FFFFFF;
  letter-spacing:0.05em;
  border-top-left-radius:10px;
  border-top-right-radius:10px;
}

#inscription p 
{
  padding-top:15px;
  padding-right:50px;
  text-align:right;
}

#inscription input 
{
  margin-left:30px;
  width:150px;
}

#inscription #valider 
{
  width:155px;
  font-size:0.8em;
}

#inscription #message 
{
  height:27px;
  color:#F00;
  font-size:0.8em;
  font-weight:bold;
  text-align:center;
  padding:10px 0 0 0;
}
-->
</style>
</head>
<body>
<div id = "inscription">
    <form action = "#" method = "post">
    <fieldset>Inscription</fieldset>
    <p><label for = "pseudo">Pseudo : </label><input type = "text" name = "pseudo" id = "pseudo" /></p>
    <p><label for = "pass">Mot de passe : </label><input type = "password" name = "pass" id = "pass" /></p>
    <p><input type = "submit" value = "Envoyer" id = "valider" /></p>
    </form>
    <p id = "message"><?= $message?:'' ?></p>
</div>
</body>
</html>
