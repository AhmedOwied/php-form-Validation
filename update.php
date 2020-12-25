<?php
include "config.php";

// if the form's update button is clicked, we need to process the form
if (isset($_POST['update'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $id=$_GET['id'];

    // write the update query
  // $sql = "UPDATE `users` SET `firstname`='$firstname',`lastname`='$lastname',`email`='$email',`password`='$password' WHERE `id` = `$_GET['id']` ";
   $sql ="UPDATE users SET firstname=' $firstname', lastname=' $lastname', email='$email', password='$password'  WHERE  id=$id ";
    // execute the queryةىت
    $result = $connect->query($sql);

    if ($result == TRUE) {
        echo "Record updated successfully.";
    }else{
        echo "Error ";
    }
}


// if the 'id' variable is set in the URL, we know that we need to edit a record
if(isset($_GET['id'])){
    $user_id =$_GET['id'];

    $sql="SELECT * FROM `users` WHERE id= $user_id ";
    $result=$connect->query($sql);

    $data=$result->fetchALL();
    if(count($data)==0){
        header('location:view.php');
     } else{
    foreach($data as $row){
            $first_name = $row['firstname'];
			$lastname = $row['lastname'];
			$email = $row['email'];
			$password  = $row['password'];
?>

<!DOCTYPE html>
 <html lang="en"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Contact Form</title>
        <meta name="description" content="">
                       <!--css file  -->
        <link rel="stylesheet" href= "css/bootstrap.min.css" >
        <link rel="stylesheet" href= "css/font-awesome.min.css" >
        <link rel="stylesheet" href= "css/contact.css">
        
    </head>
    <body >

    <div class="container">  
        <h1 class="text-center"> User Update Form</h1>
    
            <form class="contact-form" action="  " method="POST">
                <div class="form-group form-group-lg">
                
                    <div class="col-sm-10 input">
                        <input type="text" name="firstname" class="form-control" placeholder="FirstName" value="<?php echo $first_name; ?>"  >
                    </div>
                </div>
                <div class="form-group form-group-lg">
                    
                    <div class="col-sm-10 input">
                        <input type="text" name="lastname" class="form-control" placeholder="LastName" value="<?php echo $lastname;  ?>"   >
                    </div>
                </div>
                <div class="form-group form-group-lg">
                    
                    <div class="col-sm-10 input">
                        <input type="Email" name="email" class="form-control" placeholder="Email"  value="<?php echo $email;?>"  >
                    </div>
                </div> 

                <div class="form-group form-group-lg">
                    
                    <div class="col-sm-10 input">
                        <input type="password" name="password" class="form-control" placeholder="Password"  value="<?php echo $password;?>"  >
                    </div>
                </div> 
                
                <div class="form-group form-group-lg">
                    <div class="col-sm-10 submit">
                        <input type="submit" name="update" class="btn btn-primary btn-lg"  >
                    </div>
                </div> 
            </form>

    </div> 

    <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custome.js"></script>
    </body>
    </html>

    <?php
     }
}
}
 ?>