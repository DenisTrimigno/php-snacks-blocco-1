<?php 
  // Snack 1
   //Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
   //Olimpia Milano - Cantù | 55-60


   $partite = [
       ["squadra_casa" => "Olimpia Milano", "squadra_ospite" => "Cantù", "punti_casa" => 55, "punti_ospite" => 60],
       ["squadra_casa" => "Virtus Bologna", "squadra_ospite" => "Reyer Venezia", "punti_casa" => 80, "punti_ospite" => 70],
       ["squadra_casa" => "Dinamo Sassari", "squadra_ospite" => "Reggiana", "punti_casa" => 65, "punti_ospite" => 75]
   ];
   

   


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
       <ul> 
            <?php foreach ($partite as $partita){ ?> 
                <li>
                    <?php echo $partita['squadra_casa'] . " VS " . $partita['squadra_ospite'] . " / " . " " . $partita['punti_casa'] . "-" . $partita['punti_ospite'] ; ?> </li>
                <?php }?>
                
       </ul> 
        
    
    


    
</body>
</html>