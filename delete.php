
<?php

    include './conn.php';



    if(isset($_GET["id"])) {

        $id = $_GET["id"];
        echo $id;

        try {

            $req ="DELETE FROM users WHERE id= $id";
            $conn->query($req);
            header("location:main.php");


        }catch(Exception $e) {
            echo $e ;
        }
        $conn->close();    
        
        
    }