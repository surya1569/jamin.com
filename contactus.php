<?php  
session_start();
header('location:Dreamhouse.php');
    $con = mysqli_connect('localhost','root');
   if($con){
	   echo "connection successful";
   }
   else{
	   echo "no connection";
   }
   mysqli_select_db($con,'dreamhouse');  
   

                    $name=$_POST['name'];
                   
					$email=$_POST['email'];
					 $message=$_POST['message'];
					 
        $sql=("INSERT INTO contactus(name,email,message)
         VALUES ('$name','$email','$message')");
					mysqli_query($con,$sql);
			
   ?>
			