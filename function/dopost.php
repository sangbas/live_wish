<?php
date_default_timezone_set("Asia/Jakarta");
if(isset($_POST['name']) && isset($_POST['wish'])) {
    $name = $_POST['name'];
    $wish = $_POST['wish'];
    $time = date("Y-m-d H:i:s");
    
    $conn = mysqli_connect("us-cdbr-iron-east-05.cleardb.net", "bd5eb54c622648", "0d76f436")  or die ("could not connect to mysql");
    mysqli_select_db($conn, "heroku_98880ac252f20c4") or die ("no database");   
    $sql = "INSERT INTO wish(name,message,post_time) VALUES ('$name', '$wish', '$time')";
    echo $sql;
    mysqli_query ($conn, $sql);

    mysqli_close($conn);
}

header('Location: ../post.php');

?>