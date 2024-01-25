 <?php
if($_SERVER['REQUEST_METHOD']== "POST"  && isset($_POST['submit'])){
   include "config.php";
if(isset($_POST['name']) && isset($_POST['email']) &&isset($_POST['password'])){

    $firstname = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO user(name, email , password ) VALUES ('$firstname','$email','$password')";

   $result=mysqli_query($conn,$sql);
   // $result= $conn->query($sql);

    if($result){

        echo '<script>alert("Account is Created ,Entry successful!"); window.location.href = "index.html";</script>';
    }
    else{
        echo "ERROR Occured";
    }
    

}

}

?>