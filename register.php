 <?php
    require "connection.php";

    if (isset($_POST['subBtn'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];


        $sql = "INSERT INTO users VALUES (NULL, '$name', '$email','$password')";

        $query = mysqli_query($db, $sql);


        header("Location: login.view.php");
    } else {
        header("Location: index.php");
    }

    ?>