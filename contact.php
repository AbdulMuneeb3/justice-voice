
<?php
if($_SERVER['REQUEST_METHOD']== "POST"  && isset($_POST['submit'])){
   include "config.php";
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact(name , email , message ) VALUES ('$name','$email','$message')";

   $result=mysqli_query($conn,$sql);
   // $result= $conn->query($sql);

    if($result){

        echo '<script>alert("Entry successful!"); window.location.href = "index.html";</script>';
    }
    else{
        echo "ERROR Occured";
    }
    

}

}
?>