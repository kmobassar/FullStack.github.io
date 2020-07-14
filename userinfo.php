<?php 
   
   $con=mysqli_connect('localhost','root');

   if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
   }

   if($con){
       echo "connection is sucessfull\n";
   }
   else{
       echo "connnection Fault";
   }
   mysqli_select_db($con,'userinfodata');

   $user=$_POST['user'];
   $email=$_POST['email'];
   $mobile=$_POST['mobile'];
   $comment=$_POST['comment'];

   $query = "insert into userdata.userinfodata  (user,email,mobile,comment)      values('$user','$email','$mobile','$comment')";
   if(TRUE ===  mysqli_query($con,$query)){
       echo "successful query";
   } else {
    printf("Error: %s\n", mysqli_error($con));
   }
   echo "$query";
   
   
   mysqli_query($con,$query);
   //header('location:index.php');



?>
