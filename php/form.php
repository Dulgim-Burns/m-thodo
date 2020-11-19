<!-- ./php/form.php -->

<html>
    <head>
      <link rel="stylesheet" href="style.css">
      <title>Conversion</title>
    </head>

    <body>
      <div class="centre">
        <?php

        // si le champ est vide
        if ($_POST["valeur"]==""){
          echo "Le champ est vide, veuillez recommencer en remplissant le champ.";
        }

        //si les unités ne sont pas differentes pas de changement.
          if ($_POST["unite"]=="metre" and $_POST["convert"]=="metre" and $_POST["valeur"]!=""){
            echo $_POST["valeur"];
            echo " Mètre(s) vaut ";
            echo $_POST["valeur"];
            echo " Mètre(s)";
          }

          if ($_POST["unite"]=="deci" and $_POST["convert"]=="deci" and $_POST["valeur"]!=""){
              echo $_POST["valeur"];
              echo " Décimètre(s) vaut ";
              echo $_POST["valeur"];
              echo " Décimètre(s)";
          }

          if ($_POST["unite"]=="centi" and $_POST["convert"]=="centi" and $_POST["valeur"]!=""){
              echo $_POST["valeur"];
              echo " Centimètre(s) vaut ";
              echo $_POST["valeur"];
              echo " Centimètre(s)";
          }

          if ($_POST["unite"]=="milli" and $_POST["convert"]=="milli" and $_POST["valeur"]!=""){
              echo $_POST["valeur"];
              echo " Millimètre(s) vaut ";
              echo $_POST["valeur"];
              echo " Millimètre(s)";
          }

          //convertion Mètre en Décimètre
          if ($_POST["unite"]=="metre" and $_POST["convert"]=="deci" and $_POST["valeur"]!=""){
              echo $_POST["valeur"];
              echo " Mètre(s) vaut ";
              $val=$_POST["valeur"]*10;
              echo $val;
              echo " Décimètre(s)";
          }

          //convertion Mètre en Centimètre
          if ($_POST["unite"]=="metre" and $_POST["convert"]=="centi" and $_POST["valeur"]!=""){
              echo $_POST["valeur"];
              echo " Mètre(s) vaut ";
              $val=$_POST["valeur"]*100;
              echo $val;
              echo " Centimètre(s)";
          }

          //convertion Mètre en Millimètre
          if ($_POST["unite"]=="metre" and $_POST["convert"]=="milli" and $_POST["valeur"]!=""){
              echo $_POST["valeur"];
              echo " Mètre(s) vaut ";
              $val=$_POST["valeur"]*1000;
              echo $val;
              echo " Millimètre(s)";
          }

          //convertion Décimètre en Mètre
          if ($_POST["unite"]=="deci" and $_POST["convert"]=="metre" and $_POST["valeur"]!=""){
              echo $_POST["valeur"];
              echo " Décimètre(s) vaut ";
              $val=$_POST["valeur"]/10;
              echo $val;
              echo " Mètre(s)";
          }

          //convertion Décimètre en Centimètre
          if ($_POST["unite"]=="deci" and $_POST["convert"]=="centi" and $_POST["valeur"]!=""){
              echo $_POST["valeur"];
              echo " Décimètre(s) vaut ";
              $val=$_POST["valeur"]*10;
              echo $val;
              echo " Centimètre(s)";
          }

          //convertion Décimètre en Millimètre
          if ($_POST["unite"]=="deci" and $_POST["convert"]=="milli" and $_POST["valeur"]!=""){
              echo $_POST["valeur"];
              echo " Décimètre(s) vaut ";
              $val=$_POST["valeur"]*100;
              echo $val;
              echo " Millimètre(s)";
          }

          //convertion Centimètre en Mètre
          if ($_POST["unite"]=="centi" and $_POST["convert"]=="metre" and $_POST["valeur"]!=""){
              echo $_POST["valeur"];
              echo " Centimètre(s) vaut ";
              $val=$_POST["valeur"]/100;
              echo $val;
              echo " Mètre(s)";
          }

          //convertion Centimètre en Décimètre
          if ($_POST["unite"]=="centi" and $_POST["convert"]=="deci" and $_POST["valeur"]!=""){
              echo $_POST["valeur"];
              echo " Centimètre(s) vaut ";
              $val=$_POST["valeur"]/10;
              echo $val;
              echo " Décimètre(s)";
          }

          //convertion Centimètre en Millimètre
          if ($_POST["unite"]=="centi" and $_POST["convert"]=="milli" and $_POST["valeur"]!=""){
              echo $_POST["valeur"];
              echo " Centimètre(s) vaut ";
              $val=$_POST["valeur"]*10;
              echo $val;
              echo " Millimètre(s)";
          }

          //convertion Millimètre en Mètre
          if ($_POST["unite"]=="milli" and $_POST["convert"]=="metre" and $_POST["valeur"]!=""){
              echo $_POST["valeur"];
              echo " Millimètre(s) vaut ";
              $val=$_POST["valeur"]/1000;
              echo $val;
              echo " Mètre(s)";
          }

          //convertion Millimètre en Décimètre
          if ($_POST["unite"]=="milli" and $_POST["convert"]=="deci" and $_POST["valeur"]!=""){
              echo $_POST["valeur"];
              echo " Millimètre(s) vaut ";
              $val=$_POST["valeur"]/100;
              echo $val;
              echo " Décimètre(s)";
          }

          //convertion Millimètre en Centimètre
          if ($_POST["unite"]=="milli" and $_POST["convert"]=="centi" and $_POST["valeur"]!=""){
              echo $_POST["valeur"];
              echo " Millimètre(s) vaut ";
              $val=$_POST["valeur"]/10;
              echo $val;
              echo " Centimètre(s)";
          }
        ?>
        <form class="btn_recom" action="index.php" method="post">
          <input type="submit" value="Recommencer">
        </form>
      </div>
    </body>
</html>
