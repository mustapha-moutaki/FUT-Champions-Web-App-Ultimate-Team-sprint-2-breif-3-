
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "players_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// $name = $_POST['name'];
if (isset($_POST["Insert"])) {
  // $name = $_POST['name'];
  echo "----------------------------------------Connected successfully-------------------";
  $stmt = $conn->prepare("insert into players(name, position)
  values('DD','gk')");
  $stmt->execute();
  echo "----------------------------------------Player inserted successfully-------------------";
  
}
$photo = $_POST['photo'] ?? null;
$nationality = $_POST['nationality'] ?? null;
// $country_name = $_POST['country'] ?? null;
// $flag = $_POST['flag'] ?? null;
// $position = $_POST['position'] ?? null;
if (isset($_POST['position'])) {
  $position = $_POST['position'];
} else {
  $position = "undifined position"; //   
}
// $club_name = $_POST['club'] ?? null;
// $club_id = $_POST['club_id'] ?? null;
// $clubphoto = $_POST['clubphoto'] ?? null;

// $rating = $_POST['rating'] ?? null;
// $diving = $_POST['diving'] ?? null;
// $handling = $_POST['handling'] ?? null;
// $kicking = $_POST['kicking'] ?? null;
// $reflexes = $_POST['reflexes'] ?? null;
// $speed = $_POST['speed'] ?? null;
// $passing = $_POST['passing'] ?? null;

// $pace = $_POST['pace'] ?? null;
// $shooting = $_POST['shooting'] ?? null;
// $dribbling = $_POST['dribbling'] ?? null;
// $defending = $_POST['defending'] ?? null;
// $physical = $_POST['physical'] ?? null;





// Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }else{
//   echo "----------------------------------------Connected successfully-------------------";
//   $stmt = $conn->prepare("insert into players(name, position)
//   values('$name','$position')");
//   // $sql = insert into players(name, photo, position)
//   //if($conn -> query($sql) === TRUE){

//   //}
//   // $stmt->bind_param("ss", $name, $position);
//   $stmt->execute();
//   echo "----------------------------------------Player inserted successfully-------------------";
//   $stmt->close();
// }


// GETINF ALL DATA
$sql = 'SELECT name , position , player_id FROM players';

// got result
$result = mysqli_query($conn, $sql);

//fetch the resulting rowa as an array
  $players = mysqli_fetch_all($result, MYSQLI_ASSOC);

  // free result from memory some we don't need conexion
  mysqli_free_result($result);

// Close the connection


  print_r($players);
  // $conn->close();
  // $stmt->close();

?>
