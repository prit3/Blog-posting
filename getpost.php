<?php
//Connectie Details
$host ='localhost';
$user ='root';
$pass ='';
$dbse ='comments';

$conn= new mysqli($host, $user, $pass, $dbse);

$auteur = $_POST["auteur"];
$title = $_POST["title"];
$post  = $_POST["comment"];
//$antwoord = $_POST["rekennummer"];
//$som = $_POST["antwoord"];
	
$sql = "INSERT INTO `post` (`id`, `auteur`, `title`, `content`, `timestamp`) VALUES (NULL, '$auteur', '$title', '$post', CURRENT_TIMESTAMP)";

if(isset($_POST['g-recaptcha-response'])){
          $captcha = $_POST['g-recaptcha-response'];
}

if(!$captcha){
          echo 'Please check the the captcha form.';
          exit;
}

// zins het local host is word dit stuk niet gebruikt

//$secretKey = "secret key";
//        $ip = $_SERVER['REMOTE_ADDR'];
//        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
//
//$responseKeys = json_decode($response,true);
//
//if(intval($responseKeys["success"]) !== 1) {
//          echo '<h2>You are spammer ! Get the @$%K out</h2>';
//        } else {
//          echo '<h2>Thanks for posting comment.</h2>';
//        }


if (!empty($_POST['title'])&& $_POST['auteur'] && $_POST['comment']){
	mysqli_query($conn, $sql);
	header("location:blogview.php");
}
else{
	echo "er ging wat fout";
	die;
	}


mysqli_close($conn);	

?>

//!empty($_POST['title'])&& $_POST['auteur'] && $_POST['comment']