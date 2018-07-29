 <?php  
session_start();

    $con = mysqli_connect('localhost','root');
   if($con){
	   echo "connection successful";
   }
   else{
	   echo "no connection";
   }
   mysqli_select_db($con,'dreamhouse');  
   
              
                    $username=$_POST['username'];
                    $password=$_POST['password'];
				
					 
					  $q=" select * from customer where username= '$username' && password='$password' ";
					 $result=mysqli_query($con,$q);
					 $num=mysqli_num_rows($result);
					 if($num==1){
						$_SESSION['username']=$username;
						header('location:jamin.php');
					 }
					 else{
						 header('location:login.php');
					 }
						 
       
					mysqli_query($con,$sql);
			
   ?>
			