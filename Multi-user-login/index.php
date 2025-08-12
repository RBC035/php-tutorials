<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
</head>
<body>
    <br><br>
    <center>
            <h2> Multiple login </h2>
            <div>
                <form action="login-handler.php" method="post">
                <div>
                    <label for="">username </label>
                        <input type="text" name="username" placeholder="Enter your user name">
                </div>
                <div>
                    <label for="">Password</label>
                        <input type="password" name="password" placeholder="Enter your  password">
                </div>

                <div>
                        <input type="submit" name="login" value="Login">
                </div>
                
                </form>
            </div>
    </center>
    <br><br>
<div><a href="../Basics">Home</a></div>
</body>
</html>