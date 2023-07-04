<html lang="en">
<head>
    <title>Signup</title>
</head>
<body>
        <form method="post" action="../controller/regCheck.php" enctype="multipart/form-data">
            <fieldset>
                <legend>Register</legend>
                <table>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" value=""></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" value=""></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" value=""></td>
                    </tr>
                    <tr>
                        <td>Image</td>
                        <td><input type="file" name="myfile" value=""></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="submit" value="Singup">
                            <a href="login.php">Login </a>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
</body>
</html>