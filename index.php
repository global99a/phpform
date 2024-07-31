<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php include('config.php');?>
   <table>
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>gender</th>
            <th>dob</th>
            <th>city</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $query=mysqli_query($connection,"SELECT * FROM pallavi");
        while($row=mysqli_fetch_assoc($query))
        {
            $id=$row['id'];
            $name= $row['name'];
            $email=$row['email'];
            $gender= $row['gender'];
            $dob=$row['dob'];
            $city= $row['city'];
           echo "<tr>
           <td>".$id."</td>
            <td>".$name."</td>
             <td>".$email."</td>
              <td>".$gender."</td>
               <td>".$dob."</td>
                <td>".$city."</td>
           </tr>";
        }
        ?>
   </tbody>
   </table>
</body>
</html>









<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>
   <?php include('config.php');?>
   <table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Mobile</th>
        </tr>
    </thead>
    <tbody>


    <!-- <?php 

    $query1=mysqli_query($connection,"SELECT * FROM users");
   while($row=mysqli_fetch_assoc($query1))
   {
        $id= $row['id'];
        
       $name= $row['name'];
       $mobile=$row['phone'];
echo "<tr>
            <td>".$id."</td>
            <td>".$name."</td>
            <td>".$mobile."</td>
     </tr>";

        
    }
   ?> -->

</tbody>
   </table>
</body>
</html> -->