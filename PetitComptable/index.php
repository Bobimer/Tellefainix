<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
		<link rel="stylesheet" href="PHP.css"/>
		<title>Banque</title>
  </head>
  <body>

    <?php
    function connect(){
        if(isset($_POST['submitForm'])){
            $db=db_connect();
            $req=$db->prepare("SELECT * FROM user WHERE mail = :email"); //":" placeholder
            $req->execute(array("email" => $_POST['email']));
            while($data=$req->fetch()){
                echo $data['password'];
            }
        }
    }
    connect();
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

