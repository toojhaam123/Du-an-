<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form .input-box {
            padding: 10px;
        }
    </style>
</head>

<body>
    <form action="reg.php" method="post">
        <h2>Đăng ký</h2>
        <table>
            <tr>
                <td>
                    <label for="username">Username:</label>
                </td>
                <td><input type="text" id="username" name="username"></td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email:</label>
                </td>
                <td>
                    <input type="email" id="email" name="email">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">Mật khẩu</label>
                </td>
                <td>
                    <input type="password" name="password" id="password">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="btn_DangKy" value="Đăng ký">
                    <button type="reset" name="reset">Làm lại</button>
                </td>
            </tr>
        </table>
    </form>

</body>

</html>