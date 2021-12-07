   <?php

   $conn =mysqli_connect("localhost","root","","dev_bugger");

   if(isset($_POST['submit'])){

      $name=$_POST['name'];
      $phone=$_POST['phone'];
      $email=$_POST['email'];
      $gender=$_POST['gender'];
      $password=md5($_POST['password']);
      $dup_pass=$_POST['password'];
      $current_year=$_POST['current_year'];
      $branch = $_POST['branch'];
      $field=$_POST['field'];

      $sql = "INSERT INTO user(name,email,gender,mob,password,dup_password,year,branch,field_instereseted_in)VALUES('{$name}','{$email}','{$gender}','{$phone}','{$password}','{$dup_pass}','{$current_year}','{$branch}','{$field}')";
      $result=mysqli_query($conn,$sql);
      if($result)
      {
         echo "Success";
      }
      else{
         echo "Failed";
      }
   }
