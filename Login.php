<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <form class="form" action="Login_submit.php" method="POST">
            <table>
                <tr>
                    <td>
                        <h2>Đăng nhập</h2>
                    </td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td><input type="checkbox">Lưu</td>
                    <td>
                        <a href="">Quên mật khẩu</a>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" name="submit">Đăng nhập</button>
                        <button type="reset">Làm lại</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>