<?php

    $link = mysqli_connect("your host", "your id", "your password", "database name");
        
        if (mysqli_connect_error()) {
            
            die ("Database Connection Error");
            
        }

?>