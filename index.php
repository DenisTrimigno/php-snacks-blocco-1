<?php 
  // Snack 1
   //Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
   //Olimpia Milano - Cantù | 55-60


   $partite = [
       ["squadra_casa" => "Olimpia Milano", "squadra_ospite" => "Cantù", "punti_casa" => 55, "punti_ospite" => 60],
       ["squadra_casa" => "Virtus Bologna", "squadra_ospite" => "Reyer Venezia", "punti_casa" => 80, "punti_ospite" => 70],
       ["squadra_casa" => "Dinamo Sassari", "squadra_ospite" => "Reggiana", "punti_casa" => 65, "punti_ospite" => 75]
   ];
   

   //Snack 2
   //Con un form passare come parametri GET name, mail e age e verificare 
   //(cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
   // che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
   
   
   if (isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])) {
       $name = $_GET['name'];
       $mail = $_GET['mail'];
       $age = $_GET['age'];
   
       // Verifica che name sia più lungo di 3 caratteri
       if (strlen($name) > 3) {
           // Verifica che mail contenga un punto e una chiocciola
           if (strpos($mail, '.') !== false && strpos($mail, '@') !== false) {
               // Verifica che age sia un numero
               if (is_numeric($age)) {
                   echo "Accesso riuscito";
               } else {
                   echo "Accesso negato";
               }
           } else {
               echo "Accesso negato";
           }
       } else {
           echo "Accesso negato";
       }
   } else {
       echo "Accesso negato";
   }
   ?>
   
   



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 1 -->
       <ul> 
            <?php foreach ($partite as $partita){ ?> 
                <li>
                    <?php echo $partita['squadra_casa'] . " VS " . $partita['squadra_ospite'] . " / " . " " . $partita['punti_casa'] . "-" . $partita['punti_ospite'] ; ?> </li>
                <?php }?>
                
       </ul> 

       <hr>
    <!-- 2 -->
    <h1>Verifica Accesso</h1>
    
    <form method="GET" action="">
        <label for="name">Nome:</label>
             <input type="text" name="name" id="name" >

        <label for="mail">Email:</label>
            <input type="email" name="mail" id="mail" >

        <label for="age">Età:</label>
            <input type="number" name="age" id="age" >

        <input type="submit" value="Verifica Accesso">
    </form>
        
    
    


    
</body>
</html>