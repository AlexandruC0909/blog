<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ceva</title>
</head>
<body>

<div class="row">
        <div class="col-lg-10 col-md-10 mx-auto report">

            
              <h2 class="post-title ">
                Merci d'avoir signalé le commentaire
              </h2>
              <a href="index.php">Retour à la liste des billets</a>
            

        </div>
      </div>
</body>
</html>
<?php $content = ob_get_clean(); require 'template.php' ; ?>