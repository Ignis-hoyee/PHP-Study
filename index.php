<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>测试用网页</title>
</head>
<style>
    h1
    {
        
    }
</style>
<body>
<h1>注册账号</h1>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <table border="0">
        <tr>
            <td>Username:</td>
            <td><input type="text" name="userID"><span style="color: red;">*</span></td>
            <td>Password:</td>
            <td><input type="password" name="password"><span style="color: red;">*</span></td>
        </tr>
        <tr>
            <td>Headshot:</td>
            <td><input type="file" name="file" id="file"></td>
        </tr>
        <tr>
            <td><input type="submit" value="submit"></td>
        </tr>
    </table>
</form>
</body>
</html>

