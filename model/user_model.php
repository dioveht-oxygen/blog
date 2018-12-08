<?php

class UserModel
{
//-------------- GET -----------------------------------------------------------------------------------------------
    public function getAll()
    {
        return truyvan("SELECT * FROM user");
    }
    public function getId($id)
    {
        return truyvan("SELECT * FROM user WHERE id = '$id'");
    }
//---------------- INSERT ------------------------------------------------------------------------------------------
    public function insertUser($name,$username, $pass , $mail)
    {
        truyvan("INSERT INTO user  ( nameuser ,username , pass , mail) 
                VALUES ('$name' , '$username','$pass','$mail')");
    }

//---------------- UPDATE ------------------------------------------------------------------------------------------
    public function update($id,$name,$sex, $dob , $mail)
    {
        truyvan("UPDATE user SET nameuser='$name',sex='$sex',mail='$mail',DoB='$dob' WHERE id = $id");
    }
//---------------- DELETE ------------------------------------------------------------------------------------------

}