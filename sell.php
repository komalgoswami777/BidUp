<?php
  $conn=mysqli_connect("localhost","root","","bidup");
  if($conn->connect_error){
  	die("connection failed:".$conn->connect_error);
  }
  $name=$_REQUEST['name'];
  $detail=$_REQUEST['detail'];
  $category=$_REQUEST['category'];
  $minbid=$_REQUEST['minbid'];
  $date=$_REQUEST['date'];
  $time=$_REQUEST['time'];
  $pic_name=$_FILES["pic"]["name"];
  $tmp_name=$_FILES["pic"]["tmp_name"];
  $folder="images/".$pic_name;

  move_uploaded_file($tmp_name, $folder);

  $sql="INSERT INTO product (name,detail,category,minbid,date,time,pic_name)VALUES ('$name','$detail',
  	'$category','$minbid','$date','$time','$folder')";

  if(mysqli_query($conn,$sql)){
  	 echo '<script>
         alert("Your Product Uploaded successfully.");
         location.href="http://localhost/DE_Project/buy.html";
      </script>';
  }
  else{
  	echo "ERROR: Hush !sorry $sql.".mysqli_error($conn);
  }
   mysqli_close($conn);

?>
