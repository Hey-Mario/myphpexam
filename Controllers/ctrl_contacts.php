<?php
include 'Models/mdl_contact.php';
class Ctrl_contacts
{
    public static function index()
    {
        $view = isset($_GET['view']) ? $_GET['view'] : NULL;
        switch ($view) {
            case 'add':
                self::theView($view);
                break;

            case 'edit':
                self::theView($view);
                break;

            default:
                self::theView();
                break;
        }
        $action = isset($_GET['action']) ? $_GET['action'] : NULL;
        switch ($action) {
            case 'add':
                if (isset($_POST['add'])) {
                    extract($_POST);
                    Mdl_contact::save_data($nom, $email, $tel);
                    header("location:./index.php?page=Ctrl_contacts");
                }
                break;
            case 'delete':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    Mdl_contact::delete_data($id);
                    header("location:./index.php?page=Ctrl_contacts");
                }
                break;
            case 'edit':
                if (isset($_POST['update'])) {
                    extract($_POST);
                    Mdl_contact::set_data($nom, $email, $tel, $id);
                    header("location:./index.php?page=Ctrl_contacts");
                }
                break;
        }
    }
    public static function theView($page = 'list')
    {
        if ($page != "list") {
            if ($page == "edit" && isset($_GET['id'])) {
                $contact = Mdl_contact::get_data($_GET['id']);   
            }
        } else {
            $contacts = Mdl_contact::list_data();
        }
        include('Views/contacts/' . $page . '_contacts.php');
    }
 
}
   
