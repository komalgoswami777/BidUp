<?php

    $servername="localhost";
    $database="bidup";
    $username="root";
    $password="";

    $conn=mysqli_connect($servername,$username,$password,$database);

    if($conn->connect_error){
      die("connection failed: ".$conn->connect_error);
    }

/*
    if(isset($_POST['email'])&&isset($_POST['pass'])){


      function validate($data){

        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
      }

      $email=validate($_POST['email']);
      $pass=validate($_POST['pass']);

  $sql="select * from registration_master where email_id='$email'and password='$pass'";

  $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){

      $row=mysqli_fetch_assoc($result);
        if($row['email_id']===$email && $row['password']===$pass){

         echo '<script>
         alert("Logged in.....!!!");
         location.href="http://localhost/DE_Project/buy.html";
         </script>';
          $_SESSION['username']=$row['username'];
          $_SESSION['password']=$row['password'];
          header("location:file:buy.html");
          exit();
        }
        if($row['email_id']==="admin@gmail.com" && $row['password']==="admin"){
        '<script>
        location.href="http://localhost/crud%20operation/user-table.php";
        </script>';
        exit();

        }
        else{
        '<script>
        location.href="http://localhost/crud%20operation/user-table.php";
        </script>';

        
        exit();
        }
      }
    }*/

   $email=$_REQUEST['email'];
    $pass=$_REQUEST['pass'];

    if($email=='admin@gmail.com' && $pass=='admin'){
      echo '<script>
         alert("Welcome Admin.....");
         location.href="http://localhost/crud%20operation/user-table.php";
      </script>';
    }
    mysqli_close($conn);
?>
