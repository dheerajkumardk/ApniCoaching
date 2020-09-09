<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "websitedb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $comment = $_POST['comment'];
    $plan = $_POST['plan'];


    $sql = "INSERT INTO contact(username, email, mobile, comment, plan) VALUES('$username','$email','$mobile','$comment','$plan')";

    if (mysqli_query($conn, $sql)) {
        // echo "New record created successfully";
?>
        <script>
            alert("New record created successfully");
            // location.href('insert.php');
            window.location.replace("index.php");
        </script>
<?php
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
