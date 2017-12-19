<?php 

//Dette sikrer os at brugeren ikke kan komme ind i signup ved at taste det i URL, men SKAL klikke på Sign Up knappen.
if(isset($_POST['submit'])){
	include_once 'db_con.php';
	$first = mysqli_real_escape_string($con, $_POST['first']); //Hvis folk skriver kode inde i input feltet, så sørger dette for at evt. kode bliver lavet om til sammesat tekst
	$last = mysqli_real_escape_string($con, $_POST['last']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$uid = mysqli_real_escape_string($con, $_POST['uid']);
	$pwd = mysqli_real_escape_string($con, $_POST['pwd']);
	
	
	
	//ERROR HANDLERS - Hvis brugeren taster forkert infomation ind
	//Tjek tomme felter
	if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)){
		header("Location: ../membership.php?membership=empty");
		exit();
	}else{
		//Tjek om input-tegene er valid --- Udrådstegnet gør at vi  tjekker om der IKKE er det nævnte tegn. Tjek altid for fejl før succes
		if(!preg_match("/^[a-zA-Z]*$/", $first) ||!preg_match("/^[a-zA-Z]*$/", $last)){
			header("Location: ../membership.php?membership=invalid"); //DET KAN VÆRE DENNE SKABER PROBLEMER. ÆNDRE EVT TIL SIGNUP=XXXXX
			exit();
		}else{
			//Check om email-tegene er valid
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				header("Location: ../membership.php?membership=email");
				exit();
			}else{
				//Dette sikrer os at der ikke er en bruger, som indtaster et brugernavn, som allerede eksisterer.
				$sql = "SELECT * FROM users WHERE user_uid='$uid'";
				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);
				if($resultCheck > 0){
					header("Location: ../membership.php?membership=usertaken");
					exit();
				}else{
					//HASHING password, som betyder at ingen kan se passwordet i databasen. Kun brugeren kender sit password.
					$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
					
					//Indsæt brugeren til databasen!!!!
					$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$hashedPwd');";
					mysqli_query($con, $sql);
					header("Location: ../membership.php?signup=success");
					exit();
					
					
				}
			}
		}
	
}
	} else {
	header("Location: ../signup.php");
	exit();
}