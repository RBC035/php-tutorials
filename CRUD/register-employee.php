<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register employee</title>
</head>
<body>
    <div>
        <form action="add-employee.php" method="post">
            <input type="text" name="regNo"  placeholder="Enter your regno"> <br>
            <input type="text" name="first" placeholder="Enter your first name"> <br>
            <input type="text" name="last" placeholder="Enter your last name"> <br>
            <input type="tel" name="phone" placeholder="Enter your phone number"> <br>
            <select name="gender">
                <option value="Null">Select gender</option>
                <option value="F">Female</option>
                <option value="M">Male</option>
            </select><br>
            <input type="text" name="address" placeholder="Enter your address"> <br>
            <input type="submit" name="register" value="register employee">
        </form>
    </div>
   
</body>
</html>