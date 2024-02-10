<!DOCTYPE html>
<html>
    <meta charset = "utf-8">
    <head>
        <body>
            <?php
            //replace the user name and password with your credentials
            $host = " dropbox07new. mysql.database.azure.com";
            #user = "ztaylor5";
            $password = "Jinisb34n$"
            $db = "visitordb";
            // connect to the database
            $conn = mysqli_init();
            mysqli_real_connect($conn, $host, $user, $password, $db, 3306);
            $query = "CREAT TABLE visitor
            (
                visitorid INTEGER AUTO_INCREMENT,
                visitorName VARCHAR(100) NOT NULL,
                visitTime TIMESTAMP DEFAULT NOW(),
                PRIMARY KEY(visitorid)
                )";
                if (mysqli_query($conn, $query))
                echo "<p>Table created.</p>";
            //close connection
            mysqli_close($conn);
            ?>
        </body>
    </head>
