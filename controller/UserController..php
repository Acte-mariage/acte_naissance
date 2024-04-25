<?php

class UserController {
    private $userModel;

    public function __construct($userModel) {
        $this->userModel = $userModel;
    }

    public function register() {
        // Gestion de l'inscription
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $email=$_POST['email'];
            $username=$_POST['username'];
            $password=$_POST['password'];

            //creation de l'utilisateur
            if (!empty($username)&& !empty($email) && !empty($password)) {
               if($this->userModel->createUser($username,$password,$email)){
                echo 'Utilisateur '. $username .'crée avec succes';
                //Rediriger vers la page de connexion||home(acceuill)
                //header('Location : login.php')
            }else{
                echo 'Erreur lors de la création ';
               }
            }else{
                echo 'les champs sont pas remplis';
            }
        }
        //Affichage du formulaire d'inscription
        require './vue/signup.php';
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Récupération de l'utilisateur depuis la base de données
            $user = $this->userModel->getUserByUsername($username);

            // Vérification si l'utilisateur existe et si le mot de passe est correct
            if ($user && $this->userModel->verifyPassword($password, $user['password'])) {
                echo "Connexion réussie en tant que " . $username;
                $_SESSION['username']=$_POST['username'];
                $_SESSION['password']=$_POST['password'];
                // Rediriger l'utilisateur vers une page sécurisée, par exemple
                // header("Location: dashboard.php");
            } else {
                echo "Identifiants incorrects.";
            }
        }
        // Affichage du formulaire de connexion
        require './vue/login.php';
    }
}

?>
