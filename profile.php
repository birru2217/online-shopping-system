<?php
session_start();
include "db.php";

if(!isset($_SESSION["uid"])){
    header("location:index.php");
}

$uid = $_SESSION["uid"];
$sql = "SELECT * FROM user_info WHERE user_id='$uid'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
?>

<h2>My Profile</h2>

<form method="POST">
<input type="text" name="name" value="<?php echo $row['first_name']; ?>"><br>
<input type="email" name="email" value="<?php echo $row['email']; ?>"><br>
<button name="update">Update</button>
</form>

<?php
if(isset($_POST['update'])){
    $name = $_POST['name'];
    $email = $_POST['email'];

    $update = "UPDATE user_info SET first_name='$name', email='$email' WHERE user_id='$uid'";
    mysqli_query($con,$update);

    echo "Updated successfully!";
}
?>