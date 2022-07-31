<?php

class Mdl_prof
{
    public static function list_data()
    {
        $query = "SELECT * FROM profs";
        return db_connect()->query($query)->fetchAll();
    }

    public static function save_data($nom, $email, $tel, $photo, $module)
    {
        $query = "INSERT INTO profs(nom, email, tel, photo, module) VALUES (?,?,?,?,?)";
        $q = db_connect()->prepare($query);
        return $q->execute(array($nom, $email, $tel, $photo, $module));
    }

    public static function get_data($id)
    {
        $query = "SELECT * FROM profs WHERE id=".$id;
        return db_connect()->query($query)->fetch();
    }

    public static function set_data($nom, $email,$tel, $photo, $module, $id)
    {
        $query = "UPDATE profs SET nom = ?, email= ?, tel = ?, photo = ?, module = ? WHERE id = ?";
        $q = db_connect()->prepare($query);
        return $q->execute(array($nom, $email,$tel, $photo, $module, $id));
    }
    
    public static function delete_data($id)
    {
        $query = "DELETE FROM profs WHERE id =".$id;
        db_connect()->query($query);
    }
}
