<?php

include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="add.php">Add New User</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>Name</th> <th>Mobile</th> <th>Email</th><th>Address</th> <th>Update</th> <th>Vivek</th> <th>NEW</th> <th>NEW1</th>
    </tr>
	<tr>Row Added </tr>

	<tr>NewColumn </tr>
	<tr>Column Added </tr>
	<tr> Next Row</tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['mobile']."</td>";
        echo "<td>".$user_data['email']."</td>"; 
         echo "<td>".$user_data['address']."</td>"; 

          echo "<td>".$user_data['gender']."</td>";
             echo "<td>".$user_data['Surname']."</td>";
             echo "<td>".$user_data['Passang']."</td>";
 
            


        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>
