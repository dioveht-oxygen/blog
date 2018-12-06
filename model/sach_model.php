<?php

class SachModel
{
//-------------- GET -----------------------------------------------------------------------------------------------
    public function getAll()
    {
        return truyvan("SELECT * FROM book");
    }
    public function getAllInName($tensach)
    {
        return truyvan("SELECT * FROM book WHERE title = '$tensach'");
    }

//---------------- INSERT ------------------------------------------------------------------------------------------
    public function insertSource($tieude, $mota , $user, $tacgia, $theloai)
    {
        $dt = new DateTime();
        $thoigian = $dt->format('Y-m-d H:i:s');
        truyvan("INSERT INTO book(title, date_up, category, author, id_user, description) 
                VALUES ('$tieude','$thoigian','$theloai','$tacgia','$user','$mota')");
    }

//---------------- UPDATE ------------------------------------------------------------------------------------------

//---------------- DELETE ------------------------------------------------------------------------------------------

}