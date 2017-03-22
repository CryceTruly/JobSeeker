<?php   
require 'core/init.php';

if(isset($_POST['firstname'],$_POST['lastname'],$_POST['email'],$_POST['username'],$_POST['password'],$_POST['password_again'])){


  $errors = [];

//validate fname

  $fname=strip_tags(trim($_POST['firstname']));
  $sname=strip_tags(trim($_POST['lastname']));
  $email=strip_tags(trim($_POST['email']));
  $username=strip_tags(trim($_POST['username']));
  $password=strip_tags(trim($_POST['password']));
  $cpassword=strip_tags(trim($_POST['password_again']));
    if(empty($fname)){
    $errors=["firstname is required"];
  }
    if(strlen($fname)<3){
      $errors=["name should be atleast three characters long"];
    }
      if(eregi("([^A-Za-z0-9])",$fname)){
        $errors=["names should only be alphanumeric"];
      
    }



//validate fname


    if(empty($sname)){
    $errors=["Your lastname is required"];}
    if(strlen($sname)<3){
      $errors=["lastname should be atleast 3 characters long"];}
      if(eregi("([^A-Za-z0-9])",$sname)){
        $errors=["names should only be alphanumeric"];
      }




      //validate email


  if(empty($email)){
    $errors=["Your email is required"];}
           if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors=["please enter a valid email address"];
      }
  



  //validate username
  if(empty($username)){
    $errors=["Your username is required"];
  }
    if(strlen($username)<6){
      $errors=["username should be atleast 6 characters long"];}
    
               if(substr($username, 0,strrpos($username, ' '))){
                       $errors=["username should not contain a white space"];
                }
                $query="SELECT username FROM users WHERE username='$username'";
                $result=$handler->query($query);
               if($result->rowCount()){
                $errors=["sorry that username is already taken"];
               }

  

//password

if(empty($password)&&empty($cpassword)){
    $errors=["passwordfields are required"];
}
    if(strlen($password)<8 || strlen($cpassword)<8){
      $errors=["password should be atleast 8 characters long"];}

        if(($cpassword)==($password)){
              
              $hash=md5($password);
                    }else{
          $errors=["Your passwords donot match"];
        }

  if(count($errors)){
foreach ($errors as $er) {
  echo $er,"<br>";
}
  }else{
    

//register

    $sql="INSERT INTO users (first_name, last_name, email, username, password,joined) 
    VALUES (?,?,?,?,?,NOW())";
          $query=$handler->prepare($sql);
          if($query->execute(array(
          $fname,
          $sname,
          $email,
          $username,
          $hash
            ))){

            header("Location:login.php?res=".urlencode("account created successfuly"));
          exit();

          }else{
            echo "could not register your account please try again";
          }
}}


?>




