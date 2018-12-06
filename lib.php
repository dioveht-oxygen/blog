<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function get_base()
{
    $server = $_SERVER['HTTP_HOST'];
    $server = "http://" . $server."/Blog/";
    return $server;
}

function load_view($path, $data = [])
{
    extract($data);
    include($path);
}

function truyvan($sql)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "blogger";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $conn->query('SET NAMES utf8');

    $result = $conn->query($sql);

    if ($result === false) {
        throw new Exception(mysqli_error($conn));
    }

    $ketquatrave = [];

    if (isset($result->num_rows) && $result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc())
            $ketquatrave[] = $row;
    }

    $conn->close();

    return $ketquatrave;
}

class CongCu
{
    function Swap_Array(array $mangXaoBai)
    {
        $tongMang = count($mangXaoBai);
        $tongMang -= 1;
        for ($i = 0; $i < 50; $i++) {
            $soNgauNhienA = rand(0, $tongMang);
            $soNgauNhienB = rand(0, $tongMang);
            $temp = $mangXaoBai[$soNgauNhienA];
            $mangXaoBai[$soNgauNhienA] = $mangXaoBai[$soNgauNhienB];
            $mangXaoBai[$soNgauNhienB] = $temp;
        }
        return $mangXaoBai;
    }
    function rand_string( $length ) {
        $str = "";
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $size = strlen( $chars );
        for( $i = 0; $i < $length; $i++ ) {
            $str .= $chars[ rand( 0, $size - 1 ) ];
        }
        return $str;
    }

    static function  utf8convert($str) {
        if(!$str) return false;
        $utf8 = array(
            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'd'=>'đ|Đ',
            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'i'=>'í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị',
            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'y'=>'ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Ỵ',
        );
        foreach($utf8 as $ascii=>$uni) $str = preg_replace("/($uni)/i",$ascii,$str);
        return $str;
    }
}


class reSizeImage
{

    var $image;

    var $image_type;


    function load($filename)
    {

        $result = getimagesize($filename);
        if($result === false) throw new Exception('Loi getimagesize');
        $image_info = $result;

        $this->image_type = $image_info[2];

        if ($this->image_type == IMAGETYPE_JPEG) {

            $this->image = imagecreatefromjpeg($filename);

        } elseif ($this->image_type == IMAGETYPE_GIF) {

            $this->image = imagecreatefromgif($filename);

        } elseif ($this->image_type == IMAGETYPE_PNG) {

            $this->image = imagecreatefrompng($filename);

        }

    }

    function save($filename, $image_type = IMAGETYPE_JPEG, $compression = 75, $permissions = null)
    {

        if ($image_type == IMAGETYPE_JPEG) {

            imagejpeg($this->image, $filename, $compression);

        } elseif ($image_type == IMAGETYPE_GIF) {

            imagegif($this->image, $filename);

        } elseif ($image_type == IMAGETYPE_PNG) {

            imagepng($this->image, $filename);

        }

        if ($permissions != null) {


            chmod($filename, $permissions);

        }

    }

    function output($image_type = IMAGETYPE_JPEG)
    {

        if ($image_type == IMAGETYPE_JPEG) {

            imagejpeg($this->image);

        } elseif ($image_type == IMAGETYPE_GIF) {

            imagegif($this->image);

        } elseif ($image_type == IMAGETYPE_PNG) {

            imagepng($this->image);

        }

    }

    function getWidth()
    {

        return imagesx($this->image);

    }

    function getHeight()
    {

        return imagesy($this->image);

    }

    function resizeToHeight($height)
    {

        $ratio = $height / $this->getHeight();

        $width = $this->getWidth() * $ratio;

        $this->resize($width, $height);

    }

    function resizeToWidth($width)
    {

        $ratio = $width / $this->getWidth();

        $height = $this->getheight() * $ratio;

        $this->resize($width, $height);

    }

    function scale($scale)
    {

        $width = $this->getWidth() * $scale / 100;

        $height = $this->getheight() * $scale / 100;

        $this->resize($width, $height);

    }

    function resize($width, $height)
    {

        $new_image = imagecreatetruecolor($width, $height);

        imagecopyresampled($new_image, $this->image, 0, 0, 0, 0, $width, $height, $this->getWidth(), $this->getHeight());

        $this->image = $new_image;

    }

}