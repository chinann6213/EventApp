<?php
session_start();

$user = $_SESSION['eventtap_usr'];

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "event_app";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (!isset($_POST['name']) || $_POST['name'] == "" || !isset($_POST['contact']) || $_POST['contact'] == "" || !isset($_POST['email']) || $_POST['email'] == "") {
    echo "ERROR: Please Fill In All The Required Fields!";
    exit();
}

$org_name = $_POST['name'];
$org_contact = $_POST['contact'];
if (preg_match('/[A-Za-z]/', $org_contact)) {
    echo "ERROR: Contact Number Must Contains Only Digits!";
    exit();
}
$org_email = $_POST['email'];
if (!filter_var($org_email, FILTER_VALIDATE_EMAIL)) {
    echo "ERROR: Invalid Email Format!";
    exit();
}

$logo_name = "";
if (!isset($_POST['logo'])) {
    $org_logo = null;
}
else {
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
}

$sql = "SELECT account FROM organizer WHERE account = '$user'";
$result = mysqli_query($conn, $sql);
$row = mysqli_num_rows($result);
if ($row > 0) {
    $sql = "UPDATE organizer SET logo='$logo_name', name='$org_name', contact='$org_contact', email='$org_email' WHERE account='$user'";
    if (mysqli_query($conn, $sql)) {
        echo "Info Updated";
        mysqli_close($conn);
    }
    else {
        echo mysqli_error($conn);
    }
} else {
    $sql = "INSERT INTO organizer (logo, name, contact, email, account) VALUES ('$logo_name', '$org_name', '$org_contact', '$org_email', '$user')";
    if (mysqli_query($conn, $sql)) {
        echo "Info Updated";
        mysqli_close($conn);
    }
    else {
        echo mysqli_error($conn);
    }
}
 ?>
