<?php

function truyvan($sql) {
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "blogger";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $conn->query('SET NAMES utf8');

    $result = $conn->query($sql);

    $ketquatrave = [];

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc())
            $ketquatrave[] = $row;
    }

    $conn->close();

    return $ketquatrave;
}

$rows = truyvan('select * from baidang');


for($a=0;$a<count($rows);$a++) {
    $row = $rows[$a];
//    print $row['ndpost'];
}
foreach($rows as $row) {
//    print $row['ndpost'];
}

if(isset($_FILES["taptincuatui"])) {
    $filename = basename($_FILES["taptincuatui"]["name"]);
    move_uploaded_file($_FILES["taptincuatui"]["tmp_name"], 'upload/' . $filename);
    chmod('upload/' . $filename, 0777);
}

//unlink('upload/phi.png');

$rows = truyvan('select * from truyen');
print_r($rows);

// header('Location: /phi.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <form method="post" action="dbCon.php" enctype="multipart/form-data">
        <input type="file" name="taptincuatui" />
        <input type="submit" />
    </form>

    <?php foreach($rows as $row): ?>
    <li> id bai dang: <?php print $row['idpost']; ?>  </li>
    <?php endforeach; ?>
</body>
</html>
