<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&family=VT323&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="style.css" rel="stylesheet">
        <title>Document</title>
    </head>
    <body>
    <section>

        <h1>Calculette <span>V 1.0.0</span></h1>

        <form method="POST" action="#" >
        <input type="text" name="valeur-1">
        <select name="operateur" >                       
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
                <option value="²">²</option>
                <option value="√">√</option>
                </select> 
        <input type="text" name="valeur-2">
        <input type="submit" value="Calculer" class="submit">
        <a href="egg.php">CLICK HERE !!!</a>
        </form>

        <?php

        if ( !empty($_POST['valeur-1']) && empty($_POST['valeur-2'])){
            $valeurune = $_POST['valeur-1'];
            $operateur = $_POST['operateur'];

            if (is_numeric($valeurune)){

                switch ($operateur){
                    case $operateur == "²" :
                        $calcul = $valeurune * $valeurune;
                        echo "<h2>$calcul</h2>";
                    break;
                
                    case $operateur == "√" :
                        $calcul = sqrt($valeurune);
                        echo "<h2>$calcul</h2>";
                    break;

                    default:
                    echo "<h2>ERROR<h2>";
                    break;
                }
            }
            else{
                echo "<h2>ERROR<h2>";
            }
        }
        else{
            if ( !empty($_POST['valeur-1']) && !empty($_POST['valeur-2'])){
            $valeurune = $_POST['valeur-1'];
            $operateur = $_POST['operateur'];
            $valeurdeux = $_POST['valeur-2'];

                if  (is_numeric($valeurune) && is_numeric($valeurdeux)){

                    switch ($operateur){
                        
                        case $operateur == "+" :
                            $calcul = $valeurune + $valeurdeux;
                            echo "<h2>$calcul</h2>";
                        break;
                    
                        case $operateur == "-" :
                            $calcul = $valeurune - $valeurdeux;
                            echo "<h2>$calcul</h2>";
                        break;
                    
                        case $operateur == "*" :
                            $calcul = $valeurune * $valeurdeux;
                            echo "<h2>$calcul</h2>";
                        break;
                        case $operateur == "/" :
                            $calcul = $valeurune / $valeurdeux;
                            echo "<h2>$calcul</h2>";
                        break;

                        default:
                        echo "<h2>ERROR<h2>";
                        break;
                    }
                }
                else{
                    echo"<h2>ERROR<h2>";
                }
            }           
            else{
            echo "<h2>ERROR<h2>";
            }
        }
        ?>
    </section>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>