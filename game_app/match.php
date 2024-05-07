<?
// match logic

if (empty($_GET) && empty($_POST)) {
    // 1. no data in request --> new match
    $new_match = false;
} else {
    //2. match_id in request --> existing match
    $new_match = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MATCH</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    
<table class="match-table">
    <tr>
        <td colspan="2"><h1>NEW MATCH</h1></td>
    </tr>
    <tr>
        <td><h2>Player 1</h2></td>
        <td><h2>Player 2</h2></td>
    </tr>
    <tr>
        <td>
            <form action="/login-action.php" method="POST">
                <input name="username" type="text" placeholder="username">
                <input name="password" type="password" placeholder="password">
                <p>no account? <a href="/signup.php">create one</a></p>
                <button>Enter</button>
            </form>
        </td>
        <td>
            <form action="/login-action.php" method="POST">
                <input name="username" type="text" placeholder="username">
                <input name="password" type="password" placeholder="password">
                <p>no account? <a href="/signup.php">create one</a></p>
                <button>Enter</button>
            </form>
        </td>
    </tr>
</table>
</body>
</html>