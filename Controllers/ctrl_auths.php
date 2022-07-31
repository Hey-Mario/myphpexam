<?php
session_start();
// include 'Models/mdl_prof.php';
// include 'Models/mdl_etudiant.php';

    class Ctrl_auths
    {
        public static function index()
        {
            extract($_POST) ;
            
            $mail = "admin@gmail.com";
            $mdp = 1234;
            $status = $_SESSION['status'];
            
            switch ($status) {
                case 'etudiant':
                    
                    break;
                case 'prof':
                    # code...
                    break;
                case 'admin':
                    if ($login == $mail && $pass == $mdp) {
                        header("location:index.php?page=Ctrl_acceuils");               
                    }
                    else{
                        echo 'Mot de passe incorect ou mail invalide';
                        header("location:index.php");
                    }
                    break;
                default:
                    header("location:index.php");
                    break;
            }

        }
    }
?>
