<?php
if($_SERVER['REQUEST_METHOD']== "POST"  && isset($_POST['submit'])){
   include "config.php";
if( isset($_POST['email']) &&isset($_POST['password'])){

    $email = $_POST['email'];
    $password = $_POST['password'];
    // SELECT * FROM mess.user WHERE email = 'abdulmuneeb@gmail.com' AND password='abdul';
    $sql = "SELECT * FROM justicevoice.user WHERE email = '$email' AND password='$password';";
    // $sql = "INSERT INTO user(name, email , password ) VALUES ('$email','$password')";

   $result=mysqli_query($conn,$sql);
//    $num=mysqli_num_rows($result);
//    if($num==1){
//     $login=true;
//     session_start();
//     $_SESSION['loggedin']= true;
//     $_SESSION['email']= $email;
//     header("index.php");
//    } 
//  else{
//     echo '<script>alert("Incorrect Password!");</script>';
//  }


   if ($result->num_rows > 0) {
    // Step 3: Verify the password
    $row = $result->fetch_assoc();
    $storedPassword = $row['password']; // Assuming the password is stored in plain text

    if ($password === $storedPassword) {
        // Password is correct, log in the user
        echo '<script>alert("Entry successful!"); window.location.href = "index.html";</script>';
        // You can set session variables or redirect the user to a dashboard
    } else {
        // Password is incorrect
        echo '<script>alert("Incorrect Password!");</script>';
    }
} else {
    // User with the provided email does not exist
    echo "<script>alert('User Not Found');</script>";
}
    

}

}

?>