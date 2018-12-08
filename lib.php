<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function get_base()
{
    $server = $_SERVER['HTTP_HOST'];
    $server = "http://" . $server . "/blog/";
    return $server;
}

function load_view($path, $data = [])
{
    extract($data);
    include_once "$path";
}

function getAge($birthdate = '0000-00-00')
{
    if ($birthdate == '0000-00-00') return 'Unknown';

    $bits = explode('-', $birthdate);
    $age = date('Y') - $bits[0] - 1;

    $arr[1] = 'm';
    $arr[2] = 'd';

    for ($i = 1; $arr[$i]; $i++) {
        $n = date($arr[$i]);
        if ($n < $bits[$i])
            break;
        if ($n > $bits[$i]) {
            ++$age;
            break;
        }
    }
    return $age;
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

    function rand_string($length)
    {
        $str = "";
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $size = strlen($chars);
        for ($i = 0; $i < $length; $i++) {
            $str .= $chars[rand(0, $size - 1)];
        }
        return $str;
    }

    static function utf8convert($str)
    {
        if (!$str) return false;
        $utf8 = array(
            'a' => 'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'd' => 'đ|Đ',
            'e' => 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'i' => 'í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị',
            'o' => 'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'u' => 'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'y' => 'ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Ỵ',
        );
        foreach ($utf8 as $ascii => $uni) $str = preg_replace("/($uni)/i", $ascii, $str);
        return $str;
    }
}
