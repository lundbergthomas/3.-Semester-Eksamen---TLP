<?php

session_start();

if (isset($_POST['submit'])){
	$_SESSION['id'] = 1;
	header("Location: userlandingpage.php");
	include_once 'db_con.php';
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$pwd = mysqli_real_escape_string($con, $_POST['pwd']);
	
	//Error handlers
//Tjek for tomme felter
	if(empty($email) || empty($pwd)){
		header("Location: ../index.php)login=empty");
			exit();
	}else {
		$sql = "SELECT * FROM users WHERE user_email='$email'";
		$result = mysqli_query($con, $sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck < 1){
			header("Location: ../index.php)login=error");
			exit();
		}else {
			if($row = mysqli_fetch_assoc($result)){
				//De-hashing password
				$hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
				if($hashedPwdCheck == false){
					header("Location: ../index.php)login=error");
					exit();
				}elseif($hashedPwdCheck == true){
					//Login brugeren her
				$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_first'] = $row['user_first'];
					$_SESSION['u_last'] = $row['user_last'];
					$_SESSION['u_email'] = $row['user_email'];
					$_SESSION['u_uid'] = $row['user_uid'];
					header("Location: ../userlandingpage.php?login=success");
					exit();
				}
			}
		}
	}
}else{
	header("Location: ../index.php)login=error");
	exit();
}
  include_once 'db_con.php';

  $first = $_POST['first'];
  $last = $_POST['last'];
  $uid = $_POST['uid'];
  $pwd = $_POST['pwd'];

  //First we sign up the user
  $sql = "INSERT INTO users (first, last, username, password)
    VALUES ('$first', '$last', '$uid', '$pwd')";
  $result = mysqli_query($con, $sql);

  //Then we check if we could find the user in the database, if not we let them know that there is an error
  $sql = "SELECT * FROM users WHERE username='$uid' AND first='$first'";
  $result = mysqli_query($con, $sql);
  //Here we check if the user exists in the database
  if (mysqli_num_rows($result) > 0) {
    //If they do, then we create them a default profile image
    if ($row = mysqli_fetch_assoc($result)) {
      $userId = $row['id'];
      //Here we create a default image for the user since they haven't uploaded one yet themselves
      //Setting the status to "1" means that the user has not uploaded their own profile image
      $sql = "INSERT INTO profileimg (userid, status)
        VALUES ('$userId', 1)";
      mysqli_query($con, $sql);
      header("Location: ../index.php");
    }
  }
  else {
    echo "You have an error!";
  }


