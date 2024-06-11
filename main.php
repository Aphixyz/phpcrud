<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>


    <!-- include("./conn.php"); -->
     
        <?php
            include "./navbar.php"; 
        ?>
    

     <div class="container mx-auto">
     <style>
        .container{
            background-color: whitesmoke;
            height: 90vh;
            display: flex;
            flex-direction: column;
            /* justify-content: center; */
            margin-top: 2%;
          
        }
    </style>

    <?php

        include "./conn.php";
        $sql ="SELECT * FROM users";
        $res = $conn->query($sql);


    ?>

    <table class="table table-dark table-striped">
        <thead class="thead-dark"> 
            <tr>
                <th class="col-2">Pimary</th>
                <th class="col-4">Name</th>
                <th class="col-3">Status</th>
                <th class="col-3">Tools</th> 
            </tr>
    </thead>
    <tbody>
        <?php while ($row = $res->fetch_assoc()) { ?>

            <tr>
                <td><?PHP echo$row['id']?></td>
                <td><?PHP echo$row['name']?></td>
                <td><?PHP echo$row['status']?></td> 

                <td>
                    <a href='delete.php?id=<?php echo$row['id']?>' class="btn btn-danger mx-2">DELETE</a>







                    <a href='edit.php?id=<?php echo$row['id']?>' class="btn btn-warning">EDIT</a>
                </td> 
            </tr>


            <?php }?>
    </tbody>



     </div>
     

 
 
     

</body>
</html>
<style>
    body{
        margin:0;
        padding: 0;
    }
</style>

    

