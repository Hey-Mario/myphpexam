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
            $pswd = 1234;

            switch ($status) {
                case 'etudiant':
                    #cpde
                    break;
                case 'prof':
                    # code...
                    break;
                case 'admin':
                    if ($login != $email) {
                        echo 'erreur au niveau du mail';
                    }
                    elseif ($pass != $pswd) {
                        echo 'erreur au niveau du mot de passe';
                    }
                    break;
                
            }

            $_SESSION["status"] = $status;
            header("location:index.php?page=Ctrl_acceuils");

        }
    }
?>
