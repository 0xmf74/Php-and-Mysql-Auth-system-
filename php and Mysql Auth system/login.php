<?php include('server.php'); ?>
<DOCTYPE html>
    <html>

    <head>
        <title>User Registration System Using PHP And MySQL </title>
        <link rel="stylesheet" type="text/css" href="style.css">

    </head>

    <body>
        <div class="header">
            <h2>Login</h2>
        </div>


        <form method="post" action="login.php">
            <!-- display validation errors here -->
            <?php include('errors.php'); ?>

            <div class="input-group">
                <label>username</label>
                <input type="text" name="username">
            </div>

            <div class="input-group">
                <label>password</label>
                <input type="password" name="password">
            </div>

            <div class="input-group">
                <button type="submit" name="Login " class="btn">Login</button>
            </div>
            <p>
                Not A member? <a href="regiseration.php">Sign up</a>
            </p>
        </form>
    </body>

    </html>