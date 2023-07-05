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
   
       $name = $_GET['nome'];
       $mail = $_GET['e-mail'];
       $age = $_GET['età'];
   
   if (isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])) {
       
   
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
           echo "";
       }
   } else {
       echo "Accesso negato";
   }


   //Snack 3
  //Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato:
  // DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.


$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
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
        <label for="nome">Nome:</label>
             <input type="text" name="nome" id="name" >

        <label for="mail">Email:</label>
            <input type="email" name="e-mail" id="mail" >

        <label for="age">Età:</label>
            <input type="number" name="età" id="age" >

        <input type="submit" value="Verifica Accesso">
    </form>
        
    
        <?php  if (isset($_GET['nome']) && isset($_GET['e-mail']) && isset($_GET['età'])) { ?>
        <div>   
            <?php if($name && $mail && $age) {
                echo 'Accesso riuscito';
            } 
            else { 
                echo 'Accesso negato';
            }
            ?>
        </div>
    <?php }?>
    
    <!-- 3 -->

    <h1> Array di array</h1>

            <div>

                <ul>
                    <?php foreach($posts as $key=>$post) { ?>
                        <li>
                            <?php echo $key; ?>

                        <ul>
                            <?php foreach($post as $item) { ?>

                           <li><?php echo $item['title']." - ".$item['author']. " - ".$item 
                            ['text']; ?></li>
                        </li>
                        <?php }?>
                </ul>       
            </li>
            <?php } ?>
                 


    
</body>
</html>