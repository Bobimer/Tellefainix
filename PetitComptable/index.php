<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
		<link rel="stylesheet" href="PHP.css"/>
		<title>Banque</title>
  </head>
  <body>
    <?php
      echo "Bienvenue sur ton gestionnaire de budget !<br/>";
      echo "Entre tes identifiants :";
    ?>
    <form method="post" action="traitement.php">
      <p>
       <label for="email">Votre adresse mail :</label>
       <input type="email" name="email" id="email"/>
       <br/>
       <label for="pseudo">Votre pseudo :</label>
       <input type="text" name="pseudo" id="pseudo"/>
       <br/>
       <label for="password">Votre mot de passe :</label>
       <input type="password" name="password" id="password"/>
      </p>
    </form>

  </body>
</html>