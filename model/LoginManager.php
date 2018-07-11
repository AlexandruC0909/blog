<?php
require_once("model/Manager.php");

class LoginManager extends Manager{
    
    public function logout(){
    
        $_SESSION = array();
    
        session_destroy();
    
    }
    
    public function verifyLogin(){
            $pseudo = $_POST['login_pseudo'];
            $pass = $_POST['login_pass'];
                
            $db = $this->dbConnect();
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
                Email and/or password is incorrect.</div>";
            }
        
    }
}