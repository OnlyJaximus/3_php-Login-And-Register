 <?php
    session_start();
    require "connection.php";

    if (isset($_POST['subBtn'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];

        //$sql = "SELECT * FROM users WHERE email = '$email' and password = '$password'";
        $sql = "SELECT id FROM users WHERE email = '$email' and password = '$password'";

        $query = mysqli_query($db, $sql);

        //  $result = mysqli_fetch_assoc($query);
        $id = mysqli_fetch_assoc($query);


        //var_dump($result['name']);  // string(7) "Branko "

        if ($id) {
            $_SESSION['id'] = $id;
            header('Location: index.php');
        } else {
            header("Location: login.view.php");
        }
    } else {
        header("Location: index.php");
    }



    ?>