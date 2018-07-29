<?php  
session_start();
header('location:login.php');
    $con = mysqli_connect('localhost','root');
   if($con){
	   echo "connection successful";
   }
   else{
	   echo "no connection";
   }
   mysqli_select_db($con,'dreamhouse');  
   

                    $fname=$_POST['fname'];
                    $lname=$_POST['lname'];                 
                    $username=$_POST['username'];
                    $password=$_POST['password'];
					$password2=$_POST['password2'];
					$email=$_POST['email'];
					 $phone=$_POST['phone'];
					 
					  $q=" select * from customer where username= '$username' && password='$password' ";
					 $result=mysqli_query($con,$q);
					 $num=mysqli_num_rows($result);
					 if($num==1){
						 echo "duplicate data";
					 }
					 else{
        $sql=("INSERT INTO customer(fname,lname,username,password,password2,email,phone)
         VALUES ('$fname','$lname','$username','$password','$password2','$email','$phone')");
					mysqli_query($con,$sql);
			
   }?>
			