<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>pramod Contact Application</title>

</head>
<body>
    <header>
        <h1> Ps Contact App</h1>
    </header>
    <h2>update Contact</h2>
    <?php
    include 'db.php';

    $id = $_GET['id'];
    $sql = "SELECT * FROM names WHERE id = ".$id;
    $result = mysqli_query($conn, $sql);

    if ($result){
        $row = mysqli_fetch_assoc($result);
        $contactname = $row['name'];
        $contactname = $row['phone'];
    }
    
    
    ?>
    <form action="adddata.php" method="post">
        <div class="main">
            <label for="name">Name:</label><br>
            <input type="text" name="name" id="name" value = "<?php global $contactname; echo $contactname?>" required><br>
            <label for="contact">Number:</label><br>
            <input type="number" name="contact" id="contact" value ="<?php global $contactphone; echo $contactphone?>" required><br>
            <input type="hidden" name ="id" id = "id" value = "<?php global $id; echo $id?> " required>
            <input type="submit" value="update">
        </div>
</form>

</body>
</html>