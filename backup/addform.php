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
	    <link rel="stylesheet" href="styles/style.css" />
	    <link rel="stylesheet" href="styles/addform.css" />
    </head>   
    <body>  
        <form action="addrequest.php" method="POST" class="Addform">      
            <div class=Addform-Row>
                <label class="Addform-Label" for="addform-server">Serveur</label>
                <select name="server" id="addform-server">
                    <option value="eu">Europe</option>
                    <option value="gl">Global</option>
                </select>
            </div>            
              
            <div class="Addform-Row">
                <label class="Addform-Label" for="addform-element">Elément</label>
                <div id="addform-element">  
                    <?php foreach($monsters as $element => $list) { ?>
                        <input type="radio" value="<?php echo $element; ?>" name="element" id="addform-element-<?php echo $element; ?>" <?php echo $element == 'fire' ? 'checked': ''; ?>>
                        <label for="addform-element-<?php echo $element; ?>"><?php echo ucfirst($element); ?></label>
                    <?php } ?>
                </div>
            </div>
              
            <div class="Addform-Row">

                <div class="Addform-Cell">
                    <label class="Addform-Label" for="addform-monster">Monstre</label>
                    <div class="Addform-Monsters" id="addform-monster">
                        <?php foreach($monsters as $element => $list) { ?>
                            <div class="Addform-MonstersElement" id="addform-monster-<?php echo $element; ?>">
                                <?php foreach($list as $index => $monster) { ?>
                                    <input type="radio" value="<?php echo $monster['ID']; ?>" name="monster" id="addform-monster-<?php echo $monster['ID']; ?>"  <?php echo ($element == 'fire' and !$index) ? 'checked': ''; ?>>
                                    <label for="addform-monster-<?php echo $monster['ID']; ?>"><?php echo $monster['Nom']; ?></label>
                                <?php } ?>                                
                            </div>
                        <?php } ?>                
                    </div>     
                </div>       
                
                <div class="Addform-Cell">
                    <label class="Addform-Label" for="addform-timer">Temps Restant (min)</label>
                    <input type="number" name="timer" id="addform-timer" value="60">
                                
                    <label class="Addform-Label" for="addform-pseudo">Pseudo</label>
                    <input type="text" name="pseudo" id="addform-pseudo" required minlength="4" maxlength="15">
                </div>
            </div>  
            
            <div class="Addform-Row">
                <input type="submit" value="Envoyer" />
            </div>
      
        </form>
  
    </body>  
</html>