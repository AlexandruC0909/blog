<?php 
require_once("model/Manager.php");

global $error;
if(isset($_POST['login']))
    {
            $pseudo = $_POST['login_pseudo'];
            $pass = $_POST['login_pass'];
                
            $db = dbConnect();
            $req = $db->prepare('SELECT id,pass FROM member WHERE pseudo = :pseudo');
            $req->execute(array('pseudo' => $pseudo));
            $resultat = $req->fetch();
            $isPasswordCorrect = password_verify($pass, $resultat['pass']);
        
            if ($isPasswordCorrect) {
                $_SESSION['id'] = $resultat['id'];
                $_SESSION['pseudo'] = $pseudo;
                header("Location: index.php?action=goToAdminPreview");
            } else{
                $error = "<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                Email ou mot de passe incorect</div>";
            }
        }
        function dbConnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=project4;charset=utf8', 'root', '');
        return $db;
    }