<?php
 include "config.php";

 if(isset($_POST['Submit'])){
    //Get variable from the Form
    $First_name=$_POST['fname'];
    $List_name=$_POST['lname'];
    $Email=$_POST['email'];
    $Password=$_POST['pass'];

    //write Sql Query
    $sql= "INSERT INTO users ( `firstname`, `lastname`, `Email`, `password`) VALUES (' $First_name',' $List_name',' $Email',sha1($Password) )";
    $result=$connect->query($sql);

    if($result == TRUE){
        echo 'new Record create successfully';
    }else{
        echo'Error';
    }
    $connect = null;
    

 }

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
       <h1 class="text-center">SignUP Form</h1>
   
        <form class="contact-form" action="  " method="POST">
              <div class="form-group form-group-lg">
              
                 <div class="col-sm-10 input">
                    <input type="text" name="fname" class="form-control" placeholder="FirstName"  >
                 </div>
               </div>

               <div class="form-group form-group-lg">
                
                 <div class="col-sm-10 input">
                    <input type="text" name="lname" class="form-control" placeholder="LastName"  >
                 </div>
               </div>

               <div class="form-group form-group-lg">
                
                 <div class="col-sm-10 input">
                    <input type="Email" name="email" class="form-control" placeholder="Email"  >
                 </div>
               </div> 

               <div class="form-group form-group-lg">
                 
                 <div class="col-sm-10 input">
                    <input type="password" name="pass" class="form-control" placeholder="Password"  >
                 </div>
               </div> 
            
               <div class="form-group form-group-lg">
                 <div class="col-sm-10 submit">
                    <input type="submit" name="Submit" class="btn btn-primary btn-lg"  >
                 </div>
               </div> 
           
         
        </form>

  </div> 

        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custome.js"></script>
    </body>
</html>