<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP form</title>
</head>
<body>
    <br><br>
    <div>
        <form action="form-handler.php" method="post">
           <div>
            <label for="">Full name</label>
                <input type="text" name="full" placeholder="Enter your full name">
           </div>
           <div>
            <label for="">EAddress</label>
                <input type="text" name="address" placeholder="Enter your  address">
           </div>
           <div>
            <label for="">Email address</label>
                <input type="email" name="email" placeholder="Enter your email address">
           </div>
           <div>
            <label for="">Phone number</label>
                <input type="text" name="phone" placeholder="Enter your phone number">
           </div>
           <div>
                <input type="submit" name="formSaved" value="submit">
           </div>
        </form>
    </div>
    <br><br>
<div><a href="index.php">Home</a></div>
</body>
</html>