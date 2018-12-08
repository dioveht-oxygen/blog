<?php

class ChapterModel
{
//-------------- GET -----------------------------------------------------------------------------------------------
    public function getAll()
    {
        return truyvan("SELECT * FROM chapter");
    }
    public function getAllInBook($id_book)
    {
        return truyvan("SELECT * FROM chapter WHERE id_book = '$id_book'");
    }
    public function count($id)
    {
        return truyvan("SELECT COUNT(id) FROM chapter WHERE id_book = $id");
    }

//---------------- INSERT ------------------------------------------------------------------------------------------
    public function insert($tieude, $content , $id_book)
    {
        truyvan("INSERT INTO chapter (title, content, id_book) 
                VALUES ('$tieude','$content','$id_book')");
    }

//---------------- UPDATE ------------------------------------------------------------------------------------------

    public function update($id, $tieude, $content)
    {
        truyvan("UPDATE chapter 
                 SET title='$tieude',content='$content'
                 WHERE id = $id");
    }
//---------------- DELETE ------------------------------------------------------------------------------------------
    public function DeleteFromBook($id)
    {
        return truyvan("DELETE FROM chapter WHERE id_book = $id");
    }
    public function Delete($id)
    {
        return truyvan("DELETE FROM chapter WHERE id = $id");
    }
}