<?php
session_start();

$user = "chinann6213@gmail.com"; // $_SESSION['user'];

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "event_app";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$org_name = $_POST['name'];
$org_contact = $_POST['contact'];
$org_email = $_POST['email'];
$org_logo = $_POST['logo'];

$dir = "images/";
$logo_name = $dir . md5(time().uniqid()).".jpg";
$ifp = fopen( "../".$logo_name, 'wb' );
// split the string on commas
// $data[ 0 ] == "data:image/png;base64"
// $data[ 1 ] == <actual base64 string>
$data = explode( ',', $org_logo );
// we could add validation here with ensuring count( $data ) > 1
fwrite( $ifp, base64_decode( $data[ 1 ] ) );
// clean up the file resource
fclose( $ifp );

$sql = "INSERT INTO organizer (logo, name, contact, email, account) VALUES ('$logo_name', '$org_name', '$org_contact', '$org_email', '$user')";
if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
}
else {
    echo mysqli_error($conn);
}
 ?>
