<?php

include "config.php";

$sql="SELECT * FROM users";
//Excute the Query
$result=$connect->query($sql);

?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <title>View page</title>

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 </head>
 <body>
     <div class="container">
       <h2>Users</h2>
       <table class="table">
           <thead>
              <tr>
                <th>ID</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
              </tr>
           </thead>
           <tbody>
             <?php
              $data=$result->fetchALL();
              foreach($data as $row){
            
            ?>
              
              <tr>
                 <td> <?php echo $row['id']; ?> </td>
                 <td> <?php echo $row['firstname']; ?> </td>
                 <td> <?php echo $row['lastname']; ?> </td>
                 <td> <?php echo $row['email']; ?> </td>
                 <td> <?php echo $row['password']; ?> </td>
                 <td><a class="btn btn-danger" href="update.php?id=<?php echo $row['id']; ?>">Edit</a> 
                     <a class="btn btn-info" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
              </tr>

            <?php    

              }
            ?>
          </tbody>
       </table>

     </div>
     
 </body>
 </html>

