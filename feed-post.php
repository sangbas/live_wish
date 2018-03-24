<?php
            $conn = mysqli_connect("us-cdbr-iron-east-05.cleardb.net", "bd5eb54c622648", "0d76f436")  or die ("could not connect to mysql");
            mysqli_select_db($conn, "heroku_98880ac252f20c4") or die ("no database");   
            $sql = "SELECT name, message FROM wish ORDER BY post_time desc";
            $result = mysqli_query($conn, $sql) or die(mysql_error());

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $name = $row["name"];
                    $message = $row["message"];
                    echo '<div class="borderimg1">'.$name.'<br/>'.$message.'</div>';
                }
            }
?>