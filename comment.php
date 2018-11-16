<?php
	
//Connectie Details
$host ='localhost';
$user ='root';
$pass ='';
$dbse ='comments';
 
$conn= new mysqli($host, $user, $pass, $dbse);
if($conn->connect_errno){
    echo "Connection failed".$conn->connect_error;
    exit();
}
 
$post = "SELECT * FROM post ORDER BY id DESC";
$result = $conn->query($post);
 
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
       	echo '<div class=blog>';
		echo '<p class="content">';
		echo "Naam:"."&nbsp"."&nbsp";
		echo $row['auteur']. "<br>";
		echo "title:". "&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp";
		echo $row['title']. "<br>";
		echo "Tijd:"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp";
		echo $row['timestamp']."<br>";
        echo $row['content']."</p>";
		echo "</div>";
		
		
		
       
       
    }
}   else {
    echo "Er zijn geen comments";
    }

$conn->close();
?>