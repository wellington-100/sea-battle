<? require_once 'lib.php'?>
<?
    $message = get_message($_GET);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SIGNUP</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    
<table class="match-table">
    <tr>
        <td><h1>SIGN UP</h1></td>
    </tr>
    <tr>
        <td>
            <?if ($message) {?>
                <p class="error"><?= $message ?></p>
            <?}?>
            <form action="/signup-action.php" method="POST">
                <input name="username" type="text" placeholder="username">
                <input name="password" type="password" placeholder="password">
                <input name="confirm_password" type="password" placeholder="confirm password">
                <p>do you have an account? <a href="/match.php">LOGIN</a></p>
                <button>SIGN UP</button>
            </form>
        </td>

    </tr>
</table>
</body>
</html>