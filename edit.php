<?php

    include './conn.php';



    if(isset($_GET["id"])) {

        $id = $_GET["id"];
       

        try {
            $req ="SELECT * FROM users WHERE id=$id";
            $res = $conn->query($req);

            $row = $res->fetch_assoc();
           

        }catch(Exception $e) {

            echo $e;


        }
        $conn->close();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container mt-5 mx-auto">
    <h2 class="mb-4">UPDATE New Record</h2>
    <form method="post" action="update.php">

        <input type="hidden" name="id" value="<?php echo $row['id']?>">

        <div class="form-group">
            <label for="name">New Name:</label>
            <input value="<?php echo$row['name']?>" type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="status">New Status:</label>
            <input value="<?php echo$row['status']?>" type="status" class="form-control" id="status" name="status" required>
        </div>
        <button type="submit" class="btn btn-primary">UPDATE</button>
    </form>
</div>






</body>

</html>