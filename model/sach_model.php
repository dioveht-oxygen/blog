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
    public function getAllInId($id)
    {
        return truyvan("SELECT * FROM book WHERE id_user = '$id'");
    }
    public function getOne($id)
    {
        return truyvan("SELECT * FROM book WHERE id = '$id'");
    }
    public function count($id)
    {
        return truyvan("SELECT COUNT(id) FROM book WHERE id_user = $id");
    }

//---------------- INSERT ------------------------------------------------------------------------------------------
    public function insertBook($tieude, $mota , $user, $tacgia, $theloai,$image , $status)
    {
        $dt = new DateTime();
        $thoigian = $dt->format('Y-m-d H:i:s');
        truyvan("INSERT INTO book(title, date_up, category, author, id_user, description,image,status) 
                VALUES ('$tieude','$thoigian','$theloai','$tacgia','$user','$mota','$image','$status')");
    }

//---------------- UPDATE ------------------------------------------------------------------------------------------

    public function updateBook($id,$tieude, $mota ,$tacgia, $theloai,$image, $status)
    {
        truyvan("UPDATE book 
                 SET title='$tieude',category='$theloai',author='$tacgia',description='$mota',image='$image',status=$status 
                 WHERE id = $id");
}
//---------------- DELETE ------------------------------------------------------------------------------------------
    public function Delete($id)
    {
        truyvan("DELETE FROM book WHERE id = $id");
        return truyvan("DELETE FROM chapter WHERE id_book = $id");
    }
}