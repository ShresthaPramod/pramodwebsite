<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>pramod Contact Application</title>
<style>
    button{
        display: block;
        margin : auto;

    }

</style>
</head>
<body>
    <header>
        <h1> Ps Contact App</h1>
    </header>
    <form action="adddata.php" method="post">
        <div class="main">
            <label for="name">Name:</label><br>
            <input type="text" name="name" id="name" required><br>
            <label for="contact">Number:</label><br>
            <input type="number" name="contact" id="contact" required ><br>
            <label for="email">email:</label><br>
            <input type="text" name="email" id="email" required ><br>
            <label for="address">Address:</label> <br>
            <input type="text" name="address" id= "address" required><br>


            <input type="submit" value="save">
        </div><br>


 <div class= "form-row" my-4>
        <div class ="col">
        <input type ="text" name = "FIRSTNAME" id = "FIRSTNAME" class = "form-control" placeholder= "FIRSTNAME"><br>
</div>
</div><br>

<div class= "form-row my-4">
        <div class  ="col">
    <input type="text" name = "LASTNAME" id = "LASTNAME" class= "form-control" placeholder = "LASTNAME"><br>
</div>
</div><br>

<div class= "form-row my-4">
        <div class  ="col">
    <input type="password" name = "password" id = "password" class= "form-control" placeholder = "password"><br>    
</div>
</div><br>

<div class= "form-row my-4">
        <div class  ="col">
    <input type="password" name = "confirm_pwd" id = "confirm_pwd" class= "form-control" placeholder = "confirm_pwd"><br>
<small id = "confirm_error" class = "text_danger"></small>
</div>
</div><br>



<div class="form-check-inline" >
<input type="checkbox" name = "agreement" class= "form-check-input" required>
<label for="agreement" class= "form-check-label font-ubuntu text-black-50">I agree <a href ="#">terms, conditions and policy</a>(*)</label><br>
</div><br>


<div class="submit-btn text-center my-5">
    <button type ="submit" class =" btn btn-warning rounded-pill text-dark px-5">continue</button><br>

</div><br>
    </form>
<hr>
<table>
    <tr>
        <th>Name</th>
        <th>phoneno.</th>
        <th> Address</th>
        <th>email</th>
        <th>actions</th>
    </tr>

    <?php 
    include 'db.php';
    $sql = "SELECT * FROM names";
    $result = mysqli_query($conn, $sql);

    if ($result){
        while ($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $name =$row['name'];
            $phone =$row['phone'];

            ?>            
            <tr>
        <td><?php echo $name ?></td>
        <td><?php echo $phone ?></td>
        <td>
            <a href="update.php?id=<?php echo $id?>">update</a>
            <a href="delete.php?id= <?php echo $id?>">Delete</a>
        </td>
    </tr>
    <?php
        }
    }
    
?>
</table>
</body>
</html>