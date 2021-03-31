<?php include('server.php'); ?>
<DOCTYPE html>
    <html>

    <head>
        <title>User Registration System Using PHP And MySQL </title>
        <link rel="stylesheet" type="text/css" href="style.css">

    </head>

    <body>
        <div class="header">
            <h2>Register</h2>
        </div>
        <form method="post" action="register.php">
            <!-- display validation errors here -->
            <?php include('errors.php'); ?>
            <div class="input-group">
                <label>UserName</label>
                <input type="text" name="username" value="<?php echo $username; ?>" required>
            </div>
            <div class="input-group">
                <label>Email</label>
                <input type="text" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password_1" required>
            </div>
            <div class="input-group">
                <label>Confirm Password</label>
                <input type="password" name="password_2" required>
            </div>
            <div class="input-group">
                <button type="submit" name="register" class="btn">Register</button>
            </div>
            <p>
                Already A member? <a href="login.php">Sign in</a>
            </p>
        </form>
    </body>

    </html>