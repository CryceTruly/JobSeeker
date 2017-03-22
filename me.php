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

          	echo "account created successfuly";

          }else{
          	echo "could not register your account please try again";
          }

          