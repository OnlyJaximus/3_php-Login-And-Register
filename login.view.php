<?php require "partials/head.php" ?>

<?php require "partials/navbar.php" ?>

<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <h2>Login</h2>
            <form action="login.php" method="POST">
                <input type="email" name="email" placeholder="email" class="form-control"><br>
                <input type="password" name="password" placeholder="password" class="form-control"><br>
                <button type="subBtn" name="subBtn" class="btn btn-info form-control">Login</button>
            </form>
        </div>
    </div>
</div>

<?php require "partials/footer.php" ?>