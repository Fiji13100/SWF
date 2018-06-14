

<?php
  
  require 'libs/functions.php';
  require 'libs/bdd.php';
  

  //TODO: On prépare les data

  $monsters = [
    'fire'   => [],
    'water'  => [],
    'wind'   => [],
    'light'  => [],
    'dark'   => []
  ];

  foreach($data as $monster) {  
    
    $element = strtolower($monster['Element']);    
    $monsters[$element][] = $monster;
    
  }

  //debug($monsters);

?>  
 
  
<html>
  
  <head>
  
    <title>test SWF requete</title>
	<link rel="stylesheet" href="http://localhost/SWF/styles/style.css" />
	

  </head> 
  
  <body>  
  
    <form action="addrequest.php" method="POST">
  
      <label for="addform-server">Serveur</label>
      <select name="server" id="addform-server">
        <option value="eu">Europe</option>
        <option value="gl">Global</option>
      </select>
        
      <label for="addform-element">Elément</label>
      <div id="addform-element">  
        <?php foreach($monsters as $element => $list) { ?>
          
         <input type="radio" value="<?php echo $element; ?>" name="element" id="addform-element-<?php echo $element; ?>">
         <label for="addform-element-<?php echo $element; ?>"><?php echo ucfirst($element); ?></label>
          
         <?php } ?>
      </div>
        
      <label for="addform-monster">Monstre</label>
      <div id="addform-monster"> 
        
        <?php foreach($monsters as $element => $list) { ?>
          <div id="addform-monster-<?php echo $element; ?>">

            <?php foreach($list as $monster) { ?>
              <input type="radio" value="<?php echo $monster['ID']; ?>" name="monster" id="addform-monster-<?php echo $monster['ID']; ?>">
              <label for="addform-monster-<?php echo $monster['ID']; ?>"><?php echo $monster['Nom']; ?></label>
            <?php } ?>
              
          </div>
        <?php } ?>
        
      </div>
        
      <label for="addform-timer">Temps Restant</label>
      <input type="text" name="timer" id="addform-timer">
        
      <label for="addform-pseudo">Pseudo</label>
      <input type="text" name="pseudo" id="addform-pseudo">
        
      <input type="submit" value="Envoyer" />
  
    </form>
  
  </body>
  
</html>