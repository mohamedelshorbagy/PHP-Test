<?php

if(isset($_POST['submit'])) {
    $user = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];


    $user = filter_var($user , FILTER_SANITIZE_STRING);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $phone = filter_var($phone , FILTER_SANITIZE_NUMBER_INT);


    $conn = mysqli_connect('localhost','root','','first');

    $sql = "INSERT INTO register(name , email ,phone) VALUES('$user','$email','$phone')";

    $result = $conn->query($sql);




    



}






 ?>


<html>
<body>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="username" placeholder="Name" /><br />
        <input type="text" name="email" placeholder="email" /><br />
        <input type="text" name="phone" placeholder="phone" /><br />
        
        <button type="submit" name="submit">submit</button>


        
        
        </form>




</body>






</html>